<style>
.list-group-item{
    border:0px solid rgba(0,0,0,.125);
}
.list-group-item-success{
    color: #000;
    background-color: #fff;
    text-decoration:none;
}
a.list-group-item{
    color: #000;
}
a:hover.list-group-item{
    color: #000;
    outline: none;
    text-decoration: none;
}
</style>

<section id="team" class="pb-1 mt-5"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-12 row mb-4">
                <div class="col-3"></div>
                <div class="col-9 p-0">
                    <img src="<?= base_url('image/location.png');?>" alt="" width="25px"><span> CRYSTAL TOWER</span>
                    <span class="h3 pull-right">Booking.</span>
                </div>
            </div>
            <div class="section-header pb-1 col-md-3 pl-0"> 
            <div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-12 wow fadeInUp p-1">
                    <div class="container mt-3">
                      <div class="accordian">
                        <ul>
                          <li><input type="checkbox" checked=""><i></i>
                           <h6><span style="border-left:1px solid #AF0E17;padding:4px"></span> Your Account </h6>
                            <div class="artlist">
                            <a href="<?= base_url("main/profile#profilepage") ?>" class="list-group-item"> Your Photo </a>
                            <a href="<?= base_url("main/profile#Personal") ?>" class="list-group-item"> Personal Details </a>
                            <a href="<?= base_url("main/profile#professional") ?>" class="list-group-item"> Professional Profile </a>
                            <a href="<?= base_url("main/profile#social") ?>" class="list-group-item"> Social Network </a>
                            <a href="<?= base_url("main/profile#password") ?>" class="list-group-item"> Password </a>
                            <a href="<?= base_url("main/profile#notification") ?>" class="list-group-item"> Notifications </a>
                           
                            </div>
                          </li>
                          <li><input type="checkbox" checked=""><i></i>
                           <h6><span style="border-left:1px solid #AF0E17;padding:4px"></span> Plans & Benefits </h6>
                            <div class="artlist">
                            <a href="<?= base_url("main/plan#yourplan") ?>" class="list-group-item"> Your Plan </a>
                            <a href="<?= base_url("main/plan#benefits") ?>" class="list-group-item"> Your Benefits </a>
                            <a href="<?= base_url("main/plan#additional") ?>" class="list-group-item"> Your Additional Products </a>
                            </div>
                          </li>
                          <li><input type="checkbox" checked=""><i></i>
                           <h6><span style="border-left:1px solid #AF0E17;padding:4px"></span> Billing </h6>
                            <div class="artlist">
                            <a href="<?= base_url("main/invoice") ?>" class="list-group-item"> Invoices & Payments</a>
                            </div>
                          </li>

                          <a href="<?= base_url("main/booking") ?>"> <li> <h6><span style="border-left:1px solid #AF0E17;padding:4px"></span> Your Bookings </h6></a>
                          
                          </li>
                         
                          <li><a href="javascript:;" class=""> Sign Out <i class="fa fa-angle-right custom pull-right"></i> </a></li>
                          </div>
                          </div>
                          </div>
   
</div> 
</div>
            </div> 
            <div class="section-header pb-1 col-md-9"> 

          