<?php include('header.php');?>
<div class="row">
  
                <div class="col-md-3"></div>
              <div class="col-md-6  col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Categories<small>Add Categories</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <?php 
                      if($status=$this->session->flashdata('success')):
                      $status_class=$this->session->flashdata('success')
                      ?>
                      <!-- <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <strong><?= $status ?></strong>
                      </div> -->

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
                    <form  enctype="multipart/form-data" action="<?php echo base_url('Categories/Insert');?>" method="post" class="form-horizontal form-label-left input_mask"> 

                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Title</label>
                          <input type="text" class="form-control" name="title" id="title" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Is Active</label>
                          <select class="dropdown-toggle form-control" name="IsActive" id="IsActive" required="true">
                            <option>-- Select Status --</option> 
                            <option value="active">Active</option> 
                            <option value="inactive">Inactive</option> 
                        </select>
                   </div>
                  <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 col-sm-offset-3">
                      <a href="<?= base_url('Categories');?>"><button type="button" class="btn btn-primary">Cancel</button></a>
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