<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;


class PasswordController extends Controller
  {
  public function __construct() {
    $this->middleware('auth');
  }
  public function edit() {

    $user = Auth::user();
    return view('/password', compact('user'));
  }

  public function update(Request $request, $id)
    {
    $this->validate($request, [
      'old_password' => 'required',
      'password' => 'required',
      'controle_password' => 'required|same:password'
    ]);

    $user = User::findOrFail($id);
    $user->password = bcrypt($request->password);
    $user->save();

    return redirect()->route('home')->with('succes','password changed!');
  }
}
