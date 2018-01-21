!DOCTYPE html>
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
        <form role="form" method="post" action="admin_update&<?php echo $ride->id ?>">
        {{ csrf_field() }}
              <div class="box-body">
               
                <div class="form-group">
                  <label >from</label>
                  <input type="text" class="form-control" value="<?php echo $ride->source_city ?>"  id="source_city" name="source_city" placeholder="">
                </div>
                <div class="form-group">
                  <label >to</label>
                  <input type="text" id="destination_city" value="<?php echo $ride->destination_city ?>"   name="destination_city"    class="form-control">
                  </div>
                     <div class="form-group">
                  <label >seats availaible</label>
                  <input type="number" id="seats_available" value="<?php echo $ride->seats_available ?>"  name="seats_available" class="form-control"  >
                  </div>
                  <div class="form-group">
                  <label >fare</label>
                  <input type="number" id="fare" value="<?php echo $ride->seats_available ?>"  name="fare" class="form-control"  >
                  </div>
                    <div class="form-group">
                  <label >car licensed number</label>
                  <input type="number" id="car_no" name="car_no" class="form-control"  >
                  </div>
                   <div class="form-group">
                  <label >Date And Time</label>
                  <input type="date" id="date" name="date" value="<?php echo $ride->date ?>" class="form-control"  >
                  <input type="time" id="time" name="time" value="<?php echo $ride->time ?>"  class="form-control"  ></div>
                  


                  
            

              <div class="box-footer">
                <button type="update" class="btn btn-primary" href='' >Update</button>
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
