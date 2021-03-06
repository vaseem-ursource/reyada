<?php include('header.php');?>
<div class="row">
  
                <div class="col-md-3"></div>
              <div class="col-md-6  col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Partners<small>Add Partners</small></h2>
                    <div class="clearfix"></div>
                  </div>
                    <?php 
                      if($status=$this->session->flashdata('success')):
                      $status_class=$this->session->flashdata('success')
                    ?>
                    
                    <script>
                    $(document).ready(function(){
                    new PNotify({
                    title: 'Success!',
                    text: '<?= $status ?>',
                    type: 'success',
                    styling: 'bootstrap3'
                   });
                   });
                   </script>
                   
                    <?php endif; ?>
                    <form  enctype="multipart/form-data" action="<?php echo base_url('Partners/Insert');?>" method="post" class="form-horizontal form-label-left input_mask"> 

                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Company Name</label>
                          <input type="text" class="form-control" name="companyName" id="companyName" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Phone</label>
                          <input type="text" class="form-control" name="phone" id="phone" maxlength="20" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Person Incharge</label>
                          <input type="text" class="form-control" name="personIncharge" id="personIncharge" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Email</label>
                          <input type="email" class="form-control" name="email" id="email" required="true">
                   </div>
                   <div class="form-group has-feedback col-md-12 col-sm-12 col-xs-12">
                        <label class="">Image</label>
                        <input class="btn btn-default form-control" type="file" name="image_url" id="image_url" accept="image/png, image/jpeg" required>
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">URL (optional)</label>
                          <input type="text" class="form-control"  name="url" id="phone">
                   </div>
                   
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Description (optional)</label>
                          <textarea class="form-control" name="description"  maxlength="120" id="comments"></textarea>
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Address</label>
                          <textarea class="form-control" name="address" id="address" required="true"></textarea>
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Password</label>
                          <input type="password" class="form-control" name="password" id="password" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Confirm Password</label>
                          <input type="password" class="form-control" name="cnf_password" id="cnf_password" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Comments (optional)</label>
                          <textarea class="form-control" name="comments" id="comments"></textarea>
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Status</label>
                          <select class="dropdown-toggle form-control" name="status" id="status" required="true">
                            <option value="">-- Select Status --</option> 
                            <option value="Active">Active</option> 
                            <option value="Inactive">Inactive</option> 
                        </select>
                   </div>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-2">
                      <a href="<?= base_url('Partners');?>"><button type="button" class="btn btn-primary">Cancel</button></a>
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" name="save" class="btn btn-success">Save & Add</button>
                      <button type="submit" name="insert" class="btn btn-success">Submit</button>
                    </div>
                  </div>
              </form>
              </div>
            </div>
        
            <div class="col-md-3"></div>
          </div>
          <script> 
          var password = document.getElementById("password") 
            , cnf_password = document.getElementById("cnf_password"); 
 
          function validatePassword(){ 
            if(password.value != cnf_password.value) { 
              cnf_password.setCustomValidity("Passwords Don't Match"); 
            } else { 
              cnf_password.setCustomValidity(''); 
            } 
          } 
 
          password.onchange = validatePassword; 
          cnf_password.onkeyup = validatePassword; 
          </script>
        
<?php include('footer.php');?>