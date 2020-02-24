<?php include('header.php');?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><br><br>Event Ticket<small>Details</small>
            <div class="clearfix"></div>
        </div>
        
        <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
                
                <tbody>
                    <tr>
                        <td>Event Name</td>
                        <td><?= $event_details->event_name;?></td>
                    </tr>

                    <tr>
                        <td>Event Price</td>
                        <td><?= $event_details->event_price;?></td>
                    </tr>

                    <tr>
                        <td>Event Desc</td>
                        <td><?= $event_details->event_desc;?></td>
                    </tr>
                    <tr>
                        <td>Event Location</td>
                        <td><?= $event_details->event_location;?></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?= $event_details->name;?></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td><?= $event_details->email;?></td>
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td><?= $event_details->mobile;?></td>
                    </tr>
                    <tr>
                        <td>No. of Attendees</td>
                        <td><?= $event_details->no_of_attendees;?></td>
                    </tr>
                    <tr>
                        <td>Payment Status</td>
                        <td><?= ($event_details->payment_status == 1) ? "Paid" : ""; ?></td>
                    </tr>
                    <tr>
                        <td>Payment Reference</td>
                        <td><?= $event_details->payment_trans;?></td>
                    </tr>
                    <tr>
                        <td>Created on</td>
                        <td><?= $event_details->created_date;?></td>
                    </tr>

                </tbody>
            </table>

            <h2>Attendees<h4>
            <?php if(!empty($event_attendee)){ ?>
                <table class="table table-striped table-bordered">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>E-Mail</th>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($event_attendee as $row) { ?>
                            <tr>
                                <td><small><?= $i;?></small></td>
                                <td><small><?= $row->name;?></small></td>
                                <td><small><?= $row->email;?></small></td>
                            </tr>
                            <?php $i++; ?>
                        <?php } ?>
                        
                    </tbody>
                </table>
            <?php } ?>
        </div>
    </div>
    </div>
</div>
<?php include('footer.php');?>
