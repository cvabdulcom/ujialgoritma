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
          <li class="active"><a href="<?php echo base_url('laporan/pembelian'); ?>"><i class="fa fa-circle-o"></i> Laporan Pembelian</a></li>
          <li><a href="<?php echo base_url('laporan/penjualan'); ?>"><i class="fa fa-circle-o"></i> Laporan Penjualan</a></li>
          <li><a href="<?php echo base_url('laporan/kas'); ?>"><i class="fa fa-circle-o"></i> Laporan Kas</a></li>
          <li><a href="<?php echo base_url('laporan/accounting'); ?>"><i class="fa fa-circle-o"></i> Monitor Accounting</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-cart-arrow-down"></i> <span>Nota pembelian</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Sales Lapangan
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('pembelian/notajpc'); ?>"><i class="fa fa-circle-o"></i> Jual Putus Cash</a></li>
              <li><a href="<?php echo base_url('pembelian/notajpt'); ?>"><i class="fa fa-circle-o"></i> Jual Putus Tempo</a></li>
              <li><a href="<?php echo base_url('pembelian/notakon'); ?>"><i class="fa fa-circle-o"></i> Konsinyasi</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('pembelian/notakantor'); ?>"><i class="fa fa-circle-o"></i> Sales Kantor</a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo base_url('pembelian/notapembelian'); ?>">
          <i class="fa fa-file-zip-o"></i> <span>Nota Pembelian</span>
        </a>
      </li>  
      <li class="treeview">
        <a href="#"><i class="fa fa-envelope"></i> Surat Jalan
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('suratjalan/sj_masuk'); ?>"><i class="fa fa-circle-o"></i> SJ Masuk</a></li>
          <li><a href="<?php echo base_url('suratjalan/sj_keluar'); ?>"><i class="fa fa-circle-o"></i> SJ Keluar</a></li>
          <li><a href="<?php echo base_url('suratjalan/sj_stokoutlet'); ?>"><i class="fa fa-circle-o"></i> SJ Stok Outlet</a></li>
        </ul>
      </li>  
      <li class="treeview">
        <a href="#"><i class="fa fa-money"></i> Kas Harian
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('kasharian/pembayaran_nota_jual'); ?>"><i class="fa fa-circle-o"></i> Pembayaran Nota Jual</a></li>
          <li><a href="<?php echo base_url('kasharian/pembayaran_nota_beli'); ?>"><i class="fa fa-circle-o"></i> Pembayaran Nota Beli</a></li>
          <li><a href="<?php echo base_url('kasharian/biaya'); ?>"><i class="fa fa-circle-o"></i> Biaya</a></li>
          <li><a href="<?php echo base_url('kasharian/pendapatan_lain_lain'); ?>"><i class="fa fa-circle-o"></i> Pendapatan Lain-lain</a></li>
          <li><a href="<?php echo base_url('kasharian/permodalan'); ?>"><i class="fa fa-circle-o"></i> Permodalan</a></li>
          <li><a href="<?php echo base_url('kasharian/setoran'); ?>"><i class="fa fa-circle-o"></i> Setoran</a></li>
        </ul>
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
      <li>
        <a href="<?php echo base_url('petarute'); ?>">
          <i class="fa fa-map-marker"></i> <span>Peta Rute</span>
        </a>
      </li>   
      <li class="header">REPORT NAVIGATION</li>      
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
              <li><a href="<?php echo base_url('outletmasuk/jp_filekontraktempo'); ?>"><i class="fa fa-circle-o"></i> File Kontrak Tempo</a></li>
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
      <b>Laporan Pembelian</b>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><b>Tanggal :</b> <?php echo date('d/m/Y'); ?> </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-body chart-responsive">       
            <!-- <div class="col-md-5 form-horizontal">
              <div class="form-group">
                <div class="col-sm-6">
                  <input type="date" class="form-control" name="jatuh_tempo" id="jatuh_tempo">
                </div>
                <div class="col-sm-3">
                  <button type="button" class="add btn btn-flat btn-primary active" id="button_tampilkan"><i class="fa fa-search"></i> Tampilkan</button>
                </div>
              </div>
            </div> -->
          </div>

          <div class="box-body chart-responsive">       
            <div class="col-md-6 form-horizontal">
              <div class="form-group">
                <?php
                  $bulan_ini = date('m');
                  $pembelian_bulan = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_pembelian WHERE EXTRACT(MONTH FROM tanggal) = '$bulan_ini'");
                ?>
                <label for="id_outlet" class="col-sm-4 control-label">Pembelian <?php echo date('F'); ?></label>
                <div class="col-sm-8">
                  <input type="text" name="pembelian_bulan" id="pembelian_bulan" class="form-control" readonly="readonly" value="Rp. <?php echo number_format($pembelian_bulan->row()->subtotal, 0, ',', '.'); ?>">
                </div>
              </div>
              <div class="form-group">
                <?php
                  $tahun_ini = date('Y');
                  $pembelian_tahun = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_pembelian WHERE EXTRACT(YEAR FROM tanggal) = '$tahun_ini'");
                ?>
                <label for="id_outlet" class="col-sm-4 control-label">Pembelian <?php echo $tahun_ini; ?></label>
                <div class="col-sm-8">
                  <input type="text" name="pembelian_bulan" id="pembelian_bulan" class="form-control" readonly="readonly" value="Rp. <?php echo number_format($pembelian_tahun->row()->subtotal, 0, ',', '.'); ?>">
                </div>
              </div>
            </div>
            <div class="col-md-6 form-horizontal">
              <div class="form-group">
                <?php
                  $hutang = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_pembelian WHERE status='Belum'");
                ?>
                <label for="id_outlet" class="col-sm-4 control-label">Hutang <?php echo $bulan_h = date('F'); ?></label>
                <div class="col-sm-8">
                  <input type="text" name="hutang_bulan" id="pembelian_bulan" class="form-control" readonly="readonly" value="Rp. <?php echo number_format($hutang->row()->subtotal, 0, ',', '.'); ?>">
                </div>
              </div>
            </div>            
          </div>

          <div class="box-body chart-responsive">
            <canvas id="areaChart" style="height: 400px; width: 100%;"></canvas>
          </div>

          <div class="box-body chart-responsive">
            <div class="col-md-12 form-horizontal table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr class="bg-info">
                    <th class="text-center">No</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">No Nota Pembelian</th>
                    <th class="text-center">Nilai Nominal</th>
                    <th class="text-center">Jatuh Tempo</th>
                    <th class="text-center">Status</th>
                    <th class="text-center"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no=0;
                    foreach($pembelian->result_array() as $tampilpembelian):
                      $no++;
                      $no_nota_pembelian = $tampilpembelian['no_nota_pembelian'];
                      $tanggal = $tampilpembelian['tanggal'];
                      $tempo = $tampilpembelian['tempo'];
                      $status = $tampilpembelian['status'];
                  ?>
                  <tr>
                    <td class="text-center" width="30"><?php echo $no; ?></td>
                    <td class="text-center"><?php $new = strtotime($tanggal); $newDate = date('d F Y', $new);  echo $newDate; ?></td>
                    <td class="text-center"><?php echo $no_nota_pembelian; ?></td>
                    <td class="text-center">
                      <?php 
                        $hitung_nominal= $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_pembelian WHERE no_nota_pembelian='$no_nota_pembelian'");
                        $nominal = $hitung_nominal->row()->subtotal;
                        echo number_format($nominal, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $jatuhtempo = date("Y-m-d", strtotime("$tanggal +$tempo days"));
                        $new1 = strtotime($jatuhtempo); $newDate1 = date('d F Y', $new1);  echo $newDate1;
                      ?>
                    </td>
                    <td class="text-center"><?php echo $status; ?></td>
                    <td class="text-center">
                      <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#LIHAT<?php echo $no_nota_pembelian; ?>"><i class="fa fa-expand"></i></button>
                      <!-- Expand -->
                      <div class="modal fade bd-example-modal-lg" id="LIHAT<?php echo $no_nota_pembelian; ?>">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Detail Pembelian</h4>
                            </div>
                            <div class="modal-body">
                              <table id="example2" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                  <tr role="row">
                                    <th class="sorting_1" width="10" style="text-align: center;">No</th>
                                    <th class="sorting" style="text-align: center;">Nama Produk</th>
                                    <th class="sorting" style="text-align: center;">Harga Beli</th>
                                    <th class="sorting" style="text-align: center;">Isi Karton</th>
                                    <th class="sorting" style="text-align: center;">Jumlah</th>
                                    <th class="sorting" style="text-align: center;">PCS</th>
                                    <th class="sorting" style="text-align: center;">Subtotal</th>
                                  </tr>
                                </thead>                                
                                <tbody>
                                  <?php
                                    $cek_detail = $this->db->query("SELECT tbl_pembelian.nama_produk, tbl_pembelian.harga_beli, tbl_pembelian.jumlah, tbl_pembelian.subtotal, tbl_produk.kemasan FROM tbl_pembelian, tbl_produk WHERE tbl_pembelian.id_produk=tbl_produk.id_produk AND no_nota_pembelian='$no_nota_pembelian'");
                                      $no_detail=0;
                                      $total_harga=0;
                                      foreach($cek_detail->result_array() as $tampil_detail):
                                        $no_detail++;
                                        $nama_produk = $tampil_detail['nama_produk'];
                                        $harga_beli = $tampil_detail['harga_beli'];
                                        $jumlah = $tampil_detail['jumlah'];
                                        $subtotal = $tampil_detail['subtotal'];
                                        $kemasan = $tampil_detail['kemasan'];
                                  ?>
                                  <tr>
                                    <td class="text-center"><?php echo $no_detail; ?></td>
                                    <td class="text-left"><?php echo $nama_produk; ?></td>
                                    <td class="text-center"><?php echo number_format($harga_beli, 0, ',', '.'); ?></td>
                                    <td class="text-center"><?php echo number_format($kemasan, 0, ',', '.'); ?> pcs</td>
                                    <td class="text-center"><?php echo number_format($jumlah/$kemasan, 0, ',', '.'); ?> karton</td>
                                    <td class="text-center"><?php echo number_format($jumlah, 0, ',', '.'); ?> pcs</td>
                                    <td class="text-center"><?php echo number_format($subtotal, 0, ',', '.'); ?></td>
                                    <?php $total_harga += $subtotal; ?>
                                  </tr>
                                  <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                  <tr role="row">
                                    <th class="sorting" style="text-align: right;" colspan="6">Total</th>
                                    <th class="sorting" style="text-align: center;">Rp. <?php echo number_format($total_harga, 0, ',', '.'); ?></th>
                                  </tr>
                                </tfoot>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Expand -->
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>

          <div class="box-footer">
            <a href="<?php echo base_url('export/pembelian'); ?>">
              <button type="button" class="btn btn-flat btn-primary active pull-right" id="button_download"><i class="fa fa-download"></i> Download</button>
            </a>
          </div>
          
        </div>
      </div>
    </div>
  </section>
<!-- /.content-wrapper -->
</div>

<?php
  $tahun_ini = date('Y');

  // pembelian
  $cek_akhir_januari = date('Y-01-01');
  $tanggal_akhir_januari = date("Y-01-t", strtotime($cek_akhir_januari));
  $cek_januari = $this->db->query("SELECT SUM(tbl_pembelian.subtotal) AS subtotal 
    FROM tbl_pembelian
    WHERE tanggal BETWEEN '$tahun_ini-01-01' AND '$tanggal_akhir_januari'");

  $cek_akhir_februari = date('Y-02-01');
  $tanggal_akhir_februari = date("Y-02-t", strtotime($cek_akhir_februari));
  $cek_februari = $this->db->query("SELECT SUM(tbl_pembelian.subtotal) AS subtotal 
    FROM tbl_pembelian
    WHERE tanggal BETWEEN '$tahun_ini-02-01' AND '$tanggal_akhir_februari'");

  $cek_akhir_maret = date('Y-03-01');
  $tanggal_akhir_maret = date("Y-03-t", strtotime($cek_akhir_maret));
  $cek_maret = $this->db->query("SELECT SUM(tbl_pembelian.subtotal) AS subtotal 
    FROM tbl_pembelian
    WHERE tanggal BETWEEN '$tahun_ini-03-01' AND '$tanggal_akhir_maret'");

  $cek_akhir_april = date('Y-04-01');
  $tanggal_akhir_april = date("Y-04-t", strtotime($cek_akhir_april));
  $cek_april = $this->db->query("SELECT SUM(tbl_pembelian.subtotal) AS subtotal 
    FROM tbl_pembelian
    WHERE tanggal BETWEEN '$tahun_ini-04-01' AND '$tanggal_akhir_april'");

  $cek_akhir_mei = date('Y-05-01');
  $tanggal_akhir_mei = date("Y-05-t", strtotime($cek_akhir_mei));
  $cek_mei = $this->db->query("SELECT SUM(tbl_pembelian.subtotal) AS subtotal 
    FROM tbl_pembelian
    WHERE tanggal BETWEEN '$tahun_ini-05-01' AND '$tanggal_akhir_mei'");

  $cek_akhir_juni = date('Y-06-01');
  $tanggal_akhir_juni = date("Y-06-t", strtotime($cek_akhir_juni));
  $cek_juni = $this->db->query("SELECT SUM(tbl_pembelian.subtotal) AS subtotal 
    FROM tbl_pembelian
    WHERE tanggal BETWEEN '$tahun_ini-06-01' AND '$tanggal_akhir_juni'");

  $cek_akhir_juli = date('Y-07-01');
  $tanggal_akhir_juli = date("Y-07-t", strtotime($cek_akhir_juli));
  $cek_juli = $this->db->query("SELECT SUM(tbl_pembelian.subtotal) AS subtotal 
    FROM tbl_pembelian
    WHERE tanggal BETWEEN '$tahun_ini-07-01' AND '$tanggal_akhir_juli'");

  $cek_akhir_agustus = date('Y-08-01');
  $tanggal_akhir_agustus = date("Y-08-t", strtotime($cek_akhir_agustus));
  $cek_agustus = $this->db->query("SELECT SUM(tbl_pembelian.subtotal) AS subtotal 
    FROM tbl_pembelian
    WHERE tanggal BETWEEN '$tahun_ini-08-01' AND '$tanggal_akhir_agustus'");

  $cek_akhir_september = date('Y-09-01');
  $tanggal_akhir_september = date("Y-09-t", strtotime($cek_akhir_september));
  $cek_september = $this->db->query("SELECT SUM(tbl_pembelian.subtotal) AS subtotal 
    FROM tbl_pembelian
    WHERE tanggal BETWEEN '$tahun_ini-09-01' AND '$tanggal_akhir_september'");

  $cek_akhir_oktober = date('Y-10-01');
  $tanggal_akhir_oktober = date("Y-10-t", strtotime($cek_akhir_oktober));
  $cek_oktober = $this->db->query("SELECT SUM(tbl_pembelian.subtotal) AS subtotal 
    FROM tbl_pembelian
    WHERE tanggal BETWEEN '$tahun_ini-10-01' AND '$tanggal_akhir_oktober'");

  $cek_akhir_november = date('Y-11-01');
  $tanggal_akhir_november = date("Y-11-t", strtotime($cek_akhir_november));
  $cek_november = $this->db->query("SELECT SUM(tbl_pembelian.subtotal) AS subtotal 
    FROM tbl_pembelian
    WHERE tanggal BETWEEN '$tahun_ini-11-01' AND '$tanggal_akhir_november'");

  $cek_akhir_desember = date('Y-12-01');
  $tanggal_akhir_desember = date("Y-12-t", strtotime($cek_akhir_desember));
  $cek_desember = $this->db->query("SELECT SUM(tbl_pembelian.subtotal) AS subtotal 
    FROM tbl_pembelian
    WHERE tanggal BETWEEN '$tahun_ini-12-01' AND '$tanggal_akhir_desember'");
  // pembelian

?>
<script>
  $(function () {

    // Get context with jQuery - using jQuery's .get() method.
    var barChartData = {
      labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
      datasets: [{
        label: 'Pembelian',
        backgroundColor: "#BBB",
        data: [<?php echo $cek_januari->row()->subtotal; ?>, <?php echo $cek_februari->row()->subtotal; ?>, <?php echo $cek_maret->row()->subtotal; ?>, <?php echo $cek_april->row()->subtotal; ?>, <?php echo $cek_mei->row()->subtotal; ?>, <?php echo $cek_juni->row()->subtotal; ?>, <?php echo $cek_juli->row()->subtotal; ?>, <?php echo $cek_agustus->row()->subtotal; ?>, <?php echo $cek_september->row()->subtotal; ?>, <?php echo $cek_oktober->row()->subtotal; ?>, <?php echo $cek_november->row()->subtotal; ?>, <?php echo $cek_desember->row()->subtotal; ?>]
      }, {
        label: 'Poly. (Pembelian)',
        type: 'line',
        borderWidth: 0.1,
        pointRadius: 0,
        backgroundColor: "rgba(187, 187, 187, 0.25)",
        data: [<?php echo $cek_januari->row()->subtotal; ?>, <?php echo $cek_februari->row()->subtotal; ?>, <?php echo $cek_maret->row()->subtotal; ?>, <?php echo $cek_april->row()->subtotal; ?>, <?php echo $cek_mei->row()->subtotal; ?>, <?php echo $cek_juni->row()->subtotal; ?>, <?php echo $cek_juli->row()->subtotal; ?>, <?php echo $cek_agustus->row()->subtotal; ?>, <?php echo $cek_september->row()->subtotal; ?>, <?php echo $cek_oktober->row()->subtotal; ?>, <?php echo $cek_november->row()->subtotal; ?>, <?php echo $cek_desember->row()->subtotal; ?>]
      }]
    };
    window.onload = function() {
      var ctx = document.getElementById("areaChart").getContext("2d");
      window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
          title: {
            display: true,
            fontStyle: 'bold',
            text: "Figure"
          },
          legend: {
            position: "bottom",
            labels: {}
          },
          tooltips: {
            mode: 'label',
            bodySpacing: 10,
            cornerRadius: 0,
            titleMarginBottom: 15,
          },
          scales: {
            xAxes: [{
              ticks: {}
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                stepSize: 50000000,
                // Return an empty string to draw the tick line but hide the tick label
                // Return `null` or `undefined` to hide the tick line entirely
                userCallback: function(value, index, values) {
                    // Convert the number to a string and splite the string every 3 charaters from the end
                    value = value.toString();
                    value = value.split(/(?=(?:...)*$)/);
                    
                    // Convert the array to a string and format the output
                    value = value.join('.');
                    return 'Rp ' + value;
                  }
              }
            }]
          },
          responsive: true,
        }
      });
    };
  })  
</script>