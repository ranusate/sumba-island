<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/login/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="/login/css/style.css">

    <title>{{$title}}</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="/login/images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign In to <strong>Post</strong></h3>
                                @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                                @endif

                                @if (session()->has('errorLogin'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('errorLogin') }}
                                </div>
                                @endif
                            </div>
                            <form action="/auth" method="post" id="loginForm" class="form-horizontal">
                                @csrf
                                <div class="form-group first">
                                    <label for="Email">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" autofocus required value="{{old('email')}}">
                                    @error('email')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        {{ $message   }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control @error('email') is-invalid @enderror" name="password" required>
                                    @error('password')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        {{ $message   }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="/register" class="register text-decoration-none">Register</a></span>
                                </div>
                                <button class="btn text-white btn-block btn-primary" type="button"> Login

                                </button>
                                <span class="d-block text-left my-4 text-muted"> or sign in with</span>

                                <div class="social-login">
                                    <a href="#" class="facebook">
                                        <span class="icon-facebook mr-3"></span>
                                    </a>
                                    <a href="#" class="twitter">
                                        <span class="icon-twitter mr-3"></span>
                                    </a>
                                    <a href="#" class="google">
                                        <span class="icon-google mr-3"></span>
                                    </a>
                                </div>
                                <div>
                                    <a href="/" class="text-decoration-none">
                                        <span class="d-block text-left my-4 text-muted icon-arrow_back"> Return Home</span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script src="/login/js/jquery-3.3.1.min.js"></script>
    <script src="/login/js/popper.min.js"></script>
    <script src="/login/js/bootstrap.min.js"></script>
    <script src="/login/js/main.js"></script>
    <script>
        const btn = document.querySelector('.btn');
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            btn.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        Loading...`;
            btn.setAttribute('disabled', true);
            document.querySelector('#loginForm').submit();
        })
    </script>
</body>

</html>
