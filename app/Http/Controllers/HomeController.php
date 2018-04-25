<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Auth;
use Carbon\Carbon;

use App\Folder;
use App\Photos;
use App\Portfolio;

use Nexmo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = date('Y-m-d-H:i');

        $folders = Folder::where('remove_date', '<=', $date)->get();

        if(!$folders->isEmpty())
        {
          foreach($folders as $folder)
          {
            $name = preg_replace('/\s+/', '', $folder->username);
            $name = strtolower($name);

            $date = $folder->created_at->format('Y-m-d-H:i');

            $foldername = $date.'/'.$name;

            $photos = Photos::where('folder_id', $folder->id)->get();

            foreach($photos as $i) {
              $i->delete();
            }
            \Storage::deleteDirectory('public/'.$foldername); //delete from storage

            $folder->delete();

          }
        }

        $folders = Folder::all();
        if($folders->isEmpty())
        {
          $folders = null;
        }

        // Nexmo::message()->send([
        //     'to'   => '31648582651',
        //     'from' => '31648582651',
        //     'text' => 'Using the facade to send a message.'
        // ]);

        return view('backend.dashboard', array(
          'folders' => $folders
        ));
    }

    public function create()
    {
        return view('backend.store');
    }

    public function store(Request $request) {
      $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'name' => 'required',
        'thumb' => '',
        'photo' => 'required',
      ]);

      $name = preg_replace('/\s+/', '', $request->name);
      $name = strtolower($name);

      $date = date('Y-m-d-H:i');

      \Storage::makeDirectory('public/'.$date.'/'.$name.'/images');
      \Storage::makeDirectory('public/'.$date.'/'.$name.'/zip');

      $folder = new Folder;
      $folder->username = $request->name;
      $folder->email = $request->email;
      $folder->folder_name = $date.'/'.$name.'/images';
      $folder->folder_zip = $date.'/'.$name.'/zip';
      $folder->count_photos = 0;
      $folder->remove_date = date('Y-m-d', strtotime('+14 days'));
      $folder->save();

      // Get the last inserted folder with the requested email
      $folder = Folder::where('email', $request->email)->orderBy('id', 'DESC')->first();

      $count = 0;

      $files = $request->file('photo');
      foreach($files as $i) {
        $filename = time()  . $count . '.' . $i->getClientOriginalExtension();
        $path = storage_path('public/'.$date.'/'.$name.'/images');
        $img = \Image::make($i->getRealPath());

        $img->stream();

        \Storage::put('public/'.$date.'/'.$name.'/images/'.$filename, $img);

        // Create new Photos
        $photo = new Photos;
        $photo->name = $filename;
        $photo->folder_id = $folder->id;
        $photo->created_at = Carbon::now();
        $photo->save();

        $count++;
      }

      $folder->count_photos = $count;
      $folder->save();

      // Create Thumbnail for the website
      $thumb = $request->file('thumb');
      if($thumb) {
        $filename = time()  . 'thumb.' . $thumb->getClientOriginalExtension();
        $path = storage_path('public/thumbnail');
        $img = \Image::make($thumb->getRealPath());

        $img->stream();

        \Storage::put('public/thumbnail/'.$filename, $img);

        // Create new Thumbnail
        $thumbnail = new Portfolio;
        $thumbnail->thumbnail = $filename;
        $thumbnail->save();
      }

      $path = storage_path('app/public/'.$date.'/'.$name.'/zip/'.$name);
      $files = glob(storage_path('app/public/'.$date.'/'.$name.'/images'));

      \Zipper::make($path.'.zip')->add($files)->close();

      if($path.'.zip') {
        \Session::flash('success', 'Upload successfully');

        //TODO
        // See whats more easy. Sending the photos directly or show them first
        /*
        $path = public_path('storage/'.$date.'/'.$name.'/zip/'.$name.'.zip');

        $array = array('name' => $request->name, 'email' => $request->email, 'subject' => 'Thank you for ordering your photos', 'from' => 'info@gerrieturksma.com', 'attach' => $path);

        //Sent new user email for activation
        \Mail::send('emails.notification', $array,
        function($message) use ($array) {
          $message->to( $array['email'] )->from( $array['from'],  'Gerrie' )->subject($array['subject'])->attach($array['attach']);
        });
        */
      } else {
        \Session::flash('failed', 'Bestanden konden niet worden geupload');
      }

      return redirect('/cp/overview');
    }

    public function storeProfile(Request $request) {
      $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required_with:new_password|different:confirm_password|nullable',
        'new_password' => 'required_with:password|different:password|same:confirm_password|nullable',
        'confirm_password' => 'required_with:password|different:password|same:new_password|nullable',
      ]);

      if($validator->fails()) {
        return \Redirect::back()->withInput()->withErrors($validator);
      }

      $user = Auth::user();
      // Compare if passwords match

      $user->name = $request->name;
      $user->email = $request->email;
      if($request->new_password == $request->confirm_password && $request->password != '') {
        if (!\Hash::check($request->password, $user->password)) {
          $validator->getMessageBag()->add('password_check', 'Het huidige wachtwoord komt niet overeen.');
          return \Redirect::back()->withInput()->withErrors($validator);
        }
        $user->password = \Hash::make($request->new_password);
      }
      $user->save();

      \Session::flash('success', 'Profiel is bijgewerkt.');

      return \Redirect::back();
    }
}
