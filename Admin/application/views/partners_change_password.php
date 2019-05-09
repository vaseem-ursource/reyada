<?php include('header.php');?>
<div class="row">
  
                <div class="col-md-3"></div>
              <div class="col-md-6  col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Partners<small>Change Password</small></h2>
                    <div class="clearfix"></div>
                  </div>
                    <?php 
                      if($status=$this->session->flashdata('success')):
                      $status_class=$this->session->flashdata('success')
                    ?>
                    
                    <script>
                    $(document).ready(function(){
                    new PNotify({
                    title: 'Warning!',
                    text: '<?= $status ?>',
                    type: 'danger',
                    styling: 'bootstrap3'
                   });
                   });
                   </script>
                   
                    <?php endif; ?>
                    <form  enctype="multipart/form-data" action="<?php echo base_url('Partners/UpdatePassword');?>" method="post" class="form-horizontal form-label-left input_mask"> 
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" hidden>
                        <input type="text" name="partner_id" value="<?=$PartnerId?>" id="partner_id" hidden>
                    </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Old Password</label>
                          <input type="password" class="form-control" name="oldPassword" id="oldPassword" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">New Password</label>
                          <input type="password" class="form-control" name="newPassword" id="newPassword" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Confirm Password</label>
                          <input type="password" class="form-control" name="confPassword" id="confPassword" required="true">
                   </div>
                   <script>
                   var password = document.getElementById("newPassword")
                    , confirm_password = document.getElementById("confPassword");

                    function validatePassword(){
                        if(password.value != confirm_password.value) {
                            confirm_password.setCustomValidity("New Passwords Don't Match");
                        } else {
                            confirm_password.setCustomValidity('');
                        }
                    }

                    password.onchange = validatePassword;
                    confirm_password.onkeyup = validatePassword;
                   </script>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <a href="<?= base_url('Partners');?>"><button type="button" class="btn btn-primary">Cancel</button></a>
                        <button class="btn btn-primary" type="reset">Reset</button>
                      <button type="submit" class="btn btn-success">Change</button>
                    </div>
                  </div>
              </form>
              </div>
            </div>
        
            <div class="col-md-3"></div>
          </div>
          
        
<?php include('footer.php');?>