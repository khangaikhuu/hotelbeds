<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(function() {
            $( "#checkin" ).datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1,
                onClose: function( selectedDate ) {
                    $( "#checkin" ).datepicker( "option", "minDate", selectedDate );
                }
            });
            $( "#checkout" ).datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1,
                onClose: function( selectedDate ) {
                    $( "#checkout" ).datepicker( "option", "maxDate", selectedDate );
                }
            });
        });
    </script>
    <script>
        $(function() {
            var availableTags = [
                "ActionScript",
                "AppleScript",
                "Asp",
                "BASIC",
                "C",
                "C++",
                "Clojure",
                "COBOL",
                "ColdFusion",
                "Erlang",
                "Fortran",
                "Groovy",
                "Haskell",
                "Java",
                "JavaScript",
                "Lisp",
                "Perl",
                "PHP",
                "Python",
                "Ruby",
                "Scala",
                "Scheme"
            ];
            $( "#tags" ).autocomplete({
                source: availableTags
            });
        });
    </script>
</head>
<body id="app-layout">
    <!-- Navigation bar -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Hotel Beds Mongolia
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())

                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <br/>
    <div class="container">
       <div id="DivOurProducts" class="row">
          <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 wrapper">
             <a href="/Article/Overview/1">
                <div class="fixOverlayDiv">
                   <img alt="offer banner1" class="category-banner img-responsive" src="http://placehold.it/300x300">
                   <div class="OverlayText">Text Here</div>
                </div>
             </a>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 wrapper">
             <a href="/Article/Overview/2">
                <div class="fixOverlayDiv">
                   <img alt="offer banner1" class="category-banner img-responsive" src="http://placehold.it/300x300">
                   <div class="OverlayText">Text Here</div>
                </div>
             </a>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 wrapper">
             <a href="/Article/Overview/3">
                <div class="fixOverlayDiv">
                   <img alt="offer banner1" class="category-banner img-responsive" src="http://placehold.it/300x300">
                   <div class="OverlayText">Text Here</div>
                </div>
             </a>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 wrapper">
             <a href="/Article/Overview/4">
                <div class="fixOverlayDiv">
                   <img alt="offer banner1" class="category-banner img-responsive" src="http://placehold.it/300x300">
                   <div class="OverlayText">Text Here</div>
                </div>
             </a>
          </div>
        </div>
    </div>

    @yield('footer')
    
    <!-- JavaScripts -->

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
