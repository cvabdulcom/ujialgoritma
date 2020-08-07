<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Salesman Page | Portalindo</title>
  <link href="<?php echo base_url('assets/image/favicon.png'); ?>" rel="icon" type="image/x-icon" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php //echo base_url('/assets/signature/signature.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/jquery-ui.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/select2/dist/css/select2.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/dist/css/AdminLTE.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/dist/css/skins/_all-skins.min.css'); ?>">
  <style>
      .wrapper {
          position: relative;
          width: 800px;
          height: 150px;
          -moz-user-select: none;
          -webkit-user-select: none;
          -ms-user-select: none;
          user-select: none;
      }

      .signature-pad {
          position: relative;
          left: 0;
          top: 0;
          width:800px;
          height:150px;
          background-color: white;
      }
  </style>
  <!-- jQuery 3 -->
  <script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/js/jquery-ui.js'); ?>"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url('/assets/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
  
  <script src="<?php echo base_url('/assets/sweetalert/sweetalert.min.js'); ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('/assets/sweetalert/sweetalert.min.css'); ?>"/>

  <!-- Google Drive -->
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('/assets/googledrive/upload.css'); ?>" />
  <script src="<?php echo base_url('/assets/googledrive/main.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/googledrive/upload.js'); ?>"></script>
  <!-- Google Drive -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwtxQN8hMp0bg4pxx9lvpeU43J1tlitxY&sensor=true&libraries=places,geometry"></script>
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
</head>
<body class="hold-transition skin-blue sidebar-mini layout-top-nav fixed">
<div class="">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand">PTL-<b>KLATEN</b></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <a href="<?php echo base_url(); ?>">
                <i class="fa fa-home"></i>
              </a>
            </li>
            <li class="dropdown messages-menu">
              <a onClick="document.location.reload(true)">
                <i class="fa fa-refresh"></i>
              </a>
            </li>
            <!-- /.messages-menu -->
            <li class="dropdown user user-menu active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url('assets/') ?>dist/img/avatar5.png" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $this->session->userdata('nama_olikuapp'); ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url('assets/') ?>dist/img/avatar5.png" class="img-circle" alt="User Image">
                  <p>
                    <?php echo $this->session->userdata('nama_olikuapp'); ?>
                    <small>Sales</small>
                  </p>
                </li>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->