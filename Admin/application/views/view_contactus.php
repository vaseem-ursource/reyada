<?php include('header.php');?>
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Contact<small>View</small></h2>
                    
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
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>                        
                          <th>Company Name</th>   
                          <th>Subject</th>                            
                          <th>Message</th>
                          <th>Posted Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                    <tbody>
                    <?php foreach ($ContactUs->result() as $row){ ?> 
                        <tr>
                          <td><?= $row->name;?></td>
                          <td><?= $row->email;?></td>
                          <td><?= $row->phone;?></td>
                          <td><?= $row->company_name;?></td>
                          <td><?= $row->subject;?></td>
                          <td><?= $row->message;?></td>
                          <td><?= $row->posted_date;?></td>
                          <td>
                             <a href="<?=base_url('ContactUs/View?id='.$row->id.'"')?>" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye fa-lg"></i></a>
                             <a href="<?=base_url('ContactUs/delete?id='.$row->id.'"')?>" data-toggle="tooltip" data-placement="top" title="delete"><i class="fa fa-trash fa-lg"></i></a>

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
