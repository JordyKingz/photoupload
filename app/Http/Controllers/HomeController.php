<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Auth;

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
        return view('homepage');
    }

    public function store(Request $request) {
      $validator = Validator::make($request->all(), [
        'email' => 'required',
        'name' => 'required',
        'photo' => 'required',
      ]);

      $name = preg_replace('/\s+/', '', $request->name);
      $name = strtolower($name);

      $date = Date('Y-m-d-H:i');

      \Storage::makeDirectory('public/'.$date.'/'.$name.'/images');
      \Storage::makeDirectory('public/'.$date.'/'.$name.'/zip');

      foreach($request->photo as $i) {
        $filename = time() . '.' . $i->getClientOriginalExtension();
        $img = \Image::make($i->getRealPath());
        \Storage::put('public/'.$date.'/'.$name.'/images/'.$filename, $img);
      }

      $path = storage_path('app/public/'.$date.'/'.$name.'/zip/'.$name);
      $files = glob(storage_path('app/public/'.$date.'/'.$name.'/images'));

      \Zipper::make($path.'.zip')->add($files)->close();

      if($path.'.zip') {
        \Session::flash('success', 'Upload successfully');

        $path = public_path('storage/'.$date.'/'.$name.'/zip/'.$name.'.zip');

        $array = array('name' => $request->name, 'email' => $request->email, 'subject' => 'Thank you for ordering your photos', 'from' => 'info@gerrieturksma.com', 'attach' => $path);

        //Sent new user email for activation
        \Mail::send('emails.notification', $array,
        function($message) use ($array) {
          $message->to( $array['email'] )->from( $array['from'],  'Gerrie' )->subject($array['subject'])->attach($array['attach']);
        });
      } else {
        \Session::flash('failed', 'Bestanden konden niet worden geupload');
      }

      return $this->index();
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
