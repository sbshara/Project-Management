@guest
  <aside class="main-sidebar">
	  <section class="sidebar">
		  <ul class="sidebar-menu" data-widget="tree">
			  <li><a href="{{ __('login') }}"><i class="fa fa-sign-in-alt"></i> <span>Login</span></a></li>
			  <li><a href="{{ __('Register') }}"><i class="fa fa-user-plus"></i> <span>Register</span></a></li>
		  </ul>
	  </section>
  </aside>

@else
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ url('/') }}/img/shiblie.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
		  <li class="header">Main Options</li>
		  <!-- Optionally, you can add icons to the links -->
		  <li class="treeview">
          <a href="#"><i class="fa fa-building"></i> <span>Companies</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">All</a></li>
            <li><a href="#">Create New</a></li>
          </ul>
        </li>
		  <!-- ./Companies -->
		  <li class="treeview	">
          <a href="#"><i class="fa fa-project-diagram"></i> <span>Projects</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">All</a></li>
            <li><a href="#">Create New</a></li>
          </ul>
        </li>
		  <!-- ./Projects -->
		  <li class="treeview	">
          <a href="#"><i class="fa fa-tasks"></i> <span>Tasks</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">All</a></li>
            <li><a href="#">Create New</a></li>
          </ul>
        </li>
		  <!-- ./Tasks -->
		  <li class="treeview	">
          <a href="#"><i class="fa fa-pen"></i> <span>Posts</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">All</a></li>
            <li><a href="#">Create New</a></li>
          </ul>
        </li>
		  <!-- ./Posts -->
		  <li class="treeview	">
          <a href="#"><i class="fa fa-users"></i> <span>Users</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">All</a></li>
            <li><a href="#">Create New</a></li>
          </ul>
        </li>
		  <!-- ./Users -->
		  <li class="treeview	">
          <a href="#"><i class="fa fa-tachometer-alt"></i> <span>Admin</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Option 1</a></li>
            <li><a href="#">Option 2</a></li>
          </ul>
        </li>
		  <!-- ./Admin -->
		  <li class="active">
			  <a href="#"><i class="fa fa-link"></i> <span>Link</span></a>
		  </li>
		  <li class="treeview">
			  <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
				  <span class="pull-right-container">
					  <i class="fa fa-angle-left pull-right"></i>
				  </span>
			  </a>
			  <ul class="treeview-menu">
				  <li><a href="#">Link in level 2</a></li>
				  <li><a href="#">Link in level 2</a></li>
			  </ul>
		  </li>
	  </ul>
	  <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
@endguest