<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\User;


class SignupController extends Controller
{
    public function signup(Request $request) {
      if ($request->isMethod('post')) {
        $data = $request->input();
        $user = DB::table('users') -> where('email', $data['email']) -> first();
        if (empty($user)) {
          User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'remember_token' => str_random(10),     // No guarda token  ¯\_(ツ)_/¯
          ]);

          return redirect('/signin');

        } else {

          return redirect('/signup') -> with('flash_message_error', 'El Email ingresado ya existe.');

        }
      }

        return view('signup');
      }

}
