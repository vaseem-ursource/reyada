<?php include('header.php');?>
<div class="row">
                <div class="col-md-3"></div>
              <div class="col-md-6  col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Admin Users<small>Edit Admin Users</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <form  enctype="multipart/form-data" action="<?php echo base_url('AdminUsers/Update');?>" method="post" class="form-horizontal form-label-left input_mask">
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" hidden>
                        <input type="text" name="admin_id" value="<?=$AdminUsers->admin_id?>" id="admin_id" hidden>
                   </div>

                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Email</label>
                          <input type="email" class="form-control" name="email" id="email" value="<?=$AdminUsers->admin_email;?>" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Role</label>
                          <select class="dropdown-toggle form-control" name="role" id="role" required="true">
                            <option value="<?=$AdminUsers->role;?>"><?=$AdminUsers->role;?></option> 
                            <option value="Admin">Admin</option> 
                            <option value="Partner">Partner</option> 
                        </select>
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Partner</label>
                    <select name="partnerId" class="dropdown-toggle form-control" id="dropdownMenuButton" value="<?=$AdminUsers->partner_id;?>" data-toggle="dropdown" aria-haspopoup="true" aria-expanded="false">
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <option value="<?=$AdminUsers->partner_id;?>"><?=$AdminUsers->company_name;?></option> 
                    <?php foreach($Partners->result() as $row){ ?>
                    <option class="dropdown-item" value="<?= $row->partner_id;?>"><?= $row->company_name;?></option>

                    <?php }?>
                    </div>
                    </select>
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback"> 
                        <label>Ststus</label> 
                          <select class="dropdown-toggle form-control" name="status" id="status" required="true"> 
                            <option value="<?=$AdminUsers->status?>"><?=$AdminUsers->status?></option>  
                              <?php 
                                if($AdminUsers->status == 'Active' || 'active'){ ?> 
                                  <option value="Inactive">Inactive</option>  
                                <?php }else{ ?> 
                                <option value="Active">Active</option>  
                                <?php } ?> 
                        </select> 
                   </div>

                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 col-sm-offset-3">
                          <a href="<?= base_url('AdminUsers');?>"><button type="button" class="btn btn-primary">Cancel</button></a>
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