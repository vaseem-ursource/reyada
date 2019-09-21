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
          You can make bookings much quicker if you log in with the account details you were sent when you registered on the site or made your last booking.
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



<div class="modal fade" id="yesmodalfortour1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="row">
            <div class="col-md-4 bg-black">
                <button type="button" class="close mob text-white" style="opacity:1;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="col-md-8 bg-white">
                 <button type="button" class="close lap" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
               
            </div>
        </div>
      </div>
     
    </div>
  </div>
</div>






<!-- Book a tour yes Modal -->

<div id="yesmodalfortour" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg"  role="document">
  <!-- Modal content-->
    <div class="modal-content" style="overflow-y:auto">
      <div class="modal-body p-0">
        <div class="row">
          <div class="col-md-4 bg-black">
                <button type="button" class="close mob text-white" style="opacity:1;" data-dismiss="modal" aria-label="Close">
                <button type="button" class="close p-4" style="outline:none;" data-dismiss="modal">&#10006</button>
                </button>
                <h4 style="color:white; font-modal-childsize: 20px; padding-top: 8%"class="px-5 m-5 text-center">THURSDAY<br>14 FEBRUARY
                </h4>
                <h6 style="color:white; font-modal-childsize: 20px; padding-top: 5%"class="px-2 m-4 mb-5 text-justify">
                <small style="color:white; font-size: 14px;">
                <i class="fa fa-map-marker fa-lg pull-left pt-1 mt-2"></i>
                <div class="pull-left" style="width: 80%;">
                <div class="select-wrapper"   style="width: 100%;"> 
                  <select> 
                        <option value="option-1">CRYSTAL TOWN</option> 
                        <option value="option-2">MABANEE 1 </option> 
                  </select> 
                </div>
                </div>
                </small>
                </h6>
                <h6 style="color:white; position: absolute;  bottom:35%; font-size: 14px; border-bottom:1px solid #fff" class="mx-5 text-justify">BOOK A TOUR
                </h6>
               
               <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:-50px; font-size: 12px;" class="p-5 text-justify"><small><b>Reyada</b> | Collaborative workplace
               </small></h6>
            </div>

            <div class="col-md-8 bg-white">
                <button type="button" class="close lap" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
           
              <form class="w-100" style="padding: 5em 2em 2em 2em;"> 
                
                <div class="hello-week04" style="text-align: -webkit-center;" id="tourCalforReg"> 
                 <script>
            

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
                <div  style="padding-left: 10px; padding-right: 10px; padding-top: 10px;" id="tourFormforReg">
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
	              <a href="#" style="color:black;outline:none;"><span class="align-middle" data-toggle="modal" data-target="#thankyouforbooktourRegmodal">Submit</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>                  
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
<!-- End book a tour yes modal -->

<!-- Thank you for book tour reg Modal-->
<div id="thankyouforbooktourRegmodal" class="modal fade bs-example-modal-xs" role="dialog ">
  <div class="modal-dialog modal-xs modal-dialog-center" style="height:350px;" >
 <!-- Modal content-->
   <div class="modal-content" style="padding-top:0%; vertical-align: middle;">
     <div class="modal-body p-0 m-0">
      <section class="container">
       <div class="tmodal">
    <button type="button" class="close p-4" style="outline:none;" data-dismiss="modal">&#10006</button>
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
  <div class="modal-dialog modal-xs modal-dialog-center" style="height:400px;" >
 <!-- Modal content-->
   <div class="modal-content" style="padding-top:0%; vertical-align: middle;">
     <div class="modal-body p-0 m-0">
      <section class="container">
       <div class="tmodal">
    <button type="button" class="close p-4" style="outline:none;" data-dismiss="modal">&#10006</button>
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

<div id="pickdatemodalfortour" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
<div class="modal-dialog modal-lg"  role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
              <div class="row">
                  <div class="col-md-4 bg-black">
                      <button type="button" class="close mob text-white" style="opacity:1;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="px-5 m-5 text-center">
                        <span id="tourdate"><?php echo date("j F Y") ?></span>
                      </h4>
                      <h6 class="px-2 m-4 mb-5 text-justify">
                          <small style="color:white; font-size: 14px;" class="">
                              <i class="fa fa-map-marker fa-lg pt-1 mt-2"></i>
                              <div class="pull-right" style="width: 90%;">
                                  <div class="select-wrapper" style="width: 100%;">
                                      <select class="location" id="tour_location">
                                        
                                      </select>
                                  </div>
                              </div>
                          </small>
                      </h6><br><br><br><br>

                      <h6 style="color:white; font-size: 14px;" class="text-justify bg-black">
                          <h6 style="color:white;font-size: 14px; border-bottom:1px solid #fff" class="mx-5 text-justify">BOOK A TOUR</h6>
                          <!-- <h6 style="color:white;font-size: 14px;position:relative;top:-50px;" class="p-5 text-justify">
                            <small>Lorem Ipsum is simply ing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet,</small>
                          </h6> -->
                          <h6 style="color:white;position:relative;top:200px;" class="p-5"><small><b>Reyada</b> | Collaborative workplace</small>
                      </h6>
                    </div>
                    <div class="col-md-8 bg-white">
                        <button type="button" class="close lap" data-dismiss="modal" aria-label="Close">
                        <button type="button" class="close p-4" style="outline:none;" data-dismiss="modal">&#10006</button>
                        </button>

                        <form class="w-100" style="padding: 3em 2em 2em 2em;">
                            <div class="hello-week05" style="text-align: -webkit-center;">
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
                            </div><br><br>
                            <div style="padding-left: 10px; padding-right: 10px; padding-top: 10px;" id="tourFormReg">
                                <div class="row text-left">
                                    <input name="selected_date" id="tour_selected_date"  type="hidden">
                                    <div class="col-md-3">
                                      <div class="group">
                                          <input name="name" id="tour_fname" type="text" placeholder="Full Name" ><span class="highlight"></span><span class="bar"></span>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="group">
                                            <input name="email" id="tour_email" type="email" placeholder="Email" ><span class="highlight"></span><span class="bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="group">
                                            <input name="mobile"  id="tour_mobile" type="text" placeholder="Mobile" ><span class="highlight"></span><span class="bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="group time">
                                            <select class="select-fontsize" name="fromtime" id="tourtime" style="padding:5px !important;color:black !important;">
                                                <option value="0">Select Start Time</option>
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
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="group text-danger">
                                            <span id="tour_validation_message"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="group" style="text-align: right;outline:none;">
                                            <a href="#" id="toursubmit" style="color:black;"><span class="align-middle">Submit</span>
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

<!-- End pick date modal for tour -->

<!-- Thank you for book tour non reg Modal-->
<div id="thankyouforbooktourNonRegmodal" class="modal fade bs-example-modal-xs" role="dialog ">
  <div class="modal-dialog modal-xs modal-dialog-center" style="height:350px;" >
 <!-- Modal content-->
   <div class="modal-content" style="padding-top:0%; vertical-align: middle;">
     <div class="modal-body p-0 m-0">
      <section class="container">
       <div class="tmodal">
    <button type="button" class="close p-4" style="outline:none;" data-dismiss="modal">&#10006</button>
        <div>
        <form style="width:80%; padding-top: 90px;">
        <h6 style="color:black;" class="text-center">THANK YOU FOR YOUR BOOKING</h6>
        <h6 style="color:black;" class="text-center" id="confirmtour"></h6>  
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

