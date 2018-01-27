<aside class="main-sidebar" style="background-color:#404242; color: white;" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
  
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"><h4><b>DRIVER</b></h4></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i><span><B>RIDES</B></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('admin_addride')}}"><i class="fa fa-circle-o"></i><B>CREATE RIDES</B> </a></li>
            <li><a href="{{url('admin_viewride')}}"><i class="fa fa-circle-o"></i> <b>VIEW/EDIT RIDES</b></a></li>
            
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-circle"></i> <span><B>COMMENTS</B></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('admin_query')}}"><i class="fa fa-circle-o"></i><b>VIEW/ADD COMMENTS</b> </a></li>
          
            
          </ul>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>