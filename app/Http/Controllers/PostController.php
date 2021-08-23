<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{


    /**
     * Show all of the post for the application.
     *
     * @return Application|Factory|View
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
            'title' => 'Posting' . $title,
            'name' => 'Ranus',
            // 'posts' => Post::latest();
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString()
        ]);
    }


    /**
     * show of the post by param.
     *
     * @param mixed $post To store the Post model
     * @return Application|Factory|View
     */
    public function show(Post $post)
    {
        return view(
            'post',
            [
                'title' => 'Posting',
                'post' => $post
            ]
        );
    }
}
