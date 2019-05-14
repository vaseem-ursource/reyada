<?php include('header.php');?>
<div class="row">
  
                <div class="col-md-3"></div>
              <div class="col-md-6  col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Admin Users<small>Add Admin Users</small></h2>
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
                    <form  enctype="multipart/form-data" action="<?php echo base_url('AdminUsers/Insert');?>" method="post" class="form-horizontal form-label-left input_mask"> 

                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Email</label>
                          <input type="email" class="form-control" name="email" id="email" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Password</label>
                          <input type="password" class="form-control" name="password" id="password" required="true">
                   </div>
                   <!-- <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Role</label>
                          <select class="dropdown-toggle form-control" name="role" id="role" required="true">
                            <option value="">-- Select Role --</option> 
                            <option value="Admin">Admin</option> 
                            <option value="Partner">Partner</option> 
                        </select>
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Partner</label>
                    <select name="partnerId" class="dropdown-toggle form-control" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopoup="true" aria-expanded="false">
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <option value="">-- Select Partner --</option> 
                    <?php foreach($Partners->result() as $row){ ?>
                    <option class="dropdown-item" value="<?= $row->partner_id;?>"><?= $row->company_name;?></option>

                    <?php }?>
                    </div>
                    </select>
                   </div> -->
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Status</label>
                          <select class="dropdown-toggle form-control" name="status" id="status" required="true">
                            <option value="">-- Select Status --</option> 
                            <option value="Active">Active</option> 
                            <option value="Inactive">Inactive</option> 
                        </select>
                   </div>
                   
                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <a href="<?= base_url('AdminUsers');?>"><button type="button" class="btn btn-primary">Cancel</button></a>
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