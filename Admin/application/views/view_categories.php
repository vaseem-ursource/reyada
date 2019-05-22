<?php include('header.php');?>
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Categories<small>View</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                     <a href="<?= base_url('Categories/Add');?>" class="btn btn-primary">Add <i class="fa fa-plus-square"></i></a>
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
                          <th>Is Deleted</th>
                          <th>Is Active</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                    <tbody>
                    <?php foreach ($Categories->result() as $row){ ?> 
                        <tr>
                          <td><?= $row->title;?></td>
                          <td><?= $row->is_deleted;?></td>
                          <td><?= $row->is_active;?></td>
                          <td>
                             <a href="<?=base_url('Categories/Edit?id='.$row->cat_id.'"')?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                             <?php
                             if($row->is_active == 'Active' || $row->is_active == 'active'){ 
                               $status_color = 'text-success'; 
                             }else{ 
                               $status_color = 'text-danger'; 
                             } 
                             ?> 
                             <a href="<?=base_url('Categories/Status?id='.$row->cat_id.'"')?>" data-toggle="tooltip" data-placement="top" title="Change Status (Active/Deactive)"><i class="fa fa-toggle-on fa-lg <?=$status_color?>"></i></a>
                             <?php 
                             if($row->is_deleted != 'Yes'){
                             ?>
                             <a href="<?=base_url('Categories/Delete?id='.$row->cat_id.'"')?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash fa-lg"></i></a>                         
                             <?php } ?>
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
