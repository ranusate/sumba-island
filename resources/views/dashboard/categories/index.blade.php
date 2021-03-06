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
<a href="/dashboard/categories/create" class="btn btn-primay btn-primary mb-4"> Create new post</a>
<div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $categorie)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$categorie->name}}</td>
                <td>
                    <a href="/dashboard/categories/{{$categorie->slug}}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/categories/{{$categorie->slug}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/categories/{{$categorie->slug}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>

                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
