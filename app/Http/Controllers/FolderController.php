<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Photos;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $folders = Folder::orderBy('id', 'DESC')->get();

      if($folders->isEmpty()) {
        $folders = null;
      }

      return view('backend.dashboard', array(
        'folders' => $folders
      ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send($id)
    {

      $folder = Folder::find($id);

      $name = preg_replace('/\s+/', '', $folder->username);
      $name = strtolower($name);

      $path = public_path('storage/'.$folder->folder_zip. '/'.$name.'.zip');

      $array = array('name' => $folder->username, 'email' => $folder->email, 'subject' => 'Thank you for ordering your photos', 'from' => 'info@gerrieturksma.com', 'attach' => $path);

      //Sent new user email for activation
      \Mail::send('emails.notification', $array,
      function($message) use ($array) {
        $message->to( $array['email'] )->from( $array['from'],  'Gerrie' )->subject($array['subject'])->attach($array['attach']);
      });

      $folder->send = 1;
      $folder->save();

      \Session::flash('success', 'Bestanden zijn verstuurd.');

      return redirect('/cp/overview');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $folder = Folder::find($id);
        $photos = Photos::where('folder_id', $id)->get();

        return view('backend.show', array(
          'folder' => $folder,
          'photos' => $photos
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function edit(Folder $folder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Folder $folder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $folder = Folder::find($id);

      $name = preg_replace('/\s+/', '', $folder->username);
      $name = strtolower($name);

      $date = $folder->created_at->format('Y-m-d-H:i');

      $foldername = $date.'/'.$name;

      $photos = Photos::where('folder_id', $id)->get();

      foreach($photos as $i) {
        $i->delete();
      }
      \Storage::deleteDirectory('public/'.$foldername); //delete from storage

      $folder->delete();


      \Session::flash('success', 'Bestanden zijn verwijderd.');

      return redirect('/cp/overview');
    }
}
