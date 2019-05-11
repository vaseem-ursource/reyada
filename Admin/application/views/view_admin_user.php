<?php include('header.php');?>
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Admin Users<small>View</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                     <a href="<?= base_url('AdminUsers/Add');?>" class="btn btn-primary">Add <i class="fa fa-plus-square"></i></a>
                    </ul>
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
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Partner</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                    <tbody>
                    <?php foreach ($AdminUsers->result() as $row){ ?> 
                        <tr>
                          <td><?= $row->email;?></td>
                          <td><?= $row->role;?></td>
                          <td><?= $row->company_name;?></td>
                          <td><?= $row->status;?></td>
                          <td>
                             <a href="<?=base_url('AdminUsers/Edit?id='.$row->admin_id.'"')?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                             <?php
                             if($row->status == 'Active' || $row->status == 'active'){ 
                               $status_color = 'text-success'; 
                             }else{ 
                               $status_color = 'text-danger'; 
                             } 
                             ?> 
                             <a href="<?=base_url('AdminUsers/Change?id='.$row->admin_id.'"')?>" data-toggle="tooltip" data-placement="top" title="Change Password"><i class="fa fa-key fa-lg"></i></a>
                             <a href="<?=base_url('AdminUsers/Status?id='.$row->admin_id.'"')?>" data-toggle="tooltip" data-placement="top" title="Change Status (Active/Deactive)"><i class="fa fa-toggle-on fa-lg <?=$status_color?>"></i></a>
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
