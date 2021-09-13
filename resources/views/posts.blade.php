@extends('layouts.main')

@section('container')
<h1 class="mb-5 text-center"> {{$title}}</h1>
<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts">
            @if (request('category'))
            <input type="hidden" name="category" value="{{request('category')}}">
            @endif
            @if (request('author'))
            <input type="hidden" name="author" value="{{request('author')}}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." value="{{request('search')}}" name="search">
                <div class="input-group-append">
                    <button class="btn btn-dark" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())
<div class="card mb-3">
    <div class="img d-flex" style="max-height:350px; overflow: hidden; background-image: cover;">
        @if ($posts[0]->image)
        <img src="{{asset('storage/'. $posts[0]->image)}}" alt="">
        @else
        <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
        @endif
    </div>
    <div class="card-body text-center">
        <h3 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none  text-dark ">{{ $posts[0]->title }}</a></h3>
        <p>
            <small class="text-muted">Posting By. <a href="/posts?author={{ $posts[0]->user->username }}" class="text-decoration-none ">{{ $posts[0]->user->name }} </a> in
                <a href='/posts?category={{ $posts[0]->category->slug}}' class="text-decoration-none"> {{$posts[0]->category->name}}</a>
            </small> {{ $posts[0]->created_at->diffForHumans() }}
        </p>
        <p class="card-text">{{ $posts[0]->title }}</p>
        <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-dark">Read More..</a>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post )
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="positon-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7);">
                    <a href='/posts?category={{ $post->category->slug}}' class="text-decoration-none text-white">{{$post->category->name}}</a>
                </div>
                <div class="img" style="max-height:350px; overflow: hidden; background-image: cover;">
                    @if ($post->image)
                    <img src="{{asset('storage/'. $post->image)}}" alt="">
                    @else
                    <img class=" card-img-top" src="https://source.unsplash.com/500x400?{{$post->category->name}}" alt="{{$post->category->name}}">
                    @endif
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $post['title'] }}</h5>
                    <p>
                        <small class="text-muted">Posting By. <a href="posts?author={{ $post->user->username }}" class="text-decoration-none ">{{ $post->user->name }}</a> in
                            <a href='/posts?category={{$post->category->slug}}' class="text-decoration-none"> {{$post->category->name}}</a>
                        </small>
                        {{ $post->created_at->diffForHumans() }}
                    </p>
                    <p class="card-text">{{$post->excerpt}}</p>
                    <a href="/post/{{ $posts[0]->slug }}" class="btn btn-dark">Raad More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4">No post Found</p>
@endif
<div class="d-flex justify-content-center mb-lg-3">
    {{ $posts->links('pagination::bootstrap-4') }}

</div>
@endsection
