<?php include('header.php');?>
<div class="row">
                <div class="col-md-2"></div>
              <div class="col-md-8  col-xs-8">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Contact<small>View Details</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <?php if($ContactUs->name != '') {?>                  
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label>Name : <?=$ContactUs->name;?></label>
                   </div>
                   <?php } 
                   if($ContactUs->email != '') {
                     ?>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label>Email : <?=$ContactUs->email;?></label>
                   </div>
                   <?php } 
                   if($ContactUs->phone != '') {
                     ?>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label>Phone : <?=$ContactUs->phone;?></label>
                   </div>
                   <?php } 
                   if($ContactUs->company_name != '') {
                     ?>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label >Company Name : <?=$ContactUs->company_name;?></label>
                   </div>
                   <?php } 
                   if($ContactUs->subject != '') {
                    ?>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                       <label >Subject : <?=$ContactUs->subject;?></label>
                  </div>
                  <?php } 
                   if($ContactUs->posted_date != '') {
                     ?>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label >Posted Date : <?=$ContactUs->posted_date;?></label>
                   </div>
                   <?php } 
                  if($ContactUs->message != '') {
                    ?>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                       <label>Message : <?=$ContactUs->message;?></label>
                  </div>
                   <?php } ?>  
                   
                      <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                          <a href="<?= base_url('ContactUs');?>"><button type="button" class="btn btn-primary">Cancel</button></a>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
        
            <div class="col-md-2"></div>
          </div>

<?php include('footer.php');?>