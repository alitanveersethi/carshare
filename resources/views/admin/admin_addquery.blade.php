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
        <form role="form" method="post" id="queryform" name="queryform" action="{{url('admin_storequery')}}">
        {{ csrf_field() }}
              <div class="box-body">
               
               <div class="form-group">
                  <label >Ride ID</label>
                  <input type="text" class="form-control" id="post_id" name="post_id" value="<?php echo $ride['id'] ?>"   />
                </div>


                <div class="form-group">
                  <label >subject</label>
                  <input type="text" class="form-control" id="sender_subject" name="sender_subject" placeholder="">
                </div>
                
                     <div class="form-group">
                  <label >Message</label>
                 <textarea rows="10" cols="50" name="message" id="message" form="queryform" style="margin: 0px; width: 973px; height: 141px;"></textarea>
                   
                 </textarea>
                  </div>
                  </div>

   

                
            

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
