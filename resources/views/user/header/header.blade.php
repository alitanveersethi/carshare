<header class="header">
<script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

            <div class="top-menu">

                <section class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="user-log">
@if (Auth::guest())
                                <a data-toggle="modal" href="{{url('login')}}">
                                    Log in
                                </a> 
                                <a data-toggle="modal" href="{{url('register')}}">
                                    Sign up
                                </a>
                                @else
                                <a data-toggle="modal" href="{{ url('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                              <b style="text-transform: uppercase;" > WELCOME {{Auth::user()->name}}</b>
                                </a>
                                 <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </div><!-- end .user-log -->
                        </div><!-- end .col-sm-4 -->

                        

                    </div><!-- end .row -->
          @endif      </section><!-- end .container -->

            </div><!-- end .top-menu -->

            <div class="main-baner" style="height: auto;" >

                <div class=" background parallax clearfix" style="background-image:url('img/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg');" data-img-width="1024" data-img-height="800"   >
                <div class="logo">
                                                <b><h1 style="color: black" >CAR SHARE</h1></b>
                                            </div>

                  


                            <section class="container"  >

                                <div class="row"  >

                                        

                                        <div class="col-md-12 col-sm-6 col-xs-12"   >
                                           <div class="search-content" style="background-color:#404242;">

                                            <form style="background-color:#404242; " action="{{url('search')}}" method='post 'novalidate autocomplete="on" class="idealforms searchtours"

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



                    


            </div><!-- end .main-baner -->

        </header><!-- end .header -->