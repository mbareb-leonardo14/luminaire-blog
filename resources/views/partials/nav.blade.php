{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary text-bg-darl">
   <div class="container">
      <a class="navbar-brand" href="#">
         <img src="{{ URL::asset('img/svg/bmth.svg') }}" alt="Logo" width="40" height="34" class="d-inline-block align-text-top">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
         aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link {{ ($active === " home") ? 'active fw-bold' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ ($active === " about") ? 'active fw-bold' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ ($active === " posts") ? 'active fw-bold' : '' }}" href="/posts">Blog</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ ($active === " categories") ? 'active fw-bold' : '' }}" href="/categories">Site</a>
            </li>

         </ul>
         
         
         <ul class="navbar-nav ms-auto">
            <li class="nav-item">
               <a href="/login" class="nav-link {{ ($active === " login") ? 'active fw-bold' : '' }}"><i class="bi bi-box-arrow-in-right"></i>
                  Login</a>
            </li>
         </ul>
      </div>
   </div>
</nav> --}}

<nav class="text-bg-dark p-3">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center justify-content-lg-start flex-wrap">
            <a href="/" class="d-flex align-items-center mb-lg-0 text-decoration-none mb-2 text-white">
                {{-- <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
               <use xlink:href="#bootstrap"></use>
            </svg> --}}
                <img src="{{ URL::asset('img/bmth2.png') }}" alt="Logo" width="40" height="40"
                    class="d-inline-block align-text-top" style="filter: invert(1)">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center mb-md-0 mb-2">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active fw-bold' : '' }} text-bg-dark"
                        href="/">Home</a>
                </li>
                {{-- {{ Request::is('dashboard/posts') ? 'active' : '' }} --}}
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active fw-bold' : '' }} text-white"
                        href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active fw-bold' : '' }} text-white"
                        href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active fw-bold' : '' }} text-white"
                        href="/categories">Site</a>
                </li>
            </ul>

            <form class="col-12 col-lg-auto mb-lg-0 me-lg-3 mb-3" role="search">
                <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..."
                    aria-label="Search">
            </form>

            @auth
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-speedometer"></i> Dashboard</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            @else
                <a href="/login"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
                <a href="/register"><button type="button" class="btn btn-warning">Sign-up</button></a>
            @endauth

        </div>
    </div>
    </div>
</nav>
