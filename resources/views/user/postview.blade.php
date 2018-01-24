<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
    <head>

        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>My ride - Single article</title>
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

            <div class="top-menu">

                <section class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="user-log">

                                <a data-toggle="modal" data-target="#loginModal">
                                    Log in
                                </a> /
                                <a data-toggle="modal" data-target="#regModal">
                                    Sign up
                                </a>

                            </div><!-- end .user-log -->
                        </div><!-- end .col-sm-4 -->

                        
                    </div><!-- end .row -->
                </section><!-- end .container -->

            </div><!-- end .top-menu -->

            <div class="main-baner">

                

                    <div class="main-parallax-content">

                        <div class="second-parallax-content">

                            <section class="container">

                                <div class="row">

                                    <div class="main-header-container clearfix">

                                        <div class="col-md-4 col-sm-12 col-xs-12">

                                            <div class="logo">
                                                <h1>CAR SHARE</h1>
                                            </div><!-- end .logo -->

                                        </div><!-- end .col-sm-4 -->

                                        <div class="col-md-8 col-sm-8 col-xs-12">

                                            <nav id="nav" class="main-navigation">

                                                <ul class="navigation">
                                                    <li>
                                                        <a href="{{url('user')}}">Home</a>
                                                    </li>
                                                   
                                                   
                                                 
                                                </ul>

                                            </nav><!-- end .main-navigation -->

                                        </div><!-- end .col-md-8 -->

                                    </div><!-- end .main-header-container -->

                                </div><!-- end .row -->

                            </section><!-- end .container -->

                        </div><!-- end .second-parallax-content -->

                    </div><!-- end .main-parallax-content -->

                </div><!-- end .background .parallax -->

            </div><!-- end .main-baner -->

        </header><!-- end .header -->

        <section class="main-content">

            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="page-sub-title textcenter">
                            <h2>TRIP DETAILS</h2>
                            <div class="line"></div>
                        </div><!-- end .page-sub-title -->

                    </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                    <div class="col-md-9 col-sm-12 col-xs-12">

                        <div class="page-content">

                            <div class="articles">

                                <article class="article clearfix">
                                <div class="ride-content">

                                
                                    
                                    <div class="ride-content">
                                        <h3><B><a href="#" style="text-transform: uppercase" >FROM {{$ride->source_city}} TO  {{$ride->destination_city}}</a></h3>RIDE BY <a style="text-transform: uppercase" href="#">{{$ride->title}}</B></a>
                                    </div>
                                    <div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                <B style="text-transform: uppercase" >TIME : {{$ride->date}} at {{$ride->time}}</B>
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i class="fa fa-user"></i><B style="text-transform: uppercase" >
                                               SEATS : {{$ride->seats_available}}
                                           </B>
                                     </a>
                                        </li>

                                         <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="fare" >
                                                <i ></i>
                                                <B style="text-transform: uppercase" > FARE : Rs {{$ride->fare}} </B>
                                            </a>
                                        </li>
                                         <li class="ride-content">
                                            <a href="#"  data-original-title="fare" >
                                                <i ></i>
                                                <B style="text-transform: uppercase"  >  DRIVER EMAIL: {{$ride->User->email}} </B>
                                            </a>
                                        </li>
                                         <li class="ride-content">
                                            <a href="#" class="tooltip-link" data-original-title="identity card number" >
                                                <i ></i>
                                                <B style="text-transform: uppercase"  >  DRIVER CNIC: {{$ride->User->cnic}} </B>
                                            </a>
                                        </li>
                                          <li class="ride-content">
                                            <a href="#" class="tooltip-link" data-original-title="cell number" >
                                                <i ></i>
                                                <B style="text-transform: uppercase"  >  CONTACT: {{$ride->User->cell_no}} </B>
                                            </a>
                                        </li>


                                        <li>
                                        </li>

                                        </ul>
                                        


                                </article><!-- end .article -->

                            </div><!-- end .articles -->


                            

                            </div>

                            <div class="comments-area" id="comments">

                                <!-- Begin Comments -->
                                

                                <h3>Comments</h3>
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

                                            <span><a href="user_deleteq&<?php echo $qu->id ?>">DELETE </a>   </span>
                                        </article>
                                        @endforeach

                                                                            </li>

                                </ol><!-- end .commentslist -->

                            

                                <div class="clearfix"></div>

                                <div id="respond">

                                    <div class="clearfix"></div>

                                    <h3 id="reply-title">Leave a Reply</h3>

                                    <form id="comment-form" action="{{url('user_storequery')}}" novalidate autocomplete="off" class="idealforms addcomment" method="POST">
                                    {{ csrf_field() }}

                                        <div class="field">
                                            <input name="post_id" type="text" placeholder="ID"   value="<?php echo $ride['id'] ?>" >
                                            <span class="error"></span>
                                        </div>

                                       

                                        <div class="field">
                                            <input  id="sender_subject" name="sender_subject" type="text"  placeholder="subject" >
                                            <span class="error"></span>
                                        </div>

                                        <div class="full-fild">
                                            <textarea name="message" id="message" cols="5" placeholder="Message" rows="4"></textarea>
                                        </div>

                                        <div class="field buttons">
                                            <button type="submit" class="btn btn-lg blue-color">Submit</button>
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
