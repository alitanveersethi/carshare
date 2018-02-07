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
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvuxh7HFTWHVMIMCQcyWWHFPtNJ21ig1M&callback=initMap">
</script>
 <script>
function initMap() {
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 7,
    center: {lat: 30.3753, lng: 69.3451}
  });
  directionsDisplay.setMap(map);

  
    calculateAndDisplayRoute(directionsService, directionsDisplay);
  
  
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
  directionsService.route({
    origin: '{{$source}}',
    destination: '{{$dest}}',
    travelMode: 'DRIVING'
  }, function(response, status) {
    if (status === 'OK') {
      directionsDisplay.setDirections(response);
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}
</script>

  
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

                        <a class="navbar-brand" href="{{ url('/user') }}" >
                       <h3 style="color:#63a599" > <b>CAR SHARE </b> </h3> 
                    </a>


                        

                    </div><!-- end .row -->
             </section><!-- end .container -->

            </div><!-- end .top-menu -->

</header>


<div id="map"></div>
<!-- Replace the value of the key parameter with your own API key. -->



                            <section class="container"  >


        <section class="main-content">


            <div class="container">
                <div class="row">


                
           

                     <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="page-sub-title textcenter">
                            <h2  style="background-color:#273a4d; color: #63a599"  ><b>RIDE DEAILS</b></h2>
                            <div class="line"   ></div>
                        </div><!-- end .page-sub-title -->

                    </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                    <div class="col-md-12 col-sm-12 col-xs-12"   >

                        <div class="page-content textcenter  ">

                            <div class="articles">

                                <article class="article clearfix">
                                <div class="ride-content">

                                
                                    
                                    <div class="ride-content">
                                        <h2  ><B><a style="color: #273a4d;text-transform: uppercase" >{{$ride->title}} IS DRIVING FROM {{$ride->source_city}} TO  {{$ride->destination_city}}</a></h2> </B></a>
                                    </div>
                                    <div>

                                    <ul class="ride-content">

                                       
                                            <a style="color: #273a4d;text-transform: uppercase" >
                                            <h3>
                                               
                                                <B style="text-transform: uppercase" >TIME:{{$ride->time}}<br>ON: {{$ride->date}}   </B></h3>
                                            </a>
                                        </li>
                                        <br>

                                        <li class="ride-content">
                                            <a style="color: #273a4d;text-transform: uppercase" >
                                                <h3><B style="text-transform: uppercase" >
                                               {{$ride->seats_available}} SPARE SEATS 
                                           </h3> </B>
                                     </a>
                                        </li>
                                        <br>

                                         <li  class="ride-content">
                                            <a style="color: #273a4d;text-transform: uppercase" >
                                                <h3>
                                                <B style="text-transform: uppercase" >  {{$ride->fare}} rs CONTRIBUTION </B>
                                            </h3>
                                            </a>

                                        </li>
                                        <br>
                                         <li class="ride-content">
                                            <a style="color: #273a4d;text-transform: uppercase" >
                                            <h3>                                                
                                                <B style="text-transform: uppercase"  >  DRIVER EMAIL: {{$ride->User->email}} </B>
                                             </h3>
 </a>
                                        </li>
                                        <br>
                                         <li class="ride-content">
                                            <a  >
 
                                                <h3>
                                                <B style="text-transform: uppercase"> DRIVER CNIC: {{$ride->User->cnic}} </B></h3>
                                            </a>
                                        </li>
                                        <br>
                                          <li class="ride-content">
                                            <a style="color: #273a4d;text-transform: uppercase" >
                                               <h3>
                                                <B style="text-transform: uppercase"  >  DRIVER CONTACT: {{$ride->User->cell_no}} </B>
                                                </h3>
                                            </a>
                                        </li>


                                       

                                        </ul>


                                </article><!-- end .article -->

                            </div><!-- end .articles -->


                            
                          
                            </div>
                            
   <div class="clearfix"></div>
 <div class="col-md-12 col-sm-12 col-xs-12">

                             <div class="page-sub-title textcenter">
                            <h2  style="background-color:#273a4d; color: #63a599"  ><b>COMMENTS</b></h2>
                            <div class="line"   ></div>
                        </div><!-- end .page-sub-title -->
                        </div>

      

                                
                                @foreach($query as $qu)
                                  <div class="col-md-12 col-sm-12 col-xs-12"   >
                                  <div class="page-content  ">

                                <ol class="commentslist" style="color: white;"  >

                                    <li id="comment-1">

                                        <article class="comment even thread-even depth-3 clearfix">

                                            <header   >

                                                <div class="comment-user-name">
                                                    <a style="text-transform: uppercase;color:#273a4d "  ><h4><b>{{$qu->sender_name}}</b></h4></a>
                                                </div>


                                                <span    ><h6 style="text-transform: uppercase; color:#63a599;  " ><b>Posted on {{$qu->created_at}}</b><h6></h4></span>


                                            </header>


                                            <p style="text-transform: uppercase;color:#273a4d "  ><h5><b><blockquote>{{$qu->message}}</blockquote></b></h5> </p>
@if($qu->user_id==Auth::id())
                                            <span   ><a   href="user_deleteq&<?php echo $qu->id ?> "> <h6><b> DELETE </b></h6> </a>   </span>
                                            @endif
                                        </article>
                                        @endforeach

                                                                            </li>

                                </ol><!-- end .commentslist -->
                                

                            
<div class="col-md-12 col-sm-12 col-xs-12">

                          <div class="page-sub-title textcenter">
                         
                            <h2  style="background-color:#273a4d; color: #63a599"  ><b>ADD COMMENTS</b></h2>
                            
                          
                                @if(Auth::guest())

<h2><B>LOG IN OR SIGN UP  TO ADD COMMENTS</B></h2>
                         @else
                 
                     <div class="page-sub-title textcenter">
                    

                                     
                                    <form id="comment-form" action="{{url('user_storequery')}}" novalidate autocomplete="off" class="idealforms addcomment" method="POST">
                                    {{ csrf_field() }}

                                        <div class="field">
                                            <input name="post_id" type="text" placeholder="ID"   value="<?php echo $ride['id'] ?>" >
                                            <span class="error"></span>
                                        </div>

                                       


                                        <div class="full-fild">
                                            <textarea name="message" id="message" cols="5" placeholder="Message" rows="4"></textarea>
                                        </div>

                                        <div class="field buttons">
                                            <button style="background-color:#63a599 ; color:#273a4d " type="submit" class="btn btn-lg blue-color">Submit</button>
                                        </div>

                                        <span id="invalid"></span>

                                    </form>
                                  
                                    
                                    @endif
                                    </div>
                                   
 
                    </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->
                   

                                </div><!-- #respond -->

                                <!-- End Comments -->

                            </div> <!-- end .comments-area -->

                        </div><!-- end .page-content -->

                    </div><!-- end .col-md-9 -->

                   

                </div><!-- end .row -->
            </div><!-- end .container -->

        </section><!-- end .main-content -->
        

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