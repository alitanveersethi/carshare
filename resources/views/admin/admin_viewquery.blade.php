<!DOCTYPE html>
<html>
<head>
<style>
container {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
}

/* Darker chat container */
.darker {
    border-color: #ccc;
    background-color: #ddd;
}

/* Clear floats */
.container::after {
    content: "";
    clear: both;
    display: table;
}

/* Style images */

/* Style the right image */


/* Style time text */
.time-right {
    float: right;
    color: #aaa;
}

/* Style time text */
.time-left {
    float: left;
    color: #999;
}
</style>
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


</head>
<body class="hold-transition skin-purple sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  @include('admin.header.header')
  @include('admin.sidebar.sidebar')
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <section class="content-header">
      
     
    </section>
      @foreach($query as $qu)
    <section class="content" >
    <div class="container">
    <b>NAME</b>
  
  <p>{{$qu->sender_name}}</p>
  <span class="time-right"></span>
</div>
    <div class="container">
  <b>EMAIL</b>
  <p>{{$qu->sender_email}}</p>
  <span class="time-right"></span>
</div>






<div class="container">

  <b>SUBJECT</b>
  <p>{{$qu->sender_subject}}</p>
  <span class="time-right"></span>
</div>

<div class="container darker">
  <b>MESSAGE</b>
  <p>{{$qu->message}}</p>
  <span class="time-left"></span>
</div>
  <div class="container darker">
  <b>TIME/DATE</b>
  <p>{{$qu->created_at}}</p>
</section>
@endforeach
</div>
</div>


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


