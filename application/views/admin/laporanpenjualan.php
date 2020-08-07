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
          <li><a href="<?php echo base_url('laporan/pembelian'); ?>"><i class="fa fa-circle-o"></i> Laporan Pembelian</a></li>
          <li class="active"><a href="<?php echo base_url('laporan/penjualan'); ?>"><i class="fa fa-circle-o"></i> Laporan Penjualan</a></li>
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
      <b>Laporan Penjualan</b>
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

            <div class="col-md-5 form-horizontal">
              <div class="form-group">
                <form method="POST" action="<?php echo base_url('laporan/penjualan_search'); ?>">
                <div class="col-sm-4">
                  <select name="rute" id="rute" class="form-control">
                    <option value="">- Rute</option>
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
              </form>
              </div>
            </div>

            <div class="form-horizontal col-md-3">
              <div class="input-group pull-right">
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
                  <form method="POST" action="<?php echo base_url('laporan/penjualan_search_date'); ?>">
                    <input type="hidden" name="tanggal_awal" id="tanggal_awal">
                    <input type="hidden" name="tanggal_akhir" id="tanggal_akhir">
                    <button type="submit" class="btn btn-primary btn-sm btn-flat" id="button_search" disabled="disabled">Go!</button>
                  </form>  
                </span>
              </div>
            </div>

            <div class="col-md-12 form-horizontal table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr class="bg-info">
                    <th class="text-center">No</th>
                    <th class="text-center">Tanggal</th>
					          <th class="text-center">Nama</th>
                    <th class="text-center">Rute</th>
                    <th class="text-center">No Nota Penjualan</th>
                    <th class="text-center">Nilai Nominal</th>
                    <th class="text-center">Tipe</th>
                    <th class="text-center">Sales</th>
                    <th class="text-center">Status</th>
					          <th class="text-center"></th>
                    <th class="text-center"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no=0;
                    $total_nominal=0;
                    foreach($penjualan->result_array() as $tampil):
                      $no++;
                      $no_nota_penjualan = $tampil['no_nota_penjualan'];
                      $tanggal = $tampil['tanggal'];
                      $tipe_pembelian = $tampil['tipe_pembelian'];
                      $status = $tampil['status'];
                      $id_file_penjualan = $tampil['id_file_penjualan'];
                      $nama_salesman = $tampil['nama_salesman'];
                      $tempo = $tampil['tempo'];
                  ?>
                  <tr>
                    <td class="text-center"><?php echo $no; ?></td>
                    <td class="text-center"><?php $new = strtotime($tanggal); $newDate = date('d/m/Y', $new);  echo $newDate; ?></td>
                    <td><?php 
                      $cek_nama = $this->db->query("SELECT tbl_outlet.nama_outlet as nama_outlet, tbl_outlet.rute as rute, tbl_outlet.status_program as status_program FROM tbl_outlet, tbl_penjualan WHERE tbl_outlet.id_outlet = tbl_penjualan.id_outlet AND tbl_penjualan.no_nota_penjualan='$no_nota_penjualan' LIMIT 1"); 
                      $nama = $cek_nama->row()->nama_outlet;
                      echo $nama;
                    ?></td>
                    <td class="text-center"><?php echo $cek_nama->row()->rute; ?></td>
                    <td class="text-center"><?php echo $no_nota_penjualan; ?></td>
                    <td class="text-center">
                      <?php 
                        $hitung_nominal= $this->db->query("SELECT SUM(subtotal) AS nominal FROM tbl_penjualan WHERE no_nota_penjualan='$no_nota_penjualan'");
                        $nominal = $hitung_nominal->row()->nominal;
                        echo number_format($nominal, 0, ',', '.');
                        $total_nominal+=$nominal;
                      ?>
                    </td>
                    <td class="text-center">
                      <?php 
                        if($tipe_pembelian === "J"){ echo "Jual Putus"; }else if($tipe_pembelian === "K"){ echo "Konsinyasi"; }elseif($tipe_pembelian === "G"){ echo "Group Buying"; }else{ echo $tipe_pembelian; }              
                        // if($cek_nama->row()->status_program === 'COMPLETE'){
                        //   echo "KONSINYASI";
                        // }else{
                        //   echo $cek_nama->row()->status_program;
                        // }
                      ?>
                    </td>
                    <td class="text-center"><?php echo $nama_salesman; ?></td>
                    <td class="text-center">
                      <?php 
                        if ($status === 'UNDELIVER'){
                          ?> <a href="<?php echo base_url('suratjalan/daftar'); ?>"><small class="label pull-center bg-yellow">UNDELIVER</small></a> <?php
                        }else{
                          echo "<a href='https://drive.google.com/file/d/"; 
                          echo $id_file_penjualan;
                          echo "/view' target='_blank'><small class='label pull-center bg-green'>Deliver</small></a>";
                        }                  
                      ?>
                    </td>
                    <td class="text-center">
                      <a href="<?php echo base_url(); ?>penjualan/cetak_nota?no_nota_penjualan=<?php echo $no_nota_penjualan; ?>" target="_blank"><i class="fa fa-print"></i></a>
                    </td>
                    <td class="text-center">
                      <button class="btn btn-default btn-xs" data-toggle="modal" data-target="#UBAHTANGGAL<?php echo $no_nota_penjualan; ?>"><i class="fa fa-edit"></i></button>  
                      <!-- /.modal -->
                      <form method="POST" action="<?php echo base_url('laporan/ubahtanggal_nota'); ?>">
                        <div class="modal fade bd-example-modal-sm" id="UBAHTANGGAL<?php echo $no_nota_penjualan; ?>">
                          <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                              <div class="modal-header">
                                <?php echo $nama; ?> : <?php echo $no_nota_penjualan; ?>
                              </div>
                              <div class="modal-body">
                                <input type="date" name="tanggal_set" class="form-control" value="<?php echo $tanggal; ?>">
                              </div>
                              <div class="modal-footer">
                                <input type="hidden" name="no_nota_penjualan_set" value="<?php echo $no_nota_penjualan; ?>">
                                <input type="hidden" name="tempo_set" value="<?php echo $tempo; ?>">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                      <!-- /.modal -->
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr class="bg-info">
                    <th class="text-right" colspan="5">Total</th>
                    <th class="text-center">Rp. <?php echo number_format($total_nominal, 0, ',', '.'); ?></th>
                    <th class="text-center"colspan="5"></th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>          

          <!-- <div class="box-footer">
            <table>
              <?php
                // foreach($namasales->result_array() as $tampil):
                //   $nama_salesman = $tampil['nama'];
              ?>
              <tr>
                <th class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $nama_salesman; ?></th>
                <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                  <?php
                    // $cek_pencapaian = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE nama_salesman='$nama_salesman' AND tanggal >= date_trunc('month', CURRENT_DATE);");
                    // $pencapaian = $cek_pencapaian->row()->subtotal;
                    // echo number_format($pencapaian, 0, ',', '.');
                  ?>
                </td>
              </tr>
              <?php //endforeach; ?>
            </table>
          </div> -->

          <!-- <div class="box-footer">
            <table>
              <tr>
                <th></th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;Bulan ini</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;Tahun ini</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;Total All</th>
              </tr>
              <tr>
                <th class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;JP TEMPO</th>
                <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                  <?php
                    // $cek_jptempo = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                    //   FROM tbl_penjualan, tbl_outlet
                    //   WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                    //   AND tbl_penjualan.tipe_pembelian='JP TEMPO'
                    //   AND tanggal >= date_trunc('month', CURRENT_DATE);");
                    // $jptempo = $cek_jptempo->row()->subtotal;
                    // echo number_format($jptempo, 0, ',', '.');
                  ?>
                </td>
                <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                  <?php
                    // $tahun_1 = date('Y-01-01');
                    // $cek_jptempo_tahun = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                    //   FROM tbl_penjualan, tbl_outlet
                    //   WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                    //   AND tbl_penjualan.tipe_pembelian='JP TEMPO'
                    //   AND tanggal >= '$tahun_1';");
                    // $jptempo_tahun = $cek_jptempo_tahun->row()->subtotal;
                    // echo number_format($jptempo_tahun, 0, ',', '.');
                  ?>
                </td>
                <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                  <?php
                    // $cek_jp_tempo_all = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                    //   FROM tbl_penjualan, tbl_outlet
                    //   WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                    //   AND tbl_penjualan.tipe_pembelian='JP TEMPO';");
                    // $jp_tempo_all = $cek_jp_tempo_all->row()->subtotal;
                    // echo number_format($jp_tempo_all, 0, ',', '.');
                  ?>
                </td>
              </tr>
              <tr>
                <th class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;JP CASH</th>
                <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                  <?php
                    // $cek_jpcash = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                    //   FROM tbl_penjualan, tbl_outlet
                    //   WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                    //   AND tbl_penjualan.tipe_pembelian='JP CASH'
                    //   AND tanggal >= date_trunc('month', CURRENT_DATE);");
                    // $jpcash = $cek_jpcash->row()->subtotal;
                    // echo number_format($jpcash, 0, ',', '.');
                  ?>
                </td>
                <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                  <?php
                    // $cek_jpcash_tahun = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                    //   FROM tbl_penjualan, tbl_outlet
                    //   WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                    //   AND tbl_penjualan.tipe_pembelian='JP CASH'
                    //   AND tanggal >= '$tahun_1';");
                    // $jpcash_tahun = $cek_jpcash_tahun->row()->subtotal;
                    // echo number_format($jpcash_tahun, 0, ',', '.');
                  ?>
                </td>
                <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                  <?php
                    // $cek_jp_cash_all = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                    //   FROM tbl_penjualan, tbl_outlet
                    //   WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                    //   AND tbl_penjualan.tipe_pembelian='JP CASH';");
                    // $jp_cash_all = $cek_jp_cash_all->row()->subtotal;
                    // echo number_format($jp_cash_all, 0, ',', '.');
                  ?>
                </td>
              </tr>
              <tr>
                <th class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;KONSINYASI</th>
                <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                  <?php
                    // $cek_kosinyasi = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                    //   FROM tbl_penjualan, tbl_outlet
                    //   WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                    //   AND tbl_penjualan.tipe_pembelian='KONSINYASI'
                    //   AND tanggal >= date_trunc('month', CURRENT_DATE);");
                    // $kosinyasi = $cek_kosinyasi->row()->subtotal;
                    // echo number_format($kosinyasi, 0, ',', '.');
                  ?>
                </td>
                <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                  <?php
                    // $cek_kosinyasi_tahun = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                    //   FROM tbl_penjualan, tbl_outlet
                    //   WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                    //   AND tbl_penjualan.tipe_pembelian='KONSINYASI'
                    //   AND tanggal >= '$tahun_1';");
                    // $kosinyasi_tahun = $cek_kosinyasi_tahun->row()->subtotal;
                    // echo number_format($kosinyasi_tahun, 0, ',', '.');
                  ?>
                </td>
                <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Rp. 
                  <?php
                    // $cek_konsinyasi_all = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) AS subtotal 
                    //   FROM tbl_penjualan, tbl_outlet
                    //   WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
                    //   AND tbl_penjualan.tipe_pembelian='KONSINYASI';");
                    // $jp_konsinyasi_all = $cek_konsinyasi_all->row()->subtotal;
                    // echo number_format($jp_konsinyasi_all, 0, ',', '.');
                  ?>
                </td>
              </tr>
            </table>
          </div> -->

          <div class="box-footer">
            <div class="btn-group pull-right">
              
              <form method="POST" action="<?php echo base_url('export/Sales_penjualan'); ?>">
                <div class="form-group">
                  <div class="col-sm-4">
                    <input type="date" name="tanggal_pertama" class="form-control">
                  </div>
                  <div class="col-sm-4">
                    <input type="date" name="tanggal_terakhir" class="form-control">
                  </div>
                  <div class="col-sm-1">
                    <button type="submit" class="add btn btn-flat btn-primary active"><i class="fa fa-download"></i> Download</button>
                  </div>
                </div>
              </form>

              <!-- <a href="<?php //echo base_url('export/Sales_penjualan'); ?>">
                <button type="button" class="btn btn-flat btn-primary active pull-right" id="button_download"><i class="fa fa-download"></i> Download</button>
              </a> -->
            </div>
          </div>
          
        </div>
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