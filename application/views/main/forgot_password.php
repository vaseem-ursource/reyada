
<section id="team" class="pb-1 mt-5" style="min-height:80vh">
<div class="container px-5">
<div class="row">
  <form id="forgot_pass_form" style="width:100%; margin: 0em 0em 0em 0em;" >
      <div class="section-header pb-1 offset-md-4 col-md-4 pl-0" style="margin-top:15vh">
      <div class="text-center">
        <h5 class="h5" style="color:#000000;">Forgot Password</h5>
      </div>
      <div class="container pt-4 px-0">
        <div class="row p-0 mt-2">
            <div class="col-12">
                <div class="group">
                    <input  placeholder="Enter Your Email" style="padding:4px !important;color:black !important;" type="email" required name="email"><span class="highlight"></span><span class="bar"></span>
                </div>
            </div>
            <div class="col-12">
                <div class="group text-center mt-2" style="">
                    <button type="submit" name="change-password" value="change-password" class="btn custom-button-bl">Send</button>                  
                </div>
            </div>                      
        </div>
      </div>
  </form>
</div>
<div id="Forgot_thankyou" class="modal fade bs-example-modal-xs" role="dialog ">
   <div class="modal-dialog modal-xs modal-dialog-center" style="height:300px;" >
      <!-- Modal content-->
      <div class="modal-content pt-5 mt-5" style="padding-top:0%; vertical-align: middle;">
         <div class="modal-body p-0 m-0">
            <section class="container">
               <button type="button" class="close p-4" style="outline:none;" data-dismiss="modal">&#10006</button>
               <div class="tmodal">
                  <div>
                     <h3 style="olor:black;bottom:30px; font-size: 18px;" class="p-5 text-justify text-center">
                        We have received your request.<br><br>
                        New password will be sent on your email shortly.
                        <br><br>
                        <a href="<?= base_url()?>" class="btn custom-button-bl" style="outline:none;">OK</a>
                        </small>
                     </h3>
                  </div>
               </div>
            </section>
         </div>
      </div>
   </div>
</div>
<script>
  $(document).ready(function(){
    var base_url = '<?= base_url(); ?>';
    $('#forgot_pass_form').submit(function(e){
      $('.whole_div').show();
      e.preventDefault();
      var form_data = $(this).serialize();
        $.ajax({
        type: 'POST',
        dataType: 'json',
        url: base_url + 'main/forgot_password',
        data: form_data,
        success: function(data) {
          $('.whole_div').hide();
            if(data.status == 'OK'){
              $('#Forgot_thankyou').modal('show');
            }
            else{
              toastr.error('Please enter your valid email id');
            }
        },
        error: function(data) {
          $('.whole_div').hide();
          toastr.error('Please enter your valid email id');
        }
      });
    });
  });
</script>
<?php include 'account_master_end.php';?>


