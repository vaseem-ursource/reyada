<?php include('header.php');?>
<style>
#loading {
    background: url('../img/loader/loader2.gif') no-repeat center center;
    position: absolute;
    top: 0;
    left: 0 ;
    height: 100%;
    width: 100%;
    z-index: 9999999;
}
</style>
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div id="loading"></div>

                  <div class="x_title">

                    <h2>Members<small>View</small></h2>
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
                              <th>Full Name</th>
                              <th>Email</th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                    </div>
                </div>
              </div>
            </div> 
            <script>

$(document).ready(function() {
    var username = 'aeraf@ursource.org';
    var password = 'view1Sonic!';
    $('#loading').show();
      $.ajax({
        type: 'GET',
        url: 'https://spaces.nexudus.com/api/spaces/coworkers',
        beforeSend: function (xhr) {
            xhr.setRequestHeader ("Authorization", "Basic " + btoa(username + ":" + password));
        },
        dataType: 'json',
        success: function(coworkers){
          var table = $('#datatable').DataTable( );
          $.each(coworkers.Records,function(key,value){
            table.row.add($('<tr> <td>'+value.FullName+'</td><td>'+value.Email+'</td></tr>')).draw(false);
          });
           },
           complete: function(){
              $('#loading').hide();
          },
        color: '#c0392b',
        error: function() {

          },
    });
});
$(document).ready( function () {
    $('#datatable').DataTable();
} );

</script>
<?php include('footer.php');?>
