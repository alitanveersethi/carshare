<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CarShare') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
   

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body style="background-image: url('img/road_lighting_night_119175_1280x720.jpg');"    >
    <div id="app"   >
        <nav class="navbar navbar-inverse navbar-static-top" style="background-color: #273a4d"  >
            <div  class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/user') }}" >
                       <h4 style="color:#63a599" > <b>CAR SHARE </b> </h4> 
                    </a>
                    
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}" style="color:#63a599 " ><b>LOGIN</b></a></li>
                            <li><a href="{{ url('/register') }}" style="color:#63a599"><b>REGISTER</b> </a>   </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:#63a599 "  >
                                   <b> {{ Auth::user()->name }} </b> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
