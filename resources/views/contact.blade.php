<!DOCTYPE html>
<html lang="en">
 
  
 <head>
   <link rel="stylesheet" type="text/css" href="{{URL::asset('css/map.css')}}">
  
        <meta charset="utf-8">
        <title>CARSHARE</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


       
        <link href="css/bootstrap.min.css" rel="stylesheet">
       
        <link href="css/jquery.idealforms.css" rel="stylesheet">
       
        <link href="css/jquery.idealselect.css" rel="stylesheet">
       
        <link href="css/slicknav.css" rel="stylesheet">
       
        <link href="css/style.css" rel="stylesheet">

  
        <script src="js/modernizr.js"></script>

        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    
 </head>
 <body>
 <header class="header">

<script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

            <div class="top-menu" style="background-color: #273a4d"  >

                <section class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="user-log" style="background-color: #63a599"  >
@if (Auth::guest())
                                <a data-toggle="modal" href="{{url('login')}}" style="color: #273a4d"  ><b>
                                    <BUTTON style=" background-color:  #273a4d ;color:#63a599 " >
                                    LOG IN</BUTTON>
                                </a> </b>
                                <a data-toggle="modal" href="{{url('register')}}  " style="color: #273a4d"   ><b><BUTTON style=" background-color:  #273a4d ;color:#63a599 " >
                                    SIGN UP</BUTTON></b>
                                    
                                </a>
                                @else
                                <a data-toggle="modal" href="{{ url('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                              <b style="text-transform: uppercase;" > {{Auth::user()->name}} <button style=" background-color:  #273a4d ;color:#63a599 " > SIGN OUT </button> </b>
                                </a>
                                 <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                  @endif 

                            </div><!-- end .user-log -->
                        </div><!-- end .col-sm-4 -->

                        <a class="navbar-brand" href="{{ url('/') }}" >
                       <h3 style="color:#63a599" > <b>CAR SHARE </b> </h3> 
                    </a>


                        

                    </div><!-- end .row -->
             </section><!-- end .container -->

            </div><!-- end .top-menu -->

</header>
 <div style="padding-left: 20px; padding-top: 20px">
        <div class="container">
            <div class="row">
                <div class="col-md-4 to-animate">
                    <h2 class="section-title">Follow the following procedure to be a CarShare Driver</h2>
                    <h3>Bring Mentioned Documents to CarShare Office</h3>
                    <ol>
                    <li>Original CNIC and its Copy</li>
                    <li>Driving License</li>
                    <li>Car Original Documents</li>
                    <li>CPLC Verification Certificate </li>
                    </ol> 
                    
                    <h3 class="section-title">Our Address</h3>
                    <ul class="contact-info">
                        <li>M-77, Muslim Town</li>
                        <li> Lahore</li>
                        <li>Pakistan</li>
                        <li>+111222555</li>
                    </ul>
                    
                </div>

                
                
                
            </div>
        </div>
    </div>




<footer id="footer">

             <div class="footer-copyright">

                <div class="container">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <a href='{{url("/")}}'  >    <h2 style="color:#63a599"  ><B>  www.carshare.com</B> </h2></a>
                       
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12" style="float: right;" >
                        <a href='{{url("/aboutus")}}'  >    <h3 style="color:#63a599"  >  ABOUT US </h3></a>
                       
                        </div>





                    </div><!-- end .row -->
                </div><!-- end .container -->

            </div><!-- end .footer-copyright -->

        </footer><!-- end #footer -->

        
        <!-- Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- Main jQuery -->
        <script type="text/javascript" src="js/jquery.main.js"></script>
        <!-- Form -->
        <script type="text/javascript" src="js/jquery.idealforms.min.js"></script>
        <script type="text/javascript" src="js/jquery.idealselect.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
        <!-- Menu -->
        <script type="text/javascript" src="js/hoverIntent.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <!-- Counter-Up  -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
        <!-- Rating  -->
        <script type="text/javascript" src="js/bootstrap-rating-input.min.js"></script>
        <!-- Slicknav  -->
        <script type="text/javascript" src="js/jquery.slicknav.min.js"></script>

  </body>



</html>