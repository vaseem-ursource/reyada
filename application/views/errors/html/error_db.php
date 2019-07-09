<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$CI =& get_instance();
if( ! isset($CI))
{
    $CI = new CI_Controller();
}
$CI->load->helper('url');
$CI->load->library('ion_auth');
$CI->load->library('cart');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="pizza, delivery food, fast food, sushi, take away, chinese, italian food">
    
	<title>Caesars - 404</title>

	<link rel="shortcut icon" href="<?= base_url() ?>img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?= base_url() ?>img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?= base_url() ?>img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?= base_url() ?>img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?= base_url() ?>img/apple-touch-icon-144x144-precomposed.png">
    
    <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- BASE CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>css/base.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url() ?>css/custom-style.css" rel="stylesheet">
	
	<script type="text/javascript" src="<?= base_url() ?>js/jquery-2.2.4.min.js"></script>

</head>
<body>

<header style="background-color: rgba(0, 0, 0, 0.9);" >
    <div class="container-fluid">
        <div class="row">
            <div class="col--md-4 col-sm-4 col-xs-4">
                <a href="<?= base_url() ?>" id="logo">
                <img src="<?= base_url() ?>img/logo_main.png" height="35" alt="Joud Dates Logo" data-retina="true" class="hidden-xs">
                <img src="<?= base_url() ?>img/logo_mobile.png" height="23" alt="Joud Dates Logo" data-retina="true" class="hidden-lg hidden-md hidden-sm">
                </a>
            </div>
            <nav class="col--md-8 col-sm-8 col-xs-8">
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
            <div class="main-menu">
                <div id="header_menu">
                    <img src="<?= base_url() ?>img/logo_main.png" height="23" alt="" data-retina="true">
                </div>
                <a href="#" class="open_close" id="close_in"><i class="fa fa-times"></i></a>
                <ul>
                    <?php if ($CI->ion_auth->logged_in()) { ?>
                        <li>
                            <a href="<?= base_url() ?>main/my_account" >My Account</a>
                        </li>
                    <?php } ?>

                    <?php if ($CI->ion_auth->logged_in()) { ?>
                        <li><a href="<?= base_url() ?>main/track_order">Track Order</a></li>
                        <li class="submenu">
                            <li><a href="javascript:void(0);" class="show-submenu" >Active Splits<i class="icon-down-open-mini"></i></a>
                            <ul>
                                <?php
                                if (!empty($split_payments)) {
                                    foreach ($split_payments as $split_row) { ?>
                                        <li>
                                            <a href="<?= base_url() ?>main/split_payment_status?split_transaction_id=<?= urlencode($split_row->split_trans_id); ?>"><strong><?= ucfirst($split_row->name) . ' (' . date('H:i:s', strtotime($split_row->start_time)) . ')'; ?></strong></a>
                                        </li>
                                    <?php }
                                } else { ?>
                                    <li><a><strong>No Active Split Available</strong></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <?php } else { ?>

                        <li><a href="<?= base_url() ?>main/track_order">Track Order</a></li>
                        <?php } ?>

                        <li><a href="#0" data-toggle="modal" data-target="#customer_support">Customer Support</a></li>

                        <?php if (sizeof($CI->cart->contents()) == '0') { ?>
                            <li><a id="itemsss" class="no-item cart_button_proceed" style="cursor: pointer;">
                                    <div class="cart1"><i class="cart_img fa fa-shopping-cart"></i><span
                                            class="cartnum"><?php echo sizeof($CI->cart->contents()); ?></span></div>
                                </a></li>
                        <?php } else { ?>
                            <li><a id="itemed" class="yesh cart_button_proceed" style="cursor: pointer;">
                                    <div class="cart1"><i class="cart_img fa fa-shopping-cart"></i><span
                                            class="cartnum"><?php echo sizeof($CI->cart->contents()); ?></span></div>
                                </a></li>
                        <?php } ?>
                        <?php if ($CI->ion_auth->logged_in()) { ?>
                            <li>
                                <form action="<?= base_url() ?>main/logout" method="get">
                                    <button class="btn btn-register"><i class="fa fa-logout"></i> Logout</button>
                                </form>
                            </li>
                        <?php } else { ?>
                            <li>
                                <button class="btn btn-register dan" data-toggle="modal" data-target="#login"><i class="fa fa-sign-in"></i> Login
                                </button>
                            </li>
                            <li>
                                <form action="<?= base_url() ?>main/register" method="get">
                                    <button class="btn btn-register"><i class="fa fa-user"></i> Register</button>
                                </form>
                            </li>
                        <?php } ?>

                        
                </ul>
            </div><!-- End main-menu -->
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
    </header>

    <div style="height:80px"> 
    </div><!-- End subheader -->

	

    <?php if (!$CI->ion_auth->logged_in()) { ?>
    <div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form name="" id="login" method="POST" action="<?= base_url('auth/login'); ?>" enctype="multipart/form-data"
                  class="form-horizontal">
                <!-- Modal content-->
                <div class="modal-content modal-popup">
                    <div class="well">
                        <div class="con">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" >Login</h4>
                            </div>
                            <div class="modal-body" style="     padding: 0px; ">
                                <div class="col-lg-12" style="margin-top:20px;">
                                    <div class="form-group ">
                                        <input type="text" name="email" placeholder="Email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <input type="password" name="password" placeholder="Password" class="form-control">
                                    </div>
                                </div>
                                <div class="">

                                    <div class="col-lg-12 checkbox">
                                        <input id="remember" type="checkbox" value="1" name="remember"
                                               style="margin-right:5px">
                                        <label class="label-radio oswald-font bold font22" for="remember">Remember
                                            Password</label>

                                        <div class=" pull-right">
                                            <a href="<?= base_url('main/forgot_password'); ?>">Forgot Password?</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 " style="margin-bottom: 5px;">
                                        <p class="pull-right">
                                            <a class="btn btn-primary social-login-btn social-facebook" href="<?= base_url('auth/loginfacebook'); ?>"><i class="fa fa-facebook"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-simple lognow btn-block"
                                        type="submit">
                                    Login Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php } ?>

<div class="modal fade" id="customer_support" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="color:white; text-align: center;">Customer Support</h4>
            </div>
            <div class="modal-body" style=" text-align: center; ">
                <div class="col-lg-12 center">
                    <span>+956 000 456 1234<br></span>
                </div>
                <div class="clearfix"></div>


            </div>
            <div class="modal-footer">
                <button class="btn btn-simple lognow btn-block"
                        type="submit" data-dismiss="modal">
                    Ok
                </button>
            </div>
        </div>
    </div>
</div><!-- End modal -->   


<div id="promotions" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content modal-popup">
            <div class="con">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <ul class="tabs">
                        <li class="tab-link modal-title current" data-tab="tab-1"><h4 >Discount</h4></li>
                        <li class="tab-link modal-title" data-tab="tab-2"><h4 >Voucher</h4></li>
                    </ul>
                </div>
                <div class="modal-body" style="     padding: 0px; ">

                    <div id="tab-1" class="tab-content current">
                        <div class="row" style="margin-top: 30px;">
                            <div class='list-group gallery'>
                                <?php if (isset($discount_restaurants) && !empty($discount_restaurants)) {
                                    $i = 1;
                                    foreach ($discount_restaurants as $row) { ?>

                                        <div class='col-sm-3 col-xs-6 col-md-3 col-lg-3' style="margin-top: 10px;">
                                            <a href="<?= base_url() ?>restaurant/<?= $row->slug ?>" class="cart "><img class="pro_img" src="<?= $row->logo_url ?>"><span
                                                    class="pronum"><?php echo $i; ?></span></a>

                                        </div>

                                        <?php $i++;
                                    }
                                }else{
                                    echo 'No Promotions available';
                                } ?>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-content">
                        <div class="row" style="margin-top: 30px;">
                            <div class='list-group gallery'>
                                <?php if (isset($voucher_restaurants) && !empty($voucher_restaurants)) {
                                    $i = 1;
                                    foreach ($voucher_restaurants as $row) { ?>

                                        <div class='col-sm-3 col-xs-6 col-md-3 col-lg-3' style="margin-top: 10px;">
                                            <a href="<?= base_url() ?>restaurant/<?= $row->slug ?>" class="cart "><img class="pro_img" src="<?= $row->logo_url ?>"><span
                                                    class="pronum"><?php echo $i; ?></span></a>

                                        </div>

                                        <?php $i++;
                                    }
                                }else{
                                    echo 'No Promotions available';
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="your_credit" tabindex="-2" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup" style="margin-top: 150px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" >Credits</h4>
            </div>
            <div class="modal-body" style=" text-align: center; ">
                <div class="media" style="margin-bottom: 20px;margin-top: 10px;">
                    <a class="" href="#"> </a>

                    <div class="media-body" style="padding-top: 7px;">
                        <h4>Credit in bag: <?php if (!empty($user_points)) {
                                echo $user_points;
                            } ?> KD</h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-simple lognow btn-block"
                        type="submit" data-dismiss="modal">
                    Ok
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Content ================================================== -->
<div class="container margin_60_35 table-border" style="height:75vh" >
	<div id="container">
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
	</div>
</div><!-- End container-fluid  -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <h3>Secure payments with</h3>
                <p>
                    <?php  if(!empty($payment_method_db)){
                        foreach($payment_method_db as $payment_method){
                    ?>
                    <a style="cursor: pointer;"> <img style="height: 40px;width: 70px;float: left;padding:0 4px 0 0" class="img-responsive"
                                      src="<?=$payment_method->image_url; ?>"></a>
					<?php }}else{?>
						<a style="cursor: pointer;"> <img style="height: 40px;width: 70px;float: left;padding:0 4px 0 0" class="img-responsive"
									  src="<?= base_url() ?>admin_panel/uploads/payment_method_images/ltr94.png"></a>
									  
						<a style="cursor: pointer;"> <img style="height: 40px;width: 70px;float: left;padding:0 4px 0 0" class="img-responsive"
									  src="<?= base_url() ?>admin_panel/uploads/payment_method_images/sqnoi.png"></a>
									  
						<a style="cursor: pointer;"> <img style="height: 40px;width: 70px;float: left;padding:0 4px 0 0" class="img-responsive"
                                      src="<?= base_url() ?>admin_panel/uploads/payment_method_images/wlwig.png"></a>
					<?php } ?>
                </p>
            </div>
            <div class="col-md-4 col-sm-4">
                <h3>About</h3>
                <ul>
                    <li><a href="<?= base_url() ?>main/about_us">About us</a></li>
                    <li><a href="<?= base_url() ?>main/feedback">Feedback</a></li>
                    <!-- <li><a href="<?= base_url() ?>main/faq">FAQ</a></li> -->
                    <li><a href="<?= base_url() ?>main/privacy_policy">Privacy</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4" id="newsletter">
                <h3>Contact Us</h3>
                <p>
                    Plot No 447-44B General <br> Stand Ravi Link Road Kuwait
                </p>
            </div>
        </div><!-- End row -->
        
    </div><!-- End container -->
	</footer>
	
</body>
</html>