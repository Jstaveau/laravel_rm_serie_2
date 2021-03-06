<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{Request::is("/") ? "active" : ""}}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is("pg1") ? "active" : ""}}" href="{{route("page1")}}">Page1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is("pg2") ? "active" : ""}}" href="{{route("page2")}}">Page2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is("pg3") ? "active" : ""}}" href="{{route("page3")}}">Page3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is("pg4") ? "active" : ""}}" href="{{route("page4")}}">Page4</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        @yield('content')
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
    <footer class="bg-dark text-center p-2 fixed-bottom">
        <h1 class="text-light">footer</h1>
    </footer>
</body>

</html>
