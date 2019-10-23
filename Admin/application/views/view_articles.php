<?php include('header.php');?>
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Articles<small>View</small>
                    <?php if($section->status == 1){ 
                      $status_color = 'text-success'; 
                      $title = "This section is now visible on website (click to deactivate it)";
                    }else{ 
                      $status_color = 'text-danger'; 
                      $title = "This section is now hidden on website (click to activate it)";
                    }?> 
                    <a  href="<?= base_url(($section->status == 1) ?'Articles/section_status/1/0':'Articles/section_status/1/1') ?>" data-toggle="tooltip" data-placement="top" title="<?= $title ?>"><i class="fa fa-toggle-on fa-lg <?= $status_color ?>"></i></a></h2>
                    <ul class="nav navbar-right panel_toolbox">
                     <a href="<?= base_url('Articles/Add');?>" class="btn btn-primary">Add <i class="fa fa-plus-square"></i></a>
                    </ul>
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
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <!-- <th>Parent Category</th> -->
                          <th>Title</th>
                          <th>Sub Title</th>
                          <th>Author</th>
                          <th>Image</th>
                          <th>Category</th>
                          <th>Posted Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                    <tbody>
                    <?php foreach ($Articles->result() as $row){ ?> 
                        <tr>
                          <td><?= $row->title;?></td>
                          <td><?= $row->sub_title;?></td>
                          <td><?= $row->author;?></td>
                          <td><img src="<?= base_url().$row->image_url;?>" width="60" height="auto" alt=""></td>
                          <td><?= $row->category_title;?></td>
                          <td><?= $row->posted_date;?></td>
                          <td>
                             <a href="<?=base_url('Articles/Edit?id='.$row->article_id.'"')?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                             <?php 
                             if($row->is_active == 'Active' || $row->is_active == 'active'){
                               $status_color = 'text-success';
                             }else{
                               $status_color = 'text-danger';
                             }
                             ?>
                             <a href="<?=base_url('Articles/Status?id='.$row->article_id.'"')?>" data-toggle="tooltip" data-placement="top" title="Change Status (Active/Deactive)"><i class="fa fa-toggle-on fa-lg <?=$status_color?>"></i></a>
                            
                             <a href="<?=base_url('Articles/ViewComments?id='.$row->article_id.'"')?>" data-toggle="tooltip" data-placement="top" title="View Comments"><i class="fa fa-eye fa-lg"></i></a>  
                             <?php 
                             if($row->is_deleted == 'No' || $row->is_deleted == 'no'){ ?>
                              <a href="<?=base_url('Articles/Delete?id='.$row->article_id.'"')?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash fa-lg"></i></a>          
                              <?php   } ?>              
                          </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div> 
<?php include('footer.php');?>
