<?php include('header.php');?>
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Comments<small>View</small></h2>
                    <!-- <ul class="nav navbar-right panel_toolbox">
                     <a href="<?= base_url('Comments/Add');?>" class="btn btn-primary">Add <i class="fa fa-plus-square"></i></a>
                    </ul> -->
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
                          <th>Title</th>
                          <th>Description</th>
                          <th>Posted Date</th>
                          <th>Is Deleted</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                    <tbody>
                    <?php foreach ($Comments->result() as $row){ ?> 
                        <tr>
                          <td><?= $row->title;?></td>
                          <td><?= $row->description;?></td>
                          <td><?= $row->posted_date;?></td>
                          <td><?= $row->is_deleted;?></td>
                          <td>
                          <?php 
                             if($row->is_deleted != 'Yes'){
                             ?>
                             <a href="<?=base_url('Articles/DeleteComment?id='.$row->comment_id.'"')?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                             <?php } ?>
                             <a href="<?=base_url('Articles/View?id='.$row->comment_id.'"')?>" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye fa-lg"></i></a>                         
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
