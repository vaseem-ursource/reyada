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
                    <form  enctype="multipart/form-data" action="<?php echo base_url('Admin/Categories/Update');?>" method="post" class="form-horizontal form-label-left input_mask">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" hidden>
                        <input type="text" name="catId" value="<?=$Categories->cat_id?>" id="catId" hidden>
                    </div>

                    <div class="form-group has-feedback ">
                    <label for="category">Parent Category</label>
                   <?= $CategoryGroup;?>
                   </div>

                    <div class="form-group has-feedback">
                        <label class="">Category Name (En)</label>
                          <input type="text" class="form-control" value="<?=$Categories->name_en?>" name="nameEn" id="nameEn" required="true">
                   </div>
                   <div class="form-group has-feedback">
                        <label class="">Category Name (Ar)</label>
                        <input type="text" class="form-control rtl" value="<?=$Categories->name_ar?>" name="nameAr" id="nameAr" required="true">
                   </div>
                   <div class="form-group has-feedback">
                   <label for="descEn">Description (En)</label>
                          <textarea id="descEn" class="form-control" name="descEn" data-parsley-trigger="keyup" rows="6" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"><?=$Categories->desc_en?></textarea>
                    </div>
                 
                    <div class="form-group has-feedback">
                      <label for="descAr">Description (Ar)</label>
                    <textarea id="descAr" class="form-control rtl" name="descAr" data-parsley-trigger="keyup" rows="6" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                      data-parsley-validation-threshold="10"><?=$Categories->desc_ar?></textarea>
                      </div>
                   <div class="col-md-12 row">
                   <div class="col-md-6 form-group has-feedback">
                        <label>Image</label>
                        <input class="btn btn-default form-control" type="file" name="image" id="image" accept="image/png, image/jpeg"><br>
                        <img class="img-thumbnail" src="<?= base_url().$Categories->image_url;?>" width="20%" alt="No Image">
                        <a href="<?= base_url('Admin/Categories/DeleteImage?id='.$Categories->cat_id);?>"><i class="btn btn-danger fa fa-trash"></i></a>
                   </div>
                   <div class="col-md-6 form-group has-feedback">
                        <label>Icon Image</label>
                        <input class="btn btn-default form-control" type="file" name="icon" id="icon" accept="image/png, image/jpeg"><br>
                        <img class="img-thumbnail" src="<?= base_url().$Categories->icon_image_url;?>" width="20%" alt="No Image">
                        <a href="<?= base_url('Admin/Categories/DeleteIcon?id='.$Categories->cat_id);?>"><i class="btn btn-danger fa fa-trash"></i></a>
                   </div>
                   </div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 col-sm-offset-3">
                          <a href="<?= base_url('Admin/Categories');?>"><button type="button" class="btn btn-primary">Cancel</button></a>
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
        
            <div class="col-md-3"></div>
          </div>
         <script> 
          $('#category').bind("change", function() { 
              var space_offset = 3; 
              var matches = $('#category option:selected').text().match(/\s+?/g); 
              var n_spaces = (matches) ? matches.length : 0; 
              $(this).css('text-indent', -(n_spaces*space_offset)); 
          })
          </script>
<?php include('footer.php');?>