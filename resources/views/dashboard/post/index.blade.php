@extends('dashboard.__layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post, {{ auth()->user()->name }}</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-8" role="alert">
    {{ session('success') }}
</div>
@endif
@if (session()->has('update'))
<div class="alert alert-success col-8" role="alert">
    {{ session('update') }}
</div>
@endif
@if (session()->has('delete'))
<div class="alert alert-success col-8" role="alert">
    {{ session('delete') }}
</div>
@endif
<a href="/dashboard/post/create" class="btn btn-primay btn-primary mb-4"> Create new post</a>
<div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->category->name}}</td>
                <td>
                    <a href="/dashboard/post/{{$post->slug}}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/post/{{$post->slug}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/post/{{$post->slug}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>

                    </form>
                    <!-- <meta name="csrf-token" content="{{ csrf_token() }}">
                    <button class="badge bg-danger border-0" onclick="destroy('{{$post->slug}}')"><span data-feather="x-circle"></span></button> -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

<!-- <script>
    function destroy(slug) {
        var token = $("meta[name='csrf-token']").attr("content");
        $.ajax({
            url: '/dashboard/post/' + slug,
            type: 'DELETE',
            data: {
                "slug": slug,
                "_token": token,
            },
            success: function(response) {
                read()
            },
            error: function(response) {
                console.log(response);
            }
        })


    }
</script> -->
