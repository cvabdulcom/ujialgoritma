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
      <li class="active">
        <a href="<?php echo base_url('penjualan/notakantor'); ?>">
          <i class="fa fa-cart-arrow-down"></i> <span>Nota Penjualan</span>
        </a>
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
          <li><a href="<?php echo base_url('suratjalan/sj_stokoutlet'); ?>"><i class="fa fa-circle-o"></i> Mutasi Gudang</a></li>
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
    </h1>
    <ol class="breadcrumb">
      <li class="active"><b>No Nota :</b> PN<?php echo $no_nota_penjualan;?> &nbsp;|&nbsp; <b>Tanggal :</b> <?php echo date('d/m/Y'); ?> </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">&nbsp;</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#TAMBAHOUTLET"><i class="fa fa-users"></i> Tambah Outlet</button>
            </div>
          </div>
          <div class="box-body chart-responsive">
            <div class="col-md-5 form-horizontal">
              <div class="form-group">

                <!-- Hidden form -->
                <input type="hidden" name="status" id="status" value="UNDELIVER">
                <input type="hidden" name="no_nota_penjualan" id="no_nota_penjualan" value="PN<?php echo $no_nota_penjualan;?>">
                <input type="hidden" name="nama_admin" id="nama_admin" value="<?php echo $this->session->userdata('nama_olikuapp'); ?>">
                <input type="hidden" name="nama_salesman" id="nama_salesman" value="Sales Kantor">
                <input type="hidden" name="rute" id="rute" value="0">
                <input type="hidden" name="id_outlet" id="id_outlet" value="OK<?php echo $no_nota_penjualan;?>">
                <input type="hidden" name="nama_produk_alias" id="nama_produk_alias">
                <input type="hidden" name="tipe_pembelian" id="tipe_pembelian" value="J">
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
                  $jatuhtempo = date("Y-m-d", strtotime("$hariini +1 days"));
                ?>
                <!-- Hidden Form Piutang -->
                <input type="hidden" name="piutang_tanggal" id="piutang_tanggal" value="<?php echo date('Y-m-d'); ?>">
                <input type="hidden" name="piutang_no_nota_penjualan" id="piutang_no_nota_penjualan" value="PN<?php echo $no_nota_penjualan;?>">
                <input type="hidden" name="piutang_tanggaljatuhtempo" id="piutang_tanggaljatuhtempo" value="<?php echo $jatuhtempo; ?>">
                <input type="hidden" name="piutang_nominal_nota_penjualan" id="piutang_nominal_nota_penjualan">
                <input type="hidden" name="piutang_tanggalbayar" id="piutang_tanggalbayar" value="<?php echo date('Y-m-d'); ?>">
                <input type="hidden" name="piutang_status" id="piutang_status" value="Belum">
                <input type="hidden" name="piutang_terbayar" id="piutang_terbayar" value="0">
                <!-- Hidden Form Piutang -->

                <label for="id_outlet" class="col-sm-4 control-label">Nama Outlet</label>
                <div class="col-sm-8">
                  <input type="text" name="nama_outlet" id="nama_outlet" class="form-control" placeholder="Search..." autofocus="autofocus">
                </div>
              </div>
              <div class="form-group">
                <label for="tempo" class="col-sm-4 control-label">Tanggal</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d'); ?>">  
                </div>
              </div>
              <div class="form-group">
                <label for="tempo" class="col-sm-4 control-label">Jenis Harga</label>
                <div class="col-sm-8">
                  <select class="form-control" name="jenis_harga" id="jenis_harga" style="width: 100%;">
                    <option value="harga_jpc_dus">JPC Dus</option>
                    <option value="harga_jpc_botol" selected>JPC Botol</option>
                    <option value="harga_jpt_dus">JPT Dus</option>
                    <option value="harga_jpt_botol">JPT Botol</option>
                    <option value="harga_ky_t_bayar">Konsi Bayar</option>
                    <option value="harga_ky_r_jual">Konsi Jual</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="id_outlet" class="col-sm-4 control-label">&nbsp;</label>
                <div class="col-sm-8">
                  <button type="button" class="btn btn-xs btn-flat btn-default active pull-right" id="btn_informasi"><i class="fa fa-info-circle"></i> Informasi</button>
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
                  </tfoot>
                </table>
              </div>
            </div>
          </div>          

          <div class="box-footer">
            <button type="reset" class="btn btn-flat btn-default active" id="reset"><i class="fa fa-refresh"></i> Reset</button>
            <button class="btn btn-flat btn-warning active" id="print" data-toggle="modal" data-target="#PRINT"><i class="fa fa-print"></i> Print</button>
            <button type="button" class="btn btn-flat btn-success active pull-right" id="button_submit" disabled="disabled"><div id="Loading"><i class="fa fa-save"></i> Submit</div></button>
          </div>
          
        </div>
      </div>
    </div>
  </section>
<!-- /.content-wrapper -->
</div>
<!-- Modal Start -->
<div class="modal fade" id="TAMBAHOUTLET">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Tambah Outlet</b></h4>
      </div>
      <div class="modal-body">
        <div class="box-body">
          <form class="form-horizontal">
            <div class="form-group">
              <label for="nama_outlet_tambahoutlet" class="col-sm-3 control-label">Nama Outlet</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="nama_outlet_tambahoutlet" id="nama_outlet_tambahoutlet" placeholder="-">
              </div>
            </div>
            <div class="form-group">
              <label for="kecamatan_tambahoutlet" class="col-sm-3 control-label">Kecamatan</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="kecamatan_tambahoutlet" id="kecamatan_tambahoutlet" placeholder="-">
              </div>
            </div>
            <div class="form-group">
              <label for="kabupaten_tambahoutlet" class="col-sm-3 control-label">Kabupaten</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="kabupaten_tambahoutlet" id="kabupaten_tambahoutlet" placeholder="-">
              </div>
            </div>
            <div class="form-group">
              <label for="nama_pemilik_tambahoutlet" class="col-sm-3 control-label">Nama Pemilik</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="nama_pemilik_tambahoutlet" id="nama_pemilik_tambahoutlet" placeholder="-">
              </div>
            </div>
            <div class="form-group">
              <label for="telepon_tambahoutlet" class="col-sm-3 control-label">Telepon</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" name="telepon_tambahoutlet" id="telepon_tambahoutlet" value="0">
              </div>
            </div>
            <div class="form-group">
              <label for="whatsapp_tambahoutlet" class="col-sm-3 control-label">Whatsapp</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" name="whatsapp_tambahoutlet" id="whatsapp_tambahoutlet" value="0">
              </div>
            </div>
            <div class="form-group">
              <label for="tipe_outlet_tambahoutlet" class="col-sm-3 control-label">Tipe Outlet</label>
              <div class="col-sm-9">
                <select name="tipe_outlet_tambahoutlet" id="tipe_outlet_tambahoutlet" class="form-control" required>
                  <option value="">-</option>
                  <option value="2W">2W</option>
                  <option value="2W & 4W">2W & 4W</option>
                  <option value="4W">4W</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="jumlah_pegawai_tambahoutlet" class="col-sm-3 control-label">Jumlah Pegawai</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" name="jumlah_pegawai_tambahoutlet" id="jumlah_pegawai_tambahoutlet" value="0">
              </div>
            </div>
            <div class="form-group">
              <label for="fasilitas_tambahoutlet" class="col-sm-3 control-label">Fasilitas</label>
              <div class="col-sm-9">
                <select name="fasilitas_tambahoutlet" id="fasilitas_tambahoutlet" class="form-control" required>
                  <option value="">-</option>
                  <option value="Ganti Oli">Ganti Oli</option>
                  <option value="Penjualan Oli">Penjualan Oli</option>
                  <option value="Service">Service</option>
                  <option value="Ban">Ban</option>
                  <option value="SparepartW">Sparepart</option>
                  <option value="Aki">Aki</option>
                  <option value="Cuci">Cuci</option>
                  <option value="Pengisian Bahan Bakar">Pengisian Bahan Bakar</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="alamat_tambahoutlet" class="col-sm-3 control-label">Alamat</label>
              <div class="col-sm-9">
                <textarea class="form-control" name="alamat_tambahoutlet" id="alamat_tambahoutlet" placeholder="-"></textarea>
              </div>
            </div>
            <div>
              <input type="hidden" name="id_outlet_tambahoutlet" id="id_outlet_tambahoutlet" value="OT<?php echo $id_outlet;?>">
              <input type="hidden" name="latitude_tambahoutlet" id="latitude_tambahoutlet" value="110">
              <input type="hidden" name="longitude_tambahoutlet" id="longitude_tambahoutlet" value="-7">
              <input type="hidden" name="tanggal_lahir_tambahoutlet" id="tanggal_lahir_tambahoutlet" value="<?php echo date('Y-m-d'); ?>">
              <input type="hidden" name="rute_tambahoutlet" id="rute_tambahoutlet" value="0">
              <input type="hidden" name="tipe_pembelian_tambahoutlet" id="tipe_pembelian_tambahoutlet" value="J">
              <input type="hidden" name="nama_salesman_tambahoutlet" id="nama_salesman_tambahoutlet" value="kantor">
              <input type="hidden" name="supplier_tambahoutlet" id="supplier_tambahoutlet" value="kantor">
              <input type="hidden" name="status_program_tambahoutlet" id="status_program_tambahoutlet" value="JP CASH">
              <input type="hidden" name="foto_outlet_tambahoutlet" id="foto_outlet_tambahoutlet" value="KOSONG">
              <input type="hidden" name="foto_stokawal_tambahoutlet" id="foto_stokawal_tambahoutlet" value="KOSONG">
              <input type="hidden" name="foto_kontrak_tambahoutlet" id="foto_kontrak_tambahoutlet" value="KOSONG">
              <input type="hidden" name="foto_kontrak_tempo_tambahoutlet" id="foto_kontrak_tempo_tambahoutlet" value="KOSONG">
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="button" class="btn btn-primary" id="btn_simpan_outlet"><i class="fa fa-save"></i> Save</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->

<!-- Modal Informasi -->
<div class="modal fade" id="INFORMASI">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <input type="hidden" name="id_informasi" id="id_informasi">
        <input type="hidden" name="time" id="time" value="<?php echo(date("d F Y h:i:s", time())); ?>">
        <input type="hidden" name="nama" id="nama" value="<?php echo $this->session->userdata('nama_olikuapp'); ?>">
        <textarea class="form-control" name="keterangan" id="keterangan"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary" id="btn_simpan_informasi">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Informasi -->

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

  // mengambil data button ketika button dengan class add di click

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
            var harga_karton = $("#harga_jpc_dus").val();
            var harga_add = harga_karton;
            // var tipe_pembelian_add = $("#tipe_pembelian").val();
            var tipe_pembelian_add = "JP CASH";
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

            var jenis_harga = $("#jenis_harga").val();
            if(jenis_harga === 'harga_jpc_dus'){
              var harga_add = $("#harga_jpc_botol").val();
            }else if(jenis_harga === 'harga_jpc_botol'){
              var harga_add = $("#harga_jpc_botol").val();
            }else if(jenis_harga === 'harga_jpt_dus'){
              var harga_add = $("#harga_jpt_dus").val();
            }else if(jenis_harga === 'harga_jpt_botol'){
              var harga_add = $("#harga_jpt_botol").val();
            }else if(jenis_harga === 'harga_ky_t_bayar'){
              var harga_add = $("#harga_ky_t_bayar").val();
            }else if(jenis_harga === 'harga_ky_r_jual'){
              var harga_add = $("#harga_ky_r_jual").val();
            }
            
            // var tipe_pembelian_add = $("#tipe_pembelian").val();
            var tipe_pembelian_add = "JP CASH";
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

          addToCart(tanggal_add, no_nota_penjualan_add, nama_salesman_add, rute_add, id_outlet_add, id_produk_add, jumlah_add, harga_add, tipe_pembelian_add, tempo_add, status_add, id_file_penjualan_add, subtotal_add, nama_produk_add, nama_admin_add, satuan_add, kemasan_add, tanggal_bikin_add);   //kirimkan nilai ke fungsi addToCart, berhati - hati penggunaan inserting data usahakan serverside process, ini hanya untuk pembelajaran
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
    $('#nama_produk').attr('disabled', true);
    $('#jumlah').attr('disabled', true);
    $('#button_produk').attr('disabled', true);
    // localStorage.clear();
    localStorage.removeItem("mycart_penjualan_lapangan");
    clearCart()
  }

  function addToCart(tanggal_add, no_nota_penjualan_add, nama_salesman_add, rute_add, id_outlet_add, id_produk_add, jumlah_add, harga_add, tipe_pembelian_add, tempo_add, status_add, id_file_penjualan_add, subtotal_add, nama_produk_add, nama_admin_add, satuan_add, kemasan_add, tanggal_bikin_add) {
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
  function Loading(){
    $("#Loading").empty();
    var button_loading = '<i class="fa fa fa-spinner fa-spin"></i> Loading';
    $("#Loading").append(button_loading);
  }

  $("#button_submit").click(function(){
    Loading();
    Simpan_piutang();
    Simpan_nota();
  })
</script>
<!-- Simpan Localstorage to Database -->

<script type="text/javascript">
  $(document).ready(function(){
    /* SIMPAN PRODUK START */
    $('#btn_simpan_outlet').on('click',function(){
      var id_outlet_tambahoutlet = $('#id_outlet_tambahoutlet').val();
      var nama_outlet_tambahoutlet = $('#nama_outlet_tambahoutlet').val();
      var kecamatan_tambahoutlet = $('#kecamatan_tambahoutlet').val();
      var kabupaten_tambahoutlet = $('#kabupaten_tambahoutlet').val();
      var nama_pemilik_tambahoutlet = $('#nama_pemilik_tambahoutlet').val();
      var telepon_tambahoutlet = $('#telepon_tambahoutlet').val();
      var whatsapp_tambahoutlet = $('#whatsapp_tambahoutlet').val();
      var tipe_outlet_tambahoutlet = $('#tipe_outlet_tambahoutlet').val();
      var jumlah_pegawai_tambahoutlet = $('#jumlah_pegawai_tambahoutlet').val();
      var fasilitas_tambahoutlet = $('#fasilitas_tambahoutlet').val();
      var alamat_tambahoutlet = $('#alamat_tambahoutlet').val();
      var latitude_tambahoutlet = $('#latitude_tambahoutlet').val();
      var longitude_tambahoutlet = $('#longitude_tambahoutlet').val();
      var tanggal_lahir_tambahoutlet = $('#tanggal_lahir_tambahoutlet').val();
      var rute_tambahoutlet = $('#rute_tambahoutlet').val();
      var tipe_pembelian_tambahoutlet = $('#tipe_pembelian_tambahoutlet').val();
      var nama_salesman_tambahoutlet = $('#nama_salesman_tambahoutlet').val();
      var supplier_tambahoutlet = $('#supplier_tambahoutlet').val();
      var status_program_tambahoutlet = $('#status_program_tambahoutlet').val();
      var foto_outlet_tambahoutlet = $('#foto_outlet_tambahoutlet').val();
      var foto_stokawal_tambahoutlet = $('#foto_stokawal_tambahoutlet').val();
      var foto_kontrak_tambahoutlet = $('#foto_kontrak_tambahoutlet').val();
      var foto_kontrak_tempo_tambahoutlet = $('#foto_kontrak_tempo_tambahoutlet').val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('jualputus/tambah_kantor'); ?>",
        dataType  : "JSON",
        data      : { 
                      id_outlet:id_outlet_tambahoutlet, 
                      nama_outlet:nama_outlet_tambahoutlet,
                      kecamatan:kecamatan_tambahoutlet,
                      kabupaten:kabupaten_tambahoutlet,
                      nama_pemilik:nama_pemilik_tambahoutlet,
                      telepon:telepon_tambahoutlet,
                      whatsapp:whatsapp_tambahoutlet,
                      tipe_outlet:tipe_outlet_tambahoutlet,
                      jumlah_pegawai:jumlah_pegawai_tambahoutlet,
                      fasilitas:fasilitas_tambahoutlet,
                      alamat:alamat_tambahoutlet,
                      latitude:latitude_tambahoutlet,
                      longitude:longitude_tambahoutlet,
                      tanggal_lahir:tanggal_lahir_tambahoutlet,
                      rute:rute_tambahoutlet,
                      tipe_pembelian:tipe_pembelian_tambahoutlet,
                      nama_salesman:nama_salesman_tambahoutlet,
                      supplier:supplier_tambahoutlet,
                      status_program:status_program_tambahoutlet,
                      foto_outlet:foto_outlet_tambahoutlet,
                      foto_stokawal:foto_stokawal_tambahoutlet,
                      foto_kontrak:foto_kontrak_tambahoutlet,
                      foto_kontrak_tempo:foto_kontrak_tempo_tambahoutlet
                    },
        success: function(data){          
          $('#TAMBAHOUTLET').modal('hide');
          swal({
            title: "Data Outlet Disimpan !",
            type: "success",
            confirmButtonColor: "#2C3FF9",
            showCancelButton: false,
            confirmButtonText: "OK",
            closeOnConfirm: true
          }, function(isConfirm){
            // location.reload();
            $('[name = "nama_outlet_tambahoutlet"]').val("");
            $('[name = "kecamatan_tambahoutlet"]').val("");
            $('[name = "kabupaten_tambahoutlet"]').val("");
            $('[name = "nama_pemilik_tambahoutlet"]').val("");
            $('[name = "telepon_tambahoutlet"]').val("");
            $('[name = "whatsapp_tambahoutlet"]').val("");
            $('[name = "tipe_outlet_tambahoutlet"]').val("");
            $('[name = "tipe_outlet_tambahoutlet"]').text("-");
            $('[name = "jumlah_pegawai_tambahoutlet"]').val("");
            $('[name = "fasilitas_tambahoutlet"]').val("");
            $('[name = "fasilitas_tambahoutlet"]').text("-");
            $('[name = "alamat_tambahoutlet"]').val("");
            $('#nama_outlet').focus();
          });
        }
      });
      return false;
    });
    /* SIMPAN PRODUK END */
  });
</script>

<script>
  function rubah(angka){
    var reverse = angka.toString().split('').reverse().join(''),
    ribuan = reverse.match(/\d{1,3}/g);
    ribuan = ribuan.join('.').split('').reverse().join('');
    return ribuan;
  }
</script>

<script>
  $("#btn_informasi").click(function(){
    get_id_informasi();
    $('#INFORMASI').modal('show');
  })

  function get_id_informasi(){
    $.ajax({
      type      : "GET",
      url       : "<?php echo base_url('call/Get_id_informasi'); ?>",
      dataType  : "JSON",
      success   : function(data){
        $("#id_informasi").val(data);
      }
    });
  }

  $("#btn_simpan_informasi").click(function(){
    
    var id_informasi = $("#id_informasi").val();
    var tanggal = $("#tanggal").val();
    var time = $("#time").val();
    var nama = $("#nama").val();
    var keterangan = $("#keterangan").val();
    $.ajax({
      type      : "POST",
      url       : "<?php echo base_url('call/Simpan_informasi'); ?>",
      dataType  : "JSON",
      data      : {
                    id_informasi: id_informasi,
                    tanggal: tanggal,
                    time: time,
                    nama: nama,
                    keterangan: keterangan
                  },
      success   : function(data){
        $('#INFORMASI').modal('hide');
        $('#nama_outlet').attr('readonly', true);
        $('#nama_produk').attr('disabled', false);
        $('#jumlah').attr('disabled', false);
        $('#button_produk').attr('disabled', false);
        $('#nama_produk').focus();
        document.getElementById('keterangan').value = "";   
        // Informasi_sukses();     
      }
    });    
  })
</script>