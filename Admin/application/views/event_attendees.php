<?php include('header.php');?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><br><br>Events Attendee<small>Details</small>
            <div class="clearfix"></div>
        </div>
        
        <div class="x_content">
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
