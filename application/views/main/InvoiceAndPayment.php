<?php include('account_master_start.php');?>

    <div style="border-bottom:1px solid #707070"> 
        <span class="text-left h4" style="color:#000000;">Invoice and Payments</span>  
    </div>
    <div class="pt-5 mt-2">
        <?php if(!empty($invoices)){ ?>
            <table class="table table-striped h6 table-borderless" style="color:#000000;">
                <thead>
                    <tr>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($invoices as $invoice){ ?>
                        <tr class="border-top border-secondary">
                            <td><b><?= $invoice->InvoiceNumber ?></b> - <?= date('m/d/Y', strtotime($invoice->CreatedOn)) ?> <img src="<?= base_url('image/cloud_down.png');?>" alt="" width="15px" class="pull-right"></td>
                            <td>KD <?= $invoice->TotalAmount ?></td>
                            <?php if($invoice->Paid) { ?>
                                <td style="color:#6FBC89";><i class="fa fa-check" style="font-size:10px"></i>   Paid on <?= date('l, M d, Y', strtotime($invoice->PaidOn)) ?> </td>
                            <?php }else{ ?>
                                <td style="color:#b8340c";><i class="fa fa-check" style="font-size:10px"></i>   Due Date <?= date('l, M d, Y', strtotime($invoice->DueDate)) ?> </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                        
                </tbody>
            </table>
        <?php } else{ ?>
            <table class="table table-striped h6 table-borderless" style="color:#000000;">
                <thead>
                    <tr style="background-color:#F5F5F5";>
                    <td><img src="<?= base_url('image/ii.png');?>" alt="" width="20px"> <span class="pl-3">You have no invoices or payments</span></td>
                    </tr>
                </thead>
            </table>
        <?php } ?>
    </div>
<?php include('account_master_end.php');?>
       

