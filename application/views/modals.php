<!-- Contact Us Modal -->

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
                 <!-- </form> -->
            </div>
            <div class="col-md-6" style="color:black; padding-left: 10%;" style="font-size: 16px;">
            <!-- <form action="" style="padding-top:0px; padding-left:50px;" class="m-0"> -->
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
                        <input type="text" name="notes" id="notes"><span class="highlight"></span><span class="bar"></span>
                        <label>Notes</label>
                    </div>
                    <br><br>
                    <button type="submit"  style="border: 0px;background-color: transparent;" class="float-right">Submit <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></button>
	                  <!-- <input type="submit" value="submit"> -->
            <!-- </form> -->
            </div>
           </div>
          </form>
        </article>
      </div>
      <div class="right-half1">
       <button type="button" class="close p-4 text-white" data-dismiss="modal">&#10006</button>
        <h6 style="color:white; font-size: 16px; padding-top: 25%" class="px-5 m-5 text-justify">CALL US.
        <br><br><br>
        <small style="color:white; font-size: 14px;">
         Give us a call during our office hours and inquire about our services.
         <br><br><br>
        </small>
        +(965) 2297 0270
        <br><br>
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
        <section class="container">
          <div class="left-half pr-0">
            <div>
              <img src="image/modalimg/a1.png" class="img-fluid  position-relative pull-right" width="170" height="150"
                style="padding-top: 30%; left:20px;">
              <h6 style="color:white; position: absolute; bottom:30px; font-size: 14px;" class="p-5 text-justify">
                <small>JOIN OUR COMMUNITY
                  <br><br>
                  Sign up and become a part of the Reyada Community.
                  <br><br>
                  <a href="#signup" style="color:white;"><span class="align-middle" data-toggle="modal"
                      data-target="#modalsignup">SIGN UP</span> <i
                      class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
                </small></h6>
            </div>
          </div>
          <div class="right-half" class="clearfix"
            style="background:url('image/modalimg/A15.jpg') center  no-repeat;background-size: cover;">
            <button type="button" class="close p-4" data-dismiss="modal">&#10006</button>
            <article>
              <div>
                <form>
                  <h6 style="color:black;" class="text-center">WELCOME BACK!</h6><br>
                  <p id="error_msg_signin" style="display:none" class="text text-danger" ></p>
                  <p id="success_msg_signin" style="display:none" class="text text-success" ></p>
                  <div class="group">
                    <input name="loginEmail" type="text"><span class="highlight"></span><span class="bar"></span>
                    <label>Email</label>
                  </div>
                  <div class="group mb-1">
                    <input name="loginPassword" type="password"><span class="highlight"></span><span class="bar"></span>
                    <label>Password</label>
                  </div>
                  <a href="#" class="text-p text-secondary float-right">Forgot password?</a>
                  <br><br><br>
                  <a href="javascript:void(0)" id="loginButtonForm" style="color:black;"><span class="align-middle" data-toggle="modal"
                      data-target="#modalLoginsuccess">LOGIN</span> <i
                      class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
                </form>
              </div>
            </article>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
<script>
  // $('#modallogin').on('hidden.bs.modal', function () {
  //   // Load up a new modal...
  //   $('#modalsignup').modal('show')
  // })

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

<!--==========================
    End Login Modal
  ============================-->


<div id="qnimate" class="off">
  <div id="search" class="open">
    <button data-widget="remove" id="removeClass" class="close text-dark" type="button">×</button>
    <div style="padding-top:15%;" class="">
      <form action="" method="" autocomplete="off">
        <i class="fa fa-search fa-2x" style="padding-top:25px;padding-right:10px" aria-hidden="true"></i>
        <input type="text" placeholder="search..." value="" name="term" id="term">
        <!-- <button class="btn btn-lg btn-site" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button> -->
      </form>
    </div>
    <div class="align-self-center" style="padding-left:30%;padding-right:25%;position:absolute">
      <!-- <nav class="main-nav  d-lg-block align-self-center" > -->
      <ul class="align-self-center main-nav-menu d-lg-block align-self-center">

        <li><a href="#" class="text-dark">ABOUT</a></li>
        <li><a href="#" class="text-dark">FAQ</a></li>
        <li><a href="#" class="text-dark">BLOG</a></li>
        <li><a href="#" class="text-dark">SIGN UP</a></li>
        <li><a href="#" class="text-dark">MEMBERSHIP</a></li>
        <li><a href="#" class="text-dark">CONTACT</a></li>
        <li><a href="#" class="text-dark">THIRD PARTY</a></li>
        <li><a href="#" class="text-dark text-left">PRIVACY POLICY</a></li>

        <!-- <a href="#search"><i class="fa fa-search"></i></a> -->

      </ul>
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
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- <small style="text-align: center; color: rgb(0, 0, 0); position: absolute; left: 0px; right: 0px; bottom: 70px; font-size: 16px;">Designed by <a target="_blank" title="gurdeeposahan" href="https://web.facebook.com/iamgurdeeposahan">IamGurdeepOsahan</a></small> -->
  </div>

</div>

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
<!--End Login Modal-->

<!-- SignUp Modal -->

<div id="modalsignup" class="modal fade bs-example-modal-xl" role="dialog">
  <div class="modal-dialog modal-xl" style="height:600px;">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body p-0 m-0">
        <section class="container">

          <div class="left-half pr-0">
            <div>
              <img src="image/modalimg/a1.png" class="img-fluid  position-relative pull-right" width="170" height="150"
                style="padding-top: 30%; left:20px;">
                <h6 style="color:white; position: absolute; bottom:30px; font-size: 14px;" class="p-5 text-justify"><small>WELCOME BACK!
                  <br><br>
                  Sign in and see what you’ve missed!
                  <br><br>
                  <a href="#Login" style="color:white;"><span class="align-middle" data-toggle="modal"
                      data-target="#modalLogin">LOGIN</span> <i
                      class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
                </small></h6>
            </div>
          </div>

          <div class="right-half" class="clearfix"
            style="background:url('image/modalimg/A15.jpg') center  no-repeat;background-size: cover;">
            <button type="button" class="close p-4" data-dismiss="modal">&#10006</button>
            <article>
              <div>
                <form style="width:85%; padding:0em 2em 0em 0em; margin: 0em auto;">
                  <div class="firstSignup">
                    <h6 style="color:black;" class="text-center">REGISTER</h6><br>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="group">
                          <input type="text" name="full_name" ><span class="highlight"></span><span class="bar"></span>
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
                          <label>Password</label>
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
                          <span style="color:#999;">Recieve news from reyada</span>
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
                    <h6 style="color:black;" class="text-center">REGISTER</h6><br>
                    <span style="color:black;" class="text-left">Select your subscription plan</span><br><br>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="group">
                          <input type="checkbox" style="margin-top:15px;">
                          <span style="font-size: 11px;">Coworking membership</span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="group">
                          <input type="checkbox" style="margin-top:15px;">
                          <span style="font-size: 11px;">Meeting room membership</span>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="group">
                          <input type="email"><span class="highlight"></span><span class="bar"></span>
                          <label>Membership</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="group">
                          <span style="color: #000; font-size: 11px;">Annually<br>
                            One-time annual membership free.</span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="group">
                          <span style="color: #000; font-size: 11px;">Includes:<br>
                            _1 day access (9.00AM-9.00PM)<br>
                            _Additional access: 10KD/day<br>
                            _1 hour meeting room credits<br>
                            _Additional on-demand upon booking starting from 9KD/hour.
                          </span>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="group">
                          <input type="text"><span class="highlight"></span><span class="bar"></span>
                          <label>Choose a Start Date</label>
                        </div>
                      </div>

                      <br><br>
                      <br><br>
                      
                      
                      <div class="col-md-12">
                        <a href="#" id="signUpBtn" style="color:black;" class="float-left"><span class="align-middle">SIGN UP</span> <i
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
      </section>
    </div>
  </div>
</div>
</div>

<style>
  .modal-dialog-center {
    margin-top: 13%;
  }
</style>

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

<!-- End Thankyou for contact Modal -->
<!-- <script>
  $(function(){
$("#addClass").click(function () {
          $('#mobModalLogin1').addClass('popup-box-on');
            });
          
            $("#removeClass").click(function () {
          $('#mobModalLogin1').removeClass('popup-box-on');
            });
  })
  </script> -->
<!--End Login Modal-->
<!-- End Thankyou Modal-->
<script>
  var base_url = '<?= base_url(); ?>';
  $(document).ready(function () {
    $(".secondSignup").hide();
    $(".continuebtn").click(function () {
      $(".secondSignup").show();
    });
  });


  $(document).on("click", "#continuebtn", function () {

    post_array =
    {
        "FullName": $('[name="full_name"]').val(),
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
            console.log(data);
            if(data.status != 200){
              $('#error_msg_signup').text(data.message);
              $('#error_msg_signup').fadeIn().delay(5000).fadeOut();
            }else{
              $('#success_msg_signup').text(data.message);
              $('#success_msg_signup').fadeIn().delay(5000).fadeOut();
              location.reload();
            }
        },
        error: function(jqxhr, status, error) {
          console.log(jqxhr);
          console.log(status);
          console.log(error);
        }
    });

    // $(".firstSignup").css('display', 'none');
    // $(".secondSignup").css('display', 'block');
    
  });

  $(document).on("click", "#signUpBtn", function () {
    
  });

  $(document).on("click", "#loginButtonForm", function () {
    
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
            if(data.status != 200){
              toastr.error('Username or Password incorrect');
              // $('#error_msg_signin').text(data.message);
              // $('#error_msg_signin').fadeIn().delay(5000).fadeOut();
            }else{
              // $('#success_msg_signin').text(data.message);
              // $('#success_msg_signin').fadeIn().delay(5000).fadeOut();
              toastr.success('Logged in successfully');
              setTimeout(function() {
                  location.reload();
              }, 2000);
              
            }
        },
        error: function(jqxhr, status, error) {
          console.log(jqxhr);
          console.log(status);
          console.log(error);
        }
    });
  
  });
</script>
