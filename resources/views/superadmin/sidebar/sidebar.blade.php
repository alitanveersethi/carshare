
<aside class="main-sidebar"style="background-color:#404242; color: white;" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
  
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"><h4><b>ADMIN</b></h4></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span ><b>RIDES</b></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('addride')}}"><i class="fa fa-dashboard"></i><b>CREATE RIDES</b> </a></li>
            <li><a href="{{url('viewride')}}"><i class="fa fa-dashboard"><b></i>VIEW/EDIT RIDES</a></b> </li>
            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span><b> USERS</b> </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

          
            <li><a href="{{url('viewuser')}}"><i class="fa fa-user"></i><b>VIEW/ROLE USER</a></b></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-circle"></i> <span><b>REPORTS</b> </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">


            <li><a href="{{url('view_report')}}"><i class="fa fa-circle-o"></i><b>VIEW REPORTS </b></a></li>
          </ul>
        </li>
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-circle"></i> <span><b> COMMENTS</b></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('query')}}"><i class="fa fa-circle-o"><B></i>VIEW/ADD COMMENT </a></B></li>
          </ul>
        </li>
      


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>