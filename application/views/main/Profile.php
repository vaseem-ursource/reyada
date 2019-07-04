<?php include('account_master_start.php');?>
<style>
#fileupload {
  display: none;
}

span[role=button] {
  display: table-cell;
  font-family: METRIC-REGULAR;
  font-size: 1rem;
  padding: 15px 15px;
  border-top-left-radius: 0px;
  border-bottom-left-radius: 0px;
  border: 0.5px solid #707070;  
  color: #000;
  cursor: pointer;

  outline: none;
}
span[role=button]:hover,
span[role=button]:focus {
  box-shadow: 0 0 5px #000;
  background-color: #fff;
  border-color: #000;
  outline: 2px solid transparent;
}
.hide {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;
}
input[type=text] {
  display: table-cell;
  margin-left: 0px;
  /* width: 20rem; */
  font-family: Arial;
  font-size: 1rem;
  padding: 15px 15px;
  
border:none;
  
  background-color: #ffffff;
}
input[type=text]:focus {
  box-shadow: 0 0 5px #fff;
  border-color: #fff;
  outline: 2px solid transparent;
}

</style>
<div style="border-bottom:1px solid black">
    <span class="text-left h4">Your Profile Page</span> 
</div>
<div class="col-12 p-0 row">
    <div class="col-3 p-3 text-center">
        <span class="p-5 rounded-circle h1" style="background-color:#F5F5F5;color:#707070;display: inline-grid">N</span>
    </div>
    <div class="col-9 p-3 row">
    <div class="col-12">
        <span class="h5 p-0 " style="letter-spacing: 2px;">YOUR PHOTO</span>
        <span class="p-0 pull-right">Delete <span class="h3">X</span></span>
        <div class="col-12 row">
            <div class="col-12 row">
                <div class="col-4">
                    <label for="fileupload" id="buttonlabel">
                        <span role="button" class="" aria-controls="filename" tabindex="0">
                        CHOOSE FILE
                        </span>
                    </label>
                    <input type="file" id="fileupload" >
                    <label for="filename" class="hide">
                        file
                    </label>
                </div>
                <div class="col-8">
                        <input type="text" id="filename" autocomplete="off" readonly placeholder="No File " class="pull-right"> 
                </div>
            </div>
            <div class="col-12 mt-2 p-0">
                    <span class="">File smaller than 10 MB and at least 400px by 400px.</span> 
            </div>
         
          </div>    
      </div>
      <div class="col-12 mt-4 ">
        <span class="h5 p-0 " style="letter-spacing: 2px;">YOUR PHOTO</span>
        <span class="p-0 pull-right">Delete <span class="h3">X</span></span>
        <div class="col-12 row">
            <div class="col-12 row">
                <div class="col-4">
                    <label for="fileupload" id="buttonlabel">
                        <span role="button" class="" aria-controls="filename" tabindex="0">
                        CHOOSE FILE
                        </span>
                    </label>
                    <input type="file" id="fileupload" >
                    <label for="filename" class="hide">
                        file
                    </label>
                </div>
                <div class="col-8">
                        <input type="text" id="filename" autocomplete="off" readonly placeholder="No File " class="pull-right"> 
                </div>
            </div>
            <div class="col-12 mt-2 p-0">
                    <span class="">File smaller than 10 MB and at least 400px by 400px.</span> 
            </div>
        </div>
        <div class="col-12 mt-2 p-0">
                <a href="#" style="color:black;"><span>See</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a> 
                <a href="#" style="color:black;" class="pl-3"><span>My</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a> 
            </div>
    </div>
   
</div>
<div class="section-header pb-1 col-md-12 pl-0">
            <div class="col-12 mt-2 p-0">
                <div style="border-bottom:1px solid black">
                    <span class="text-left h4">Professional Profile</span> 
                </div>
            </div>

            <form style="width:100%; margin: 0em 0em 0em 0em;" class="pl-0">
                <div class="row">
                  <div class="col-md-5">
                    <div class="group">
                      <input type="email" name="signup_email"><span class="highlight"></span><span class="bar"></span>
                      <label>Company Name</label>
                    </div>
                  </div>
                  <div class="col-md-5 pl-4">
                    <div class="group">
                      <input type="email" name="signup_email"><span class="highlight"></span><span class="bar"></span>
                      <label>Industry</label>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="group">
                      <input type="email" name="signup_email"><span class="highlight"></span><span class="bar"></span>
                      <label>Your role / position</label>
                    </div>
                  </div>
                </div>
            </form>

            <div class="col-12 mt-2 p-0">
              <div style="border-bottom:1px solid black">
                <span>Your skill</span><br>                
                <a href="#"><span class="btn border border-secondary rounded text-uppercase mb-1 p-2">SKILL</span></a>
                <a href="#" class="pl-2"><span class="btn border border-secondary rounded text-uppercase mb-1 p-2">SUPER GOOD SKILL</span></a>
                <a href="#" class="pl-2"><span class="btn border border-secondary rounded text-uppercase mb-1 p-2">SKILL</span></a>
              </div>
            </div>
            <div class="pt-2">
            <span class="h6">Press enter after each skill. Keep it relevent, less is</span>
            </div>

            <div class="card border-0 pt-4">
              <div class="card-header p-4">
                <h5><b>Heads up!</b> Yourprofile is not yet listed in the directory. Enable the option list</h5>
              </div>
            </div>
            
            <div class="col-md-12 group pt-4 pl-0">
                <input type="checkbox" name="membership" id="membership2" style="width:15px;height:15px;">
                <span style="color:#999; font-size: 18px;">List my profile in the directory.</span><br>
                <button type="submit"  style="border: 0px;background-color: transparent;" class="float-right">Save <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></button>
            </div>

            <div class="col-12 pt-5 mt-5 p-0">
                <div style="border-bottom:1px solid black">
                    <span class="text-left h3">Social network</span> 
                </div>
            </div>

            <div class="col-12 pt-5 p-0">
            <div class="row">
              <div class="col-5 ">
                <div style="border-bottom:1px solid black">
                    <span class="text-left"><b><i class="fa fa-twitter px-2 text-dark pl-0" style="font-size: 15px"></i></b><br>Twitter</span> 
                </div>
              </div>
              <div class="col-5 pl-5">
                <div style="border-bottom:1px solid black">
                   <span class="text-left pl-0"><b><i class="fa fa-facebook px-2 text-dark pl-0" style="font-size: 15px"></i></b><br> Facebook</span> 
                </div>
              </div>
              <div class="col-5 pt-2">
                <div style="border-bottom:1px solid black">
                    <span class="text-left"><b><i class="fa fa-linkedin px-2 text-dark pl-0" style="font-size: 15px"></i></b><br>Linkedin</span> 
                </div>
              </div>
              <div class="col-5 pl-5 pt-2">
                <div style="border-bottom:1px solid black">
                    <span class="text-left"><b><i class="fa fa-google px-2 text-dark pl-0" style="font-size: 15px"></i></b><br>Google</span> 
                </div>
              </div>
              <div class="col-5 pt-2">
                <div style="border-bottom:1px solid black">
                    <span class="text-left"><b><i class="fa fa-flickr px-2 text-dark pl-0" style="font-size: 15px"></i></b><br>Flicker</span> 
                </div>
              </div>
              <div class="col-5 pl-5 pt-2">
                <div style="border-bottom:1px solid black">
                    <span class="text-left"><b><i class="fa fa-instagram px-2 text-dark pl-0" style="font-size: 15px"></i></b><br>Instagram</span> 
                </div>
              </div>
              <div class="col-5 pt-2">
                <div style="border-bottom:1px solid black">
                    <span class="text-left"><b><i class="fa fa-vimeo px-2 text-dark pl-0" style="font-size: 15px"></i></b><br>Vimeo</span> 
                </div>
              </div>
              <div class="col-5 pl-5 pt-2">
                <div style="border-bottom:1px solid black">
                    <span class="text-left"><b><i class="fa fa-tumblr px-2 text-dark pl-0" style="font-size: 15px"></i></b><br>Tumblr</span> 
                </div>
              </div>
            <div class="col-2"></div>
            </div><br>
              <button type="submit"  style="border: 0px;background-color: transparent;" class="float-right">Save <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></button>
            </div>

            <div class="col-12 pt-5 mt-5 p-0">
                <div style="border-bottom:1px solid black">
                    <span class="text-left h3">Your password</span> 
                </div>
            </div>

            <form style="width:100%; margin: 0em 0em 0em 0em;" class="pl-0">
                <div class="row">
                  <div class="col-md-5">
                    <div class="group">
                      <input type="email" name="signup_email"><span class="highlight"></span><span class="bar"></span>
                      <label>Checkin & internet pincode</label>
                    </div>
                  </div>
                  <div class="col-md-5 pl-4">
                    <div class="group">
                      <input type="email" name="signup_email"><span class="highlight"></span><span class="bar"></span>
                      <label>Password</label>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="group">
                    </div>
                  </div>
                  <div class="col-md-5 pl-4">
                    <div class="group">
                      <label style="font-size:15px">Forgot it? <a href="#"><u style="color: black;">Request a password reset.</u></a></label>
                    </div>
                  </div>
                </div>
            </form><br>
            <button type="submit"  style="border: 0px;background-color: transparent; font-size:15px" class="float-right">Save <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></button>

            <div class="col-12 pt-5 mt-5 p-0">
                <div style="border-bottom:1px solid black">
                  <span class="text-left h3" style="color: black;">Notifications</span>                  
                </div>
            </div>

            <div class="col-md-12 group pt-4 pl-0"> 
                <h5 class="mb-0"><b>Select when you would like to recieve notifications</b></h5>
                <input type="checkbox" style="width:15px;height:15px;">
                <span style="color:#707070; font-size: 18px;">I would like to receive occasional and relevent updates from Reyada - Crystal Tower</span><br>
                <input type="checkbox" style="width:15px;height:15px;">
                <span style="color:#707070; font-size: 18px;">When the new message is posted in the home page wall.</span><br>
                <input type="checkbox" style="width:15px;height:15px;">
                <span style="color:#707070; font-size: 18px;">When the new comment is posted in the blog.</span><br>
                <input type="checkbox" style="width:15px;height:15px;">
                <span style="color:#707070; font-size: 18px;">When the new comment is posted in an event.</span><br>
                <br>
                <h5 class="mb-0"><b>How and when should we alert you about conversations in the community board?</b></h5>
                <input type="checkbox" style="width:15px;height:15px;">
                <span style="color:#707070; font-size: 18px;">Send me an update in the Morning if there is new message (around 8am)</span><br>
                <input type="checkbox" style="width:15px;height:15px;">
                <span style="color:#707070; font-size: 18px;">Send me an notification shortly after every message. You can still mute individual.</span><br>

                <button type="submit"  style="border: 0px;background-color: transparent;" class="float-right">Save <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></button>
            </div>
    


<script>
// trigger upload on space & enter
// = standard button functionality
$('#buttonlabel span[role=button]').bind('keypress keyup', function(e) {
  if(e.which === 32 || e.which === 13){
    e.preventDefault();
    $('#fileupload').click();
  }    
});

// return chosen filename to additional input
$('#fileupload').change(function(e) {
  var filename = $('#fileupload').val().split('\\').pop();
  $('#filename').val(filename);
  $('#filename').attr('placeholder', filename);
  $('#filename').focus();
});
</script>
<?php include('account_master_end.php');?>
       

