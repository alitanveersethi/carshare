<!DOCTYPE html>
@if(Auth::User()->role=="superAdmin")
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CARSHARE</title>
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

  @include('superadmin.header.header')
  @include('superadmin.sidebar.sidebar')
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <section class="content-header">
      
     
    </section>

   
    <section class="content">

                             
                                 <div class="table-responsive">

                
            <table id="mytable" class="table table-bordred"  >
                   
                   <thead style="background-color:#404242; color: white"  >
                   
                   
                   <th><B>DRIVER NAME</B> </th>
                    <th><B>FROM</B></th>
                     <th><B>TO</B></th>
                     <th><B>FARE</B></th>
                     <th><B>CAR NUMBE</B></th>


                     <th><B>DATE</B></th>
                     <th><B>TIME</B></th>
                     <th><B>SEATS AVAILAIBLE</B></th>
                      <th><B>ADD COMMENT|</B></th>

            <th><B>VIEW COMMENT</B></th>
                   </thead>
                   @foreach($ride as $rd)
    <tbody>
    
    <tr>
    
    <td style="text-transform: uppercase"><B>{{$rd->title}}</B></td>
    <td style="text-transform: uppercase"><B>{{$rd->source_city}}</B></td>
    <td style="text-transform: uppercase"><B>{{$rd->destination_city}}</B></td>
     <td style="text-transform: uppercase"><B>${{$rd->fare}}  rupees</B></td>
     <td style="text-transform: uppercase" ><B>{{$rd->car_no}}</B></td>
    <td style="text-transform: uppercase" ><B>{{$rd->date}}</B></td>
    <td style="text-transform: uppercase" ><B>{{$rd->time}}</B></td>
    <td style="text-transform: uppercase" ><B>{{$rd->seats_available}}</B></td>
    <td><a href='addquery&<?php echo $rd->id ?>'><b>ADD COMMENT</b></a></td>
    <td><a href='viewquery&<?php echo $rd->id ?>'><b>VIEW COMMENT</b></a></td>
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