<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;

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

        return view('dashboard.post.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {

        $validate = $request->validate(
            [
                'title' => 'required|max:255',
                'slug' => 'required|min:3|max:255|unique:posts',
                'category_id' => 'required',
                'body' => 'required'
            ]
        );

        $validate['user_id'] = Auth()->user()->id;
        $validate['excerpt'] = Str::limit(strip_tags($request->body), 20);
        if ($validate) {
            Post::create($validate);
        }
        return redirect('dashboard/post')->with('success', 'New post has ben added');
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

    public function checkSlug(Request  $request): JsonResponse
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
