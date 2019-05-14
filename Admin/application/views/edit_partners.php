<?php include('header.php');?>
<div class="row">
                <div class="col-md-3"></div>
              <div class="col-md-6  col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Partners<small>Edit Partners</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <form  enctype="multipart/form-data" action="<?php echo base_url('Partners/Update');?>" method="post" class="form-horizontal form-label-left input_mask">
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" hidden>
                        <input type="text" name="partner_id" value="<?=$Partners->partner_id?>" id="partner_id" hidden>
                   </div>

                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Company Name</label>
                          <input type="text" class="form-control" value="<?=$Partners->company_name;?>" name="companyName" id="companyName" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Address</label>
                          <input type="text" class="form-control" name="address" id="address" value="<?=$Partners->address;?>" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Phone</label>
                          <input type="text" class="form-control" name="phone" id="phone" value="<?=$Partners->phone;?>" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Person Incharge</label>
                          <input type="text" class="form-control" name="personIncharge" id="personIncharge" value="<?=$Partners->person_incharge;?>" required="true">
                   </div>
                   <!-- <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Email</label>
                          <input type="email" class="form-control" name="email" id="email" value="<?=$Partners->email;?>" required="true">
                   </div> -->
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Comments</label>
                          <input type="text" class="form-control" name="comments" id="comments" value="<?=$Partners->comments;?>" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Status</label>
                          <select class="dropdown-toggle form-control" name="status" id="status" required="true">
                            <option value="<?=$Partners->status;?>"><?=$Partners->status;?></option> 
                            <option value="Active">Active</option> 
                            <option value="Inactive">Inactive</option> 
                        </select>
                   </div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 col-sm-offset-3">
                          <a href="<?= base_url('Partners');?>"><button type="button" class="btn btn-primary">Cancel</button></a>
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