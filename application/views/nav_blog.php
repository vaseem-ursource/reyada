<!--==========================
   Header
  ============================-->
  <header id="header">
    <div class="container">
      <div class="logo float-left mob">
        <a href="#" id="addClassBlogMob"><i class="fa fa-search fa-2x text-white pt-2"></i></a>
      </div>
      <div class="logo float-left lap">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="<?= base_url()?>main/index" class="scrollto/"><span><img src="<?= base_url()?>image/logo.png"></span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>
      <div class="logo text-center mob">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="<?= base_url()?>main/index" class="scrollto/"><span><img src="<?= base_url()?>image/logo.png"></span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block" id="myMenu">
        <ul>
          <li><a href="./">About Us</a></li>
          <li><a href="<?= base_url()?>main/services">Services</a></li>
          <li class="lap"><a href="#contact" data-toggle="modal" data-target="#modalcontact">Contact</a></li>
          <li class="mob"><a href="#contact" onclick="menuClickFunction()" data-toggle="modal" data-target="#mobModalcontact">Contact</a></li>
          <li><a href="<?= base_url()?>main/blog">Blog</a></li>
          <li class="lap"><a href="#login" data-toggle="modal" data-target="#modalLogin">Login</a></li>
		      <li class="mob"><a href="#" onclick="menuClickFunction()" data-toggle="modal" data-target="#mobModalLogin1">Login</a></li>
		      <li class="lap"><a href="#" id="addClassBlog"><span class="fa fa-search"></span></a></li>
          <!-- <a href="#search"><i class="fa fa-search"></i></a> -->
          
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
