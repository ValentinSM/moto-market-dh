<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SigninController extends Controller
{
    public function signin(Request $request) {
      if ($request->isMethod('post')) {
        $data = $request->input();
        if (Auth::attempt([
            'email' => $data['email'],
            'password' => $data['password']
          ]))

            {

          return redirect('/');

        } else {

          return redirect('/signin')->with('flash_message_error', 'Usuario o contraseña invalidos.');

        }
      }
      return view('signin');
    }

    public function logoutuser() {
      Auth::logout();
      return redirect('/');
    }
}
