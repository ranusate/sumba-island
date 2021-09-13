@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>Posting By. <a href="/posts?author={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }} </a> in
                <a href='/posts?category={{ $post->category->slug}}' class="text-decoration-none"> {{$post->category->name}}</a>
            </p>
            <div class="img" style="max-height:350px; overflow: hidden; background-image: cover;">
                @if ($post->image)
                <img src="{{asset('storage/'. $post->image)}}" alt="">
                @else
                <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid">
                @endif
            </div>

            <article class="my-3 fs-4">
                {!! $post->body !!}
            </article>
            <a href="/posts" class="d-block mt-4 text-decoration-none">Back to Post</a>
        </div>
    </div>
</div>
@endsection
