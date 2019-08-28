<style>
  .group 			  {
  position:relative;
  margin-bottom:20px;
}
.form-input 				{
  font-size:14px;
  padding:10px 10px 2px 5px;
  display:block;
  width:100%;
  border:none;
  border-bottom:1px solid #757575;
}
.form-input:focus 		{ outline:none; }

/ LABEL ======================================= /
.form-label 				 {
  color:#999;
  font-size:14px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:5px;
  /* top:15px;
  transition:0.2s ease all;
  -moz-transition:0.2s ease all;
  -webkit-transition:0.2s ease all; */
}





/ active state /
.form-input:focus  .bar:before, .form-input:focus  .bar:after {
  width:50%;
}

/ active state /
/* .form-input[required]:valid ~ .highlight {
  -webkit-animation:inputHighlighter 0.3s ease;
  -moz-animation:inputHighlighter 0.3s ease;
  animation:inputHighlighter 0.3s ease; */
}

.form-select {
	height: 47px;
    background: transparent;
}



label:not(.test_container) {
   color: #999;
   font-size: 12px;
   font-weight: normal;
   position: absolute;
pointer-events: none;
text-align: left;
   left: 0px;
top: -10px;
bottom: 0px;
   / transition: all 0.2s ease;  /
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
      <div class="row">
        <div class="section-header pb-1 col-md-12 pl-0">
        <div style="border-bottom:1px solid #707070">
                <span class="h6" style="color:#000000;">
                <a href="<?=base_url()?>main/communityEvents?type=all" style="color:#000000;" class="pl-2 h6">All events</a>
                <a href="<?=base_url()?>main/communityEvents?type=past" style="color:#000000;" class="pl-2 h6">Past events</a>
                <a href="<?=base_url()?>main/communityEvents?type=upcoming" style="color:#000000;" class="pl-2 h6">upcoming events</a>
                </span>
                <span class="h3 mx-auto" style="color:#000000; margin-left: 10% !important;">Events at <?= $place ?></span>
                <span class="h3 float-right">
                <a href="<?=base_url()?>main/communityEvents?type=all&location=reyada" style="color:#000000;" class="pl-3 h6"><?= $locations[0]->Name ?></a>&nbsp;&nbsp;&nbsp;|
                <a href="<?=base_url()?>main/communityEvents?type=all&location=reyadamabane" style="color:#000000;" class="pl-3 h6"><?= $locations[1]->Name ?></a>
                </span>
            </div>
          <div class="container pt-4 px-0">
            <div class="row p-0">
              <?php if (!empty($events)) {
                foreach ($events as $event) {?>
                  <div class="col-sm-4 col-xs-12">
                    <div class="card">
                      <img class="card-img-top" src="<?= 'https://reyada.spaces.nexudus.com/en/events/getsmallimage?id='.$event->Id ?>" height="180px" alt="Card image cap">
                      <div class="card-body">
                        <span class="card-text h6"><?=date("Y-m-d H:i:s", strtotime($event->StartDate) - 10800)?></span>
                        <h6 class="card-text pt-1"><b><?=$event->Name?></b></h6>
                        <span class="card-text h6"><?=$event->Location?></span>
                        <h6 class="card-text"><?=$event->MostExpensivePrice?> KD</h6>
                      </div>
                    </div>
                  </div>
                <?php }
              }
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

