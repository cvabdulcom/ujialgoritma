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
      <li class="active treeview menu-open">
        <a href="#">
          <i class="fa fa-cart-arrow-down"></i> <span>Nota Penjualan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active treeview menu-open">
            <a href="#"><i class="fa fa-circle-o"></i> Sales Lapangan
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('penjualan/notajpc'); ?>"><i class="fa fa-circle-o"></i> Jual Putus Cash</a></li>
              <li class="active"><a href="<?php echo base_url('penjualan/notajpt'); ?>"><i class="fa fa-circle-o"></i> Jual Putus Tempo</a></li>
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
      <b>Nota Penjualan</b>
      <small>Lapangan (Tempo)</small>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><b>No Nota :</b> PN<?php echo $no_nota_penjualan;?> &nbsp;|&nbsp; <b>Tanggal :</b> <?php echo date('d/m/Y'); ?> </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-body chart-responsive">
            <div class="col-md-5 form-horizontal">
              <div class="form-group">
                <label for="tempo" class="col-sm-4 control-label">File Penjualan</label>
                <div class="col-sm-8">
                  <button type="button" class="form-control" id="button_upload" data-toggle="modal" data-target="#UPLOAD" autofocus="autofocus"><i class="fa fa-cloud-upload"></i> Upload</button>
                </div>
              </div>
              <div class="form-group">

                <!-- Hidden form -->
                <input type="hidden" name="status" id="status" value="UNDELIVER">
                <input type="hidden" name="no_nota_penjualan" id="no_nota_penjualan" value="PN<?php echo $no_nota_penjualan;?>">
                <input type="hidden" name="nama_admin" id="nama_admin" value="<?php echo $this->session->userdata('nama_olikuapp'); ?>">
                <input type="hidden" name="nama_salesman" id="nama_salesman">
                <input type="hidden" name="rute" id="rute">
                <input type="hidden" name="id_outlet" id="id_outlet">
                <input type="hidden" name="nama_produk_alias" id="nama_produk_alias">
                <input type="hidden" name="tipe_pembelian" id="tipe_pembelian">
                <input type="hidden" name="tempo" id="tempo" value="30">
                <input type="hidden" name="id_file" id="id_file" value="KOSONG">
                <input type="hidden" name="id_produk" id="id_produk">
                <input type="hidden" name="isi_kemasan" id="isi_kemasan">
                <input type="hidden" name="diskon" id="diskon">
                <input type="hidden" name="tanggal_bikin" id="tanggal_bikin" value="<?php echo date('Y-m-d'); ?>">
                <!-- End Hidden form -->

                <!-- harga -->
                <input type="hidden" name="harga_beli" id="harga_beli">
                <input type="hidden" name="harga_gb_200_dus" id="harga_gb_200_dus">
                <input type="hidden" name="harga_gb_150_dus" id="harga_gb_150_dus">
                <input type="hidden" name="harga_gb_50_dus" id="harga_gb_50_dus">
                <input type="hidden" name="harga_gb_k_50_dus" id="harga_gb_k_50_dus">
                <input type="hidden" name="harga_jpc_dus" id="harga_jpc_dus">
                <input type="hidden" name="harga_jpc_botol" id="harga_jpc_botol">
                <input type="hidden" name="harga_jpt_dus" id="harga_jpt_dus">
                <input type="hidden" name="harga_jpt_botol" id="harga_jpt_botol">
                <input type="hidden" name="harga_ky_t_bayar" id="harga_ky_t_bayar">
                <input type="hidden" name="harga_ky_r_jual" id="harga_ky_r_jual">
                <!-- harga -->

                <?php
                  $hariini = date('Y-m-d');
                  $jatuhtempo = date("Y-m-d", strtotime("$hariini +14 days"));
                ?>
                <!-- Hidden Form Piutang -->
                <input type="hidden" name="piutang_tanggal" id="piutang_tanggal" value="<?php echo date('Y-m-d'); ?>">
                <input type="hidden" name="piutang_no_nota_penjualan" id="piutang_no_nota_penjualan" value="PN<?php echo $no_nota_penjualan;?>">
                <input type="hidden" name="piutang_tanggaljatuhtempo" id="piutang_tanggaljatuhtempo" value="<?php echo $jatuhtempo; ?>">
                <input type="hidden" name="piutang_nominal_nota_penjualan" id="piutang_nominal_nota_penjualan">
                <input type="hidden" name="piutang_tanggalbayar" id="piutang_tanggalbayar" value="<?php echo date('Y-m-d'); ?>">
                <input type="hidden" name="piutang_status" id="piutang_status" value="Belum">
                <!-- Hidden Form Piutang -->

                <label for="id_outlet" class="col-sm-4 control-label">Nama Outlet</label>
                <div class="col-sm-8">
                  <input type="text" name="nama_outlet" id="nama_outlet" class="form-control" placeholder="Search...">
                  <ul class="select" id="searchResult"></ul>
                </div>
              </div>
              <div class="form-group">
                <label for="tempo" class="col-sm-4 control-label">Tanggal</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d'); ?>">  
                </div>
              </div>
            </div>

            <div class="col-md-7">
              <div class="form-group">
                <div class="col-sm-7">
                  <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Search..." disabled="disabled">
                </div>
                <div class="col-sm-3">
                  <input type="number" class="form-control" name="jumlah" id="jumlah" value="1" min="1" disabled="disabled">
                </div>
                <div class="col-sm-1">
                  <button type="button" class="btn btn-flat btn-info active" id="cek_stok" disabled="disabled"><i class="fa fa-check-square"></i></button>
                </div>
                <div class="col-sm-1">
                  <button type="submit" class="add btn btn-flat btn-primary active" id="button_produk" disabled="disabled"><i class="fa fa-plus"></i></button>
                </div>
              </div>

              <div class="col-md-7">
                <div class="form-group">
                  <div class="col-sm-8">
                    <div class="checkbox icheck">
                      <label>
                        &nbsp;&nbsp;<input type="checkbox" name="apakah_karton" id="apakah_karton"> Penjualan Karton ?
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="mydata">
                  <thead>
                    <tr>
                      <th class="text-center" width="30">No</th>
                      <th class="text-center">Nama Produk</th>
                      <th class="text-center" width="150">Harga</th>
                      <th class="text-center" width="100">Jumlah (Qty)</th>
                      <th class="text-center" width="150">Subtotal</th>
                      <th class="text-center" width="50"></th>
                    </tr>
                  </thead>
                  <tbody id="cartBody">
                    <tr>
                      <td class="text-center" width="30"></td>
                      <td></td>
                      <td class="text-center" width="150"></td>
                      <td class="text-center" width="100"></td>
                      <td class="text-center" width="150"></td>
                      <td class="text-center" width="50" style="text-align: right;"></td>
                    </tr>
                  </tbody>
                  <tfoot>                  
                    <tr>
                      <th colspan="4" class="text-right">Total Harga</th>
                      <th colspan="2" class="text-right"><div id="totalCart"></div></th>
                    <tr>
                    <tr>
                      <th colspan="4" class="text-right">Terbayar</th>
                      <th colspan="2" class="text-right"><input type="number" name="piutang_terbayar" id="piutang_terbayar" value="0" class="form-control input-sm"></th>
                    <tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>          

          <div class="box-footer">
            <button type="reset" class="btn btn-flat btn-default active" id="reset"><i class="fa fa-refresh"></i> Reset</button>
            <button class="btn btn-flat btn-warning active" id="print" data-toggle="modal" data-target="#PRINT"><i class="fa fa-print"></i> Print</button>
            <div id="Loading"><button type="button" class="btn btn-flat btn-success active pull-right" id="button_submit" disabled="disabled"><i class="fa fa-save"></i> Submit</button></div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
<!-- /.content-wrapper -->
</div>
<!-- Modal Start -->
<div class="modal fade" id="UPLOAD">
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
    </div>
  </div>
</div>
<!-- Modal End -->

<!-- Data Outlet -->
<script type="text/javascript">
  $(document).ready(function(){
    $( "#nama_outlet" ).autocomplete({
      source: "<?php echo site_url('penjualan/Cari_outlet/?');?>",
      minLength: 3,
      select: function (event, ui) {
        $("#nama_outlet").val(ui.item.value);
        $("#nama_salesman").val(ui.item.nama_salesman);
        $("#rute").val(ui.item.rute);
        $("#id_outlet").val(ui.item.id_outlet);
        $("#tipe_pembelian").val(ui.item.tipe_pembelian);
        $("#diskon").val(ui.item.diskon);
        var diskon = $("#diskon").val();
        if(diskon === "BLOKIR"){
          swal({
            title: "Extra Diskon di Blokir, Ada Perubahan Harga !",
            type: "error",
            confirmButtonColor: "#2C3FF9",
            showCancelButton: false,
            confirmButtonText: "OK",
            closeOnConfirm: true
          }, function(isConfirm) {              
            Refresh()
            location.reload();
          });
        }else{          
          $('#nama_outlet').attr('readonly', true);
          $('#nama_produk').attr('disabled', false);
          $('#jumlah').attr('disabled', false);
          $('#button_produk').attr('disabled', false);
          $('#cek_stok').attr('disabled', false);
          $('#nama_produk').focus();
        }       
      }
    });
  })
</script>
<!-- Data Outlet -->

<!-- Data Produk -->
<script type="text/javascript">
  $(document).ready(function(){
    $( "#nama_produk" ).autocomplete({
      source: function(request, response) {
        var diskon = $("#diskon").val();
        if(diskon === "NORMAL"){
          var sumber = "<?php echo site_url('penjualan/Cari_produk/?');?>";
        }else if(diskon === "EXTRA"){
          var sumber = "<?php echo site_url('penjualan/Cari_produk_extra/?');?>";
        }
        $.ajax({
          url: sumber,
          dataType: "json",
          data: {
            term : request.term,
            id_outlet : $("#id_outlet").val()
          },
          success: function(data) {
            response(data);
          }
        });
      },
      minLength: 3,
      select: function (event, ui) {
        $("#nama_produk").val(ui.item.value);
        $("#id_produk").val(ui.item.id_produk);
        $("#nama_produk_alias").val(ui.item.nama_produk);
        $("#isi_kemasan").val(ui.item.kemasan);
        $("#harga_beli").val(ui.item.harga_beli);
        $("#harga_gb_200_dus").val(ui.item.harga_gb_200_dus);
        $("#harga_gb_150_dus").val(ui.item.harga_gb_150_dus);
        $("#harga_gb_50_dus").val(ui.item.harga_gb_50_dus);
        $("#harga_gb_k_50_dus").val(ui.item.harga_gb_k_50_dus);
        $("#harga_jpc_dus").val(ui.item.harga_jpc_dus);
        $("#harga_jpc_botol").val(ui.item.harga_jpc_botol);
        $("#harga_jpt_dus").val(ui.item.harga_jpt_dus);
        $("#harga_jpt_botol").val(ui.item.harga_jpt_botol);
        $("#harga_ky_t_bayar").val(ui.item.harga_ky_t_bayar);
        $("#harga_ky_r_jual").val(ui.item.harga_ky_r_jual);
        $('#jumlah').focus();
      }
    });
  })
</script>
<!-- Data Produk -->

<script>
  /** Funsi cek stok */
  $("#cek_stok").click(function(){
    var id_produk = $("#id_produk").val();
    if ($('#apakah_karton').is(':checked')) {
      var jumlah_karton = $("#jumlah").val();
      var isi_kemasan = $("#isi_kemasan").val();
      var jumlah = jumlah_karton * isi_kemasan;
    }else{
      var jumlah = $("#jumlah").val();
    }
    
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('suratjalan/Cek_stok'); ?>",
      dataType  : "JSON",
      data      : {id_produk:id_produk},
      success   : function(data){
        var hasil = data-jumlah;
        if ($('#apakah_karton').is(':checked')) {
          var sisa = data/isi_kemasan+" karton";
        }else{
          var sisa = data+" pcs";
        }

        if(hasil>=0){
          swal({
            title: "Stok Tersedia! sisa "+sisa+".",
            type: "success",
            confirmButtonColor: "#2C3FF9",
            showCancelButton: false,
            confirmButtonText: "OK",
            closeOnConfirm: true
          });
        }else{
          swal({
            title: "Stok tidak tersedia, Sisa "+sisa+"",
            type: "error",
            confirmButtonColor: "#2C3FF9",
            showCancelButton: false,
            confirmButtonText: "OK",
            closeOnConfirm: true
          });
        }
      }
    });
  });
  /** Funsi cek stok */
</script>

<!-- Data Localstorage -->
<script>
  Refresh()
  var mycart_penjualan_lapangan = [];
  
  $(function () {
    if (localStorage.mycart){
      mycart_penjualan_lapangan = JSON.parse(localStorage.mycart_penjualan_lapangan);
      showCart();
    }
  });

  $("#reset").click(function(){
    Refresh()
    location.reload();
  })

  $("#jumlah").on('keyup', function (e) {
    if (e.keyCode == 13) {
      $('#button_produk').click();
    }
  })
  
  // mengambil data button ketika button dengan class add di click
  $('.add').click(function(){

    var id_produk = $("#id_produk").val();
    if ($('#apakah_karton').is(':checked')) {
      var jumlah_karton = $("#jumlah").val();
      var isi_kemasan = $("#isi_kemasan").val();
      var jumlah = jumlah_karton * isi_kemasan;
    }else{
      var jumlah = $("#jumlah").val();
    }
    
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('suratjalan/Cek_stok'); ?>",
      dataType  : "JSON",
      data      : {id_produk:id_produk},
      success   : function(data){
        var hasil = data-jumlah;
        if ($('#apakah_karton').is(':checked')) {
          var jumlah_karton = $("#jumlah").val();
          var isi_kemasan = $("#isi_kemasan").val();
          var sisa = data/isi_kemasan+" karton";
        }else{
          var sisa = data+" pcs";
        }

        if(hasil>=0){
          if ($('#apakah_karton').is(':checked')) {
            var tanggal_add = $("#tanggal").val();
            var no_nota_penjualan_add = $("#no_nota_penjualan").val();
            var nama_salesman_add = $("#nama_salesman").val();
            var rute_add = $("#rute").val();
            var id_outlet_add = $("#id_outlet").val();
            var id_produk_add = $("#id_produk").val();
            var jumlah_karton = $("#jumlah").val();
            var isi_kemasan = $("#isi_kemasan").val();
            var jumlah_add = jumlah_karton * isi_kemasan;
            var harga_karton = $("#harga_jpt_dus").val();
            var harga_add = harga_karton;
            // var tipe_pembelian_add = $("#tipe_pembelian").val();
            var tipe_pembelian_add = "JP TEMPO";
            var tempo_add = $("#tempo").val();
            var status_add = $("#status").val();
            var id_file_penjualan_add = $("#id_file").val();
            var subtotal_add = harga_add * jumlah_add;
            var nama_produk_add = $("#nama_produk_alias").val();
            var nama_admin_add = $("#nama_admin").val();
            var satuan_add = 'dus';
            var kemasan_add = $("#isi_kemasan").val();
            var tanggal_bikin_add = $("#tanggal_bikin").val();
          }else{
            var tanggal_add = $("#tanggal").val();
            var no_nota_penjualan_add = $("#no_nota_penjualan").val();
            var nama_salesman_add = $("#nama_salesman").val();
            var rute_add = $("#rute").val();
            var id_outlet_add = $("#id_outlet").val();
            var id_produk_add = $("#id_produk").val();
            var jumlah_add = $("#jumlah").val();
            var harga_add = $("#harga_jpt_botol").val();
            // var tipe_pembelian_add = $("#tipe_pembelian").val();
            var tipe_pembelian_add = "JP TEMPO";
            var tempo_add = $("#tempo").val();
            var status_add = $("#status").val();
            var id_file_penjualan_add = $("#id_file").val();
            var subtotal_add = harga_add * jumlah_add;
            var nama_produk_add = $("#nama_produk_alias").val();
            var nama_admin_add = $("#nama_admin").val();
            var satuan_add = 'pcs';
            var kemasan_add = $("#isi_kemasan").val();
            var tanggal_bikin_add = $("#tanggal_bikin").val();
          }

          addToCart(tanggal_add, no_nota_penjualan_add, nama_salesman_add, rute_add, id_outlet_add, id_produk_add, jumlah_add, harga_add, tipe_pembelian_add, tempo_add, status_add, id_file_penjualan_add, subtotal_add, nama_produk_add, nama_admin_add, satuan_add, kemasan_add, tanggal_bikin_add );   //kirimkan nilai ke fungsi addToCart, berhati - hati penggunaan inserting data usahakan serverside process, ini hanya untuk pembelajaran
          document.getElementById('nama_produk').value = "";
          document.getElementById('jumlah').value = "1";
          $('#button_submit').attr('disabled', false);
          $('#nama_produk').focus();
        }else{
          swal({
            title: "Stok tidak tersedia, Sisa "+sisa+"",
            type: "error",
            confirmButtonColor: "#2C3FF9",
            showCancelButton: false,
            confirmButtonText: "OK",
            closeOnConfirm: true
          });
        }
      }
    });

  })

  function Refresh(){
    document.getElementById('nama_outlet').value = "";
    document.getElementById('nama_produk').value = "";
    document.getElementById('jumlah').value = "1";
    $('#nama_outlet').attr('readonly', true);
    $('#nama_produk').attr('disabled', true);
    $('#jumlah').attr('disabled', true);
    $('#button_produk').attr('disabled', true);
    // localStorage.clear();
    localStorage.removeItem("mycart_penjualan_lapangan");
    clearCart()
  }

  function addToCart(tanggal_add, no_nota_penjualan_add, nama_salesman_add, rute_add, id_outlet_add, id_produk_add, jumlah_add, harga_add, tipe_pembelian_add, tempo_add, status_add, id_file_penjualan_add, subtotal_add, nama_produk_add, nama_admin_add, satuan_add, kemasan_add, tanggal_bikin_add ) {
    //cek data in cart then update qty
    for (var i in mycart_penjualan_lapangan) {
      if(mycart_penjualan_lapangan[i].id_produk == id_produk_add)
      {
        alert('Data produk sudah ada !')
        return;          
      }
    }

    // jika tidak ada insert all
    var item = { tanggal: tanggal_add, no_nota_penjualan: no_nota_penjualan_add, nama_salesman: nama_salesman_add, rute: rute_add, id_outlet: id_outlet_add, id_produk: id_produk_add, jumlah: jumlah_add, harga: harga_add, tipe_pembelian: tipe_pembelian_add, tempo: tempo_add, status: status_add, id_file_penjualan: id_file_penjualan_add, subtotal: subtotal_add, nama_produk: nama_produk_add, nama_admin: nama_admin_add, satuan: satuan_add, kemasan: kemasan_add, tanggal_bikin: tanggal_bikin_add }; 
    mycart_penjualan_lapangan.push(item);
    saveCart();
    showCart();
  }

  function deleteItem(index){
    mycart_penjualan_lapangan.splice(index,1); // hapus item berdasarkan index
    saveCart();
    showCart();
  }

  function saveCart() {
    if( window.localStorage){
      localStorage.mycart_penjualan_lapangan = JSON.stringify(mycart_penjualan_lapangan);
    }
  }

  function clearCart(){
    $("#cartBody").empty();
    var row = '<tr>'+
                '<td class="text-center" width="30" align="center"></td>'+
                '<td></td>'+
                '<td class="text-center" width="150"></td>'+
                '<td class="text-center" width="100"></td>'+
                '<td class="text-center" width="150"></td>'+
                '<td class="text-center" width="50" style="text-align: right;"></td>'+
              '</tr>';

    $("#cartBody").append(row); //append ul dengan id cartbody
  }

  function showCart() {
    
    $("#cartBody").empty();

    for (var i in mycart_penjualan_lapangan) { //tampilkan data dari local storage mycart_penjualan_lapangan, template bisa anda sesuaikan
      var item = mycart_penjualan_lapangan[i];
      var row = '<tr>'+
                  '<td class="text-center" width="30" align="center">'+[parseInt(i)+1]+'</td>'+
                  '<td>'+item.nama_produk+'</td>'+
                  '<td class="text-center" width="150">'+rubah(item.harga)+'</td>';
          if(item.satuan == "dus"){
          row += '<td class="text-center" align="100">'+item.jumlah/item.kemasan+' '+item.satuan+'</td>';
          }else{
          row += '<td class="text-center" align="100">'+item.jumlah+' '+item.satuan+'</td>';
          }
                  
           row += '<td class="text-center" width="150">'+rubah(item.subtotal)+'</td>';
           row += '<td class="text-center" width="50" style="text-align: right;"><button class="btn btn-danger btn-xs" onclick="deleteItem(' + i + ')"><i class="fa fa-trash"  > </i></button></td>';
           row += '</tr>';

      $("#cartBody").append(row); //append ul dengan id cartbody
    }

    // untuk total
    var total = 0;
    for(var i = 0; i < mycart_penjualan_lapangan.length; i++) {
      total += mycart_penjualan_lapangan[i].subtotal; //jumlahkan keseluruhan row subtotal dari mycart_penjualan_lapangan untuk mendapatkan total
    }
    totalCart.innerHTML = rubah(total); 
    document.getElementById('piutang_nominal_nota_penjualan').value = total;
    //isikan div dengan id totalcart dengan nilai diatas
  }
</script>
<!-- Data Localstorage -->

<!-- Google Drive -->
<script>
$(document).ready(function(){
    
    const urlParams = new URLSearchParams(window.location.search);
    const code = urlParams.get('code');
    const redirect_uri = "http://localhost/olikuapp/" // replace with your redirect_uri;
    const client_secret = "EH4Z3F_K_gUNqo_V9dsEueZf"; // replace with your client secret
    const scope = "https://www.googleapis.com/auth/drive";
    var access_token= "";
    var client_id = "519718253602-pddt6i993k8jmi42mbnf9m1m8fh9up64.apps.googleusercontent.com"// replace it with your client id;
    
    $.ajax({
      type: 'POST',
      url: "https://www.googleapis.com/oauth2/v4/token",
      data: {code:code
          ,redirect_uri:redirect_uri,
          client_secret:client_secret,
      client_id:client_id,
      scope:scope,
      grant_type:"authorization_code"},
      dataType: "json",
      success: function(resultData) {         
          
        localStorage.setItem("accessToken",resultData.access_token);
        localStorage.setItem("refreshToken",resultData.refreshToken);
        localStorage.setItem("expires_in",resultData.expires_in);
        window.history.pushState({}, document.title, "/oliku/konsinyasi/filekontrak");      
                  
      }
  });
  
    function stripQueryStringAndHashFromPath(url) {
      return url.split("?")[0].split("#")[0];
    }   
  
    var Upload = function (file) {
      this.file = file;
    };
    
    Upload.prototype.getType = function() {
      localStorage.setItem("type",this.file.type);
      return this.file.type;
    };
    Upload.prototype.getSize = function() {
      localStorage.setItem("size",this.file.size);
      return this.file.size;
    };
    Upload.prototype.getName = function() {
      return this.file.name;
    };
    Upload.prototype.doUpload = function () {
      var that = this;
      var formData = new FormData();
  
      // add assoc key values, this will be posts values
      formData.append("file", this.file, this.getName());
      formData.append("upload_file", true);
  
      $.ajax({
        type: "POST",
        beforeSend: function(request) {
            request.setRequestHeader("Authorization", "Bearer" + " " + localStorage.getItem("accessToken"));
            
        },
        url: "https://www.googleapis.com/upload/drive/v2/files",
        data:{
            uploadType:"media"
        },
        xhr: function () {
            var myXhr = $.ajaxSettings.xhr();
            if (myXhr.upload) {
                myXhr.upload.addEventListener('progress', that.progressHandling, false);
            }
            return myXhr;
        },
        success: function (data) {
            console.log(data.id);
            document.getElementById('id_file').value = data.id;
        },
        error: function (error) {
            console.log(error);
            // taruh alert pop up gagal atau harus verifikasi dulu
            alert('Anda harus verifikasi !');
        },
        async: true,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        timeout: 60000
      });
    };
    
    Upload.prototype.progressHandling = function (event) {
      var percent = 0;
      var position = event.loaded || event.position;
      var total = event.total;
      var progress_bar_id = "#progress-wrp";
      if (event.lengthComputable) {
          percent = Math.ceil(position / total * 100);
      }
      // update progressbars classes so it fits your code
      $(progress_bar_id + " .progress-bar").css("width", +percent + "%");
      $(progress_bar_id + " .status").text(percent + "%");
    };
  
    $("#upload").on("click", function (e) {
      var file = $("#files")[0].files[0];
      var upload = new Upload(file);
  
      // maby check size or type here with upload.getSize() and upload.getType()
  
      // execute upload
      upload.doUpload();
    });
  
  });
</script>
<!-- Google Drive -->

<!-- Data Piutang -->
<script>
  function Simpan_piutang(){
    var tanggal = $('#piutang_tanggal').val();
    var no_nota_penjualan = $('#piutang_no_nota_penjualan').val();
    var tanggal_jatuh_tempo  = $('#piutang_tanggaljatuhtempo').val();
    var nominal_nota_penjualan = $('#piutang_nominal_nota_penjualan').val();
    var terbayar = $('#piutang_terbayar').val();
    var tanggal_bayar = $('#piutang_tanggalbayar').val();
    var sisa = nominal_nota_penjualan - terbayar
    var status = $('#piutang_status').val();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('penjualan/Simpan_piutang'); ?>",
        data: { 
                tanggal: tanggal,
                no_nota_penjualan: no_nota_penjualan,
                tanggal_jatuh_tempo: tanggal_jatuh_tempo,
                nominal_nota_penjualan: nominal_nota_penjualan,
                terbayar: terbayar,
                tanggal_bayar: tanggal_bayar,
                sisa: sisa,
                status: status
              },
        dataType: "json",
      success: function(cek){
        console.log("simpan piutang ok");
      }
    });
  }
</script>
<!-- Data Piutang -->

<!-- Simpan Localstorage to Database -->
<script type="text/javascript">
  function Simpan_nota(){
    if(window.localStorage!==undefined) {
      $.ajax({
          type: "POST",
          url: "<?php echo base_url('penjualan/Simpan_nota'); ?>",
          data: {data: localStorage.getItem('mycart_penjualan_lapangan')},
          dataType: "json",
        success: function(cek){
          swal({
            title: "Nota Sukses Disimpan !",
            type: "success",
            confirmButtonColor: "#2C3FF9",
            showCancelButton: false,
            confirmButtonText: "OK",
            closeOnConfirm: true
          }, function(isConfirm) {              
            Refresh()
            location.reload();
          });
        }
      });
    }else{
      alert("Proses simpan gagal, Localstorage Kosong");
    }
  }
</script>
<!-- Simpan Localstorage to Database -->

<!-- Simpan Localstorage to Database -->
<script type="text/javascript">
  $(document).ready(function(){
    function Loading(){
      $("#Loading").empty();
      var button_loading = '<button type="button" class="btn btn-flat btn-success active pull-right" disabled="disabled"><i class="fa fa fa-spinner fa-spin"></i> Loading</button>';
      $("#Loading").append(button_loading);
    }

    $("#button_submit").click(function(){
      Loading();
      Simpan_piutang();
      Simpan_nota();
    })
  });
</script>
<!-- Simpan Localstorage to Database -->

<script>
  function rubah(angka){
    var reverse = angka.toString().split('').reverse().join(''),
    ribuan = reverse.match(/\d{1,3}/g);
    ribuan = ribuan.join('.').split('').reverse().join('');
    return ribuan;
  }
</script>