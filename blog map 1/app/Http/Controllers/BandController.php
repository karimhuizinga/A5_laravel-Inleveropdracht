<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;
use App\Models\User;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $user_id = $request->user;
      $keyword = $request->keyword;
      if (isset($user_id)) {
        //select * from bands join band_user on bands.id=band_user.band_id where band_user.user_id = 16
        $bands = Band::myBands($user_id);
        // Band::where('id', '=', '999')->get();
      } else
      if (isset($keyword)) {
        $bands = Band::where('name', 'Like', "%$keyword%")->get();
      } else {
        $bands = Band::all();
      }
        return (view('bands.index', compact('bands')));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bands.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([
              'name'=>'required'
          ]);
          // Handle File Upload
          if($request->hasFile('imgname')) {
                // Get filename with extension
              $filenameWithExt = $request->file('imgname')->getClientOriginalName();
              // Get just filename
              $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
             // Get just ext
              $extension = $request->file('imgname')->getClientOriginalExtension();
              //Filename to store
              $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
              $path = $request->file('imgname')-> storeAs('public/cover_images', $fileNameToStore);
          } else {
              $fileNameToStore = 'TestBand.png';
          }
          $band = Band::create($request->all());
          $band->imgname = $fileNameToStore;
          $band->save();

          //$text = Input::get('textarea');
          return redirect()->route('bands.index')
          ->with('success', 'Band is toegevoegd');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Band $band)
    {
      return view('bands.show', compact('band'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function edit(Band $band)
     {
       return view('bands.edit', compact('band'));
     }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Band $band)
    {
      $request->validate([
        'name'=>'required',
        'imgname'=>'required',
        'admins'=>'required',
        'band_leden'=>'required',
        'band_omschrijving'=>'required',
        'band_achtergrond_kleur'=>'required',
        'band_letter_kleur'=>'required',
        'youtube_video1'=>'required',
        'youtube_video2'=>'required',
        'youtube_video3'=>'required'
          ]);
          $band->update($request->all());
            $admin_user = User::where('name', $request->input('admins'))->first();
            if (!is_null($admin_user) ) {
              $band->users()->save($admin_user);
              $band->save();
            }
          return redirect('/bands')->with('success', 'band
          updated!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Band $band)
    {
      // $contact = Contact::find($id);
      $band->delete();

      return redirect('/bands')->with('success', 'Band is verwijderd!');
    }
}
