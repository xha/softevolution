<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SoftEvolution Test</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="<?= site_url('resources/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= site_url('resources/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?= site_url('resources/css/AdminLTE.min.css');?>">
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <b>SoftEvolution Test</b>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Login</p>
        <?php $this->load->helper('form'); ?>
        <div class="row">
            <div class="col-md-12">
                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            </div>
        </div>
        <?php
        $this->load->helper('form');
        $error = $this->session->flashdata('error');
        if($error)
        {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error; ?>                    
            </div>
        <?php }
        $success = $this->session->flashdata('success');
        if($success)
        {
            ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $success; ?>                    
            </div>
        <?php } ?>
        
        <form action="<?= site_url('login/loginMe')?>" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Usuario" name="usuario" required />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Clave" name="clave" required />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
            <div class="row">
                <div class="col-xs-4">
                    <input type="submit" class="btn btn-primary btn-block btn-flat" value="Log In" />
                </div>
            </div>
        </form>
      </div>
    </div>
    <script src="<?= site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
    <script src="<?= site_url('resources/js/bootstrap.min.js');?>"></script>
  </body>
</html>