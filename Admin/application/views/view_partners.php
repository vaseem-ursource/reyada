<?php include('header.php');?>
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Partners<small>View</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                     <a href="<?= base_url('Partners/Add');?>" class="btn btn-primary">Add <i class="fa fa-plus-square"></i></a>
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
                          <th>Company Name</th>
                          <th>Address</th>
                          <th>Phone</th>
                          <th>Person Incharge</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Comments</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                    <tbody>
                    <?php foreach ($Partners->result() as $row){ ?> 
                        <tr>
                          <td><?= $row->company_name;?></td>
                          <td><?= $row->address;?></td>
                          <td><?= $row->phone;?></td>
                          <td><?= $row->person_incharge;?></td>
                          <td><?= $row->email;?></td>
                          <td><?= $row->password;?></td>
                          <td><?= $row->comments;?></td>
                          <td>
                             <a href="<?=base_url('Partners/Edit?id='.$row->partner_id.'"')?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                             <a href="<?=base_url('Partners/Change?id='.$row->partner_id.'"')?>" data-toggle="tooltip" data-placement="top" title="Change Password"><i class="fa fa-key fa-lg"></i></a>
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
