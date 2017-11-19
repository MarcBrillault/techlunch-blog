<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($id)
    {
        $post = Post::where('id', $id)->firstOrFail();

        return view('post', [
            'post' => $post,
        ]);
    }
}
