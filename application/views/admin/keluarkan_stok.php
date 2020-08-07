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
          <li class="active"><a href="<?php echo base_url('suratjalan/sj_masuk'); ?>"><i class="fa fa-circle-o"></i> SJ Masuk</a></li>
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
      <b>Surat Jalan</b>
      <small>Keluarkan Stok (Retur ke Distributor)</small>
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
                <label for="tempo" class="col-sm-4 control-label">Tanggal</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d'); ?>">  
                </div>
              </div>
              <div class="form-group">
                <label for="kendaraan" class="col-sm-4 control-label">Supplier</label>
                <div class="col-sm-8">
                  <input type="text" name="supplier" id="supplier" class="form-control" placeholder="-" value="-">
                </div>
              </div>
              <div class="form-group">
                <label for="kendaraan" class="col-sm-4 control-label">Kendaraan</label>
                <div class="col-sm-8">
                  <input type="text" name="kendaraan" id="kendaraan" class="form-control" placeholder="-">
                </div>
              </div>
              <div class="form-group">
                <label for="no_plat" class="col-sm-4 control-label">No Plat</label>
                <div class="col-sm-8">
                  <input type="text" name="no_plat" id="no_plat" class="form-control" placeholder="-">
                </div>
              </div>
              <div class="form-group">
                <label for="nama_pengirim" class="col-sm-4 control-label">Nama Pengirim</label>
                <div class="col-sm-8">
                  <input type="text" name="nama_pengirim" id="nama_pengirim" class="form-control" placeholder="-">
                </div>
              </div>
            </div>

            <div class="col-md-7">
              <div class="form-group">
                <div class="col-sm-7">
                  <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Search...">
                </div>
                <div class="col-sm-3">
                  <input type="number" class="form-control" name="jumlah" id="jumlah" value="1" min="1">
                </div>
                <div class="col-sm-1">
                  <button type="button" class="btn btn-flat btn-info active" id="cek_stok"><i class="fa fa-check-square"></i></button>
                </div>
                <div class="col-sm-1">
                  <button type="submit" class="add btn btn-flat btn-primary active" id="button_produk"><i class="fa fa-plus"></i></button>
                </div>
              </div>
            </div>

            <div class="col-md-7">
              <div class="form-group">
                <div class="col-sm-8">
                  <div class="checkbox icheck">
                    <label>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="apakah_karton" id="apakah_karton"> Karton ?
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <!-- Data Hidden -->
            <input type="hidden" name="no_suratjalan" id="no_suratjalan" value="SJ<?php echo $no_suratjalan; ?>">
            <input type="hidden" name="nama_admin" id="nama_admin" value="<?php echo $this->session->userdata('nama_olikuapp'); ?>">
            <input type="hidden" name="id_file" id="id_file" value="KOSONG">
            <input type="hidden" name="id_produk" id="id_produk">
            <input type="hidden" name="nama_produk_alias" id="nama_produk_alias">
            <input type="hidden" name="tanggal_bikin" id="tanggal_bikin" value="<?php echo date('Y-m-d'); ?>">
            <input type="hidden" name="isi_kemasan" id="isi_kemasan">
            <!-- Data Hidden -->

            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="mydata">
                  <thead>
                    <tr>
                      <th class="text-center" width="30">No</th>
                      <th class="text-center">Nama Produk</th>
                      <th class="text-center" width="100">Jumlah (Qty)</th>
                      <th class="text-center" width="50"></th>
                    </tr>
                  </thead>
                  <tbody id="cartBody">
                    <tr>
                      <td class="text-center" width="30"></td>
                      <td></td>
                      <td class="text-center" width="100"></td>
                      <td class="text-center" width="50" style="text-align: right;"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>          

          <div class="box-footer">
            <button type="reset" class="btn btn-flat btn-default active" id="button_reset"><i class="fa fa-refresh"></i> Reset</button>
            <div id="Loading"><button type="button" class="btn btn-flat btn-success active pull-right" id="button_submit" disabled="disabled"><i class="fa fa-save"></i> Submit</button></div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
<!-- /.content-wrapper -->
</div>


<script type="text/javascript">
  $(document).ready(function(){
    Refresh();

    var mycart_addToCart_keluarkan = [];
    var mycart_stokGudang_keluarkan = [];
    $(function () {
      if (localStorage.mycart){
        mycart_addToCart_keluarkan = JSON.parse(localStorage.mycart_addToCart_keluarkan);
        mycart_stokGudang_keluarkan = JSON.parse(localStorage.mycart_stokGudang_keluarkan);
        showCart();
      }
    });

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
          if(hasil>=0){
            swal({
              title: "Stok Tersedia! sisa "+data+" pcs",
              type: "success",
              confirmButtonColor: "#2C3FF9",
              showCancelButton: false,
              confirmButtonText: "OK",
              closeOnConfirm: true
            });
          }else{
            swal({
              title: "Stok tidak tersedia, Sisa "+data+" pcs. lakukan perubahan stok !",
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

    $("#button_reset").click(function(){
      Refresh()
      location.reload();
    });

    /** Reset */     
    function Refresh(){
      document.getElementById('kendaraan').value = "-";
      document.getElementById('no_plat').value = "-";
      document.getElementById('nama_pengirim').value = "-";
      document.getElementById('nama_produk').value = "";
      document.getElementById('jumlah').value = "1";
      localStorage.removeItem("mycart_addToCart_keluarkan");
      localStorage.removeItem("mycart_stokGudang_keluarkan");
      clearCart()
    }

    function clearCart(){
      $("#cartBody").empty();
      var row = '<tr>'+
                  '<td class="text-center" width="30" align="center"></td>'+
                  '<td></td>'+
                  '<td class="text-center" width="100"></td>'+
                  '<td class="text-center" width="50" style="text-align: right;"></td>'+
                '</tr>';

      $("#cartBody").append(row); //append ul dengan id cartbody
    }
    /** Reset */

    /** Data Produk */
    $( "#nama_produk" ).autocomplete({
      source: "<?php echo site_url('penjualan/Cari_produk/?');?>",
      minLength: 3,
      select: function (event, ui) {
        $("#nama_produk").val(ui.item.value);
        $("#id_produk").val(ui.item.id_produk);
        $("#nama_produk_alias").val(ui.item.nama_produk);
        $("#isi_kemasan").val(ui.item.kemasan);
        $('#jumlah').focus();
      }
    });

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
          if(hasil>=0){
            var tanggal_add = $("#tanggal").val();
            var no_suratjalan_add = $("#no_suratjalan").val();
            var id_produk_add = $("#id_produk").val();
            var jumlah_add = jumlah;
            var id_file_add = $("#id_file").val();
            var nama_produk_add = $("#nama_produk_alias").val();
            var nama_admin_add = $("#nama_admin").val();
            var keluar_add = "KELUAR"; 
            var supplier = $("#supplier").val();
            var keterangan_add = "Keluarkan produk untuk Retur barang ke distributor "+supplier;

            addToCart(id_produk_add, nama_produk_add, jumlah_add);
            stokGudang(tanggal_add, id_produk_add, keluar_add, jumlah_add, keterangan_add, no_suratjalan_add, id_file_add);

            document.getElementById('nama_produk').value = "";
            document.getElementById('jumlah').value = "1";
            $('#button_submit').attr('disabled', false);
            $('#nama_produk').focus();
          }else{
            swal({
              title: "Stok tidak tersedia, Sisa "+data+" pcs.",
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

    function addToCart(id_produk_add, nama_produk_add, jumlah_add) {
      //cek data in cart then update qty
      for (var i in mycart_addToCart_keluarkan) {
        if(mycart_addToCart_keluarkan[i].id_produk == id_produk_add)
        {
          alert('Data produk sudah ada !')
          return;          
        }
      }

      // jika tidak ada insert all
      var item = { id_produk: id_produk_add, nama_produk: nama_produk_add, jumlah: jumlah_add }; 
      mycart_addToCart_keluarkan.push(item);
      
      if( window.localStorage){
        localStorage.mycart_addToCart_keluarkan = JSON.stringify(mycart_addToCart_keluarkan);
      }

      showCart();
    }

    function stokGudang(tanggal_add, id_produk_add, keluar_add, jumlah_add, keterangan_add, no_suratjalan_add, id_file_add) {
      //cek data in cart then update qty
      for (var i in mycart_stokGudang_keluarkan) {
        if(mycart_stokGudang_keluarkan[i].id_produk == id_produk_add)
        {
          console.log('Data produk sudah ada !');
          return;          
        }
      }

      // jika tidak ada insert all
      var item = { tanggal: tanggal_add, id_produk: id_produk_add, masuk_keluar: keluar_add, jumlah: jumlah_add, keterangan: keterangan_add, no_surat_jalan: no_suratjalan_add, id_file_surat_jalan: id_file_add }; 
      mycart_stokGudang_keluarkan.push(item);
      
      if( window.localStorage){
        localStorage.mycart_stokGudang_keluarkan = JSON.stringify(mycart_stokGudang_keluarkan);
      }
    }

    window.deleteItem = function(index){
      mycart_addToCart_keluarkan.splice(index,1);
      mycart_stokGudang_keluarkan.splice(index,1);
      saveCart();
      showCart();
    }

    function saveCart() {
      if( window.localStorage){
        localStorage.mycart_addToCart_keluarkan = JSON.stringify(mycart_addToCart_keluarkan);
        localStorage.mycart_stokGudang_keluarkan = JSON.stringify(mycart_stokGudang_keluarkan);
      }
    }

    function showCart() {    
      $("#cartBody").empty();
      for (var i in mycart_addToCart_keluarkan){
        var item = mycart_addToCart_keluarkan[i];
        var row = '<tr>'+
                    '<td class="text-center" width="30" align="center">'+[parseInt(i)+1]+'</td>'+
                    '<td>'+item.nama_produk+'</td>'+
                    '<td class="text-center" align="100">'+item.jumlah+'</td>'+
                    '<td class="text-center" width="50" style="text-align: right;"><button class="btn btn-danger btn-xs" onclick="deleteItem(' + i + ')"><i class="fa fa-trash"  > </i></button></td>'+
                  '</tr>';

        $("#cartBody").append(row); //append ul dengan id cartbody
      }
    }
    /** Data Produk */
  })
</script>

<script type="text/javascript">
  $(document).ready(function(){

    function Simpan_stokgudang(){
      if(window.localStorage!==undefined) {
        var tanggal = $("#tanggal").val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('suratjalan/Simpan_stokgudang'); ?>",
            data: {
                    data: localStorage.getItem('mycart_stokGudang_keluarkan'),
                    tanggal: tanggal
                  },
            dataType: "json",
          success: function(cek){
            console.log("Simpan stok gudang berhasil");
          }
        });
      }else{
        alert("Proses simpan gagal, Localstorage Stokgudang Kosong");
      }
    }

    function Simpan_suratjalan(){
      var no_nota_source = "R"+"<?php echo date('YmdHis'); ?>";

      var no_suratjalan = $("#no_suratjalan").val();
      var no_nota = no_nota_source;
      var tanggal = $("#tanggal").val();
      var kendaraan = $("#kendaraan").val();
      var no_plat = $("#no_plat").val();
      var nama_pengirim = $("#nama_pengirim").val();
      var tanggal_bikin = $("#tanggal_bikin").val();

      $.ajax({
        type: "POST",
        url: "<?php echo base_url('suratjalan/Simpan_suratjalan'); ?>",
        dataType: "json",
        data: { no_suratjalan: no_suratjalan,
                no_nota: no_nota,
                tanggal: tanggal,
                kendaraan: kendaraan,
                no_plat: no_plat,
                nama_pengirim: nama_pengirim,
                tanggal_bikin: tanggal_bikin
              },
        success: function(cek){
          swal({
            title: "Keluarkan Stok Berhasil !",
            type: "success",
            confirmButtonColor: "#2C3FF9",
            showCancelButton: false,
            confirmButtonText: "OK",
            closeOnConfirm: true
          }, function(isConfirm) {
            location.reload();
          });
        }
      });
    }

    function Loading(){
      $("#Loading").empty();
      var button_loading = '<button type="button" class="btn btn-flat btn-success active pull-right" disabled="disabled"><i class="fa fa fa-spinner fa-spin"></i> Loading</button>';
      $("#Loading").append(button_loading);
    }

    $("#button_submit").click(function(){
      Loading();
      Simpan_stokgudang();
      Simpan_suratjalan();
    });  

  });
</script>