<?php include('header.php');?>
<div class="row">
                <div class="col-md-3"></div>
              <div class="col-md-6  col-xs-6">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Comments<small>View Comments</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <?php if($Comments->title != '') {?>                  
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Title : <?=$Comments->title;?></label>
                   </div>
                   <?php } 
                   if($Comments->description != '') {
                     ?>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Description : <?=$Comments->description;?></label>
                   </div>
                   <?php } ?>  
                   
                      <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                          <a href="<?= base_url('Articles');?>"><button type="button" class="btn btn-primary">Cancel</button></a>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
        
            <div class="col-md-3"></div>
          </div>

<?php include('footer.php');?>