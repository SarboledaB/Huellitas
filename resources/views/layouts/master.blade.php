<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title','Home Page')</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/customStyle.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home.index') }}">
                    HUELLITAS
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav mr-auto">
                        <li>
                            <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle">PetItems</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu2">
                                <li>
                                    <a class="dropdown-item" href="{{ route('petItem.create') }}">Create</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('petItem.list') }}">List</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle">Categories</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu1">
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.create') }}">Create</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.list') }}">List</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Future Left Side Links -->
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Future authentication Links -->
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>