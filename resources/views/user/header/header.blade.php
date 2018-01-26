<header class="header">

            <div class="top-menu">

                <section class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="user-log">

                                <a data-toggle="modal" href="{{url('login')}}">
                                    Log in
                                </a> /
                                <a data-toggle="modal" href="{{url('register')}}">
                                    Sign up
                                </a>

                            </div><!-- end .user-log -->
                        </div><!-- end .col-sm-4 -->

                        

                    </div><!-- end .row -->
                </section><!-- end .container -->

            </div><!-- end .top-menu -->

            <div class="main-baner">

                <div class="fullscreen background parallax clearfix" style="background-image:url('img/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg');" data-img-width="1024" data-img-height="800">

                    <div class="main-parallax-content">

                        <div class="second-parallax-content">

                            <section class="container">

                                <div class="row">

                                    <div class="main-header-container clearfix">

                                        <div class="col-md-2 col-sm-12 col-xs-12">

                                            <div class="logo">
                                                <h1>CAR SHARE</h1>
                                            </div><!-- end .logo -->

                                        </div><!-- end .col-sm-4 -->

                                        <div class="col-md-9 col-sm-6 col-xs-12">
                                           <div class="search-content">

                                            <form action="{{url('search')}}" method='post 'novalidate autocomplete="on" class="idealforms searchtours"

                                              > 
                                              {{ csrf_field() }}
                                               <div class="row">

                                                    <div class="col-md-5 col-sm-3 col-xs-12">
                                                        <div class="field">
                                                            <input style="text-transform: uppercase" type="text" id='source_city' name="source_city" placeholder="SOURCE" ></input>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5 col-sm-3 col-xs-12">

                                                        <div class="field">
                                                            <input style="text-transform: uppercase" type="text" id='destination_city' name="destination_city" placeholder="DESTINATION" ></input>         </div>

                                                    </div>



                                                    <div class="col-md-2 col-sm-3 col-xs-12">

                                                        <div class="field buttons">
                                                            <button type="submit" class="btn btn-lg green-color">Search</button>
                                                        </div>

                                                    </div>

                                                </div>


                                            </form>
                                        </div><!-- end .search-content -->



                                        </div><!-- end .col-md-8 -->

                                    </div><!-- end .main-header-container -->

                                </div><!-- end .row -->

                            </section><!-- end .container -->



                        </div><!-- end .second-parallax-content -->

                    </div><!-- end .main-parallax-content -->

                </div><!-- end .background .parallax -->

            </div><!-- end .main-baner -->

        </header><!-- end .header -->