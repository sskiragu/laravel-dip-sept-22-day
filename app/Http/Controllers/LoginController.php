<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('username', 'password');
        
        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }else{
            return redirect('/login')->with('failed', 'Wrong Credetials');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
