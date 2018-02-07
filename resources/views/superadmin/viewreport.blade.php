<!DOCTYPE html>
@if(Auth::User()->role=="superAdmin")
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

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead style="background-color:#273a4d; color: #63a599"  >
                   
                   
                   <th><h3><b>REPORT TIME</b></h3></th>
                    <th><h3><b>TOTAl LOGINS</b></h3></th>
                    <th><h3><b>TRAFIC</b></h3></th>
                     <th><h3><b>TOTAL USERS</b></h3></th>
                     
                     <th><b><h3>TOTAL POSTS</b></h3></th>
                   
              
                     

           
                   </thead>
                  
                   @foreach($report as $report)
                   
                   

    <tbody>
    
    <tr>

    <td><b><H1>{{$report->updated_at}}</H1></b></td>
    <td><b><H1>{{$report->logins}}</H1></b></td>
    <td><b><H1>{{$report->traffic}}</H1></b></td>
    @endforeach
@foreach($user as $user)
    <td><b><H1>{{$user->id}}</H1></b></td>
@endforeach
    
    @foreach($post as $post) 

    <td><b><H1>{{ $post->id }}</H1><b></td>
     @endforeach
   

    </tr>
    

    </tbody>
        



                              
                            
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