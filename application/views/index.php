<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Reyadah</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php include("header_links.php");?>
</head>
<body>
    <?php include $header_name . '.php'; ?>
    <div class="content-wrapper">
          <div class="whole_div"
                style="width:100%;height:100%;display: none;position: fixed;z-index: 99999;background-color:rgba(0,0,0,0.1); background:url(<?= base_url() ?>img/loading.gif) no-repeat center center;">
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
          <div class="copyright text-right pr-5">
            <a href="#"><i class="fa fa-facebook px-2 text-dark" style="font-size: 22px"></i></a>
            <a href="#"><i class="fa fa-instagram px-2 text-dark" style="font-size: 22px"></i></a>
            <a href="#"><i class="fa fa-linkedin px-2 text-dark" style="font-size: 22px"></i></a>
            <a href="#"><i class="fa fa-twitter px-2 text-dark" style="font-size: 22px"></i></a>
      </div>
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <?php include("footer_links.php");?>
</body>
</html>