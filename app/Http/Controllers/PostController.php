<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{


    /**
     * Show all of the post for the application.
     *
     * @return void
     */
    public function index()
    {
        return view('posts', [
            'title' => 'All Post',
            'name' => 'Ranus',
            'active' => 'posts',
            // 'posts' => Post::latest();
            'posts' => Post::latest()->get()
        ]);
    }


    /**
     * show of the post by param.
     *
     * @param  mixed $post
     * @return void
     */
    public function show(Post $post)
    {
        return view(
            'post',
            [
                'active' => 'posts',
                'title' => 'Single Post',
                'post' => $post
            ]
        );
    }
}
