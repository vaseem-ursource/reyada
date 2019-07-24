<style>
   
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
</style>
<section id="team" class="pb-1 mt-5" style="min-height:80vh"> 
    <div class="container"> 
          <div class="row"> 
            <div class="col-12 row mb-4">
                <div class="col-12 text-center">
                    <img src="<?= base_url('image/location.png');?>" alt="" width="25px"><span> CRYSTAL TOWER</span>
                    <span class="h3 pull-right">Booking.</span>
                </div>
            </div>
            <div class="section-header pb-1 col-md-12 pl-0">
            <div style="border-bottom:1px solid #707070">
                <span class="h6" style="color:#000000;">Home / Calendar / Meeting room</span>
                <span class="h3 mx-auto" style="color:#000000; margin-left: 20% !important;">Meeting Room & Resources</span>
                <span class="h3 float-right">
                <select class="select-fontsize locations" name="fromtime" id="location-drp-dwn" style="padding:6.2px !important;color:black !important;">
                  </select>
                </span>
            </div>
            <form style="width:100%;" class="m-0"> 
              <div class="row p-0"> 
              <div class="col-md-1"></div>
                <div class="col">
                  <div class="group">
                      <input  style="padding:4px !important;color:black !important;" type="date" id="date" value="<?php echo date("Y-m-d");?>" ><span class="highlight"></span><span class="bar"></span>
                      <label>Date</label>
                  </div>
                </div>
                <div class="col">
                  <div class="group">
                      <!-- <input type="text"><span class="highlight"></span><span class="bar"></span> -->
                      <label>Start Time</label>
                      <select class="select-fontsize" name="start_time" id="start_time" style="padding:5px !important;color:black !important;">
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
                          <option value="12:00 PM" selected="selected">12:00 PM</option>
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
                <div class="col">
                  <div class="group">
                      <!-- <input type="text"><span class="highlight"></span><span class="bar"></span> -->
                      <label>Start Time</label>
                      <select class="select-fontsize" name="to_time" id="to_time" style="padding:5px !important;color:black !important;">
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
                      <option value="12:30 PM" selected="selected">12:30 PM</option>
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
                  <div class="group" style="text-align: right;">
                    <a href="#" style="color:black;"><span id="findAvailable">Find available</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>                  
                  </div>
                </div>
              </div>
            </form>
          <div class="container px-0">
            <div style="margin-left:15%;margin-right:15%;">
              <div class="row p-0" id="availabeResources">
                  
              </div>
            </div>
          </div>

<?php include('account_master_end.php');?>
<script>
$(document).ready(function() {
  var username = '<?= $this->config->item('username')?>'
  var password = '<?= $this->config->item('password')?>'

  var cur_date = '<?php echo date("Y-m-d") ?>';
  var st_time = ConvertTimeformat($('#start_time').val());
  var to_time = ConvertTimeformat($('#to_time').val());

  var fromTime = cur_date +'T'+  st_time  + 'Z'; 
  var totime = cur_date +'T'+  to_time  + 'Z'; 
  var location = $('.locations').val();

  $('#findAvailable').click(function(){
    var st_time = ConvertTimeformat($('#start_time').val());
    var to_time = ConvertTimeformat($('#to_time').val());
    var selected_date  =  $('#date').val();
    if(selected_date == '' || selected_date == '0'){
        var date = cur_date;
    }
    else{
        var date = selected_date;
    }
    var location = $('.locations').val();
    var fromTime = date +'T'+  st_time  + 'Z'; 
    var totime = date +'T'+  to_time  + 'Z'; 
    // get_available_rooms(fromTime,totime,location);
  });

  $(".locations").change(function() {
        $('.whole_div').show();
        var location = $(this).val();
        var st_time = ConvertTimeformat($('#start_time').val());
        var to_time = ConvertTimeformat($('#to_time').val());
        var selected_date  =  $('#date').val();
        if(selected_date == '' || selected_date == '0'){
            var date = cur_date;
        }
        else{
            var date = selected_date;
        }
        var fromTime = date +'T'+  st_time  + 'Z'; 
        var totime = date +'T'+  to_time  + 'Z'; 
        get_available_rooms(fromTime,totime,location);
    });
  
  function get_locations(){
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
                    $.each(locations.Records, (key, location) => {
                        $(".locations").append("<option value ='"+location.WebAddress+"'>" + location.Name + "</option>");
                    });
                } else {
                    $(".locations").append("<option value ='0'>" +'No Locations' + "</option>");
                }
            },
            error: function(xhr) {
                $(".locations").append("<option value ='0'>" + 'No Locations' +"</option>");
            }
        });
    }
    function get_available_rooms(fromTime,totime,location) {
        $('.whole_div').show();
        $('#availabeResources').empty();
        base_url = "<?= base_url() ?>";
        post_data = {
            "fromTime": fromTime,
            "totime": totime,
            "location": location
        }
        $.ajax({
            type: "POST",
            dataType: 'JSON',
            url: base_url + 'main/get_available_rooms',
            data: post_data, 
            success: function(data) {
                if(data.status == 'OK'){
                    $.each(data.resources, (key, resource) => {
                    if(resource.IsAvailable == true){
                        var status = "<span class='h6 pull-right' style='color:#6FBC89';>"+'Available'+"</span>"
                    }
                    else{
                        var status = "<span class='h6 pull-right' style='color:#FF0000';>"+'Not Available'+"</span>"
                    }
                   var rooms =  "<div class='col-sm-6'>"+
                        "<div class='card border-0'>"+
                            "<span class='h6 m-0'>"+ resource.Name +"</span>"+
                            "<h6 class='m-0'>"+resource.ResourceTypeName+ status +"</h6>"+        
                        "<img class='card-img-top' src='<?= base_url('image/services/service2.jpg')?>' height='250px' alt='Card image cap'>"+
                        "</div>"+
                    "</div>";
                    $('#availabeResources').append(rooms);
                    $('.whole_div').hide();
                });
                }
                else{
                    $('.whole_div').hide();
                    toastr.error('some error occured while processing your request');
                }
                
            },
            error: function(error){
                $('.whole_div').hide();
                console.log(error);
            }
        });
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
    get_locations();
    get_available_rooms(fromTime,totime,location);
});
</script>      

