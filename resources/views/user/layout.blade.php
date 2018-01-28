<!DOCTYPE html>

 <html class="not-ie no-js" lang="en">  

     
        <meta charset="utf-8">
        <title>Car Share</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

     
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

       
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

       

    </head>
    

    <body>
    @include('user.header.header')
    <section class="main-content">
<div class="last-rides">

                           <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="page-sub-title textcenter">
                            <h2><b>LAST RIDES</b></h2>
                            <div class="line"></div>
                        </div><!-- end .page-sub-title -->

                    </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="page-content">

                            <div class="rides-list">
                            @foreach($ride as $rd)

                                <article class="ride-box clearfix">

                                    <div class="ride-content">
                                        <h3><b><a style="text-transform: uppercase" href="#">{{$rd->source_city}} to {{$rd->destination_city}}</a></b></h3><b> RIDE BY   <a style="text-transform: uppercase" href="#"><h3>{{$rd->title}}</h3></a></b>
                                    </div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i style="text-transform: uppercase" class="fa fa-calendar"></i><b>
                                                {{$rd->date}} AT {{$rd->time}}
                                            </a></b>
                                        </li><!-- end .ride-date -->

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i style="text-transform: uppercase" class="fa fa-user"></i><b>
                                                {{$rd->seats_available}}</b>
                                            </a>
                                        </li>

                                         <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="fare" >
                                                <i style="text-transform: uppercase" ><b>Rs{{$rd->fare}}</b></i>
                                                  
                                            </a>
                                        </li>


                                        <li>
                                            <button   style="background-color:#63a599 ; color: #273a4d"  href="#">
                                                
                                                <a style="background-color:#63a599 ; color: #273a4d"  href="map&<?php echo $rd->id ?>" class="btn  btn-success btn-xs"><b>READ MORE</b></a>
                                            </button>
                                        </li>

                                    </ul><!-- end .ride-meta -->

                                </article><!-- end .ride-box -->
                                @endforeach

                              
                            

                               

                            </div><!-- end .events-list -->

                        </div><!-- end .page-content -->

                    </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                        <div class="clearfix"></div>

                        

                    </div><!-- end .page-content -->

                </div><!-- end .row -->
            </div><!-- end .container -->
            </div>
        </section><!-- end .main-content -->

       

        



























@include('user.footer.footer')

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