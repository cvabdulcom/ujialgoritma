<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrasi Page | Portalindo</title>
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script src="<?php echo base_url('/assets/sweetalert/sweetalert.min.js'); ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('/assets/sweetalert/sweetalert.min.css'); ?>"/>

  <script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/js/jquery-ui.js'); ?>"></script>

  <!-- DataTables -->
  <script src="<?php echo base_url('/assets/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
  <style type="text/css">
    #progress-wrp {
    border: 1px solid #0099CC;
    padding: 1px;
    position: relative;
    height: 30px;
    border-radius: 3px;
    margin: 10px;
    text-align: left;
    background: #fff;
    box-shadow: inset 1px 3px 6px rgba(0, 0, 0, 0.12);
  }

  #progress-wrp .progress-bar {
    height: 100%;
    border-radius: 3px;
    background-color: #f39ac7;
    width: 0;
    box-shadow: inset 1px 1px 10px rgba(0, 0, 0, 0.11);
  }

  #progress-wrp .status {
    top: 3px;
    left: 50%;
    position: absolute;
    display: inline-block;
    color: #000000;
  }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      var clientId = "683300083577-urdfhps7ao0190u3gcbj73ehed6bq5j7.apps.googleusercontent.com";
      var redirect_uri = "https://portalindo.net/penjualan/notajpc";
      var scope = "https://www.googleapis.com/auth/drive";
      var url = "";

      $("#login_verifikasi").click(function(){
        signIn(clientId,redirect_uri,scope,url);
      });

      function signIn(clientId,redirect_uri,scope,url){
        url = "https://accounts.google.com/o/oauth2/v2/auth?redirect_uri="+redirect_uri
        +"&prompt=consent&response_type=code&client_id="+clientId+"&scope="+scope
        +"&access_type=offline";

        window.location = url;
       }
    });

    $(document).ready(function(){    

      const urlParams = new URLSearchParams(window.location.search);
      const code = urlParams.get('code');
      const redirect_uri = "https://portalindo.net/penjualan/notajpc"; 
      const client_secret = "fOY-OIyB7Vm5h6U9Z0ct29K1"; 
      const scope = "https://www.googleapis.com/auth/drive";
      var access_token= "";
      var client_id = "683300083577-urdfhps7ao0190u3gcbj73ehed6bq5j7.apps.googleusercontent.com";// replace it with your client id;
      
      $.ajax({
        type: 'POST',
        url: "https://www.googleapis.com/oauth2/v4/token",
        data: {code:code
          ,redirect_uri:redirect_uri,
          client_secret:client_secret,
        client_id:client_id,
        scope:scope,
        grant_type:"authorization_code"},
        dataType: "json",
        success: function(resultData){           
            
          localStorage.setItem("accessToken",resultData.access_token);
          localStorage.setItem("refreshToken",resultData.refreshToken);
          localStorage.setItem("expires_in",resultData.expires_in);
          window.history.pushState({}, document.title, "/penjualan/Notajpc/");    
        }
      });

      function stripQueryStringAndHashFromPath(url) {
        return url.split("?")[0].split("#")[0];
      }   

      var Upload = function (file) {
        this.file = file;
      };
      
      Upload.prototype.getType = function() {
        localStorage.setItem("type",this.file.type);
        return this.file.type;
      };

      Upload.prototype.getSize = function() {
        localStorage.setItem("size",this.file.size);
        return this.file.size;
      };

      Upload.prototype.getName = function() {
        return this.file.name;
      };
      
      Upload.prototype.doUpload = function () {
        var that = this;
        var formData = new FormData();
      
        // add assoc key values, this will be posts values
        formData.append("file", this.file, this.getName());
        formData.append("upload_file", true);
      
        $.ajax({
          type: "POST",
          beforeSend: function(request) {
            request.setRequestHeader("Authorization", "Bearer" + " " + localStorage.getItem("accessToken"));  
          },
          url: "https://www.googleapis.com/upload/drive/v2/files",
          data:{
            uploadType:"media"
          },
          xhr: function () {
            var myXhr = $.ajaxSettings.xhr();
            if (myXhr.upload) {
              myXhr.upload.addEventListener('progress', that.progressHandling, false);
            }
            return myXhr;
          },
          success: function (data) {
            console.log(data.id);
          },
          error: function (error) {
            console.log(error);
            alert('anda harus verifikasi !');
          },
          async: true,
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          timeout: 60000
        });
      };
      
      Upload.prototype.progressHandling = function (event) {
        var percent = 0;
        var position = event.loaded || event.position;
        var total = event.total;
        var progress_bar_id = "#progress-wrp";
        if (event.lengthComputable) {
            percent = Math.ceil(position / total * 100);
        }
        // update progressbars classes so it fits your code
        $(progress_bar_id + " .progress-bar").css("width", +percent + "%");
        $(progress_bar_id + " .status").text(percent + "%");
      };

      $("#upload").on("click", function (e) {
        var file = $("#files")[0].files[0];
        var upload = new Upload(file);
    
        // maby check size or type here with upload.getSize() and upload.getType()
    
        // execute upload
        upload.doUpload();
      });

  });
  </script>
</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url('page'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PR</b>T</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">PORTAL<b>INDO</b></span>
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
            <a id="login_verifikasi">
              <i class="fa fa-google"></i>
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
        <div class="modal-body">
          <table id="daftarnota" class="table table-bordered table-striped dataTable">
            <thead>
              <tr role="row">
                <th class="sorting_1" aria-controls="example1" width="10" style="text-align: center;">No</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">Nama Outlet</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">No Nota</th>
                <th width="90" class="sorting" aria-controls="example1" style="text-align: center;">Tanggal</th>
                <th width="70"></th>
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
        <div class="modal-body">
          <table id="daftarsj" class="table table-bordered table-striped dataTable">
            <thead>
              <tr role="row">
                <th class="sorting_1" aria-controls="example1" width="10" style="text-align: center;">No</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">No SJ</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">Tanggal</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">Kendaraan</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">Pengirim</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">No Nota</th>
                <th></th>
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
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/') ?>dist/img/avatar5.png" height="160" width="160" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('nama_olikuapp'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Admin</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="<?php echo base_url('dashboard'); ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>  
      <li class="header">MENU NAVIGATION</li>
      <li class="active treeview menu-open">
        <a href="#">
          <i class="fa fa-cart-arrow-down"></i> <span>Nota Penjualan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active treeview menu-open">
            <a href="#"><i class="fa fa-circle-o"></i> Sales Lapangan
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="<?php echo base_url('penjualan/notajpc'); ?>"><i class="fa fa-circle-o"></i> Jual Putus Cash</a></li>
              <li><a href="<?php echo base_url('penjualan/notajpt'); ?>"><i class="fa fa-circle-o"></i> Jual Putus Tempo</a></li>
              <li><a href="<?php echo base_url('penjualan/notakon'); ?>"><i class="fa fa-circle-o"></i> Konsinyasi</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('penjualan/notakantor'); ?>"><i class="fa fa-circle-o"></i> Sales Kantor</a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo base_url('pembelian/notapembelian'); ?>">
          <i class="fa fa-file-zip-o"></i> <span>Nota Pembelian</span>
        </a>
      </li>  
      <li>
        <a href="<?php echo base_url('suratjalan'); ?>">
          <i class="fa fa-envelope"></i> <span>Surat Jalan</span>
        </a>
      </li>  
      <li>
        <a href="<?php echo base_url('kasharian'); ?>">
          <i class="fa fa-money"></i> <span>Kas Harian</span>
        </a>
      </li>  
      <li>
        <a href="<?php echo base_url('pencabutan'); ?>">
          <i class="fa fa-close"></i> <span>Pencabutan</span>
        </a>
      </li>  
      <li>
        <a href="<?php echo base_url('returbarang'); ?>">
          <i class="fa fa-retweet"></i> <span>Retur Barang</span>
        </a>
      </li>    
      <li class="header">REPORT NAVIGATION</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-industry"></i> <span>Laporan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('laporan/outlet'); ?>"><i class="fa fa-circle-o"></i> Laporan Outlet</a></li>
          <li><a href="<?php echo base_url('laporan/piutang'); ?>"><i class="fa fa-circle-o"></i> Laporan Piutang</a></li>
          <li><a href="<?php echo base_url('laporan/sales'); ?>"><i class="fa fa-circle-o"></i> Laporan Sales</a></li>
          <li><a href="<?php echo base_url('laporan/stok'); ?>"><i class="fa fa-circle-o"></i> Laporan Stok</a></li>
          <li><a href="<?php echo base_url('laporan/pembelian'); ?>"><i class="fa fa-circle-o"></i> Laporan Pembelian</a></li>
          <li><a href="<?php echo base_url('laporan/kas'); ?>"><i class="fa fa-circle-o"></i> Laporan Kas</a></li>
          <li><a href="<?php echo base_url('laporan/accounting'); ?>"><i class="fa fa-circle-o"></i> Monitor Accounting</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i> <span>Outlet Masuk</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Jual Putus
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('outletmasuk/jp_filekontrak'); ?>"><i class="fa fa-circle-o"></i> File Kontrak</a></li>
              <li><a href="<?php echo base_url('outletmasuk/jp_filekontraktempo'); ?>"><i class="fa fa-circle-o"></i> File Kontrak Tempo</a></li>
              <li><a href="<?php echo base_url('outletmasuk/jp_rekap'); ?>"><i class="fa fa-circle-o"></i> Rekap</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Konsinyasi
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('outletmasuk/ky_filekontrak'); ?>"><i class="fa fa-circle-o"></i> File Kontrak</a></li>
              <li><a href="<?php echo base_url('outletmasuk/ky_stokawal'); ?>"><i class="fa fa-circle-o"></i> Stok Awal</a></li>
              <li><a href="<?php echo base_url('outletmasuk/ky_rekap'); ?>"><i class="fa fa-circle-o"></i> Rekap</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Group Buying
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('outletmasuk/gb_rekap'); ?>"><i class="fa fa-circle-o"></i> Rekap</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li>
        <a href="<?php echo base_url('hargaproduk'); ?>">
          <i class="fa fa-print"></i> <span>Harga Produk</span>
        </a>
      </li>  
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      <b>Nota Penjualan</b>
      <small>Lapangan (Cash)</small>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><b>No Nota :</b> PN<?php echo $no_nota_penjualan;?> &nbsp;|&nbsp; <b>Tanggal :</b> <?php echo date('d/m/Y'); ?> </li>
    </ol>
  </section>

  <div>
      <button id="login_verifikasi">
        Upload Files to Drive
      </button>
    </div> 
    <br>
    <div>
      <input id="files" type="file" name="files[]" multiple/>
      <button id="upload">Upload</button>
      <div id="progress-wrp">
        <div class="progress-bar"></div>
        <div class="status">0%</div>
      </div>
    </div> 
    <div id="result">
       
  </div>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-body chart-responsive">
            <div class="col-md-5 form-horizontal">
              <div class="form-group">
                <label for="tempo" class="col-sm-4 control-label">File Penjualan</label>
                <div class="col-sm-8">
                  <button type="button" class="form-control" id="button_upload" data-toggle="modal" data-target="#UPLOAD" autofocus="autofocus"><i class="fa fa-cloud-upload"></i> Upload</button>
                </div>
              </div>
              <div class="form-group">

                <!-- Hidden form -->
                <input type="hidden" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d'); ?>">
                <input type="hidden" name="status" id="status" value="undeliver">
                <input type="hidden" name="no_nota_penjualan" id="no_nota_penjualan" value="PN<?php echo $no_nota_penjualan;?>">
                <input type="hidden" name="nama_salesman" id="nama_salesman">
                <input type="hidden" name="rute" id="rute">
                <input type="hidden" name="id_outlet" id="id_outlet">
                <input type="hidden" name="nama_produk_alias" id="nama_produk_alias">
                <input type="hidden" name="tipe_pembelian" id="tipe_pembelian">
                <input type="hidden" name="tempo" id="tempo" value="30">
                <input type="hidden" name="id_file" id="id_file" value="KOSONG">
                <input type="hidden" name="id_produk" id="id_produk">
                <input type="hidden" name="harga_jual_1" id="harga_jual_1">
                <!-- End Hidden form -->

                <label for="id_outlet" class="col-sm-4 control-label">Nama Outlet</label>
                <div class="col-sm-8">
                  <input type="text" name="nama_outlet" id="nama_outlet" class="form-control" placeholder="Search..." readonly="readonly">
                  <ul class="select" id="searchResult"></ul>
                </div>
              </div>
            </div>

            <div class="col-md-7">
              <div class="form-group">
                <div class="col-sm-8">
                  <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Search..." disabled="disabled">
                </div>
                <div class="col-sm-3">
                  <input type="number" class="form-control" name="jumlah" id="jumlah" value="1" min="1" disabled="disabled">
                </div>
                <div class="col-sm-1">
                  <button type="submit" class="add btn btn-flat btn-primary active" id="button_produk" disabled="disabled"><i class="fa fa-plus"></i></button>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="mydata">
                  <thead>
                    <tr>
                      <th class="text-center" width="30">No</th>
                      <th class="text-center">Nama Produk</th>
                      <th class="text-center" width="150">Harga</th>
                      <th class="text-center" width="100">Jumlah (Qty)</th>
                      <th class="text-center" width="150">Subtotal</th>
                      <th class="text-center" width="50"></th>
                    </tr>
                  </thead>
                  <tbody id="cartBody">
                    <tr>
                      <td class="text-center" width="30"></td>
                      <td></td>
                      <td class="text-center" width="150"></td>
                      <td class="text-center" width="100"></td>
                      <td class="text-center" width="150"></td>
                      <td class="text-center" width="50" style="text-align: right;"></td>
                    </tr>
                  </tbody>
                  <tfoot>                  
                    <tr>
                      <th colspan="4" class="text-right">Total Harga</th>
                      <th colspan="2" class="text-right"><div id="totalCart"></div></th>
                    <tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>          

          <div class="box-footer">
            <button type="reset" class="btn btn-flat btn-default active" id="reset"><i class="fa fa-refresh"></i> Reset</button>
            <button class="btn btn-flat btn-warning active" id="print" data-toggle="modal" data-target="#PRINT"><i class="fa fa-print"></i> Print</button>
            <button type="button" class="btn btn-flat btn-success active pull-right" id="button_submit" disabled="disabled"><i class="fa fa-save"></i> Submit</button>
          </div>

        </div>
      </div>
    </div>
  </section>
<!-- /.content-wrapper -->
</div>
<!-- Modal Start -->
<div class="modal fade" id="UPLOAD">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <div>
          <div class="input-group input-group-sm">
            <input id="files" type="file" name="files[]" multiple class="form-control">
            <div class="input-group-btn">
              <button type="button" id="upload" class="btn btn-success"><i class="fa fa-upload"></i></button>
            </div>
          </div>
          <div id="progress-wrp">
            <div class="progress-bar"></div>
            <div class="status">0%</div>
          </div>
        </div> 
        <div id="result"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->

<!-- Data Outlet -->
<script type="text/javascript">
  $(document).ready(function(){
    $( "#nama_outlet" ).autocomplete({
      source: "<?php echo site_url('penjualan/Cari_outlet/?');?>",
      minLength: 3,
      select: function (event, ui) {
        $("#nama_outlet").val(ui.item.value);
        $("#nama_salesman").val(ui.item.nama_salesman);
        $("#rute").val(ui.item.rute);
        $("#id_outlet").val(ui.item.id_outlet);
        $("#tipe_pembelian").val(ui.item.tipe_pembelian);
        $('#nama_outlet').attr('readonly', true);
        $('#nama_produk').attr('disabled', false);
        $('#jumlah').attr('disabled', false);
        $('#button_produk').attr('disabled', false);
        $('#nama_produk').focus();
      }
    });
  })
</script>
<!-- Data Outlet -->

<!-- Data Produk -->
<script type="text/javascript">
  $(document).ready(function(){
    $( "#nama_produk" ).autocomplete({
      source: "<?php echo site_url('penjualan/Cari_produk_jpc/?');?>",
      minLength: 3,
      select: function (event, ui) {
        $("#nama_produk").val(ui.item.value);
        $("#id_produk").val(ui.item.id_produk);
        $("#nama_produk_alias").val(ui.item.nama_produk);
        $("#harga_jual_1").val(ui.item.harga_jual_1);
        $('#jumlah').focus();
      }
    });
  })
</script>
<!-- Data Produk -->

<!-- Data Localstorage -->
<script>
  Refresh()
  var mycart_penjualan_lapangan = [];
    $(function () {
      if (localStorage.mycart){
        mycart_penjualan_lapangan = JSON.parse(localStorage.mycart_penjualan_lapangan);
        showCart();
      }
    });

  // mengambil data button ketika button dengan class add di click

  /** SCRIPT SEMENTARA */
  $("#button_upload").click(function(){
    $('#nama_outlet').attr('readonly', false);
  })
  /** SCRIPT SEMENTARA */

  $("#reset").click(function(){
    Refresh()
    location.reload();
  })
  
  // mengambil data button ketika button dengan class add di click
  $('.add').click(function(){
    var tanggal_add = $("#tanggal").val();
    var no_nota_penjualan_add = $("#no_nota_penjualan").val();
    var nama_salesman_add = $("#nama_salesman").val();
    var rute_add = $("#rute").val();
    var id_outlet_add = $("#id_outlet").val();
    var id_produk_add = $("#id_produk").val();
    var jumlah_add = $("#jumlah").val();
    var harga_add = $("#harga_jual_1").val();
    var tipe_pembelian_add = $("#tipe_pembelian").val();
    var tempo_add = $("#tempo").val();
    var status_add = $("#status").val();
    var id_file_penjualan_add = $("#id_file").val();
    var subtotal_add = harga_add * jumlah_add;
    var nama_produk_add = $("#nama_produk_alias").val();
    addToCart(tanggal_add, no_nota_penjualan_add, nama_salesman_add, rute_add, id_outlet_add, id_produk_add, jumlah_add, harga_add, tipe_pembelian_add, tempo_add, status_add, id_file_penjualan_add, subtotal_add, nama_produk_add);   //kirimkan nilai ke fungsi addToCart, berhati - hati penggunaan inserting data usahakan serverside process, ini hanya untuk pembelajaran
    document.getElementById('nama_produk').value = "";
    document.getElementById('jumlah').value = "1";
    $('#button_submit').attr('disabled', false);
    $('#nama_produk').focus();
  })

  function Refresh(){
    document.getElementById('nama_outlet').value = "";
    document.getElementById('nama_produk').value = "";
    document.getElementById('jumlah').value = "1";
    $('#nama_outlet').attr('readonly', true);
    $('#nama_produk').attr('disabled', true);
    $('#jumlah').attr('disabled', true);
    $('#button_produk').attr('disabled', true);
    localStorage.clear();
    clearCart()
  }

  function addToCart(tanggal_add, no_nota_penjualan_add, nama_salesman_add, rute_add, id_outlet_add, id_produk_add, jumlah_add, harga_add, tipe_pembelian_add, tempo_add, status_add, id_file_penjualan_add, subtotal_add, nama_produk_add) {
    //cek data in cart then update qty
    for (var i in mycart_penjualan_lapangan) {
      if(mycart_penjualan_lapangan[i].id_produk == id_produk_add)
      {
        alert('Data produk sudah ada !')
        return;          
      }
    }

    // jika tidak ada insert all
    var item = { tanggal: tanggal_add, no_nota_penjualan: no_nota_penjualan_add, nama_salesman: nama_salesman_add, rute: rute_add, id_outlet: id_outlet_add, id_produk: id_produk_add, jumlah: jumlah_add, harga: harga_add, tipe_pembelian: tipe_pembelian_add, tempo: tempo_add, status: status_add, id_file_penjualan: id_file_penjualan_add, subtotal: subtotal_add, nama_produk: nama_produk_add }; 
    mycart_penjualan_lapangan.push(item);
    saveCart();
    showCart();
  }

  function deleteItem(index){
    mycart_penjualan_lapangan.splice(index,1); // hapus item berdasarkan index
    saveCart();
    showCart();
  }

  function saveCart() {
    if( window.localStorage){
      localStorage.mycart_penjualan_lapangan = JSON.stringify(mycart_penjualan_lapangan);
    }
  }

  function clearCart(){
    $("#cartBody").empty();
    var row = '<tr>'+
                '<td class="text-center" width="30" align="center"></td>'+
                '<td></td>'+
                '<td class="text-center" width="150"></td>'+
                '<td class="text-center" width="100"></td>'+
                '<td class="text-center" width="150"></td>'+
                '<td class="text-center" width="50" style="text-align: right;"></td>'+
              '</tr>';

    $("#cartBody").append(row); //append ul dengan id cartbody
  }

  function showCart() {
    
    $("#cartBody").empty();

    for (var i in mycart_penjualan_lapangan) { //tampilkan data dari local storage mycart_penjualan_lapangan, template bisa anda sesuaikan
      var item = mycart_penjualan_lapangan[i];
      var row = '<tr>'+
                  '<td class="text-center" width="30" align="center">'+[parseInt(i)+1]+'</td>'+
                  '<td>'+item.nama_produk+'</td>'+
                  '<td class="text-center" width="150">'+item.harga+'</td>'+
                  '<td class="text-center" align="100">'+item.jumlah+'</td>'+
                  '<td class="text-center" width="150">'+item.subtotal+'</td>'+
                  '<td class="text-center" width="50" style="text-align: right;"><button class="btn btn-danger btn-xs" onclick="deleteItem(' + i + ')"><i class="fa fa-trash"  > </i></button></td>'+
                '</tr>';

      $("#cartBody").append(row); //append ul dengan id cartbody
    }

    // untuk total
    var total = 0;
    for(var i = 0; i < mycart_penjualan_lapangan.length; i++) {
      total += mycart_penjualan_lapangan[i].subtotal; //jumlahkan keseluruhan row subtotal dari mycart_penjualan_lapangan untuk mendapatkan total
    }
    totalCart.innerHTML = total; 
    //isikan div dengan id totalcart dengan nilai diatas
  }
</script>
<!-- Data Localstorage -->

<!-- Simpan Localstorage to Database -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#button_submit").click(function(){
      if(window.localStorage!==undefined) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('penjualan/Simpan_nota'); ?>",
            data: {data: localStorage.getItem('mycart_penjualan_lapangan')},
            dataType: "json",
          success: function(cek){
            swal({
              title: "Nota Sukses Disimpan !",
              type: "success",
              confirmButtonColor: "#2C3FF9",
              showCancelButton: false,
              confirmButtonText: "OK",
              closeOnConfirm: true
            }, function(isConfirm) {              
              Refresh()
              location.reload();
            });
          }
        });
      }else{
        alert("Proses simpan gagal, Localstorage Kosong");
      }
    })
  });
</script>
<!-- Simpan Localstorage to Database -->
</body>
</html>
