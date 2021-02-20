<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../fontawesome/css/all.min.css">
        <title>@yield('title')</title>

        <style>
            body {
                background-color:#2F4F4F;
                height: 500px;
                background-position: center;
                background-repeat: repeat;
                background-size: cover;
            }
            .navbar {
                font-family: "Times New Roman", Times, serif;
            }
            .footer-bottom{
                font-family: "Times New Roman", Times, serif;
            }
        </style>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
            <h3><i class="fas fa-location-arrow text-white mr-2"></i></h3>
            <a class="navbar-brand text-white" href="/">WONDERFUL JOURNEY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="container">
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="/">HOME <span class="sr-only">(current)</span></a>
                </li>
                @if(Auth::check())
                    @if(Auth::user()->role=='admin')
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="/profile">PROFILE <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="/adminblog">USER <span class="sr-only">(current)</span></a>
                        </li>
                    @elseif(Auth::user()->role=='user')
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="/profile">PROFILE <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="/bloguser">BLOG <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="/product" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORY</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/category/1">BEACH</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/category/2">MOUNTAIN</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/category/3">OTHERS</a>
                        </div>
                        </li>
                    @endif
                @else
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="/product" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORY</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/category/1">BEACH</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/category/2">MOUNTAIN</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/category/3">OTHERS</a>
                </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="/aboutus">ABOUT US <span class="sr-only">(current)</span></a>
                </li>
                @endif
            </ul>
            <ul class="navbar-nav ml-auto mr-4">
                @if(Auth::check())
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white"  id="Profile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                    <div class="dropdown-menu" aria-labelledby="Profile">
                        
                        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                    </div>
                    </li>
                @else
                <li class="nav-item active">
                    <a class="nav-link text-white" href="/register">SIGN UP<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="/login">LOGIN<span class="sr-only">(current)</span></a>
                </li>
                @endif
            </ul>
            <div id="date" class="text-white ml-2"></div>
                <script>
                var d = new Date();
                var n = d.toDateString();
                document.getElementById("date").innerHTML = n;
                </script>
            </div>
        </div>
    </nav>

    @yield('container')

    <div class="footer-bottom bg-warning">
        <div class="row">
            <div class="bottom-left col-sm-6">
              <div class="copyright text-white font-weight-bold p-2">
                <p class="far fa-copyright font-weight-bold text-dark">2021 Wonderful Journey.</p>
              </div>
            </div>
            <div class="bottom-right col-sm-6">
              <div class="socmed text-right text-dark font-weight-bold p-2">
                <p class="fab fa-facebook-f ml-3 mt-2"></p>
                <p class="fab fa-instagram ml-3 mt-2"></p>
                <p class="fab fa-twitter ml-3 mr-3 mt-2"></p>
              </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>