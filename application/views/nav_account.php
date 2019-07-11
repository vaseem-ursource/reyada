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
#myMenu ul li a{
 color:black;
}
    </style>
  <header id="header">
    <div class="container">
      <div class="logo float-left mob">
        <a href="#" id="addClassMob"><i class="fa fa-search fa-2x text-dark pt-2"></i></a>
      </div>
      <div class="logo float-left lap">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="<?= base_url()?>main" class="scrollto/"><span><img src="<?= base_url()?>image/logo_black.png"></span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>
      <div class="logo text-center mob">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="<?= base_url()?>main" class="scrollto/"><span><img src="<?= base_url()?>image/logo_black.png"></span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block" id="myMenu">
        <ul>
          <li ><a href="./" class="text-dark">About Us</a></li>
          <li><a href="<?= base_url()?>main/communityEvents">Events</a></li>
          <li><a href="<?= base_url()?>main/communityBooking">Find a Room</a></li>
          
          <li><a href="<?= base_url()?>main/profile" class="text-dark">Account</a></li>
          
          <?php if($this->session->userdata('is_logged_in')){ ?>
            <li class="lap"><a href="<?= base_url() ?>main/logout" class="text-dark" >Logout</a></li>
            <li class="mob"><a onclick="menuClickFunction()" href="<?= base_url() ?>main/logout" >Logout</a></li>
          <?php }else{ ?>
            <li class="lap"><a href="#login" data-toggle="modal" data-target="#modalLogin" class="text-dark">Login</a></li>
            <li class="mob"><a href="#" onclick="menuClickFunction()" data-toggle="modal" data-target="#modalLogin">Login</a></li>
          <?php } ?>

          <li class="lap"><a href="#" id="addClass"><i class="fa fa-search text-dark"></i></a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
  <!-- <script>
$(function () {
  var lastScrollTop = 0;
  var $navbar = $('#header');

  $(window).scroll(function(event){
    var st = $(this).scrollTop();
    if (st == 0) { // scroll down
      // $('#myMenu ul li a').addClass('text-dark');
      // $('#myMenu ul li a').removeClass('text-white');
      $navbar.fadeOut()
    }
    else if (st > lastScrollTop) { // scroll down
      // $('#myMenu ul li a').addClass('text-dark');
      // $('#myMenu ul li a').removeClass('text-white');
      $navbar.fadeOut()
    } else { // scroll up
      // $('#myMenu ul li a').addClass('text-white');
      // $('#myMenu ul li a').removeClass('text-dark');
      $navbar.fadeIn()
    }
    lastScrollTop = st;
  });
});
</script> -->
