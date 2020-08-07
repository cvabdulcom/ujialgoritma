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
          <li class="treeview menu-open">
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
          <li><a href="<?php echo base_url('suratjalan/sj_keluar'); ?>"><i class="fa fa-circle-o"></i> SJ Keluar</a></li>
          <li class="active"><a href="<?php echo base_url('suratjalan/sj_stokoutlet'); ?>"><i class="fa fa-circle-o"></i> SJ Stok Outlet</a></li>
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
      <b>Perubahan Stok</b>
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
          <div class="box-footer">
            <a href="<?php echo base_url('perubahanstok/lanjutkan'); ?>"><button type="button" class="btn btn-sm btn-flat btn-primary active pull-right"><i class="fa fa-step-forward"></i> Lanjutkan</button></a>
          </div>
          <div class="box-body chart-responsive">

            <div class="col-md-5 form-horizontal">
              <div class="form-group">
                <label for="id_outlet" class="col-sm-4 control-label">Nama Outlet</label>
                <div class="col-sm-8">
                  <input type="text" name="nama_outlet" id="nama_outlet" class="form-control" placeholder="Search..." >
                </div>
              </div>
            </div>

            <!-- Data Hidden -->
            <input type="hidden" name="id_outlet" id="id_outlet">
            <input type="hidden" name="id_produk" id="id_produk">
            <input type="hidden" name="nama_produk_alias" id="nama_produk_alias">
            <!-- Data Hidden -->

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
            </div>

            <div class="col-md-5 form-horizontal">
              &nbsp;
            </div>

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
            <button class="btn btn-flat btn-warning active" id="printst" data-toggle="modal" data-target="#PRINTST"><i class="fa fa-print"></i> Print</button>
            <div id="Loading"><button type="button" class="btn btn-flat btn-success active pull-right" id="simpan" disabled><i class="fa fa-save"></i> Simpan</button></div>
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

    var mycart_stokoutlet = [];
    var mycart_stokoutlet_real = [];
    $(function () {
      if (localStorage.mycart){
        mycart_stokoutlet = JSON.parse(localStorage.mycart_stokoutlet);
        mycart_stokoutlet_real = JSON.parse(localStorage.mycart_stokoutlet_real);
      }
    });

    /** Funsi cek stok */
    $("#cek_stok").click(function(){
      var id_produk = $("#id_produk").val();
      var jumlah = $("#jumlah").val();
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

    function Refresh(){
      document.getElementById('nama_outlet').value = "";
      document.getElementById('nama_produk').value = "";
      document.getElementById('jumlah').value = "1";
      $('#nama_outlet').focus();
      localStorage.removeItem("mycart_stokoutlet");
      localStorage.removeItem("mycart_stokoutlet_real");
    }

    $("#button_reset").click(function(){
      Refresh()
      location.reload();
    });

    /** Data Outlet */
    $( "#nama_outlet" ).autocomplete({
      source: "<?php echo site_url('penjualan/Cari_outlet/?');?>",
      minLength: 3,
      select: function (event, ui) {
        $("#nama_outlet").val(ui.item.value);
        $("#id_outlet").val(ui.item.id_outlet);
        $('#nama_outlet').attr('readonly', true);
        $('#nama_produk').attr('disabled', false);
        $('#jumlah').attr('disabled', false);
        $('#button_produk').attr('disabled', false);
        $('#cek_stok').attr('disabled', false);
        $('#simpan').attr('disabled', false);
        Tarik_stok();
      }
    });
    /** Data Outlet */

    function Tarik_stok(){
      var id_outlet = $("#id_outlet").val();
      $.ajax({
          type: "POST",
          url: "<?php echo base_url('perubahanstok/tarik_stok'); ?>",
          data: {id_outlet: id_outlet},
          dataType: "JSON",
        success: function(data){
          for (var i in data) {
            mycart_stokoutlet.push({
              id_outlet : data[i].id_outlet,
              nama_produk : data[i].nama_produk,
              id_produk : data[i].id_produk,
              jumlah : data[i].jumlah
            });
            mycart_stokoutlet_real.push({
              id_outlet : data[i].id_outlet,
              id_produk : data[i].id_produk,
              jumlah : data[i].jumlah
            });
          }

          if( window.localStorage){
            localStorage.mycart_stokoutlet = JSON.stringify(mycart_stokoutlet);
            localStorage.mycart_stokoutlet_real = JSON.stringify(mycart_stokoutlet_real);
          }

          showCart();
        }
      });
    }

    function showCart() {    
      $("#cartBody").empty();
      for (var i in mycart_stokoutlet){
        var item = mycart_stokoutlet[i];
        var row = '<tr>'+
                    '<td class="text-center" width="30" align="center">'+[parseInt(i)+1]+'</td>'+
                    '<td>'+item.nama_produk+'</td>'+
                    '<td class="text-center" align="100">'+item.jumlah+'</td>'+
                    '<td class="text-center" width="50" style="text-align: right;"><button class="btn btn-danger btn-xs" onclick="deleteItem(' + i + ')"><i class="fa fa-trash"  > </i></button></td>'+
                  '</tr>';

        $("#cartBody").append(row); //append ul dengan id cartbody
      }
    }

    function saveCart() {
      if( window.localStorage){
        localStorage.mycart_stokoutlet = JSON.stringify(mycart_stokoutlet);
        localStorage.mycart_stokoutlet_real = JSON.stringify(mycart_stokoutlet_real);
      }
    }

    window.deleteItem = function(index){
      mycart_stokoutlet.splice(index,1); // hapus item berdasarkan index
      mycart_stokoutlet_real.splice(index,1);
      saveCart();
      showCart();
    }

    /** Data Produk */
    $( "#nama_produk" ).autocomplete({
      source: "<?php echo site_url('penjualan/Cari_produk/?');?>",
      minLength: 3,
      select: function (event, ui) {
        $("#nama_produk").val(ui.item.value);
        $("#id_produk").val(ui.item.id_produk);
        $("#nama_produk_alias").val(ui.item.nama_produk);
        $('#jumlah').focus();
      }
    });

    $('.add').click(function(){
      var id_outlet_add = $("#id_outlet").val();
      var id_produk_add = $("#id_produk").val();
      var jumlah_add = $("#jumlah").val();
      var nama_produk_add = $("#nama_produk_alias").val();

      stokoutlet(id_outlet_add, id_produk_add, jumlah_add, nama_produk_add);
      stokoutlet_real(id_outlet_add, id_produk_add, jumlah_add);

      document.getElementById('nama_produk').value = "";
      document.getElementById('jumlah').value = "1";
      $('#nama_produk').focus();            
    })

    function stokoutlet(id_outlet_add, id_produk_add, jumlah_add, nama_produk_add){      
      for (var i in mycart_stokoutlet) {
        if(mycart_stokoutlet[i].id_produk == id_produk_add)
        {
          alert('Data produk sudah ada !')
          return;          
        }
      }
      // jika tidak ada insert all
      var item = { id_outlet: id_outlet_add, id_produk: id_produk_add, jumlah: jumlah_add, nama_produk: nama_produk_add }; 
      mycart_stokoutlet.push(item);
      saveCart();
      showCart();
    }

    function stokoutlet_real(id_outlet_add, id_produk_add, jumlah_add){      
      for (var i in mycart_stokoutlet_real) {
        if(mycart_stokoutlet_real[i].id_produk == id_produk_add)
        {
          return;          
        }
      }
      // jika tidak ada insert all
      var item = { id_outlet: id_outlet_add, id_produk: id_produk_add, jumlah: jumlah_add }; 
      mycart_stokoutlet_real.push(item);
      saveCart();
    }
    /** Data Produk */

    function Loading(){
      $("#Loading").empty();
      var button_loading = '<button type="button" class="btn btn-flat btn-success active pull-right" disabled="disabled"><i class="fa fa fa-spinner fa-spin"></i> Loading</button>';
      $("#Loading").append(button_loading);
    }

    /** Simpan perubahan stok */
    $("#simpan").click(function(){
      Loading();
      Hapus_stok();      
    });

    function Hapus_stok(){
      var id_outlet = $("#id_outlet").val();
      $.ajax({
          type: "POST",
          url: "<?php echo base_url('perubahanstok/hapus_stok'); ?>",
          data: {id_outlet: id_outlet},
          dataType: "json",
        success: function(data){
          console.log("Hapus stok berhasil !");
          Simpan_stok();
        }
      });
    }

    function Simpan_stok(){
      $.ajax({
          type: "POST",
          url: "<?php echo base_url('perubahanstok/simpan_stok'); ?>",
          data: {data: localStorage.getItem('mycart_stokoutlet_real')},
          dataType: "json",
        success: function(data){
          swal({
            title: "Perubahan Stok Disimpan !",
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
    /** Simpan perubahan stok */

  });
</script>