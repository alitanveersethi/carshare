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
  <style>
    body {background-image: url('img/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg');}
  </style>
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
</head>


<body class="hold-transition skin-purple sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  @include('superadmin.header.header')
  @include('superadmin.sidebar.sidebar')
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <section class="content-header">
        <form role="form" method="post" action="{{url('storeride')}}">
        {{ csrf_field() }}
             
                <div class="form-group">
                  <label >from</label>
                  <input type="text" class="form-control" id="source_city" name="source_city" placeholder="">
                </div>
                <div class="form-group">
                  <label >to</label>
                  <input type="text" id="destination_city" name="destination_city"    class="form-control">
                  </div>
                     <div class="form-group">
                  <label >seats availaible</label>
                  <input type="number" id="seats_available" name="seats_available" class="form-control"  >
                  </div>
                   <div class="form-group">
                  <label >fare</label>
                  <input type="number" id="fare" name="fare" class="form-control"  >
                  </div>
                    <div class="form-group">
                  <label >car licensed number</label>
                  <input type="text" id="car_no" name="car_no" class="form-control"  >
                  </div>
                   <div class="form-group">
                  <label >Date And Time</label>
                  <input type="date" id="date" name="date" class="form-control"  >
                  <input type="time" id="time" name="time" class="form-control"  ></div>
                  


                  
            

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" >Submit</button>
              </div>
            </form>
     
    </section>

   
    <section class="content">

     

  
</section>
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
