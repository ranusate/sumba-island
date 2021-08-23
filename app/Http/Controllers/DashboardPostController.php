<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('dashboard.post.index', [
            "posts" => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {

        return view('dashboard.post.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Request
     */
    public function store(Request $request): Request
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\post $post
     * @return Application|Factory|View
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\post $post
     * @return post
     */
    public function edit(Post $post): post
    {
        return $post;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\Models\post $post
     * @return Request
     */
    public function update(Request $request, post $post): Request
    {
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\post $post
     * @return post
     */
    public function destroy(Post $post): post
    {
        return $post;
    }
}