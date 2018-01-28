<!DOCTYPE html>
@if(Auth::User()->role=="superAdmin")
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CarShare</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="fonts/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="fonts/ionicons.min.css">
  
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
 
</head>
<body class="hold-transition sidebar-mini">
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
    <div class="panel-heading" style="background-color:#273a4d; color: #63a599" ><b><h3>ALL USERS</h3></b></div>
      
     
    </section>

    
    

   
    <section class="content">

                             
          <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred" >
                   
                   <thead  style="background-color:#273a4d; color: #63a599" >
                   
                   
                  
                    <th><b>NAME</b></th>
                     <th><b>EMAIL</b></th>
                     <th><b>IDENTITY NO.</b></th>
                     <th><b>CONTACT NO.</b></th>
                   <th><b>ROLE</b></th>
                   <th><b>ASSIGN ROLE</b></th>
                     

            
                   </thead>
                   @foreach($users as $us)
    <tbody>
    
    <tr>

   
    <td style="text-transform: uppercase"><b>{{$us->name}}</b></td>
    <td style="text-transform: uppercase"><b>{{$us->email}}</b></td>
    <td style="text-transform: uppercase"><b>{{$us->cnic}}</b></td>
    <td style="text-transform: uppercase"><b>{{$us->cell_no}}</b></td>
        <td style="text-transform: uppercase"><b>{{$us->role}}</b></td>
        <td style="text-transform: uppercase"><b><a style="background-color:#63a599; color:black " href="/display/<?php echo $us->id?>" class="btn  btn-primary btn-xs">{{$us->role}}</b></a>

    

 
    </tr>
    

    </tbody>
        



                               
                            @endforeach
                            </table>
</div>
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
@else
<script type="text/javascript"> window.location = "login"; </script>


@endif