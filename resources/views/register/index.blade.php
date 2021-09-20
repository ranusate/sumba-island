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


    <!-- boostrap -->

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
                                <h3>Please Register</h3>
                            </div>
                            <form action="/register" method="post" id="register" class="form-horizontal">
                                @csrf
                                <div class="form-group first">
                                    <label for="Name">Name</label>
                                    <input type="text" class="form-control is-invalid" name="name" value="{{old('name')}}">
                                    @error('name')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        {{ $message   }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control is-invalid" name="username" value="{{old('username')}}">
                                    @error('username')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        {{ $message   }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control is-invalid" name="email" value="{{old('email')}}">
                                    @error('email')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        {{ $message   }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control is-invalid" name="password">
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
                                    <span class="ml-auto">
                                        <a href="/auth" class="forgot-pass text-decoration-none">Login</a>
                                    </span>
                                </div>
                                <button class="btn text-white btn-block btn-primary" type="button"> Register

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
                                        <span class="d-block text-left my-4 text-muted"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                            </svg> Return Home</span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Boostrap -->
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
            document.querySelector('#register').submit();
        })
    </script>
</body>

</html>
