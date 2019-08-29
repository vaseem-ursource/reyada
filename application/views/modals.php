<!-- Contact Us Modal -->
<style>
  .modal-dialog-center {
    margin-top: 13%;
  }
</style>
<div id="modalcontact" class="modal fade bs-example-modal-xl" role="dialog ">
 <div class="modal-dialog modal-xl" style="height:600px;">
<!-- Modal content-->
  <div class="modal-content">
    <div class="modal-body p-0 m-0">
      <section class="container">
        <div class="left-half1">
        <article>
        <div class="col-md-12 col-sm-12 col-xs-12 row" style="padding-top:10%; padding-left: 18%;" class="px-5">
            <h6 style="color:black;" style="font-size: 16px;" class="text-justify ml-5 m-0">LET US<br><br>REACH YOU!
              <br><br>
            </h6>
        </div>
        <form action="<?= base_url('Main/contactus')?>" style="width:95%; padding-top:5px; padding-left:20%" method="post" class="m-0">
          <div class="col-md-12 col-sm-12 col-xs-12 row">
           
            <div class="col-md-6" style="color:black; padding-right:10%" style="font-size: 16px;">
              <h6 style="color:black;" style="font-size: 16px;" class="text-justify">
              <small>Ask us a question, we’ll get back to you shortly.</small></h6>
                <div class="group">
                    <input type="text" name="full_name" id="full_name" required><span class="highlight"></span><span class="bar"></span>
                    <label>Full Name</label>
                </div>
                <div class="group">
                    <input type="text" name="email" id="email3" required><span class="highlight"></span><span class="bar"></span>
                    <label>Email</label>
                </div>
                <div class="group">
                    <input type="text" name="phone" id="phone2" required><span class="highlight"></span><span class="bar"></span>
                    <label>Phone Number</label>
                </div>
                <div class="group">
                    <input type="text" name="company" id="company2" required><span class="highlight"></span><span class="bar"></span>
                    <label>Company Name</label>
                </div>
            </div>
            <div class="col-md-6" style="color:black; padding-left: 10%;" style="font-size: 16px;">
            <h6 style="color:black;" class="text-left"><small>Subject of inquiry: (membership – workspaces – packages - other)</small></h6> 
                    <div class="group">
                        <input type="checkbox" name="membership" id="membership2">
                        <span style="color:#999; font-size: 11px;">About membership</span>
                    </div>
                    <div class="group">
                        <input type="checkbox" name="workspace" id="workspace">
                       <span style="color:#999; font-size: 11px;"> Finding workspace</span>
                    </div>
                    <div class="group">
                        <input type="checkbox" name="somethingelse" id="somethingelse">
                        <span style="color:#999; font-size: 11px;" required>something else</span>
                    </div><br>
                    <div class="group">
                        <input type="text" name="notes" id="notes" ><span class="highlight"></span><span class="bar"></span>
                        <label>Notes</label>
                    </div>
                    <br><br>
                    <button type="submit"  style="border: 0px;background-color: transparent;" class="float-right">Submit <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></button>
            </div>
           </div>
          </form>
        </article>
      </div>
      <div class="right-half1">
       <button type="button" class="close p-4 text-white" data-dismiss="modal">&#10006</button>
        <h6 style="color:white; font-size: 20px; padding-top: 25%" class="px-5 m-5 text-justify">CALL US.
        <br><br><br>
        <small style="color:white; font-size: 14px;">
         Give us a call during our office hours and inquire about our services.
         <br><br><br>
        </small>
        +(965) 2297 0270
          <br><br><br>
          <span style="color:white; font-size:20px;">Find Us</span><br><br>
          <a style="color:white; font-size:18px;" href="https://www.google.com/maps/place/Reyada+%7C+Collaborative+Workspace/@29.3769156,47.9756613,17z/data=!3m1!4b1!4m5!3m4!1s0x3fcf84ec4226df39:0x267ba39977cfa42e!8m2!3d29.3769156!4d47.97785" target="_blank"><img src="<?= base_url()?>image/location_white.png" width="8%" />&nbsp;&nbsp;CRYSTAL TOWER</a><br>
          <a style="color:white; font-size:18px;" href="https://www.google.com/maps/place/Reyada+%7C+Collaborative+Workspace/@29.3681039,47.9687861,17z/data=!3m1!4b1!4m5!3m4!1s0x3fcf85e8f50d9f6d:0x30e75da11a5d5bf7!8m2!3d29.3681039!4d47.9709748" target="_blank"><img src="<?= base_url()?>image/location_white.png" width="8%" />&nbsp;&nbsp;MABANEE</a>
         </h6>
      </div>
    </section>
   </div>
  </div>
 </div>
</div>
<!-- End Contact Us Modal-->

<!--Login Modal-->
<div id="modalLogin" class="modal fade bs-example-modal-xl" role="dialog ">
  <div class="modal-dialog modal-xl" style="height:600px;">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body p-0 m-0">
        <div class="row">
          <div class="col-md-4 bg-black">
            <div>
              <img src="<?= base_url();?>image/modalimg/a1.png" class="img-fluid  position-relative pull-right" width="170" height="150"
                style="padding-top: 30%; left:20px;">
              <h6 style="color:white; position: absolute; bottom:30px; font-size: 14px;" class="p-5 text-justify">
                <small>JOIN OUR COMMUNITY
                  <br><br>
                  Sign up and become a part of the Reyada Community.
                  <br><br>
                  <a href="#signup" id="modalsignup1" style="color:white;"  data-toggle="modal"
                      data-target="#modalsignup"><span class="align-middle">SIGN UP</span> <i
                      class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
                </small></h6>
            </div>
          </div>
          <div class="col-md-8 bg-white" 
            style="background:url('<?= base_url();?>image/modalimg/A15.jpg') center  no-repeat;background-size: cover;">
            <button type="button" class="close p-4" data-dismiss="modal">&#10006</button>
            <article>
              <div>
                <form id="login-form" method="post" action="<?= base_url() ?>main/signin" >
                  <h6 style="color:black;" class="text-center">WELCOME BACK!</h6><br>
                  <p id="error_msg_signin" style="display:none" class="text text-danger" ></p>
                  <p id="success_msg_signin" style="display:none" class="text text-success" ></p>
                  <div class="group">
                    <input name="loginEmail" type="text"><span class="highlight"></span><span class="bar"></span>
                    <label>Email</label>
                  </div>
                  <div class="group mb-1">
                    <input name="loginPassword" type="password"><span class="highlight"></span><span class="bar"></span>
                    <label>Your Password</label>
                  </div>
                  <a href="<?= base_url('main/forgot_password') ?>" class="text-p text-secondary float-right">Forgot password?</a>
                  <br><br><br>
                  <button type="submit" style="border:0px;background-color:transparent;color:black;" id="loginButtonForm" ><span class="align-middle" data-toggle="modal"
                      data-target="#modalLoginsuccess">LOGIN</span> <i
                      class="fa fa-angle-right fa-2x pl-1 align-middle"></i></button>
                </form>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="qnimate" class="off">
  <div id="search" class="open">
    <button data-widget="remove" id="removeClass" class="close text-dark" type="button">×</button>
    <div style="padding-top:15%;" class="">
      <form action="<?= base_url('Main/blog');?>" method="post" autocomplete="off">
        <i class="fa fa-search fa-2x" style="padding-top:25px;padding-right:10px" aria-hidden="true"></i>
        <input type="text" placeholder="search..." value="" name="term" id="term">
      </form>
    </div>
    <div class="row align-self-center">
       <div class="col-12 text-center py-1"><a href="<?= base_url()?>" class="text-dark col">ABOUT</a>
        <a href="<?= base_url('main/services#faq')?>" class="text-dark col">FAQ</a>
        <a href="<?= base_url('main/blog')?>" class="text-dark col">BLOG</a>
      </div>
       <div class="col-12  text-center py-1">  <a href="#" class="text-dark col">SIGN UP</a>
        <a href="<?= base_url('main/services#membership')?>" class="text-dark col">MEMBERSHIP</a>
        <a href="#" class="text-dark col">CONTACT</a>
      </div>
      <div class="col-12  text-center py-1">
      
        <a href="#" class="text-dark col">THIRD PARTY</a>
        <a href="#" class="text-dark col">PRIVACY POLICY</a>
        </div>  
    </div>

    <footer id="footer" class="section-bg p-0 lap">
      <div class="container-fluid section-bg pb-4 row position-absolute"
        style="bottom:0px;width:-webkit-fill-available;">
        <div class="col-md-6">
          <div class="copyright text-left pl-5">
            <strong>Reyada</strong> | Collaborative workspace.
          </div>
        </div>
        <div class="col-md-6">
          <div class="copyright text-right pr-5">
            <a href="#"><i class="fa fa-facebook px-2 text-dark" style="font-size: 22px"></i></a>
            <a href="#"><i class="fa fa-instagram px-2 text-dark" style="font-size: 22px"></i></a>
            <a href="#"><i class="fa fa-linkedin px-2 text-dark" style="font-size: 22px"></i></a>
            <a href="#"><i class="fa fa-twitter px-2 text-dark" style="font-size: 22px"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  </div>

</div>

<div id="modalsignup" class="modal fade bs-example-modal-xl" role="dialog">
  <div class="modal-dialog modal-xl" style="height:600px;">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="row">
          <div class="col-md-4 bg-black">
            <div>
              <img src="<?= base_url()?>image/modalimg/a1.png" class="img-fluid  position-relative pull-right" width="170" height="150"
                style="padding-top: 20%; left:20px;">
                <h6 style="color:white; font-modal-childsize: 20px; padding-top: 35%"class="px-2 m-4 mb-5 text-justify" id="loctionDrp">
                          <small style="color:white; font-size: 14px;">
                              <i class="fa-lg pull-left pt-1 mt-2"></i>
                              <div class="pull-left" style="width: 90%;">
                                  <div class="select-wrapper" style="width: 100%;">
                                  <select name="location_id">
                                        <option value="<?= $locations[0]->Id ?>"><?= $locations[0]->Name ?></option>
                                        <option value="<?= $locations[1]->Id ?>"><?= $locations[1]->Name ?></option>
                                  </select>
                                  </div>
                              </div>
                          </small>
                      </h6>
                <h6 style="color:white; position: absolute; bottom:30px; font-size: 14px;" class="p-5 text-justify">
                <small>WELCOME BACK!
                  <br><br>
                  Sign in and see what you’ve missed!
                  <br><br>
                  <a href="#backlogin" id="backlogin" style="color:white;" data-toggle="modal"
                      data-target="#modalLogin"><span class="align-middle">LOGIN</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
                </small></h6>
            </div>
          </div>
          <div class="col-md-8 bg-white"
            style="background:url('<?= base_url()?>image/modalimg/A15.jpg') center  no-repeat;background-size: cover;">
            <button type="button" class="close p-4" data-dismiss="modal">&#10006</button>
            <article>
              <div>
                <form style="width:85%; padding:0em 2em 0em 0em; margin: 0em auto;">
                  <div class="firstSignup">
                    <h6 style="color:black;" class="text-center">REGISTER</h6><br>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="group">
                          <input type="text" name="complete_name" ><span class="highlight"></span><span class="bar"></span>
                          <label> Full Name</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="group">
                          <input type="text" name="company_name" ><span class="highlight"></span><span class="bar"></span>
                          <label>Company Name</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="group">
                          <input type="email" name="signup_email"><span class="highlight"></span><span class="bar"></span>
                          <label>Email</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="group">
                          <input type="text" name="profile_website"><span class="highlight"></span><span class="bar"></span>
                          <label>Website</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="group">
                          <input type="text" name="mobile_phone" ><span class="highlight"></span><span class="bar"></span>
                          <label>Phone Number</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="group">
                          <input type="text" name="billing_address"><span class="highlight"></span><span class="bar"></span>
                          <label>Billing Address</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="group">
                          <input type="password" name="password" ><span class="highlight"></span><span class="bar"></span>
                          <label>Your Password</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="group">
                          <input type="text" name="business_area" ><span class="highlight"></span><span class="bar"></span>
                          <label>Governorates</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="group">
                          <input type="password" name="confirm_password" ><span class="highlight"></span><span class="bar"></span>
                          <label>Confirm Password</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="group">
                          <input type="checkbox" name="receive_news_letter" style="margin-top:15px;">
                          <span style="color:#999;">Recieve news from Reyada</span>
                        </div>
                      </div>
                      <br><br>
                      <br><br>
                      <p id="error_msg_signup" style="display:none" class="text text-danger" ></p>
                      <p id="success_msg_signup" style="display:none" class="text text-success" ></p>
                      
                      <div class="col-md-12">
                        <a href="#" style="color:black;" id="continuebtn" class="float-left"><span
                            class="align-middle">CONTINUE</span> <i
                            class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
                      </div>
                      <div class="col-md-12 text-right">
                        <a href="#" style="color:black;" id="first"><span class="align-middle">1</span> <span
                            style="border-bottom: 1px solid black;width:20px;height:3px; display: inline-block;vertical-align: middle;"></span></a>
                        <a href="#" style="color:black;" id="second"><span class="align-middle">2</span></a>
                      </div>

                    </div>
                  </div>
                  <div class="secondSignup">
                    <h6 style="color:black;" class="text-center m-0">REGISTER</h6>
                    <span style="color:black;" class="text-left">Select your subscription plan</span><br><br>
                    <div class="row">
                      <div class="col-md-6">
                      <label class="test_container">Coworking Memberships
                        <input type="radio" class="plans_type" id="cowork"  checked value="Coworking Memberships" name="radio">
                        <span class="checkmark"></span>
                      </label>
                      </div>
                      <div class="col-md-6">
                        <label class="test_container">Meeting Room Memberships
                          <input type="radio"  class="plans_type" id="meetroom"  value="Meeting Room Memberships" name="radio">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                      <div class="col-md-12">
                        <div class="group">
                        <select class="price_plans" id="price_plans" style="color:black;">
                        </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="group plan_heading">
                         
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="group plan_desc booking-div" >
                          
                        </div>
                      </div>
                      <div class="col-md-12">
                        <span>Choose a Start Date</span>
                        <div class="group" >
                          <input type="date" id='datetimepicker1'><span class="highlight"></span><span class="bar"></span>
                        </div>
                      </div>
                      <br><br>
                      <br><br>
                      <div class="col-md-12">
                        <a href="#" id="signUpBtn" style="color:black;" class="float-left"><span class="align-middle">Continue</span> <i
                            class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
                      </div>

                      <div class="col-md-12 text-right">
                        <a href="#" style="color:black;" id="first"><span class="align-middle">2</span> <span
                            style="border-bottom: 1px solid black;width:20px;height:3px; display: inline-block;vertical-align: middle;"></span></a>
                        <a href="#" style="color:black;" id="second"><span class="align-middle">2</span></a>
                      </div>
                    </div>
                </form>
              </div>
          </div>
          </article>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
<!--Thankyou Modal-->
<div id="modalsigningup" class="modal fade bs-example-modal-xs" role="dialog ">
  <div class="modal-dialog modal-xs modal-dialog-center" style="height:300px;">
    <!-- Modal content-->
    <div class="modal-content pt-5 mt-5" style="padding-top:25%; vertical-align: middle;">
      <div class="modal-body p-0 m-0">
        <section class="container">
          <div class="tmodal">
            <div>
              <h6 style="color:black; position: absolute; bottom:30px; font-size: 14px;"
                class="p-5 text-justify text-left">
                <small>THANK YOU FOR SIGNING UP
                  <br><br>
                  For further questions and inquiries<br>
                  +(965) 2297 0270<br>
                  info@reyada.co
                  <br><br>
                  <a href="./" style="color:black;"><span class="align-middle" id="homeModal">HOME</span> <i
                      class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
                </small></h6>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>

<!-- End Thankyou Modal-->

<!--Thankyou for contact Modal-->
<div id="contact_thankyou" class="modal fade bs-example-modal-xs" role="dialog ">
  <div class="modal-dialog modal-xs modal-dialog-center" style="height:300px;" >
 <!-- Modal content-->
   <div class="modal-content pt-5 mt-5" style="padding-top:25%; vertical-align: middle;">
     <div class="modal-body p-0 m-0">
      <section class="container">
       <div class="tmodal">
        <div>
          <h6 style="color:black; position: absolute; bottom:30px; font-size: 14px;" class="p-5 text-justify text-left">
          <small>THANK YOU FOR CONTACTING US
          <br><br>
	        For further questions and inquiries<br>
                  +(965) 2297 0270<br>
                    info@reyada.co
	        <br><br>
	        <a href="#" style="color:black;"  data-dismiss="modal"><span class="align-middle" id ="homeModal">HOME</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
	        </small></h6>
        </div>
       </div>
      </section>
    </div>
   </div>
  </div>
</div>
<script>
  $(window, document, undefined).ready(function () {

    $('input').blur(function () {
      var $this = $(this);
      if ($this.val())
        $this.addClass('used');
      else
        $this.removeClass('used');
    });

    var $ripples = $('.ripples');

    $ripples.on('click.Ripples', function (e) {

      var $this = $(this);
      var $offset = $this.parent().offset();
      var $circle = $this.find('.ripplesCircle');

      var x = e.pageX - $offset.left;
      var y = e.pageY - $offset.top;

      $circle.css({
        top: y + 'px',
        left: x + 'px'
      });

      $this.addClass('is-active');

    });

    $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function (e) {
      $(this).removeClass('is-active');
    });

  });
</script>
<script>
  $(function () {
    $("#addClass").click(function () {
      $('#qnimate').addClass('popup-box-on');
    });

    $("#removeClass").click(function () {
      $('#qnimate').removeClass('popup-box-on');
    });
  })

  $(function () {
    $("#addClassMob").click(function () {
      $('#qnimate').addClass('popup-box-on');
    });

    $("#removeClass").click(function () {
      $('#qnimate').removeClass('popup-box-on');
    });
  })
</script>
<script>
  $(document).ready(function(){
  var cur_date = '<?php echo date("Y-m-d") ?>';
  var username = '<?= $this->config->item('username')?>'
  var password = '<?= $this->config->item('password')?>'
  var base_url = '<?= base_url(); ?>';

  $(".secondSignup").hide();

  $(".continuebtn").click(function () {
    $(".secondSignup").show();
  });

  var price_plan = $("input[name='radio']:checked").val();

  get_price_plans(price_plan);
 
  $(".plans_type").click(function(){
    $('.whole_div').show();
    get_price_plans($(this).val());
  });

  $(".price_plans").change(function(){
    $('.whole_div').show();
    get_price_details($(this).val());
  });

  $(document).on("click", "#continuebtn", function () {
    $('.whole_div').show();
    var check_passowrd = validate_sign_up_form($('[name="password"]').val(),$('[name="confirm_password"]').val(), $('[name="complete_name"]').val(),
    $('[name="company_name"]').val(),$('[name="signup_email"]').val(),$('[name="profile_website"]').val(),$('[name="mobile_phone"]').val(),$('[name="business_area"]').val());
    if(check_passowrd == true){
      post_array =
      {
          "location_id": $('[name="location_id"]').val(),
          "FullName": $('[name="complete_name"]').val(),
          "CompanyName": $('[name="company_name"]').val(),
          "Email": $('[name="signup_email"]').val(),
          "ProfileWebsite": $('[name="profile_website"]').val(),
          "MobilePhone": $('[name="mobile_phone"]').val(),
          "BillingAddress": $('[name="billing_address"]').val(),
          "Password": $('[name="password"]').val(),
          "PasswordConfirm": $('[name="confirm_password"]').val(),
          "BusinessArea": $('[name="business_area"]').val(),
          "SignUpToNewsletter": $('[name="receive_news_letter"]').val()
      }

      $.ajax({
          type: 'POST',
          dataType: 'json',
          url: base_url + 'main/signup',
          data: post_array,
          success: function(data) {
              if(data.status != 200){
                $('.whole_div').hide();
                toastr.error(data.message);
              }else{
                $('.whole_div').hide();
                toastr.success('Registered Succesfully');
                $('#loctionDrp').hide();
                $(".firstSignup").css('display', 'none');
                $(".secondSignup").css('display', 'block');
              }
          },
          error: function(jqxhr, status, error) {
            $('.whole_div').hide();
            console.log(jqxhr);
            console.log(status);
            console.log(error);
          }
      });
    }
  });

  $(document).on("click", "#signUpBtn", function () {
    $('.whole_div').show();
    var selected_date = $('#datetimepicker1').val();
    var selected_date = selected_date.replace("/", "-");
    var tariff_guid = $('#price_plans').val();
    if(selected_date == ""){
      $('.whole_div').hide();
      toastr.error('please select date');
    }
    else if(selected_date < cur_date){
      $('.whole_div').hide();
      toastr.error('Cannot select the past date');
    }
    else{
      post_array = {
        "tariff_guid": tariff_guid,
        "selected_date": selected_date
      }
      $.ajax({ 
        type: 'POST',
        dataType: 'json',
        url: base_url + 'main/subscription_plan',
        data: post_array,
        success: function(data) {
          if(data.status == 200){
            $('.whole_div').hide();
            toastr.success('Plan Added Successfully');
            setTimeout(function(){
              window.location.replace(base_url + 'main');
            }, 3000) 
          }
        },
        error: function(jqxhr, status, error) {
          $('.whole_div').hide();
          toastr.error('some error occured while processing your request');
          console.log(jqxhr);
          console.log(status);
          console.log(error);
        }
      });
    }
  });

  $(document).on("submit", "#login-form", function (e) {
    e.preventDefault();
    $('.whole_div').show();

    post_array = {
      "email": $('[name="loginEmail"]').val(),
      "password": $('[name="loginPassword"]').val()
    }

    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: base_url + 'main/signin',
        data: post_array,
        success: function(data) {
          console.log('inside success'+data);
            if(data.status != 200){
              $('.whole_div').hide();
              toastr.error('Username or Password incorrect');
            }else{
              $('.whole_div').hide();
              toastr.success('Logged in successfully');
              setTimeout(function() {
                  window.location.replace(base_url + 'main/profile');
              }, 2000);
              
            }
        },
        error: function(data) {
          console.log('inside errror'+ data);
          toastr.success(data.status);
          $('.whole_div').hide();
        }
    });
  
  });

  function validate_sign_up_form(password,confirm_password,complete_name,company_name,signup_email,profile_website,mobile_phone,business_area){
    $('#error_msg_signup').empty();
    if (complete_name === '' || company_name === '' || signup_email === '' || profile_website === '' || mobile_phone === '' || business_area === '') {
        $('#error_msg_signup').append('All The Fields are Mandatory');
        $('#error_msg_signup').fadeIn().delay(5000).fadeOut();
        $('.whole_div').hide();
    return false;
    }
    if (!(signup_email).match(/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i)){
        $('#error_msg_signup').append('Invalid Email...!!!!!!');
        $('#error_msg_signup').fadeIn().delay(5000).fadeOut();
        $('.whole_div').hide();
    return false;
    }
    if (!(mobile_phone).match(new RegExp('^[2-9][0-9]*$')) || mobile_phone.length != 8) {
        $('#error_msg_signup').append('Invalid MObile Number(must be 8 digits only)');
        $('#error_msg_signup').fadeIn().delay(5000).fadeOut();
        $('.whole_div').hide();
        return false;
    }
    if (!password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)){
      $('#error_msg_signup').append('password Should contain one special character');
      $('#error_msg_signup').fadeIn().delay(5000).fadeOut();
      $('.whole_div').hide();
      return false;
    }
    if (password != confirm_password){
      $('#error_msg_signup').append('Password and confirm password should be same');
      $('#error_msg_signup').fadeIn().delay(5000).fadeOut();
      $('.whole_div').hide();
      return false;
    }
    if(password.length < 7){
      $('#error_msg_signup').append('Password should contain more than 8 characters');
      $('#error_msg_signup').fadeIn().delay(5000).fadeOut();
      $('.whole_div').hide();
      return false;
    }
    if(!password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)){
      $('#error_msg_signup').append('password Should contain both lower and uppercase characters');
      $('#error_msg_signup').fadeIn().delay(5000).fadeOut();
      $('.whole_div').hide();
      return false;
    }
    else{
      return true;
    }

  }

  function get_price_plans(plan_name = null){
    $(".price_plans").empty();
    $.ajax({
        type: 'GET',
        url: 'https://spaces.nexudus.com/api/billing/tariffs?Tariff_GroupName=' + plan_name,
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Basic " + btoa(username + ":" + password));
        },
        dataType: 'json', 
        success: function(data){
          var price_plans = data.Records;
          $.each(price_plans, (key, price_plan) => {
            $('.whole_div').hide();
            if(price_plan.Visible === true){
              $('.price_plans').append("<option value ='"+price_plan.UniqueId +"'>" + price_plan.Name + "</option>");
            }
            
          })
          get_price_details(price_plans[0].UniqueId);
        },
        error: function(jqxhr, status, error) {
          $('.whole_div').hide();
          console.log(jqxhr);
          console.log(status);
          console.log(error);
        }
    })
  }

  function get_price_details(plan_id = null){
    $('.plan_heading').empty();
    $('.plan_desc').empty();
      $.ajax({
        type: 'GET',
        url: 'https://spaces.nexudus.com/api/billing/tariffs?UniqueId=' + plan_id,
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Basic " + btoa(username + ":" + password));
        },
        dataType: 'json', 
        success: function(data){
          $('.whole_div').hide();
          var price_detail = data.Records;
          if(price_detail[0].InvoiceEvery == 1) {
            duration = 'Monthly';
          }
          else if(price_detail[0].InvoiceEvery == 4){
            duration = 'Quarterly';
          }
          else if(price_detail[0].InvoiceEvery == 12){
            duration = 'Annually';
          }
          else{
            duration = 'every ' + price_detail[0].InvoiceEvery +'  months' ;
          }
            var desc_head = price_detail[0].Description.split(".");
            var desc = price_detail[0].Description.replace(/<p>/g, "<span style='color: #000; font-size: 14px;line-height:30px;'>");  
            desc = desc.replace(/<\/p>/g,"</span><br>"); 
            desc = desc.split(".");
          var price_head = "<span style='color: #000; font-size: 12px;'>" + duration + '  ('+ price_detail[0].Price + ' ' + price_detail[0].CurrencyCode + ')'+ "</span>"+
                           "<span style='color: #000; font-size: 13px;'>" + desc_head[0] + "</span>";
         
          $('.plan_heading').append(price_head);
          $('.plan_desc').html(desc.slice(1));
                         
        },
        error: function(jqxhr, status, error) {
          $('.whole_div').hide();
          console.log(jqxhr);
          console.log(status);
          console.log(error);
        }
    })
  }

});
 
</script>
