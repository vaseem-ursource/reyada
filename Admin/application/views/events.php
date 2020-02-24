
<?php include('header.php');?>
<!-- Datatable css -->
<link href="<?= base_url()?>assets\vendors\datatables.net-bs\css\dataTables.bootstrap.css" rel="stylesheet">

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2><br><br>Events<small></small>
        
        <div class="clearfix"></div>
                        
        </div>
        
        <div class="x_content">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#reyada">Reyada - Crystal Tower</a></li>
                <li><a data-toggle="tab" href="#mabane">Reyada - Mabane Building</a></li>
            </ul>

            <div class="tab-content">
                <div id="reyada" class="tab-pane fade in active">
                    <div class="x_content">
                        <table class="table table-striped table-bordered datatable-sort">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Event Name</th>
                                    <th>Price</th>
                                    <th>Location</th>
                                    <th>No. of Attendees</th>
                                    <th>Start Date</th>
                                    <th>View</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php if(isset($events['reyada']) && !empty($events['reyada'])){ ?>
                                    <?php $i = 1; ?>
                                    <?php foreach ($events['reyada'] as $row){ ?> 
                                        <tr>
                                            <td><?= $i;?></td>
                                            <td><?= $row->Name;?></td>
                                            <td><?= ((int)$row->MostExpensivePrice > 0) ? $row->MostExpensivePrice : "Free";?></td>
                                            <td><?= $row->Location;?></td>
                                            <td><?= (int)$row->no_of_attendees;?></td>
                                            <td><?= $row->StartDate;?></td>

                                            <td>
                                                <a href="<?= base_url("Events/event_attendees/".$row->Id) ?>" data-toggle="tooltip" data-placement="top" title="View Attendee Details"><i class="fa fa-eye fa-lg"></i></a>          
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="mabane" class="tab-pane fade">
                    <div class="x_content">
                        <table id='datatable-sort' class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Event Name</th>
                                    <th>Price</th>
                                    <th>Location</th>
                                    <th>No. of Attendees</th>
                                    <th>Start Date</th>
                                    <th>View</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php if(isset($events['mabane']) && !empty($events['mabane'])){ ?>
                                    <?php $i = 1; ?>
                                    <?php foreach ($events['mabane'] as $row){ ?> 
                                        <tr>
                                            <td><?= $i;?></td>
                                            <td><?= $row->Name;?></td>
                                            <td><?= ((int)$row->MostExpensivePrice > 0) ? $row->MostExpensivePrice : "Free";?></td>
                                            <td><?= $row->Location;?></td>
                                            <td><?= (int)$row->no_of_attendees;?></td>
                                            <td><?= $row->StartDate;?></td>

                                            <td>
                                                <a href="<?= base_url("Events/event_attendees/".$row->Id) ?>" data-toggle="tooltip" data-placement="top" title="View Attendee Details"><i class="fa fa-eye fa-lg"></i></a>          
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<?php include('footer.php');?>
