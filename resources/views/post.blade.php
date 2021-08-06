@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>By. <a href="" class="text-decoration-none">{{ $post->user->name }} </a> in
                <a href='/categories/{{ $post->category->slug}}' class="text-decoration-none"> {{$post->category->name}}</a>
            </p>

            <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid">

            <article class="my-3 fs-4">
                {!! $post->body !!}
            </article>
            <a href="/posts" class="d-block mt-4 text-decoration-none">Back to Post</a>
        </div>
    </div>
</div>
@endsection
