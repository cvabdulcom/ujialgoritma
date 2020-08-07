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
      <li>
        <a href="<?php echo base_url('penjualan/notakantor'); ?>">
          <i class="fa fa-cart-arrow-down"></i> <span>Nota Penjualan</span>
        </a>
      </li>  
      <li class="active">
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
      <b>Nota Pembelian</b>
    </h1>
    <ol class="breadcrumb">
      <li class="active">&nbsp; <b>Tanggal :</b> <?php echo date('d/m/Y'); ?> </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">&nbsp;</h3>
            <div class="box-tools pull-right">
              &nbsp;
            </div>
          </div>
          <div class="box-body chart-responsive">
            <div class="col-md-5 form-horizontal">             
              <div class="form-group">
                <label for="button_upload" class="col-sm-4 control-label">File Pembelian</label>
                <div class="col-sm-8">
                  <button type="button" class="form-control" id="button_upload" data-toggle="modal" data-target="#UPLOAD" autofocus="autofocus"><i class="fa fa-cloud-upload"></i> Upload</button>
                </div>
              </div>
              <div class="form-group">
                <label for="no_nota_pembelian" class="col-sm-4 control-label">No Nota</label>
                <div class="col-sm-8">
                  <input type="text" name="no_nota_pembelian" id="no_nota_pembelian" class="form-control" placeholder="-" disabled="disabled">
                </div>
              </div>
              <div class="form-group">
                <label for="supplier" class="col-sm-4 control-label">Supplier</label>
                <div class="col-sm-8">
                  <input type="text" name="supplier" id="supplier" class="form-control" placeholder="-" disabled="disabled">
                </div>
              </div>
              <div class="form-group">
                <label for="tempo" class="col-sm-4 control-label">Tempo</label>
                <div class="col-sm-8">
                  <input type="number" name="tempo" id="tempo" class="form-control" placeholder="-" value="0" min="0" disabled="disabled">
                </div>
              </div>
              <div class="form-group">
                <label for="status" class="col-sm-4 control-label">Status</label>
                <div class="col-sm-8">
                  <select class="form-control" name="status" id="status" style="width: 100%;" disabled="disabled">
                    <option value="">- Pilihan</option>
                    <option value="Lunas">Lunas</option>
                    <option value="Belum">Belum</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="tempo" class="col-sm-4 control-label">Tanggal</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d'); ?>">  
                </div>
              </div>
            </div>
            
            <!-- Hidden form -->
            <input type="hidden" name="id_file" id="id_file" value="KOSONG">
            <input type="hidden" name="nama_admin" id="nama_admin" value="<?php echo $this->session->userdata('nama_olikuapp'); ?>">
            <input type="hidden" name="id_produk" id="id_produk">
            <input type="hidden" name="nama_produk_alias" id="nama_produk_alias">
            <!-- <input type="hidden" name="isi_kemasan" id="isi_kemasan"> -->
            <!-- Hidden form -->

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

            <div class="col-md-7">
              <div class="form-group">
                <div class="col-sm-7">
                  <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Search..." disabled="disabled">
                </div>
                <div class="col-sm-2">
                  <input type="number" class="form-control" name="isi_kemasan" id="isi_kemasan" value="0" disabled="disabled">
                </div>
                <div class="col-sm-2">
                  <input type="number" class="form-control" name="jumlah" id="jumlah" value="1" min="1" disabled="disabled">
                </div>
                <div class="col-sm-1">
                  <button type="submit" class="add btn btn-flat btn-primary active" id="button_produk" disabled="disabled"><i class="fa fa-plus"></i></button>
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
                      <th class="text-center" width="100">Karton</th>
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
            <button type="button" class="btn btn-flat btn-success active pull-right" id="button_submit" disabled="disabled"><div id="Loading"><i class="fa fa-save"></i> Submit</div></button>
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

<script>
  /** SCRIPT SEMENTARA */
  $("#button_upload").click(function(){
    $('#no_nota_pembelian').attr('disabled', false);
    $('#supplier').attr('disabled', false);
    $('#tempo').attr('disabled', false);
    $('#status').attr('disabled', false);
  })
  /** SCRIPT SEMENTARA */

  $('#status').change(function() {
    $('#nama_produk').attr('disabled', false);
    $('#jumlah').attr('disabled', false);
    $('#isi_kemasan').attr('disabled', false);
    $('#button_produk').attr('disabled', false);
    $('#nama_produk').focus();
    $('#button_upload').attr('disabled', true);
    $('#no_nota_pembelian').attr('readonly', true);
    $('#supplier').attr('readonly', true);
    $('#tempo').attr('readonly', true);
    $('#status').attr('readonly', true);
  });
</script>

<!-- Data Produk -->
<script type="text/javascript">
  $(document).ready(function(){
    $( "#nama_produk" ).autocomplete({
      source: "<?php echo site_url('penjualan/Cari_produk/?');?>",
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

<!-- Data Localstorage -->
<script>
  Refresh()
  var mycart_pembelian = [];
  
  $(function () {
    if (localStorage.mycart){
      mycart_pembelian = JSON.parse(localStorage.mycart_pembelian);
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
    var tanggal_add = $("#tanggal").val();
    var no_nota_pembelian_add = $("#no_nota_pembelian").val();
    var id_produk_add = $("#id_produk").val();
    var jumlah_karton = $("#jumlah").val();
    var harga_beli_add = $("#harga_beli").val();
    var tempo_add = $("#tempo").val();
    var status_add = $("#status").val();
    var supplier_add = $("#supplier").val();
    var id_file_pembelian_add = $("#id_file").val();
    var nama_produk_alias_add = $("#nama_produk_alias").val();
    var isi_kemasan = $("#isi_kemasan").val();
    var isi_kemasan_add = isi_kemasan;
    var nama_admin_add = $("#nama_admin").val();

    var jumlah_add = jumlah_karton * isi_kemasan;
    var subtotal_add = harga_beli_add * jumlah_add;
    addToCart(tanggal_add, no_nota_pembelian_add, id_produk_add, jumlah_add, harga_beli_add, tempo_add, status_add, supplier_add, id_file_pembelian_add, nama_produk_alias_add, subtotal_add, isi_kemasan_add, nama_admin_add);
    document.getElementById('nama_produk').value = "";
    document.getElementById('jumlah').value = "1";
    document.getElementById('isi_kemasan').value = "0";
    $('#button_submit').attr('disabled', false);
    $('#nama_produk').focus();
  })

  function Refresh(){
    document.getElementById('status').text = "- Pilihan";
    document.getElementById('status').value = "";
    document.getElementById('nama_produk').value = "";
    document.getElementById('jumlah').value = "1";
    document.getElementById('no_nota_pembelian').value = "";
    document.getElementById('supplier').value = "";
    document.getElementById('tempo').value = "0";
    $('#status').attr('readonly', false);
    $('#nama_produk').attr('disabled', true);
    $('#jumlah').attr('disabled', true);
    $('#button_produk').attr('disabled', true);
    // localStorage.clear();
    localStorage.removeItem("mycart_pembelian");
    clearCart()
  }

  function addToCart(tanggal_add, no_nota_pembelian_add, id_produk_add, jumlah_add, harga_beli_add, tempo_add, status_add, supplier_add, id_file_pembelian_add, nama_produk_alias_add, subtotal_add, isi_kemasan_add, nama_admin_add) {
    //cek data in cart then update qty
    for (var i in mycart_pembelian) {
      if(mycart_pembelian[i].id_produk == id_produk_add)
      {
        alert('Data produk sudah ada !')
        return;          
      }
    }

    // jika tidak ada insert all
    var item = { tanggal: tanggal_add, no_nota_pembelian: no_nota_pembelian_add, id_produk: id_produk_add, jumlah: jumlah_add, harga_beli: harga_beli_add, tempo: tempo_add, status: status_add, supplier: supplier_add, id_file_pembelian: id_file_pembelian_add, nama_produk: nama_produk_alias_add, subtotal: subtotal_add, isi_kemasan: isi_kemasan_add, nama_admin: nama_admin_add}; 
    mycart_pembelian.push(item);
    saveCart();
    showCart();
  }

  function deleteItem(index){
    mycart_pembelian.splice(index,1); // hapus item berdasarkan index
    saveCart();
    showCart();
  }

  function saveCart() {
    if( window.localStorage){
      localStorage.mycart_pembelian = JSON.stringify(mycart_pembelian);
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

    for (var i in mycart_pembelian) { //tampilkan data dari local storage mycart_pembelian, template bisa anda sesuaikan
      var item = mycart_pembelian[i];
      var row = '<tr>'+
                  '<td class="text-center" width="30" align="center">'+[parseInt(i)+1]+'</td>'+
                  '<td>'+item.nama_produk+'</td>'+
                  '<td class="text-center" width="150">'+rubah(item.harga_beli)+'</td>'+
                  '<td class="text-center" align="100">'+item.jumlah+'</td>'+
                  '<td class="text-center" align="100">'+item.jumlah/item.isi_kemasan+'</td>'+
                  '<td class="text-center" width="150">'+rubah(item.subtotal)+'</td>'+
                  '<td class="text-center" width="50" style="text-align: right;"><button class="btn btn-danger btn-xs" onclick="deleteItem(' + i + ')"><i class="fa fa-trash"  > </i></button></td>'+
                '</tr>';

      $("#cartBody").append(row); //append ul dengan id cartbody
    }

    // untuk total
    var total = 0;
    for(var i = 0; i < mycart_pembelian.length; i++) {
      total += mycart_pembelian[i].subtotal; //jumlahkan keseluruhan row subtotal dari mycart_pembelian untuk mendapatkan total
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
      var button_loading = '<i class="fa fa fa-spinner fa-spin"></i> Loading';
      $("#Loading").append(button_loading);
    }

    $("#button_submit").click(function(){
      Loading();
      if(window.localStorage!==undefined) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('pembelian/Simpan_nota'); ?>",
            data: {data: localStorage.getItem('mycart_pembelian')},
            dataType: "json",
          success: function(cek){
            swal({
              title: "Pembelian Disimpan !",
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