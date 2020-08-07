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
            <li><a href="<?php echo base_url('laporan/stok_sales2'); ?>">Sales 2</a></li>
            <li><a href="<?php echo base_url('laporan/stok_global'); ?>">Global</a></li>
            <li class="active"><a href="<?php echo base_url('laporan/stok_summary'); ?>">Summary</a></li>
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
                    <form method="get" action="<?php echo base_url('laporan/stok'); ?>">
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
                    <th class="text-center" width="100"></th>
                    <th class="text-center">Gudang (pcs)</th>
                    <th class="text-center">Sales 1 (pcs)</th>
                    <th class="text-center">Sales 2 (pcs)</th>
                    <th class="text-center">Total Global (pcs)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="text-left">Stok Awal</th>
                    <td class="text-center">
                      <?php
                        $tanggal_awal_old = date("Y-m-d", strtotime("$tanggal_awal -1 days"));
                        $cek_st_awalgudang_masuk = $this->db->query("SELECT SUM(tbl_stokgudang.jumlah) AS jumlah, SUM(tbl_produk.harga_beli) AS harga
                          FROM tbl_stokgudang, tbl_produk
                          WHERE tbl_stokgudang.id_produk = tbl_produk.id_produk 
                          AND tbl_stokgudang.masuk_keluar = 'MASUK'
                          AND tbl_stokgudang.tanggal <= '$tanggal_awal_old'");
                        $st_awalgudang_masuk = $cek_st_awalgudang_masuk->row()->jumlah;
                        $rph_awalgudang_masuk = $cek_st_awalgudang_masuk->row()->harga;

                        $cek_st_awalgudang_keluar = $this->db->query("SELECT SUM(tbl_stokgudang.jumlah) AS jumlah, SUM(tbl_produk.harga_beli) AS harga
                        FROM tbl_stokgudang, tbl_produk
                        WHERE tbl_stokgudang.id_produk = tbl_produk.id_produk 
                        AND tbl_stokgudang.masuk_keluar = 'KELUAR'
                        AND tbl_stokgudang.tanggal <= '$tanggal_awal_old'");
                        $st_awalgudang_keluar = $cek_st_awalgudang_keluar->row()->jumlah;
                        $rph_awalgudang_keluar = $cek_st_awalgudang_keluar->row()->harga;

                        $st_awalgudang = $st_awalgudang_masuk - $st_awalgudang_keluar;
                        $rph_awalgudang = $rph_awalgudang_masuk - $rph_awalgudang_keluar;
                        echo number_format($st_awalgudang, 0, ',', '.');
                        echo "/";
                        echo "Rp.";
                        echo number_format($rph_awalgudang, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $cek_st_awaloutlet_masuk_heri = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah, SUM(tbl_produk.harga_beli) AS harga
                          FROM tbl_stokoutlet, tbl_produk, tbl_outlet
                          WHERE tbl_stokoutlet.id_produk = tbl_produk.id_produk 
						              AND tbl_outlet.id_outlet = tbl_stokoutlet.id_outlet
                          AND tbl_outlet.tipe_pembelian='K'
                          AND tbl_outlet.nama_salesman='Heri'
                          AND tbl_stokoutlet.masuk_keluar = 'MASUK'
                          AND tbl_stokoutlet.tanggal <= '$tanggal_awal_old'");
                        $st_awaloutlet_masuk_heri = $cek_st_awaloutlet_masuk_heri->row()->jumlah;
                        $rph_awaloutlet_masuk_heri = $cek_st_awaloutlet_masuk_heri->row()->harga;

                        $cek_st_awaloutlet_keluar_heri = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah, SUM(tbl_produk.harga_beli) AS harga
                          FROM tbl_stokoutlet, tbl_produk, tbl_outlet
                          WHERE tbl_stokoutlet.id_produk = tbl_produk.id_produk 
						              AND tbl_outlet.id_outlet = tbl_stokoutlet.id_outlet
                          AND tbl_outlet.tipe_pembelian='K'
                          AND tbl_outlet.nama_salesman='Heri'
                          AND tbl_stokoutlet.masuk_keluar = 'KELUAR'
                          AND tbl_stokoutlet.tanggal <= '$tanggal_awal_old'");
                        $st_awaloutlet_keluar_heri = $cek_st_awaloutlet_keluar_heri->row()->jumlah;
                        $rph_awaloutlet_keluar_heri = $cek_st_awaloutlet_keluar_heri->row()->harga;

                        $st_awaloutlet_heri = $st_awaloutlet_masuk_heri - $st_awaloutlet_keluar_heri;
                        $rph_awaloutlet_heri = $rph_awaloutlet_masuk_heri - $rph_awaloutlet_keluar_heri;
                        echo number_format($st_awaloutlet_heri, 0, ',', '.');
                        echo "/";
                        echo "Rp.";
                        echo number_format($rph_awaloutlet_heri, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $cek_st_awaloutlet_masuk_gigih = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah, SUM(tbl_produk.harga_beli) AS harga
                          FROM tbl_stokoutlet, tbl_produk, tbl_outlet
                          WHERE tbl_stokoutlet.id_produk = tbl_produk.id_produk 
						              AND tbl_outlet.id_outlet = tbl_stokoutlet.id_outlet
                          AND tbl_outlet.tipe_pembelian='K'
                          AND tbl_outlet.nama_salesman='Gigih'
                          AND tbl_stokoutlet.masuk_keluar = 'MASUK'
                          AND tbl_stokoutlet.tanggal <= '$tanggal_awal_old'");
                        $st_awaloutlet_masuk_gigih = $cek_st_awaloutlet_masuk_gigih->row()->jumlah;
                        $rph_awaloutlet_masuk_gigih = $cek_st_awaloutlet_masuk_gigih->row()->harga;

                        $cek_st_awaloutlet_keluar_gigih = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah, SUM(tbl_produk.harga_beli) AS harga
                          FROM tbl_stokoutlet, tbl_produk, tbl_outlet
                          WHERE tbl_stokoutlet.id_produk = tbl_produk.id_produk 
                          AND tbl_outlet.id_outlet = tbl_stokoutlet.id_outlet
                          AND tbl_outlet.tipe_pembelian='K'
                          AND tbl_outlet.nama_salesman='Gigih'
                          AND tbl_stokoutlet.masuk_keluar = 'KELUAR'
                          AND tbl_stokoutlet.tanggal <= '$tanggal_awal_old'");
                        $st_awaloutlet_keluar_gigih = $cek_st_awaloutlet_keluar_gigih->row()->jumlah;
                        $rph_awaloutlet_keluar_gigih = $cek_st_awaloutlet_keluar_gigih->row()->harga;

                        $st_awaloutlet_gigih = $st_awaloutlet_masuk_gigih - $st_awaloutlet_keluar_gigih;
                        $rph_awaloutlet_gigih = $rph_awaloutlet_masuk_gigih - $rph_awaloutlet_keluar_gigih;
                        echo number_format($st_awaloutlet_gigih, 0, ',', '.');
                        echo "/";
                        echo "Rp.";
                        echo number_format($rph_awaloutlet_gigih, 0, ',', '.');
                      ?>
                    </td>
                      <td class="text-center">
                        <?php
                        $stawal_global = $st_awalgudang + $st_awaloutlet_heri + $st_awaloutlet_gigih;
                        $rphawal_global = $rph_awalgudang + $rph_awaloutlet_heri + $rph_awaloutlet_gigih;
                        echo number_format($stawal_global, 0, ',', '.');
                        echo "/";
                        echo "Rp.";
                        echo number_format($rphawal_global, 0, ',', '.');
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <th class="text-left">Pembelian</th>
                    <td class="text-center">
                      <?php
                        $cek_pembelian = $this->db->query("SELECT SUM(tbl_pembelian.jumlah) AS jumlah, SUM(tbl_pembelian.subtotal) AS harga
                          FROM tbl_pembelian, tbl_produk
                          WHERE tbl_pembelian.id_produk = tbl_produk.id_produk
                          AND tbl_pembelian.tanggal = '$tanggal_awal'");
                        $pembelian_jumlah = $cek_pembelian->row()->jumlah;
                        $pembelian_harga = $cek_pembelian->row()->harga;
                        echo number_format($pembelian_jumlah, 0, ',', '.');
                        echo "/";
                        echo "Rp.";
                        echo number_format($pembelian_harga, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $cek_pembelian = $this->db->query("SELECT SUM(tbl_pembelian.jumlah) AS jumlah, SUM(tbl_pembelian.subtotal) AS harga
                          FROM tbl_pembelian, tbl_produk
                          WHERE tbl_pembelian.id_produk = tbl_produk.id_produk
                          AND tbl_pembelian.tanggal = '$tanggal_awal'");
                        $pembelian_jumlah = $cek_pembelian->row()->jumlah;
                        $pembelian_harga = $cek_pembelian->row()->harga;
                        echo number_format($pembelian_jumlah, 0, ',', '.');
                        echo "/";
                        echo "Rp.";
                        echo number_format($pembelian_harga, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $cek_pembelian = $this->db->query("SELECT SUM(tbl_pembelian.jumlah) AS jumlah, SUM(tbl_pembelian.subtotal) AS harga
                          FROM tbl_pembelian, tbl_produk
                          WHERE tbl_pembelian.id_produk = tbl_produk.id_produk
                          AND tbl_pembelian.tanggal = '$tanggal_awal'");
                        $pembelian_jumlah = $cek_pembelian->row()->jumlah;
                        $pembelian_harga = $cek_pembelian->row()->harga;
                        echo number_format($pembelian_jumlah, 0, ',', '.');
                        echo "/";
                        echo "Rp.";
                        echo number_format($pembelian_harga, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $cek_pembelian = $this->db->query("SELECT SUM(tbl_pembelian.jumlah) AS jumlah, SUM(tbl_pembelian.subtotal) AS harga
                          FROM tbl_pembelian, tbl_produk
                          WHERE tbl_pembelian.id_produk = tbl_produk.id_produk
                          AND tbl_pembelian.tanggal = '$tanggal_awal'");
                        $pembelian_jumlah = $cek_pembelian->row()->jumlah;
                        $pembelian_harga = $cek_pembelian->row()->harga;
                        echo number_format($pembelian_jumlah, 0, ',', '.');
                        echo "/";
                        echo "Rp.";
                        echo number_format($pembelian_harga, 0, ',', '.');
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <th class="text-left">Stok Akhir</th>
                    <td class="text-center">
                      <?php
                        $cek_st_akhirgudang_masuk = $this->db->query("SELECT SUM(tbl_stokgudang.jumlah) AS jumlah, SUM(tbl_produk.harga_beli) AS harga
                          FROM tbl_stokgudang, tbl_produk
                          WHERE tbl_stokgudang.id_produk = tbl_produk.id_produk 
                          AND tbl_stokgudang.masuk_keluar = 'MASUK'
                          AND tbl_stokgudang.tanggal <= '$tanggal_awal'");
                        $st_akhirgudang_masuk = $cek_st_akhirgudang_masuk->row()->jumlah;
                        $rph_akhirgudang_masuk = $cek_st_akhirgudang_masuk->row()->harga;

                        $cek_st_akhirgudang_keluar = $this->db->query("SELECT SUM(tbl_stokgudang.jumlah) AS jumlah, SUM(tbl_produk.harga_beli) AS harga
                        FROM tbl_stokgudang, tbl_produk
                        WHERE tbl_stokgudang.id_produk = tbl_produk.id_produk 
                        AND tbl_stokgudang.masuk_keluar = 'KELUAR'
                        AND tbl_stokgudang.tanggal <= '$tanggal_awal'");
                        $st_akhirgudang_keluar = $cek_st_akhirgudang_keluar->row()->jumlah;
                        $rph_akhirgudang_keluar = $cek_st_akhirgudang_keluar->row()->harga;

                        $st_akhirgudang = $st_akhirgudang_masuk - $st_akhirgudang_keluar;
                        $rph_akhirgudang = $rph_akhirgudang_masuk - $rph_akhirgudang_keluar;
                        echo number_format($st_akhirgudang, 0, ',', '.');
                        echo "/";
                        echo "Rp.";
                        echo number_format($rph_akhirgudang, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $cek_st_akhiroutlet_masuk_heri = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah, SUM(tbl_produk.harga_beli) AS harga
                          FROM tbl_stokoutlet, tbl_produk, tbl_outlet
                          WHERE tbl_stokoutlet.id_produk = tbl_produk.id_produk 
						              AND tbl_outlet.id_outlet = tbl_stokoutlet.id_outlet
                          AND tbl_outlet.tipe_pembelian='K'
                          AND tbl_outlet.nama_salesman='Heri'
                          AND tbl_stokoutlet.masuk_keluar = 'MASUK'
                          AND tbl_stokoutlet.tanggal <= '$tanggal_awal'");
                        $st_akhiroutlet_masuk_heri = $cek_st_akhiroutlet_masuk_heri->row()->jumlah;
                        $rph_akhiroutlet_masuk_heri = $cek_st_akhiroutlet_masuk_heri->row()->harga;

                        $cek_st_akhiroutlet_keluar_heri = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah, SUM(tbl_produk.harga_beli) AS harga
                          FROM tbl_stokoutlet, tbl_produk, tbl_outlet
                          WHERE tbl_stokoutlet.id_produk = tbl_produk.id_produk 
						              AND tbl_outlet.id_outlet = tbl_stokoutlet.id_outlet
                          AND tbl_outlet.tipe_pembelian='K'
                          AND tbl_outlet.nama_salesman='Heri'
                          AND tbl_stokoutlet.masuk_keluar = 'KELUAR'
                          AND tbl_stokoutlet.tanggal <= '$tanggal_awal'");
                        $st_akhiroutlet_keluar_heri = $cek_st_akhiroutlet_keluar_heri->row()->jumlah;
                        $rph_akhiroutlet_keluar_heri = $cek_st_akhiroutlet_keluar_heri->row()->harga;

                        $st_akhiroutlet_heri = $st_akhiroutlet_masuk_heri - $st_akhiroutlet_keluar_heri;
                        $rph_akhiroutlet_heri = $rph_akhiroutlet_masuk_heri - $rph_akhiroutlet_keluar_heri;
                        echo number_format($st_akhiroutlet_heri, 0, ',', '.');
                        echo "/";
                        echo "Rp.";
                        echo number_format($rph_akhiroutlet_heri, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $cek_st_akhiroutlet_masuk_gigih = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah, SUM(tbl_produk.harga_beli) AS harga
                          FROM tbl_stokoutlet, tbl_produk, tbl_outlet
                          WHERE tbl_stokoutlet.id_produk = tbl_produk.id_produk 
						              AND tbl_outlet.id_outlet = tbl_stokoutlet.id_outlet
                          AND tbl_outlet.tipe_pembelian='K'
                          AND tbl_outlet.nama_salesman='Gigih'
                          AND tbl_stokoutlet.masuk_keluar = 'MASUK'
                          AND tbl_stokoutlet.tanggal <= '$tanggal_awal'");
                        $st_akhiroutlet_masuk_gigih = $cek_st_akhiroutlet_masuk_gigih->row()->jumlah;
                        $rph_akhiroutlet_masuk_gigih = $cek_st_akhiroutlet_masuk_gigih->row()->harga;

                        $cek_st_akhiroutlet_keluar_gigih = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah, SUM(tbl_produk.harga_beli) AS harga
                          FROM tbl_stokoutlet, tbl_produk, tbl_outlet
                          WHERE tbl_stokoutlet.id_produk = tbl_produk.id_produk 
                          AND tbl_outlet.id_outlet = tbl_stokoutlet.id_outlet
                          AND tbl_outlet.tipe_pembelian='K'
                          AND tbl_outlet.nama_salesman='Gigih'
                          AND tbl_stokoutlet.masuk_keluar = 'KELUAR'
                          AND tbl_stokoutlet.tanggal <= '$tanggal_awal'");
                        $st_akhiroutlet_keluar_gigih = $cek_st_akhiroutlet_keluar_gigih->row()->jumlah;
                        $rph_akhiroutlet_keluar_gigih = $cek_st_akhiroutlet_keluar_gigih->row()->harga;

                        $st_akhiroutlet_gigih = $st_akhiroutlet_masuk_gigih - $st_akhiroutlet_keluar_gigih;
                        $rph_akhiroutlet_gigih = $rph_akhiroutlet_masuk_gigih - $rph_akhiroutlet_keluar_gigih;
                        echo number_format($st_akhiroutlet_gigih, 0, ',', '.');
                        echo "/";
                        echo "Rp.";
                        echo number_format($rph_akhiroutlet_gigih, 0, ',', '.');
                      ?>
                    </td>
                      <td class="text-center">
                        <?php
                        $stakhir_global = $st_akhirgudang + $st_akhiroutlet_heri + $st_akhiroutlet_gigih;
                        $rphakhir_global = $rph_akhirgudang + $rph_akhiroutlet_heri + $rph_akhiroutlet_gigih;
                        echo number_format($stakhir_global, 0, ',', '.');
                        echo "/";
                        echo "Rp.";
                        echo number_format($rphakhir_global, 0, ',', '.');
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <th class="text-left">HPP</th>
                    <td class="text-center">
                      <?php
                        $st_stokawal = $st_awalgudang+$st_awaloutlet_heri+$st_awaloutlet_gigih+$stawal_global;
                        $rph_stokawal = $rph_awalgudang+$rph_awaloutlet_heri+$rph_awaloutlet_gigih+$rphawal_global;

                        $st_stokakhir = $st_akhirgudang+$st_akhiroutlet_heri+$st_akhiroutlet_gigih+$stakhir_global;
                        $rph_stokakhir = $rph_akhirgudang+$rph_akhiroutlet_heri+$rph_akhiroutlet_gigih+$rphakhir_global;

                        $st_hpp = $st_stokawal+$pembelian_jumlah-$st_stokakhir;
                        $rph_hpp = $rph_stokawal+$rph_stokakhir-$rph_stokakhir;

                        echo number_format($st_hpp, 0, ',', '.');
                        echo "/";
                        echo "Rp.";
                        echo number_format($rph_hpp, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $st_stokawal = $st_awalgudang+$st_awaloutlet_heri+$st_awaloutlet_gigih+$stawal_global;
                        $rph_stokawal = $rph_awalgudang+$rph_awaloutlet_heri+$rph_awaloutlet_gigih+$rphawal_global;

                        $st_stokakhir = $st_akhirgudang+$st_akhiroutlet_heri+$st_akhiroutlet_gigih+$stakhir_global;
                        $rph_stokakhir = $rph_akhirgudang+$rph_akhiroutlet_heri+$rph_akhiroutlet_gigih+$rphakhir_global;

                        $st_hpp = $st_stokawal+$pembelian_jumlah-$st_stokakhir;
                        $rph_hpp = $rph_stokawal+$rph_stokakhir-$rph_stokakhir;

                        echo number_format($st_hpp, 0, ',', '.');
                        echo "/";
                        echo "Rp.";
                        echo number_format($rph_hpp, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $st_stokawal = $st_awalgudang+$st_awaloutlet_heri+$st_awaloutlet_gigih+$stawal_global;
                        $rph_stokawal = $rph_awalgudang+$rph_awaloutlet_heri+$rph_awaloutlet_gigih+$rphawal_global;

                        $st_stokakhir = $st_akhirgudang+$st_akhiroutlet_heri+$st_akhiroutlet_gigih+$stakhir_global;
                        $rph_stokakhir = $rph_akhirgudang+$rph_akhiroutlet_heri+$rph_akhiroutlet_gigih+$rphakhir_global;

                        $st_hpp = $st_stokawal+$pembelian_jumlah-$st_stokakhir;
                        $rph_hpp = $rph_stokawal+$rph_stokakhir-$rph_stokakhir;

                        echo number_format($st_hpp, 0, ',', '.');
                        echo "/";
                        echo "Rp.";
                        echo number_format($rph_hpp, 0, ',', '.');
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $st_stokawal = $st_awalgudang+$st_awaloutlet_heri+$st_awaloutlet_gigih+$stawal_global;
                        $rph_stokawal = $rph_awalgudang+$rph_awaloutlet_heri+$rph_awaloutlet_gigih+$rphawal_global;

                        $st_stokakhir = $st_akhirgudang+$st_akhiroutlet_heri+$st_akhiroutlet_gigih+$stakhir_global;
                        $rph_stokakhir = $rph_akhirgudang+$rph_akhiroutlet_heri+$rph_akhiroutlet_gigih+$rphakhir_global;

                        $st_hpp = $st_stokawal+$pembelian_jumlah-$st_stokakhir;
                        $rph_hpp = $rph_stokawal+$rph_stokakhir-$rph_stokakhir;

                        echo number_format($st_hpp, 0, ',', '.');
                        echo "/";
                        echo "Rp.";
                        echo number_format($rph_hpp, 0, ',', '.');
                      ?>
                    </td>
                  </tr>
                </tbody>
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