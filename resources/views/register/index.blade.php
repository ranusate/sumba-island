@extends('layouts.main')

@section('container')

<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form>
                <img class="mb-3 rounded mx-auto d-block" src="https://source.unsplash.com/500x400?form" alt="" width="72" height="57">
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
                    <label for="Name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                    <label for="Username">Usernamae</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="Email">Email Address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>

            <small class="d-block text-center mt-3">Allready Register? <a href="/login">Login!</a></small>
        </main>
    </div>
</div>
@endsection
