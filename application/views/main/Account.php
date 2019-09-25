<?php include('account_master_start.php');?>

    <div style="border-bottom:1px solid #707070" class="mb-2" id="yourplan"> 
        <span class="text-left h4" style="color:#000000;">Your plan</span>  
    </div>
    <div>
        <?php if(!empty($coworker_plans)){ ?>
            <?php foreach($coworker_plans as $plan){ ?>
                <h6 class="pt-4 mt-2" style="color:#000000;"><?= $plan->Tariff->Name ?> <b style="color:#000000;">(KD <?= $plan->Tariff->Price ?>/month)</b></h6>
                <div class="plan-desc" >
                    <?= $plan->Tariff->Description ?>
                </div>
                <?php if($plan->NextTariff->Price != $plan->Tariff->Price){ ?>
                    <table class="table table-striped h6 table-borderless" style="color:#000000;">
                        <thead>
                            <tr style="background-color:#F5F5F5";>
                            <td><img src="<?= base_url('image/ii.png');?>" alt="" width="20px"> <span class="pl-3"><b>This subscription is about to change.</b> We will change your plan to '<?= $plan->NextTariff->Name ?>' on <?= date('m/d/Y', strtotime($plan->RenewalDate)) ?>.</span></td>
                            </tr>
                        </thead>
                    </table>
                <?php }elseif(new DateTime($plan->StartDate) > new DateTime()){ ?>
                    <table class="table table-striped h6 table-borderless" style="color:#000000;">
                        <thead>
                            <tr style="background-color:#F5F5F5";>
                            <td><img src="<?= base_url('image/ii.png');?>" alt="" width="20px"> <span class="pl-3"><b>This subscription has not started yet.</b> 
                                    This plan is set to start on <?= date('m/d/Y', strtotime($plan->StartDate)) ?>. You will not have access to any of its benefits <span class="pl-5">before that date.</span></span></td>
                            </tr>
                        </thead>
                    </table>
                <?php } ?>
                <hr>
            <?php } ?>
        <?php } else{
            if(!empty($future_plan)){ ?>
                <?php foreach($future_plan as $plan){ ?>
                    <h6 class="pt-4 mt-2" style="color:#000000;"><?= $plan->Tariff->Name ?> <b style="color:#000000;">(KD <?= $plan->Tariff->Price ?>/month)</b></h6>
                    <div class="plan-desc" >
                        <?= $plan->Tariff->Description ?>
                    </div>
                    <?php if(!empty($plan->NextTariff)){ ?>
                        <table class="table table-striped h6 table-borderless" style="color:#000000;">
                            <thead>
                                <tr style="background-color:#F5F5F5";>
                                <td><img src="<?= base_url('image/ii.png');?>" alt="" width="20px"> <span class="pl-3"><b>This subscription has not started yet.</b> 
                                        This plan is set to start on <?= date('m/d/Y', strtotime($plan->RenewalDate)) ?>. You will not have access to any of its benefits <span class="pl-5">before that date.</span></span></td>
                                </tr>
                            </thead>
                        </table>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php }?>
        <a href="#"  class="btn custom-button-bl" id="joinplan" style="width:100px;">Join a new</a>
    </div>
    <div class="pt-4" style="border-bottom:1px solid #707070" id="benefits"> 
        <span class="text-left h4" style="color:#000000;">Benefits</span>  
    </div>
    <div>
        <h6 class="pt-4 mt-2" style="color:#000000;">
            Bookings will be charged to your account as they end. Any credit available at the time the booking ends will be used to pay for it.
        </h6>
        <?php if(!empty($other_time_passes)){ ?>
            <table class="table table-striped h6 table-borderless" style="color:#000000;">
                <thead>
                    <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php foreach($other_time_passes as $passes){ ?>
                        <tr class="border-top border-secondary">
                            <td><u><?= $passes->CreditName ?></td>
                            <td><?= $passes->Count ?> passes</td>
                            <td><?= $passes->PassesLeft ?> passes left</td>
                        </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        <?php } else{ ?>
            <table class="table table-striped h6 table-borderless" style="color:#000000;">
                <thead>
                    <tr style="background-color:#F5F5F5";>
                    <td><img src="<?= base_url('image/ii.png');?>" alt="" width="20px"> <span class="pl-3">You are not signed up to a membership that includes benefits.</span></td>
                    </tr>
                </thead>
            </table>
        <?php } ?>
    </div>
<!-- 
    <div class="pt-4" style="border-bottom:1px solid #707070" id="additional"> 
        <span class="text-left h4" style="color:#000000;">Your additional products</span>  
    </div>
    <div class="pt-4">
        <?php if(!empty($other_extra_services)){ ?>
            <table class="table table-striped h6 table-borderless" style="color:#000000;">
                <thead>
                    <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php foreach($other_extra_services as $extra_services){ ?>
                        <tr class="border-top border-secondary">
                            <td><u><?= $extra_services->CreditName ?></td>
                            <td><?= $extra_services->TotalMinutes ?> mins </td>
                            <td><?= $extra_services->MinutesLeft ?> mins left</td>
                        </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        <?php } else{ ?>
            <table class="table table-striped h6 table-borderless" style="color:#000000;">
                <thead>
                    <tr style="background-color:#F5F5F5";>
                    <td><img src="<?= base_url('image/ii.png');?>" alt="" width="20px"> <span class="pl-3">You have no products</span></td>
                    </tr>
                </thead>
            </table>
        <?php } ?>
        <a href="#" style="color:#000000;"><span class="pl-3 h6">See</span><i class="fa fa-angle-right fa-2x pl-1 pb-2 align-middle"></i></a>
    </div> -->
<?php include('account_master_end.php');?>
<script>
 $("#joinplan").click(function () {
    $(".firstSignup").css('display', 'none');
    $(".secondSignup").css('display', 'block');
    $('#modalsignup').modal('show');
  });
</script>      

