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
          <li><a href="<?php echo base_url('laporan/kas'); ?>"><i class="fa fa-circle-o"></i> Laporan Kas</a></li>
          <li class="active"><a href="<?php echo base_url('laporan/accounting'); ?>"><i class="fa fa-circle-o"></i> Monitor Accounting</a></li>
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
      <b>Monitor Accounting</b>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><b>Tanggal :</b> <?php echo date('d/m/Y'); ?> </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">     
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li><a href="<?php echo base_url('laporan/accounting'); ?>">Laba Rugi</a></li>
            <li class="active"><a href="<?php echo base_url('laporan/accounting_neraca'); ?>">Asset (Aktiva Tetap)</a></li>
            <li class="pull-right">
              <div class="text-center">
                <div class="pull-right">
                  <button type="button" class="add btn btn-flat btn-primary active" data-toggle="modal" data-target="#LAPORANSETORAN">Tambah Aset</button>
                  <!-- Expand -->
                  <div class="modal fade bd-example-modal-lg" id="LAPORANSETORAN">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Penambahan Aset</h4>
                        </div>
                        <div class="modal-body table-responsive">
                          <div class="box-body chart-responsive">
                            <div class="col-md-12 form-horizontal">
                            
                              <div class="form-group">
                                <label for="tempo" class="col-sm-4 control-label">Tanggal Beli</label>
                                <div class="col-sm-7">
                                  <input type="date" class="form-control" name="tanggal_beli" id="tanggal_beli" value="<?php echo date('Y-m-d'); ?>">  
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="no_nota" class="col-sm-4 control-label">Nama Aset</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nama_harta" id="nama_harta"> 
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="keterangan" class="col-sm-4 control-label">Nilai Perolehan</label>
                                <div class="col-sm-6">
                                  <input type="number" name="nilai_perolehan" id="nilai_perolehan" class="form-control" placeholder="0" min="0" value="0">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="keterangan" class="col-sm-4 control-label">Estimasi Pemakaian</label>
                                <div class="col-sm-6">
                                  <input type="number" name="estimasi_pemakaian" id="estimasi_pemakaian" class="form-control" placeholder="0" min="0" value="0">
                                </div>
                              </div>

                            </div>
                            
                            <!-- Hidden form -->
                            <input type="hidden" name="id_harta" id="id_harta" value="IH<?php echo $id_harta; ?>">
                            <input type="hidden" name="tanggal_bikin" id="tanggal_bikin" value="<?php echo date('Y-m-d'); ?>">
                            <!-- Hidden form -->
                          </div>

                        </div>
                        <div class="modal-footer">
                          <button type="reset" class="btn btn-flat btn-default active pull-left" id="button_reset"><i class="fa fa-refresh"></i> Reset</button>
                          <button type="button" class="btn btn-flat btn-primary active pull-right" id="button_submit"><div id="Loading_tb"><i class="fa fa-save"></i> Submit</div></button>
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
              
              <!-- <div class="form-group">
                <div class="input-group col-md-3">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <?php
                    // $cekfirst = date('Y-m-d');
                    // $first = date('Y-m-d');
                    // $second = date('2019-11-28');
                    
                    // $new1 = strtotime($second); $newDate1 = date('m/d/Y', $new1);
                    // $new2 = strtotime($first); $newDate2 = date('m/d/Y', $new2);

                    // $cek_tanggal_awal = $this->input->get('tanggal_awal');
                    // $cek_tanggal_akhir = $this->input->get('tanggal_akhir');

                    // if(isset($cek_tanggal_awal)){
                    //   $tanggal_awal = $this->input->get('tanggal_awal');
                    //   $tanggal_akhir = $this->input->get('tanggal_akhir');
                    // }else{
                    //   $tanggal_awal = $second;
                    //   $tanggal_akhir = $first;
                    // }
                  ?>                
                  <input type="text" class="form-control input-sm" name="daterange" value="<?php //echo $newDate1; echo " - "; echo $newDate2; ?>" />
                  <span class="input-group-btn">
                    <form>
                      <input type="hidden" name="tanggal_awal" id="tanggal_awal" value="<?php //echo $tanggal_awal; ?>">
                      <input type="hidden" name="tanggal_akhir" id="tanggal_akhir" value="<?php //echo $tanggal_akhir; ?>">
                      <button type="button" class="btn btn-primary btn-sm btn-flat" id="button_search" disabled="disabled"><div id="Loading">Go!</div></button>
                    </form>  
                  </span>
                </div>
              </div> -->
            
              <div class="box-body chart-responsive">
                <div class="col-md-12 form-horizontal table-responsive">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr role="row">
                            <th class="text-center">No</th>
                            <th class="text-center">Kode</th>
                            <th class="text-center">Kelompok Harta Tetap</th>
                            <th class="text-center">Nilai Perolehan</th>
                            <th class="text-center">Depresiasi/Bulan</th>
                            <th class="text-center">Akumulasi Depresiasi</th>
                            <th class="text-center">Nilai Buku</th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>                                
                    <tbody>
                        <?php
                        $no=0;
                        foreach($harta->result_array() as $tampil):
                          $no++;
                          $id_harta = $tampil['id_harta'];
                          $nama_harta = $tampil['nama_harta'];
                          $tanggal_beli = $tampil['tanggal_beli'];
                          $tanggal_bikin = $tampil['tanggal_bikin'];
                          $nilai_perolehan = $tampil['nilai_perolehan'];
                          $estimasi_pemakaian = $tampil['estimasi_pemakaian'];

                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no; ?></td>
                            <td class="text-center"><?php echo $id_harta; ?></td>
                            <td class="text-left"><?php echo $nama_harta; ?></td>
                            <td class="text-center"><?php echo number_format($nilai_perolehan, 0, ',', '.'); ?></td>
                            <td class="text-center">
                                <?php
                                    $depresiasi = $nilai_perolehan/$estimasi_pemakaian/12;
                                    echo number_format($depresiasi, 0, ',', '.');
                                ?>
                            </td>
                            <td class="text-center">
                                <?php
                                    $now = date('Y-m-d');                   
                                    $jumlah_bulan = (int)abs((strtotime($tanggal_beli) - strtotime($now))/(60*60*24*30));
                                    $akumulasi_depresiasi = $depresiasi*$jumlah_bulan;
                                    echo number_format($akumulasi_depresiasi, 0, ',', '.');
                                ?>
                            </td>
                            <td class="text-center">
                                <?php
                                    $nilai_buku = $nilai_perolehan-$akumulasi_depresiasi;
                                    echo number_format($nilai_buku, 0, ',', '.');
                                ?>
                            </td>
                            <td class="text-left" width="30">
                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#HAPUS<?php echo $id_harta; ?>">Hapus</button>  
                                <!-- /.modal -->
                                <form method="POST" action="<?php echo base_url('laporan/hapus_inventaris'); ?>">
                                <div class="modal fade bd-example-modal-sm" id="HAPUS<?php echo $id_harta; ?>">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                            Hapus aset <strong><?php echo $nama_harta; ?></strong> ?
                                            </div>
                                            <div class="modal-footer">
                                            <input type="hidden" name="id_harta" value="<?php echo $id_harta; ?>">
                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-success">Hapus</button>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- /.content-wrapper -->
</div>

<script>
//   $(function() {
//     $('input[name="daterange"]').daterangepicker({
//       opens: 'right'
//     }, function(start, end, label) {
//       $("#tanggal_awal").val(start.format('YYYY-MM-DD'));
//       $("#tanggal_akhir").val(end.format('YYYY-MM-DD'));    
//       $('#button_search').attr('disabled', false);
//     });
//   });

//   $("#button_search").click(function(){
//     accounting_penjualan();
//   })

//   function rubah(angka){
//     var reverse = angka.toString().split('').reverse().join(''),
//     ribuan = reverse.match(/\d{1,3}/g);
//     ribuan = ribuan.join('.').split('').reverse().join('');
//     return ribuan;
//   }

//   function Loading(){
//     $("#Loading").empty();
//     var button_loading = '<i class="fa fa fa-spinner fa-spin"></i>';
//     $("#Loading").append(button_loading);
//   }

//   function No_Loading(){
//     $("#Loading").empty();
//     var button_loading = 'Go!';
//     $("#Loading").append(button_loading);
//   }

    function Refresh(){
      location.reload();
    }

    $("#button_submit").click(function(){
      Loading_tb();
      inventaris();
    })

    function Loading_tb(){
        $("#Loading_tb").empty();
        var button_loading = '<i class="fa fa fa-spinner fa-spin"></i> Loading';
        $("#Loading_tb").append(button_loading);
    }

    function inventaris(){
      var id_harta = $("#id_harta").val();
      var nama_harta = $("#nama_harta").val();
      var tanggal_beli = $("#tanggal_beli").val();
      var tanggal_bikin = $("#tanggal_bikin").val();
      var nilai_perolehan = $("#nilai_perolehan").val();
      var estimasi_pemakaian = $("#estimasi_pemakaian").val();

      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/simpan_inventaris'); ?>",
        dataType  : "JSON",
        data      : {
                        id_harta: id_harta,
                        nama_harta: nama_harta,
                        tanggal_beli: tanggal_beli,
                        tanggal_bikin: tanggal_bikin,
                        nilai_perolehan: nilai_perolehan,
                        estimasi_pemakaian: estimasi_pemakaian
                    },
        success   : function(data){
          swal({
            title: "Simpan Inventaris Berhasil !",
            type: "success",
            confirmButtonColor: "#2C3FF9",
            showCancelButton: false,
            confirmButtonText: "OK",
            closeOnConfirm: true
          }, function(isConfirm) {              
            Refresh()
          });
        }
      });
    }

</script>