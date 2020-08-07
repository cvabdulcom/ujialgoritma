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
      <b>Laporan Surat Jalan</b>
      <small>Riwayat Gudang</small>
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
                  <form method="POST" action="<?php echo base_url('laporan/suratjalan_search_date'); ?>">
                    <input type="hidden" name="tanggal_awal" id="tanggal_awal">
                    <input type="hidden" name="tanggal_akhir" id="tanggal_akhir">
                    <button type="submit" class="btn btn-primary btn-sm btn-flat" id="button_search" disabled="disabled">Go!</button>
                  </form>  
                </span>
              </div>
            </div>

            <div class="col-md-12 form-horizontal table-responsive"><br/>   
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr class="bg-info">
                    <th class="text-center">No</th>
					          <th class="text-center">Nama Outlet</th>
                    <th class="text-center">No Surat jalan</th>
                    <th class="text-center">No Nota</th>
                    <th class="text-center">tanggal</th>
                    <th class="text-center">Tipe</th>
                    <th class="text-center">Kendaraan</th>
                    <th class="text-center">Admin</th>
                    <th class="text-center"></th>
					          <th class="text-center"></th>
                    <th class="text-center"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no=0;
                    foreach($suratjalan->result_array() as $tampil):
                      $no++;
                      $no_suratjalan = $tampil['no_suratjalan'];
                      $no_nota = $tampil['no_nota'];
                      $tanggal = $tampil['tanggal'];
                      $kendaraan = $tampil['kendaraan'];
                      $no_plat = $tampil['no_plat'];
                      $nama_pengirim = $tampil['nama_pengirim'];
                      $nama_admin = $tampil['nama_admin'];
                      $tanggal_bikin = $tampil['tanggal_bikin'];
                  ?>
                  <tr>
                    <td class="text-center" width="30"><?php echo $no; ?></td>
                    <td class="text-left">
                      <?php
                        $cek_namaoutlet = $this->db->query("SELECT nama_outlet FROM tbl_outlet, tbl_penjualan WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet AND tbl_penjualan.no_nota_penjualan='$no_nota' LIMIT 1");
                        if($cek_namaoutlet->num_rows() > 0){
                          $namaoutlet = $cek_namaoutlet->row()->nama_outlet;
                          echo $namaoutlet;
                        }else{
                          echo "-";
                        }
                        
                      ?>
                    </td>
                    <td class="text-center"><?php echo $no_suratjalan; ?></td> 
                    <td class="text-center"><?php echo $no_nota; ?></td> 
                    <td class="text-center"><?php $new = strtotime($tanggal); $newDate = date('d F Y', $new);  echo $newDate; ?></td>
                    <td class="text-center">
                      <?php
                        $cek_tipe = $this->db->query("SELECT DISTINCT masuk_keluar FROM tbl_stokgudang WHERE no_surat_jalan='$no_suratjalan'");
                        $tipe = $cek_tipe->row()->masuk_keluar;
                        echo $tipe;
                      ?>
                    </td> 
                    <td class="text-center"><?php echo $kendaraan; ?></td> 
                    <td class="text-center"><?php echo $nama_admin; ?></td>  
                    <td class="text-left">
                    <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#LIHAT<?php echo $no_suratjalan; ?>"><i class="fa fa-expand"></i></button>
                      <!-- Expand -->
                      <div class="modal fade bd-example-modal-lg" id="LIHAT<?php echo $no_suratjalan; ?>">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Detail Barang</h4>
                            </div>
                            <div class="modal-body">
                              <table id="example2" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                  <tr role="row">
                                    <th class="sorting_1" width="10" style="text-align: center;">No</th>
                                    <th class="sorting" style="text-align: center;">Tanggal</th>
                                    <th class="sorting" style="text-align: center;">Nama Produk</th>
                                    <th class="sorting" style="text-align: center;">Tipe</th>
                                    <th class="sorting" style="text-align: center;">Jumlah(pcs)</th>
                                    <th class="sorting" style="text-align: center;">Keterangan</th>
                                    <th class="sorting" style="text-align: center;">No Surat jalan</th>
									                  <th class="sorting" style="text-align: center;"></th>
                                  </tr>
                                </thead>                                
                                <tbody>
                                  <?php
                                    $cek_detail = $this->db->query("SELECT tbl_stokgudang.tanggal, tbl_stokgudang.id_produk, tbl_stokgudang.masuk_keluar, tbl_stokgudang.jumlah, tbl_stokgudang.keterangan, tbl_stokgudang.no_surat_jalan, tbl_stokgudang.id_file_surat_jalan, tbl_produk.nama_produk FROM tbl_stokgudang, tbl_produk WHERE tbl_stokgudang.id_produk=tbl_produk.id_produk AND tbl_stokgudang.no_surat_jalan='$no_suratjalan';");
                                      $no_detail=0;
                                      foreach($cek_detail->result_array() as $tampil_detail):
                                        $no_detail++;
                                        $tanggal_detail = $tampil_detail['tanggal'];
                                        $nama_produk_detail = $tampil_detail['nama_produk'];
                                        $masuk_keluar_detail = $tampil_detail['masuk_keluar'];
                                        $jumlah_detail = $tampil_detail['jumlah'];
                                        $keterangan_detail = $tampil_detail['keterangan'];
                                        $no_surat_jalan_detail = $tampil_detail['no_surat_jalan'];
                                        $id_file_surat_jalan_detail = $tampil_detail['id_file_surat_jalan'];

                                  ?>
                                  <tr>
                                    <td class="text-center"><?php echo $no_detail; ?></td>
                                    <td class="text-center"><?php $new_detail = strtotime($tanggal_detail); $newDate_detail = date('d/m/Y', $new_detail);  echo $newDate_detail; ?></td>
                                    <td class="text-center"><?php echo $nama_produk_detail; ?></td>
                                    <td class="text-left"><?php echo $masuk_keluar_detail; ?></td>
                                    <td class="text-center"><?php echo $jumlah_detail; ?></td>
                                    <td class="text-center"><?php echo $keterangan_detail; ?></td>
                                    <td class="text-center"><?php echo $no_surat_jalan_detail; ?></td>
									                  <td><a href="https://drive.google.com/file/d/<?php echo $id_file_surat_jalan_detail; ?>/view" target="_blank"><i class="fa fa-fw fa-file-pdf-o"></i></a></td>
                                  </tr>
                                  <?php endforeach; ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Expand -->
                    </td>    
                    <td class="text-center">
                      <?php
                        $cek_id_outlet = substr($no_nota, 5);
                        if($cek_namaoutlet->num_rows() > 0){
                          echo "<a href='";
                          echo base_url();
                          echo "suratjalan/cetak_sj?no_suratjalan="; echo $no_suratjalan; echo "' target='_blank'><i class='fa fa-print'></i></a>";
                        }else{
                          echo "<a href='";
                          echo base_url();
                          echo "perubahanstok/cetak_st?id_outlet="; echo $cek_id_outlet; echo "' target='_blank'><i class='fa fa-print'></i></a>";
                        }
                      ?>
                      
                    </td>  					
                    <td class="text-center">
                      <button class="btn btn-default btn-xs" data-toggle="modal" data-target="#UBAHTANGGAL<?php echo $no_nota; ?>"><i class="fa fa-edit"></i></button>  
                      <!-- /.modal -->
                      <form method="POST" action="<?php echo base_url('laporan/Ubahtanggal_sj'); ?>">
                        <div class="modal fade bd-example-modal-sm" id="UBAHTANGGAL<?php echo $no_nota; ?>">
                          <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                              <div class="modal-header">
                                <?php 
                                  if($cek_namaoutlet->num_rows() > 0){
                                    $namaoutlet = $cek_namaoutlet->row()->nama_outlet;
                                    echo $namaoutlet;
                                  }else{
                                    echo "-";
                                  } 
                                ?> : <?php echo $no_suratjalan; ?>
                              </div>
                              <div class="modal-body">
                                <input type="date" name="tanggal_set" class="form-control" value="<?php echo $tanggal; ?>">
                              </div>
                              <div class="modal-footer">
                                <input type="hidden" name="no_nota_penjualan_set" value="<?php echo $no_nota; ?>">
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
              </table>
            </div>
          </div>          
          <div class="box-footer">
            <a href="<?php echo base_url('export/surat_jalan'); ?>">
              <button type="button" class="btn btn-flat btn-primary active pull-right" id="button_download"><i class="fa fa-download"></i> Download</button>
            </a>
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