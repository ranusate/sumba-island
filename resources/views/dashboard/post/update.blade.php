@extends('dashboard.__layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update post</h1>
</div>
<div class="col-md-8">

    <form action="/dashboard/post/{{$post->slug}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $post->title)}}">
            @error('title')
            <div id="" class="invalid-feedback">
                {{ $message   }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{old('slug', $post->slug)}}">
            @error('slug')
            <div id="" class="invalid-feedback">
                {{ $message   }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select @error('category_id') is-invalid @enderror" aria-label="Default select example" id="category_id" name="category_id">
                <option selected>Open this select category</option>
                @foreach($categories as $category)
                @if (old('category_id', $post->category_id) == $category->id)
                <option value="{{ $category->id }}" selected>{{$category->name}}</option>
                @else
                <option value="{{ $category->id }}">{{$category->name}}</option>
                @endif
                @endforeach
            </select>
            @error('category_id')
            <div id="" class="invalid-feedback">
                {{ $message   }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="hidden" name="imageOld" id="imageOld" value="{{$post->image}}">
            @if ($post->image)
            <img src="{{asset('storage/' . $post->image)}}" class="img-fluid img-preview mb-3 col-sm-3 d-block">
            @else
            <img class="img-fluid img-preview mb-3 col-sm-3">
            @endif
            <input type="file" class="form-control  @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage(this)">
            @error('image')
            <div id="" class="invalid-feedback">
                {{ $message   }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label @error('body') is-invalid @enderror">Body</label>
            <input id="body" type="hidden" name="body" value="{{old('body', $post->body)}}">
            <trix-editor input="body"></trix-editor>
            @error('body')
            <div id="" class="invalid-feedback">
                {{ $message   }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-5">Create Post</button>
    </form>
</div>


<script>
    const title = document.querySelector('#title')
    const slug = document.querySelector('#slug')
    title.addEventListener('change', function() {
        fetch('/dashboard/post/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function previewImage(input) {
        const imagePreview = document.querySelector('.img-preview')
        imagePreview.style.display = 'block';
        let file = input.files[0];
        let reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => imagePreview.src = reader.result;
    }
</script>
@endsection
