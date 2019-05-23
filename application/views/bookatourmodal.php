<!--book tour Modal-->
<div id="yesnomodalfortour" class="modal fade bs-example-modal-xs" role="dialog" style="display:none;">
  <div class="modal-dialog modal-xs modal-dialog-center" style="height:350px;" >
 <!-- Modal content-->
   <div class="modal-content pt-5 mt-5" style="padding-top:10%; vertical-align: middle;">
     <div class="modal-body p-0 m-0">
      <section class="container">
       <div class="tmodal">
        <div>
          <h6 style="color:black; position: absolute; bottom:30px; font-size: 14px;" class="p-5 text-justify text-left">
          <small>ALREADY REGISTERED ?
          <br><br>
	        Lorem Ipsum is simply ing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet,
	        <br><br>
	        <a href="#" id="yesModalTour" style="color:black;"><span class="align-middle" data-toggle="modal" data-target="#yesmodalfortour">YES</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
	        <a href="#" id="noModalTour" style="color:black;"><span class="align-middle" data-toggle="modal" data-target="#nomodalfortour" style="padding-left: 40px;">NO</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
          </small></h6>
        </div>
       </div>
      </section>
    </div>
   </div>
  </div>
</div>

<!-- End book tour Modal-->

<!-- Book a tour yes Modal -->

<div id="yesmodalfortour" class="modal fade bs-example-modal-xl" role="dialog ">
  <div class="modal-dialog modal-xl" style="height:600px;">
  <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body p-0 m-0">
         <section class="container">
            <div class="left-half pr-0">
                <div>
                <h6 style="color:white; font-modal-childsize: 20px; padding-top: 20%" class="px-5 m-5 text-justify">THURSDAY<br>14 FEBRUARY
                <br><br>
                <small style="color:white; font-size: 14px;">
                <i class="fa fa-map-marker fa-lg pull-left pt-1 mt-2"></i>
                <div class="pull-left" style="width: 80%;">
                <div class="select-wrapper"   style="width: 100%;"> 
                  <select> 
                        <option value="option-1">CRYSTAL TOWN</option> 
                        <option value="option-2">MABANEE 1 </option> 
                  </select> 
                </div>
                </div></small>
            

                </h6>
                <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:35%; font-size: 14px; border-bottom:1px solid #fff" class="mx-5 text-justify">BOOK A TOUR
                </h6>
               <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:15%; font-size: 14px;" class="p-5 text-justify">
                <small>Lorem Ipsum is simply ing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet,</small>
               </h6>
               <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:-50px; font-size: 12px;" class="p-5 text-justify"><small><b>Reyada</b> | Collaborative workplace
               </small></h6>
                </div>
            </div>
            <div class="right-half"> 
            <button type="button" class="close p-4" data-dismiss="modal">&#10006</button> 
           
              <form class="w-100" style="padding: 5em 2em 2em 2em;"> 
                
                <div class="hello-week04" id="tourCalforReg"> 
                 <script>
            // const prev = document.querySelector('.demo-prev');
            // const next = document.querySelector('.demo-next');

              const myCalendar04 = new HelloWeek({
                  selector: '.hello-week04',
                  lang: 'en',
                  langFolder: './dist/langs/',
                  format: 'dd/mm/yyyy',
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
                  onLoad: () => { /** callback function */ },
                  onChange: () => { /** callback function */ },
                  onSelect: () => { /** callback function */ },
                  onClear: () => { /** callback function */ }
            });

//     document.getElementById("booktour").addEventListener('click', function () {
//     myCalendar.init();
// })
</script>
                </div> 
                <div  style="padding-left: 40px; padding-right: 30px; padding-top: 10px;" id="tourFormforReg">
        <div class="row text-left">
            <div class="col-md-6">
              <div class="group">
                  <input type="text"><span class="highlight"></span><span class="bar"></span>
                  <label> Full Name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="group">
                  <input type="text"><span class="highlight"></span><span class="bar"></span>
                  <label>Meeting Room</label>
               </div>
            </div>
            <div class="col-md-6">
              <div class="group">
                  <input type="email"><span class="highlight"></span><span class="bar"></span>
                  <label>Email</label>
               </div>
            </div>
            <div class="col-md-3">
              <div class="group">
                  <input type="text"><span class="highlight"></span><span class="bar"></span>
                  <label>Start Time</label>
               </div>
            </div>
            <div class="col-md-3">
              <div class="group">
                  <input type="text"><span class="highlight"></span><span class="bar"></span>
                  <label>End Time</label>
               </div>
            </div>
            <div class="col-md-12">
              <div class="group" style="text-align: right;">
	              <a href="#" style="color:black;"><span class="align-middle" data-toggle="modal" data-target="#thankyouforbooktourRegmodal">Submit</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>                  
               </div>
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

<!-- <script>
  var d = new Date();
  minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes();
  hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours();
  document.getElementById('time4').innerHTML=hours+':'+minutes;
  document.getElementById('year4').innerHTML= d.getFullYear()
</script> -->
<!-- End book a tour yes modal -->

<!-- Thank you for book tour reg Modal-->
<div id="thankyouforbooktourRegmodal" class="modal fade bs-example-modal-xs" role="dialog ">
  <div class="modal-dialog modal-xs modal-dialog-center" style="height:350px;" >
 <!-- Modal content-->
   <div class="modal-content" style="padding-top:0%; vertical-align: middle;">
     <div class="modal-body p-0 m-0">
      <section class="container">
       <div class="tmodal">
    <button type="button" class="close p-4" data-dismiss="modal">&#10006</button>
        <div>
        <form style="width:80%; padding-top: 90px;">
        <h6 style="color:black;" class="text-center">THANK YOU FOR YOUR BOOKING</h6>
        <h6 style="color:black;" class="text-center"><b>+965 2297 0270</b></h6>  
        </form>      
        </div>
       </div>
      </section>
    </div>
   </div>
  </div>
</div>

<!-- End Thank you for book tour reg Modal-->

<!--click on No tour Modal-->
<div id="nomodalfortour" class="modal fade bs-example-modal-xs" role="dialog ">
  <div class="modal-dialog modal-xs modal-dialog-center" style="height:350px;" >
 <!-- Modal content-->
   <div class="modal-content" style="padding-top:0%; vertical-align: middle;">
     <div class="modal-body p-0 m-0">
      <section class="container">
       <div class="tmodal">
    <button type="button" class="close p-4" data-dismiss="modal">&#10006</button>
        <div>
        <form style="width:80%; padding-top: 12%;">
        <h6 style="color:black;" class="text-left">BOOK A TOUR</h6>
        <div class="row text-left">
            <div class="col-md-6">
              <div class="group">
                  <input id="t_name" type="text"><span class="highlight"></span><span class="bar"></span>
                  <label> Full Name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="group">
                  <input id="t_address" type="text"><span class="highlight"></span><span class="bar"></span>
                  <label>Full Address</label>
               </div>
            </div>
            <div class="col-md-6">
              <div class="group">
                  <input id="t_email" type="email"><span class="highlight"></span><span class="bar"></span>
                  <label>Email</label>
               </div>
            </div>
            <div class="col-md-6">
              <div class="group">
                  <input id="t_area" type="text"><span class="highlight"></span><span class="bar"></span>
                  <label>Area</label>
               </div>
            </div>
            <div class="col-md-6">
              <div class="group">
                  <input id="t_mobile" type="text"><span class="highlight"></span><span class="bar"></span>
                  <label>Phone</label>
               </div>
            </div>
            <div class="col-md-6">
              <div class="group" style="text-align: right; padding-top: 5%;">
	              <a href="#" id="pickDateTour" style="color:black;"><span class="align-middle">Pick date and time</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>                  
               </div>
            </div>
            <div class="col-md-12">
                <div class="group">
                    <span id="t_message" class="text-danger"></span>
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

<!-- End no for tour Modal-->

<!-- Pick date Modal for tour -->

<div id="pickdatemodalfortour" class="modal fade bs-example-modal-xl" role="dialog ">
<div class="modal-dialog modal-xl" style="height:600px;">
        <div class="modal-content">
            <div class="modal-body p-0 m-0">
                <section class="container">
                    <div class="left-half pr-0">
                        <div>
                            <h6 style="color:white; font-modal-childsize: 20px; padding-top: 20%"class="px-5 m-5 text-justify">
                            <span id="tourdate"><?php echo date("j F Y") ?></span>
                                <br><br>
                                <small style="color:white; font-size: 14px;">
                                    <i class="fa fa-map-marker fa-lg pull-left pt-1 mt-2"></i>
                                    <div class="pull-left" style="width: 90%;">
                                        <div class="select-wrapper" style="width: 100%;">
                                            <select class="location">
                                            </select>
                                        </div>
                                    </div>
                                </small>
                            </h6>
                            <h6 style="color:white; position: absolute; top: 235px; left:100px; right:30px; font-size: 14px;"
                                class="text-justify bg-black">
                                <div class="col-md-12 col-sm-12 col-xs-12 row" id="resources">
                                </div>
                                <br>
                                <div class="col-md-12 col-sm-12 col-xs-12 row" id="bookings" style="overflow-y:auto;max-height: 200px">
                                </div>
                                <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:35%; font-size: 14px; border-bottom:1px solid #fff" class="mx-5 text-justify">BOOK A TOUR</h6>
                                <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:15%; font-size: 14px;" class="p-5 text-justify">
                                  <small>Lorem Ipsum is simply ing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet,</small>
                                </h6>
                                <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:-50px; font-size: 12px;"
                                    class="p-5 text-justify"><small><b>Reyada</b> | Collaborative workplace
                                    </small>
                                </h6>
                        </div>
                    </div>
                    <div class="right-half">
                        <button type="button" class="close p-4" data-dismiss="modal">&#10006</button>

                        <form class="w-100" style="padding: 5em 2em 2em 2em;">
                            <div class="hello-week05">
                                <script>
                                // const prev = document.querySelector('.demo-prev');
                                // const next = document.querySelector('.demo-next');

                                const myCalendar05 = new HelloWeek({
                                    selector: '.hello-week05',
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
                                        var selected_date = myCalendar05.getDays();
                                        var test_date = selected_date[0];
                                        var DateCreated = new Date(Date.parse(test_date)).format("yyyy-mm-dd");
                                        $('#tourdate').empty();
                                        $('#tourdate').append(test_date);
                                        $('#tour_selected_date').val(DateCreated);
                                    },
                                    onClear: () => {
                                        /** callback function */
                                    }
                                });
                                </script>
                            </div>
                            <div style="padding-left: 40px; padding-right: 30px; padding-top: 10px;" id="tourFormReg">
                                <div class="row text-left">
                                    <div class="col-md-6">
                                    <input name="selected_date" id="tour_selected_date"  type="hidden">
                                    <input name="address"  id="tour_address" type="hidden">
                                    <input name="mobile" id="tour_mobile" type="hidden">
                                    <input name="state" id="tour_state" type="hidden">
                                        <div class="group">
                                            <input name="name" id="tour_fname" type="text" placeholder="Full Name"><span class="highlight"></span><span class="bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="group">
                                            <select  class="select-fontsize location" name="location" id="tour_location" style="padding:5px !important;color:black !important;">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="group">
                                            <input name="email" id="tour_email" type="email" placeholder="Email"><span class="highlight"></span><span class="bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="group">
                                            <select class="select-fontsize" name="fromtime" id="tourtime" style="padding:5px !important;color:black !important;">
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
                                            <span id="tour_validation_message"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="group" style="text-align: right;">
                                            <a href="#" id="toursubmit" style="color:black;"><span class="align-middle">Submit</span>
                                                <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i>
                                            </a>
                                        </div>
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

<!-- End pick date modal for tour -->

<!-- Thank you for book tour non reg Modal-->
<div id="thankyouforbooktourNonRegmodal" class="modal fade bs-example-modal-xs" role="dialog ">
  <div class="modal-dialog modal-xs modal-dialog-center" style="height:350px;" >
 <!-- Modal content-->
   <div class="modal-content" style="padding-top:0%; vertical-align: middle;">
     <div class="modal-body p-0 m-0">
      <section class="container">
       <div class="tmodal">
    <button type="button" class="close p-4" data-dismiss="modal">&#10006</button>
        <div>
        <form style="width:80%; padding-top: 90px;">
        <h6 style="color:black;" class="text-center">THANK YOU FOR YOUR BOOKING</h6>
        <h6 style="color:black;" class="text-center" id="confirmtour"><b>+965 2297 0270</b></h6>  
        </form>      
        </div>
       </div>
      </section>
    </div>
   </div>
  </div>
</div>

<!-- End Thank you for book tour non reg Modal-->
<script>
      
         $(document).ready(function(){
          $("#tourFormforReg").hide(); 
          $("#tourCalforReg").click(function () {
          $("#tourFormforReg").show(); 
          });
        });

         $(document).ready(function(){
          $("#tourFormNonReg").hide(); 
          $("#tourCalNonReg").click(function () {
          $("#tourFormNonReg").show(); 
          });
        });

</script>

