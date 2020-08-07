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
      <li class="active">
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
      <b>Retur Barang</b>
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
                <label for="button_upload" class="col-sm-4 control-label">File Pembelian</label>
                <div class="col-sm-8">
                  <button type="button" class="form-control" id="button_upload" data-toggle="modal" data-target="#UPLOAD" autofocus="autofocus"><i class="fa fa-cloud-upload"></i> Upload</button>
                </div>
              </div>
              <div class="form-group">
                <label for="tempo" class="col-sm-4 control-label">Tanggal</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d'); ?>">  
                </div>
              </div>
              <div class="form-group">

                <!-- Hidden form -->
                <input type="hidden" name="id_file" id="id_file" value="KOSONG">
                <input type="hidden" name="supplier" id="supplier">
                <input type="hidden" name="id_produk" id="id_produk">
                <input type="hidden" name="nama_produk_alias" id="nama_produk_alias" class="form-control">
                <input type="hidden" name="tempo" id="tempo" class="form-control" value="0">
                <input type="hidden" name="status" id="status" class="form-control" value="Lunas">
                <input type="hidden" name="isi_kemasan" id="isi_kemasan">
                <input type="hidden" name="nama_admin" id="nama_admin" value="<?php echo $this->session->userdata('nama_olikuapp'); ?>">
                <!-- End Hidden form -->

                <label for="id_outlet" class="col-sm-4 control-label">Nama Outlet</label>
                <div class="col-sm-8">
                  <input type="text" name="nama_outlet" id="nama_outlet" class="form-control" placeholder="Search..." disabled="disabled">  
                </div>
              </div>
              <div class="form-group">
                <label for="no_nota_pembelian" class="col-sm-4 control-label">No Nota</label>
                <div class="col-sm-8">
                  <input type="text" name="no_nota_pembelian" id="no_nota_pembelian" class="form-control" placeholder="-" disabled="disabled">
                </div>
              </div>
            </div>

            <div class="col-md-7">
              <div class="form-group">
                <div class="col-sm-7">
                  <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Search..." disabled="disabled">
                </div>
                <!-- <div class="col-sm-3"> -->
                  <input type="hidden" class="form-control" name="harga_beli" id="harga_beli" placeholder="0" min="1">
                <!-- </div> -->
                <div class="col-sm-3">
                  <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="0" min="1" disabled="disabled" value="1">
                </div>
                <div class="col-sm-1">
                  <button type="submit" class="add btn btn-flat btn-primary active" id="button_produk" disabled="disabled"><i class="fa fa-plus"></i></button>
                </div>
              </div>
            </div>

            <div class="col-md-7">
              <div class="form-group">
                <div class="col-sm-8">
                  <div class="checkbox icheck">
                    <label>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="apakah_karton" id="apakah_karton"> Penjualan Karton ?
                    </label>
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
            <button type="reset" class="btn btn-flat btn-default active" id="button_reset"><i class="fa fa-refresh"></i> Reset</button>
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

<script>
  /** SCRIPT SEMENTARA */
  $("#button_upload").click(function(){
    $('#nama_outlet').attr('disabled', false);
    $('#nama_outlet').focus();
  })
  /** SCRIPT SEMENTARA */
</script>

<!-- Data Outlet -->
<script type="text/javascript">
  $(document).ready(function(){
    $( "#nama_outlet" ).autocomplete({
      source: "<?php echo site_url('penjualan/Cari_outlet/?');?>",
      minLength: 3,
      select: function (event, ui) {
        $("#nama_outlet").val(ui.item.value);
        $("#supplier").val(ui.item.value);
        $('#no_nota_pembelian').attr('disabled', false);
        $('#nama_produk').attr('disabled', false);
        $('#harga_beli').attr('disabled', false);
        $('#jumlah').attr('disabled', false);
        $('#button_produk').attr('disabled', false);
        $('#tanggal').attr('readonly', true);
        $('#button_upload').attr('disabled', true);
        $('#nama_outlet').attr('readonly', true);
        $('#no_nota_pembelian').focus();
      }
    });
  })
</script>
<!-- Data Outlet -->

<!-- Data Produk -->
<script type="text/javascript">
  $(document).ready(function(){
    $( "#nama_produk" ).autocomplete({
      source: "<?php echo site_url('returbarang/cari_produk/?');?>",
      minLength: 3,
      select: function (event, ui) {
        $("#nama_produk").val(ui.item.value);
        $("#id_produk").val(ui.item.id_produk);
        $("#nama_produk_alias").val(ui.item.nama_produk);
        $("#isi_kemasan").val(ui.item.kemasan);
        $("#harga_beli").val(ui.item.harga_beli);
        $('#button_upload').attr('disabled', true);
        $('#nama_outlet').attr('disabled', true);
        $('#no_nota_pembelian').attr('readonly', true);
        $("#harga_beli").focus();
      }
    });

    $("#jumlah").keyup(function(event) {
      if (event.keyCode === 13) {
        $("#button_produk").click();
      }
    });
  })
</script>
<!-- Data Produk -->

<!-- Data Localstorage -->
<script>
  Refresh()
  var mycart_returbarang = [];
    $(function () {
      if (localStorage.mycart){
        mycart_returbarang = JSON.parse(localStorage.mycart_returbarang);
        showCart();
      }
    });

  // mengambil data button ketika button dengan class add di click

  $("#button_reset").click(function(){
    Refresh()
    location.reload();
  })
  
  // mengambil data button ketika button dengan class add di click
  $('.add').click(function(){

    if ($('#apakah_karton').is(':checked')) {
      var tanggal_add = $("#tanggal").val();
      var no_nota_pembelian_add = $("#no_nota_pembelian").val();
      var id_produk_add = $("#id_produk").val();
      var jumlah_karton = $("#jumlah").val();
      var isi_kemasan = $("#isi_kemasan").val();
      var jumlah_add = jumlah_karton * isi_kemasan;
      var harga_beli_add = $("#harga_beli").val();
      var tempo_add = $("#tempo").val();
      var status_add = $("#status").val();
      var supplier_add = $("#supplier").val();
      var id_file_pembelian_add = $("#id_file").val();
      var nama_produk_alias_add = $("#nama_produk_alias").val();
      var subtotal_add = harga_beli_add * jumlah_add;
      var satuan_add = 'dus';
      var kemasan_add = $("#isi_kemasan").val();
      var nama_admin_add = $("#nama_admin").val();
    }else{
      var tanggal_add = $("#tanggal").val();
      var no_nota_pembelian_add = $("#no_nota_pembelian").val();
      var id_produk_add = $("#id_produk").val();
      var jumlah_add = $("#jumlah").val();
      var harga_beli_add = $("#harga_beli").val();
      var tempo_add = $("#tempo").val();
      var status_add = $("#status").val();
      var supplier_add = $("#supplier").val();
      var id_file_pembelian_add = $("#id_file").val();
      var nama_produk_alias_add = $("#nama_produk_alias").val();
      var subtotal_add = harga_beli_add * jumlah_add;
      var satuan_add = 'pcs';
      var kemasan_add = $("#isi_kemasan").val();
      var nama_admin_add = $("#nama_admin").val();
    }

    addToCart(tanggal_add, no_nota_pembelian_add, id_produk_add, jumlah_add, harga_beli_add, tempo_add, status_add, supplier_add, id_file_pembelian_add, nama_produk_alias_add, subtotal_add, satuan_add, kemasan_add, nama_admin_add);

    document.getElementById('nama_produk').value = "";
    document.getElementById('harga_beli').value = "";
    document.getElementById('jumlah').value = "";
    $('#button_submit').attr('disabled', false);
    $('#nama_produk').focus();
  })

  function Refresh(){
    document.getElementById('nama_produk').value = "";
    document.getElementById('harga_beli').value = "";
    document.getElementById('jumlah').value = "1";
    document.getElementById('no_nota_pembelian').value = "";
    document.getElementById('supplier').value = "";
    $('#nama_produk').attr('disabled', true);
    $('#harga_beli').attr('disabled', true);
    $('#jumlah').attr('disabled', true);
    $('#button_produk').attr('disabled', true);
    // localStorage.clear();
    localStorage.removeItem("mycart_returbarang");
    clearCart()
  }

  function addToCart(tanggal_add, no_nota_pembelian_add, id_produk_add, jumlah_add, harga_beli_add, tempo_add, status_add, supplier_add, id_file_pembelian_add, nama_produk_alias_add, subtotal_add, satuan_add, kemasan_add, nama_admin_add) {
    //cek data in cart then update qty
    for (var i in mycart_returbarang) {
      if(mycart_returbarang[i].id_produk == id_produk_add)
      {
        alert('Data produk sudah ada !')
        return;          
      }
    }

    // jika tidak ada insert all
    var item = { tanggal: tanggal_add, no_nota_pembelian: no_nota_pembelian_add, id_produk: id_produk_add, jumlah: jumlah_add, harga_beli: harga_beli_add, tempo: tempo_add, status: status_add, supplier: supplier_add, id_file_pembelian: id_file_pembelian_add, nama_produk: nama_produk_alias_add, subtotal: subtotal_add, satuan: satuan_add, kemasan: kemasan_add, nama_admin: nama_admin_add }; 
    mycart_returbarang.push(item);
    saveCart();
    showCart();
  }

  function deleteItem(index){
    mycart_returbarang.splice(index,1); // hapus item berdasarkan index
    saveCart();
    showCart();
  }

  function saveCart() {
    if( window.localStorage){
      localStorage.mycart_returbarang = JSON.stringify(mycart_returbarang);
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

    for (var i in mycart_returbarang) { //tampilkan data dari local storage mycart_returbarang, template bisa anda sesuaikan
      var item = mycart_returbarang[i];
      var row = '<tr>'+
                  '<td class="text-center" width="30" align="center">'+[parseInt(i)+1]+'</td>'+
                  '<td>'+item.nama_produk+'</td>'+
                  '<td class="text-center" width="150">'+rubah(item.harga_beli)+'</td>';
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
    for(var i = 0; i < mycart_returbarang.length; i++) {
      total += mycart_returbarang[i].subtotal; //jumlahkan keseluruhan row subtotal dari mycart_returbarang untuk mendapatkan total
    }
    totalCart.innerHTML = rubah(total);
    //isikan div dengan id totalcart dengan nilai diatas
  }
</script>
<!-- Data Localstorage -->

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
      if(window.localStorage!==undefined) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('pembelian/Simpan_nota'); ?>",
            data: {data: localStorage.getItem('mycart_returbarang')},
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