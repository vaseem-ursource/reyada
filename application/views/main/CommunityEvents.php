<style>
  .evnt-heading{
    color:#000000;
    position:relative;
    margin-top:-8px;
  }
  @media (max-width: 991px) {
  .evnt-heading{
    color:#000000;
    position:relative;
    margin-top:20px;
  }
}
</style>
<?php $location = $this->session->userdata('location'); 

  if($location == 'reyada'){
    $place = 'Crystal Tower';
  }
  else if($location == 'reyadamabane') {
    $place = 'Mabane Building';
  }
  else{
    $place = 'Crystal Tower';
  }
?>
<section id="team" class="pb-1 mt-5" style="min-height:80vh">
<div class="container">
  <div class="row"  style="border-bottom:1px solid black;">
      <div class="col-md-4 col-xs-4 text-center">
        <a href="<?=base_url()?>main/communityEvents?type=all&location=reyada" style="color:#000000;"><?= $locations[0]->Name ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="<?=base_url()?>main/communityEvents?type=all&location=reyadamabane" style="color:#000000;"><?= $locations[1]->Name ?></a>
      </div>
      <div class="col-md-4 col-xs-4 text-center evnt-heading"><h2>Events</h2></div>
      <div class="col-md-4 col-xs-4 text-center">
        <a href="<?=base_url()?>main/communityEvents?type=all" style="color:#000000;" >All Events</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="<?=base_url()?>main/communityEvents?type=past" style="color:#000000;" >Past Events</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="<?=base_url()?>main/communityEvents?type=upcoming" style="color:#000000;" >Upcoming Events</a>
      </div>
  </div>
  <br>
</div>
<div class="container">
  <div class="row">
  <?php if (!empty($events)) {
    foreach ($events as $event) {?>
      <div class="col-sm-4 col-xs-12" style="position:relative;margin-top:5px;">
        <div class="card">
          <img class="card-img-top" src="<?= "https://$img_loc.spaces.nexudus.com/en/events/getsmallimage?id=".$event->Id ?>" height="180px" alt="Card image cap">
          <div class="card-body">
            <span class="card-text h6"><?=date("Y-m-d h:i a", strtotime($event->StartDate))?></span>
            <h6 class="card-text pt-1"><b><?=$event->Name?></b></h6>
            <span class="card-text h6"><?=$event->Location?></span>
            <h6 class="card-text"><?= $event->MostExpensivePrice ?> KD</h6>
            <?php if($event->HasTickets && !empty($event->TicketsPage)) { ?>
              <a class="btn custom-button-bl" style="width:100px;" href="<?= base_url() ?>main/book_events?ticketUrl=<?= $event->TicketsPage ?>"  style="color:black;" class="float-left">Get Tickets</a>
            <?php }else{ ?>
              <p class="text-warning" ><i class="fa fa-warning" ></i>Tickets not available</p>
            <?php } ?>
          </div>
        </div>
      </div>
      <?php }}
        else{?>
        <div class="col-md-12 text-center" style="position:relative;top:100px;">
            <h2><i class="fa fa-calendar-o text-danger"></i></h2>
            <h3 style="color:black;">There are no events to display</h3>
            <p> 
              <a href="<?=base_url()?>main/communityEvents?type=past">check what you missed</a>
            </p>
        </div>
        <?php }?>
    </div>
</div>
<?php include 'account_master_end.php';?>
<script>
$(function(){
    $('.loc').click(function(){

        $('.loc.loc-active').removeClass('loc-active');
        $(this).addClass('loc-active');
    });
});
</script>

