
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
  
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">SuperAdmin</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Rides</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('addride')}}"><i class="fa fa-circle-o"></i> Create ride</a></li>
            <li><a href="{{url('viewride')}}"><i class="fa fa-circle-o"></i> view ride or edit ride</a></li>
            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

          
            <li><a href="{{url('viewuser')}}"><i class="fa fa-circle-o"></i>view users/edit users</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">


            <li><a href="{{url('view_report')}}"><i class="fa fa-circle-o"></i>view users/edit users</a></li>
          </ul>
        </li>
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>query</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('addquery')}}"><i class="fa fa-circle-o"></i>Add query</a></li>
          
            <li><a href="{{url('viewquery')}}"><i class="fa fa-circle-o"></i>view query/edit query</a></li>
          </ul>
        </li>
      


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>