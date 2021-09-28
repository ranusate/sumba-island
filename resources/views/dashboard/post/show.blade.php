@extends('dashboard.__layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <a href="/dashboard/post" class="btn btn-success">
                <span data-feather="arrow-left">
                </span>
                Back to all my post</a>
            <a href="/dashboard/post/{{$post->slug}}/edit" class="btn btn-warning">
                <span data-feather="edit">
                </span>
                Edit</a>
            <form action="/dashboard/post/{{$post->slug}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
            </form>
            <div class="img img-fluid mt-3" style="max-height:350px; overflow: hidden; background-image: cover;">
                @if ($post->image)
                <img src="{{asset('storage/'. $post->image)}}" alt="">
                @else
                <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-responsive mt-5">
                @endif
            </div>

            <article class="my-3 fs-4">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection
