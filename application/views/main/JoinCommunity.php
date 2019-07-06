<!--==========================
    Intro Section
  ============================-->
  <style>
    #radioBtn .notActive{
        color: #333;
        background-color: #fff;
        border-color: #333;
    }
    #radioBtn .btn.btn-primary.btn-sm.active{
        background-color: #e4f9fb;
        border-color: blue;
        color:#333
    }
  </style>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <section id="intro" class="clearfix align-middle " style="background:url('<?= base_url()?>image/articles/article1.jpg') center  no-repeat;background-size: cover;height:60vh;-webkit-filter: brightness(75%); filter: brightness(75%);">
  </section><!-- #intro -->

   <!--==========================
      Article
    ============================-->
    <section id="team" class="py-3">
      <div class="container">
        <div class="section-header pb-1 offset-2 col-md-8 pl-0">
        <h4>CRYSTAL TOWER</h4>
        <div class="row">
            <div class="col-4">
                <h6>How many people need workspace?</h6>
                <!------ Include the above in your HEAD tag ---------->
                <div class="center">
                   <div class="input-group">
                        <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                        </span>
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="group mt-3" style="">
	              <a href="#" style="color:black;"><span>Find Workspace</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>             <a href="#" style="color:black;float:right"><span>Clear Filter</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a>     
               </div>
            </div>
            <!-- <div class="col-2"></div> -->
            <div class="col-6">
                <h6>When would you like to move in?</h6>
    			<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm active" data-toggle="move" data-title="this_month">This Month</a>
                        <a class="btn btn-primary btn-sm notActive" data-toggle="move" data-title="next_month">Next Month</a>
    					<a class="btn btn-primary btn-sm notActive" data-toggle="move" data-title="other">Other</a>
    				</div>
    				<input type="hidden" name="move" id="move">
    			</div>
                </div>
        </div>
        </div>
      </div>
    </section><!-- #Filter -->


    <section id="team" class="pt-0">
      <div class="container">
        <div class="section-header pb-1 offset-2 col-md-8 pl-0">
            <h5>3 buildings meet your criteria</h5>
            <div class="row">
                <div class="col-6 text-center">
                    <img src="<?= base_url('image/services/service1.jpg')?>" alt="" class="w-100" height="200px">
                    <h4 class="h3">33 Rue la Fayette</h4>
                    <h6>33 Rue La Fayette Paris 75 75009</h6>
                </div>
                <div class="col-6  text-center">
                    <img src="<?= base_url('image/services/service2.jpg')?>" alt="" class="w-100" height="200px">
                    <h4 class="h3">40 Rue du Colisee</h4>
                    <h6>40 Rue du Colisee Paris 75 75009</h6>
                </div>
            </div>
        </div>
      </div>
    </section><!-- #Criteria Meets -->
    <script>

$('#radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#'+tog).prop('value', sel);
    
    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})

        //plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    </script>