<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request){
        // jika user memiliki auth session maka dapat login, jika tidak akan redirect ke halaman login
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/halaman-satu');
        }
        return redirect ('login');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
