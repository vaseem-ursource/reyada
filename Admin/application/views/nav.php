
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-building"></i> <span>Reyada</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= base_url('assets/images/user_image.jpg');?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  </li>
                  <li><a href="<?= base_url('Categories');?>"><i class="fa fa-list-alt"></i> Categories</a>
                  </li>
                  <li><a href="<?= base_url('Articles');?>"><i class="fa fa-newspaper-o"></i> Articles</a>
                  </li>
                  <li><a href="<?= base_url('Partners');?>"><i class="fa fa-share-alt"></i> Partners</a>
                  </li>
                  <li><a href="<?= base_url('AdminUsers');?>"><i class="fa fa-user"></i> Admin Users</a>
                  </li>
                  <li><a href="<?= base_url('Members');?>"><i class="fa fa-group"></i> Members</a>
                  </li>
                  <li><a href="<?= base_url('ContactUs');?>"><i class="fa fa-phone"></i> Contactus</a>
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
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?= base_url('assets/images/user_image.jpg');?>" alt="">John Doe
                  </a>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        

        <!-- page content -->
        <div class="right_col" role="main">