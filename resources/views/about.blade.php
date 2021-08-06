@extends('layouts.main')

@section('container')

<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="img/{{$image}}" alt="{{$name}}" width="200" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h1 class="card-title">Halaman About</h1>
                <h3>{{$name}}</h3>
                <h3>{{$email}}</h3>

                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>

@endsection
