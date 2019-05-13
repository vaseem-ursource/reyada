<!DOCTYPE html>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reyadah</title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets/vendors/nprogress/nprogress.css');?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url('assets/vendors/animate.css/animate.min.css');?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/build/css/custom.min.css');?>" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <!-- <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a> -->

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <?php 
            if($status=$this->session->flashdata('warning')):
            $status_class=$this->session->flashdata('warning')
            ?>
            <div class="alert alert-md alert-danger alert-dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
              <strong><?= $status ?></strong>
            </div>
          <?php endif; ?>
            <form class="form-horizontal form-label-left input_mask" action="<?php echo base_url('Login/Verify');?>" method="post">
              <h1>Login Form</h1>
              <div>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-default submit pull-right" value="Log In" />
              </div>
              
              <div class="clearfix"></div>
              
              <div class="separator">
                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
