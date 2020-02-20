<section id="team" class="pb-1 mt-5" style="min-height:80vh">
    
    <div class="container">

        <div class="col-md-12 text-center" >
            <h1>
                <?php if ($p_status == '1') {
                    echo "Payment : Successful<br>Please check your email for further details.";
                }elseif($p_status == 'free'){
                    echo "Successfully completed:<br>please check email for ticket details";
                }else{ 
                    echo "Payment : Failed";
                } ?>
            </h1>

            <br><br><br><br>
            <a href="<?= base_url() ?>main/communityEvents" id="pop-events" class="btn custom-button-bl" data-dismiss="modal" style="outline:none;">EVENTS</a>
        </div>
        
    </div>

<?php include 'account_master_end.php';?>