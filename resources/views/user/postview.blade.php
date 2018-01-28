<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
    <head>

        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>CARSHARE</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Styles -->

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Forms -->
        <link href="css/jquery.idealforms.css" rel="stylesheet">
        <!-- Select  -->
        <link href="css/jquery.idealselect.css" rel="stylesheet">
        <!-- Slicknav  -->
        <link href="css/slicknav.css" rel="stylesheet">
        <!-- Main style -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Modernizr -->
        <script src="js/modernizr.js"></script>

        <!-- Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

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
                                    LOGIN
                                </a> </b>
                                <a data-toggle="modal" href="{{url('register')}}  " style="color: #273a4d"   ><b>SIGN UP</b>
                                    
                                </a>
                                @else
                                <a data-toggle="modal" href="{{ url('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                              <b style="text-transform: uppercase;" > LOGIN:{{Auth::user()->name}}</b>
                                </a>
                                 <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </div><!-- end .user-log -->
                        </div><!-- end .col-sm-4 -->

                        

                    </div><!-- end .row -->
          @endif      </section><!-- end .container -->

            </div><!-- end .top-menu -->

           

                  


                            <section class="container"  >


        <section class="main-content">

            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="page-sub-title ">
                            <h2 style="background-color:#273a4d; color: #63a599" ><b>TRIP DETAILS<B></h2>
                            
                        </div><!-- end .page-sub-title -->

                    </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                    <div class="col-md-9 col-sm-12 col-xs-12">

                        <div class="page-content">

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
                            <br>
                            <br>
   <div class="clearfix"></div>


                            <div class="comments-area" id="comments">
                             

                        <div class="page-sub-title ">
                            <h2 style="background-color:#273a4d; color: #63a599"  ><b>COMMENTS<B></h2>
                            <div class=""></div>

                    </div>

      

                                
                                @foreach($query as $qu)

                                <ol class="commentslist">

                                    <li id="comment-1">

                                        <article class="comment even thread-even depth-1 clearfix">

                                            <header>

                                                <div class="comment-user-name">
                                                    <a style="text-transform: uppercase;"  >{{$qu->sender_name}}</a>
                                                </div>

                                                <span style="text-transform: uppercase;">Posted on {{$qu->created_at}}</span>


                                            </header>


                                            <p>{{$qu->message}} </p>
@if($qu->user_id==Auth::id())
                                            <span><a href="user_deleteq&<?php echo $qu->id ?>">DELETE </a>   </span>
                                            @endif
                                        </article>
                                        @endforeach

                                                                            </li>

                                </ol><!-- end .commentslist -->

                            

                                <div class="clearfix"></div>

                                <div id="respond">

                                    <div class="clearfix"></div>
                                     <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="page-sub-title ">
                            <h2 style="background-color:#273a4d; color: #63a599" ><b>ADD COMMENT<B></h2>
                            
                        </div><!-- end .page-sub-title -->

                    </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                                     
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

                                </div><!-- #respond -->

                                <!-- End Comments -->

                            </div> <!-- end .comments-area -->

                        </div><!-- end .page-content -->

                    </div><!-- end .col-md-9 -->

                    <div class="col-md-3 col-sm-12 col-xs-12">

                        
                    </div><!-- end .col-md-3 -->

                </div><!-- end .row -->
            </div><!-- end .container -->

        </section><!-- end .main-content -->

        <footer id="footer">

            <div class="footer-copyright">

                <div class="container">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                       have a save ride
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
