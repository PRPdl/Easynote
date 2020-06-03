<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Bootstrap Test</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a href="{{route('home')}}" class="navbar-brand mb-0 h1">TechTalk</a>
        <button class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                data-target="#navbarMenu">{{ Auth::user()->name ?? 'Guest' }}</button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item"><a href="#" class="nav-link aaa">Home </a></li>
                <li class="nav-item"><a href="#" class="nav-link">Articles </a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact </a></li>
                @guest
                    <li class="nav-item"><a href="{{route('login')}}" class="nav-link"> Login </a></li>
                    @if(Route::has('register'))
                        <li class="nav-item"><a href="#" class="nav-link"> Register </a></li>
                    @endif
                @else
                    <div class="d-none d-sm-block">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-sm-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </div>
                    <div class="d-xl-none d-lg-none d-md-none d-sm-none">
                        <li class="nav-item"><a href="{{route('logout')}}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                Logout
                            </a></li>
                    </div>
                @endguest

            </ul>
        </div>


    </nav>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>
