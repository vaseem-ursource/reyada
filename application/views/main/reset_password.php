
<section id="team" class="pb-1 mt-5" style="min-height:80vh">

    <div class="container px-5">
        <div class="row">
          <form autocomplete="off" method="post" action="<?= base_url() ?>main/reset_password" style="width:100%; margin: 0em 0em 0em 0em;" >
              <div class="section-header pb-1 offset-md-4 col-md-4 pl-0" style="margin-top:15vh">
              <div class="text-center">
                <h5 class="h5" style="color:#000000;">Reset Password</h5>
              </div>
              <div class="container pt-4 px-0">
                <div class="row p-0 mt-2">
                    <div class="col-12">
                        <div class="group">
                            <input  style="padding:4px !important;color:black !important;" type="email" Placeholder="Email" name="email"><span class="highlight"></span><span class="bar"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group">
                            <input  style="padding:4px !important;color:black !important;" Placeholder="New Password" type="password" name="password"><span class="highlight"></span><span class="bar"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group text-center mt-2" style="">
                            <button type="submit" name="reset-password" value="reset-password" class="btn custom-button-bl">Change</button>                  
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group text-center" style="">
                            <span> <?= ($this->session->flashdata('message') != "") ? $this->session->flashdata('message') : ""  ?></span>
                        </div>
                    </div>                       
                </div>
              </div>
          </form>
        <script>
          $(document).ready(function(){
            $('#password-recovery').submit(function(e){
              e.preventDefault();
              $.ajax({
                  type: 'POST',
                  dataType: 'json',
                  url: $(this).attr('action'),
                  data: $(this).serialize(),
                  success: function(data) {
                      if(data.status != 200){
                        toastr.error(data.message);
                      }else{
                        toastr.success(data.message);
                      }
                      $('.whole_div').hide();
                  },
                  error: function(jqxhr, status, error) {
                    $('.whole_div').hide();
                    console.log(jqxhr);
                    console.log(status);
                    console.log(error);
                  }
              });
            });
          });
        </script>


<?php include 'account_master_end.php';?>


