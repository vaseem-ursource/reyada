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
                        <label class="">Address</label>
                          <input type="text" class="form-control" name="address" id="address" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Phone</label>
                          <input type="text" class="form-control" name="phone" id="phone" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Person Incharge</label>
                          <input type="text" class="form-control" name="personIncharge" id="personIncharge" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Email</label>
                          <input type="email" class="form-control" name="email" id="email" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Password</label>
                          <input type="password" class="form-control" name="password" id="password" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Comments</label>
                          <input type="text" class="form-control" name="comments" id="comments" required="true">
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
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 col-sm-offset-3">
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
          
        
<?php include('footer.php');?>