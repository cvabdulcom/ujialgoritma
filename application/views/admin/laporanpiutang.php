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
          <li class="active"><a href="<?php echo base_url('laporan/piutang'); ?>"><i class="fa fa-circle-o"></i> Laporan Piutang</a></li>
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
      <b>Laporan Piutang</b>
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
                <form method="POST" action="<?php echo base_url('laporan/piutang'); ?>">
                <div class="col-sm-6">
                  <select name="nama_salesman" id="nama_salesman" class="form-control">
                    <option value="" selected>- Nama Salesman</option>
                    <?php
                      foreach($namasales->result_array() as $tampil):
                        $nama = $tampil['nama'];
                    ?>
                    <option value="<?php echo $nama; ?>"><?php echo $nama; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <<!-- div class="col-sm-5">
                  <input type="date" class="form-control" name="jatuh_tempo" id="jatuh_tempo">
                </div> -->
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
                  <form method="POST" action="<?php echo base_url('laporan/piutang_date'); ?>">
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
                    <th class="text-center">No Nota</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Rute</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Jatuh Tempo</th>
                    <th class="text-center">Nominal</th>
                    <th class="text-center">Terbayar</th>
                    <th class="text-center">Sisa</th>
                    <th class="text-center">Status Barang</th>
                    <th class="text-center">Tipe</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Salesman</th>
                    <th class="text-center"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no=0;
                    $total_nominal=0;
                    $total_terbayar=0;
                    $total_sisa=0;
                    foreach($piutang->result_array() as $tampil):
                      $no++;
                      $no_nota_penjualan = $tampil['no_nota_penjualan'];
                      // $tanggal = $tampil['tanggal'];
                  ?>
                  <tr>
                    <?php
                      $pernota = $this->db->query("SELECT DISTINCT tbl_piutang.no_nota_penjualan,
                          tbl_piutang.tanggal,
                          tbl_piutang.tanggal_jatuh_tempo,
                          tbl_piutang.nominal_nota_penjualan,
                          tbl_piutang.terbayar,
                          tbl_piutang.sisa,
                          tbl_piutang.status,
                          tbl_penjualan.nama_salesman
                      FROM tbl_piutang, tbl_penjualan
                      WHERE tbl_penjualan.no_nota_penjualan = tbl_piutang.no_nota_penjualan
                      AND tbl_piutang.no_nota_penjualan = '$no_nota_penjualan'
                      AND tbl_piutang.tanggal_bayar = (SELECT MAX(tanggal_bayar) FROM tbl_piutang WHERE no_nota_penjualan='$no_nota_penjualan') ORDER BY tbl_piutang.status DESC LIMIT 1");
                    ?>
                    <td class="text-center"><?php echo $no; ?></td>
                    <td class="text-center"><?php echo $no_nota_penjualan; ?></td>
                    <td>
                      <?php 
                        $cek_nama_outlet = $this->db->query("SELECT tbl_outlet.nama_outlet, tbl_outlet.rute FROM tbl_penjualan, tbl_outlet WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet AND tbl_penjualan.no_nota_penjualan = '$no_nota_penjualan' LIMIT 1");
                        echo $cek_nama_outlet->row()->nama_outlet;
                      ?>
                    </td>
                    <td class="text-center"><?php echo $cek_nama_outlet->row()->rute; ?></td>
                    <td class="text-center"><?php $new = strtotime($pernota->row()->tanggal); $newDate = date('d/m/Y', $new);  echo $newDate; ?></td>
                    <td class="text-center"><?php $new1 = strtotime($pernota->row()->tanggal_jatuh_tempo); $newDate1 = date('d/m/Y', $new1);  echo $newDate1; ?></td>
                    <td class="text-center"><?php echo number_format($pernota->row()->nominal_nota_penjualan, 0, ',', '.'); $total_nominal+=$pernota->row()->nominal_nota_penjualan; ?></td>
                    <td class="text-center">
                      <?php //echo number_format($pernota->row()->terbayar, 0, ',', '.'); 
                        $cek_terbayar = $this->db->query("SELECT SUM(terbayar) AS terbayar FROM tbl_piutang WHERE no_nota_penjualan='$no_nota_penjualan' LIMIT 1");
                        echo number_format($cek_terbayar->row()->terbayar, 0, ',', '.');
                        $total_terbayar+=$cek_terbayar->row()->terbayar; 
                      ?>                        
                    </td>
                    <?php
                      $cek_tot_sisa = $pernota->row()->nominal_nota_penjualan - $cek_terbayar->row()->terbayar;
                    ?>
                    <td class="text-center"><?php echo number_format($cek_tot_sisa, 0, ',', '.'); $total_sisa+=$cek_tot_sisa; ?></td>
                    <!-- <td class="text-center"><?php //echo number_format($pernota->row()->sisa, 0, ',', '.'); $total_sisa+=$pernota->row()->sisa; ?></td> -->
                    <td class="text-center">
                      <?php
                        $cek_statusbarang = $this->db->query("SELECT DISTINCT status FROM tbl_penjualan WHERE no_nota_penjualan='$no_nota_penjualan'");
                        if($cek_statusbarang->row()->status === 'UNDELIVER'){ ?>
                          <small class="label bg-red"><?php echo $cek_statusbarang->row()->status; ?></small>
                      <?php }else{ ?>
                          <small class="label bg-green"><?php echo $cek_statusbarang->row()->status; ?></small>
                      <?php }
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $cek_statusprogram = $this->db->query("SELECT tipe_pembelian FROM tbl_penjualan WHERE no_nota_penjualan='$no_nota_penjualan' LIMIT 1");
                        echo $cek_statusprogram->row()->tipe_pembelian;
                        // if($cek_statusprogram->row()->status_program === 'COMPLETE'){
                        //   echo "KONSINYASI";
                        // }else{
                        //   echo $cek_statusprogram->row()->status_program;
                        // }
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $cek_nominal_real = $this->db->query("SELECT nominal_nota_penjualan FROM tbl_piutang WHERE no_nota_penjualan='$no_nota_penjualan' LIMIT 1");
                        $nominal_real = $cek_nominal_real->row()->nominal_nota_penjualan;

                        $terbayar_real = $cek_terbayar->row()->terbayar;
                      ?>

                      <?php
                        if($nominal_real === $terbayar_real){ ?>
                          <small class="label bg-green">Lunas</small>
                      <?php }else{ ?>
                          <small class="label bg-red">Belum</small>
                      <?php }
                      ?>
                        
                      <?php
                        //if($pernota->row()->status === 'Belum'){ ?>
                          <small class="label bg-red"><?php //echo $pernota->row()->status; ?></small>
                      <?php //}else{ ?>
                          <small class="label bg-green"><?php //echo $pernota->row()->status; ?></small>
                      <?php //}
                      ?>
                    </td>
                    <td class="text-center"><?php echo $pernota->row()->nama_salesman; ?></td>
                    <td class="text-center">
                      <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#LIHAT<?php echo $no_nota_penjualan; ?>"><i class="fa fa-expand"></i></button>
                      <!-- Expand -->
                      <div class="modal fade bd-example-modal-lg" id="LIHAT<?php echo $no_nota_penjualan; ?>">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Detail Pembayaran</h4>
                            </div>
                            <div class="modal-body table-responsive">
                              <table id="example2" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                  <tr role="row">
                                    <th class="sorting_1" width="10" style="text-align: center;">No</th>
                                    <th class="sorting" style="text-align: center;">No Nota</th>
                                    <th class="sorting" style="text-align: center;">Nominal</th>
                                    <th class="sorting" style="text-align: center;">Terbayar</th>
                                    <th class="sorting" style="text-align: center;">Tanggal Bayar</th>
                                    <th class="sorting" style="text-align: center;">Status</th>
                                  </tr>
                                </thead>                                
                                <tbody>
                                  <?php
                                    $cek_detail = $this->db->query("SELECT * FROM tbl_piutang WHERE no_nota_penjualan='$no_nota_penjualan'");
                                      $no_detail=0;
                                      foreach($cek_detail->result_array() as $tampil_detail):
                                        $no_detail++;
                                        $no_nota_penjualan_detail = $tampil_detail['no_nota_penjualan'];
                                        $nominal_nota_penjualan_detail = $tampil_detail['nominal_nota_penjualan'];
                                        $terbayar_detail = $tampil_detail['terbayar'];
                                        $tanggal_bayar_detail = $tampil_detail['tanggal_bayar'];
                                        $sisa_detail = $tampil_detail['sisa'];
                                        $status_detail = $tampil_detail['status'];
                                  ?>
                                  <tr>
                                    <td class="text-center"><?php echo $no_detail; ?></td>
                                    <td class="text-center"><?php echo $no_nota_penjualan_detail; ?></td>
                                    <td class="text-center"><?php echo number_format($nominal_nota_penjualan_detail, 0, ',', '.'); ?></td>
                                    <td class="text-center"><?php echo number_format($terbayar_detail, 0, ',', '.'); ?></td>
                                    <td class="text-center"><?php $new_detail = strtotime($tanggal_bayar_detail); $newDate_detail = date('d/m/Y', $new_detail);  echo $newDate_detail; ?></td>
                                    <td class="text-center"><?php if($status_detail === 'Belum'){echo "Blm";}elseif ($status_detail === 'Lunas'){echo "Lns";} {
                                      # code...
                                    } ?></td>
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
                  </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr class="bg-info">
                    <th class="text-right" colspan="6">Total</th>
                    <th class="text-center"><?php echo number_format($total_nominal, 0, ',', '.'); ?></th>
                    <th class="text-center"><?php echo number_format($total_terbayar, 0, ',', '.'); ?></th>
                    <th class="text-center"><?php echo number_format($total_sisa, 0, ',', '.'); ?></th>
                    <th class="text-center" colspan="5"></th>
                  </tr>
                </tfoot>
              </table>
            </div>
            
          </div>          

          <div class="box-footer">
            <a href="<?php echo base_url('export/piutang'); ?>">
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