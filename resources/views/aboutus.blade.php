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





      <section id="fh5co-team" class="fh5co-bg-color" data-section="team">
        <div class="fh5co-team">
            <div class="container">
                  <div class="row">
                    <div class="col-md-12 section-heading text-center">
                        <h2 class="to-animate"><span>About Us</span></h2>
                        <div class="about-us">
                            
                            <div >
                                <h3 class="to-animate col-md-offset-1 subtext">CarShare aims at creating a system which will make intercity ride sharing easier.Our Project CarShare is based on a concept of car pooling. Our project is ideal for those people who travel from one city to another city on some regular bases .Driver of the car shares car’s   vacant seats with other people traveling on same route , since the travelling expense are shared it gets very much economical for all </h3>
                            </div>
                        </div>
                    </div>
                </div>

                  <div class="row" >
                    <div class="col-md-12 section-heading text-center">
                        <h2 class="to-animate"><span>Meet The Team</span></h2>
                      
                    </div>
                  </div>
                
                    
              <div class="i-am-center">
                   <div class="row"  >

                    <div class="col-md-4" >
                        <div class="team-box text-center to-animate-2">
                            <div class="user"><img class="img-reponsive" src="img/zamar.jpg" alt="Zamar Khan"style="width:250px; height:250px; border-radius:50%;"></div>
                            <h3>Zamar Khan</h3>
                            <h3><span class="position">Developer</span></h3>
                            <p> People find me to be an upbeat, self-motivated team player with excellent communication skills and they call me a savage too!</p> </div>
                    </div>

                    <div class="col-md-4">
                        <div class="team-box text-center to-animate-2">
                            <div class="user"><img class="img-reponsive" src="img/new1.jpg" alt="Ali Tanveer"style="width:250px; height:250px; border-radius:50%;"></div>
                            <h3>Ali Tanveer</h3>
                            <h3><span class="position">Developer</span></h3>
                            <p>I am a computer scientist who is always hungry for knowledge and determined to convert information into necessity.</p>
                            
                        </div>
                    </div>

                  </div>
                </div>     


            </div>
        </div>
    </div>
        

</section>

 <footer id="footer">

             <div class="footer-copyright">

                <div class="container">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <a href='{{url("")}}'  >    <h2 style="color:#63a599"  ><B>  www.carshare.com</B> </h2></a>
                       
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12" style="float: right;" >
                        <a href='{{url("")}}'  >    <h3 style="color:#63a599"  >  ABOUT US </h3></a>
                       
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
