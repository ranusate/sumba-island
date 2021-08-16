<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{


    /**
     * Show all of the post for the application.
     *
     * @return void
     */
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = " in " . $category->name;
        }
        if (request('author')) {
            $user = User::firstWhere('username', request('author'));
            $title = $user->name;
        }
        return view('posts', [
            'title' => 'Postingan' . $title,
            'name' => 'Ranus',
            'active' => 'posts',
            // 'posts' => Post::latest();
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
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
                'title' => 'Postingan',
                'post' => $post
            ]
        );
    }
}
