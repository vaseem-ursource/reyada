<?php include('account_master_start.php');?>

    <div style="border-bottom:1px solid #707070"> 
        <span class="text-left h4" style="color:#000000;">Invoice and Payments</span>  
    </div>
    <div class="pt-5 mt-2">
        <?php if(!empty($invoices)){ ?>
            <table class="table table-striped h6 table-borderless" style="color:#000000;">
                <thead>
                    <tr>
                    <th colspan="2" >Date</th>
                    <th>Amount</th>
                    <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($invoices as $invoice){ ?>
                        <tr class="border-top border-secondary">
                            <td>
                                <b>#<?= $invoice->InvoiceNumber ?></b> - <?= date('m/d/Y', strtotime($invoice->CreatedOn)) ?> <br>
                                <?= (!$invoice->Paid) ? '<small>To be paid by ' . date('d M Y', strtotime($invoice->DueDate)) . '</small>' : ''; ?>
                            </td>
                            <td><a class="gen-invoice" href="<?= $this->config->item('api_base_url') ?>en/invoices/print?guid=<?= $invoice->UniqueId ?>"><img src="<?= base_url('image/cloud_down.png');?>" alt="" width="15px" class="pull-right"></td>
                            <td>KD <?= $invoice->TotalAmount ?></td>
                            <?php if($invoice->Paid) { ?>
                                <td colspan="2" style="color:#6FBC89";><i class="fa fa-check" style="font-size:10px"></i>   Paid on <?= date('l, M d, Y', strtotime($invoice->PaidOn)) ?> </td>
                            <?php }else{ ?>
                                <td style="color:#b8340c";><i class="fa fa-exclamation-circle" ></i> Pending</td>
                                <td>
                                    <button 
                                        class="pay-hesabe" 
                                        data-invoiceid="<?= $invoice->Id ?>" 
                                        data-invoiceamt="<?= $invoice->TotalAmount ?>" 
                                        style="border: 0px;background-color: transparent;" >
                                        Pay Hesabe <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i>
                                    </button>
                                </td>
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

    <script>
        $(document).ready(function(){
            var base_url = '<?= base_url(); ?>';
            $('.pay-hesabe').click(function(){
                $('.whole_div').show();
                invoiceid = $(this).attr('data-invoiceid');
                invoiceamt = $(this).attr('data-invoiceamt');
                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: base_url + 'payment/pay_hesabe',
                    data: 'invoiceid='+invoiceid+'&invoiceamt='+invoiceamt,
                    success: function(data) {
                        if(data.status != 200){
                            toastr.error(data.message);
                        }else{
                            toastr.success(data.message);
                            window.location.replace(data.url)
                        }
                        $('.whole_div').hide();
                    },
                    error: function(jqxhr, status, error) {
                        $('.whole_div').hide();
                        console.log(jqxhr);
                        console.log(status);
                        console.log(error);
                    }
                });
            });

            $('.gen-invoice').click(function(e){
                e.preventDefault();
                $('.whole_div').show();
                var base_url = '<?= base_url(); ?>';
                var data_url = $(this).attr('href');
                
                $.ajax({
                    type: 'POST',
                    url: base_url + 'main/get_invoice_pdf',
                    data: 'post_url='+data_url,
                    dataType: 'json', 
                    success: function(data){
                        if(data.msg == 500){
                            toastr.error("Please login with authentic user.");
                        }else{
                            window.location.replace(data.msg);
                        }
                        $('.whole_div').hide();
                    },
                    error: function(jqxhr, status, error) {
                        $('.whole_div').hide();
                        console.log(jqxhr);
                        console.log(status);
                        console.log(error);
                    }
                }); 
            });
        });
    </script>
<?php include('account_master_end.php');?>
       

