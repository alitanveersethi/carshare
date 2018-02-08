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
                                <a data-toggle="modal" href="{{url('login')}}" style="color: #273a4d"  ><b><BUTTON style=" background-color:  #273a4d ;color:#63a599 " >
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
                               
                                @endif  </form>

                            </div><!-- end .user-log -->

                        </div><!-- end .col-sm-4 -->
                         @if(Auth::guest())
                          <a  class="navbar-brand" href="{{ url('/') }}" >
                       <h3 style="color:#63a599 " > <b>HAVE A SAFE RIDE</b> </h3> 
                    </a>

                        
                    @elseif(Auth::User()->role=="user")
                     <a class="navbar-brand" href="{{ url('/contact') }}" >
                       <h3 style="color:#63a599" > <b>PASSENGER "CONTACT IF YOU WANT TO CREATE RIDE" </b> </h3> 
                    </a>
                       
  
                    @elseif(Auth::User()->role=="Admin")
                      <a class="navbar-brand" href="{{ url('/admin') }}" >
                       <h3 style="color:#63a599" > <b>DRIVER "CLICK HERE TO ADD RIDE"</b> </h3> 
                    </a>
                    @else
                    <a class="navbar-brand" href="{{ url('/superadmin') }}" >
                       <h3 style="color:#63a599" > <b>ADMIN "CLICK HERE TO OPEN ADMIN PANEL"</b> </h3> 
                    </a>

                   

                    @endif

                       

                        

                    </div><!-- end .row -->
              </section><!-- end .container -->

            </div><!-- end .top-menu -->

            <div class="main-baner" style="height: auto;" >

                <div class=" background parallax clearfix" style="background-image: url('img/road_lighting_night_119175_1280x720.jpg');" data-img-width="1024" data-img-height="800"   >
                <div class="logo">
                                                <b><h1 style="color:#63a599" >CAR SHARE</h1></b>
                                            </div>

                  


                            <section class="container"  >

                                <div class="row"  >

                                        

                                        <div class="col-md-12 col-sm-6 col-xs-12"   >
                                           <div class="search-content" style="background-color:#273a4d;">

                                            <form style="background-color:#273a4d; " action="{{url('search')}}" method='post 'novalidate autocomplete="on" class="idealforms searchtours"

                                              > 
                                              {{ csrf_field() }}
                                               <div class="row">

                                                    <div class="col-md-5 col-sm-3 col-xs-12">
                                                        <div class="field">
                                                            <input style="text-transform: uppercase" type="text" id='source_city' name="source_city" placeholder="SOURCE" required ></input>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5 col-sm-3 col-xs-12">

                                                        <div class="field">
                                                            <input style="text-transform: uppercase" type="text" id='destination_city' name="destination_city" placeholder="DESTINATION" required ></input>         </div>

                                                    </div>



                                                    <div class="col-md-2 col-sm-3 col-xs-12">

                                                        <div class="field buttons">
                                                            <button type="submit" class="btn btn-lg green-color" style="background-color:#63a599;color:#273a4d; " ><b>SEARCH</b></button>
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