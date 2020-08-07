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
          <li class="active"><a href="<?php echo base_url('laporan/stok'); ?>"><i class="fa fa-circle-o"></i> Laporan Stok</a></li>
          <li><a href="<?php echo base_url('laporan/pembelian'); ?>"><i class="fa fa-circle-o"></i> Laporan Pembelian</a></li>
          <li><a href="<?php echo base_url('laporan/penjualan'); ?>"><i class="fa fa-circle-o"></i> Laporan Penjualan</a></li>
          <li><a href="<?php echo base_url('laporan/kas'); ?>"><i class="fa fa-circle-o"></i> Laporan Kas</a></li>
          <li><a href="<?php echo base_url('laporan/accounting'); ?>"><i class="fa fa-circle-o"></i> Monitor Accounting</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-cart-arrow-down"></i> <span>Nota Penjualan</span>
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
              <li><a href="<?php echo base_url('penjualan/notajpc'); ?>"><i class="fa fa-circle-o"></i> Jual Putus Cash</a></li>
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
      <b>Laporan Stok</b>
    </h1>    
    <ol class="breadcrumb">
      <li class="active"><b>Tanggal :</b> <?php echo date('d/m/Y'); ?> </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li><a href="<?php echo base_url('laporan/stok'); ?>">Gudang</a></li>
            <li><a href="<?php echo base_url('laporan/stok_sales1'); ?>">Sales 1</a></li>
            <li class="active"><a href="<?php echo base_url('laporan/stok_sales2'); ?>">Sales 2</a></li>
            <li><a href="<?php echo base_url('laporan/stok_global'); ?>">Global</a></li>
            <!-- <li><a href="<?php //echo base_url('laporan/stok_summary'); ?>">Summary</a></li> -->
            <!-- <li class="pull-right">
              <div class="text-center">
                <a class="btn btn-default btn-xs"><i class="fa fa-bitbucket"></i> Pcs</a>
                <a class="btn btn-default btn-xs"><i class="fa fa-dropbox"></i> Dus</a>
              </div>
            </li> -->
          </ul>
          <div class="tab-content">
            <div class="tab-pane active table-responsive" id="tab_1">
              <!-- Date range -->
              <div class="form-group">
                <div class="input-group col-md-3">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <?php
                    $first = date('Y-m-d');
                    $second = date("Y-m-d", strtotime("$first -7 days"));
                    
                    $new1 = strtotime($second); $newDate1 = date('m/d/Y', $new1);
                    $new2 = strtotime($first); $newDate2 = date('m/d/Y', $new2);

                    $cek_tanggal_awal = $this->input->get('tanggal_awal');
                    $cek_tanggal_akhir = $this->input->get('tanggal_akhir');

                    if(isset($cek_tanggal_awal)){
                      $tanggal_awal = $this->input->get('tanggal_awal');
                      $tanggal_akhir = $this->input->get('tanggal_akhir');
                    }else{
                      $tanggal_awal = $first;
                      $tanggal_akhir = $first;
                    }
                  ?>                
                  <input type="text" class="form-control input-sm" name="daterange" value="<?php echo $newDate1; echo " - "; echo $newDate2; ?>" />
                  <span class="input-group-btn">
                    <form method="get" action="<?php echo base_url('laporan/stok_sales2'); ?>">
                      <input type="hidden" name="tanggal_awal" id="tanggal_awal">
                      <input type="hidden" name="tanggal_akhir" id="tanggal_akhir">
                      <button type="submit" class="btn btn-primary btn-sm btn-flat" id="button_search" disabled="disabled">Go!</button>
                    </form>  
                  </span>
                </div>
              </div>
              <!-- /.form group -->
              <table id="example4" class="table table-bordered table-hover">
                <thead>
                  <tr class="bg-info">
                    <th class="text-center" rowspan="2" width="40">No</th>
                    <th class="text-center" rowspan="2">Nama Produk</th>
                    <th class="text-center" colspan="2">St Awal</th>
                    <th class="text-center" colspan="2">Masuk</th>
                    <th class="text-center" colspan="2">Keluar</th>
                    <th class="text-center" colspan="2">St Akhir</th>
                  </tr>
                  <tr class="bg-info">
                    <th class="text-center">Pcs</th>
                    <th class="text-center">Rph</th>
                    <th class="text-center">Pcs</th>
                    <th class="text-center">Rph</th>
                    <th class="text-center">Pcs</th>
                    <th class="text-center">Rph</th>
                    <th class="text-center">Pcs</th>
                    <th class="text-center">Rph</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=0;
                  $total_stokawal = 0;
                  $total_masuk = 0;
                  $total_keluar = 0;
                  $total_stokakhir = 0;
                  foreach($stok->result_array() as $tampil):
                    $no++;
                    $id_produk = $tampil['id_produk'];
                    $nama_produk = $tampil['nama_produk'];
                    $kemasan = $tampil['kemasan'];
                    $harga_beli = $tampil['harga_beli'];
                ?>
                <tr>
                  <td class="text-center"><?php echo $no; ?></td>
                  <td class="text-left"><?php echo $nama_produk; ?></td>
                  <td class="text-center">
                    <?php
                        $cek_pcs_masuk = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah
                          FROM tbl_stokoutlet, tbl_outlet 
                          WHERE tbl_stokoutlet.id_outlet = tbl_outlet.id_outlet
                          AND tbl_outlet.status_program='COMPLETE'
                          AND tbl_outlet.nama_salesman='Gigih'
                          AND tbl_stokoutlet.id_produk = '$id_produk' 
                          AND tbl_stokoutlet.masuk_keluar = 'MASUK'
                          AND tbl_stokoutlet.tanggal < '$tanggal_awal'");
                        $pcs_masuk = $cek_pcs_masuk->row()->jumlah;

                        $cek_pcs_keluar = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah
                          FROM tbl_stokoutlet, tbl_outlet 
                          WHERE tbl_stokoutlet.id_outlet = tbl_outlet.id_outlet
                          AND tbl_outlet.status_program='COMPLETE'
                          AND tbl_outlet.nama_salesman='Gigih'
                          AND tbl_stokoutlet.id_produk = '$id_produk' 
                          AND tbl_stokoutlet.masuk_keluar = 'KELUAR'
                          AND tbl_stokoutlet.tanggal < '$tanggal_awal'");
                        $pcs_keluar = $cek_pcs_keluar->row()->jumlah;

                        $pcs = $pcs_masuk - $pcs_keluar;
                        echo round($pcs,2);
                      ?>
                  </td>
                  <td class="text-center">
                    <?php
                      $cek_rph_masuk = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah
                        FROM tbl_stokoutlet, tbl_outlet 
                        WHERE tbl_stokoutlet.id_outlet = tbl_outlet.id_outlet
                        AND tbl_outlet.status_program='COMPLETE'
                        AND tbl_outlet.nama_salesman='Gigih'
                        AND tbl_stokoutlet.id_produk = '$id_produk' 
                        AND tbl_stokoutlet.masuk_keluar = 'MASUK'
                        AND tbl_stokoutlet.tanggal < '$tanggal_awal'");
                      $rph_masuk = $cek_rph_masuk->row()->jumlah*$harga_beli;

                      $cek_rph_keluar = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah
                        FROM tbl_stokoutlet, tbl_outlet 
                        WHERE tbl_stokoutlet.id_outlet = tbl_outlet.id_outlet
                        AND tbl_outlet.status_program='COMPLETE'
                        AND tbl_outlet.nama_salesman='Gigih'
                        AND tbl_stokoutlet.id_produk = '$id_produk' 
                        AND tbl_stokoutlet.masuk_keluar = 'KELUAR'
                        AND tbl_stokoutlet.tanggal < '$tanggal_awal'");
                      $rph_keluar = $cek_rph_keluar->row()->jumlah*$harga_beli;

                      $rph = $rph_masuk - $rph_keluar;
                      echo number_format($rph, 0, ',', '.');

                      $total_stokawal += $rph;
                    ?>
                  </td>
                  <td class="text-center">
                    <?php
                        $masuk_cek_pcs = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah
                          FROM tbl_stokoutlet, tbl_outlet 
                          WHERE tbl_stokoutlet.id_outlet = tbl_outlet.id_outlet
                          AND tbl_outlet.status_program='COMPLETE'
                          AND tbl_outlet.nama_salesman='Gigih'
                          AND tbl_stokoutlet.id_produk = '$id_produk' 
                          AND tbl_stokoutlet.masuk_keluar = 'MASUK'
                          AND tbl_stokoutlet.tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
                        $masuk_pcs = $masuk_cek_pcs->row()->jumlah;
                        echo round($masuk_pcs,2);
                      ?>
                  </td>
                  <td class="text-center">
                    <?php
                      $masuk_cek_rph = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah
                        FROM tbl_stokoutlet, tbl_outlet 
                        WHERE tbl_stokoutlet.id_outlet = tbl_outlet.id_outlet
                        AND tbl_outlet.status_program='COMPLETE'
                        AND tbl_outlet.nama_salesman='Gigih'
                        AND tbl_stokoutlet.id_produk = '$id_produk' 
                        AND tbl_stokoutlet.masuk_keluar = 'MASUK'
                        AND tbl_stokoutlet.tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
                      $masuk_rph = $masuk_cek_rph->row()->jumlah*$harga_beli;
                      echo number_format($masuk_rph, 0, ',', '.');

                      $total_masuk += $masuk_rph;
                    ?>
                  </td>
                  <td class="text-center">
                    <?php
                        $keluar_cek_pcs = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah
                          FROM tbl_stokoutlet, tbl_outlet 
                          WHERE tbl_stokoutlet.id_outlet = tbl_outlet.id_outlet
                          AND tbl_outlet.status_program='COMPLETE'
                          AND tbl_outlet.nama_salesman='Gigih'
                          AND tbl_stokoutlet.id_produk = '$id_produk' 
                          AND tbl_stokoutlet.masuk_keluar = 'KELUAR'
                          AND tbl_stokoutlet.tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
                        $keluar_pcs = $keluar_cek_pcs->row()->jumlah;
                        echo round($keluar_pcs,2);
                      ?>
                  </td>
                  <td class="text-center">
                    <?php
                      $keluar_cek_rph = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah
                        FROM tbl_stokoutlet, tbl_outlet 
                        WHERE tbl_stokoutlet.id_outlet = tbl_outlet.id_outlet
                        AND tbl_outlet.status_program='COMPLETE'
                        AND tbl_outlet.nama_salesman='Gigih'
                        AND tbl_stokoutlet.id_produk = '$id_produk' 
                        AND tbl_stokoutlet.masuk_keluar = 'KELUAR'
                        AND tbl_stokoutlet.tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
                      $keluar_rph = $keluar_cek_rph->row()->jumlah*$harga_beli;
                      echo number_format($keluar_rph, 0, ',', '.');

                      $total_keluar += $keluar_rph;
                    ?>
                  </td>
                  <td class="text-center">
                    <?php
                        $st_akhir_pcs = $pcs + $masuk_pcs - $keluar_pcs;
                        echo round($st_akhir_pcs,2);
                      ?>
                  </td>
                  <td class="text-center">
                    <?php
                      $st_akhir_rph = $rph + $masuk_rph - $keluar_rph;
                      echo number_format($st_akhir_rph, 0, ',', '.');

                      $total_stokakhir += $st_akhir_rph;
                    ?>
                  </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr class="bg-info">
                    <th class="text-right" colspan="2">Total</th>
                    <th class="text-right"></th>
                    <th class="text-center"><?php echo number_format($total_stokawal, 0, ',', '.'); ?></th>
                    <th class="text-right"></th>
                    <th class="text-center"><?php echo number_format($total_masuk, 0, ',', '.'); ?></th>
                    <th class="text-right"></th>
                    <th class="text-center"><?php echo number_format($total_keluar, 0, ',', '.'); ?></th>
                    <th class="text-center"></th>
                    <th class="text-center"><?php echo number_format($total_stokakhir, 0, ',', '.'); ?></th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
      </div>
    </div>
  </section>
<!-- /.content-wrapper -->
</div>

<script>

  $(function() {
    $('input[name="daterange"]').daterangepicker({
      opens: 'right'
    }, function(start, end, label) {
      $("#tanggal_awal").val(start.format('YYYY-MM-DD'));
      $("#tanggal_akhir").val(end.format('YYYY-MM-DD'));    
      $('#button_search').attr('disabled', false);
    });
  });

</script>