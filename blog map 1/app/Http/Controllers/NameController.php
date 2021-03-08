<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;


class NameController extends controller
{
  public function __construct() {
    $this->middleware('auth');
  }
    public function Edit(){

    $user = Auth::user();
    return view('/password', compact('user'));
  }

  public function update(Request $request, $id){

    $this->validate($request, [
      'UserName' => 'required',
    ]);

    $user = User::findOrFail($id);
    $user->name = request()->input('UserName');
    $user->save();

    return redirect()->route('home')->with('succes','UserName changed!');
  }
}
