<?php include('header.php');?>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Partners<small>View</small>
        <?php if($section->status == 1){ 
          $status_color = 'text-success'; 
          $title = "This section is now visible on website (click to deactivate it)";
        }else{ 
          $status_color = 'text-danger'; 
          $title = "This section is now hidden on website (click to activate it)";
        }?> 
        <a  href="<?= base_url(($section->status == 1) ?'partners/section_status/2/0':'partners/section_status/2/1') ?>" data-toggle="tooltip" data-placement="top" title="<?= $title ?>"><i class="fa fa-toggle-on fa-lg <?= $status_color ?>"></i></a>
      </h2>
        <ul class="nav navbar-right panel_toolbox">
          <a href="<?= base_url('Partners/Add');?>" class="btn btn-primary">Add <i class="fa fa-plus-square"></i></a>
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
              <!-- <th>Parent Category</th> -->
              <th>Company Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Person Incharge</th>
              <th>Comments</th>
              <th>Image</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>

        <tbody>
        <?php 
        if(!empty($Partners)){
          foreach ($Partners as $row){ ?> 
            <tr>
              <td><?= $row->company_name;?></td>
              <td><?= $row->address;?></td>
              <td><?= $row->phone;?></td>
              <td><?= $row->person_incharge;?></td>
              <td><?= $row->comments;?></td>
              <td><img src="<?= base_url().$row->image_url;?>" width="100" /></td>
              <td><?= $row->status;?></td>
              <td>
                  <a href="<?=base_url('Partners/Edit?id='.$row->partner_id.'"')?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                  <?php
                  if($row->status == 'Active' || $row->status == 'active'){ 
                    $status_color = 'text-success'; 
                  }else{ 
                    $status_color = 'text-danger'; 
                  } 
                  ?> 
                  <a href="<?=base_url('Partners/Status?id='.$row->partner_id.'"')?>" data-toggle="tooltip" data-placement="top" title="Change Status (Active/Deactive)"><i class="fa fa-toggle-on fa-lg <?=$status_color?>"></i></a>
                  <?php 
                  if($row->is_deleted == 'No' || $row->is_deleted == 'no'){ ?>
                  <a href="<?=base_url('partners/Delete?id='.$row->partner_id.'"')?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash fa-lg"></i></a>          
                  <?php   } ?> 
              </td>
            </tr>
        <?php } } ?>
        
        </tbody>
        </table>
      </div>
    </div>
  </div>
</div> 

<?php include('footer.php');?>
