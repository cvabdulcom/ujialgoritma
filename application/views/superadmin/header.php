<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Portalindo Klaten | Superuser</title>
  <link href="<?php echo base_url('assets/image/favicon.png'); ?>" rel="icon" type="image/x-icon" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/jquery-ui.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/select2/dist/css/select2.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/dist/css/AdminLTE.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/dist/css/skins/_all-skins.min.css'); ?>">

  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwtxQN8hMp0bg4pxx9lvpeU43J1tlitxY&sensor=true&libraries=places,geometry"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script src="<?php echo base_url('/assets/sweetalert/sweetalert.min.js'); ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('/assets/sweetalert/sweetalert.min.css'); ?>"/>

  <script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/js/jquery-ui.js'); ?>"></script>

  <!-- DataTables -->
  <script src="<?php echo base_url('/assets/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>

  <!-- Date Range -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <!-- Date Range -->
</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url('page'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PR</b>T</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">PTL-<b>KLATEN<i class="fa fa-support"></i></b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <a href="<?php echo base_url('extradiskon'); ?>">
              <i class="fa fa-percent"></i>
            </a>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
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
                  <small>Superuser</small>
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
    </nav>

  </header>