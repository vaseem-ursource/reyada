
<section id="team" class="pb-1 mt-5" style="min-height:80vh">
<div class="container">
  <div class="row"  style="border-bottom:1px solid black;">
      <div class="col-md-4 col-xs-4 text-center">
      Home / Calendar / Meeting room
      </div>
      <div class="col-md-4 col-xs-4 text-center"  style="color:#000000;position:relative;"><h4>Meeting Room & Resources</h4></div>
      <div class="col-md-4 col-xs-4 room">
        <select class="locations text-center" name="fromtime" id="location-drp-dwn" style="color:black;position:relative;margin-top:-10px;font-size:20px;border-bottom:white;content:\00A7;">
          <option value="<?= $locations[0]->WebAddress ?>"><?= $locations[0]->Name ?></option>
          <option value="<?= $locations[1]->WebAddress ?>"><?= $locations[1]->Name ?></option>
        </select>
      </div>
  </div>
  <br>
</div>
<div class="container">
<div class="row p-0"> 
    <div class="col-md-4">
      <div class="group">
          <input  style="padding:4px !important;color:black !important;" type="date" id="date"><span class="highlight"></span><span class="bar"></span>
          <label>Date</label>
      </div>
    </div>
    <div class="col-md-4">
      <div class="group">
          <select class="select-fontsize" name="start_time" id="start_time" style="padding:5px !important;color:black !important;">
              <option value="">Select Start Time</option>
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
              <option value="9:00 PM">9:00 PM</option>
              <option value="9:30 PM">9:30 PM</option>
              <option value="10:00 PM">10:00 PM</option>
              <option value="10:30 PM">10:30 PM</option>
              <option value="11:00 PM">11:00 PM</option>
              <option value="11:30 PM">11:30 PM</option>
          </select>
      </div>
    </div>
    <div class="col-md-4">
      <div class="group">
          <select class="select-fontsize" name="to_time" id="to_time" style="padding:5px !important;color:black !important;">
          <option value="">Select End Time</option>
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
          <option value="9:00 PM">9:00 PM</option>
          <option value="9:30 PM">9:30 PM</option>
          <option value="10:00 PM">10:00 PM</option>
          <option value="10:30 PM">10:30 PM</option>
          <option value="11:00 PM">11:00 PM</option>
          <option value="11:30 PM">11:30 PM</option>
      </select>
      </div>
      <div class="group" style="text-align: right;">
        <a href="#" style="color:black;outline:none;"><span id="findAvailable">Find available</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>                  
      </div>
    </div>
  </div>
</div>

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

  $('#findAvailable').click(function(){
    if($('#start_time').val() == '' || $('#to_time').val() == '' || $('#date').val() == ''){
      toastr.error('All the fields are mandatory');
    }else{
      var st_time = ConvertTimeformat($('#start_time').val());
      var to_time = ConvertTimeformat($('#to_time').val());
      var selected_date  =  $('#date').val();
      var location = $('.locations').val();
      var fromTime = selected_date +'T'+  st_time  + 'Z'; 
      var totime = selected_date +'T'+  to_time  + 'Z'; 
      get_available_rooms(fromTime,totime,location);
    }
    
  });
    function get_available_rooms(start_time,end_time,loc) {
        $('.whole_div').show();
        $('#availabeResources').empty();
        base_url = "<?= base_url() ?>";
        if(loc == 'reyada'){
          img_url = 'https://reyada.spaces.nexudus.com/en/publicresources/getimage/';
        }
        else{
        img_url = 'https://reyadamabane.spaces.nexudus.com/en/publicresources/getimage/';

        }
        $.ajax({
          type: "POST",
            dataType: "JSON",
            url: base_url + "main/get_available_rooms",
            data: "start_time="+start_time+"&end_time="+end_time+"&loc="+loc,
            success: function(data) {
                if(data.status == 'OK'){
                    $.each(data.resources, (key, resource) => {
                      console.log(resource.Id);
                    if(resource.IsAvailable == true){
                        var status = "<span class='h6 pull-right' style='color:#6FBC89';>"+'Available'+"</span>"
                    }
                    else{
                        var status = "<span class='h6 pull-right' style='color:#FF0000';>"+'Not Available'+"</span>"
                    }
                   var rooms =  "<div class='col-sm-6' style='position:relative;margin-top:5px;'>"+
                        "<div class='card border-0'>"+
                            "<span class='h6 m-0'>"+ resource.Name +"</span>"+
                            "<h6 class='m-0'>"+resource.ResourceTypeName+ status +"</h6>"+        
                        "<img class='card-img-top' src="+ img_url +resource.Id +" height='250px' alt='Card image cap'>"+
                        "</div>"+
                    "</div>";
                    $('#availabeResources').append(rooms);
                    $('.whole_div').hide();
                });
                }
                else{
                    $('.whole_div').hide();
                    toastr.error('No Resources Available for the selected location');
                }
                
            },
            error: function(error){
                $('.whole_div').hide();
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
});
</script>      

