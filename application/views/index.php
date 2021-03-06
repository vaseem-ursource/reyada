<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $title ;?></title>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@reyadakwt">
    <meta name="twitter:creator" content="@reyadakwt">
    <meta name="twitter:title" content="<?= $title; ?>">
    <meta name="twitter:description" content="<?= $content ;?>">
    <?php if(isset($image)){?>
    <meta name="twitter:image" content="<?= base_url().'admin/'.$image ;?>">
    <?php }?>
    <meta property="og:title" content="<?= $title; ?>" />
    <meta property="og:description" content="<?= $content ;?>" />
    <?php if(isset($thumb_nail)){?>
    <meta property="og:image" content="<?= base_url().'admin/'.$thumb_nail ;?>" />
    <?php }?>
    <meta content="Work, Innovate, Collaborate." name="keywords">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php include("header_links.php");?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

    <?php $user_info = $this->session->userdata('user_info') ?>
    <?php $is_logged_in = $this->session->userdata('is_logged_in') ?>
    <?php $has_credit = $this->session->userdata('has_credit')?>

    <?php include $header_name . '.php'; ?>
    <div class="content-wrapper">
          <div class="whole_div img-rounded"
                style="width:100%;height:100%;border-radius:5%;display: none;position: fixed;z-index: 99999;background-color:rgba(0,0,0,0.1); background:url(<?= base_url() ?>img/loading.gif) no-repeat center center;">
          </div>
          <?php include $folder_name . '/' . $file_name . '.php'; ?>
    </div>
    <footer id="footer" class="section-bg p-0">
    <div class="container-fluid section-bg pb-4 row" style="margin:0px;">
      <div class="col-md-6">
          <div class="copyright text-left pl-5 text-dark">
              <strong>Reyada</strong> | Collaborative workspace.
          </div>
      </div>
      <div class="col-md-6">
          <div class="copyright footer-pos pr-5">
            <a href="https://www.facebook.com/reyadaspaces/?view_public_for=999326720117412" target="_blank"><i class="fa fa-facebook px-2 text-dark" style="font-size: 22px"></i></a>
            <a href="https://www.instagram.com/reyada.co/?hl=en" target="_blank"><i class="fa fa-instagram px-2 text-dark" style="font-size: 22px"></i></a>
            <a href="http://www.twitter.com/reyadakwt" target="_blank"><i class="fa fa-twitter px-2 text-dark" style="font-size: 22px"></i></a>
      </div>
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <?php include("footer_links.php");?>
</body>
</html>