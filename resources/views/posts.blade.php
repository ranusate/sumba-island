@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center"> {{$title}}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Serach..">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Button</button>
            </div>
        </div>
    </div>
</div>

@if ($posts->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
    <div class="card-body text-center">
        <h3 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none  text-dark ">{{ $posts[0]->title }}</a></h3>
        <p>
            <small class="text-muted">By. <a href="/author/{{ $posts[0]->user->username }}" class="text-decoration-none ">{{ $posts[0]->user->name }} </a> in
                <a href='/categories/{{ $posts[0]->category->slug}}' class="text-decoration-none"> {{$posts[0]->category->name}}</a>
            </small> {{ $posts[0]->created_at->diffForHumans() }}
        </p>
        <p class="card-text">{{ $posts[0]->title }}</p>
        <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More..</a>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post )
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="positon-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7);"> <a href='/categories/{{ $post->category->slug}}' class="text-decoration-none text-white">{{$post->category->name}}</a></div>
                <img class=" card-img-top" src="https://source.unsplash.com/500x400?{{$post->category->name}}" alt="{{$posts[0]->category->name}}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post['title'] }}</h5>
                    <p>
                        <small class="text-muted">By. <a href="/author/{{ $posts[0]->user->username }}" class="text-decoration-none ">{{ $post->user->name }}</a>
                            {{$posts[0]->category->name}}
                        </small>
                        {{ $post->created_at->diffForHumans() }}
                    </p>
                    <p class="card-text">{{$post->excerpt}}</p>
                    <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary">Raad More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4">No post Found</p>
@endif

@endsection
