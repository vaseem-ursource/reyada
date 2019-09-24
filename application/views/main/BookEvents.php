<?php 
    if($location == 'reyada'){
        $loc_id = 95265170;
    }
    else{
        $loc_id = 906856952;  
    }
?>
<section id="team" class="pb-1 mt-5" style="min-height:80vh">
<div class="container">
<div class="row"  style="border-bottom:1px solid black;">
    <div class="col-md-12 col-xs-12"  style="color:#000000;position:relative;"><h4><?= $events->Name?></h4></div>
</div>
<br>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="<?= "https://$location.spaces.nexudus.com/en/events/getsmallimage?id=".$events->Id ?>" width="100%" class="img-fluid position-relative" alt="Card Back"> 
            <h4 id="b1h4"class="text-dark position-relative pt-2 hed" style="font-size:inherit;display:block;" ><i class="fa fa-calendar"></i>&nbsp;<b><?=date("Y-m-d h:i a", strtotime($events->StartDate))?></b></h4> 
            <h4 id="b1h4"class="text-dark position-relative pt-2 hed" style="font-size:inherit;display:block;" ><i class="fa fa-map-marker"></i>&nbsp;<b><?= $events->Location?><br><?= $events->VenueAddress?></h4> 
        </div>
        <?php if(!empty($events->LongDescription)){ ?>
        <div class="col-md-12">
        <?= strip_tags($events->LongDescription) ?>
        </div>
        <?php } ?>
    </div>
</div>
<div class="container">
<form class="event-form" method="post" action="<?= base_url()?>main/purchase_tickets">
        <input type="hidden" id="username" name="username" />
        <input type="hidden" id="useremail" name="useremail" />
        <input type="hidden" name="event_Name" value="<?= $events->Name?>"/>
        <input type="hidden" name="Price" value="<?= $events->MostExpensivePrice?>"/>
        <input type="hidden" name="PriceFormatted" value="<?= $events->MostExpensivePrice?>.00.د.ك."/>
        <input type="hidden" name="MaxTicketsPerAttendee" value="<?= $events->MostExpensivePrice?>"/>
        <input type="hidden" name="Id" value="<?= $product_id ?>"/>
        <input type="hidden" name="IdString" value="<?= $product_id ?>"/>
        <input type="hidden" name="loc_url" value="<?= $location ?>" />
        <input type="hidden" name="loc_id" value="<?= $loc_id ?>" />
    <div class="row">
        <div class="col-md-12 text-center" <?= ($this->session->userdata('is_logged_in')) ? 'style="display:none;"' : ''; ?>>
            <h4>Enter Your Details</h4>
        </div>
        <div class="col-md-12" <?= ($this->session->userdata('is_logged_in')) ? 'style="display:none;"' : ''; ?>>
            <div class="group">
                <input  name="p_name" placeholder="Name" id="e_name" type="text"><span class="highlight"></span><span class="bar"></span>
            </div>
        </div>
        <div class="col-md-12" <?= ($this->session->userdata('is_logged_in')) ? 'style="display:none;"' : ''; ?>>
            <div class="group">
                <input name="p_email" placeholder="Email" id="e_email" type="email"><span class="highlight"></span><span class="bar"></span>
            </div>
        </div>
        <div class="col-md-12" id="e_qty">
            <div class="group time">
                <select class="select-fontsize"  name="qty" id="qty" style="padding:5px !important;color:black !important;">
                    <option value="0">Select Qty</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>

                </select>
            </div>
        </div>
        <div class="col-md-12" <?= ($this->session->userdata('is_logged_in')) ? 'style="display:none;"' : ''; ?>>
            <div class="group" style="text-align:center;cursor:pointer;">
                <a href="#" onclick="return false;" style="color:black;font-size:16px;" id="checkemail"><span class="align-middle">Continue</span>&nbsp;&nbsp;OR&nbsp;&nbsp;</a> 
                <a href="#" style="color:black;font-size:16px;"  data-toggle="modal" data-target="#modalLogin"><span class="align-middle">Login</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>                  
            </div>
        </div>
        <div class="col-md-12" <?= ($this->session->userdata('is_logged_in')) ? '' : 'style="display:none;"'; ?>>
            <div class="group" style="text-align:center;cursor:pointer;">
                <p style="color:black;font-size:16px;" id="dfsfs"><span class="align-middle">Continue</span><i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></p> 
            </div>
        </div>
    </div>
        <div id="ticketsdiv" style="display:none">
            <div class="col-md-12">
                <h5>Attendees</h5>
                Please type the name and email address of each person attending this event. They will receive a notification and their ticket by email.
            </div>
            <br>
            <div class="row col-md-12" id="attendee_form">
            
            </div>
            <br>
            <div class="col-md-12">
                <div class="group pull-right">
                    <span >Total Amount:&nbsp;<span id="total_amt" name="total_amount"></span></span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="group pull-left">
                    <button type="submit" name="purchase" style="border:0px;background-color:transparent;color:black;outline:none;" name="puchase"><span class="align-middle">Purchase</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></button>
                </div>
            </div>
        <div>
    </form>
</div>
<?php include 'account_master_end.php';?>
<script>
var price = '<?= $events->MostExpensivePrice?>';
$('#qty').on('change',function(){
    $('#total_amt').empty();
    var qty = $(this).val();
    var total_mount = price*qty;
    $('#total_amt').append(total_mount+ ' KWD');
});
</script>
<script>
$(document).ready(function(){
    $('#checkemail').click(function(){
        $('#attendee_form').empty();
        var name = $('#e_name').val();
        var email = $('#e_email').val();
        var qty = $('#qty').val();
        var base_url = '<?= base_url()?>';
        var loc = '<?= $location?>';
        if($('#e_name').val() == ''){
            toastr.error('Please enter the name');
        }
        else if(email == ''){
            toastr.error('Please enter the email');
        }
        else if(qty == 0){
            toastr.error('Please select Quantity');
        }
        else{
            $('.whole_div').show();
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
                    $('.whole_div').hide();
                    if(data.status == 200){
                        for (i = 0; i < qty ; i++) {
                            var text =  
                            '<div class="col-md-12">'+
                                '<div class="group">'+
                                    '<input  placeholder="Name" class="used" id="tickets_name_'+i+'" name="attendee_name[]" type="text" required class="used">'+'<span class="highlight">'+'</span>'+'<span class="bar">'+'</span>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-12">'+
                                '<div class="group">'+
                                    '<input  placeholder="Email" class="used" id="tickets_email_'+i+'" type="email" name="attendee_email[]" required class="used">'+'<span class="highlight">'+'</span>'+'<span class="bar">'+'</span>'+
                                '</div>'+
                            '</div>';
                            
                            $('#attendee_form').append(text);
                            $('#ticketsdiv').show();
                        }
                        var disc = '<div class="col-md-12">'+
                                        '<div class="group">'+
                                            '<input  placeholder="Discount Code" class="used" id="e_code" name="discount_code" type="text" class="used">'+'<span class="highlight">'+'</span><span class="bar">'+'</span>'+
                                        '</div>'+      
                                    '</div>';
                        $('#attendee_form').append(disc);
                    }
                    else{
                        $('.whole_div').hide();
                        toastr.error(data.message);
                    }
                },
                error: function(data){
                    $('.whole_div').hide();
                }
            }) 
        }
    });
});
$(document).ready(function(){
    $('#dfsfs').click(function(){
        // $('.whole_div').show();
        var qty = $('#qty').val();
        if(qty == 0){
            toastr.error('Please select Quantity');
        }
        else{
            $('#attendee_form').empty();
            for (j = 0; j < qty ; j++) {
                var text =  
                '<div class="col-md-12">'+
                    '<div class="group">'+
                        '<input  placeholder="Name" class="used" id="tickets_name_'+j+'" name="attendee_name[]" type="text" required >'+'<span class="highlight">'+'</span>'+'<span class="bar">'+'</span>'+
                        '<label>'+'Name'+'</label>'+
                    '</div>'+
                '</div>'+
                '<div class="col-md-12">'+
                    '<div class="group">'+
                        '<input  placeholder="Email" class="used" id="tickets_email_'+j+'" type="email" name="attendee_email[]" required>'+'<span class="highlight">'+'</span>'+'<span class="bar">'+'</span>'+
                    '</div>'+
                '</div>';
                
                $('#attendee_form').append(text);
                $('#ticketsdiv').show();
            }
            var disc = '<div class="col-md-12">'+
                            '<div class="group">'+
                                '<input  placeholder="Discount Code" class="used" id="e_code" name="discount_code" type="text">'+'<span class="highlight">'+'</span><span class="bar">'+'</span>'+
                            '</div>'+      
                        '</div>';
            $('#attendee_form').append(disc); 
        }
    });
});
</script>



