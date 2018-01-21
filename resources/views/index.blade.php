<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SimpleAdminLTE 2 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <style>
        body {background-image: url('img/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg');}
    </style>
    <script>
        window.Laravel <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>


</head>
<body class="hold-transition skin-purple sidebar-mini">
<!-- Site wrapper -->

<div class="wrapper">
    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
 @endif
    </ul>
</div>






        <section class="main-content">



            @if(Auth::User()->role=="superAdmin")
                @include('superadmin.header.header')
                @include('superadmin.sidebar.sidebar')
            @elseif(Auth::User()->role=="Admin")
                @include('admin.header.header')
                @include('admin.sidebar.sidebar')


            @endif

        </section>



</body>
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
