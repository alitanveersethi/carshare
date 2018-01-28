
<aside class="main-sidebar" style="background-color:#273a4d; color: #63a599" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
  
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"  style="background-color:#273a4d; color: #63a599" ><h4><b>ADMIN</b></h4></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"  ></i> <span  style="background-color:#273a4d; color: #63a599" ><b>RIDES</b></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"  style="background-color:#273a4d; color: #63a599" >
            <li><a   href="{{url('addride')}}"><i class="fa fa-dashboard"></i><b>CREATE RIDES</b> </a></li>
            <li><a    href="{{url('viewride')}}"><i class="fa fa-dashboard"><b></i>VIEW/EDIT RIDES</a></b> </li>
            
          </ul>
        </li>

        <li class="treeview "  style="background-color:#273a4d; color: #63a599" >
          <a href="#">
            <i class="fa fa-user"></i> <span  style="background-color:#273a4d; color: #63a599" ><b> USERS</b> </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

          
            <li   ><a href="{{url('viewuser')}}"   ><i class="fa fa-user"></i><b>VIEW/ROLE USER</a></b></li>
          </ul>
        </li>
        <li class="treeview"  style="background-color:#273a4d; color: #63a599" >
          <a href="#">
            <i class="fa fa-circle"></i> <span  style="background-color:#273a4d; color: #63a599" ><b>REPORTS</b> </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"  style="background-color:#273a4d; color: #63a599" >


            <li><a href="{{url('view_report')}}"   ><i class="fa fa-circle-o"></i><b>VIEW REPORTS </b></a></li>
          </ul>
        </li>
          
        <li class="treeview"  style="background-color:#273a4d; color: #63a599" >
          <a href="#">
            <i class="fa fa-circle"></i> <span  style="background-color:#273a4d; color: #63a599" ><b> COMMENTS</b></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('query')}}"   ><i class="fa fa-circle-o"><B></i>VIEW/ADD COMMENT </a></B></li>
          </ul>
        </li>
      


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>