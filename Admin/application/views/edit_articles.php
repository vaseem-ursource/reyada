<?php include('header.php');?>
<div class="row">
                <div class="col-md-1"></div>
              <div class="col-md-10  col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Categories<small>Edit Category</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form  enctype="multipart/form-data" action="<?php echo base_url('Articles/Update');?>" method="post" class="form-horizontal form-label-left input_mask">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" hidden>
                        <input type="text" name="article_id" value="<?=$Articles->article_id?>" id="article_id" hidden>
                    </div>

                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Title</label>
                          <input type="text" class="form-control" name="title" id="title" value="<?=$Articles->title?>" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Sub Title</label>
                          <input type="text" class="form-control" name="sub_title" id="sub_title" value="<?=$Articles->sub_title?>" required="true">
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
                        <label class="">Author</label>
                          <input type="text" class="form-control" name="author" id="author" value="<?=$Articles->author?>" required="true">
                   </div>
                   <!-- <div class="form-group has-feedback col-md-12 col-sm-12 col-xs-12">
                      <label for="description">Description</label>
                      <textarea id="description" class="form-control" name="description" data-parsley-trigger="keyup" rows="6" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                      data-parsley-validation-threshold="10"></textarea>
                   </div> -->
                   <div class="col-md-12 col-sm-12 col-xs-12">
          
                   <label class=""> Description</label>

                  <div id="alerts"></div>
                  <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                      <ul class="dropdown-menu">
                      </ul>
                    </div>

                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li>
                          <a data-edit="fontSize 5">
                            <p style="font-size:17px">Huge</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit="fontSize 3">
                            <p style="font-size:14px">Normal</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit="fontSize 1">
                            <p style="font-size:11px">Small</p>
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                      <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                      <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                      <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                      <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                      <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                      <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                      <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                      <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                      <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                      <div class="dropdown-menu input-append">
                        <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                        <button class="btn" type="button">Add</button>
                      </div>
                      <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                    </div>

                    <!-- <div class="btn-group">
                      <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                      <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                    </div> -->

                    <div class="btn-group">
                      <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                      <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                    </div>
                  </div>

                  <div id="editor-one" id="editorone" class="editor-wrapper" onkeyup="textareaKeyFunction()"><?=$Articles->description?></div>

                  <textarea name="descr" id="descr" style="display:none;"><?=$Articles->description?></textarea>
                </div>
                <script>
               function textareaKeyFunction() {
                    var desc=document.getElementById("editor-one").innerHTML;
                    document.getElementById("descr").value = desc;
                  }
                </script>

                   <div class="form-group has-feedback col-md-12 col-sm-12 col-xs-12">
                        <label class="">Image</label>
                        <input class="btn btn-default form-control" type="file" name="image_url" id="image_url" accept="image/png, image/jpeg">
                        <?php if($Articles->image_url != ""){ ?>
                          <br>
                        <img src="<?= base_url().$Articles->image_url?>" width="60px" alt="No Image Found">
                        <a href="<?= base_url('Articles/DeleteImage?id='.$Articles->article_id);?>"><i class="fa fa-trash fa-2x text-danger" style="bottom:0px;position:absolute;margin-left:5px"></i></a>
                        <?php } ?>
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Categories</label>
                          <select class="dropdown-toggle form-control" name="category" id="category" required="true"> 
                            <option value="<?=$Articles->cat_id?>"><?=$Articles->cat_title?></option> 
                            <?php foreach($Categories->result() as $row){?>
                            <option value="<?= $row->cat_id;?>"><?= $row->title;?>
                            </option>
                            <?php } ?>
                        </select>
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Is Active</label>
                          <select class="dropdown-toggle form-control" name="is_active" id="is_active" required="true">
                            <option value="<?=$Articles->is_active?>"><?=$Articles->is_active?></option> 
                              <?php
                                if($Articles->is_active == 'Active' || 'active'){ ?>
                                  <option value="Inactive">Inactive</option> 
                                <?php }else{ ?>
                                <option value="Active">Active</option> 
                                <?php } ?>
                        </select>
                   </div>
                      <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                          <a href="<?= base_url('Articles');?>"><button type="button" class="btn btn-primary">Cancel</button></a>
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            <div class="col-md-1"></div>
          </div>
        
<?php include('footer.php');?>