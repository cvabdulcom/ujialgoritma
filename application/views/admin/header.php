<?php error_reporting(0);?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Uji Algoritma | Admimistrasi</title>
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

  <!-- Angularjs -->
  <!-- <script src="<?php //echo base_url('/assets/angularjs/angular.min.js'); ?>"></script>
  <script src="<?php //echo base_url('/assets/angularjs/angular-validate.min.js'); ?>"></script> -->

  <!-- Google Drive -->
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('/assets/googledrive/upload.css'); ?>" />
  <script src="<?php echo base_url('/assets/googledrive/main.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/googledrive/upload.js'); ?>"></script>
  <!-- Google Drive -->

  <!-- Date Range -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <!-- Date Range -->
  <style type="text/css">
    .load-container {
      position: relative;
      width: 240px;
      height: 240px;
      margin: 0 auto;
      overflow: hidden;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      -khtml-user-select: none;
      user-select: none;
      box-sizing: border-box;
    }

    .load-container:before {
      content: 'Loading';
      display: block;
      position: absolute;
      bottom: 103px;
      font-size: 14px;
      line-height: 200%;
      text-align: center;
      left: 0;
      right: 0;
      color: #7d7f80;
      box-sizing: border-box;
    }

    .load1 .loader {
      border-radius: 50%;
      font-size: 12px !important;
      width: 6em;
      height: 6em;
      margin: 7em auto;
      position: relative;
      text-indent: -9999em;
      border: 0.2em solid #e3e3e3;
      border-left: 0.2em solid #303233;
      transform: translateZ(0);
      -webkit-transform: translateZ(0);
      -ms-transform: translateZ(0);
      -o-transform: translateZ(0);
      -moz-transform: translateZ(0);
      animation: load 0.85s infinite linear;
      -o-animation: load 0.85s infinite linear;
      -webkit-animation: load 0.85s infinite linear;
      -moz-animation: load 0.85s infinite linear;
    }

    @-ms-keyframes load {
      0% {
        transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        -moz-transform: rotate(0deg)
      }
      100% {
        transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        -moz-transform: rotate(360deg)
      }
    }

    @-moz-keyframes load {
      0% {
        transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        -moz-transform: rotate(0deg)
      }
      100% {
        transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        -moz-transform: rotate(360deg)
      }
    }

    @-webkit-keyframes load {
      0% {
        transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        -moz-transform: rotate(0deg)
      }
      100% {
        transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        -moz-transform: rotate(360deg)
      }
    }

    @-o-keyframes load {
      0% {
        transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        -moz-transform: rotate(0deg)
      }
      100% {
        transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        -moz-transform: rotate(360deg)
      }
    }

    @keyframes load {
      0% {
        transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        -moz-transform: rotate(0deg)
      }
      100% {
        transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        -moz-transform: rotate(360deg)
      }
    }
  </style>

</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url(); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PR</b>T</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">UJI-<b>ALGORITMA</b></span>
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
                  <small>Admin</small>
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

  <!-- Ubah Print Nota -->
  <div class="modal fade" id="PRINT">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Daftar Nota</b></h4>
        </div>
        <div class="modal-body table-responsive">
          <table id="daftarnota" class="table table-bordered table-striped dataTable">
            <thead>
              <tr role="row">
                <th class="sorting_1" aria-controls="example1" width="10" style="text-align: center;">No</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">Nama Outlet</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">No Nota</th>
                <th width="90" class="sorting" aria-controls="example1" style="text-align: center;">Tanggal</th>
                <th width="20">P</th>
                <th width="20">G</th>
              </tr>
            </thead>
            <tbody id="show_data">
              
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
<!-- Modal Print Nota End -->

<!-- Ubah Print Surat Jalan -->
<div class="modal fade" id="PRINTSJ">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Daftar Surat Jalan</b></h4>
        </div>
        <div class="modal-body table-responsive">
          <table id="daftarsj" class="table table-bordered table-striped dataTable">
            <thead>
              <tr role="row">
                <th class="sorting_1" aria-controls="example1" width="10" style="text-align: center;">No</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">No SJ</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">Tanggal</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">Trans</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">Nama Outlet</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">No Nota</th>
                <th>P</th>
                <th>G</th>
              </tr>
            </thead>
            <tbody id="show_datasj">
            
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
<!-- Modal Print Nota Surat Jalan End -->

<!-- Modal print stok awal -->
<div class="modal fade" id="PRINTST">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Cetak Stok Outlet</b></h4>
        </div>
        <div class="modal-body">
          <table id="daftar_stokawal" class="table table-bordered table-striped dataTable">
            <thead>
              <tr role="row">
                <th class="sorting_1" aria-controls="example1" width="10" style="text-align: center;">No</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">Nama Outlet</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">ID Outlet</th>
                <th></th>
              </tr>
            </thead>
            <tbody id="show_datast">
            
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
<!-- Modal print stok awal -->

<!-- Modal riwayat -->
<div class="modal fade bd-example-modal-lg" id="RIWAYAT">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" align="center"><b>Riwayat Keluar Masuk</b></h4>
        </div>
        <div class="modal-body">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Stok Gudang</a></li>
              <li><a href="#tab_2" data-toggle="tab">Stok Outlet</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <table id="daftar_stokgudang" class="table table-bordered table-striped dataTable">
                  <thead>
                    <tr role="row">
                      <th class="sorting_1" aria-controls="example1" width="10" style="text-align: center;">No</th>
                      <th class="sorting" aria-controls="example1" style="text-align: center;">Tanggal</th>
                      <th class="sorting" aria-controls="example1" style="text-align: center;">Produk</th>
                      <th class="sorting" aria-controls="example1" style="text-align: center;">Jumlah</th>
                      <th class="sorting" aria-controls="example1" style="text-align: center;">Status</th>
                      <th class="sorting" aria-controls="example1" style="text-align: center;">Surat Jalan</th>
                      <th class="sorting" aria-controls="example1" style="text-align: center;">Ket</th>
                    </tr>
                  </thead>
                  <tbody id="show_stokgudang">
                  
                  </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <table id="daftar_stokoutlet" class="table table-bordered table-striped dataTable">
                  <thead>
                    <tr role="row">
                      <th class="sorting_1" aria-controls="example1" width="10" style="text-align: center;">No</th>
                      <th class="sorting" aria-controls="example1" style="text-align: center;">Tanggal</th>
                      <th class="sorting" aria-controls="example1" style="text-align: center;">Outlet</th>
                      <th class="sorting" aria-controls="example1" style="text-align: center;">Produk</th>
                      <th class="sorting" aria-controls="example1" style="text-align: center;">Status</th>
                      <th class="sorting" aria-controls="example1" style="text-align: center;">Jumlah</th>
                      <th class="sorting" aria-controls="example1" style="text-align: center;">Surat Jalan</th>
                    </tr>
                  </thead>
                  <tbody id="show_stokoutlet">
                  
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div>
    </div>
  </div>
<!-- Modal riwayat -->

<!-- Modal riwayat -->
<div class="modal fade" id="LOADING">
  <div class="modal-dialog">
    <div class="load-container load1" id="loader">
      <div class="loader">Loading</div>
    </div>
  </div>
</div>
<!-- Modal riwayat -->