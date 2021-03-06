<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>

            <li class=""><a href="{{ route('post.index') }}"><i class="fa fa-circle-o"></i> Post</a></li>

            <li class=""><a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i> Category</a></li>

            <li class=""><a href="{{ route('tag.index') }}"><i class="fa fa-circle-o"></i> Tag</a></li>

            <li class=""><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i> User</a></li>

            <li class=""><a href="{{ route('role.index') }}"><i class="fa fa-circle-o"></i> Roles</a></li>

            <li class=""><a href="{{ route('permission.index') }}"><i class="fa fa-circle-o"></i> Permission</a></li>

        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>