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
<section id="team" class="pb-1 mt-5" style="min-height:80vh">
    <div class="container">
        <div class="row">
            <div class="col-12 row mb-4">
                <div class="col-12 text-center">
                    <img src="<?=base_url('image/location.png');?>" alt="" width="25px"><span> CRYSTAL TOWER</span>
                    <span class="h3 pull-right">Booking.</span>
                </div>
            </div>

            <div class="section-header pb-1 col-md-12 pl-0">
				<div style="border-bottom:1px solid #707070">
					<span class="h6" style="color:#000000;">Home / Events</span>
					<span class="h3 pl-5 mx-auto" style="color:#000000; margin-left: 25% !important;">Events at Reyada</span>
					<span class="h6 float-right" style="color:#000000;">
						<a href="<?=base_url()?>main/communityEvents" style="color:#000000;" class="pl-3 h6">All events</a>
						<a href="<?=base_url()?>main/communityEvents?type=past" style="color:#000000;" class="pl-3 h6">Past events</a>
						<a href="<?=base_url()?>main/communityEvents?type=upcoming" style="color:#000000;" class="pl-3 h6">upcoming events</a>
					</span>
				</div>
				<div class="container pt-4 px-0">
					<div class="row p-0">
						<?php if (!empty($events)) {
							foreach ($events as $event) {?>
								<div class="col-sm-4">
									<div class="card">
										<img class="card-img-top" src="<?= 'https://copyofreyadatestaccount.spaces.nexudus.com/en/events/getsmallimage?id='.$event->id ?>" height="180px" alt="Card image cap">
										<div class="card-body">
											<span class="card-text h6"><?=date("Y-m-d H:i:s", strtotime($event->start))?></span>
											<h6 class="card-text pt-1"><b><?=$event->title?></b></h6>
											<span class="card-text h6"><?=$event->location?></span>
											<!-- <h6 class="card-text">0.00 KD</h6> -->
										</div>
									</div>
								</div>
							<?php }
						}?>
					</div>
				</div>


<?php include 'account_master_end.php';?>

