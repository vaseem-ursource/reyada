<!-- Booking Modal1 -->

<div id="bookingmodal" class="modal modal-child fade bs-example-modal-xl" role="dialog ">
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
                <i class="fa fa-map-marker fa-lg pull-left pt-1 mt-2"></i><div class="pull-left" style="width: 80%;">
                <div class="select-wrapper"   style="width: 100%;"> 
                  <select> 
                        <option value="option-1">CRYSTAL TOWN</option> 
                        <option value="option-2">MABANEE 1 </option> 
                  </select> 
                </div>
                </div></small>
                <!-- <br><br><br><br><br>
                MAKE A BOOKING
                <br><br>
                <small>Lorem Ipsum is simply ing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet,
                </small> -->

                </h6>
                <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:35%; font-size: 14px; border-bottom:1px solid #fff" class="mx-5 text-justify">MAKE A BOOKING
                <small>
                </h6>
               <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:15%; font-size: 14px;" class="p-5 text-justify">
               <small> Lorem Ipsum is simply ing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet,</small>
               </h6>
               <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:5%; font-size: 14px;" class="p-5 text-justify">
                <div class="col-md-12 col-sm-12 col-xs-12 row">
                <div class="col-md-6 row p-0 m-0">
                <a href="#" style="color:white;"><span class="align-middle" data-toggle="modal" data-target="#yesnomodalfortour">Book a tour</span></a>
               </div>
               <div class="col-md-6  p-0 m-0 text-right">
                <a href="#" style="color:white;"><span class="align-middle" data-toggle="modal" data-target="#yesnomodal">Book a meeting room</span> </a>
               </div>
               </div> 
               </small></h6>
               <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:-50px; font-size: 12px;" class="p-5 text-justify"><small><b>Reyada</b> | Collaborative workplace
               </small></h6>
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
  // var d = new Date();
  // minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes();
  //   hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours();
  // document.getElementById('time1').innerHTML=hours+':'+minutes;
  // document.getElementById('year1').innerHTML= d.getFullYear()
</script>
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
	        <a href="#" id="yesModal" style="color:black;"><span class="align-middle" data-toggle="modal" data-target="#yesmodal">YES</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
	        <a href="#" id="noModal" style="color:black;"><span class="align-middle" data-toggle="modal" data-target="#nomodal" style="padding-left: 40px;">NO</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
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
<div id="nomodal" class="modal fade bs-example-modal-xs" role="dialog ">
  <div class="modal-dialog modal-xs modal-dialog-center" style="height:350px;" >
 <!-- Modal content-->
   <div class="modal-content" style="padding-top:0%; vertical-align: middle;">
     <div class="modal-body p-0 m-0">
      <section class="container">
       <div class="tmodal">
    <button type="button" class="close p-4" data-dismiss="modal">&#10006</button>
        <div>
        <form style="width:80%; padding-top: 12%;">
        <h6 style="color:black;" class="text-left">BOOK A MEETING ROOM</h6>
        
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
                  <label>Full Address</label>
               </div>
            </div>
            <div class="col-md-6">
              <div class="group">
                  <input type="email"><span class="highlight"></span><span class="bar"></span>
                  <label>Email</label>
               </div>
            </div>
            <div class="col-md-6">
              <div class="group">
                  <input type="text"><span class="highlight"></span><span class="bar"></span>
                  <label>Area</label>
               </div>
            </div>
            <div class="col-md-6">
              <div class="group">
                  <input type="text"><span class="highlight"></span><span class="bar"></span>
                  <label>Phone</label>
               </div>
            </div>
            <div class="col-md-6">
              <div class="group" style="text-align: right; padding-top: 5%;">
	        <a href="#" id="pickDate" style="color:black;"><span class="align-middle" data-toggle="modal" data-target="#pickdatemodal">Pick date and time</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>                  
               </div>
            </div>
          <!-- <h6 style="color:black; position: absolute; bottom:30px; font-size: 14px;" class="p-5 text-justify text-left">
          <small>ALREADY REGISTERED ?
          <br><br>
	        Lorem Ipsum is simply ing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet,
	        <br><br>
	        <a href="#YES" style="color:black;"><span class="align-middle" data-toggle="modal" data-target="#bookingmodal">YES</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
	        <a href="#NO" style="color:black;"><span class="align-middle" data-toggle="modal" data-target="#bookroom" style="padding-left: 40px;">NO</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>
          </small></h6> -->
        </div>
        </form>
       </div>
      </section>
    </div>
   </div>
  </div>
</div>

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
                <!-- <br><br><br><br><br>
                MAKE A BOOKING
                <br><br>
                <small>Lorem Ipsum is simply ing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet,
                </small> -->

                </h6>
                <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:35%; font-size: 14px; border-bottom:1px solid #fff" class="mx-5 text-justify">BOOK A MEETING ROOM
                </h6>
               <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:15%; font-size: 14px;" class="p-5 text-justify">
                <small>Lorem Ipsum is simply ing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet,</small>
               </h6>
               <!-- <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:5%; font-size: 14px;" class="p-5 text-justify">
                <div class="col-md-12 col-sm-12 col-xs-12 row">
                <div class="col-md-6 row p-0 m-0">
                <a href="#bookatour" style="color:white;"><span class="align-middle" data-toggle="modal" data-target="#modalsignup">Book a tour</span></a>
               </div>
               <div class="col-md-6  p-0 m-0 text-right">
                <a href="#bookroom" style="color:white;"><span class="align-middle" data-toggle="modal" data-target="#yesnomodal">Book a meeting room</span> </a>
               </div>
               </div> 
               </small></h6> -->
               <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:-50px; font-size: 12px;" class="p-5 text-justify"><small><b>Reyada</b> | Collaborative workplace
               </small></h6>
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


</script>
               </div> 
               <div  style="padding-left: 40px; padding-right: 30px; padding-top: 10px;" id="meetFormNonReg">
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
	        <a href="#" id="meetSubmitNonReg" style="color:black;"><span class="align-middle" data-toggle="modal" data-target="#thankyouforbookingmodal">Submit</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>                  
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

<!-- End Thank you for booking Modal-->

<!-- Yes Modal1 -->

<div id="yesmodal" class="modal .modal-child fade bs-example-modal-xl" role="dialog ">
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
                </div>
                </small>
                </h6>
               <h6 style="color:white; position: absolute; top: 235px; left:100px; right:30px; font-size: 14px;" class="text-justify bg-black">
                <div class="col-md-12 col-sm-12 col-xs-12 row">
                <div class="col-md-6 row p-0 m-0">
                <a href="#" onlick="javascript(0)" style="color:white;" id="the">THE PYRAMID</a>
               </div>
               <div class="col-md-6  p-0 m-0 text-right">
                <a href="#" onlick="javascript(0)" style="color:white;" id="boardroom">BOARDROOM</a>
               </div>
               <div class="col-md-12  p-0 m-0">
               <small><br>
               Lorem Ipsum is simply ing industry. Lorem Ipsum has been the industry's
               </small>
               </div>
               </div>
               <!-- The pyramid -->
               <div class="col-md-12 col-sm-12 col-xs-12 row" id="theDiv">
               <div class="col-md-6 p-0 m-0">
               <span style="color: #fff; font-size: 14px;"><br>09.00<br></span>
               <span style="color: #fff; font-size: 11px;">09.30  am<br></span> 
               <span style="color: #fff; font-size: 14px;"><br>06.30<br></span>
               <span style="color: #fff; font-size: 11px;">09.30  pm<br></span>  
               <span style="color: #fff; font-size: 14px;"><br>06.30<br></span>
               <span style="color: #fff; font-size: 11px;">09.30  pm<br></span> 
               <span style="color: #fff; font-size: 14px;"><br>09.00<br></span>
               <span style="color: #fff; font-size: 11px;">09.30  am<br></span>                 
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
               </div>
               </div> 
               <!-- End the pyramid -->

               <!-- Boardroom -->
               <div class="col-md-12 col-sm-12 col-xs-12 row" id="boardroomDiv">
               <div class="col-md-6 p-0 m-0">
               <span style="color: #fff; font-size: 14px;"><br>07.00<br></span>
               <span style="color: #fff; font-size: 11px;">09.30  am<br></span> 
               <span style="color: #fff; font-size: 14px;"><br>05.30<br></span>
               <span style="color: #fff; font-size: 11px;">09.30  pm<br></span>  
               <span style="color: #fff; font-size: 14px;"><br>06.30<br></span>
               <span style="color: #fff; font-size: 11px;">09.30  pm<br></span> 
               <span style="color: #fff; font-size: 14px;"><br>09.00<br></span>
               <span style="color: #fff; font-size: 11px;">09.30  am<br></span>                 
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
               <h6 style="color:white; position: absolute; left:100px; right:30px; bottom:40px;"><i class="fa fa-angle-down fa-2x"></i></h6>

               </small></h6>
               <h6 style="color:white; position: absolute; left:40px; right:30px; bottom:-50px; font-size: 12px;" class="p-5 text-justify"><small><b>Reyada</b> | Collaborative workplace
               </small></h6>
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
	        <a href="#" id="meetSubmit" style="color:black;"><span class="align-middle" data-toggle="modal" data-target="#thankyouforRegmodal">Submit</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>                  
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
<!-- End yes modal -->

<!-- Thank you for booking Modal-->
<div id="thankyouforRegmodal" class="modal fade bs-example-modal-xs" role="dialog ">
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

<!-- End Thank you for booking Modal-->

<script> 

$(document).on("click", "#bookingmodal", function () {
         $("#bookingmodal").modal("show"); 
         });
</script>
<script>
  // var d = new Date();
  // minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes();
  //   hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours();
  // document.getElementById('time').innerHTML=hours+':'+minutes;
  // document.getElementById('year').innerHTML= d.getFullYear()

  // var d = new Date();
  // minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes();
  //   hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours();
  // document.getElementById('time1').innerHTML=hours+':'+minutes;
  // document.getElementById('year1').innerHTML= d.getFullYear()
// $('#modalbookmeetingroom').click(function(e){
//         e.preventDefault();

//         $('#bookingmodal')
//             .modal('hide')
//             .on('hidden.bs.modal', function (e) {
//                 $('#modalbookmeetingroom').modal('show');

//                 $(this).off('hidden.bs.modal'); // Remove the 'on' event binding
//             });

//     });
         

        //  $(document).on("click", "#bookroom", function () {
        //  $("#yesnomodal").modal("show"); 
        //  });

        //  $(document).on("click", "#NO", function () {
        // $("#yesnomodal").modal("hide"); 
        //  $("#nomodal").modal("show"); 
        //  });

        //  $(document).on("click", "#YES", function () {
        //   $("#yesnomodal").modal("hide"); 
        //   $("#bookingmodal").modal("hide"); 
        //  $("#yesmodal").modal('show'); 
        //  });

        //  $(document).on("click", "#pickdate", function () {
        //  $("#pickdatemodal").modal("show"); 
        //  });
         
        //  $(document).on("click", "#thankyouforbooking", function () {
        //  $("#thankyouforbookingmodal").modal("show"); 
        //  });

         $(document).ready(function(){
          $("#meetFormNonReg").hide(); 
          $("#meetCalNonReg").click(function () {
          $("#meetFormNonReg").show(); 
          });
        });

         $(document).ready(function(){
          $("#boardroomDiv").hide(); 
          $("#boardroomDivMob").hide(); 

          $("#boardroom").click(function () {
          $("#boardroomDiv").show(); 
          $("#theDiv").hide(); 
          });

          $("#the").click(function () {
          $("#theDiv").show(); 
          $("#boardroomDiv").hide(); 
          });

          $("#boardroomMob").click(function () {
          $("#boardroomDivMob").show(); 
          $("#theDivMob").hide(); 
          });

          $("#theMob").click(function () {
          $("#theDivMob").show(); 
          $("#boardroomDivMob").hide(); 
          });
        });

        $(document).ready(function(){
          $("#meetFormReg").hide(); 
          $("#tourMobFormReg").hide();
          $("#meetCal").click(function () {
          $("#meetFormReg").show(); 
          });
          $("#tourMobCalNonReg").click(function () {
          $("#tourMobFormReg").show(); 
          });
        });

        $(document).ready(function(){
          $("#meetMobFormReg").hide();
          $("#meetMobCalNonReg").click(function () {
          $("#meetMobFormReg").show(); 
          });
        });

</script>
