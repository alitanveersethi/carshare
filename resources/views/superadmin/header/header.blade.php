<header class="main-header"   >
<style type="text/css">

</style>
    <!-- Logo -->
    <a href="index2.html" class="logo" style="background-color:#404242; color: white" >
      <!-- mini logo for sidebar mini 50x50 pixels -->
      
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><h2><b> CARSHARE</b></h2></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color:#404242; color: white" >
      <!-- Sidebar toggle button-->
      
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a style="background-color:#404242; color: white"  href="{{ url('/login') }}">Login</a></li>
                    <li><a style="background-color:#404242; color: white"  href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"style="background-color:#404242; color: white; text-transform: uppercase; "  ><b> 
                            {{ Auth::user()->name }}</b><span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="background-color:#404242; color: white; text-transform: uppercase; "  >
                                   <b> Logout </b>
                                </a>

                                <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
         
        </ul>
      </div>
    </nav>
  </header>