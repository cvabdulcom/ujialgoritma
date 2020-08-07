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
      <li class="active">
        <a href="<?php echo base_url('dashboard'); ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>  
      <li class="header">MENU NAVIGATION</li>
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
              <li class="active"><a href="<?php echo base_url('outletmasuk/ky_stokawal'); ?>"><i class="fa fa-circle-o"></i> Stok Awal</a></li>
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
      Dashboard
      <small>Daily Summary</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Portalindo</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Laporan Outlet -->
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <?php
            $tanggal_pertama = date('Y-m-01');
            $tanggal_terakhir = date('Y-m-d');
            $cek_non_ao = $this->db->query("SELECT * FROM tbl_outlet WHERE status_program != 'BELUM MINAT' AND id_outlet NOT IN (SELECT DISTINCT id_outlet FROM tbl_penjualan WHERE tanggal BETWEEN '$tanggal_pertama' AND '$tanggal_terakhir');");
            $non_ao = $cek_non_ao->num_rows();
          ?>
          <span class="info-box-icon bg-aqua"><i class="fa fa-minus-square"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">NON ACTIVE</span>
            <span class="info-box-number"><?php echo $non_ao; ?></span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <?php
            $cek_ao = $this->db->query("SELECT DISTINCT id_outlet FROM tbl_penjualan WHERE tanggal >= date_trunc('month', CURRENT_DATE)");
            $ao = $cek_ao->num_rows();
          ?>
          <span class="info-box-icon bg-green"><i class="fa fa-check-circle"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">ACTIVE OUTLET</span>
            <span class="info-box-number"><?php echo number_format($ao, 0, ',', '.'); ?></span>
          </div>
        </div>
      </div>
      <div class="clearfix visible-sm-block"></div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <?php
            $noo_cek = $this->db->query("SELECT * FROM tbl_outlet WHERE tanggal_lahir BETWEEN '$tanggal_pertama' AND '$tanggal_terakhir'");
            $noo = $noo_cek->num_rows();
          ?>
          <span class="info-box-icon bg-yellow"><i class="fa fa-flash"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">NEW OUTLET</span>
            <span class="info-box-number"><?php echo number_format($noo, 0, ',', '.'); ?></span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <?php
            $belum_minat_cek = $this->db->query("SELECT * FROM tbl_outlet WHERE status_program='BELUM MINAT'");
            $belum_minat = $belum_minat_cek->num_rows();
          ?>
          <span class="info-box-icon bg-red"><i class="fa fa-hand-lizard-o"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">BELUM MINAT</span>
            <span class="info-box-number"><?php echo number_format($belum_minat, 0, ',', '.'); ?></span>
          </div>
        </div>
      </div>
    </div>
    <!-- Laporan Outlet -->

    <!-- Laporan Data -->
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <?php
            $tanggal_pertama = date('Y-m-01');
            $tanggal_terakhir = date('Y-m-d');
            $cek_non_ao = $this->db->query("SELECT * FROM tbl_outlet WHERE status_program != 'BELUM MINAT' AND id_outlet NOT IN (SELECT DISTINCT id_outlet FROM tbl_penjualan WHERE tanggal BETWEEN '$tanggal_pertama' AND '$tanggal_terakhir');");
            $non_ao = $cek_non_ao->num_rows();
          ?>

          <?php
            $tanggal = date('Y-m-d');
            $total_uang_masuk_cash_hitung = $this->db->query("SELECT SUM(nominal) AS nominal 
              FROM tbl_kas_1
              WHERE tipe='Masuk'
              AND jenis='Cash'
              AND tanggal<='$tanggal'");
            $total_uang_masuk_cash = $total_uang_masuk_cash_hitung->row()->nominal;

            $total_uang_keluar_cash_hitung = $this->db->query("SELECT SUM(nominal) AS nominal 
              FROM tbl_kas_1
              WHERE tipe='Keluar'
              AND jenis='Cash'
              AND tanggal<='$tanggal'");
            $total_uang_keluar_cash = $total_uang_keluar_cash_hitung->row()->nominal;

            $setoran_hitung = $this->db->query("SELECT SUM(setor) AS nominal 
              FROM tbl_kas_2
              WHERE tanggal<='$tanggal'");
            $setoran = $setoran_hitung->row()->nominal;

            $saldo_kas = $total_uang_masuk_cash - $total_uang_keluar_cash - $setoran;

            $total_uang_masuk_bank_kas1 = $this->db->query("SELECT SUM(nominal) AS nominal 
              FROM tbl_kas_1
              WHERE tipe='Masuk'
              AND jenis='Bank'
              AND tanggal<='$tanggal'");
            $nominal_masuk_bank_kas1 = $total_uang_masuk_bank_kas1->row()->nominal;

            $total_uang_masuk_bank_hitung = $this->db->query("SELECT SUM(total_uang_masuk_bank) AS nominal 
              FROM tbl_kas_2
              WHERE tanggal='$tanggal'");
            $total_uang_masuk_bank = $total_uang_masuk_bank_hitung->row()->nominal;

            $total_uang_keluar_bank_hitung = $this->db->query("SELECT SUM(total_uang_keluar_bank) AS nominal 
              FROM tbl_kas_2
              WHERE tanggal='$tanggal'");
            $total_uang_keluar_bank = $total_uang_keluar_bank_hitung->row()->nominal;

            $saldo_bank = $nominal_masuk_bank_kas1 + $total_uang_masuk_bank - $total_uang_keluar_bank + $setoran;     
          ?>
          <span class="info-box-icon" style="background-color: #ff531a;"><i class="fa fa-money"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">KAS HARIAN</span>
            <span class="info-box-number">K : <?php echo number_format($saldo_kas, 0, ',', '.'); ?></span>
            <span class="info-box-number">B : <?php echo number_format($saldo_bank, 0, ',', '.'); ?></span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <?php
            $cek_undeliver = $this->db->query("SELECT DISTINCT no_nota_penjualan FROM tbl_penjualan WHERE status='UNDELIVER'");
            $undeliver = $cek_undeliver->num_rows();
          ?>
          <span class="info-box-icon" style="background-color: #7575a3;"><i class="fa fa-rocket"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">UNDELIVER</span>
            <span class="info-box-number"><?php echo number_format($undeliver, 0, ',', '.'); ?></span>
          </div>
        </div>
      </div>
      <div class="clearfix visible-sm-block"></div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <?php
            $sj_pembelian_cek = $this->db->query("SELECT DISTINCT no_nota_pembelian FROM tbl_pembelian WHERE no_nota_pembelian NOT IN (SELECT no_nota FROM tbl_suratjalan)");
            $sj_pembelian = $sj_pembelian_cek->num_rows();
          ?>
          <span class="info-box-icon" style="background-color: #538cc6;"><i class="fa fa-envelope"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">SJ PEMBELIAN</span>
            <span class="info-box-number"><?php echo number_format($sj_pembelian, 0, ',', '.'); ?></span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <?php
            $sj_penjualan_cek = $this->db->query("SELECT DISTINCT no_nota_penjualan FROM tbl_penjualan WHERE no_nota_penjualan NOT IN (SELECT no_nota FROM tbl_suratjalan)");
            $sj_penjualan = $sj_penjualan_cek->num_rows();
          ?>
          <span class="info-box-icon" style="background-color: #ffcc00;"><i class="fa fa-envelope-square"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">SJ PENJUALAN</span>
            <span class="info-box-number"><?php echo number_format($sj_penjualan, 0, ',', '.'); ?></span>
          </div>
        </div>
      </div>
    </div>
    <!-- Laporan Data -->

    <!-- Laporan Penjualan -->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Summary Sales Reports</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-8">
                <div class="table-responsive" style="height: 200px;">
                <table class="table no-margin">
                  <tr>
                    <th></th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Hari ini</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Bulan ini</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Tahun ini</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Total All</th>
                  </tr>
                  <tr>
                    <th class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-warning">JP TEMPO</span></th>
                    <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                      <?php
                        $hari_ini_cek = date('Y-m-d');
                        $cek_jptempo_hari = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                          FROM tbl_penjualan, tbl_outlet
                          WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                          AND tbl_penjualan.tipe_pembelian='JP TEMPO'
                          AND tanggal = '$hari_ini_cek';");
                        $jptempo_hari = $cek_jptempo_hari->row()->subtotal;
                        echo number_format($jptempo_hari, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                      <?php
                        $cek_jptempo = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                          FROM tbl_penjualan, tbl_outlet
                          WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                          AND tbl_penjualan.tipe_pembelian='JP TEMPO'
                          AND tanggal >= date_trunc('month', CURRENT_DATE);");
                        $jptempo = $cek_jptempo->row()->subtotal;
                        echo number_format($jptempo, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                      <?php
                        $tahun_1 = date('Y-01-01');
                        $cek_jptempo_tahun = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                          FROM tbl_penjualan, tbl_outlet
                          WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                          AND tbl_penjualan.tipe_pembelian='JP TEMPO'
                          AND tanggal >= '$tahun_1';");
                        $jptempo_tahun = $cek_jptempo_tahun->row()->subtotal;
                        echo number_format($jptempo_tahun, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                      <?php
                        $cek_jp_tempo_all = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                          FROM tbl_penjualan, tbl_outlet
                          WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                          AND tbl_penjualan.tipe_pembelian='JP TEMPO';");
                        $jp_tempo_all = $cek_jp_tempo_all->row()->subtotal;
                        echo number_format($jp_tempo_all, 0, ',', '.');
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <th class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-success">JP CASH</span></th>
                    <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                      <?php
                        $cek_jpcash_hari = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                          FROM tbl_penjualan, tbl_outlet
                          WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                          AND tbl_penjualan.tipe_pembelian='JP CASH'
                          AND tanggal = '$hari_ini_cek';");
                        $jpcash_hari = $cek_jpcash_hari->row()->subtotal;
                        echo number_format($jpcash_hari, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                      <?php
                        $cek_jpcash = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                          FROM tbl_penjualan, tbl_outlet
                          WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                          AND tbl_penjualan.tipe_pembelian='JP CASH'
                          AND tanggal >= date_trunc('month', CURRENT_DATE);");
                        $jpcash = $cek_jpcash->row()->subtotal;
                        echo number_format($jpcash, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                      <?php
                        $cek_jpcash_tahun = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                          FROM tbl_penjualan, tbl_outlet
                          WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                          AND tbl_penjualan.tipe_pembelian='JP CASH'
                          AND tanggal >= '$tahun_1';");
                        $jpcash_tahun = $cek_jpcash_tahun->row()->subtotal;
                        echo number_format($jpcash_tahun, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                      <?php
                        $cek_jp_cash_all = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                          FROM tbl_penjualan, tbl_outlet
                          WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                          AND tbl_penjualan.tipe_pembelian='JP CASH';");
                        $jp_cash_all = $cek_jp_cash_all->row()->subtotal;
                        echo number_format($jp_cash_all, 0, ',', '.');
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <th class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-primary">KONSINYASI</span></th>
                    <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                      <?php
                        $cek_konsinyasi_hari = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                          FROM tbl_penjualan, tbl_outlet
                          WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                          AND tbl_penjualan.tipe_pembelian='KONSINYASI'
                          AND tanggal = '$hari_ini_cek';");
                        $konsinyasi_hari = $cek_konsinyasi_hari->row()->subtotal;
                        echo number_format($konsinyasi_hari, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                      <?php
                        $cek_kosinyasi = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                          FROM tbl_penjualan, tbl_outlet
                          WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                          AND tbl_penjualan.tipe_pembelian='KONSINYASI'
                          AND tanggal >= date_trunc('month', CURRENT_DATE);");
                        $kosinyasi = $cek_kosinyasi->row()->subtotal;
                        echo number_format($kosinyasi, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                      <?php
                        $cek_kosinyasi_tahun = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                          FROM tbl_penjualan, tbl_outlet
                          WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                          AND tbl_penjualan.tipe_pembelian='KONSINYASI'
                          AND tanggal >= '$tahun_1';");
                        $kosinyasi_tahun = $cek_kosinyasi_tahun->row()->subtotal;
                        echo number_format($kosinyasi_tahun, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                      <?php
                        $cek_konsinyasi_all = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                          FROM tbl_penjualan, tbl_outlet
                          WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                          AND tbl_penjualan.tipe_pembelian='KONSINYASI';");
                        $jp_konsinyasi_all = $cek_konsinyasi_all->row()->subtotal;
                        echo number_format($jp_konsinyasi_all, 0, ',', '.');
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <th></th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Rp. <?php echo number_format($jptempo_hari+$jpcash_hari+$konsinyasi_hari, 0, ',', '.'); ?></th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Rp. <?php echo number_format($jptempo+$jpcash+$kosinyasi, 0, ',', '.'); ?></th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Rp. <?php echo number_format($jptempo_tahun+$jpcash_tahun+$kosinyasi_tahun, 0, ',', '.'); ?></th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Rp. <?php echo number_format($jp_tempo_all+$jp_cash_all+$jp_konsinyasi_all, 0, ',', '.'); ?></th>
                  </tr>
                </table>
                </div>
              </div>
              <div class="col-md-4">
                <p class="text-center">
                  <strong>Goal Completion</strong>
                </p>
                <div class="progress-group">
                  <?php
                    $cek_pencapaian_gigih = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE nama_salesman='Gigih' AND tanggal >= date_trunc('month', CURRENT_DATE);");
                    $pencapaian_gigih = $cek_pencapaian_gigih->row()->subtotal;                    
                  ?>
                  <span class="progress-text">Gigih</span>
                  <span class="progress-number"><b>Rp. </b><?php echo number_format($pencapaian_gigih, 0, ',', '.'); ?></span>
                  <div class="progress sm">
                    <div class="progress-bar progress-bar-aqua" style="width: 100%"></div>
                  </div>
                </div>
                <div class="progress-group">
                  <?php
                    $cek_pencapaian_heri = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE nama_salesman='Heri' AND tanggal >= date_trunc('month', CURRENT_DATE);");
                    $pencapaian_heri = $cek_pencapaian_heri->row()->subtotal;                    
                  ?>
                  <span class="progress-text">Heri</span>
                  <span class="progress-number"><b>Rp. </b><?php echo number_format($pencapaian_heri, 0, ',', '.'); ?></span>
                  <div class="progress sm">
                    <div class="progress-bar progress-bar-red" style="width: 100%"></div>
                  </div>
                </div>
                <div class="progress-group">
                  <?php
                    $cek_pencapaian_kantor = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE nama_salesman='kantor' AND tanggal >= date_trunc('month', CURRENT_DATE);");
                    $pencapaian_kantor = $cek_pencapaian_kantor->row()->subtotal;                    
                  ?>
                  <span class="progress-text">Kantor</span>
                  <span class="progress-number"><b>Rp. </b><?php echo number_format($pencapaian_kantor, 0, ',', '.'); ?></span>
                  <div class="progress sm">
                    <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Laporan Penjualan -->

    <!-- Laporan Penjualan -->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Annual Sales Chart</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <div class="chart">
                  <canvas id="areaChart" style="height: 400px; width: 100%;"></canvas>
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Laporan Penjualan -->

    <!-- Laporan -->
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="info-box">
          <div class="box box-primary">
            <div class="box-header with-border">
              <div class="input-group col-md-7">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <?php
                  $cek_tanggal_awalun = $this->db->query("SELECT tanggal FROM tbl_pembelian ORDER BY tanggal ASC LIMIT 1");
                  $tanggal_awalun = $cek_tanggal_awalun->row()->tanggal;

                  $first_pp = date('Y-m-d');
                  $second_pp = $tanggal_awalun;
                  
                  $new1_pp = strtotime($second_pp); $newDate1_pp = date('m/d/Y', $new1_pp);
                  $new2_pp = strtotime($first_pp); $newDate2_pp = date('m/d/Y', $new2_pp);
                ?>                
                <input type="text" class="form-control input-sm" name="daterange_pp" value="<?php echo $newDate1_pp; echo " - "; echo $newDate2_pp; ?>" />
                <span class="input-group-btn">
                  <form>
                    <input type="hidden" name="tanggal_awal_pp" id="tanggal_awal_pp" value="<?php echo $second_pp ?>">
                    <input type="hidden" name="tanggal_akhir_pp" id="tanggal_akhir_pp" value="<?php echo $first_pp ?>">
                    <button type="button" class="btn btn-primary btn-sm btn-flat" id="button_search_pp" disabled="disabled"><div id="Loading">Go!</div></button>
                  </form>  
                </span>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-sm-6 col-xs-6" id="page_pembelian">
                  
                </div>
                <div class="col-sm-6 col-xs-6" id="page_penjualan">
                  
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix visible-sm-block"></div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="info-box">
          <div class="box box-primary">
            <div class="box-header with-border">
              <div class="input-group col-md-7">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="date" class="form-control input-sm" id="tanggal_hp" value="<?php echo date('Y-m-d'); ?>" onchange="tanggal_hp(event);" />
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary btn-sm btn-flat" id="button_search_hp" disabled="disabled"><div id="Loading_hp">Go!</div></button>
                </span>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-sm-6 col-xs-6" id="page_hutang">
                  
                </div>
                <div class="col-sm-6 col-xs-6" id="page_piutang">
                  
                </div>           
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Laporan -->

    <!-- Laporan -->
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="info-box">
          <div class="box box-primary">
            <div class="box-header with-border">
              <div class="input-group col-md-7">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <?php
                  $first_pp_kas = date('Y-m-d');
                  $second_pp_kas = date('Y-m-01');
                  
                  $new1_pp_kas = strtotime($second_pp_kas); $newDate1_pp_kas = date('m/d/Y', $new1_pp_kas);
                  $new2_pp_kas = strtotime($first_pp_kas); $newDate2_pp_kas = date('m/d/Y', $new2_pp_kas);
                ?>                
                <input type="text" class="form-control input-sm" name="daterange_pp_kas" value="<?php echo $newDate1_pp_kas; echo " - "; echo $newDate2_pp_kas; ?>" />
                <span class="input-group-btn">
                  <form>
                    <input type="hidden" name="tanggal_awal_pp_kas" id="tanggal_awal_pp_kas" value="<?php echo $second_pp_kas ?>">
                    <input type="hidden" name="tanggal_akhir_pp_kas" id="tanggal_akhir_pp_kas" value="<?php echo $first_pp_kas ?>">
                    <button type="button" class="btn btn-primary btn-sm btn-flat" id="button_search_pp_kas" disabled="disabled"><div id="Loading_pp_kas">Go!</div></button>
                  </form>  
                </span>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-sm-6 col-xs-6" id="page_uangmasuk_semua">
                  
                </div>
                <div class="col-sm-6 col-xs-6" id="page_uangkeluar_semua">
                  
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix visible-sm-block"></div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="info-box">
          <div class="box box-primary">
            <div class="box-header with-border">
              <div class="input-group col-md-4">
                <div class="input-group-addon">
                  <i class="fa fa-money"></i>
                </div>     
                <input type="text" class="form-control input-sm" value="UANG TAHUN BERJALAN" disabled="disabled" />
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-sm-6 col-xs-6" id="page_uangmasuk_tahun">
                  
                </div>
                <div class="col-sm-6 col-xs-6" id="page_uangkeluar_tahun">
                  
                </div>           
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Laporan -->

    <div class="row">
      <div class="col-md-12">
        <!-- AREA CHART -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <div class="input-group col-md-3">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>              
              <input type="text" class="form-control input-sm" name="daterange_st" value="<?php echo $newDate1_pp; echo " - "; echo $newDate2_pp; ?>" />
              <span class="input-group-btn">
                <form>
                  <input type="hidden" name="tanggal_awal_st" id="tanggal_awal_st" value="<?php echo $first_pp ?>">
                  <input type="hidden" name="tanggal_akhir_st" id="tanggal_akhir_st" value="<?php echo $first_pp ?>">
                  <button type="button" class="btn btn-primary btn-sm btn-flat" id="button_search_st" disabled="disabled"><div id="Loading_st">Go!</div></button>
                </form>  
              </span>
            </div>
          </div>
          <div class="box-body table-responsive">
            <table id="example4" class="table no-margin">
              <thead>
                <tr class="bg-info">
                  <th class="text-center" width="100"></th>
                  <th class="text-center">Gudang (pcs)</th>
                  <th class="text-center">Sales Heri (pcs)</th>
                  <th class="text-center">Sales Gigih (pcs)</th>
                  <th class="text-center">Total Global (pcs)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="text-left">Stok Awal</th>
                  <td class="text-center">
                    <div id="stokawal_gudang"></div>
                  </td>
                  <td class="text-center">
                    <div id="stokawal_heri"></div>
                  </td>
                  <td class="text-center">
                    <div id="stokawal_gigih"></div>
                  </td>
                  <td class="text-center">
                    <div id="stokawal_global"></div>
                  </td>
                </tr>
                <tr>
                  <th class="text-left">Pembelian</th>
                  <td class="text-center">
                    <div>-</div>
                  </td>
                  <td class="text-center">
                    <div>-</div>
                  </td>
                  <td class="text-center">
                    <div>-</div>
                  </td>
                  <td class="text-center">
                    <div class="lap_pembelian"></div>
                  </td>
                </tr>
                <tr>
                  <th class="text-left">Stok Akhir</th>
                  <td class="text-center">
                    <div id="stokakhir_gudang"></div>
                  </td>
                  <td class="text-center">
                    <div id="stokakhir_heri"></div>
                  </td>
                  <td class="text-center">
                    <div id="stokakhir_gigih"></div>
                  </td>
                  <td class="text-center">
                    <div id="stokakhir_global"></div>
                  </td>
                </tr>
                <tr>
                  <th class="text-left">HPP</th>
                  <td class="text-center">
                    <div>-</div>
                  </td>
                  <td class="text-center">
                    <div>-</div>
                  </td>
                  <td class="text-center">
                    <div>-</div>
                  </td>
                  <td class="text-center">
                    <div class="lap_hpp"></div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col (LEFT) -->        
    </div>

  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->
<script>

  Utama();

  var st_awalgudang = 0;
  var st_awaloutlet_heri = 0;
  var st_awaloutlet_gigih = 0;
  var stawal_global_hpp = 0;

  var rph_awalgudang = 0;
  var rph_awaloutlet_heri = 0;
  var rph_awaloutlet_gigih = 0;
  var rphawal_global_hpp = 0;

  var st_pembelian = 0;
  var rph_pembelian = 0;

  var st_akhirgudang = 0;
  var st_akhiroutlet_heri = 0;
  var st_akhiroutlet_gigih = 0;
  var stakhir_global_hpp = 0;

  var rph_akhirgudang = 0;
  var rph_akhiroutlet_heri = 0;
  var rph_akhiroutlet_gigih = 0;
  var rphakhir_global_hpp = 0;

  function Utama(){
    laporan_pembelian();
    laporan_penjualan();
    laporan_hutang();
    laporan_piutang();
    laporan_stokawal_gudang();
    laporan_uangmasuk_tahun();
    laporan_uangkeluar_tahun();
    laporan_uangmasuk_semua();
    laporan_uangkeluar_semua();
  }

  function rubah(angka){
    var reverse = angka.toString().split('').reverse().join(''),
    ribuan = reverse.match(/\d{1,3}/g);
    ribuan = ribuan.join('.').split('').reverse().join('');
    return ribuan;
  }

  // Laporan PP ----------------------------------------------------------------
  function Loading(){
    $("#Loading").empty();
    var button_loading = '<i class="fa fa fa-spinner fa-spin"></i>';
    $("#Loading").append(button_loading);
  }

  function No_Loading(){
    $("#Loading").empty();
    var button_loading = 'Go!';
    $("#Loading").append(button_loading);
  }
  
  $(function() {
    $('input[name="daterange_pp"]').daterangepicker({
      opens: 'right'
    }, function(start, end, label) {
      $("#tanggal_awal_pp").val(start.format('YYYY-MM-DD'));
      $("#tanggal_akhir_pp").val(end.format('YYYY-MM-DD'));    
      $('#button_search_pp').attr('disabled', false);
    });
  });

  function laporan_pembelian(){
    var tanggal_awal = $("#tanggal_awal_pp").val();
    var tanggal_akhir = $("#tanggal_akhir_pp").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('dashboard/laporan_pembelian'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_awal: tanggal_awal,
                    tanggal_akhir: tanggal_akhir
                  },
      success   : function(data){
        $("#page_pembelian").empty();
        var row = '<div class="description-block border-right">'+
                    '<span class="description-percentage text-blue"><i class="fa fa-money"></i></span>'+
                    '<h5 class="description-header">Rp '+rubah(data[0].subtotal)+'</h5>'+
                    '<span class="description-text">TOTAL PEMBELIAN</span>'+
                  '</div>';
        $("#page_pembelian").append(row);
        laporan_penjualan();
      }
    });
  }

  function laporan_penjualan(){
    var tanggal_awal = $("#tanggal_awal_pp").val();
    var tanggal_akhir = $("#tanggal_akhir_pp").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('dashboard/laporan_penjualan'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_awal: tanggal_awal,
                    tanggal_akhir: tanggal_akhir
                  },
      success   : function(data){
        $("#page_penjualan").empty();
        var row = '<div class="description-block border-right">'+
                    '<span class="description-percentage text-green"><i class="fa fa-money"></i></span>'+
                    '<h5 class="description-header">Rp '+rubah(data[0].subtotal)+'</h5>'+
                    '<span class="description-text">TOTAL PENJUALAN</span>'+
                  '</div>';
        $("#page_penjualan").append(row);
        No_Loading()
        $('#button_search_pp').attr('disabled', true);
      }
    });
  }

  $("#button_search_pp").click(function(){
    Loading()
    laporan_pembelian();
  })
  // Laporan PP ----------------------------------------------------------------

  // Laporan HP ----------------------------------------------------------------
  function Loading_hp(){
    $("#Loading_hp").empty();
    var button_loading = '<i class="fa fa fa-spinner fa-spin"></i>';
    $("#Loading_hp").append(button_loading);
  }

  function No_Loading_hp(){
    $("#Loading_hp").empty();
    var button_loading = 'Go!';
    $("#Loading_hp").append(button_loading);
  }

  $("#button_search_hp").click(function(){
    Loading_hp()
    laporan_hutang();
  })

  function tanggal_hp(e){
    $('#button_search_hp').attr('disabled', false);
  }

  function laporan_hutang(){
    var tanggal_hp = $("#tanggal_hp").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('dashboard/laporan_hutang'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_hp: tanggal_hp
                  },
      success   : function(data){
        $("#page_hutang").empty();
        var row = '<div class="description-block border-right">'+
                    '<span class="description-percentage text-yellow"><i class="fa fa-money"></i></span>'+
                    '<h5 class="description-header">Rp '+rubah(data[0].subtotal)+'</h5>'+
                    '<span class="description-text">TOTAL HUTANG</span>'+
                  '</div>';
        $("#page_hutang").append(row);
        laporan_piutang();
      }
    });
  }

  function laporan_piutang(){
    var tanggal_hp = $("#tanggal_hp").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('dashboard/laporan_piutang'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_hp: tanggal_hp
                  },
      success   : function(data){
        $("#page_piutang").empty();
        var row = '<div class="description-block border-right">'+
                    '<span class="description-percentage text-red"><i class="fa fa-money"></i></span>'+
                    '<h5 class="description-header">Rp '+rubah(data)+'</h5>'+
                    '<span class="description-text">TOTAL PIUTANG</span>'+
                  '</div>';
        $("#page_piutang").append(row);
        No_Loading_hp();
        $('#button_search_hp').attr('disabled', true);
      }
    });
  }
  // Laporan HP ----------------------------------------------------------------

  // Laporan ST ----------------------------------------------------------------
  $(function() {
    $('input[name="daterange_st"]').daterangepicker({
      opens: 'right'
    }, function(start, end, label) {
      $("#tanggal_awal_st").val(start.format('YYYY-MM-DD'));
      $("#tanggal_akhir_st").val(end.format('YYYY-MM-DD'));    
      $('#button_search_st').attr('disabled', false);
    });
  });

  function Loading_st(){
    $("#Loading_st").empty();
    var button_loading = '<i class="fa fa fa-spinner fa-spin"></i>';
    $("#Loading_st").append(button_loading);
  }

  function No_Loading_st(){
    $("#Loading_st").empty();
    var button_loading = 'Go!';
    $("#Loading_st").append(button_loading);
  }

  $("#button_search_st").click(function(){
    Loading_st()
    laporan_stokawal_gudang();
  })

  function laporan_stokawal_gudang(){
    var tanggal_awal = $("#tanggal_awal_st").val();
    var tanggal_akhir = $("#tanggal_akhir_st").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('dashboard/laporan_stokawal_gudang'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_awal: tanggal_awal,
                    tanggal_akhir: tanggal_akhir
                  },
      success   : function(data){
        $("#stokawal_gudang").empty();
        var row = data.jumlah+'/Rp '+rubah(data.harga);
        $("#stokawal_gudang").append(row);
        laporan_stokawal_heri();
        st_awalgudang = data.jumlah;
        rph_awalgudang = data.harga;
      }
    });
  }

  function laporan_stokawal_heri(){
    var tanggal_awal = $("#tanggal_awal_st").val();
    var tanggal_akhir = $("#tanggal_akhir_st").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('dashboard/laporan_stokawal_heri'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_awal: tanggal_awal,
                    tanggal_akhir: tanggal_akhir
                  },
      success   : function(data){
        $("#stokawal_heri").empty();
        var row = data.jumlah+'/Rp '+rubah(data.harga);
        $("#stokawal_heri").append(row);
        laporan_stokawal_gigih();

        st_awaloutlet_heri = data.jumlah;
        rph_awaloutlet_heri = data.harga;
      }
    });
  }

  function laporan_stokawal_gigih(){
    var tanggal_awal = $("#tanggal_awal_st").val();
    var tanggal_akhir = $("#tanggal_akhir_st").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('dashboard/laporan_stokawal_gigih'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_awal: tanggal_awal,
                    tanggal_akhir: tanggal_akhir
                  },
      success   : function(data){
        $("#stokawal_gigih").empty();
        var row = data.jumlah+'/Rp '+rubah(data.harga);
        $("#stokawal_gigih").append(row);

        st_awaloutlet_gigih = data.jumlah;
        rph_awaloutlet_gigih = data.harga;
        laporan_stokawal_global();
      }
    });
  }

  function laporan_stokawal_global(){
    var stawal_global = st_awalgudang + st_awaloutlet_heri + st_awaloutlet_gigih;
    var rphawal_global = rph_awalgudang + rph_awaloutlet_heri + rph_awaloutlet_gigih;

    $("#stokawal_global").empty();
    var row = stawal_global+'/Rp '+rubah(rphawal_global);
    $("#stokawal_global").append(row);

    laporan_pembelian_stok();

    stawal_global_hpp = stawal_global;
    rphawal_global_hpp = rphawal_global;
  }
  // Laporan ST ----------------------------------------------------------------

  // Laporan PEMBELIAN----------------------------------------------------------
  function laporan_pembelian_stok(){
    var tanggal_awal = $("#tanggal_awal_st").val();
    var tanggal_akhir = $("#tanggal_akhir_st").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('dashboard/laporan_pembelian_stok'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_awal: tanggal_awal,
                    tanggal_akhir: tanggal_akhir
                  },
      success   : function(data){
        $(".lap_pembelian").empty();
        if(data.jumlah == null){
          var row = 0+'/Rp '+0;
        }else{
          var row = data.jumlah+'/Rp '+rubah(data.harga);
          st_pembelian = data.jumlah;
          rph_pembelian = data.harga;
        }
        $(".lap_pembelian").append(row);
        laporan_stokakhir_gudang();
      }
    });
  }
  // Laporan PEMBELIAN----------------------------------------------------------

  // Laporan ST AKHIR-----------------------------------------------------------
  function laporan_stokakhir_gudang(){
    var tanggal_awal = $("#tanggal_awal_st").val();
    var tanggal_akhir = $("#tanggal_akhir_st").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('dashboard/laporan_stokakhir_gudang'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_awal: tanggal_awal,
                    tanggal_akhir: tanggal_akhir
                  },
      success   : function(data){
        $("#stokakhir_gudang").empty();
        var row = data.jumlah+'/Rp '+rubah(data.harga);
        $("#stokakhir_gudang").append(row);
        laporan_stokakhir_heri();
        st_akhirgudang = data.jumlah;
        rph_akhirgudang = data.harga;
      }
    });
  }

  function laporan_stokakhir_heri(){
    var tanggal_awal = $("#tanggal_awal_st").val();
    var tanggal_akhir = $("#tanggal_akhir_st").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('dashboard/laporan_stokakhir_heri'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_awal: tanggal_awal,
                    tanggal_akhir: tanggal_akhir
                  },
      success   : function(data){
        $("#stokakhir_heri").empty();
        var row = data.jumlah+'/Rp '+rubah(data.harga);
        $("#stokakhir_heri").append(row);
        laporan_stokakhir_gigih();

        st_akhiroutlet_heri = data.jumlah;
        rph_akhiroutlet_heri = data.harga;
      }
    });
  }

  function laporan_stokakhir_gigih(){
    var tanggal_awal = $("#tanggal_awal_st").val();
    var tanggal_akhir = $("#tanggal_akhir_st").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('dashboard/laporan_stokakhir_gigih'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_awal: tanggal_awal,
                    tanggal_akhir: tanggal_akhir
                  },
      success   : function(data){
        $("#stokakhir_gigih").empty();
        var row = data.jumlah+'/Rp '+rubah(data.harga);
        $("#stokakhir_gigih").append(row);

        st_akhiroutlet_gigih = data.jumlah;
        rph_akhiroutlet_gigih = data.harga;
        laporan_stokakhir_global();
      }
    });
  }

  function laporan_stokakhir_global(){
    var stakhir_global = st_akhirgudang + st_akhiroutlet_heri + st_akhiroutlet_gigih;
    var rphakhir_global = rph_akhirgudang + rph_akhiroutlet_heri + rph_akhiroutlet_gigih;

    $("#stokakhir_global").empty();
    var row = stakhir_global+'/Rp '+rubah(rphakhir_global);
    $("#stokakhir_global").append(row);

    stakhir_global_hpp = stakhir_global;
    rphakhir_global_hpp = rphakhir_global;

    laporan_hpp();
  }
  // Laporan ST AKHIR-----------------------------------------------------------

  // Laporan HPP----------------------------------------------------------------
  function laporan_hpp(){
    var st_hpp = parseInt(stawal_global_hpp)+parseInt(st_pembelian)-parseInt(stakhir_global_hpp);
    var rph_hpp = parseInt(rphawal_global_hpp)+parseInt(rph_pembelian)-parseInt(rphakhir_global_hpp);
    $(".lap_hpp").empty();
    var row = st_hpp+'/Rp '+rubah(rph_hpp);
    $(".lap_hpp").append(row);
    No_Loading_st();
    $('#button_search_st').attr('disabled', true);
  }
  // Laporan HPP----------------------------------------------------------------

  // Laporan KAS----------------------------------------------------------------
  $("#button_search_pp_kas").click(function(){
    Loading_pp_kas()
    laporan_uangmasuk_semua();
  })

  $(function() {
    $('input[name="daterange_pp_kas"]').daterangepicker({
      opens: 'right'
    }, function(start, end, label) {
      $("#tanggal_awal_pp_kas").val(start.format('YYYY-MM-DD'));
      $("#tanggal_akhir_pp_kas").val(end.format('YYYY-MM-DD'));    
      $('#button_search_pp_kas').attr('disabled', false);
    });
  });

  function Loading_pp_kas(){
    $("#Loading_pp_kas").empty();
    var button_loading = '<i class="fa fa fa-spinner fa-spin"></i>';
    $("#Loading_pp_kas").append(button_loading);
  }

  function No_Loading_kas(){
    $("#Loading_pp_kas").empty();
    var button_loading = 'Go!';
    $("#Loading_pp_kas").append(button_loading);
  }

  $("#button_search_pp_kas").click(function(){
    Loading_pp_kas()
    laporan_uangmasuk_semua();
  })

  function laporan_uangmasuk_semua(){
    var tanggal_awal = $("#tanggal_awal_pp_kas").val();
    var tanggal_akhir = $("#tanggal_akhir_pp_kas").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('dashboard/laporan_uangmasuk_semua'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_awal: tanggal_awal,
                    tanggal_akhir: tanggal_akhir
                  },
      success   : function(data){
        $("#page_uangmasuk_semua").empty();
        var row = '<div class="description-block border-right">'+
                    '<span class="description-percentage text-blue"><i class="fa fa-money"></i></span>'+
                    '<h5 class="description-header">Rp '+rubah(data[0].nominal)+'</h5>'+
                    '<span class="description-text">UANG MASUK BULAN</span>'+
                  '</div>';
        $("#page_uangmasuk_semua").append(row);
         laporan_uangkeluar_semua();
      }
    });
  }

  function laporan_uangkeluar_semua(){
    var tanggal_awal = $("#tanggal_awal_pp_kas").val();
    var tanggal_akhir = $("#tanggal_akhir_pp_kas").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('dashboard/laporan_uangkeluar_semua'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_awal: tanggal_awal,
                    tanggal_akhir: tanggal_akhir
                  },
      success   : function(data){
        $("#page_uangkeluar_semua").empty();
        var row = '<div class="description-block border-right">'+
                    '<span class="description-percentage text-blue"><i class="fa fa-money"></i></span>'+
                    '<h5 class="description-header">Rp '+rubah(data[0].nominal)+'</h5>'+
                    '<span class="description-text">UANG KELUAR BULAN</span>'+
                  '</div>';
        $("#page_uangkeluar_semua").append(row);
         laporan_uangmasuk_tahun();
      }
    });
  }

  function laporan_uangmasuk_tahun(){
    $.ajax({
      type      : "GET",
      url       : "<?php echo base_url('dashboard/laporan_uangmasuk_tahun'); ?>",
      dataType  : "JSON",
      success   : function(data){
        $("#page_uangmasuk_tahun").empty();
        var row = '<div class="description-block border-right">'+
                    '<span class="description-percentage text-blue"><i class="fa fa-money"></i></span>'+
                    '<h5 class="description-header">Rp '+rubah(data[0].nominal)+'</h5>'+
                    '<span class="description-text">UANG MASUK TAHUN</span>'+
                  '</div>';
        $("#page_uangmasuk_tahun").append(row);
         laporan_uangkeluar_tahun();
      }
    });
  }

  function laporan_uangkeluar_tahun(){
    $.ajax({
      type      : "GET",
      url       : "<?php echo base_url('dashboard/laporan_uangkeluar_tahun'); ?>",
      dataType  : "JSON",
      success   : function(data){
        $("#page_uangkeluar_tahun").empty();
        var row = '<div class="description-block border-right">'+
                    '<span class="description-percentage text-blue"><i class="fa fa-money"></i></span>'+
                    '<h5 class="description-header">Rp '+rubah(data[0].nominal)+'</h5>'+
                    '<span class="description-text">UANG KELUAR TAHUN</span>'+
                  '</div>';
        $("#page_uangkeluar_tahun").append(row);
         No_Loading_kas();
      }
    });
  }
  // Laporan KAS----------------------------------------------------------------

</script>

<?php
  $tahun_ini = date('Y');

  // Penjualan
  $cek_akhir_januari = date('Y-01-01');
  $tanggal_akhir_januari = date("Y-01-t", strtotime($cek_akhir_januari));
  $cek_januari = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE tanggal BETWEEN '$tahun_ini-01-01' AND '$tanggal_akhir_januari'");

  $cek_akhir_februari = date('Y-02-01');
  $tanggal_akhir_februari = date("Y-02-t", strtotime($cek_akhir_februari));
  $cek_februari = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE tanggal BETWEEN '$tahun_ini-02-01' AND '$tanggal_akhir_februari'");

  $cek_akhir_maret = date('Y-03-01');
  $tanggal_akhir_maret = date("Y-03-t", strtotime($cek_akhir_maret));
  $cek_maret = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE tanggal BETWEEN '$tahun_ini-03-01' AND '$tanggal_akhir_maret'");

  $cek_akhir_april = date('Y-04-01');
  $tanggal_akhir_april = date("Y-04-t", strtotime($cek_akhir_april));
  $cek_april = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE tanggal BETWEEN '$tahun_ini-04-01' AND '$tanggal_akhir_april'");

  $cek_akhir_mei = date('Y-05-01');
  $tanggal_akhir_mei = date("Y-05-t", strtotime($cek_akhir_mei));
  $cek_mei = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE tanggal BETWEEN '$tahun_ini-05-01' AND '$tanggal_akhir_mei'");

  $cek_akhir_juni = date('Y-06-01');
  $tanggal_akhir_juni = date("Y-06-t", strtotime($cek_akhir_juni));
  $cek_juni = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE tanggal BETWEEN '$tahun_ini-06-01' AND '$tanggal_akhir_juni'");

  $cek_akhir_juli = date('Y-07-01');
  $tanggal_akhir_juli = date("Y-07-t", strtotime($cek_akhir_juli));
  $cek_juli = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE tanggal BETWEEN '$tahun_ini-07-01' AND '$tanggal_akhir_juli'");

  $cek_akhir_agustus = date('Y-08-01');
  $tanggal_akhir_agustus = date("Y-08-t", strtotime($cek_akhir_agustus));
  $cek_agustus = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE tanggal BETWEEN '$tahun_ini-08-01' AND '$tanggal_akhir_agustus'");

  $cek_akhir_september = date('Y-09-01');
  $tanggal_akhir_september = date("Y-09-t", strtotime($cek_akhir_september));
  $cek_september = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE tanggal BETWEEN '$tahun_ini-09-01' AND '$tanggal_akhir_september'");

  $cek_akhir_oktober = date('Y-10-01');
  $tanggal_akhir_oktober = date("Y-10-t", strtotime($cek_akhir_oktober));
  $cek_oktober = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE tanggal BETWEEN '$tahun_ini-10-01' AND '$tanggal_akhir_oktober'");

  $cek_akhir_november = date('Y-11-01');
  $tanggal_akhir_november = date("Y-11-t", strtotime($cek_akhir_november));
  $cek_november = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE tanggal BETWEEN '$tahun_ini-11-01' AND '$tanggal_akhir_november'");

  $cek_akhir_desember = date('Y-12-01');
  $tanggal_akhir_desember = date("Y-12-t", strtotime($cek_akhir_desember));
  $cek_desember = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE tanggal BETWEEN '$tahun_ini-12-01' AND '$tanggal_akhir_desember'");
  // Penjualan

  // Pembayaran
  $pem_januari = $this->db->query("SELECT SUM(nominal) AS subtotal 
    FROM tbl_kas_1
    WHERE tipe='Masuk' 
    AND tanggal BETWEEN '$tahun_ini-01-01' AND '$tanggal_akhir_januari'");

  $pem_februari = $this->db->query("SELECT SUM(nominal) AS subtotal 
  FROM tbl_kas_1
  WHERE tipe='Masuk' 
  AND tanggal BETWEEN '$tahun_ini-02-01' AND '$tanggal_akhir_februari'");

  $pem_maret = $this->db->query("SELECT SUM(nominal) AS subtotal 
      FROM tbl_kas_1
      WHERE tipe='Masuk' 
      AND tanggal BETWEEN '$tahun_ini-03-01' AND '$tanggal_akhir_maret'");

  $pem_april = $this->db->query("SELECT SUM(nominal) AS subtotal 
  FROM tbl_kas_1
  WHERE tipe='Masuk' 
  AND tanggal BETWEEN '$tahun_ini-04-01' AND '$tanggal_akhir_april'");

  $pem_mei = $this->db->query("SELECT SUM(nominal) AS subtotal 
      FROM tbl_kas_1
      WHERE tipe='Masuk' 
      AND tanggal BETWEEN '$tahun_ini-05-01' AND '$tanggal_akhir_mei'");

  $pem_juni = $this->db->query("SELECT SUM(nominal) AS subtotal 
  FROM tbl_kas_1
  WHERE tipe='Masuk' 
  AND tanggal BETWEEN '$tahun_ini-06-01' AND '$tanggal_akhir_juni'");

  $pem_juli = $this->db->query("SELECT SUM(nominal) AS subtotal 
      FROM tbl_kas_1
      WHERE tipe='Masuk' 
      AND tanggal BETWEEN '$tahun_ini-07-01' AND '$tanggal_akhir_juli'");

  $pem_agustus = $this->db->query("SELECT SUM(nominal) AS subtotal 
  FROM tbl_kas_1
  WHERE tipe='Masuk' 
  AND tanggal BETWEEN '$tahun_ini-08-01' AND '$tanggal_akhir_agustus'");

  $pem_september = $this->db->query("SELECT SUM(nominal) AS subtotal 
      FROM tbl_kas_1
      WHERE tipe='Masuk' 
      AND tanggal BETWEEN '$tahun_ini-09-01' AND '$tanggal_akhir_september'");

  $pem_oktober = $this->db->query("SELECT SUM(nominal) AS subtotal 
  FROM tbl_kas_1
  WHERE tipe='Masuk' 
  AND tanggal BETWEEN '$tahun_ini-10-01' AND '$tanggal_akhir_oktober'");

  $pem_november = $this->db->query("SELECT SUM(nominal) AS subtotal 
      FROM tbl_kas_1
      WHERE tipe='Masuk' 
      AND tanggal BETWEEN '$tahun_ini-11-01' AND '$tanggal_akhir_november'");

  $pem_desember = $this->db->query("SELECT SUM(nominal) AS subtotal 
  FROM tbl_kas_1
  WHERE tipe='Masuk' 
  AND tanggal BETWEEN '$tahun_ini-12-01' AND '$tanggal_akhir_desember'");

  // Pembayaran

  // Penjualan Heri
  $cek_januari_heri = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Heri' AND tanggal BETWEEN '$tahun_ini-01-01' AND '$tanggal_akhir_januari'");

  $cek_februari_heri = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Heri' AND tanggal BETWEEN '$tahun_ini-02-01' AND '$tanggal_akhir_februari'");

  $cek_maret_heri = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Heri' AND tanggal BETWEEN '$tahun_ini-03-01' AND '$tanggal_akhir_maret'");

  $cek_april_heri = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Heri' AND tanggal BETWEEN '$tahun_ini-04-01' AND '$tanggal_akhir_april'");

  $cek_mei_heri = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Heri' AND tanggal BETWEEN '$tahun_ini-05-01' AND '$tanggal_akhir_mei'");

  $cek_juni_heri = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Heri' AND tanggal BETWEEN '$tahun_ini-06-01' AND '$tanggal_akhir_juni'");

  $cek_juli_heri = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Heri' AND tanggal BETWEEN '$tahun_ini-07-01' AND '$tanggal_akhir_juli'");

  $cek_agustus_heri = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Heri' AND tanggal BETWEEN '$tahun_ini-08-01' AND '$tanggal_akhir_agustus'");

  $cek_september_heri = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Heri' AND tanggal BETWEEN '$tahun_ini-09-01' AND '$tanggal_akhir_september'");

  $cek_oktober_heri = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Heri' AND tanggal BETWEEN '$tahun_ini-10-01' AND '$tanggal_akhir_oktober'");

  $cek_november_heri = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Heri' AND tanggal BETWEEN '$tahun_ini-11-01' AND '$tanggal_akhir_november'");

  $cek_desember_heri = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Heri' AND tanggal BETWEEN '$tahun_ini-12-01' AND '$tanggal_akhir_desember'");
  // Penjualan Heri

  // Penjualan Gigih
  $cek_januari_Gigih = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Gigih' AND tanggal BETWEEN '$tahun_ini-01-01' AND '$tanggal_akhir_januari'");

  $cek_februari_Gigih = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Gigih' AND tanggal BETWEEN '$tahun_ini-02-01' AND '$tanggal_akhir_februari'");

  $cek_maret_Gigih = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Gigih' AND tanggal BETWEEN '$tahun_ini-03-01' AND '$tanggal_akhir_maret'");

  $cek_april_Gigih = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Gigih' AND tanggal BETWEEN '$tahun_ini-04-01' AND '$tanggal_akhir_april'");

  $cek_mei_Gigih = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Gigih' AND tanggal BETWEEN '$tahun_ini-05-01' AND '$tanggal_akhir_mei'");

  $cek_juni_Gigih = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Gigih' AND tanggal BETWEEN '$tahun_ini-06-01' AND '$tanggal_akhir_juni'");

  $cek_juli_Gigih = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Gigih' AND tanggal BETWEEN '$tahun_ini-07-01' AND '$tanggal_akhir_juli'");

  $cek_agustus_Gigih = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Gigih' AND tanggal BETWEEN '$tahun_ini-08-01' AND '$tanggal_akhir_agustus'");

  $cek_september_Gigih = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Gigih' AND tanggal BETWEEN '$tahun_ini-09-01' AND '$tanggal_akhir_september'");

  $cek_oktober_Gigih = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Gigih' AND tanggal BETWEEN '$tahun_ini-10-01' AND '$tanggal_akhir_oktober'");

  $cek_november_Gigih = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Gigih' AND tanggal BETWEEN '$tahun_ini-11-01' AND '$tanggal_akhir_november'");

  $cek_desember_Gigih = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
    FROM tbl_penjualan
    WHERE nama_salesman='Gigih' AND tanggal BETWEEN '$tahun_ini-12-01' AND '$tanggal_akhir_desember'");
  // Penjualan Gigih
?>
<script>
  $(function () {

    // Get context with jQuery - using jQuery's .get() method.
    var barChartData = {
      labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
      datasets: [{
        label: 'Penjualan',
        backgroundColor: "#BBB",
        data: [<?php echo $cek_januari->row()->subtotal; ?>, <?php echo $cek_februari->row()->subtotal; ?>, <?php echo $cek_maret->row()->subtotal; ?>, <?php echo $cek_april->row()->subtotal; ?>, <?php echo $cek_mei->row()->subtotal; ?>, <?php echo $cek_juni->row()->subtotal; ?>, <?php echo $cek_juli->row()->subtotal; ?>, <?php echo $cek_agustus->row()->subtotal; ?>, <?php echo $cek_september->row()->subtotal; ?>, <?php echo $cek_oktober->row()->subtotal; ?>, <?php echo $cek_november->row()->subtotal; ?>, <?php echo $cek_desember->row()->subtotal; ?>]
      }, {
        label: 'Pembayaran',
        backgroundColor: "#ceb947",
        data: [<?php echo $pem_januari->row()->subtotal; ?>, <?php echo $pem_februari->row()->subtotal; ?>, <?php echo $pem_maret->row()->subtotal; ?>, <?php echo $pem_april->row()->subtotal; ?>, <?php echo $pem_mei->row()->subtotal; ?>, <?php echo $pem_juni->row()->subtotal; ?>, <?php echo $pem_juli->row()->subtotal; ?>, <?php echo $pem_agustus->row()->subtotal; ?>, <?php echo $pem_september->row()->subtotal; ?>, <?php echo $pem_oktober->row()->subtotal; ?>, <?php echo $pem_november->row()->subtotal; ?>, <?php echo $pem_desember->row()->subtotal; ?>]
      }, {
        label: 'Heri. (Penjualan)',
        type: 'line',
        borderWidth: 0.1,
        pointRadius: 0,
        backgroundColor: "rgba(187, 187, 187, 0.25)",
        data: [<?php echo $cek_januari_heri->row()->subtotal; ?>, <?php echo $cek_februari_heri->row()->subtotal; ?>, <?php echo $cek_maret_heri->row()->subtotal; ?>, <?php echo $cek_april_heri->row()->subtotal; ?>, <?php echo $cek_mei_heri->row()->subtotal; ?>, <?php echo $cek_juni_heri->row()->subtotal; ?>, <?php echo $cek_juli_heri->row()->subtotal; ?>, <?php echo $cek_agustus_heri->row()->subtotal; ?>, <?php echo $cek_september_heri->row()->subtotal; ?>, <?php echo $cek_oktober_heri->row()->subtotal; ?>, <?php echo $cek_november_heri->row()->subtotal; ?>, <?php echo $cek_desember_heri->row()->subtotal; ?>]
      }, {
        label: 'Gigih. (Penjualan)',
        type: 'line',
        borderWidth: 0.1,
        pointRadius: 0,
        backgroundColor: "rgba(206, 185, 71, 0.25)",
        data: [<?php echo $cek_januari_Gigih->row()->subtotal; ?>, <?php echo $cek_februari_Gigih->row()->subtotal; ?>, <?php echo $cek_maret_Gigih->row()->subtotal; ?>, <?php echo $cek_april_Gigih->row()->subtotal; ?>, <?php echo $cek_mei_Gigih->row()->subtotal; ?>, <?php echo $cek_juni_Gigih->row()->subtotal; ?>, <?php echo $cek_juli_Gigih->row()->subtotal; ?>, <?php echo $cek_agustus_Gigih->row()->subtotal; ?>, <?php echo $cek_september_Gigih->row()->subtotal; ?>, <?php echo $cek_oktober_Gigih->row()->subtotal; ?>, <?php echo $cek_november_Gigih->row()->subtotal; ?>, <?php echo $cek_desember_Gigih->row()->subtotal; ?>]
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
            text: "Grafik Transaksi"
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