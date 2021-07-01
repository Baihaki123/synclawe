<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Change your password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/bower_components/bootstrap/dist/css/bootstrap.min.css') ?> ">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/bower_components/font-awesome/css/font-awesome.min.css') ?> ">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/bower_components/Ionicons/css/ionicons.min.css') ?> ">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/dist/css/AdminLTE.min.css') ?> ">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/plugins/iCheck/square/blue.css') ?> ">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page" style="background: url(../assets/Template/dist/img/bg.jpg)">

  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><img src="<?php echo base_url('assets/Template/dist/img/logo.png') ?> " style="margin-bottom:10px" /></a><br />
        <a href="#"><b>Synclawe</b></a><br />Politeknik Harapan Bersama</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg"><b>Change your password for</b></p>
        <p class="login-box-msg"><b><?php echo $this->session->userdata('reset_email'); ?></b></p>
        <?php echo $this->session->flashdata('message'); ?>
        <form action="<?php echo base_url('Login/changePassword'); ?>" method="post">
          <div class="form-group has-feedback">
            <input type="password" class="form-control" id="password1" name="password1" placeholder="New password">
            <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" id="password2" name="password2" placeholder="Retype password" >
            <?php echo form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
          <div class="col-xs-12">
              <button type="submit" class="btn btn-success btn-block btn-flat">Change Password</button>
            </div>
            <!-- /.col -->
          </div>
        </form><br>


        <!-- /.social-auth-links -->
        <a href="<?php echo base_url('Login') ?>" class="text-center">Back to login</a>

      </div>
      <!-- /.login-box-body -->
      <div id="footer" style="font-size:13px;text-align:center;margin-top:8px"> &copy; 2021 <span class="">Politeknik Harapan Bersama Tegal</span>
      </div>
      <!-- /.login-box -->

      <!-- jQuery 3 -->
      <script src="<?php echo base_url('assets/Template/bower_components/jquery/dist/jquery.min.js') ?> "></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="<?php echo base_url('assets/Template/bower_components/bootstrap/dist/js/bootstrap.min.js') ?> "></script>
      <!-- iCheck -->
      <script src="<?php echo base_url('assets/Template/plugins/iCheck/icheck.min.js') ?> "></script>
      <script src="<?php echo base_url('assets/sweet/sweetalert2.all.min.js') ?> "></script>
      <script>
        $(function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
          });
        });
      </script>
  </body>

</html>