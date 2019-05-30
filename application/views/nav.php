<!--==========================
   Header
  ============================-->
  <style>
    .fade-in {
  visibility: visible;
  opacity: 1;
  transition: opacity 1s linear;
}

.fade-out {
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s 1s, opacity 1s linear;
}
    </style>
  <header id="header">
    <div class="container">
      <div class="logo float-left mob">
        <a href="#" id="addClassMob"><i class="fa fa-search fa-2x text-white pt-2"></i></a>
      </div>
      <div class="logo float-left lap">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="<?= base_url()?>main" class="scrollto/"><span><img src="<?= base_url()?>image/logo.png"></span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>
      <div class="logo text-center mob">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="<?= base_url()?>main" class="scrollto/"><span><img src="<?= base_url()?>image/logo.png"></span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block" id="myMenu">
        <ul>
          <li><a href="./">About Us</a></li>
          <li><a href="<?= base_url()?>main/services">Services</a></li>
          <li class="lap"><a href="#contact" data-toggle="modal" data-target="#modalcontact">Contact</a></li>
          <li class="mob"><a href="#contact" onclick="menuClickFunction()" data-toggle="modal" data-target="#mobModalcontact">Contact</a></li>
          <li><a href="<?= base_url()?>main/blog">Blog</a></li>
          
          <?php if($this->session->userdata('is_logged_in')){ ?>
            <li class="lap"><a href="<?= base_url() ?>main/logout" >Logout</a></li>
            <li class="mob"><a onclick="menuClickFunction()" href="<?= base_url() ?>main/logout" >Logout</a></li>
          <?php }else{ ?>
            <li class="lap"><a href="#login" data-toggle="modal" data-target="#modalLogin">Login</a></li>
            <li class="mob"><a href="#" onclick="menuClickFunction()" data-toggle="modal" data-target="#mobModalLogin1">Login</a></li>
          <?php } ?>

          <li class="lap"><a href="#" id="addClass"><span class="fa fa-search"></span></a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
  <script>
$(function () {
  var lastScrollTop = 0;
  var $navbar = $('#header');

  $(window).scroll(function(event){
    var st = $(this).scrollTop();
    if (st > lastScrollTop) { // scroll down
      $navbar.fadeOut()
    } else { // scroll up
      $navbar.fadeIn()
    }
    lastScrollTop = st;
  });
});
</script>
