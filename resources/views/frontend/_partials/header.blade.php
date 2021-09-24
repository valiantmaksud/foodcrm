<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet" />

    <link href="{{ asset('frontend/css/styles.css') }}" type="text/css" rel="stylesheet" />

    <link rel="icon" href="{{ asset('frontend/images/logo.png') }}" type="image/icon" />

    @yield('custom-css')
    <title>Food Ordering System</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="#"><img src="{{ asset('frontend/images/logo.png') }}" alt="logo" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('f.menus') }}">Menu</a>
                    </li>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                        ORDERS <span id="finalOrder">0</span>
                    </button>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <a href="./login.html"><button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="log">
                            Login
                        </button></a>
                    <p></p>
                    <a href="./register.html">
                        <button class="btn btn-outline-success  my-2 my-sm-0" type="submit" id="log">
                            Register
                        </button>
                    </a>
                    <a href="./login.html"><button class="btn btn-outline-success my-2 my-sm-0" type="submit"
                            id="logout">
                            Logout
                        </button></a>
                </ul>
            </div>
        </div>
    </nav>
