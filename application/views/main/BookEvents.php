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
        <form id="event-form" class="event-form" method="post" action="">
            <input type="hidden" id="event_id" value="<?= $events->Id ?>"/>
            <input type="hidden" id="ticket_url" name="ticket_url" value="<?= $this->input->get('ticketUrl') ?>" />

            <div class="row">
                <div class="col-md-12 text-center" >
                    <h4>Enter Your Details</h4>
                </div>
                <div class="col-md-12" >
                    <div class="group">
                        <input name="name" placeholder="Name" id="name" type="text"><span class="highlight"></span><span class="bar"></span>
                    </div>
                </div>
                <div class="col-md-12" >
                    <div class="group">
                        <input name="email" placeholder="Email" id="e_email" type="email"><span class="highlight"></span><span class="bar"></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="group">
                        <input name="mobile" placeholder="Mobile" id="e_mobile" type="number"><span class="highlight"></span><span class="bar"></span>
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
                        <span >Total Amount:&nbsp;<span id="total_amount" name="total_amount"></span></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="group pull-left">
                        <button type="submit" name="purchase" class="btn custom-button-bl" style="outline:none;" >Purchase</button>
                    </div>
                </div>
            <div>
        </form>
    </div>

    <div id="modal-confirmation" class="modal fade bs-example-modal-xs" role="dialog ">
        <div class="modal-dialog modal-xs modal-dialog-center" style="height:300px;" >
            <!-- Modal content-->
            <div class="modal-content pt-5 mt-5" style="padding-top:0%; vertical-align: middle;">
                <div class="modal-body p-0 m-0">
                    <button type="button" class="close p-4" style="outline:none;" data-dismiss="modal">&#10006</button>
                    <section class="container">
                    <div class="tmodal">
                        <div>
                            <h6 style="color:black;bottom:30px; font-size: 18px;" class="p-5 text-justify text-left">
                                <small><span id="pop-up-text" ></span>
                                <br><br>
                                <a href="javascript:void(0)" id="pop-cancel" class="btn custom-button-bl" data-dismiss="modal" style="outline:none;">CANCEL</a>
                                <a href="javascript:void(0)" id="pop-ok" class="btn custom-button-b2" style="outline:none;"></a>
                                </small>
                            </h6>

                        </div>
                    </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

<?php include 'account_master_end.php';?>

<script>
    var price = '<?= $events->MostExpensivePrice?>';
    var event_name = '<?= $events->Name ?>';
    var event_date = '<?= date("Y-m-d \a\\t h:i a", strtotime($events->StartDate)) ?>';
    
    $(document).ready(function(){

        $('#event-form').submit(function(e){
            e.preventDefault();
            var digit_pattern = new RegExp('^[2-9][0-9]*$');
            name = $('#name').val();
            email = $('#e_email').val();
            mobile = $('#e_mobile').val();
            event_id = $('#event_id').val();
            ticket_url = $('#ticket_url').val();
            qty = $('#qty').val();
            base_url = '<?= base_url() ?>';
            if(name == ''){
                toastr.error('Please enter the name');
            } else if(mobile == ''){
                toastr.error('Please enter the Phone Number');
            } else if(!mobile.match(digit_pattern)){
                toastr.error("Invalid Mobile number");
            } else if(email == ''){
                toastr.error('Please enter the email');
            } else if(qty == 0){
                toastr.error('Please select Quantity');
            } else {
                showPayment();
            }
        });

        $(document).on("change", "#qty", function(){
            $('#attendee_form').empty();
            $('#total_amount').empty();
            var qty = $(this).val();

            if(qty > 0){
                total_amount = price * qty;
                $('#total_amount').append(total_amount+ ' KWD');
                $('#total-amount-span').append(total_amount+ ' KWD');
                for (i = 1; i <= qty ; i++) {
                    var html = 
                    '<div class="col-md-12">'+
                        '<small>Please enter attendee '+i+' details</small>' +
                        '<div class="group">'+
                            '<input placeholder="Name" class="used" id="tickets_name_'+i+'" name="attendee_name[]" type="text" required class="used"><span class="highlight"></span><span class="bar"></span>'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-md-12">'+
                        '<div class="group">'+
                            '<input placeholder="Email" class="used" id="tickets_email_'+i+'" type="email" name="attendee_email[]" required class="used"><span class="highlight"></span><span class="bar"></span>'+
                        '</div>'+
                    '</div><hr>';
                    
                    $('#attendee_form').append(html);
                    $('#ticketsdiv').show();
                }
            } else {
                $('#ticketsdiv').hide();
                toastr.error('Please select Quantity');
            }
        });

        $('#pop-ok').click(function(){
            saveData();
        });

    });

    function saveData(){
        attendee_names = $("input[name='attendee_name\\[\\]']")
            .map(function(){return $(this).val();}).get();

        attendee_emails = $("input[name='attendee_email\\[\\]']")
            .map(function(){return $(this).val();}).get();
            
        var form_data = {
            'name': name,
            'email': email,
            'mobile': mobile,
            'qty': qty,
            'attendee_names': attendee_names,
            'attendee_emails': attendee_emails,
            'event_id': event_id,
            'ticket_url': ticket_url
        };

        $('.whole_div').show();
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: base_url + 'main/purchase_tickets_new',
            data: form_data,
            success: function(data) {
                $('.whole_div').hide();
                if(data.result == 'OKPD'){
                    window.location.href = data.pay_url;
                }else if(data.result == "OKFR"){
                    window.location.href = data.pay_url;
                }else{
                    $('#modal-confirmation').modal('hide');
                    toastr.error('Invalid Data');    
                }
            },
            error: function(data) {
                console.log(data);
                $('.whole_div').hide();
                toastr.error('Unexpected error.');
            }
        });
    }

    function showPayment(){
        $('#pop-up-text').empty();
        $('#pop-ok').empty();

        if(price > 0){
            var text = "You have chosen to purchase "+qty+" ticket(s) for "+event_name+" for "+event_date+". Total Cost is KD "+total_amount;
            $('#pop-ok').html("PAY NOW");
        }else{
            var text = "You have chosen to purchase "+qty+" ticket(s) for "+event_name+" for "+event_date+". Total Cost is KD 0.000. Click OK to proceed.";
            $('#pop-ok').html("OK");
        }
        $('#pop-up-text').html(text);
        $('#modal-confirmation').modal('show');
    }

</script>



