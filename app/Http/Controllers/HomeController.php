<?php

namespace App\Http\Controllers;

use App\Post;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::all();

        return view('home', [
            'posts' => $posts,
        ]);
    }
}
