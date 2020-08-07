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
          <li><a href="<?php echo base_url('laporan/penjualan'); ?>"><i class="fa fa-circle-o"></i> Laporan Penjualan</a></li>
          <li class="active"><a href="<?php echo base_url('laporan/kas'); ?>"><i class="fa fa-circle-o"></i> Laporan Kas</a></li>
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
      <b>Laporan Kas</b>
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
            <li><a href="<?php echo base_url('laporan/kas'); ?>">Laporan Kas</a></li>
            <li class="active"><a href="<?php echo base_url('laporan/kas_keluar'); ?>">Uang Keluar</a></li>
            <li class="pull-right">
              <div class="text-center">
                <div class="pull-right">
                  <button type="button" class="add btn btn-flat btn-primary active" data-toggle="modal" data-target="#LAPORANSETORAN">Riwayat Setoran</button>
                  <!-- Expand -->
                  <div class="modal fade bd-example-modal-lg" id="LAPORANSETORAN">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Riwayat Setoran</h4>
                        </div>
                        <div class="modal-body table-responsive">
                          <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                              <tr role="row">
                                <th class="sorting_1" width="10" style="text-align: center;">No</th>
                                <th class="sorting" style="text-align: center;">Tanggal</th>
                                <th class="sorting" style="text-align: center;">Nominal</th>
                                <th class="sorting" style="text-align: center;">Nama Bank</th>
                                <th class="sorting" style="text-align: center;">Bukti Setor</th>
                              </tr>
                            </thead>                                
                            <tbody>
                              <?php
                                $cek_kas2 = $this->db->query("SELECT * FROM tbl_kas_2 ORDER BY tanggal DESC");
                                  $no_kas2=0;
                                  foreach($cek_kas2->result_array() as $tampil_kas2):
                                    $no_kas2++;
                                    $id_kas_kas2 = $tampil_kas2['id_kas'];
                                    $tanggal_kas2 = $tampil_kas2['tanggal'];
                                    $total_uang_masuk_cash_kas2 = $tampil_kas2['total_uang_masuk_cash'];
                                    $total_uang_masuk_bank_kas2 = $tampil_kas2['total_uang_masuk_bank'];
                                    $total_uang_keluar_cash_kas2 = $tampil_kas2['total_uang_keluar_cash'];
                                    $total_uang_keluar_bank_kas2 = $tampil_kas2['total_uang_keluar_bank'];
                                    $setor_kas2 = $tampil_kas2['setor'];
                                    $id_file_kas2 = $tampil_kas2['id_file'];
                                    $bank_kas2 = $tampil_kas2['bank'];

                              ?>
                              <tr>
                                <td class="text-center"><?php echo $no_kas2; ?></td>
                                <td class="text-center"><?php $new_kas2 = strtotime($tanggal_kas2); $newDate_kas2 = date('d/m/Y', $new_kas2);  echo $newDate_kas2; ?></td>
                                <td class="text-center"><?php echo number_format($setor_kas2, 0, ',', '.'); ?></td>
                                <td class="text-center"><?php echo $bank_kas2; ?></td>
                                <td class="text-center"><a href="https://drive.google.com/file/d/<?php echo $id_file_kas2; ?>/view" target="_blank"><i class="fa fa-fw fa-file-pdf-o"></i></a></td>
                              </tr>
                              <?php endforeach; ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Expand -->
                </div>
              </div>
            </li>
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
                      // $cekfirst = date('Y-m-d');
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
                      <form method="get" action="<?php echo base_url('laporan/kas_keluar'); ?>">
                        <input type="hidden" name="tanggal_awal" id="tanggal_awal">
                        <input type="hidden" name="tanggal_akhir" id="tanggal_akhir">
                        <button type="submit" class="btn btn-primary btn-sm btn-flat" id="button_search" disabled="disabled">Go!</button>
                      </form>  
                    </span>
                  </div>
                </div>
                
                <div class="box-body chart-responsive">
                  <div class="col-md-12 form-horizontal table-responsive">                    
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr class="bg-info">
                          <th class="text-center" width="30">No</th>
                          <th class="text-center">Jenis Pengeluaran</th>
                          <th class="text-center">Total Uang</th>                 
                          <th class="text-center"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $no=0;
                          $total=0;
                          foreach($kas_keluar->result_array() as $tampil):
                            $no++;
                            $account_transaksi = $tampil['account_transaksi'];
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no; ?></td>
                            <td class="text-left"><?php echo $account_transaksi; ?></td>
                            <td class="text-center">Rp. 
                                <?php
                                    $hitung1 = $this->db->query("SELECT SUM(nominal) AS nominal 
                                        FROM tbl_kas_1
                                        WHERE account_transaksi='$account_transaksi'
                                        AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
                                    $total_uang_masuk = $hitung1->row()->nominal;
                                    echo number_format($total_uang_masuk, 0, ',', '.');
                                    $total += $total_uang_masuk;
                                ?>
                            </td>
                            <td class="text-left" width="50">
                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#LIHAT<?php echo $no; ?>"><i class="fa fa-expand"></i></button>
                                <!-- Expand -->
                                <div class="modal fade bd-example-modal-lg" id="LIHAT<?php echo $no; ?>">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Detail Kas</h4>
                                    </div>
                                    <div class="modal-body table-responsive">
                                        <table id="example2" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">
                                            <th class="sorting_1" width="10" style="text-align: center;">No</th>
                                            <th class="sorting" style="text-align: center;">Tanggal</th>
                                            <th class="sorting" style="text-align: center;">Tujuan</th>
                                            <th class="sorting" style="text-align: center;">Account Transaksi</th>
                                            <th class="sorting" style="text-align: center;">Tipe</th>
                                            <th class="sorting" style="text-align: center;">Jenis</th>
                                            <th class="sorting" style="text-align: center;">Nominal</th>
                                            <th class="sorting" style="text-align: center;">Keterangan</th>
                                            <th class="sorting" style="text-align: center;">Foto</th>
                                            </tr>
                                        </thead>                                
                                        <tbody>
                                            <?php
                                            $cek_detail = $this->db->query("SELECT * FROM tbl_kas_1 WHERE account_transaksi='$account_transaksi' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
                                                $no_detail=0;
                                                foreach($cek_detail->result_array() as $tampil_detail):
                                                $no_detail++;
                                                $id_kas_detail = $tampil_detail['id_kas'];
                                                $tanggal_detail = $tampil_detail['tanggal'];
                                                $tujuan_detail = $tampil_detail['tujuan'];
                                                $account_transaksi_detail = $tampil_detail['account_transaksi'];
                                                $tipe_detail = $tampil_detail['tipe'];
                                                $jenis_detail = $tampil_detail['jenis'];
                                                $nominal_detail = $tampil_detail['nominal'];
                                                $keterangan_detail = $tampil_detail['keterangan'];
                                                $id_file_detail = $tampil_detail['id_file'];

                                            ?>
                                            <tr>
                                            <td class="text-center"><?php echo $no_detail; ?></td>
                                            <td class="text-center"><?php $new_detail = strtotime($tanggal_detail); $newDate_detail = date('d/m/Y', $new_detail);  echo $newDate_detail; ?></td>
                                            <td class="text-center"><?php echo $tujuan_detail; ?></td>
                                            <td class="text-left"><?php echo $account_transaksi_detail; ?></td>
                                            <td class="text-center"><?php echo $tipe_detail; ?></td>
                                            <td class="text-center"><?php echo $jenis_detail; ?></td>
                                            <td class="text-center"><?php echo number_format($nominal_detail, 0, ',', '.'); ?></td>
                                            <td class="text-left"><?php echo $keterangan_detail; ?></td>
                                            <td class="text-center"><a href="https://drive.google.com/file/d/<?php echo $id_file_detail; ?>/view" target="_blank"><i class="fa fa-fw fa-file-pdf-o"></i></a></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                      <thead>
                        <tr>
                          <th class="text-right" colspan="2">Total Keluar</th>                 
                          <th class="text-center">Rp. <?php echo number_format($total, 0, ',', '.'); ?></th>
                          <th class="text-center"></th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>       
              </div>
            <!-- /.tab-pane -->
          </div>
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