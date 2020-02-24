
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="./" class="site_title"><img src="<?= base_url('assets/images/logo.png')?>" alt="" width="85px"></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= base_url('assets/images/user_image.jpg');?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,<br><?= substr($this->session->userdata('user_name'),0,15);?> </span>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />  

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                <?php
                  if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'Admin'){ ?>

                  <li><a href="<?= base_url('Categories');?>"><i class="fa fa-list-alt"></i> Categories</a>
                  </li>
                  <li><a href="<?= base_url('Articles');?>"><i class="fa fa-newspaper-o"></i> Articles</a>
                  </li>
                  <li><a href="<?= base_url('Events');?>"><i class="fa fa-newspaper-o"></i> Events</a>
                  </li>
                  <li><a href="<?= base_url('Events/tickets');?>"><i class="fa fa-newspaper-o"></i> Event Tickets</a>
                  </li>
                  <li><a href="<?= base_url('Partners');?>"><i class="fa fa-share-alt"></i> Partners</a>
                  </li>
                  <li><a href="<?= base_url('AdminUsers');?>"><i class="fa fa-user"></i> Admin Users</a>
                  </li>
                  <?php } ?>
                  <li><a href="<?= base_url('Members');?>" id="membersshow"><i class="fa fa-group"></i> Members</a>
                  </li>
                  <?php
                  if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'Admin'){ ?>
                  <li><a href="<?= base_url('ContactUs');?>"><i class="fa fa-phone"></i> Contact us</a>
                  </li>
                  <li><a href="<?= base_url('Dashboard/send_new_password');?>"><i class="fa fa-lock"></i> Send New Password</a>
                  </li>
                  <?php } ?>
                  <li><a href="<?= base_url('Login/Logout');?>"><i class="fa fa-sign-out"></i>Log out</a>
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
                    <img src="<?= base_url('assets/images/user_image.jpg');?>" alt=""><?= $this->session->userdata('user_name'); ?>
                  </a>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        

        <!-- page content -->
        <div class="right_col" role="main">