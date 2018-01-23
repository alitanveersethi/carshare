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
      
     
    </section>

   
    <section class="content">

                             
                                 <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   

                   <th>USER_ID</th>
                   <th>NAME</th>
                    <th>SOURCE_CITY</th>
                     <th>DESTINATION_CITY</th>
                     <th>FARE</th>
                     <th>CAR_NUMBER</th>


                     <th>DATE</th>
                     <th>TIME</th>
                     <th>SEATS AVAILAIBLE</th>
                      <th>ADD COMMENT</th>

            <th>VIEW COMMENTS</th>
                   </thead>
                   @foreach($ride as $rd)
    <tbody>
    
    <tr>

        <td>{{$rd->user_id}}</td>
        <td>{{$rd->title}}</td>
    <td>{{$rd->source_city}}</td>
    <td>{{$rd->destination_city}}</td>
     <td>${{$rd->fare}}  rupees</td>
     <td>{{$rd->car_no}}</td>
    <td>{{$rd->date}}</td>
    <td>{{$rd->time}}</td>
    <td>{{$rd->seats_available}}</td>
    <td><a href='admin_addquery&<?php echo $rd->id ?>'>add comment</a></td>
    <td><a href='admin_viewquery&<?php echo $rd->id ?>'>view comment</a></td>
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
