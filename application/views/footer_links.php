
  <!-- JavaScript Libraries -->
  <!-- <script src="<?= base_url()?>lib/jquery/jquery.min.js"></script> -->
  <script src="<?= base_url()?>lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?= base_url()?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>lib/easing/easing.min.js"></script>
  <script src="<?= base_url()?>lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?= base_url()?>lib/wow/wow.min.js"></script>
  <script src="<?= base_url()?>lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url()?>lib/counterup/counterup.min.js"></script>
  <script src="<?= base_url()?>lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url()?>lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?= base_url()?>lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?= base_url()?>contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?= base_url()?>js/main.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>js/toastr.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/jquery.validate.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/additional-methods.js"></script>
  <?php if ($this->session->flashdata('success') != ""): ?>
  <script type="text/javascript">
      $(document).ready(function () {
          toastr.success('<?php echo $this->session->flashdata("success"); ?>');
      });
  </script>
  <?php endif; ?>
  <?php if ($this->session->flashdata('error') != ""): ?>
      <script type="text/javascript">
          $(document).ready(function () {
              toastr.error('<?php echo $this->session->flashdata("error"); ?>');
          });
      </script>
  <?php endif; ?>
  <?php if ($this->session->flashdata('warning') != ""): ?>
  <script type="text/javascript">
      $(document).ready(function () {
          toastr.warning('<?php echo $this->session->flashdata("warning"); ?>');
      });
  </script>
  <?php endif; ?>
  
  
  
