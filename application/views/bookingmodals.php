<style>
.loc-desc{
   color:white; 
   position: relative;
   left:0px;
   right:20px; 
   bottom:5%; 
   font-size: 11px;
}
.meetformheight{
  height:600px;
}
.booking-font{
    color:white;
    font-size:12px;
}
@media (max-width: 768px) {
.meetformheight{
height:800px;
}
.mt-btn{
    position:relative;
    top:5px;
}
.booking-font{
    color:white;
    font-size:10px;
}
}
</style>
<div class="modal fade" id="bookingmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
   <div class="modal-dialog  modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-body p-0">
            <div class="row">
               <div class="col-md-5 bg-black" style="height:600px;">
                  <button type="button" class="close mob text-white" style="opacity:1;" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="m-5 text-center">
                     <span id="new-date"><?php echo date("j F Y") ?></span>
                  </h4>
                  <h6 class="px-2 m-4 mb-5 text-justify">
                     <small style="color:white; font-size: 14px;" class="">
                        <i class="fa fa-map-marker fa-lg pt-1 mt-2"></i>
                        <div class="pull-right" style="width: 90%;">
                           <div class="select-wrapper" style="width: 100%;">
                              <select class="location-drp-dwn" name="b_location_id">
                                <option value = "0">Select Location</option>
                              </select>
                           </div>
                        </div>
                     </small>
                  </h6>
                  <h6 style="color:white; font-size: 14px;" class="text-justify bg-black px-2 m-4 mb-3">

                    <div class="col-md-12 text-center">
                        <div class="row" id="resources" style="display:none;">
                            
                        </div>
                    </div>
                        
                     <br>
                     <div class="booking-div table-responsive" id="bookings" style="display:none;position:relative;top:-20px;">
                        <table class="table table-bordered text-center">
                            <thead id="head">
                                
                            </thead>
                            <tbody id="body">
                                
                            </tbody>
                        </table>
                     </div>
                     <div class="col-md-12 col-sm-12 col-xs-12" style="top:-25px;" id="loc_imgs" style="display:none;">
                        <img src="<?= base_url('image/services/room2.jpg')?>"  width="100%" />
                     </div>
                     <div class="container">
                        <div class="row booking-option">
                           <div class="col-md-12 text-center">
                              <p href="#" class="col-md-4 btn tr-mt-btn"><span id="toor_book">Book a tour</span></p>
                              <p href="#" class="col-md-7 btn tr-mt-btn"><span id="mr_book">Book a meeting room</span></p>
                           </div>
                           <h6 class="p-3" style="position:relative;top:20px;"><small><b>Reyada</b> | Collaborative workplace</small></h6>
                        </div>
                     </div>
                  </h6>
               </div>
               <div class="col-md-7 col-xs-7 bg-white meetformheight">
                  <button type="button" class="close lap" data-dismiss="modal" aria-label="Close">
                  <button type="button" class="close p-4" style="outline:none;" data-dismiss="modal">&#10006</button>
                  </button>
                  <form class="w-100" style="padding: 3em 2em 2em 2em;">
                     <div class="hello-week01" id="hello-week01" style="text-align: -webkit-center;">
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
                               daysSelected: null,
                               disablePastDays: false,
                               disabledDaysOfWeek: false,
                               disableDates: false,
                               weekStart: 0,
                               daysHighlight: false,
                               range: false,
                               rtl: false,
                               locked: false,
                               minDate: false,
                               maxDate: false,
                               nav: ['‹', '›'],
                               onLoad: () => {
                               },
                               onChange: () => {
                               },
                               onSelect: () => {
                                   var selected_date = myCalendar01.getDays();
                                   var test_date = selected_date[0];
                                   var DateCreated = new Date(Date.parse(test_date)).format("yyyy-mm-dd");
                                   
                                   $('#new-date').empty();
                                   $('#new-date').append(test_date);
                                   $('#new-date').val(test_date);
                                   $('#selected_date').val(DateCreated);
                               },
                               onClear: () => {
                               }
                           });
                        </script>
                     </div>
                     <br>
                     <div id="meetFormReg" class="meetformheight" style="position:relative;top:20px;">
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
                              <div class="group time">
                                 <select  class="select-fontsize" name="resource_id" id="select-resource" style="padding:5px !important;color:black !important;">
                                    <option value = "0">Select Your Room</option>
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
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="group time">
                                 <select class="select-fontsize" name="totime" id="totime" style="padding:5px !important;color:black !important;">
                                    <option value="0">Select End Time</option>
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
                                <!-- <button class="btn btn sm custom-button-bl" >Submit</button> -->
                                 <p class="btn custom-button-bl pull-right" id="pricesubmit" >Submit</p>
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
<div id="yesnomodal" class="modal fade bs-example-modal-xs" role="dialog" style="display:none;">
   <div class="modal-dialog modal-xs modal-dialog-center">
      <div class="modal-content pt-5 mt-5">
         <div class="modal-body p-0 m-0">
            <h6  class="p-5 text-justify text-left">
               <small>
                  ALREADY REGISTERED ?
                  <br><br>
                  You can make bookings much quicker if you log in with the account details you were sent when you registered on the site or made your last booking.
                  <br><br>
                  <p class="btn custom-button-bl" id="yesModal" style="float:left;outline:none;">YES</p>
                  <p class="btn custom-button-bl" id="noModal" style="float:left;position:relative;left:20px;outline:none;">NO</p>
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
                  <div>
                     <form style="width:80%; padding-top: 90px;">
                        <h6 style="color:black;" class="text-center">THANK YOU FOR YOUR BOOKING</h6>
                        <h6 style="color:black;" class="text-center" id="confirmBooking"><b></b></h6>
                        <a href="<?= base_url("main/invoice") ?>"  class="btn custom-button-bl text-center" style="width:150px;">Proceed to payment</a>
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
                  <button type="button" class="close p-4" style="outline:none;" data-dismiss="modal">&#10006</button>
                  <div>
                     <form style="width:80%; padding-top: 90px;">
                        <h6 style="color:black;" class="text-center" id="bookingPrice"><b></b></h6>
                     </form>
                     <p class="btn custom-button-bl text-center" id="meetSubmit" >Proceed</p>
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
               <button type="button" class="close p-4" style="outline:none;" data-dismiss="modal">&#10006</button>
               <div>
                  <form method="post" id="bookmeetingroom" style="width:80%; padding-top: 12%;">
                     <h6 style="color:black;" class="text-left">BOOK A MEETING ROOM</h6>
                     <div class="row text-left">
                        <div class="col-md-6">
                           <div class="group">
                              <input name="fullname" id="fullname" placeholder="Full Name" required type="text"><span class="highlight"></span><span class="bar"></span>
                              <label></label>
                           </div>
                        </div>
                        <div class="col-md-6" style="display:none;">
                           <div class="group">
                              <input name="fulladdress" id="fulladdress" placeholder="Full Address" value="test" required type="text"><span class="highlight"></span><span class="bar"></span>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="group">
                              <input name="email" id="email" placeholder="Email" required type="email"><span class="highlight"></span><span class="bar"></span>
                           </div>
                        </div>
                        <div class="col-md-6" style="display:none;">
                           <div class="group">
                              <input name="area" id="area"  placeholder="Area" value="test" required type="text"><span class="highlight"></span><span class="bar"></span>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="group">
                              <input name="phone" id="phone"  placeholder="Phone" required type="text"><span class="highlight"></span><span class="bar"></span>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="group" style="padding-top: 10%;">
                              <!-- <span id="pickDate" class="arrow-button">Pick date and time&nbsp;<i class="arrow fa fa-angle-right"></i></span> -->
                              <a href="#" id="pickDate" class="btn custom-button-bl" style="width:150px;outline:none;">Pick date and time</a>
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
       var cur_date= '<?php echo date("Y-m-d") ?>';
       var cur_date_time = '<?php echo date("Y-m-d") ?>'+'T21:00:01';
       var yesterday = '<?php echo date('Y-m-d',strtotime("-1 days")) ?>'+'T20:59:59';
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
           get_locations();
        
       });
       $(document).on("click","#mr_book",function(){
           $('#confirmBooking').empty();
           if(is_logged_in == 1){
                if($(".location-drp-dwn").val() == '0'){
                    toastr.error('Please Select The Location');
                    return false;
                }else{
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
                }
           }
           else{
                if($(".location-drp-dwn").val() == '0'){
                    toastr.error('Please Select The Location');
                    return false;
                }
                else{
                    $("#yesnomodal").modal("show");
                }
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

       $('.day').click(function(){
           var location_id = $(".location-drp-dwn").val();
           var selected_date = $('#new-date').val();
           if(selected_date == ''|| selected_date == null){
               var new_date = cur_date_time;  
           }
           else{
               var new_date = moment(selected_date).format('YYYY-MM-DD')+'T21:00:01';
           }
           var past_day =     moment(new_date, 'YYYY-MM-DD').subtract(1,'days').format('YYYY-MM-DD')+'T20:59:59';
           get_resources(location_id);
           get_location_bookings(location_id,new_date,past_day);
       });
    //    var location_id = $(".location-drp-dwn").val();
    //    get_resources(location_id);
    //    get_location_bookings(location_id,cur_date_time,yesterday);
   
       $(".location-drp-dwn").change(function() {   
           $('.whole_div').show();
           $('#loc_imgs').empty();
           var location_id = $(this).val();
           var selected_date = $('#new-date').val();
           if(location_id == 906856952){
               var img = '<img src="'+base_url+'image/services/room3.jpg" width="100%" />';
               $('#loc_imgs').append(img);
           }
           else{
               var img = '<img src="'+base_url+'image/services/room2.jpg" width="100%" />';
               $('#loc_imgs').append(img);
           }
           if(selected_date == ''|| selected_date == null){
               var new_date = cur_date_time;  
           }
           else{
               var new_date = moment(selected_date).format('YYYY-MM-DD')+'T21:00:01';
           }
           var past_day =     moment(new_date, 'YYYY-MM-DD').subtract(1,'days').format('YYYY-MM-DD')+'T20:59:59';
           get_resources(location_id);
           get_location_bookings(location_id,new_date,past_day);
       });
   
       $(document).on('click','.resource',function() {
           $('.whole_div').show();
           var resource_id = $(this).attr("data-id");
           var selected_date = $('#new-date').val();
           if(selected_date == ''|| selected_date == null){
               var new_date = cur_date_time;  
           }
           else{
               var new_date = moment(selected_date).format('YYYY-MM-DD')+'T21:00:01';
           }
           var past_day =     moment(new_date, 'YYYY-MM-DD').subtract(1,'days').format('YYYY-MM-DD')+'T20:59:59';
           get_bookings(resource_id,new_date,past_day);
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
               if(is_logged_in == 1 ){
                   var time1 = ConvertTimeformat(moment(start_time, 'h:mm A').subtract(3,'hours').format('h:mm A'));
                   var time2 = ConvertTimeformat(moment(end_time, 'h:mm A').subtract(3,'hours').format('h:mm A'));
               }else{
                   var time1 = ConvertTimeformat(start_time);
                   var time2 = ConvertTimeformat(end_time);
               }
               
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
                       "loc_url":loc_url,
                       "loc_id":$('[name="b_location_id"]').val(),
                       
                   }
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
                       "loc_id":$('[name="b_location_id"]').val(),
                   }
               }
                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: base_url + 'main/guest_booking',
                    data: post_array,
                    success: function(data){
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
                        console.log(data);
                        $('.whole_div').hide();
                        toastr.error(data.Message);
                    }
                })
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
               if(is_logged_in != 1 ){
                   check_email_exist($("#femail").val(),loc_url,$("#select-resource").val(),FromTime,toTime);
               }
               else{
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
           }   
           else{
               $('.whole_div').hide();
               e.preventDefault();
               e.stopImmediatePropagation();
               return false;  
           }
       });
   
       function check_email_exist(email,loc,resource = null,FromTime = null,toTime = null){
           post_array =
               {
                   "Email": email,
                   "location":loc ,
               }
               $.ajax({
               type: 'POST',
               dataType: 'json',
               url: base_url + 'main/check_email_exist',
               data: post_array,
                   success: function(data){
                   if(data.status == 200){
                           post_array =
                           {
                               "resource_id": resource,
                               "FromTime": FromTime,
                               "loc_url" : loc,
                               "toTime": toTime
                           }
                           $.ajax({
                               type: 'POST',
                               dataType: 'json',
                               url: base_url + 'main/get_booking_price',
                               data: post_array,
                               success: function(data){
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
                           toastr.error('There is a user with this email address already');
                           return 0;
                       }
                   },
                   error: function(data){
                       $('.whole_div').hide();
                   }
               }) 
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
           if($(".location-drp-dwn").val() == '0'){
            toastr.error('Please select Location');
            $(".location-drp-dwn").focus();
            $('.whole_div').hide();
            return false;
           }
           if($("#select-resource").val() == '0'){
            toastr.error('Please Select The Room');
            $('.whole_div').hide();
            return false;
           }
           if($("#fromtime").val() != '0' && $("#totime").val() != '0'){
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
           if($(".location").val() == '0'){
                toastr.error('Please select Location');
                $('.whole_div').hide();
                return false;
           }
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
           var day = '1';
           var sh = parseInt(date) - parseInt(day);
           // var new_result = date.substr(0,8) + sh;
           return sh;
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
       function get_locations(){
           $(".location-drp-dwn").empty();
           $.ajax({
               type: 'GET',
               url: 'https://spaces.nexudus.com/api/sys/businesses?dir=' +'Descending',
               beforeSend: function(xhr) {
                   xhr.setRequestHeader("Authorization", "Basic " + btoa(username + ":" + password));
               },
               dataType: 'json',
               success: function(locations) {
                   var location = locations.Records;
                   if (location.length != 0) {
                           $(".location-drp-dwn").append("<option value ='0'>" + 'Select Location' + "</option>");
                           $(".location-drp-dwn").append("<option value ='"+location[2].Id+"'>" + location[2].Name + "</option>");
                           $(".location-drp-dwn").append("<option value ='"+location[1].Id+"'>" + location[1].Name + "</option>");
                           $(".location").append("<option value ='0'>" + 'Select Location' + "</option>");
                           $(".location").append("<option value ='"+location[2].WebAddress+"'>" + location[2].Name + "</option>");
                           $(".location").append("<option value ='"+location[1].WebAddress+"'>" + location[1].Name + "</option>");
                   
                   } else {
                       $(".location-drp-dwn").append("<option value ='0'>" +'No Locations' + "</option>");
                   }
               },
               error: function(xhr) {
                   $(".location-drp-dwn").append("<option value ='0'>" + 'No Locations' +"</option>");
               }
           });
       }
   
       function get_resources(location_id) {
           $("#resources").empty();
           $("#select-resource").empty();
        //    $("#bookings").empty();
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
                       $("#select-resource").append("<option value ='0'>" + 'Select Your Room' + "</option>");
                       $.each(resources, (key, resource) => {
                           if(resource.Visible === true){
                               var resources = 
                               "<div class='col-md-6' style='padding:0' >"+
                                    "<p href='#'  class='btn tr-mt-btn resource' style='font-size:10px;width:97%;height:30px;' data-id ='" +resource.Id +"' >"+"<span >"+resource.Name+"</span>"+"</p>"+
                                "</div>";
                                // "<div class='col-md-5 col-sm-5'>" +
                                //    "<span  class='resource btn tr-mt-btn' style='font-size:11px;cursor:pointer' data-id ='" +resource.Id +"'>" +  + "</span>" +
                                // "</div>";
                               $("#resources").append(resources);
                               $("#select-resource").append("<option value ='" +resource.Id + " '>" + resource.Name + "</option>");
                           }
                           
                       })
                   } else {
                       $('.whole_div').hide();
                       var resources = "<div class='col-md-12 col-sm-12 row p-0 m-0'>" +
                                           "<a href='#' style='color:white;font-size:12px;' id='the'>" +
                                           'No Resources Available' + "</a>" +
                                       "</div>";
                       $("#resources").append(resources);
                       $("#select-resource").append("<option value ='0'>" + 'No Resources Available' + "</option>");
                   }
               }
           });
       }
   
       function get_bookings(res_id,cur_date,yesterday) {
        $("#head").empty();
        $("#body").empty();
        $.ajax({
            type: 'GET',
            url: 'https://spaces.nexudus.com/api/spaces/bookings?Booking_Resource=' + res_id + '&size=' + size + '&To_Booking_FromTime=' + cur_date + '&From_Booking_ToTime=' + yesterday,
            beforeSend: function(xhr) {
                xhr.setRequestHeader("Authorization", "Basic " + btoa(username + ":" +
                    password));
            },
            dataType: 'json',
            success: function(bookings) {
                $('.whole_div').hide();
                var Bookings = bookings.Records;
                if (Bookings.length != '0') {
                        var head = 
                        "<tr>"+
                            "<th colspan='3' scope='col' style='color:white;' class='text-center' >"+ 'Scheduled Bookings' +"</th>"+
                        "</tr>";
                    $("#head").append(head);
                    $.each(Bookings, (key, booking) => {
                        var fromtime = moment.tz(booking.FromTime, "Asia/Kuwait");
                        var totime =   moment.tz(booking.ToTime, "Asia/Kuwait");
                        var body =   "<tr class='booking-font'>"+
                                        "<td>"+ booking.ResourceName +"<br>"+ moment(fromtime).format('YYYY-MM-DD') + "</td>"+
                                        "<td>" + moment(fromtime).format('h:mma')+"-"+ moment(totime).format('h:mma') + "</td>"+
                                    "</tr>";
                        
                        $("#body").append(body);
                    })
                } else {
                    $('.whole_div').hide();
                    var head = 
                        "<tr>"+
                            "<th colspan='3' scope='col' style='color:white;' class='text-center' >"+ 'No Bookings' +"</th>"+
                        "</tr>";
                    $("#head").append(head);
                }

            },
            error: function() {
                $('.whole_div').hide();
                    var head = 
                        "<tr>"+
                            "<th colspan='3' scope='col' style='color:white;' class='text-center' >"+ 'No Bookings' +"</th>"+
                        "</tr>";
                    $("#head").append(head);
            }
        })
       }
   
       function get_location_bookings(loc_id,cur_date,yesterday){
           $("#head").empty();
           $("#body").empty();
           $.ajax({
               type: 'GET',
               url: 'https://spaces.nexudus.com/api/spaces/bookings?Booking_Resource_Business=' + loc_id + '&size=' + size + '&To_Booking_FromTime=' + cur_date + '&From_Booking_ToTime=' + yesterday,
               beforeSend: function(xhr) {
                   xhr.setRequestHeader("Authorization", "Basic " + btoa(username + ":" +
                       password));
               },
               dataType: 'json',
               success: function(bookings) {
                   $('.whole_div').hide();
                   var Bookings = bookings.Records;
                   if (Bookings.length != '0') {
                      var head = 
                        "<tr>"+
                            "<th colspan='3' scope='col' style='color:white;' class='text-center'>"+ 'Scheduled Bookings' +"</th>"+
                        "</tr>";
                       $("#head").append(head);
                       $.each(Bookings, (key, booking) => {
                           var fromtime = moment.tz(booking.FromTime, "Asia/Kuwait");
                           var totime =   moment.tz(booking.ToTime, "Asia/Kuwait");
                            var body =  "<tr class='booking-font'>"+
                                            "<td>"+ booking.ResourceName +"<br>"+ moment(fromtime).format('YYYY-MM-DD') + "</td>"+
                                            "<td style='position:relative;top:50%;'>" + moment(fromtime).format('h:mma')+" - "+ moment(totime).format('h:mma') + "</td>"+
                                        "</tr>";
                            
                            $("#body").append(body);
                       })
                    
                   } else {
                       $('.whole_div').hide();
                       var head = 
                        "<tr>"+
                            "<th colspan='3' scope='col' style='color:white;' class='text-center' >"+ 'No Bookings' +"</th>"+
                        "</tr>";
                        $("#head").append(head);
                   }
   
               },
               error: function() {
                   $('.whole_div').hide();
                   var head = 
                        "<tr>"+
                            "<th colspan='3' scope='col' style='color:white;' class='text-center' >"+ 'No Bookings' +"</th>"+
                        "</tr>";
                    $("#head").append(head);
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