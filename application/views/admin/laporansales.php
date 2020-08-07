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
          <li class="active"><a href="<?php echo base_url('laporan/sales'); ?>"><i class="fa fa-circle-o"></i> Laporan Sales</a></li>
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
      <b>Laporan Sales</b>
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

            <form method="POST" action="<?php echo base_url('laporan/sales_search'); ?>">
            <div class="col-md-5 form-horizontal">
              <div class="form-group">
                <div class="col-sm-6">
                  <select name="nama_salesman" id="nama_salesman" class="form-control">
                    <option value="" selected>- Salesman All</option>
                    <?php
                      foreach($namasales->result_array() as $tampil):
                        $nama = $tampil['nama'];
                    ?>
                    <option value="<?php echo $nama; ?>"><?php echo $nama; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="col-sm-4">
                  <select name="rute" id="rute" class="form-control">
                    <option value="">- Rute All</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                </div>
                <div class="col-sm-1">
                  <button type="submit" class="add btn btn-flat btn-primary active" id="button_tampilkan"><i class="fa fa-search"></i> Tampilkan</button>
                </div>
              </div>
            </div>

            <div class="pull-right">
              <a href="<?php echo base_url('laporan/sales_ao'); ?>"><button type="button" class="add btn btn-flat btn-primary active">AO</button></a>
              <a href="<?php echo base_url('laporan/sales_non'); ?>"><button type="button" class="add btn btn-flat btn-primary active">NON</button></a>
            </div>

            </form>

            <div class="col-md-12 form-horizontal table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr class="bg-info">
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Outlet</th>
                    <th class="text-center">Nilai Stok</th>
                    <th class="text-center">Status Program</th>
                    <th class="text-center">Sales</th>
                    <th class="text-center">Rute</th>
                    <th class="text-center">3 Bulan</th>
                    <th class="text-center">2 Bulan</th>
                    <th class="text-center">1 Bulan</th>
                    <th class="text-center">Bulan Ini</th>
                    <th class="text-center">Action Recomendation</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no=0;
                    $total3bulan=0;
                    $total2bulan=0;
                    $total1bulan=0;
                    $totalinibulan=0;
                    foreach($outlet->result_array() as $tampil):
                      $no++;
                      $id_outlet = $tampil['id_outlet'];
                      $nama_outlet = $tampil['nama_outlet'];
                      $alamat = $tampil['alamat'];
                      $kecamatan = $tampil['kecamatan'];
                      $kabupaten = $tampil['kabupaten'];
                      $telepon = $tampil['telepon'];
                      $nama_pemilik = $tampil['nama_pemilik'];
                      $longitude = $tampil['longitude'];
                      $latitude = $tampil['latitude'];
                      $foto_outlet = $tampil['foto_outlet'];
                      $tipe_pembelian = $tampil['tipe_pembelian'];
                      $status_program = $tampil['status_program'];
                      $id_outlet = $tampil['id_outlet'];
                      $nama_salesman = $tampil['nama_salesman'];
                      $rute = $tampil['rute'];
                    ?>
                  <tr>
                    <td width="30" class="text-center"><?php echo $no; ?></td>
                    <td class="text-left"><?php echo $nama_outlet; ?></td>
                    <td class="text-center">
                      <?php
                        if($status_program === "COMPLETE"){ 
                          $cek_uang_konsinyasi = $this->db->query("SELECT SUM(tbl_produk.harga_ky_t_bayar*tbl_stokoutlet_detail.jumlah) subtotal
                                                                  FROM tbl_produk, tbl_stokoutlet_detail
                                                                  WHERE tbl_produk.id_produk = tbl_stokoutlet_detail.id_produk
                                                                  AND tbl_stokoutlet_detail.id_outlet='$id_outlet'");
                          $uang_konsinyasi = $cek_uang_konsinyasi->row()->subtotal;
                          echo number_format($uang_konsinyasi, 0, ',', '.');
                        }else if($status_program === "JP TEMPO"){ 
                          echo $status_program;
                        }else if($status_program === "JP CASH"){ 
                          echo $status_program;
                        } 
                      ?>                      
                    </td>
                    <td class="text-center"><?php if($status_program === 'COMPLETE'){echo "KONSINYASI";}else{echo $status_program;} ?></td>
                    <td class="text-center"><?php echo $nama_salesman; ?></td>
                    <td class="text-center"><?php echo $rute; ?></td>
                    <td class="text-center">
                      <?php
                        $cek_hariini = date('Y-m-d');
                        $tanggal_first_bulan_3 = date("Y-m-01", strtotime("$cek_hariini -3 month"));
                        $tanggal_last_bulan_3 = date("Y-m-t", strtotime("$cek_hariini -1 month"));
                        $penjualan3bulan = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE tanggal BETWEEN '$tanggal_first_bulan_3' AND '$tanggal_last_bulan_3' AND id_outlet='$id_outlet'");
                        $nominal3bulan = $penjualan3bulan->row()->subtotal;
                        echo number_format($nominal3bulan, 0, ',', '.');
                        
                        $total3bulan += $nominal3bulan;
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $tanggal_first_bulan_2 = date("Y-m-01", strtotime("$cek_hariini -2 month"));
                        $tanggal_last_bulan_2 = date("Y-m-t", strtotime("$cek_hariini -1 month"));
                        $penjualan2bulan = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE tanggal BETWEEN '$tanggal_first_bulan_2' AND '$tanggal_last_bulan_2' AND id_outlet='$id_outlet'");
                        $nominal2bulan = $penjualan2bulan->row()->subtotal;
                        echo number_format($nominal2bulan, 0, ',', '.');
                        
                        $total2bulan += $nominal2bulan;
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $tanggal_first_bulan_1 = date("Y-m-01", strtotime("$cek_hariini -1 month"));
                        $tanggal_last_bulan_1 = date("Y-m-t", strtotime("$cek_hariini -1 month"));

                        $penjualan1bulan = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE tanggal BETWEEN '$tanggal_first_bulan_1' AND '$tanggal_last_bulan_1' AND id_outlet='$id_outlet'");
                        $nominal1bulan = $penjualan1bulan->row()->subtotal;
                        echo number_format($nominal1bulan, 0, ',', '.');
                        
                        $total1bulan += $nominal1bulan;
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $tanggal_first_bulan_ini = date("Y-m-01", strtotime("$cek_hariini -1 month"));
                        $tanggal_last_bulan_ini = date("Y-m-t", strtotime("$cek_hariini -1 month"));

                        $penjualaninibulan = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE tanggal >= date_trunc('month', CURRENT_DATE) AND id_outlet='$id_outlet'");
                        $nominalinibulan = $penjualaninibulan->row()->subtotal;
                        echo number_format($nominalinibulan, 0, ',', '.');
                        
                        $totalinibulan += $nominalinibulan;
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                        // $dateini = date('Y-m-d');
                        // $date3bulan = date("Y-m-d", strtotime("$hariini -90 days"));
                        // $rata3bulan = $this->db->query("SELECT AVG(subtotal) AS subtotal FROM tbl_penjualan WHERE tanggal BETWEEN '$date3bulan' AND '$dateini' AND id_outlet='$id_outlet'");
                        // $nominalrata3bulan = $rata3bulan->row()->subtotal;
                        
                        // $date1bulan = date("Y-m-d", strtotime("$hariini -30 days"));
                        // $rata1bulan = $this->db->query("SELECT AVG(subtotal) AS subtotal FROM tbl_penjualan WHERE tanggal BETWEEN '$date1bulan' AND '$dateini' AND id_outlet='$id_outlet'");
                        // $nominalrata1bulan = $rata1bulan->row()->subtotal;

                        // if($nominalrata3bulan < $nominalrata1bulan){
                        //   echo "<a href='https://app.portalindo.net/perubahanstok'><button type='button' class='btn btn-flat btn-warning btn-xs active'><i class='fa fa-minus-square'></i> Kurangi</button></a>&nbsp;<a href='https://app.portalindo.net/pencabutan'><button type='button' class='btn btn-flat btn-danger btn-xs active'><i class='fa fa-close'></i> Cabut</button></a>";
                        // }else if($nominalrata3bulan > $nominalrata1bulan){
                        //   echo "<a href='https://app.portalindo.net/perubahanstok'><button type='button' class='btn btn-flat btn-success btn-xs active'><i class='fa fa-plus-square'></i> Tambah</button></a>";
                        // }
                      ?>
                      <?php
                        if($status_program === "COMPLETE"){ 
                          $cek_akumulasi = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE tanggal >= date_trunc('month', CURRENT_DATE) AND id_outlet='$id_outlet' AND tipe_pembelian='KONSINYASI'");
                          $akumulasi = $cek_akumulasi->row()->subtotal;

                          $cek_stokawal = $this->db->query("SELECT SUM(tbl_produk.harga_ky_t_bayar*tbl_stokoutlet_detail.jumlah) subtotal FROM tbl_produk, tbl_stokoutlet_detail WHERE tbl_produk.id_produk = tbl_stokoutlet_detail.id_produk AND tbl_stokoutlet_detail.id_outlet='$id_outlet'");
                          $stokawal = $cek_stokawal->row()->subtotal;

                          $jumlah_hari = date('d');

                          $tahun = date('Y'); $bulan = date('m');
                          $jumlah_hari_bulan_ini = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);

                          $nilai_acuan_60 = 60/100*$stokawal*$jumlah_hari/$jumlah_hari_bulan_ini;
                          $nilai_acuan_40 = 40/100*$stokawal*$jumlah_hari/$jumlah_hari_bulan_ini;
                          $nilai_acuan_10 = 10/100*$stokawal*$jumlah_hari/$jumlah_hari_bulan_ini;

                          if($akumulasi > $stokawal OR $akumulasi > $nominal1bulan){
                            echo "<small class='label' style='background-color: #ff9900;'>Excellent</small>";
                          }elseif($akumulasi > $nilai_acuan_60){
                            echo "<small class='label' style='background-color: #009933;'>Toko Bagus Bos</small>";
                          }elseif($akumulasi >= $nilai_acuan_40 && $akumulasi <= $nilai_acuan_60){
                            echo "<small class='label' style='background-color: #ffff00; color:#000000;'>Kok Sepi Bos</small>";
                          }elseif($akumulasi >= $nilai_acuan_10 && $akumulasi <= $nilai_acuan_40){
                            echo "<small class='label' style='background-color: #ff6600;'>Eval Bos</small>";
                          }elseif($akumulasi > 0 && $akumulasi < $nilai_acuan_10){
                            echo "<small class='label' style='background-color: #ff0000;'>Cabut Bos</small>";
                          }elseif($akumulasi == null){
                            echo "<small class='label' style='background-color: #b3b3b3; color:#000000;'>Kok Belum Transaksi Sih</small>";
                          }
                        }else if($status_program === "JP TEMPO"){ 
                          // echo "CEK TEMPO";
                          $cek_nota_piutang = $this->db->query("SELECT DISTINCT tbl_piutang.no_nota_penjualan, tbl_piutang.tanggal_jatuh_tempo FROM tbl_piutang, tbl_penjualan, tbl_outlet WHERE tbl_piutang.no_nota_penjualan = tbl_penjualan.no_nota_penjualan AND tbl_penjualan.id_outlet = tbl_outlet.id_outlet AND tbl_outlet.id_outlet = '$id_outlet' ORDER BY tbl_piutang.tanggal_jatuh_tempo DESC");

                          $jum=0;
                          $tanggal_tempo_cek='';
                          foreach($cek_nota_piutang->result_array() as $tampil_cek):
                            $jum++;
                            $no_nota_penjualan = $tampil_cek['no_nota_penjualan'];
                            $tanggal_jatuh_tempo = $tampil_cek['tanggal_jatuh_tempo'];

                            $cek_status_piutang = $this->db->query("SELECT DISTINCT no_nota_penjualan, sisa, status, tanggal, tanggal_jatuh_tempo FROM tbl_piutang WHERE tanggal_bayar = (SELECT MAX(tanggal_bayar) FROM tbl_piutang WHERE no_nota_penjualan='$no_nota_penjualan') AND no_nota_penjualan = '$no_nota_penjualan' ORDER BY status DESC LIMIT 1");
                            $status_cek = $cek_status_piutang->row()->status;
                            $tempo_cek = $cek_status_piutang->row()->tanggal_jatuh_tempo;

                            $x=1;
                            while ($x<=$jum){
                              if($status_cek == 'Lunas'){
                                $x++;
                                continue;
                              }else{
                                $x = $jum+1;
                                $tanggal_tempo_cek = $tempo_cek;
                              }
                            }
                            
                          endforeach;
                          $kurang_3 = date('Y-m-d', strtotime('-3 days', strtotime($tanggal_tempo_cek)));
                          $lebih_7 = date('Y-m-d', strtotime('+7 days', strtotime($tanggal_tempo_cek)));
                          $lebih_21 = date('Y-m-d', strtotime('+21 days', strtotime($tanggal_tempo_cek)));
                          $lebih_45 = date('Y-m-d', strtotime('+45 days', strtotime($tanggal_tempo_cek)));

                          if($tanggal_tempo_cek >= $kurang_3 && $tanggal_tempo_cek <= $lebih_7){
                            echo "<small class='label' style='background-color: #82E0AA; color:#000000;'>Tagih Bos</small>";
                          }elseif($tanggal_tempo_cek === ''){
                            echo "<small class='label' style='background-color: #b3b3b3; color:#000000;'>Tidak Ada Transaksi</small>";
                          }elseif($tanggal_tempo_cek >= $lebih_7 && $tanggal_tempo_cek <= $lebih_21){
                            echo "<small class='label' style='background-color: #F9E79F; color:#000000;'>Hati-hati</small>";
                          }elseif($tanggal_tempo_cek >= $lebih_21 && $tanggal_tempo_cek <= $lebih_45){
                            echo "<small class='label' style='background-color: ##E59866; color:#000000;'>Galakin Aje</small>";
                          }elseif($tanggal_tempo_cek > $lebih_45){
                            echo "<small class='label' style='background-color: ###CD6155; color:#000000;'>Sita Aje</small>";
                          }
                          

                        }else if($status_program === "JP CASH"){ 
                          $cek_omzet_bulan_ini = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE tanggal >= date_trunc('month', CURRENT_DATE) AND id_outlet='$id_outlet'");
                          $omzet_bulan_ini = $cek_omzet_bulan_ini->row()->subtotal;
                          $bulan_lalu = date('m')-1; $tahun_ini = date('Y');
                          $cek_omzet_bulan_lalu = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE tanggal >= date_trunc('month', CURRENT_DATE - INTERVAL '1' month) AND tanggal < date_trunc('month', CURRENT_DATE) AND id_outlet='$id_outlet'");
                          $omzet_bulan_lalu = $cek_omzet_bulan_lalu->row()->subtotal;

                          $jumlah_hari = date('d');

                          $tahun = date('Y'); $bulan = date('m');
                          $jumlah_hari_bulan_ini = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);

                          $nilai_acuan_80_t = 80/100*$omzet_bulan_lalu*$jumlah_hari/$jumlah_hari_bulan_ini;
                          $nilai_acuan_60_t = 60/100*$omzet_bulan_lalu*$jumlah_hari/$jumlah_hari_bulan_ini;
                          $nilai_acuan_20_t = 20/100*$omzet_bulan_lalu*$jumlah_hari/$jumlah_hari_bulan_ini;

                          if($omzet_bulan_ini > $nilai_acuan_80_t){
                            echo "<small class='label' style='background-color: #003300;'>Tingkatkan</small>";
                          }elseif($omzet_bulan_ini == null){
                            echo "<small class='label' style='background-color: #808080;'>Mana Nih</small>";
                          }elseif($omzet_bulan_ini >= $nilai_acuan_60_t && $omzet_bulan_ini <= $nilai_acuan_80_t){
                            echo "<small class='label' style='background-color: #e6e600; color:#000000;'>Kok Turun</small>";
                          }elseif($omzet_bulan_ini >= $nilai_acuan_20_t && $omzet_bulan_ini <= $nilai_acuan_60_t){
                            echo "<small class='label' style='background-color: #cc5200;'>Selingkuh</small>";
                          }elseif($omzet_bulan_ini > 0 && $omzet_bulan_ini < $nilai_acuan_20_t){
                            echo "<small class='label' style='background-color: #b30000;'>Tukar Sales</small>";
                          }

                          // echo $omzet_bulan_ini;
                          // echo "<br>";
                          // echo $nilai_acuan_80_t;
                          // echo "<br>";
                          // echo $nilai_acuan_60_t;
                          // echo "<br>";
                          // echo $nilai_acuan_20_t;

                          // if($omzet_bulan_ini > $nilai_acuan_80_t){
                          //   echo "<small class='label' style='background-color: #003300;'>Tingkatkan</small>";
                          // }else{
                          //   if($omzet_bulan_ini == null){
                          //     echo "<small class='label' style='background-color: #808080;'>Mana Nih</small>";
                          //   }else{
                          //     if($omzet_bulan_ini >= $nilai_acuan_60_t && $omzet_bulan_ini <= $nilai_acuan_80_t){
                          //       echo "<small class='label' style='background-color: #e6e600; color:#000000;'>Kok Turun</small>";
                          //     }else{
                          //       if($omzet_bulan_ini >= $nilai_acuan_20_t && $omzet_bulan_ini <= $nilai_acuan_60_t){
                          //         echo "<small class='label' style='background-color: #cc5200;'>Selingkuh</small>";
                          //       }else{
                          //         if($omzet_bulan_ini > 0 && $omzet_bulan_ini < $nilai_acuan_20_t){
                          //           echo "<small class='label' style='background-color: #b30000;'>Tukar Sales</small>";
                          //         }
                          //       }
                          //     }
                          //   }
                          // }


                        } 
                      ?>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th class="text-right" colspan="6">Total</th>
                    <th class="text-center">Rp. <?php echo number_format($total3bulan, 0, ',', '.'); ?></th>
                    <th class="text-center">Rp. <?php echo number_format($total2bulan, 0, ',', '.'); ?></th>
                    <th class="text-center">Rp. <?php echo number_format($total1bulan, 0, ',', '.'); ?></th>
                    <th class="text-center">Rp. <?php echo number_format($totalinibulan, 0, ',', '.'); ?></th>
                    <td></td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>          

          <div class="box-footer">
            <table width="100%">
              <tr>
                <td>
                  <div class="pull-left">
                    <table>
                      <?php
                        foreach($namasales->result_array() as $tampil):
                          $nama_salesman = $tampil['nama'];
                      ?>
                      <tr>
                        <th class="text-right"><?php echo $nama_salesman; ?></th>
                        <td class="text-right">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                          <?php
                            $cek_pencapaian = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE nama_salesman='$nama_salesman' AND tanggal >= date_trunc('month', CURRENT_DATE);");
                            $pencapaian = $cek_pencapaian->row()->subtotal;
                            echo number_format($pencapaian, 0, ',', '.');
                          ?>
                        </td>
                      </tr>
                      <tr>
                        <th class="text-right">&nbsp;</th>
                        <td class="text-right">&nbsp;</td>
                      </tr>
                      <?php endforeach; ?>
                    </table>
                  </div>
                </td>
                <td>
                  <div class="pull-right">
                    <table>
                      <tr>
                        <th class="text-right">Active Outlet</th>
                        <td class="text-right">&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php
                            $cek_ao = $this->db->query("SELECT DISTINCT id_outlet FROM tbl_penjualan WHERE tanggal >= date_trunc('month', CURRENT_DATE)");
                            $ao = $cek_ao->num_rows();
                            echo $ao;
                          ?>
                        </td>
                      </tr>
                      <tr>
                        <th class="text-right">&nbsp;</th>
                        <td class="text-right">&nbsp;</td>
                      </tr>
                      <tr>
                        <th class="text-right">&nbsp;</th>
                        <td class="text-right">&nbsp;</td>
                      </tr>
                      <tr>
                        <th class="text-right">&nbsp;</th>
                        <td class="text-right">&nbsp;</td>
                      </tr>
                    </table>
                  </div>
                </td>
              </tr>
            </table>                       
          </div>

          <div class="box-footer">
            <h4 align="center"><strong>Hitung Omzet</strong></h4>
            <div class="row">
              <div class="col-md-6 form-horizontal">
                <div class="form-group">
                  <?php
                    $kedua = date('Y-m-d');
                    $pertama = date("Y-m-d", strtotime("$kedua -7 days"));
                  ?>
                  <div class="col-sm-4">
                    <input type="date" id="tanggal_pertama" class="form-control" value="<?php echo $pertama; ?>">
                  </div>
                  <div class="col-sm-4">
                    <input type="date" id="tanggal_terakhir" class="form-control" value="<?php echo $kedua; ?>">
                  </div>
                  <div class="col-sm-1">
                    <button type="submit" class="add btn btn-flat btn-primary active" id="button_proses_omzet"><div id="Loading"><i class="fa fa-gear"></i> Proses</div></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5 form-horizontal">
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Non AO</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="non_ao_omzet" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">JP CASH</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="jp_cash_omzet" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">JP TEMPO</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="jp_tempo_omzet" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">KONSINYASI</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="konsinyasi_omzet" readonly>
                      </div>
                    </div>   
                  </div>
                </form>
              </div>
              <div class="col-md-5 form-horizontal">
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Active Outlet</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="ao_omzet" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">HERI</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="heri_omzet" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">GIGIH</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="gigih_omzet" readonly>
                      </div>
                    </div>  
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">TOTAL</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="total_omzet" readonly>
                      </div>
                    </div>      
                  </div>
                </form>
              </div> 
            </div>
          </div>

          <div class="box-footer">
            <!-- <a href="<?php //echo base_url('export/sales_penjualan'); ?>">
              <button type="button" class="btn btn-flat btn-primary active pull-right" id="button_download"><i class="fa fa-download"></i> Download</button>
            </a>             -->
          </div>
          
        </div>
      </div>
    </div>
  </section>
<!-- /.content-wrapper -->
</div>

<script>
  Utama();

  function Loading(){
    $("#Loading").empty();
    var button_loading = '<i class="fa fa fa-spinner fa-spin"></i> Proses';
    $("#Loading").append(button_loading);
  }

  function No_Loading(){
    $("#Loading").empty();
    var button_loading = '<i class="fa fa-gear"></i> Proses';
    $("#Loading").append(button_loading);
  }
  
  $("#button_proses_omzet").click(function(){
    Loading();
    non_ao();
    ao();
    jp_cash();
    jp_tempo();
    konsinyasi();
    heri();
    gigih();
    total()
  })
  
  function Utama(){
    non_ao();
    ao();
    jp_cash();
    jp_tempo();
    konsinyasi();
    heri();
    gigih();
    total()
  }

  var rp = "Rp.";

  function non_ao(){
    var tanggal_pertama = $("#tanggal_pertama").val();
    var tanggal_terakhir = $("#tanggal_terakhir").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('laporan/non_ao_omzet'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_pertama: tanggal_pertama,
                    tanggal_terakhir: tanggal_terakhir
                  },
      success   : function(data){
        document.getElementById('non_ao_omzet').value = Object.keys(data).length;
      }
    });
  }

  function ao(){
    var tanggal_pertama = $("#tanggal_pertama").val();
    var tanggal_terakhir = $("#tanggal_terakhir").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('laporan/ao_omzet'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_pertama: tanggal_pertama,
                    tanggal_terakhir: tanggal_terakhir
                  },
      success   : function(data){
        document.getElementById('ao_omzet').value = Object.keys(data).length;
      }
    });
  }
  
  function jp_cash(){
    var tanggal_pertama = $("#tanggal_pertama").val();
    var tanggal_terakhir = $("#tanggal_terakhir").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('laporan/jp_cash_omzet'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_pertama: tanggal_pertama,
                    tanggal_terakhir: tanggal_terakhir
                  },
      success   : function(data){
        document.getElementById('jp_cash_omzet').value = rp+rubah(data[0].subtotal);
      }
    });
  }

  function jp_tempo(){
    var tanggal_pertama = $("#tanggal_pertama").val();
    var tanggal_terakhir = $("#tanggal_terakhir").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('laporan/jp_tempo_omzet'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_pertama: tanggal_pertama,
                    tanggal_terakhir: tanggal_terakhir
                  },
      success   : function(data){
        document.getElementById('jp_tempo_omzet').value = rp+rubah(data[0].subtotal);
      }
    });
  }

  function konsinyasi(){
    var tanggal_pertama = $("#tanggal_pertama").val();
    var tanggal_terakhir = $("#tanggal_terakhir").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('laporan/konsinyasi_omzet'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_pertama: tanggal_pertama,
                    tanggal_terakhir: tanggal_terakhir
                  },
      success   : function(data){
        document.getElementById('konsinyasi_omzet').value = rp+rubah(data[0].subtotal);
      }
    });
  }

  function heri(){
    var tanggal_pertama = $("#tanggal_pertama").val();
    var tanggal_terakhir = $("#tanggal_terakhir").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('laporan/heri_omzet'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_pertama: tanggal_pertama,
                    tanggal_terakhir: tanggal_terakhir
                  },
      success   : function(data){
        document.getElementById('heri_omzet').value = rp+rubah(data[0].subtotal);
      }
    });
  }

  function gigih(){
    var tanggal_pertama = $("#tanggal_pertama").val();
    var tanggal_terakhir = $("#tanggal_terakhir").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('laporan/gigih_omzet'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_pertama: tanggal_pertama,
                    tanggal_terakhir: tanggal_terakhir
                  },
      success   : function(data){
        document.getElementById('gigih_omzet').value = rp+rubah(data[0].subtotal);
      }
    });
  }

  function total(){
    var tanggal_pertama = $("#tanggal_pertama").val();
    var tanggal_terakhir = $("#tanggal_terakhir").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('laporan/total_omzet'); ?>",
      dataType  : "JSON",
      data      : {
                    tanggal_pertama: tanggal_pertama,
                    tanggal_terakhir: tanggal_terakhir
                  },
      success   : function(data){
        document.getElementById('total_omzet').value = rp+rubah(data[0].subtotal);
        No_Loading();
      }
    });
  }

  function rubah(angka){
    var reverse = angka.toString().split('').reverse().join(''),
    ribuan = reverse.match(/\d{1,3}/g);
    ribuan = ribuan.join('.').split('').reverse().join('');
    return ribuan;
  }
  
</script>