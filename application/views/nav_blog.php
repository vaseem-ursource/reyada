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
      <div class="logo float-left lap">
         <h1 class="text-light"><a href="<?= base_url()?>main/index" class="scrollto/"><span><img src="<?= base_url()?>image/logo.png"></span></a></h1>
      </div>
      <div class="logo mob">
         <h1 class="text-light"><a href="<?= base_url()?>main/index" class="scrollto/"><span><img src="<?= base_url()?>image/logo.png"></span></a></h1>
      </div>
      <nav class="main-nav float-right d-none d-lg-block" id="myMenu">
         <ul>
            <li><a href="<?= base_url('main/#mission')?>">About Us</a></li>
            <li><a href="<?= base_url()?>main/communityEvents">Events</a></li>
            <!-- <li><a href="<?= base_url()?>main/communityBooking">Find a Room</a></li> -->
            <li><a href="<?= base_url()?>main/services">Memberships</a></li>
            <li class="lap"><a href="#contact" data-toggle="modal" data-target="#modalcontact">Contact</a></li>
            <li class="mob"><a href="#contact" onclick="menuClickFunction()" data-toggle="modal" data-target="#mobModalcontact">Contact</a></li>
            <li><a  href="#"   onclick="return false;">Blog</a></li>
            <li class="lap"><a href="#login"   data-toggle="modal" data-target="#partnermodal">Partner With Us</a></li>
            <?php if($this->session->userdata('is_logged_in')){ ?>
            <li><a href="<?= base_url()?>main/profile">Account</a></li>
            <li class="lap"><a href="<?= base_url() ?>main/logout" >Logout</a></li>
            <li class="mob"><a onclick="menuClickFunction()" href="<?= base_url() ?>main/logout" >Logout</a></li>
            <?php }else{ ?>
            <li class="lap"><a href="#login" data-toggle="modal" data-target="#modalLogin">Login</a></li>
            <li class="mob"><a href="#" onclick="menuClickFunction()" data-toggle="modal" data-target="#modalLogin">Login</a></li>
            <?php } ?>
         </ul>
      </nav>
   </div>
</header>
<!-- <script>
   $(function () {
     var lastScrollTop = 0;
     var $navbar = $('#header');
     $(window).scroll(function(event){
       var st = $(this).scrollTop();
       if (st > lastScrollTop) { // scroll down
         $navbar.hide()
       } else { // scroll up
         $navbar.show()
       }
       lastScrollTop = st;
     });
   });
</script> -->