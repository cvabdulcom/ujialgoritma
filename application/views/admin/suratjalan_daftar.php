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
      <li class="active treeview menu-open">
        <a href="#"><i class="fa fa-envelope"></i> Surat Jalan
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('suratjalan/sj_masuk'); ?>"><i class="fa fa-circle-o"></i> SJ Masuk</a></li>
          <li class="active"><a href="<?php echo base_url('suratjalan/sj_keluar'); ?>"><i class="fa fa-circle-o"></i> SJ Keluar</a></li>
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
      <b>Daftar Surat Jalan</b>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('suratjalan') ?>"><i class="fa fa-envelope"></i> Surat Jalan</a></li>
      <li class="active">Daftar Surat Jalan</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-body chart-responsive">
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
                  <form method="get" action="<?php echo base_url('suratjalan/daftar_search'); ?>">
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
                    <th class="text-center">No Surat Jalan</th>
                    <th class="text-center">Nama Outlet</th>
                    <th class="text-center">No Nota</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Kendaraan</th>
                    <th class="text-center">No Plat</th>
                    <th class="text-center">Nama Pengirim</th>
                    <th class="text-center"></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=0;
                  foreach($daftar->result_array() as $tampil):
                    $no++;
                    $no_suratjalan = $tampil['no_suratjalan'];
                    $no_nota = $tampil['no_nota'];
                    $tanggal = $tampil['tanggal'];
                    $kendaraan = $tampil['kendaraan'];
                    $no_plat = $tampil['no_plat'];
                    $nama_pengirim = $tampil['nama_pengirim'];
                    $nama_pengepack = $tampil['nama_pengepack'];
                    $nama_outlet = $tampil['nama_outlet'];
                ?>
                <tr>
                  <td class="text-center" width="30"><?php echo $no; ?></td>
                  <td class="text-center"><?php echo $no_suratjalan; ?></td>
                  <td class="text-left"><?php echo $nama_outlet; ?></td>
                  <td class="text-center"><?php echo $no_nota; ?></td>
                  <td class="text-center"><?php echo $tanggal; ?></td>
                  <td class="text-center"><?php echo $kendaraan; ?></td>
                  <td class="text-center"><?php echo $no_plat; ?></td>
                  <td class="text-center"><?php echo $nama_pengirim; ?></td>
                  <td align='center' width="30">   
                    <?php
                      $cek = $this->db->query("SELECT DISTINCT id_file_surat_jalan FROM tbl_stokgudang WHERE no_surat_jalan='$no_suratjalan'");
                      $kondisi = $cek->row()->id_file_surat_jalan;

                      if($kondisi===null){
                    ?>
                      <button class="btn btn-xs btn-primary item_upload" data-sj="<?php echo $no_suratjalan; ?>" data-nota="<?php echo $no_nota; ?>"><i class="fa fa-upload"></i></button>       
                    <?php }else{ ?>         
                      <a href="https://drive.google.com/file/d/<?php echo $kondisi; ?>/view" target="_blank">
                        <i class="fa fa-file-pdf-o"></i>
                      </a>
                    <?php } ?>
                  </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>    
        </div>
      </div>
    </div>
  </section>
<!-- /.content-wrapper -->
</div>

<!-- Modal Start -->
<div class="modal fade" id="UPLOAD_FILE">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <div>
          <div class="input-group input-group-sm">
            <input id="files" type="file" name="files[]" multiple class="form-control">
            <div class="input-group-btn">
              <button type="button" id="upload" class="btn btn-success"><i class="fa fa-upload"></i></button>
            </div>
          </div>
          <div id="progress-wrp">
            <div class="progress-bar"></div>
            <div class="status">0%</div>
          </div>
        </div> 
        <div id="result"></div>
      </div>
      <div class="modal-footer">
        <form method="POST" action="<?php echo base_url('suratjalan/Update_statusnota'); ?>">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
          <input type="hidden" name="no_suratjalan" value="">
          <input type="hidden" name="no_nota" value="">
          <input type="hidden" name="id_file" id="id_file">
          <div id="show_tombol"><button type="button" class="btn btn-primary" disabled><i class="fa fa-save"></i> Save</button></div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->

<script type="text/javascript">
  $(document).ready(function(){
    /* GET_UPLOAD_BY_ID START */
    $('.item_upload').on('click',function(){
      var no_suratjalan = $(this).data("sj");
      var no_nota = $(this).data("nota");
      $('#UPLOAD_FILE').modal('show');
      $('[name = "no_suratjalan"]').val(no_suratjalan);
      $('[name = "no_nota"]').val(no_nota);
    });
    /* GET_UPLOAD_BY_ID END */
  })
</script>

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