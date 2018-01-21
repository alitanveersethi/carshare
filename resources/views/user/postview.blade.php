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
                                        <h3><B><a href="#">FROM {{$ride->source_city}} TO  {{$ride->destination_city}}</a></h3>RIDE BY <a href="#">{{$ride->title}}</B></a>
                                    </div>
                                    <div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                <B>TIME : {{$ride->date}} at {{$ride->time}}</B>
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i class="fa fa-user"></i><B>
                                               SEATS : {{$ride->seats_available}}
                                           </B>
                                     </a>
                                        </li>

                                         <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="fare" >
                                                <i ></i>
                                                <B> FARE : Rs {{$ride->fare}} </B>
                                            </a>
                                        </li>
                                         <li class="ride-content">
                                            <a href="#"  data-original-title="fare" >
                                                <i ></i>
                                                <B>  DRIVER EMAIL: {{$ride->User->email}} </B>
                                            </a>
                                        </li>
                                         <li class="ride-content">
                                            <a href="#" class="tooltip-link" data-original-title="identity card number" >
                                                <i ></i>
                                                <B>  DRIVER CNIC: {{$ride->User->cnic}} </B>
                                            </a>
                                        </li>
                                          <li class="ride-content">
                                            <a href="#" class="tooltip-link" data-original-title="cell number" >
                                                <i ></i>
                                                <B>  CONTACT: {{$ride->User->cell_no}} </B>
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

                                <h3>5 Comments</h3>

                                <ol class="commentslist">

                                    <li id="comment-1">

                                        <article class="comment even thread-even depth-1 clearfix">

                                            <header>

                                                <div class="comment-user-name">
                                                    <a href="#">Jane Doe </a>
                                                </div>

                                                <span>Posted on July 22, 2013 at 15:00 PM </span>

                                            </header>

                                            <figure class="comment-avatar">
                                                <img alt='' src='img/avatar-1.jpg' class='avatar avatar-80 photo avatar-default' height='80' width='80' />
                                            </figure>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus diam turpis, mattis sed turpis in, pulvinar cursus sapien. Mauris neque risus, condimentum sed ante quis, porttitor euismod mi. </p>

                                            <a class='comment-reply-link btn green-color'>Reply</a>
                                        </article>

                                        <ul class='children'>

                                            <li id="comment-4">

                                                <article class="comment clearfix ">

                                                    <header>

                                                        <div class="comment-user-name">
                                                            John Doe
                                                        </div>

                                                        <span>Posted on July 22, 2013 at 15:22 PM  </span>

                                                    </header>

                                                    <figure class="comment-avatar">
                                                        <img alt='' src='img/avatar-2.jpg' class='avatar avatar-80 photo avatar-default' height='80' width='80' />
                                                    </figure>


                                                    <p>Nulla ullamcorper et justo ut tincidunt. Nulla vehicula ante in enim dictum molestie. Donec arcu metus, faucibus non felis eget, vulputate laoreet tellus. Nullam eget accumsan tellus, eget efficitur massa. Vivamus rhoncus, metus quis posuere tristique, massa lacus malesuada lectus, in pulvinar mauris tellus a mi.</p>

                                                    <a class='comment-reply-link btn green-color'>Reply</a>

                                                </article>

                                                <ul class='children'>

                                                    <li id="comment-5">

                                                        <article class="comment clearfix ">

                                                            <header>


                                                                <div class="comment-user-name">
                                                                    Jane Doe
                                                                </div>

                                                                <span>Posted on July 22, 2013 at 15:40 PM </span>

                                                            </header>

                                                            <figure class="comment-avatar">
                                                                <img alt='' src='img/avatar-1.jpg' class='avatar avatar-80 photo avatar-default' height='80' width='80' />
                                                            </figure>

                                                            <p>Praesent ut iaculis nisl, eget semper elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce a pretium sem. Duis vehicula sed lacus non malesuada. Praesent tincidunt laoreet dui nec faucibus.</p>

                                                            <a class='comment-reply-link btn green-color'>Reply</a>
                                                        </article>

                                                        <ul class='children'>

                                                            <li id="comment-6">

                                                                <article class="comment  clearfix">

                                                                    <header>

                                                                        <div class="comment-user-name">
                                                                            John Doe
                                                                        </div>

                                                                        <span>Posted on July 22, 2013 at 15:45 PM  </span>

                                                                    </header>

                                                                    <figure class="comment-avatar">
                                                                        <img alt='' src='img/avatar-2.jpg' class='avatar avatar-80 photo avatar-default' height='80' width='80' />
                                                                    </figure>

                                                                    <p>Maecenas eu ligula ac felis imperdiet efficitur. Nunc neque ligula, elementum sit amet est nec, fringilla euismod ligula. Proin auctor, purus ac scelerisque vehicula, diam elit scelerisque felis, a bibendum sapien lectus ac est. Proin malesuada ligula in vulputate dictum. Sed malesuada fringilla erat eget malesuada. </p>

                                                                    <a class='comment-reply-link btn green-color'>Reply</a>
                                                                </article>

                                                                <ul class='children'>

                                                                    <li id="comment-7">

                                                                        <article class="comment  clearfix">

                                                                            <header>

                                                                                <div class="comment-user-name">
                                                                                    Jane Doe
                                                                                </div>

                                                                                <span>Posted on July 22, 2013 at 15:46 PM  </span>

                                                                            </header>

                                                                            <figure class="comment-avatar">
                                                                                <img alt='' src='img/avatar-1.jpg' class='avatar avatar-80 photo avatar-default' height='80' width='80' />
                                                                            </figure>

                                                                            <p>Curabitur non pharetra quam. Donec non turpis cursus, laoreet justo in, vulputate velit. Donec eleifend nunc id orci blandit, in vulputate ipsum gravida. In sapien massa, porttitor in elit id, interdum aliquam mauris. </p>

                                                                            <a class='comment-reply-link btn green-color'>Reply</a>
                                                                        </article>

                                                                    </li>

                                                                </ul><!-- end .children -->
                                                            </li>
                                                        </ul><!-- end .children -->

                                                    </li>
                                                </ul><!-- end .children -->

                                            </li>
                                        </ul><!-- end .children -->
                                    </li>

                                </ol><!-- end .commentslist -->

                                <div class="comment-nav clearfix">
                                    <div class="prev pull-left">

                                        <a href="#">
                                            <i class="fa fa-chevron-left"></i>
                                            Prev Comments
                                        </a>

                                    </div>
                                    <div class="next pull-right">

                                        <a href="#">
                                            Next Comments
                                            <i class="fa fa-chevron-right"></i>
                                        </a>

                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div id="respond">

                                    <div class="clearfix"></div>

                                    <h3 id="reply-title">Leave a Reply</h3>

                                    <form id="comment-form" action="" novalidate autocomplete="off" class="idealforms addcomment">

                                        <div class="field">
                                            <input name="username" type="text" placeholder="Name">
                                            <span class="error"></span>
                                        </div>

                                        <div class="field">
                                            <input name="email" type="email" placeholder="Email address" >
                                            <span class="error"></span>
                                        </div>

                                        <div class="field">
                                            <input  name="website" type="text"  placeholder="Website" >
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
                            Copyright by My ride
                        </div>

                    </div><!-- end .row -->
                </div><!-- end .container -->

            </div><!-- end .footer-copyright -->

        </footer><!-- end #footer -->

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div><!-- end .modal-header -->

                    <div class="modal-body">
                        <form action="" novalidate autocomplete="off" class="idealforms login">

                            <div class="log-header">
                                <span class="log-in">Log in</span>
                            </div>

                            <div class="field">
                                <input name="username" type="text" placeholder="Username">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input type="password" name="password" placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field buttons">
                                <button type="submit" class="submit btn green-color">Log in</button>
                            </div>

                            <a href="#" class="log-twitter twitter"><i class="fa fa-twitter"></i>Twitter</a>
                            <a href="#" class="log-facebook facebook"><i class="fa fa-facebook"></i>Facebook</a>

                            <div class="clearfix"></div>

                        </form><!-- end .login -->
                    </div><!-- end .modal-body -->

                </div><!-- end .modal-content -->
            </div><!-- end .modal-dialog -->
        </div><!-- end .modal -->

        <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form action="" novalidate autocomplete="off" class="idealforms reg">

                            <div class="log-header">
                                <span class="log-in">Sign up</span>
                            </div>

                            <div class="field">
                                <input name="username" type="text" placeholder="Username">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input name="email" type="email"  placeholder="E-Mail">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input type="password" name="password" placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input name="confirmpass" type="password"  placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field buttons">
                                <button type="submit" class="submit btn green-color">Sign up</button>
                            </div>

                            <div class="clearfix"></div>

                        </form><!-- end .reg -->
                    </div><!-- end .modal-body -->

                </div><!-- end .modal-content -->
            </div><!-- end .modal-dialog -->
        </div><!-- end .modal -->

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
