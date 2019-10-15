<?php include('account_master_start.php');?>

    <!-- <span class="text-left text-dark pt-2 pl-2 h4">Your plan</span>  -->
    <div style="border-bottom:1px solid #707070"> 
        <span class="text-left h3" style="color:#000000;">Your Bookings at <?= $location_name ?>
            <div class="dropdown" style="float:right;position:relative;top:-10px;">
            <button type="button" style="width:150px;border:none;" class="btn custom-button-bl dropdown-toggle pull-right" data-toggle="dropdown">
                Change Location
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?=base_url()?>main/booking/reyada">Reyada Crystal Tower</a>
                <a class="dropdown-item" href="<?= base_url()?>main/booking/reyadamabane">Reyada Mabane Building</a>
            </div>
        </div>
      </span>  
    </div>
    <div class="pt-5 mt-2">
    <table class="table table-striped table-borderless" style="color:#000000;">
        <thead>
            <tr>
            <th>Date</th>
            <th>Hour</th>
            <th>Resource</th>
            </tr>
        </thead>
        <tbody>
        <?php if(!empty($resources)){
            foreach($resources as $resource){?>
            <tr class="border-top border-secondary">
                <td><?= substr($resource->FromTime,0,10)?></td>
                <td><?= substr($resource->FromTime,11,16).' - '.substr($resource->ToTime,11,16)?></td>
                <td><?= $resource->ResourceName?></td>
            </tr>
        <?php }
        }else{?>
            <tr class="border-top border-secondary">
                <td>You have no upcoming bookings</td>
                <td></td>
                <td></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
    </div>
    <div>
        <h6 style="color:#000000;">This list shows bookings in the upcoming 90 days, use the calender to see all the bookings</h6>
        <a href="#" class="btn custom-button-bl" id="bookingbutton">Calendar</a>
    </div>
<?php include('account_master_end.php');?>
       

