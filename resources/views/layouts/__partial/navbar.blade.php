<nav class="navbar fixed-top navbar-expand-lg shadow p-3 mb-5 bg-white rounded ">
    <div class="container">
        <a class="navbar-brand text-reset" href="/">{{env('APP_NAME')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav text-reset">
                <li class="nav-item">
                    <a class="nav-link {{ \Illuminate\Support\Facades\Request::is('/') ? 'active' :'' }} text-reset" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{\Illuminate\Support\Facades\Request::is('posts') ? 'active' :'' }} text-reset" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ \Illuminate\Support\Facades\Request::is('categories') ? 'active' :'' }} text-reset" href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{\Illuminate\Support\Facades\Request::is('about') ? 'active' :'' }} text-reset" href="/about">About</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    @if (Auth::user()->avatar)
                    <img src="{{Auth::user()->avatar}}" alt="{{Auth::user()->name}}" srcset="" style="border: 1px solid #ccc; border-radius: 50px; width: 40px; height:auto; float:left; margin-right:9px">
                    @endif
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      {{auth()->user()->name}}
                    </a>
                    <ul class="dropdown-menu mt-3" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/dashboard" target="_blank"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a href="/auth" class=" text-reset nav-link  {{ \Illuminate\Support\Facades\Request::is('login' )? 'active' :'' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
