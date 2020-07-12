<?php include('header.php');?>
<style>
.note-editable a{
  color: blue !important;
}
</style>
<script src="https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>

<div class="row">
                <div class="col-md-1"></div>
              <div class="col-md-10  col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Articles<small>Add Articles</small></h2>
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
                    <form  id="articleForm" enctype="multipart/form-data" action="<?php echo base_url('Articles/Insert');?>" method="post" class="form-horizontal form-label-left input_mask"> 

                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Title</label>
                          <input type="text" class="form-control" name="title" id="title" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Sub Title</label>
                          <input type="text" class="form-control" name="sub_title" id="sub_title" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Author</label>
                          <input type="text" class="form-control" name="author" id="author" required="true">
                   </div>
                   <div class="form-row">
                        <div class="col-md-12 position-relative form-group">
                            <label for="exampleText" class="">Description <span class="text-danger">*</span></label>
                            <textarea name="content" id="content" class="form-control"></textarea>
                        </div>
                    </div>
                   <div class="form-group has-feedback col-md-12 col-sm-12 col-xs-12">
                        <label class="">Image</label>
                        <input class="btn btn-default form-control" type="file" name="image_url" id="image_url" accept="image/png, image/jpeg" required>
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Categories</label>
                          <select class="dropdown-toggle form-control" name="category" id="category" required="true">
                            <option value="">-- Select Category --</option> 
                            <?php foreach($Categories->result() as $row){?>
                            <option value="<?= $row->cat_id;?>"><?= $row->title;?>
                            </option>
                            <?php } ?>
                        </select>
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Is Active</label>
                          <select class="dropdown-toggle form-control" name="is_active" id="is_active" required="true">
                            <option value="">-- Select Status --</option> 
                            <option value="active">Active</option> 
                            <option value="inactive">Inactive</option> 
                        </select>
                   </div>

                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <a href="<?= base_url('Categories');?>"><button type="button" class="btn btn-primary">Cancel</button></a>
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" name="save" class="btn btn-success">Save & Add</button>
                      <button type="submit" name="insert" class="btn btn-success">Submit</button>
                    </div>
                  </div>
              </form>
              </div>
            </div>
            <div class="col-md-1"></div>
          </div>
          <script>
            // for local
          var base_url = "http://localhost/Reyadah-Az/";

          // for Satging
          // var base_url = "http://reyada.grablugmah.com/";

          // for live
          // var base_url = "https://reyada.co/";
          
          CKEDITOR.plugins.addExternal('justify', base_url+'admin/assets/ckeditor/plugins/justify/plugin.js');
          CKEDITOR.replace( 'content', {
            height: 300,
            filebrowserUploadUrl: base_url+"upload.php",
            extraPlugins: 'image2,uploadimage,link,font,justify',
            
          });
          </script>
         
          
          
        
<?php include('footer.php');?>