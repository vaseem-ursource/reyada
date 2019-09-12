<!-- Booking Modal1 -->
<style>
.loc-desc{
    color:white; 
    position: relative;
    left:0px;
    right:20px; 
    bottom:5%; 
    font-size: 11px;
}
</style>
<div class="modal fade" id="bookingmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="row">
            <div class="col-md-4 bg-black">
                <button type="button" class="close mob text-white" style="opacity:1;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="px-5 m-5 text-center">
                    <span id="new-date"><?php echo date("j F Y") ?></span>
                </h4>
                <h6 class="px-2 m-4 mb-5 text-justify">
                    <small style="color:white; font-size: 14px;" class="">
                        <i class="fa fa-map-marker fa-lg pt-1 mt-2"></i>
                        <div class="pull-right" style="width: 90%;">
                            <div class="select-wrapper" style="width: 100%;">
                                <select class="location-drp-dwn">
                                    <option value="<?= $locations[0]->Id ?>"><?= $locations[0]->Name ?></option>
                                    <option value="<?= $locations[1]->Id ?>"><?= $locations[1]->Name ?></option>
                                </select>
                            </div>
                        </div>
                    </small>
                </h6>
                <h6 style="color:white; font-size: 14px;" class="text-justify bg-black px-2 m-4 mb-3">
                    <div class="col-md-12 col-sm-12 col-xs-12 row" id="resources" style="display:none;">
                    </div>
                    <br>
                    <!-- <div class="col-md-12 col-sm-12 col-xs-12 row booking-div" id="bookings" style="display:none;">
                    </div> -->
                    <div class="col-md-12 col-sm-12 col-xs-12" style="top:-25px;" id="loc_imgs" style="display:none;">
                        <img src="<?= base_url('image/services/room2.jpg')?>"  width="100%" />
                    </div>
                    <div id="description" class="col-md-12 col-sm-12 col-xs-12">
                        <p>
                            <small class="loc-desc"> Lorem Ipsum is simply ing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet,</small>
                        </p>
                    </div>
                    <div class="container">
                        <div class="row text-justify booking-option">
                            <div class="col-md-12">
                                <a href="#" style="color:white;"><span class="pull-left" id="toor_book">Book a tour</span></a>
                                <a href="#" style="color:white;"><span class="pull-right" id="mr_book">Book a meeting room</span></a>
                            </div>
                            <h6 class="p-3" style="position:relative;top:40px;"><small><b>Reyada</b> | Collaborative workplace</small></h6>
                        </div>
                    </div>
                </h6>
            </div>
            <div class="col-md-8 col-xs-8 bg-white">
                 <button type="button" class="close lap" data-dismiss="modal" aria-label="Close">
                 <button type="button" class="close p-4" data-dismiss="modal">&#10006</button>
                </button>
                <form class="w-100" style="padding: 3em 2em 2em 2em;">
                    <div class="hello-week01" style="text-align: -webkit-center;">
                        <script>
                        const prev = document.querySelector('.demo-prev');
                        const next = document.querySelector('.demo-next');

                        const myCalendar01 = new HelloWeek({
                            selector: '.hello-week01',
                            lang: 'en',
                            langFolder: '<?= base_url()?>dist/langs/',
                            format: 'dd MMM yyyy',
                            weekShort: true,
                            monthShort: false,
                            multiplePick: false,
                            defaultDate: false,
                            todayHighlight: true,
                            daysSelected: null, // ['2019-02-26', '2019-03-01', '2019-03-02', '2019-03-03']
                            disablePastDays: false,
                            disabledDaysOfWeek: false,
                            disableDates: false,
                            weekStart: 0, // 0 (Sunday) to 6 (Saturday).
                            daysHighlight: false,
                            range: false,
                            rtl: false,
                            locked: false,
                            minDate: false,
                            maxDate: false,
                            nav: ['‹', '›'],
                            onLoad: () => {
                                /** callback function */
                            },
                            onChange: () => {
                                /** callback function */
                            },
                            onSelect: () => {
                                var selected_date = myCalendar01.getDays();
                                var test_date = selected_date[0];
                                var DateCreated = new Date(Date.parse(test_date)).format("yyyy-mm-dd");
                                $('#new-date').empty();
                                $('#new-date').append(test_date);
                                $('#selected_date').val(DateCreated);
                            },
                            onClear: () => {
                                /** callback function */
                            }
                        });
                        </script>
                    </div><br>
                    <div style="padding-left: 10px; padding-right: 10px; padding-top: 10px;" id="meetFormReg">
                        <div class="row text-left">
                            <div class="col-md-6">
                            <input name="cowerker_id" id="cowerker_id"  type="hidden">
                            <input name="selected_date" id="selected_date"  type="hidden">
                            <input name="address"  id="address" type="hidden">
                            <input name="mobile" id="mobile" type="hidden">
                            <input name="state" id="state" type="hidden">
                                <div class="group">
                                    <input name="name" id="fname" type="text" placeholder="Full Name" <?= ($is_logged_in == 'is_logged_in' ? 'readonly' : null);?> ><span class="highlight"></span><span class="bar"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="group">
                                    <select  class="select-fontsize" name="resource_id" id="select-resource" style="padding:5px !important;color:black !important;">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="group">
                                    <input name="email" id="femail" type="email" placeholder="Email" <?= ($is_logged_in == 'is_logged_in' ? 'readonly' : null);?>><span class="highlight"></span><span class="bar"></span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="group time">
                                    <select class="locations select-fontsize" name="fromtime" id="fromtime" style="padding:5px !important;color:black !important;">
                                        <option value="0">Select Start Time</option>
                                        <option value="12:00 AM">12:00 AM</option>
                                        <option value="12:30 AM">12:30 AM</option>
                                        <option value="1:00 AM">1:00 AM</option>
                                        <option value="1:30 AM">1:30 AM</option>
                                        <option value="2:00 AM">2:00 AM</option>
                                        <option value="2:30 AM">2:30 AM</option>
                                        <option value="3:00 AM">3:00 AM </option>
                                        <option value="3:30 AM">3:30 AM</option>
                                        <option value="4:00 AM">4:00 AM</option>
                                        <option value="4:30 AM">4:30 AM</option>
                                        <option value="5:00 AM">5:00 AM</option>
                                        <option value="5:30 AM">5:30 AM</option>
                                        <option value="6:00 AM">6:00 AM</option>
                                        <option value="6:30 AM">6:30 AM</option>
                                        <option value="7:00 AM">7:00 AM</option>
                                        <option value="7:30 AM">7:30 AM</option>
                                        <option value="8:00 AM">8:00 AM</option>
                                        <option value="8:30 AM">8:30 AM</option>
                                        <option value="9:00 AM">9:00 AM</option>
                                        <option value="9:30 AM">9:30 AM</option>
                                        <option value="10:00 AM">10:00 AM</option>
                                        <option value="10:30 AM">10:30 AM</option>
                                        <option value="11:00 AM">11:00 AM</option>
                                        <option value="11:30 AM">11:30 AM</option>
                                        <option value="12:00 PM">12:00 PM</option>
                                        <option value="12:30 PM">12:30 PM</option>
                                        <option value="1:00 PM">1:00 PM</option>
                                        <option value="1:30 PM">1:30 PM</option>
                                        <option value="2:00 PM">2:00 PM</option>
                                        <option value="2:30 PM">2:30 PM</option>
                                        <option value="3:00 PM">3:00 PM</option>
                                        <option value="3:30 PM">3:30 PM</option>
                                        <option value="4:00 PM">4:00 PM</option>
                                        <option value="4:30 PM">4:30 PM</option>
                                        <option value="5:00 PM">5:00 PM</option>
                                        <option value="5:30 PM">5:30 PM</option>
                                        <option value="6:00 PM">6:00 PM</option>
                                        <option value="6:30 PM">6:30 PM</option>
                                        <option value="7:00 PM">7:00 PM</option>
                                        <option value="7:30 PM">7:30 PM</option>
                                        <option value="8:00 PM">8:00 PM</option>
                                        <option value="8:30 PM">8:30 PM</option>
                                        <option value="9:00 PM">9:00 PM</option>
                                        <option value="9:30 PM">9:30 PM</option>
                                        <option value="10:00 PM">10:00 PM</option>
                                        <option value="10:30 PM">10:30 PM</option>
                                        <option value="11:00 PM">11:00 PM</option>
                                        <option value="11:30 PM">11:30 PM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="group time">
                                    <select class="select-fontsize" name="totime" id="totime" style="padding:5px !important;color:black !important;">
                                        <option value="0">Select End Time</option>
                                        <option value="12:00 AM">12:00 AM</option>
                                        <option value="12:30 AM">12:30 AM</option>
                                        <option value="1:00 AM">1:00 AM</option>
                                        <option value="1:30 AM">1:30 AM</option>
                                        <option value="2:00 AM">2:00 AM</option>
                                        <option value="2:30 AM">2:30 AM</option>
                                        <option value="3:00 AM">3:00 AM </option>
                                        <option value="3:30 AM">3:30 AM</option>
                                        <option value="4:00 AM">4:00 AM</option>
                                        <option value="4:30 AM">4:30 AM</option>
                                        <option value="5:00 AM">5:00 AM</option>
                                        <option value="5:30 AM">5:30 AM</option>
                                        <option value="6:00 AM">6:00 AM</option>
                                        <option value="6:30 AM">6:30 AM</option>
                                        <option value="7:00 AM">7:00 AM</option>
                                        <option value="7:30 AM">7:30 AM</option>
                                        <option value="8:00 AM">8:00 AM</option>
                                        <option value="8:30 AM">8:30 AM</option>
                                        <option value="9:00 AM">9:00 AM</option>
                                        <option value="9:30 AM">9:30 AM</option>
                                        <option value="10:00 AM">10:00 AM</option>
                                        <option value="10:30 AM">10:30 AM</option>
                                        <option value="11:00 AM">11:00 AM</option>
                                        <option value="11:30 AM">11:30 AM</option>
                                        <option value="12:00 PM">12:00 PM</option>
                                        <option value="12:30 PM">12:30 PM</option>
                                        <option value="1:00 PM">1:00 PM</option>
                                        <option value="1:30 PM">1:30 PM</option>
                                        <option value="2:00 PM">2:00 PM</option>
                                        <option value="2:30 PM">2:30 PM</option>
                                        <option value="3:00 PM">3:00 PM</option>
                                        <option value="3:30 PM">3:30 PM</option>
                                        <option value="4:00 PM">4:00 PM</option>
                                        <option value="4:30 PM">4:30 PM</option>
                                        <option value="5:00 PM">5:00 PM</option>
                                        <option value="5:30 PM">5:30 PM</option>
                                        <option value="6:00 PM">6:00 PM</option>
                                        <option value="6:30 PM">6:30 PM</option>
                                        <option value="7:00 PM">7:00 PM</option>
                                        <option value="7:30 PM">7:30 PM</option>
                                        <option value="8:00 PM">8:00 PM</option>
                                        <option value="8:30 PM">8:30 PM</option>
                                        <option value="9:00 PM">9:00 PM</option>
                                        <option value="9:30 PM">9:30 PM</option>
                                        <option value="10:00 PM">10:00 PM</option>
                                        <option value="10:30 PM">10:30 PM</option>
                                        <option value="11:00 PM">11:00 PM</option>
                                        <option value="11:30 PM">11:30 PM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="group text-danger">
                                    <span id="validation_message"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="group" style="text-align: right;">
                                    <a href="#" id="pricesubmit" style="color:black;"><span class="align-middle">Submit</span>
                                        <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Booking Modal -->

<!--book meeting room Modal-->
<div id="yesnomodal" class="modal fade bs-example-modal-xs" role="dialog" style="display:none;">
    <div class="modal-dialog modal-xs modal-dialog-center">
        <!-- Modal content-->
        <div class="modal-content pt-5 mt-5">
            <div class="modal-body p-0 m-0">
                <h6  class="p-5 text-justify text-left">
                    <small>ALREADY REGISTERED ?
                        <br><br>
                        You can make bookings much quicker if you log in with the account details you were sent when you registered on the site or made your last booking.
                        <br><br>
                        <a href="#" id="yesModal" style="color:black;"><span class="align-middle">YES</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
                        <a href="#" id="noModal" style="color:black;"><span class="align-middle"
                                style="padding-left: 40px;">NO</span> <i
                                class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
                    </small>
                </h6>
            </div>
        </div>
    </div>
</div>

<div id="thankyouforRegmodal" class="modal fade bs-example-modal-xs" role="dialog ">
    <div class="modal-dialog modal-xs modal-dialog-center" style="height:350px;">
        <div class="modal-content" style="padding-top:0%; vertical-align: middle;">
            <div class="modal-body p-0 m-0">
                <section class="container">
                    <div class="tmodal">
                        <button type="button" class="close p-4" data-dismiss="modal">&#10006</button>
                        <div>
                            <form style="width:80%; padding-top: 90px;">
                                <h6 style="color:black;" class="text-center">THANK YOU FOR YOUR BOOKING</h6>
                                <h6 style="color:black;" class="text-center" id="confirmBooking"><b></b></h6>
                                <a href="<?= base_url("main/invoice") ?>" style="color:black;"><span class="align-middle">Proceed to payment</span>
                                    <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i>
                                </a>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<div id="bookingpricemodal" class="modal fade bs-example-modal-xs" role="dialog ">
    <div class="modal-dialog modal-xs modal-dialog-center" style="height:350px;">
        <div class="modal-content" style="padding-top:0%; vertical-align: middle;">
            <div class="modal-body p-0 m-0">
                <section class="container">
                    <div class="tmodal">
                        <button type="button" class="close p-4" data-dismiss="modal">&#10006</button>
                        <div>
                            <form style="width:80%; padding-top: 90px;">
                                <!-- <h6 style="color:black;" class="text-center">THANK YOU FOR YOUR BOOKING</h6> -->
                                <h6 style="color:black;" class="text-center" id="bookingPrice"><b></b></h6>
                            </form>
                            <a href="#" id="meetSubmit" style="color:black;display:none;"><span class="align-middle">Proceed</span>
                                <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i>
                            </a>
                        </div>
                       
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<div id="nomodal" class="modal fade bs-example-modal-xs" role="dialog ">
    <div class="modal-dialog modal-xs modal-dialog-center" style="height:400px;">
        <!-- Modal content-->
        <div class="modal-content" style="padding-top:0%; vertical-align: middle;">
            <div class="modal-body p-0 m-0">
                <section class="container">
                    <div class="tmodal">
                        <button type="button" class="close p-4" data-dismiss="modal">&#10006</button>
                        <div>
                            <form method="post" id="bookmeetingroom" style="width:80%; padding-top: 12%;">
                                <h6 style="color:black;" class="text-left">BOOK A MEETING ROOM</h6>

                                <div class="row text-left">

                                    <div class="col-md-6">
                                        <div class="group">
                                            <input name="fullname" id="fullname" required type="text"><span class="highlight"></span><span class="bar"></span>
                                            <label> Full Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="group">
                                            <input name="fulladdress" id="fulladdress" required type="text"><span class="highlight"></span><span class="bar"></span>
                                            <label>Full Address</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="group">
                                            <input name="email" id="email" required type="email"><span class="highlight"></span><span class="bar"></span>
                                            <label>Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="group">
                                            <input name="area" id="area"  required type="text"><span class="highlight"></span><span class="bar"></span>
                                            <label>Area</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="group">
                                            <input name="phone" id="phone"  required type="text"><span class="highlight"></span><span class="bar"></span>
                                            <label>Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="group" style="text-align: right; padding-top: 5%;">
                                            <a href="#" id="pickDate"  style="color:black;"><span
                                                    class="align-middle">Pick date and time</span>
                                                <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="group">
                                            <span id="message" class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                </section>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    var username = '<?= $this->config->item('username')?>'
    var password = '<?= $this->config->item('password')?>'
    var size = 1000;
    var cur_date = '<?php echo date("Y-m-d") ?>';
    var base_url = '<?= base_url(); ?>';
    var is_logged_in = '<?= $is_logged_in ?>';
    var user_info = <?php echo json_encode($user_info); ?>; 

    $(document).on("click", "#bookingbutton", function() {
        $("#bookingmodal").modal("show");
        $(".booking-option").show();
        $("#meetFormReg").hide();
        $("#resources").hide();
        $("#bookings").hide();
        $("#loc_imgs").show(); 
        $("#description").show();
    });
    $(document).on("click","#mr_book",function(){
        $('#confirmBooking').empty();
        if(is_logged_in == 1){
            $('#fname').val(user_info.FullName);
            $('#femail').val(user_info.Email);
            $('#cowerker_id').val(user_info.Id);
            $('#confirmBooking').append('<b>'+ user_info.FullName +'<br>'+ '+965 ' + user_info.MobilePhone + '</b>'); 
            $("#meetFormReg").show();
            $("#resources").show();
            $("#bookings").show();
            $("#loc_imgs").hide(); 
            $(".booking-option").hide();
            $("#description").hide();
        }else{
            $("#yesnomodal").modal("show");
        } 
    });
    $(document).on("click","#toor_book",function(){
    $('#confirmtour').empty();          
        $("#bookingmodal").modal("hide");
        $("#pickdatemodalfortour").modal('show');
        $("#tourFormReg").show(); 
    });
    $(document).on("click", "#noModal", function() {
        $("#bookingmodal").modal("hide");
        $("#yesnomodal").modal("hide");
        $("#nomodal").modal("show");
        $("#resources").show();
        $("#bookings").show();
        $("#loc_imgs").hide();
        $("#description").hide();
    });

    $(document).on("click", "#yesModal", function() {
    $("#bookingmodal").modal("hide");
    $("#yesnomodal").modal("hide");
    $("#modalLogin").modal("show");
    });

    $(document).on("click", "#noModalTour", function() {
        $("#bookingmodal").modal("hide");
        $("#yesnomodalfortour").modal("hide");
        $("#nomodalfortour").modal("show");
    });

    $("#meetFormNonReg").hide();

    $("#meetCalNonReg").click(function() {
        $("#meetFormNonReg").show();
    });

    $("#boardroomDiv").hide();

    $("#boardroomDivMob").hide();

    $("#boardroom").click(function() {
        $("#boardroomDiv").show();
        $("#theDiv").hide();
    });

    $("#the").click(function() {
        $("#theDiv").show();
        $("#boardroomDiv").hide();
    });

    $("#boardroomMob").click(function() {
        $("#boardroomDivMob").show();
        $("#theDivMob").hide();
    });

    $("#theMob").click(function() {
        $("#theDivMob").show();
        $("#boardroomDivMob").hide();
    });

    $("#meetFormReg").hide();

    $("#tourMobFormReg").hide();

    $("#tourMobCalNonReg").click(function() {
        $("#tourMobFormReg").show();
    });

    $("#meetMobFormReg").hide();

    $("#meetMobCalNonReg").click(function() {
        $("#meetMobFormReg").show();
    });
    var location_id = $(".location-drp-dwn").val();
    get_resources(location_id);

    $(".location-drp-dwn").change(function() {   
        $('.whole_div').show();
        $('#loc_imgs').empty();
        var location_id = $(this).val();
         if(location_id == 906856952){
            var img = '<img src="'+base_url+'image/services/room3.jpg" width="100%" />';
            $('#loc_imgs').append(img);
        }
        else{
            var img = '<img src="'+base_url+'image/services/room2.jpg" width="100%" />';
            $('#loc_imgs').append(img);
        }
        get_resources(location_id);
    });

    $(document).on('click','.resource',function() {
        $('.whole_div').show();
        var resource_id = $(this).attr("data-id");
        get_bookings(resource_id);
    });

    $("#pickDate").click(function(e) {
        $('#confirmBooking').empty();
        var id = 'message';
        var valiadte_form = form_validation($("#fullname").val(),$("#email").val(),$("#fulladdress").val(),$("#area").val(),$("#phone").val(),id)
        if (valiadte_form == true)
        {
            $('#fname').val($("#fullname").val());
            $('#femail').val($("#email").val());
            $('#address').val($("#fulladdress").val());
            $('#state').val($("#area").val());
            $('#mobile').val($("#phone").val());
            $('#confirmBooking').append('<b>'+ $("#fullname").val()+'<br>'+ '+965 ' + $("#phone").val()+ '</b>');
            $("#bookingmodal").modal("show");
            $("#meetFormReg").show();
            $(".booking-option").hide();
        }
        else{
            e.preventDefault();
            e.stopImmediatePropagation();
            return false;  
        }
    })

    $("#pickDateTour").click(function(e) {
        $('#confirmtour').empty();
        var id = 't_message';
        var valiadte_form = form_validation($("#t_name").val(),$("#t_email").val(),$("#t_address").val(),$("#t_area").val(),$("#t_mobile").val(),id)
        if (valiadte_form == true)
        {
            $('#tour_fname').val($("#t_name").val());
            $('#tour_email').val($("#t_email").val());
            $('#tour_address').val($("#t_address").val());
            $('#tour_state').val($("#t_area").val());
            $('#tour_mobile').val($("#t_mobile").val());
            $('#confirmtour').append('<b>'+ $("#fullname").val()+'<br>'+ '+965 ' + $("#phone").val()+ '</b>');
            $("#pickdatemodalfortour").modal("show");
            $("#tourFormReg").show();
        }
        else{
            e.preventDefault();
            e.stopImmediatePropagation();
            return false;  
        }
        
    })
    
    function form_validation(fullname,email,fulladdress,area,phone,id) {
        $('#'+id).empty();
        var emailReg = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        var digit_pattern = new RegExp('^[2-9][0-9]*$');
        if (fullname === '' || email === '' || fulladdress === '' || area === '' || phone === '') {
            $('#'+id).append('Please fill out all the fields');
            $('#'+id).fadeIn().delay(5000).fadeOut();

        return false;
        } else if (!(email).match(emailReg)) {
            $('#'+id).append('Invalid Email...!!!!!!');
            $('#'+id).fadeIn().delay(5000).fadeOut();
        return false;
        } else if (!(phone).match(digit_pattern) || phone.length != 8) {
            $('#'+id).append('phone must be Number(8 digits only)');
            $('#'+id).fadeIn().delay(5000).fadeOut();
            return false;
        }else {
            return true;
        }
    }

    $('#toursubmit').click(function(e){
        $('.whole_div').show();
        if(tour_validation()){
            if($('#tour_selected_date').val() == ""){
                var date = cur_date; 
            }
            else{
                var date = $('#tour_selected_date').val(); 
            }
            var time1 = ConvertTimeformat($("#tourtime").val());
            var fromTime = date +'T'+  time1  + 'Z'; 
        post_array =
        {
            "FullName": $("#tour_fname").val(),
            "Email": $("#tour_email").val(),
            "CountryId": '1113',
            "MobilePhone":$("#tour_mobile").val(),
            "SimpleTimeZoneId": '2029',
            "CityName":$("#tour_state").val(),
            "Address": $("#tour_address").val(),
            "FromTime":fromTime,
            "location":$('#tour_location').val(),

        }
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: base_url + 'main/book_a_tour',
            data: post_array, 
                success: function(data) {
                    $('#confirmtour').empty();
                    if(data.status != 200){
                    $('.whole_div').hide();
                    toastr.error(data.message);
                    }else{
                        $('.whole_div').hide();
                        $('#confirmtour').append('<b>'+ '+965 ' + $("#tour_mobile").val() + '</b>');
                        $('#thankyouforbooktourNonRegmodal').modal('show');
                        $("#pickdatemodalfortour").modal("hide");
                    }
                },
                error: function(error, status, msg) {
                    $('.whole_div').hide();
                    toastr.error('We could not update your profile, please try again later.');
                    console.log(status);
                    console.log(error);
                    console.log(msg);
                }
            })
        }   
    });

    $("#meetSubmit").click(function(e) {
        $('.whole_div').show();
            var locations = $(".location-drp-dwn").val();
            if(locations == 906856952){
                var loc_url = "reyadamabane";
            }
            else{
                var loc_url = "reyada";
            }
            var start_time = $("#fromtime").val();
            var end_time = $("#totime").val();
            if($('#selected_date').val() == ""){
                var date = cur_date; 
            }
            else{
                var date = $('#selected_date').val(); 
            }
            var time1 = ConvertTimeformat(moment(start_time, 'h:mm A').subtract(3,'hours').format('h:mm A'));
            var time2 = ConvertTimeformat(moment(end_time, 'h:mm A').subtract(3,'hours').format('h:mm A'));
            var fromTime = date+'T'+ time1 +'Z'; 
            var toTime   = date+'T'+ time2 +'Z';

            if(is_logged_in == 1 ){
                
                post_array =
                {
                    "CoworkerId": user_info.Id,
                    "ResourceId": $("#select-resource").val(),
                    "InvoiceInMinutes": true,
                    "FromTime":fromTime,
                    "ToTime": toTime,
                    "InvoiceNow":true,
                    
                };
                myJSON = JSON.stringify(post_array);
                create_booking(myJSON);
            }
            else
            {
                post_array =
                {
                    "FullName": $("#fname").val(),
                    "Email": $("#femail").val(),
                    "ResourceId": $("#select-resource").val(),
                    "CountryId": '1113',
                    "MobilePhone":$("#mobile").val(),
                    "SimpleTimeZoneId": '2029',
                    "CityName":$("#state").val(),
                    "Address":$("#fulladdress").val(),
                    "FromTime":fromTime,
                    "ToTime": toTime,
                    "loc_url":loc_url,
                }
                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: base_url + 'main/guest_booking',
                    data: post_array,
                    dataType: 'json', 
                    success: function(data){
                        console.log(data); 
                        if(data.Status == 200){
                            $('.whole_div').hide();
                            $("#bookingmodal").modal("hide");
                            $('#bookingpricemodal').modal('hide');
                            $('#thankyouforRegmodal').modal('show');
                        }
                        else{
                            $('.whole_div').hide(); 
                            toastr.error(data.Message);
                        }
                    },
                    error: function(data){
                        $('.whole_div').hide();
                        toastr.error(data.Message);
                    }
                })
            }
    })

    $("#pricesubmit").click(function(e) {
        $('.whole_div').show();
        if (booking_validation())
        {
            var locations = $(".location-drp-dwn").val();
            if(locations == 906856952){
                var loc_url = "reyadamabane";
            }
            else{
                var loc_url = "reyada";
            }
            var start_time = $("#fromtime").val();
            var end_time = $("#totime").val();
            if($('#selected_date').val() == ""){
                var date = cur_date; 
            }
            else{
                var date = $('#selected_date').val(); 
            }
            var time1 = ConvertTimeformat(start_time);
            var time2 = ConvertTimeformat(end_time);
            var FromTime = date+'T'+ time1 +'Z'; 
            var toTime   = date+'T'+ time2 +'Z';
            post_array =
            {
                "resource_id": $("#select-resource").val(),
                "FromTime": FromTime,
                "loc_url" : loc_url,
                "toTime": toTime
            }
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: base_url + 'main/get_booking_price',
                data: post_array,
                success: function(data){
                    console.log(data);
                    $('.whole_div').hide();
                    $('#bookingPrice').empty();
                    if(data.IsAvailable === true){
                        $('#bookingPrice').append('<b>'+ 'this booking will cost you ' + data.Price +'</b>');
                        $('#meetSubmit').show();
                    }
                    else{
                        $('#bookingPrice').append('<b>'+ data.Message +'</b>');
                        $('#meetSubmit').hide();
                    }
                    $('#bookingpricemodal').modal('show');
                },
                error: function(data){
                    $('.whole_div').hide();
                    toastr.error(data.responseJSON.Message);
                }
            });
        }   
        else{
            $('.whole_div').hide();
            e.preventDefault();
            e.stopImmediatePropagation();
            return false;  
        }
    });

    function auto_sign_in(email,password,loc_url){
        post_array = {
        "email": email,
        "password": password,
        "loc_url":loc_url
        }
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: base_url + 'main/signin',
            data: post_array,
            success: function(data) {
                if(data.status == 200){
                $('.whole_div').hide();
                }
                else{
                    $('.whole_div').hide();
                    toastr.error('There is a user with the similar email address already.');  
                }
            },
            error: function(jqxhr, status, error) {
            $('.whole_div').hide();
            }
        });
    }

    function booking_validation() {
        $('#validation_message').empty();
        if($('#selected_date').val() == ""){
            var date = cur_date; 
        }
        else{
            var date = $('#selected_date').val(); 
        }
        var dt = new Date();
        var cur_time = dt.getHours() + ":" + dt.getMinutes();
        var name = $("#fname").val();
        var email = $("#femail").val();
        var resource = $("#select-resource").val();
        var fromtime = $("#fromtime").val();
        var totime = $("#totime").val();
        var emailReg = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        var digit_pattern = new RegExp('^[2-9][0-9]*$');
        if($("#fromtime").val() != '0' || $("#totime").val() != '0'){
            var st_time = ConvertTimeformat($("#fromtime").val());
            var end_time = ConvertTimeformat($("#totime").val());
        }
        
        if (name === '' || email === '' || resource === '0' || fromtime === '0' || totime === '0') {
            $('#validation_message').append('All The Fields are Mandatory');
            $('#validation_message').fadeIn().delay(5000).fadeOut();
            $('.whole_div').hide();
            return false;
        }
        else if (!(email).match(emailReg)) {
            $('#validation_message').append('Invalid Email...!!!!!!');
            $('#validation_message').fadeIn().delay(5000).fadeOut();
            $('.whole_div').hide();
            return false;
        }
        else if (date < cur_date) {
            $('#validation_message').append('Booking cannot be done for the past date');
            $('#validation_message').fadeIn().delay(5000).fadeOut();
            $('.whole_div').hide();
            return false;
        }else if (fromtime == totime) {
            $('#validation_message').append('Start and End time cannot be same');
            $('#validation_message').fadeIn().delay(5000).fadeOut();
            $('.whole_div').hide();
            return false;
        }
        else {
            return true;
        }
    }

    function tour_validation() {
        $('#tour_validation_message').empty();
        if($('#tour_selected_date').val() == ""){
            var date = cur_date; 
        }
        else{
            var date = $('#tour_selected_date').val(); 
        }
        var dt = new Date();
        var cur_time = dt.getHours() + ":" + dt.getMinutes();
        var name = $("#tour_fname").val();
        var phone = $("#tour_mobile").val();
        var email =  $("#tour_email").val();
        var location = $("#tour_location").val();
        var fromtime = $("#tourtime").val();
        var emailReg = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        var digit_pattern = new RegExp('^[2-9][0-9]*$');
        if (name === '' || email === '' || mobile === '' || location === '0' || fromtime === '0' ) {
            $('#tour_validation_message').append('All The Fields are Mandatory');
            $('#tour_validation_message').fadeIn().delay(5000).fadeOut();
            $('.whole_div').hide();
        return false;
        } else if (!(email).match(emailReg)) {
            $('#tour_validation_message').append('Invalid Email...!!!!!!');
            $('#tour_validation_message').fadeIn().delay(5000).fadeOut();
            $('.whole_div').hide();
        return false;
        }
        else if (!(phone).match(digit_pattern) || phone.length != 8) {
            $('#tour_validation_message').append('phone must be Number(8 digits only)');
            $('#tour_validation_message').fadeIn().delay(5000).fadeOut();
            $('.whole_div').hide();
            return false;
        }
        else if (date < cur_date) {
            $('#tour_validation_message').append('Booking cannot be done for the past date');
            $('#tour_validation_message').fadeIn().delay(5000).fadeOut();
            $('.whole_div').hide();
        return false;
        }else if (fromtime == totime) {
            $('#tour_validation_message').append('Start and End time cannot be same');
            $('#tour_validation_message').fadeIn().delay(5000).fadeOut();
            $('.whole_div').hide();
        return false;
        }
        else if(ConvertTimeformat(fromtime) < cur_time && date == cur_date){
            $('#tour_validation_message').append('Booking cannot be done for the past time');
            $('#tour_validation_message').fadeIn().delay(5000).fadeOut();
            $('.whole_div').hide();
        }
        else {
            return true;
        }
    }

    function addDay(date) {
        var result = date.substr(8);
        var day = '1';
        var sh = parseInt(result)+ parseInt(day);
        var new_result = date.substr(0,8) + sh;
        return new_result;
    }

    function subtract_day(date) {
        var result = date.substr(8);
        var day = '1';
        var sh = parseInt(result) - parseInt(day);
        var new_result = date.substr(0,8) + sh;
        return new_result;
    }

    function ConvertTimeformat(time) {
        var hours = Number(time.match(/^(\d+)/)[1]);
        var minutes = Number(time.match(/:(\d+)/)[1]);
        var AMPM = time.match(/\s(.*)$/)[1];
        if (AMPM == "PM" && hours < 12) hours = hours + 12;
        if (AMPM == "AM" && hours == 12) hours = hours - 12;
        var sHours = hours.toString();
        var sMinutes = minutes.toString();
        if (hours < 10) sHours = "0" + sHours;
        if (minutes < 10) sMinutes = "0" + sMinutes;
        var selected_time = sHours + ":" + sMinutes;
        return selected_time;
    }
    
    function get_minutes(time)
    {
        var timeArr = time.split(":");
        var minutes = timeArr[0] * 60 + timeArr[1];
        return minutes;
    }

    function get_resources(location_id) {
        $("#resources").empty();
        $("#select-resource").empty();
        $("#bookings").empty();
        $.ajax({
            type: 'GET',
            url: 'https://spaces.nexudus.com/api/spaces/resources?Resource_Business=' +location_id,
            beforeSend: function(xhr) {
                xhr.setRequestHeader("Authorization", "Basic " + btoa(username + ":" +
                    password));
            },
            dataType: 'json',
            success: function(resources) {
                var resources = resources.Records;
                if (resources.length != 0) {
                    $('.whole_div').hide();
                    var res_id = resources[0].Id;
                    $.each(resources, (key, resource) => {
                        var resources = "<div class='col-md-6 col-sm-6 row p-0 m-0' style='margin-top:10px !important;' >" +
                            "<span  class='resource' style='color:white;font-size:12px;cursor:pointer' data-id ='" +resource.Id +"'>" + resource.Name + "</span>" +
                            "</div>";
                        $("#resources").append(resources);
                        $("#select-resource").append("<option value ='" +resource.Id + " '>" + resource.Name + "</option>");
                        
                    })
                    get_bookings(res_id);
                } else {
                    $('.whole_div').hide();
                    var resources = "<div class='col-md-6 col-sm-6 row p-0 m-0'>" +
                                        "<a href='#' style='color:white;font-size:12px;' id='the'>" +
                                        'No Resources Available' + "</a>" +
                                    "</div>";
                    $("#resources").append(resources);
                    $("#select-resource").append("<option value ='0'>" + 'No Resources Available' + "</option>");
                }
            }
        });
    }

    function get_bookings(res_id) {
        $("#bookings").empty();
        $.ajax({
            type: 'GET',
            url: 'https://spaces.nexudus.com/api/spaces/bookings?Booking_Resource=' + res_id + '&size=' + size ,
            beforeSend: function(xhr) {
                xhr.setRequestHeader("Authorization", "Basic " + btoa(username + ":" +
                    password));
            },
            dataType: 'json',
            success: function(bookings) {
                $('.whole_div').hide();
                var Bookings = bookings.Records;
                if (Bookings.length != '0') {
                    $.each(Bookings, (key, booking) => {
                        var fromtime = moment.tz(booking.FromTime, "Asia/Kuwait");
                        var totime =   moment.tz(booking.ToTime, "Asia/Kuwait");
                        var bookings = 
                        "<div class='col-md-6 col-sm-6 p-0 m-0'>"+ 
                            "<span style='color: #fff; font-size: 16px;'>"+"<br>"+ moment(fromtime).format('h:mm a')+"<br>"+"</span>"+
                            "<span style='color: #fff; font-size: 13px;'>"+moment(totime).format('h:mm a')+"<br>"+"</span>"+
                        "</div>"+
                        "<div class='col-md-6 col-sm-6 p-0 m-0'>"+
                            "<span style='color: #fff; font-size: 14px;'>"+"<br>"+moment(fromtime).format('YYYY-MM-DD')+"<br>"+"</span>"+
                            "<span style='color: #fff; font-size: 12px;'>"+ booking.ResourceName +"<br>"+"</span>"+
                            "<span style='color: #fff; font-size: 12px;'>"+ booking.CoworkerFullName +"<br>"+"</span>"+
                        "</div>";
                        $("#bookings").append(bookings);
                    })
                } else {
                    $('.whole_div').hide();
                    var bookings = "<small>" + "<br>" + 'No Booking Available' + "</small>";
                    $("#bookings").append(bookings);
                }

            },
            error: function() {
                $('.whole_div').hide();
                var bookings = "<small>" + "<br>" + 'No Booking Available' + "</small>";
                $("#bookings").append(bookings);
            }
        })
    }

    function create_booking(data){
        $.ajax({
            type: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            url: 'https://spaces.nexudus.com/api/spaces/bookings',
            beforeSend: function(xhr) {
                xhr.setRequestHeader("Authorization", "Basic " + btoa(username + ":" + password),'Content-Type','application/json');
            },
            data: data,
            dataType: 'json', 
            success: function(data){
                if(data.Status == 200){
                    $('.whole_div').hide();
                    $("#bookingmodal").modal("hide");
                    $('#bookingpricemodal').modal('hide');
                    $('#thankyouforRegmodal').modal('show');
                }
                else{
                    $('.whole_div').hide(); 
                    toastr.error('some error occured while processing');
                }
            },
            error: function(data){
                var message = data.responseJSON.Message.split(".");
                $('.whole_div').hide(); 
                toastr.error(message[0] + message[1] + '.');
            }
        })
    }
});
</script>