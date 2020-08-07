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
      <li class="active">
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
      <b>Pencabutan</b>
      <small>Outlet (Konsinyasi)</small>
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

            <div class="col-md-6 form-horizontal">
              <div class="form-group">
                <label for="tempo" class="col-sm-4 control-label">File Stok Akhir</label>
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
                <label for="id_outlet" class="col-sm-4 control-label">Nama Outlet</label>
                <div class="col-sm-8">
                  <input type="text" name="nama_outlet" id="nama_outlet" class="form-control" placeholder="Search..." disabled="disabled">  
                </div>
              </div>
            </div>

            <!-- Hidden -->
            <input type="hidden" name="id_outlet" id="id_outlet">
            <input type="hidden" name="id_file" id="id_file" value="KOSONG">
            <!-- Hidden -->

            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table" id="mydata">
                  <thead>
                    <tr class="bg-info">
                      <th class="text-center" width="30">No</th>
                      <th class="text-center">Nama Produk</th>
                      <th class="text-center" width="80">Jumlah</th>
                    </tr>
                  </thead>
                  <tbody id="cartBody">
                    <tr>
                      <td class="text-center" width="30"></td>
                      <td></td>
                      <td class="text-center" width="150"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

          </div>     

          <div class="box-footer">
            <button type="reset" class="btn btn-flat btn-default active" id="button_reset"><i class="fa fa-refresh"></i> Reset</button>
            <a id="Link"></a>
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

<script type="text/javascript">
  Refresh();
  var mycart_stokoutlet = [];
  var mycart_stokgudang = [];
  var mycart_sk = [];
  $(function () {
    if (localStorage.mycart){
      mycart_stokoutlet = JSON.parse(localStorage.mycart_stokoutlet);
      mycart_stokgudang = JSON.parse(localStorage.mycart_stokgudang);
      mycart_sk = JSON.parse(localStorage.mycart_sk);
    }
  });

  $("#button_reset").click(function(){
    Refresh();
    location.reload();
  });

  function Refresh(){
    localStorage.removeItem("mycart_stokoutlet");
    localStorage.removeItem("mycart_stokgudang");
    localStorage.removeItem("mycart_sk");    
  }

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
        $("#id_outlet").val(ui.item.id_outlet);
        var id_outlet = ui.item.id_outlet;
        Tarik_stokoutlet(id_outlet);
        var link = "https://app.portalindo.net/pencabutan/cetak_sk?nama_outlet=";
        var all = link+ui.item.value;
        console.log(all);
        var success = '<a href="'+all+'" target="_blank"><button class="btn btn-flat btn-warning active" id="printsk"><i class="fa fa-print"></i> Print SK</button></a>';

        $("#Link").append(success);
        $('#tanggal').attr('readonly', true);
      }
    });
  })
</script>

<script type="text/javascript">
  function Tarik_stokoutlet(id_outlet){
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('pencabutan/tarik_stokoutlet'); ?>",
        dataType: "json",
        data: { id_outlet: id_outlet },
      success: function(dataproduk){
        $('#nama_outlet').attr('disabled', true);
        $('#button_upload').attr('disabled', true);
        $('#button_submit').attr('disabled', false);
        showCart(dataproduk);
        Localstorage_stokoutlet(dataproduk);
        Localstorage_stokgudang(dataproduk);
        Localstorage_sk(dataproduk);
      }
    });
  }

  function showCart(dataproduk) {    
    $("#cartBody").empty();
    for (var i in dataproduk) { //tampilkan data dari local storage mycart_penjualan_lapangan, template bisa anda sesuaikan
      var item = dataproduk[i];
      var row = '<tr>'+
                  '<td class="text-center" width="30" align="center">'+[parseInt(i)+1]+'</td>'+
                  '<td>'+item.nama_produk+'</td>'+
                  '<td width="150" class="text-center" width="150">'+item.jumlah+' Botol</td>'+
                '</tr>';

      $("#cartBody").append(row); //append ul dengan id cartbody
    }
  }
</script>
<!-- Data Outlet -->

<!-- Data Localstorage -->
<script type="text/javascript">
  function Localstorage_stokoutlet(dataproduk){
    var tanggal = $('#tanggal').val();
    var data_stokoutlet = [];
    var masuk_keluar = "KELUAR";
    var no_action_tracking = "NOSURATJALAN";
    var id_file_actiontracking = $('#id_file').val();
    for (var i in dataproduk) {
      mycart_stokoutlet.push({
        id_outlet : dataproduk[i].id_outlet,
        tanggal : tanggal,
        id_produk : dataproduk[i].id_produk,
        masuk_keluar : masuk_keluar,
        jumlah :  dataproduk[i].jumlah,
        no_actiontracking : no_action_tracking,
        id_file_actiontracking : id_file_actiontracking
      });
    }
    if( window.localStorage){
      localStorage.mycart_stokoutlet = JSON.stringify(mycart_stokoutlet);
    }
  }
</script>
<!-- Data Localstorage -->

<!-- Data Localstorage -->
<script type="text/javascript">
  function Localstorage_stokgudang(dataproduk){
    var tanggal = $('#tanggal').val();
    var data_stokgudang = [];
    var masuk_keluar = "MASUK";
    var keterangan = "Hasil Pencabutan";
    var no_surat_jalan = "NOSURATJALAN";
    var id_file_surat_jalan = $('#id_file').val();
    for (var i in dataproduk) {
      mycart_stokgudang.push({
        tanggal : tanggal,
        id_produk : dataproduk[i].id_produk,
        masuk_keluar : masuk_keluar,
        jumlah : dataproduk[i].jumlah,
        keterangan : keterangan,
        no_surat_jalan : no_surat_jalan,
        id_file_surat_jalan: id_file_surat_jalan
      });
    }
    if( window.localStorage){
      localStorage.mycart_stokgudang = JSON.stringify(mycart_stokgudang);
    }
  }
</script>
<!-- Data Localstorage -->

<!-- Data Localstorage -->
<script type="text/javascript">
  function Localstorage_sk(dataproduk){
    var tanggal = $('#tanggal').val();
    for (var i in dataproduk) {
      mycart_sk.push({
        id_outlet : dataproduk[i].id_outlet,
        id_produk : dataproduk[i].id_produk,
        jumlah : dataproduk[i].jumlah,
        nama_outlet : dataproduk[i].nama_outlet,
        nama_produk : dataproduk[i].nama_produk
      });
    }
    if( window.localStorage){
      localStorage.mycart_sk = JSON.stringify(mycart_sk);
    }
  }
</script>
<!-- Data Localstorage -->

<!-- BUTTON SUBMIT -->
<script type="text/javascript">

  function Simpan_stokoutlet(){
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('pencabutan/simpan_stokoutlet'); ?>",
        data: {data: localStorage.getItem('mycart_stokoutlet')},
        dataType: "JSON",
      success: function(data){
        console.log("Simpan Stok Outlet Berhasil !");
        Simpan_stokgudang();
      }
    });
  }

  function Simpan_stokgudang(){
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('pencabutan/simpan_stokgudang'); ?>",
        data: {data: localStorage.getItem('mycart_stokgudang')},
        dataType: "JSON",
      success: function(data){
        console.log("Simpan Stok Gudang Berhasil !");
        Simpan_stokoutlet_detail();
      }
    });
  }

  function Simpan_stokoutlet_detail(){
    var id_outlet = $('#id_outlet').val();
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('pencabutan/simpan_stokoutlet_detail'); ?>",
        data: { id_outlet: id_outlet },
        dataType: "JSON",
      success: function(data){
        console.log("Simpan Stok Outlet Detail Berhasil !");
        Blacklist();
      }
    });
  }

  function Blacklist(){
    var id_outlet = $('#id_outlet').val();
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('pencabutan/blacklist'); ?>",
        data: { id_outlet: id_outlet },
        dataType: "JSON",
      success: function(data){
        console.log("Blacklist Berhasil !");
        swal({
          title: "Pencabutan Berhasil !",
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
  }

  function Loading(){
    $("#Loading").empty();
    var button_loading = '<button type="button" class="btn btn-flat btn-success active pull-right" disabled="disabled"><i class="fa fa fa-spinner fa-spin"></i> Loading</button>';
    $("#Loading").append(button_loading);
  }

  $("#button_submit").click(function(){
    Loading();
    Simpan_stokoutlet();
  });

</script>
<!-- BUTTON SUBMIT