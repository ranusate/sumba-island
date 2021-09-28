<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{\Illuminate\Support\Facades\Request::is('dashboard')? 'active': ''}}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{\Illuminate\Support\Facades\Request::is('dashboard/post*')? 'active': ''}}" href="/dashboard/post">
                    <span data-feather="file-text"></span>
                    My Post
                </a>
            </li>

            <li class="nav-item">
                <hr>
                <a class="nav-link {{\Illuminate\Support\Facades\Request::is('/')? 'active': ''}}" aria-current="page" href="/">
                    <span data-feather="globe"></span>
                    Back to website
                </a>
            </li>
        </ul>

        @can('is_admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Administration</span>
        </h6>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{\Illuminate\Support\Facades\Request::is('dashboard/categories*')? 'active': ''}}" href="/dashboard/categories">
                    <span data-feather="grid"></span>
                    Post Category
                </a>
            </li>
        </ul>
        @endcan
    </div>
</nav>
