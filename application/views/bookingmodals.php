<!-- Booking Modal1 -->

<div id="bookingmodal" class="modal modal-child fade bs-example-modal-xl" role="dialog ">
    <div class="modal-dialog modal-xl" style="height:600px;">
        <div class="modal-content">
            <div class="modal-body p-0 m-0">
                <section class="container">
                    <div class="left-half pr-0">
                        <div>
                            <h6 style="color:white; font-modal-childsize: 20px; padding-top: 20%"class="px-5 m-5 text-justify">
                            <span id="new-date"><?php echo date("j F Y") ?></span>
                                <br><br>
                                <small style="color:white; font-size: 14px;">
                                    <i class="fa fa-map-marker fa-lg pull-left pt-1 mt-2"></i>
                                    <div class="pull-left" style="width: 90%;">
                                        <div class="select-wrapper" style="width: 100%;">
                                            <select class="location-drp-dwn">
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
                                <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:5px; font-size: 13px;width:100%;"
                                    class="p-5 text-justify booking-option">
                                    <div class="col-md-12 col-sm-12 col-xs-12 row">
                                        <div class="col-md-6 row p-0 m-0">
                                            <a href="#" style="color:white;"><span class="align-middle"
                                                    data-toggle="modal" data-target="#yesnomodalfortour">Book a
                                                    tour</span></a>
                                        </div>
                                        <div class="col-md-6  p-0 m-0 text-right">
                                            <a href="#" style="color:white;"><span class="align-middle"
                                                    data-toggle="modal" data-target="#yesnomodal">Book a meeting
                                                    room</span> </a>
                                        </div>
                                    </div>
                                    </small>
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
                            <div class="hello-week01">
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
                            </div>
                            <div style="padding-left: 40px; padding-right: 30px; padding-top: 10px;" id="meetFormReg">
                                <div class="row text-left">
                                    <div class="col-md-6">
                                    <input name="selected_date" id="selected_date"  type="hidden">
                                    <input name="address"  id="address" type="hidden">
                                    <input name="mobile" id="mobile" type="hidden">
                                    <input name="state" id="state" type="hidden">
                                        <div class="group">
                                            <input name="name" id="fname" type="text" placeholder="Full Name"><span class="highlight"></span><span class="bar"></span>
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
                                            <input name="email" id="femail" type="email" placeholder="Email"><span class="highlight"></span><span class="bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="group">
                                            <select class="select-fontsize" name="fromtime" id="fromtime" style="padding:5px !important;color:black !important;">
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
                                    <div class="col-md-3">
                                        <div class="group">
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
                                            <span id="validation_message"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="group" style="text-align: right;">
                                            <a href="#" id="meetSubmit" style="color:black;"><span class="align-middle">Submit</span>
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
<!-- End Booking Modal -->

<!--book meeting room Modal-->
<div id="yesnomodal" class="modal fade bs-example-modal-xs" role="dialog" style="display:none;">
    <div class="modal-dialog modal-xs modal-dialog-center" style="height:350px;">
        <!-- Modal content-->
        <div class="modal-content pt-5 mt-5" style="padding-top:10%; vertical-align: middle;">
            <div class="modal-body p-0 m-0">
                <section class="container">
                    <div class="tmodal">
                        <div>
                            <h6 style="color:black; position: absolute; bottom:30px; font-size: 14px;"
                                class="p-5 text-justify text-left">
                                <small>ALREADY REGISTERED ?
                                    <br><br>
                                    Lorem Ipsum is simply ing industry. Lorem Ipsum has been the industry's standard
                                    dummy text ever since the 1500s.Lorem ipsum dolor sit amet,
                                    <br><br>
                                    <a href="#" id="yesModal" style="color:black;"><span class="align-middle"
                                            data-toggle="modal" data-target="#yesmodal">YES</span> <i
                                            class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
                                    <a href="#" id="noModal" style="color:black;"><span class="align-middle"
                                            style="padding-left: 40px;">NO</span> <i
                                            class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
                                </small></h6>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<!-- End book meeting room Modal-->

<!--click on No Modal-->


<!-- End No Modal-->

<!-- Pick date Modal -->

<div id="pickdatemodal" class="modal fade bs-example-modal-xl" role="dialog ">
    <div class="modal-dialog modal-xl" style="height:600px;">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body p-0 m-0">
                <section class="container">
                    <div class="left-half pr-0">
                        <div>
                            <h6 style="color:white; font-modal-childsize: 20px; padding-top: 20%"
                                class="px-5 m-5 text-justify">THURSDAY<br>14 FEBRUARY
                                <br><br>
                                <small style="color:white; font-size: 14px;">
                                    <i class="fa fa-map-marker fa-lg pull-left pt-1 mt-2"></i>
                                    <div class="pull-left" style="width: 80%;">
                                        <div class="select-wrapper" style="width: 100%;">
                                            <select>
                                                <option value="option-1">CRYSTAL TOWN</option>
                                                <option value="option-2">MABANEE 1 </option>
                                                <option value="option-3">MABANEE 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </small>
                            </h6>
                            <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:35%; font-size: 14px; border-bottom:1px solid #fff"
                                class="mx-5 text-justify">BOOK A MEETING ROOM
                            </h6>
                            <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:15%; font-size: 14px;"
                                class="p-5 text-justify">
                                <small>Lorem Ipsum is simply ing industry. Lorem Ipsum has been the industry's standard
                                    dummy text ever since the 1500s.Lorem ipsum dolor sit amet,</small>
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
                            <div class="hello-week02" id="meetCalNonReg">
                                <script>
                                // const prev = document.querySelector('.demo-prev');
                                // const next = document.querySelector('.demo-next');

                                const myCalendar02 = new HelloWeek({
                                    selector: '.hello-week02',
                                    lang: 'en',
                                    langFolder: '<?= base_url()?>dist/langs/',
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
                                    onLoad: () => {
                                        /** callback function */
                                    },
                                    onChange: () => {
                                        /** callback function */
                                    },
                                    onSelect: () => {
                                        /** callback function */
                                    },
                                    onClear: () => {
                                        /** callback function */
                                    }
                                });
                                </script>
                            </div>
                            <div style="padding-left: 40px; padding-right: 30px; padding-top: 10px;"
                                id="meetFormNonReg">
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
                                            <a href="#" id="meetSubmitNonReg" style="color:black;"><span
                                                    class="align-middle" data-toggle="modal"
                                                    data-target="#thankyouforbookingmodal">Submit</span> <i
                                                    class="fa fa-angle-right fa-2x pl-1 align-middle"></i>
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

<!-- End pick date modal -->

<!-- Thank you for booking Modal-->
<div id="thankyouforbookingmodal" class="modal fade bs-example-modal-xs" role="dialog ">
    <div class="modal-dialog modal-xs modal-dialog-center" style="height:350px;">
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

<!-- End Thank you for booking Modal-->

<!-- Yes Modal1 -->

<div id="yesmodal" class="modal modal-child fade bs-example-modal-xl" role="dialog ">
    <div class="modal-dialog modal-xl" style="height:600px;">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body p-0 m-0">
                <section class="container">
                    <div class="left-half pr-0">
                        <div>
                            <h6 style="color:white; font-modal-childsize: 20px; padding-top: 20%"
                                class="px-5 m-5 text-justify">THURSDAY<br>14 FEBRUARY
                                <br><br>
                                <small style="color:white; font-size: 14px;">
                                    <i class="fa fa-map-marker fa-lg pull-left pt-1 mt-2"></i>
                                    <div class="pull-left" style="width: 80%;">
                                        <div class="select-wrapper" style="width: 100%;">
                                            <select>
                                                <option value="option-1">CRYSTAL TOWN</option>
                                                <option value="option-2">MABANEE 1 </option>
                                                <option value="option-3">MABANEE 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </small>
                            </h6>
                            <h6 style="color:white; position: absolute; top: 235px; left:100px; right:30px; font-size: 14px;"
                                class="text-justify bg-black">
                                <div class="col-md-12 col-sm-12 col-xs-12 row">
                                    <div class="col-md-6 row p-0 m-0">
                                        <a href="#" onlick="javascript(0)" style="color:white;" id="the">THE PYRAMID</a>
                                    </div>
                                    <div class="col-md-6  p-0 m-0 text-right">
                                        <a href="#" onlick="javascript(0)" style="color:white;"
                                            id="boardroom">BOARDROOM</a>
                                    </div>
                                    <div class="col-md-12  p-0 m-0">
                                        <small><br>
                                            Lorem Ipsum is simply ing industry. Lorem Ipsum has been the industry's
                                        </small>
                                    </div>
                                </div>
                                <!-- The pyramid -->
                                <div class="col-md-12 col-sm-12 col-xs-12 row" id="theDiv" style="overflow-y:auto;height: 200px;">
                                    <div class="col-md-6 p-0 m-0">
                                        <span style="color: #fff; font-size: 14px;"><br>09.00<br></span>
                                        <span style="color: #fff; font-size: 11px;">09.30 am<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>06.30<br></span>
                                        <span style="color: #fff; font-size: 11px;">09.30 pm<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>06.30<br></span>
                                        <span style="color: #fff; font-size: 11px;">09.30 pm<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>09.00<br></span>
                                        <span style="color: #fff; font-size: 11px;">09.30 am<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>09.00<br></span>
                                        <span style="color: #fff; font-size: 11px;">09.30 am<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>09.00<br></span>
                                        <span style="color: #fff; font-size: 11px;">09.30 am<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>09.00<br></span>
                                        <span style="color: #fff; font-size: 11px;">09.30 am<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>09.00<br></span>
                                        <span style="color: #fff; font-size: 11px;">09.30 am<br></span>
                                    </div>
                                    <div class="col-md-6 p-0 m-0">
                                        <span style="color: #fff; font-size: 14px;"><br>Company name<br></span>
                                        <span style="color: #fff; font-size: 11px;">Sunday 3rd march<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>Company name<br></span>
                                        <span style="color: #fff; font-size: 11px;">Sunday 3rd march<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>Company name<br></span>
                                        <span style="color: #fff; font-size: 11px;">Sunday 3rd march<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>Company name<br></span>
                                        <span style="color: #fff; font-size: 11px;">Sunday 3rd march<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>Company name<br></span>
                                        <span style="color: #fff; font-size: 11px;">Sunday 3rd march<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>Company name<br></span>
                                        <span style="color: #fff; font-size: 11px;">Sunday 3rd march<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>Company name<br></span>
                                        <span style="color: #fff; font-size: 11px;">Sunday 3rd march<br></span>
                                    </div>
                                </div>
                                <!-- End the pyramid -->

                                <!-- Boardroom -->
                                <div class="col-md-12 col-sm-12 col-xs-12 row" id="boardroomDiv" style="overflow-y:auto;height: 200px;">
                                    <div class="col-md-6 p-0 m-0">
                                        <span style="color: #fff; font-size: 14px;"><br>07.00<br></span>
                                        <span style="color: #fff; font-size: 11px;">09.30 am<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>05.30<br></span>
                                        <span style="color: #fff; font-size: 11px;">09.30 pm<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>06.30<br></span>
                                        <span style="color: #fff; font-size: 11px;">09.30 pm<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>09.00<br></span>
                                        <span style="color: #fff; font-size: 11px;">09.30 am<br></span>
                                    </div>
                                    <div class="col-md-6 p-0 m-0">
                                        <span style="color: #fff; font-size: 14px;"><br>Company<br></span>
                                        <span style="color: #fff; font-size: 11px;">Sunday 3rd january<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>Company name<br></span>
                                        <span style="color: #fff; font-size: 11px;">Sunday 3rd march<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>Company name<br></span>
                                        <span style="color: #fff; font-size: 11px;">Sunday 3rd march<br></span>
                                        <span style="color: #fff; font-size: 14px;"><br>Company name<br></span>
                                        <span style="color: #fff; font-size: 11px;">Sunday 3rd march<br></span>
                                    </div>
                                </div>
                                <!-- End boardroom -->
                                <h6 style="color:white; position: absolute; left:100px; right:30px; bottom:40px;"><i
                                        class="fa fa-angle-down fa-2x"></i></h6>

                                </small>
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
                            <div class="hello-week03" id="meetCal">
                                <script>
                                // const prev = document.querySelector('.demo-prev');
                                // const next = document.querySelector('.demo-next');
                                const myCalendar03 = new HelloWeek({
                                    selector: '.hello-week03',
                                    lang: 'en',
                                    langFolder: '<?= base_url()?>dist/langs/',
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
                                    onLoad: () => {
                                        /** callback function */
                                    },
                                    onChange: () => {
                                        /** callback function */
                                    },
                                    onSelect: () => {
                                        /** callback function */
                                    },
                                    onClear: () => {
                                        /** callback function */
                                    }
                                });
                                </script>
                            </div>

                            <div style="padding-left: 40px; padding-right: 30px; padding-top: 10px;" id="meetFormReg">
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
                                        <a href="#" id="meetSubmit" style="color:black;"><span class="align-middle" >Submit</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>                  
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

<div id="thankyouforRegmodal" class="modal fade bs-example-modal-xs" role="dialog ">
    <div class="modal-dialog modal-xs modal-dialog-center" style="height:350px;">
        <!-- Modal content-->
        <div class="modal-content" style="padding-top:0%; vertical-align: middle;">
            <div class="modal-body p-0 m-0">
                <section class="container">
                    <div class="tmodal">
                        <button type="button" class="close p-4" data-dismiss="modal">&#10006</button>
                        <div>
                            <form style="width:80%; padding-top: 90px;">
                                <h6 style="color:black;" class="text-center">THANK YOU FOR YOUR BOOKING</h6>
                                <h6 style="color:black;" class="text-center" id="confirmBooking"><b></b></h6>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<!-- End Thank you for booking Modal-->
<div id="nomodal" class="modal fade bs-example-modal-xs" role="dialog ">
    <div class="modal-dialog modal-xs modal-dialog-center" style="height:350px;">
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
    var username = 'aeraf@ursource.org';
    var password = 'view1Sonic!';
    var size = 1000;
    var cur_date = '<?php echo date("Y-m-d") ?>';
    var base_url = '<?= base_url(); ?>';

    get_locations();

    $(document).on("click", "#bookingbutton", function() {
        $("#bookingmodal").modal("show");
        $(".booking-option").show();
        $("#meetFormReg").hide();
    });

    $(document).on("click", "#noModal", function() {
        $("#bookingmodal").modal("hide");
        $("#yesnomodal").modal("hide");
        $("#nomodal").modal("show");
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

    $(".location-drp-dwn").change(function() {
        $('.whole_div').show();
        var location_id = $(this).val();
        get_resources(location_id);
    });

    $(document).on('click','.resource',function() {
        $('.whole_div').show();
        var resource_id = $(this).attr("data-id");
        get_bookings(resource_id);
    });

    $("#pickDate").click(function(e) {
        $('#confirmBooking').empty();
        if (mr_form_validation())
        {
            $('#fname').val($("#fullname").val());
            $('#femail').val($("#email").val());
            $('#address').val($("#fulladdress").val());
            $('#state').val($("#area").val());
            $('#mobile').val($("#phone").val());
            $('#confirmBooking').append('+965 ' + $("#phone").val());
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
    
    function mr_form_validation() {
        $('#message').empty();
        var name = $("#fullname").val();
        var Address = $("#fulladdress").val();
        var area = $("#area").val();
        var phone = $("#phone").val();
        var email = $("#email").val();
        var emailReg = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        var digit_pattern = new RegExp('^[2-9][0-9]*$');
        if (name === '' || email === '' || Address === '' || area === '' || phone === '') {
            $('#message').append('Please fill out all the fields');
            $('#message').fadeIn().delay(5000).fadeOut();

        return false;
        } else if (!(email).match(emailReg)) {
            $('#message').append('Invalid Email...!!!!!!');
            $('#message').fadeIn().delay(5000).fadeOut();
        return false;
        } else if (!(phone).match(digit_pattern) || phone.length != 8) {
            $('#message').append('Must be Number(8 digits only)');
            $('#message').fadeIn().delay(5000).fadeOut();
            return false;
        }else {
            return true;
        }
    }

    $("#pickDateTour").click(function(e) {
        if (tour_form_validation())
        {
            $('#tour_fname').val($("#t_name").val());
            $('#tour_email').val($("#t_email").val());
            $('#tour_address').val($("#t_address").val());
            $('#tour_state').val($("#t_area").val());
            $('#tour_mobile').val($("#t_mobile").val());
            $('#confirmtour').append('+965 ' + $("#phone").val());
            $("#pickdatemodalfortour").modal("show");
            $("#tourFormReg").show();
        }
        else{
            e.preventDefault();
            e.stopImmediatePropagation();
            return false;  
        }
        
    })

    function tour_form_validation() {
        $('#t_message').empty();
        var name = $("#t_name").val();
        var Address = $("#t_address").val();
        var area = $("#t_area").val();
        var phone = $("#t_mobile").val();
        var email = $("#t_email").val();
        var emailReg = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        var digit_pattern = new RegExp('^[2-9][0-9]*$');
        if (name === '' || email === '' || Address === '' || area === '' || phone === '') {
            $('#t_message').append('Please fill out all the fields');
            $('#t_message').fadeIn().delay(5000).fadeOut();
        return false;
        } else if (!(email).match(emailReg)) {
            $('#t_message').append('Invalid Email...!!!!!!');
            $('#t_message').fadeIn().delay(5000).fadeOut();
        return false;
        } else if (!(phone).match(digit_pattern) || phone.length != 8) {
            $('#t_message').append('Must be Number(8 digits only)');
            $('#t_message').fadeIn().delay(5000).fadeOut();
            return false;
        }else {
            return true;
        }
    }
    $('#toursubmit').click(function(e){
        // $('.whole_div').show();
        if(tour_validation()){
            if($('#tour_selected_date').val() == ""){
                var date = cur_date; 
            }
            else{
                var date = $('#tour_selected_date').val(); 
            }
            var time1 = ConvertTimeformat($("#tourtime").val());
            var fromTime = date +'T'+  time1  + 'Z'; 
        } 
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

        }
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: base_url + 'main/book_a_tour',
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
            })
    })

    $("#meetSubmit").click(function(e) {
        $('.whole_div').show();
        if (booking_validation())
        {
            if($('#selected_date').val() == ""){
                var date = cur_date; 
            }
            else{
                var date = $('#selected_date').val(); 
            }
            var time1 = ConvertTimeformat($("#fromtime").val());
            var time2 = ConvertTimeformat($("#totime").val());
            var fromTime = date +'T'+  time1  + 'Z'; 
            var toTime = date +'T'+  time2  + 'Z'; 
            post_array =
            {
                "FullName": $("#fname").val(),
                "Email": $("#femail").val(),
                "CountryId": '1113',
                "MobilePhone":$("#mobile").val(),
                "SimpleTimeZoneId": '2029',
                "CityName":$("#state").val(),
                "Address":$("#fulladdress").val(),
            }
            $.ajax({
                type: 'POST',
                url: 'https://spaces.nexudus.com/api/spaces/coworkers',
                beforeSend: function(xhr) {
                    xhr.setRequestHeader("Authorization", "Basic " + btoa(username + ":" + password));
                },
                data: post_array,
                dataType: 'json', 
                success: function(data){
                    post_array =
                    {
                        "CoworkerId": data.Value.Id,
                        "ResourceId": $("#select-resource").val(),
                        "FromTime":fromTime,
                        "ToTime": toTime,
                    }
                    create_booking(post_array);
                },
                error: function(xhr){

                }
            })
        }
        else{
            $('.whole_div').hide();
            e.preventDefault();
            e.stopImmediatePropagation();
            return false;  
        }
    })


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
        if (name === '' || email === '' || resource === '0' || fromtime === '0' || totime === '0') {
            $('#validation_message').append('All The Fields are Mandatory');
            $('#validation_message').fadeIn().delay(5000).fadeOut();

        return false;
        } else if (!(email).match(emailReg)) {
            $('#validation_message').append('Invalid Email...!!!!!!');
            $('#validation_message').fadeIn().delay(5000).fadeOut();

        return false;
        }
        else if (date < cur_date) {
            $('#validation_message').append('Booking cannot be done for the past date');
            $('#validation_message').fadeIn().delay(5000).fadeOut();

        return false;
        }else if (fromtime == totime) {
            $('#validation_message').append('Start and End time cannot be same');
            $('#validation_message').fadeIn().delay(5000).fadeOut();

        return false;
        }
        else if((ConvertTimeformat(fromtime) < cur_time || ConvertTimeformat(totime) < cur_time) && date == cur_date){
            $('#validation_message').append('Booking cannot be done for the past time');
            $('#validation_message').fadeIn().delay(5000).fadeOut();
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
        var email =  $("#tour_email").val();
        var location = $("#tour_location").val();
        var fromtime = $("#tourtime").val();
        var emailReg = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        var digit_pattern = new RegExp('^[2-9][0-9]*$');
        if (name === '' || email === '' || location === '0' || fromtime === '0' ) {
            $('#tour_validation_message').append('All The Fields are Mandatory');
            $('#tour_validation_message').fadeIn().delay(5000).fadeOut();

        return false;
        } else if (!(email).match(emailReg)) {
            $('#tour_validation_message').append('Invalid Email...!!!!!!');
            $('#tour_validation_message').fadeIn().delay(5000).fadeOut();

        return false;
        }
        else if (date < cur_date) {
            $('#tour_validation_message').append('Booking cannot be done for the past date');
            $('#tour_validation_message').fadeIn().delay(5000).fadeOut();

        return false;
        }else if (fromtime == totime) {
            $('#tour_validation_message').append('Start and End time cannot be same');
            $('#tour_validation_message').fadeIn().delay(5000).fadeOut();

        return false;
        }
        else if(ConvertTimeformat(fromtime) < cur_time && date == cur_date){
            $('#tour_validation_message').append('Booking cannot be done for the past time');
            $('#tour_validation_message').fadeIn().delay(5000).fadeOut();
        }
        else {
            return true;
        }
    }

    function addDays(date) {
        var result = date.substr(8);
        var day = '1';
        var sh = parseInt(result)+ parseInt(day);
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
    

// var indiaTime = new Date().toLocaleString("en-US", {timeZone: "Asia/Kuwait"});
// indiaTime = new Date(indiaTime);
// console.log('India time: '+indiaTime.toLocaleString())
function get_locations(){
    $.ajax({
        type: 'GET',
        url: 'https://spaces.nexudus.com/api/sys/businesses',
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Basic " + btoa(username + ":" + password));
        },
        dataType: 'json',
        success: function(locations) {
            var location = locations.Records;
            
            if (location.length != 0) {
                $.each(locations.Records, (key, location) => {
                    $(".location-drp-dwn").append("<option value ='" +location.Id + " '>" + location.Name + "</option>");
                    $(".location").append("<option value ='" +location.Id + " '>" + location.Name + "</option>");
                });
                get_resources(location[0].Id);
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
    $("#bookings").empty();
    $.ajax({
        type: 'GET',
        url: 'https://spaces.nexudus.com/api/spaces/resources?Resource_Business=' +
            location_id,
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
                    var resources = "<div class='col-md-6 row p-0 m-0'>" +
                        "<span  class='resource' style='color:white;font-size:12px;cursor:pointer' data-id ='" +resource.Id +"'>" + resource.Name + "</span>" +
                        // "<small>" + "<br>" + resource.ResourceTypeName +
                        // "</small>" +
                        "</div>";
                    $("#resources").append(resources);
                    $("#select-resource").append("<option value ='" +resource.Id + " '>" + resource.Name + "</option>");
                    
                })
                get_bookings(res_id);
            } else {
                $('.whole_div').hide();
                var resources = "<div class='col-md-6 row p-0 m-0'>" +
                                    "<a href='#' style='color:white;font-size:12px;' id='the'>" +
                                    'No Resources Available' + "</a>" +
                                "</div>";
                $("#resources").append(resources);
                $("#select-resource").append("<option value ='0'>" + 'Select Resource' + "</option>");
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
                    var bookings = 
                    "<div class='col-md-6 p-0 m-0'>"+ 
                        "<span style='color: #fff; font-size: 14px;'>"+"<br>"+ moment(booking.FromTime ).format('h:mm a')+"<br>"+"</span>"+
                        "<span style='color: #fff; font-size: 11px;'>"+moment(booking.ToTime ).format('h:mm a')+"<br>"+"</span>"+
                    "</div>"+
                    "<div class='col-md-6 p-0 m-0'>"+
                        "<span style='color: #fff; font-size: 12px;'>"+"<br>"+moment(booking.FromTime ).format('YYYY-MM-DD')+"<br>"+"</span>"+
                        "<span style='color: #fff; font-size: 11px;'>"+ booking.ResourceName +"<br>"+"</span>"+
                        "<span style='color: #fff; font-size: 10px;'>"+ booking.CoworkerFullName +"<br>"+"</span>"+
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
        url: 'https://spaces.nexudus.com/api/spaces/bookings',
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Basic " + btoa(username + ":" + password));
        },
        data: data,
        dataType: 'json', 
        success: function(data){
            if(data.Status == 200){
                $('.whole_div').hide();
                $("#bookingmodal").modal("hide");
                $('#thankyouforRegmodal').modal('show');
            }
            else{
                $('.whole_div').hide(); 
                toastr.error('some error occured while processing');
            }
        },
        error: function(data){
            $('.whole_div').hide(); 
            toastr.error('This resource is already booked for the selected time.please change the timings');
        }
    })
}
});
</script>