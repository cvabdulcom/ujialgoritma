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

	<h1 align="center"><?php echo $this->input->get('nama_outlet'); $id_outlet = $this->input->get('id_outlet'); ?></h1><br>

	<table id="example1" class="table table-bordered dataTable">
	  <thead>
        <tr class="bg-info">
	      <th class="text-center">No</th>
	      <th class="text-center">Nama Produk</th>
	      <th class="text-center" colspan="2">Masuk</th>
	      <th class="text-center" colspan="2">Keluar</th>
          <th class="text-center">Jumlah (pcs)</th>
	      <th class="text-center">Status</th>
          <th class="text-center">Rupiah</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php
          $no=0;
          $total=0;
	      foreach($so_sistem->result_array() as $tampil):
	        $no++;
            $id_produk = $tampil['id_produk'];
            $nama_produk = $tampil['nama_produk'];
            $kemasan = $tampil['kemasan'];
            $isi = $tampil['isi'];
            $harga_beli = $tampil['harga_beli'];
            $harga_gb_200_dus = $tampil['harga_gb_200_dus'];
            $harga_gb_150_dus = $tampil['harga_gb_150_dus'];
            $harga_gb_50_dus = $tampil['harga_gb_50_dus'];
            $harga_gb_k_50_dus = $tampil['harga_gb_k_50_dus'];
            $harga_jpc_dus = $tampil['harga_jpc_dus'];
            $harga_jpc_botol = $tampil['harga_jpc_botol'];
            $harga_jpt_dus = $tampil['harga_jpt_dus'];
            $harga_jpt_botol = $tampil['harga_jpt_botol'];
            $harga_ky_t_bayar = $tampil['harga_ky_t_bayar'];
            $harga_ky_r_jual = $tampil['harga_ky_r_jual'];
	    ?>
	    <tr>
	      <td class="text-center" width="30"><?php echo $no; ?></td>
	      <td><?php echo $nama_produk; ?></td>
	      <td class="text-center">
            <?php
                $cek_stok_masuk = $this->db->query("SELECT SUM(jumlah) AS jumlah FROM tbl_stokoutlet WHERE id_outlet='$id_outlet' AND id_produk='$id_produk' AND masuk_keluar='MASUK'");
                $stok_masuk = $cek_stok_masuk->row()->jumlah;
                echo $stok_masuk;
            ?>            
          </td>
          <td class="text-center">
            <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#RIWAYATMASUK<?php echo $id_produk; ?>"><i class="fa fa-eye"></i></button>
            <div class="modal fade bd-example-modal-lg" id="RIWAYATMASUK<?php echo $id_produk; ?>">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" align="center"><b>Riwayat Masuk <?php echo $nama_produk; ?></b></h4>
                        </div>
                        <?php
                            $detail_masuk = $this->db->query("SELECT * FROM tbl_stokoutlet WHERE id_outlet='$id_outlet' AND id_produk='$id_produk' AND masuk_keluar='MASUK'");
                        ?>
                        <div class="modal-body">
                            <table class="table table-bordered dataTable">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-center">No Actiontracking</th>
                                </tr>
                                <?php
                                $no_detail=0;
                                foreach($detail_masuk->result_array() as $tampil_detail):
                                    $no_detail++;
                                    $id_outlet_detail = $tampil_detail['id_outlet'];
                                    $tanggal_detail = $tampil_detail['tanggal'];
                                    $id_produk_detail = $tampil_detail['id_produk'];
                                    $masuk_keluar_detail = $tampil_detail['masuk_keluar'];
                                    $jumlah_detail = $tampil_detail['jumlah'];
                                    $no_actiontracking_detail = $tampil_detail['no_actiontracking'];
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $no_detail; ?></td>
                                    <td class="text-center"><?php echo $tanggal_detail; ?></td>
                                    <td class="text-center"><?php echo $masuk_keluar_detail; ?></td>
                                    <td class="text-center"><?php echo $jumlah_detail; ?></td>
                                    <td class="text-center"><?php echo $no_actiontracking_detail; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </td>
	      <td class="text-center">
            <?php
                $cek_stok_keluar = $this->db->query("SELECT SUM(jumlah) AS jumlah FROM tbl_stokoutlet WHERE id_outlet='$id_outlet' AND id_produk='$id_produk' AND masuk_keluar='KELUAR'");
                $stok_keluar = $cek_stok_keluar->row()->jumlah;
                echo $stok_keluar;
            ?>
          </td>
          <td class="text-center">
            <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#RIWAYATKELUAR<?php echo $id_produk; ?>"><i class="fa fa-eye"></i></button>
            <div class="modal fade bd-example-modal-lg" id="RIWAYATKELUAR<?php echo $id_produk; ?>">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" align="center"><b>Riwayat Masuk <?php echo $nama_produk; ?></b></h4>
                        </div>
                        <?php
                            $detail_keluar = $this->db->query("SELECT * FROM tbl_stokoutlet WHERE id_outlet='$id_outlet' AND id_produk='$id_produk' AND masuk_keluar='KELUAR'");
                        ?>
                        <div class="modal-body">
                            <table class="table table-bordered dataTable">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-center">No Actiontracking</th>
                                </tr>
                                <?php
                                $no_detail_keluar=0;
                                foreach($detail_keluar->result_array() as $tampil_detail_keluar):
                                    $no_detail_keluar++;
                                    $id_outlet_detail_keluar = $tampil_detail_keluar['id_outlet'];
                                    $tanggal_detail_keluar = $tampil_detail_keluar['tanggal'];
                                    $id_produk_detail_keluar = $tampil_detail_keluar['id_produk'];
                                    $masuk_keluar_detail_keluar = $tampil_detail_keluar['masuk_keluar'];
                                    $jumlah_detail_keluar = $tampil_detail_keluar['jumlah'];
                                    $no_actiontracking_detail_keluar = $tampil_detail_keluar['no_actiontracking'];
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $no_detail_keluar; ?></td>
                                    <td class="text-center"><?php echo $tanggal_detail_keluar; ?></td>
                                    <td class="text-center"><?php echo $masuk_keluar_detail_keluar; ?></td>
                                    <td class="text-center"><?php echo $jumlah_detail_keluar; ?></td>
                                    <td class="text-center"><?php echo $no_actiontracking_detail_keluar; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </td>
	      <td class="text-center">
              <?php
                $jumlah = $stok_masuk - $stok_keluar;
                echo $jumlah;
              ?>
          </td>
	      <td class="text-center">
              <?php
                if($jumlah != 0){
                    echo "ADA";
                }else{
                    echo "";
                }
              ?>
          </td>
          <td class="text-right">
              <?php
                $rupiah = $jumlah * $harga_beli;
                echo number_format($rupiah, 0, ',', '.');
                $total += $rupiah;
              ?>
          </td>
        </tr>
	    <?php endforeach; ?>
      </tbody>
      <tfoot>          
        <tr>
            <th class="text-right" colspan="8">Total</th>
            <th class="text-right"><?php echo number_format($total, 0, ',', '.'); ?></th>
        </tr>
      </tfoot>
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
    $('#example1').DataTable({
      'paging'      : false,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</html>