<?php include('header.php');?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2><br><br>Event<small>Tickets</small>
        
        <div class="clearfix"></div>
                        
        </div>
        
        <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <!-- <th>Parent Category</th> -->
                    <th>Name</th>
                    <th>Email</th>
                    <th>Event Name</th>
                    <th>Price</th>
                    <th>Location</th>
                    <th>No. of Attendees</th>
                    <th>Payment Ref.</th>
                    <th>Created on</th>
                    <th>View</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if(isset($event_tickets) && !empty($event_tickets)){ ?>
                        <?php foreach ($event_tickets as $row){ ?> 
                            <tr>
                                <td><?= $row->name;?></td>
                                <td><?= $row->email;?></td>
                                <td><?= $row->event_name;?></td>
                                <td><?= $row->event_price;?></td>
                                <td><?= $row->event_location;?></td>
                                <td><?= $row->no_of_attendees;?></td>
                                <td><?= $row->payment_trans ?> <?= ($row->payment_status == 1) ? "(Paid)" : "";?></td>
                                <td><?= $row->created_date;?></td>

                                <td>
                                    <a href="<?=base_url('Events/details/').$row->id?>" data-toggle="tooltip" data-placement="top" title="View Details"><i class="fa fa-eye fa-lg"></i></a>          
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
<?php include('footer.php');?>
