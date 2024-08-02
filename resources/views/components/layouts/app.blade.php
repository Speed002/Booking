<!doctype html>
<html lang="en" data-bs-theme="auto">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Offcanvas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
<body class="bg-body-tertiary">
    <nav class="navbar navbar-expand-lg fixed-top nav-bg" aria-label="Main navigation">
    <div class="container">
        <a class="navbar-brand" href="#">Offcanvas</a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Notifications</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Switch account</a>
            </li>
        </ul>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
            <ul class="dropdown-menu rounded-1 nav-bg">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="dropdown-item" style="color: rgba(255, 255, 255, .75);" href="#" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </li>
        </div>
    </div>
    </nav>

    <div class="nav-scroller shadow-sm">
    <nav class="nav container" aria-label="Secondary navigation">
        <a class="nav-link" aria-current="page" href="#">Dashboard</a>
        <a class="nav-link" href="#">
        Friends
        <span class="badge text-bg-light rounded-pill align-text-bottom">27</span>
        </a>
        <a class="nav-link" href="#">Explore</a>
        <a class="nav-link" href="#">Suggestions</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
    </nav>
    </div>
    <main class="container">
            {{$slot}}
    </main>
</body>
</html>
