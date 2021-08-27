@extends('dashboard.__layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create new post</h1>
    </div>
    <div class="col-md-8">

        <form action="/dashboard/post" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example" id="category_id" name="category_id">
                    <option selected>Open this select category</option>
                    @foreach($categories as  $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>


    <script>
        const title = document.querySelector('#title')
        const slug = document.querySelector('#slug')
        console.log(title, slug)
        title.addEventListener('change', function () {
            fetch('/dashboard/post/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
        document.addEventListener('trix-file-accept', function (e) {
            e.preventDefault();
        })
    </script>
@endsection
