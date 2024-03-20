<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('home', [
            'posts' => Post::orderBy('title', 'featured_image')->get(),
        ]);
    }

    // public function berita()
    // {
    //     return view('berita.berita', [
    //         'artikels' => Blog::orderBy('id', 'desc')->paginate(3)
    //     ]);
    // }

    // public function more()
    // {
    //     return view('videos.video', [
    //         'more' => Video::orderBy('id', 'desc')->paginate(3)
    //     ]);
    // }

    // public function detail($slug)
    // {
    //     $artikel = Blog::where('slug', $slug)->first();
    //     return view('berita.detail', [
    //         'artikel' => $artikel
    //     ]);
    // }
}
