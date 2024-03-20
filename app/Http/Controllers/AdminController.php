<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // function index(){
    //     // return view('admin');
    // }
    function admin(){
        return view('admin');
        // echo "Halo, selamat datang admin!";
        // echo "<h1>".Auth::user()->name."</h1>";
        // echo "<a href='/logout'>Logout</a>";
    }
    function user(){
        echo "Halo, selamat datang user!";
        echo "<h1>".Auth::user()->name."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }
    function guru(){
        echo "Halo, selamat datang guru!";
        echo "<h1>".Auth::user()->name."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }
}
