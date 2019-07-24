<!-- <style>
  .group 			  {
  position:relative;
  margin-bottom:20px;
}
.form-input 				{
  font-size:14px;
  padding:10px 10px 2px 5px;
  display:block;
  width:100%;
  border:none;
  border-bottom:1px solid #757575;
}
.form-input:focus 		{ outline:none; }

/ LABEL ======================================= /
.form-label 				 {
  color:#999;
  font-size:14px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:5px;
  /* top:15px;
  transition:0.2s ease all;
  -moz-transition:0.2s ease all;
  -webkit-transition:0.2s ease all; */
}





/ active state /
.form-input:focus  .bar:before, .form-input:focus  .bar:after {
  width:50%;
}

/ active state /
/* .form-input[required]:valid ~ .highlight {
  -webkit-animation:inputHighlighter 0.3s ease;
  -moz-animation:inputHighlighter 0.3s ease;
  animation:inputHighlighter 0.3s ease; */
}

.form-select {
	height: 47px;
    background: transparent;
}



label:not(.test_container) {
   color: #999;
   font-size: 12px;
   font-weight: normal;
   position: absolute;
pointer-events: none;
text-align: left;
   left: 0px;
top: -10px;
bottom: 0px;
   / transition: all 0.2s ease;  /
}
</style> -->
<section id="team" class="pb-1 mt-5" style="min-height:80vh">

    <div class="container px-5">
        <div class="row">
          <form autocomplete="off" method="post" action="" style="width:100%; margin: 0em 0em 0em 0em;" >
              <div class="section-header pb-1 offset-md-4 col-md-4 pl-0" style="margin-top:15vh">
              <div class="text-center">
                <h5 class="h5" style="color:#000000;">Forgot Password</h5>
              </div>
          
              <div class="container pt-4 px-0">
                <div class="row p-0 mt-2">
                    <div class="col-12">
                        <div class="group">
                            <input  style="padding:4px !important;color:black !important;" type="email" name="email"><span class="highlight"></span><span class="bar"></span>
                            <label>Enter your Email address</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group text-center mt-2" style="">
                            <button type="submit" style="color:black;border: 0px;background-color: transparent;"><span id="findAvailable">Send</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></button>                  
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
                      console.log(data);
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


