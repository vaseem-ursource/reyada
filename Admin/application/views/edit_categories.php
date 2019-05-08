<?php include('header.php');?>
<div class="row">
                <div class="col-md-3"></div>
              <div class="col-md-6  col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Categories<small>Edit Category</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form  enctype="multipart/form-data" action="<?php echo base_url('Categories/Update');?>" method="post" class="form-horizontal form-label-left input_mask">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" hidden>
                        <input type="text" name="catId" value="<?=$Categories->cat_id?>" id="catId" hidden>
                    </div>

                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Title</label>
                          <input type="text" class="form-control" value="<?=$Categories->title?>" name="title" id="title" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Is Active</label>
                          <select class="dropdown-toggle form-control" name="IsActive" id="IsActive" required="true">
                            <option><?=$Categories->is_active?></option> 
                            <option value="Active">Active</option> 
                            <option value="Inactive">Inactive</option> 
                        </select>
                   </div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 col-sm-offset-3">
                          <a href="<?= base_url('Categories');?>"><button type="button" class="btn btn-primary">Cancel</button></a>
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
        
            <div class="col-md-3"></div>
          </div>
        
<?php include('footer.php');?>