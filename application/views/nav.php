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
         <h1 class="text-light"><a href="<?= base_url()?>main" class="scrollto/"><span><img src="<?= base_url()?>image/logo.png"></span></a></h1>
      </div>
      <div class="logo text-center mob">
         <h1 class="text-light"><a href="<?= base_url()?>main" class="scrollto/"><span><img src="<?= base_url()?>image/logo.png"></span></a></h1>
      </div>
      <nav class="main-nav float-right d-none d-lg-block" id="myMenu">
         <ul>
            <li id="aboutus"><a href="#">About Us</a></li>
            <li><a href="<?= base_url()?>main/communityEvents">Events</a></li>
            <!-- <li><a href="<?= base_url()?>main/communityBooking">Find a Room</a></li> -->
            <li><a href="<?= base_url()?>main/services">Memberships</a></li>
            <li class="lap"><a href="#contact" data-toggle="modal" data-target="#modalcontact">Contact</a></li>
            <li class="mob"><a href="#contact" onclick="menuClickFunction()" data-toggle="modal" data-target="#mobModalcontact">Contact</a></li>
            <li><a href="#" disabled="disabled" onclick="return false;">Blog</a></li>
            <li class="lap"><a href="#login"   data-toggle="modal" data-target="#partnermodal">Partner With Us</a></li>
            <?php if($this->session->userdata('is_logged_in')){ ?>
            <li><a href="<?= base_url()?>main/profile">Account</a></li>
            <li class="lap"><a href="<?= base_url() ?>main/logout" >Logout</a></li>
            <li class="mob"><a onclick="menuClickFunction()" href="<?= base_url() ?>main/logout" >Logout</a></li>
            <?php }else{ ?>
            <li class="lap"><a href="#login" id="login_location"  data-toggle="modal" data-target="#modalLogin">Login</a></li>
            <li class="mob"><a href="#" onclick="menuClickFunction()" data-toggle="modal" data-target="#modalLogin">Login</a></li>
            <!-- <li class="mob"><a href="#" onclick="menuClickFunction()" data-toggle="modal" data-target="#partnermodal">Partner</a></li> -->
            <?php } ?>
            <!-- <li class="lap"><a href="#" id="addClass"><i class="fa fa-search"></i></a></li> -->
         </ul>
      </nav>
   </div>
</header>
<script>
   $(function () {
     var lastScrollTop = 0;
     var $navbar = $('#header');
     $(window).scroll(function(event){
       var st = $(this).scrollTop();
       if (st > lastScrollTop) {
         $navbar.css('background-color','none');
       } else {
         $navbar.$navbar.css('background-color','orange');
       }
       lastScrollTop = st;
     });
   });
   $(document).on('click', '#aboutus', function(e) {
     $('body').toggleClass('mobile-nav-active');
     $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
     $('.mobile-nav-overly').toggle();
     $('html, body').animate({
       'scrollTop' : $("#about").position().top
     }); 
   });
</script>