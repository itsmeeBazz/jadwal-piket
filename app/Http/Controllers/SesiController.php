<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        // echo 'Hallo';
        return view('login');
    }
    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi',
        ]);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'admin') {
                return redirect("/admin");
            }
            elseif(Auth::user()->role == 'user') {
                return redirect("/user");
            }
            elseif(Auth::user()->role == 'guru') {
                return redirect("/guru");
            }
        }else {
            return redirect("")->withErrors('Username atau Password yang anda masukkan salah')->withInput();
        };
        // $email = $request->input('email');
        // $password = $request->input('password');
        // if($email == 'admin' && $password == 'admin'){
        // }
    }

    function logout(){
        Auth::logout();
        return redirect("/");
    }
}
