<!DOCTYPE html>
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
</head>
<body>

	<h1 align="center">Riwayat Stok Gudang</h1><br>

	<table id="example1" class="table table-bordered table-striped dataTable">
	  <thead>
	    <tr>
	      <th class="text-center">No</th>
	      <th class="text-center">Tanggal</th>
	      <th class="text-center">Nama Produk</th>
	      <th class="text-center">Status</th>
	      <th class="text-center">Jumlah(pcs)</th>
	      <th class="text-center">No Surat Jalan</th>
	      <th class="text-center">Keterangan</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php
	      $no=0;
	      foreach($stokgudang->result_array() as $tampil):
	        $no++;
	        $tanggal = $tampil['tanggal'];
	        $id_produk = $tampil['id_produk'];
	        $masuk_keluar = $tampil['masuk_keluar'];
	        $jumlah = $tampil['jumlah'];
	        $keterangan = $tampil['keterangan'];
	        $no_surat_jalan = $tampil['no_surat_jalan'];
	        $nama_produk = $tampil['nama_produk'];
	    ?>
	    <tr>
	      <td class="text-center" width="30"><?php echo $no; ?></td>
	      <td class="text-center"><?php $new = strtotime($tanggal); $newDate = date('d/m/Y', $new);  echo $newDate; ?></td>
	      <td><?php echo $nama_produk; ?></td>
	      <td class="text-center"><?php echo $masuk_keluar; ?></td>
	      <td class="text-center"><?php echo $jumlah; ?></td>
	      <td class="text-center"><?php echo $no_surat_jalan; ?></td>
	      <td class="text-center"><?php echo $keterangan; ?></td>
	    </tr>
	    <?php endforeach; ?>
	  </tbody>
	</table>

	<hr>

	<h1 align="center">Riwayat Stok Outlet</h1><br>

	<table id="example2" class="table table-bordered table-striped dataTable">
	  <thead>
	    <tr>
	      <th class="text-center">No</th>
	      <th class="text-center">Tanggal</th>
	      <th class="text-center">Nama Produk</th>
	      <th class="text-center">Status</th>
	      <th class="text-center">Jumlah(pcs)</th>
	      <th class="text-center">No Surat Jalan</th>
	      <th class="text-center">Nama Outlet</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php
	      $no=0;
	      foreach($stokoutlet->result_array() as $tampil):
	        $no++;
	        $tanggal = $tampil['tanggal'];
	        $id_produk = $tampil['id_produk'];
	        $masuk_keluar = $tampil['masuk_keluar'];
	        $jumlah = $tampil['jumlah'];
	        $no_actiontracking = $tampil['no_actiontracking'];
	        $nama_produk = $tampil['nama_produk'];
	        $nama_outlet = $tampil['nama_outlet'];
	    ?>
	    <tr>
	      <td class="text-center" width="30"><?php echo $no; ?></td>
	      <td class="text-center"><?php $new = strtotime($tanggal); $newDate = date('d/m/Y', $new);  echo $newDate; ?></td>
	      <td class="text-center"><?php echo $nama_produk; ?></td>
	      <td><?php echo $masuk_keluar; ?></td>
	      <td class="text-center"><?php echo $jumlah; ?></td>
	      <td class="text-center"><?php echo $no_actiontracking; ?></td>
	      <td class="text-center"><?php echo $nama_outlet; ?></td>
	    </tr>
	    <?php endforeach; ?>
	  </tbody>
	</table>

</body>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('/assets/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('/assets/dist/js/adminlte.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url('/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('/assets/bower_components/chart.js/Chart.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php //echo base_url('/assets/dist/js/pages/dashboard2.js'); ?>"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('/assets/dist/js/demo.js'); ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('/assets/js/raphael.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/morris.min.js'); ?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('/assets/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>

<script>
  $(function () {
    $('.select2').select2()
    $('#example1').DataTable()
    $('#example2').DataTable()
  })
</script>
</html>