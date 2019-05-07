<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?base_url();?>" class="site_title"><i class="fa fa-building "></i> <span>Reyada</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= base_url('assets/gentela/images/user.png')?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome, <b>Admin</b></span>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?= base_url('Admin/Dashboard'); ?>"><i class="fa fa-home"></i>Dashboard</a>
                  </li>
                  <li><a><i class="fa fa-shopping-basket"></i>Link 1<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#>"><i class="fa fa-briefcase"></i>Sub Link 1</a> 
                      <li><a href="#"><i class="fa fa-tags"></i>Sub Link 2</a> 
     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-group"></i>Link 2<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#>"><i class="fa fa-briefcase"></i>Sub Link 1</a> 
                      <li><a href="#"><i class="fa fa-tags"></i>Sub Link 2</a> 
                    </ul>
                  </li>
                  <li><a href="<?= base_url('Admin/Login/Logout');?>"><i class="fa fa-sign-out"></i>Logout<span class=""></span></a>
                  </li>
                 </ul>
              </div>
             </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a class="user-profile">
                    Admin
                  </a> 
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
        