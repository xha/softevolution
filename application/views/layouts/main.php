<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SoftEvolution Test</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?= site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?= site_url('resources/css/ionicons.min.css');?>">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?= site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?= site_url('resources/css/_all-skins.min.css');?>">
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="<?= base_url(); ?>" class="logo">
                  <!-- mini logo for sidebar mini 50x50 pixels -->
                  <span class="logo-mini"><b>SE</b></span>
                  <!-- logo for regular state and mobile devices -->
                  <span class="logo-lg"><b>SoftEvolution</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                  <!-- Sidebar toggle button-->
                  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= site_url('resources/img/'.$this->session->userdata('id_usuario').'.jpg');?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?= $this->session->userdata('nombre'); ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?= site_url('resources/img/'.$this->session->userdata('id_usuario').'.jpg');?>" class="img-circle" alt="User Image">
                                    <p>
                                        <?= $this->session->userdata('rol'); ?>
                                        <small>Miembro desde <?= $this->session->userdata('fecha_creacion'); ?></small>
                                    </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default"><i class="fa fa-user"></i> Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?= site_url('login/logout')?>" class="btn btn-default"><i class="fa fa-sign-out"></i> Log Out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?= site_url();?>">
                                <i class="fa fa-dashboard"></i> <span>Inicio</span>
                            </a>
                        </li>
			<li>
                            <a href="<?= site_url('categoria/index');?>">
                                <i class="fa fa-book"></i>
                                <span>Categor&iacute;a</span>
                            </a>
                        </li>
			<li>
                            <a href="<?= site_url('marca/index');?>">
                                <i class="fa fa-star"></i>
                                <span>Marca</span>
                            </a>
                        </li>
			<li>
                            <a href="<?= site_url('producto/index');?>">
                                <i class="fa fa-bars"></i>
                                <span>Producto</span>
                            </a>
                        </li>
                        <?php
                            if($_SESSION['id_rol'] == ROLE_ADMIN)
                            {
                        ?>
                            <li>
                                <a href="<?= site_url('usuario/index');?>">
                                    <i class="fa fa-users"></i>
                                    <span>Usuarios</span>
                                </a>
                            </li>
                            <?php
                            }
                        ?>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Test </strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?= site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?= site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?= site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?= site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?= site_url('resources/js/moment.js');?>"></script>
        <script src="<?= site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?= site_url('resources/js/global.js');?>"></script>
    </body>
</html>