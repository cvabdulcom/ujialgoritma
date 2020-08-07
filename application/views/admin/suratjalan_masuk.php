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
      <li>
        <a href="<?php echo base_url('pembelian/notapembelian'); ?>">
          <i class="fa fa-file-zip-o"></i> <span>Nota Pembelian</span>
        </a>
      </li>  
      <li class="treeview active">
        <a href="#"><i class="fa fa-envelope"></i> Surat Jalan
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?php echo base_url('suratjalan/sj_masuk'); ?>"><i class="fa fa-circle-o"></i> SJ Masuk</a></li>
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
      <b>Surat Jalan</b>
      <small>Masuk (Pembelian)</small>
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
                <label for="tempo" class="col-sm-4 control-label">Tanggal</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d'); ?>">  
                </div>
              </div>
              <div class="form-group">
                <label for="kendaraan" class="col-sm-4 control-label">No Surat Jalan</label>
                <div class="col-sm-8">
                  <input type="text" name="no_suratjalan" id="no_suratjalan" class="form-control" placeholder="-">
                </div>
              </div>
              <div class="form-group">
                <label for="no_nota" class="col-sm-4 control-label">No Nota</label>
                <div class="col-sm-6">
                  <input type="text" name="no_nota" id="no_nota" class="form-control" placeholder="-" readonly>
                </div>
                <div class="col-sm-1">
                  <button type="button" class="btn btn-flat btn-primary active" id="cek_nota" data-toggle="modal" data-target="#CEKNOTA"><i class="fa fa-search"></i></button>
                </div>
              </div>              
              <div class="form-group">
                <label for="kendaraan" class="col-sm-4 control-label">Kendaraan</label>
                <div class="col-sm-8">
                  <input type="text" name="kendaraan" id="kendaraan" class="form-control" placeholder="-" disabled="disabled">
                </div>
              </div>
            </div>
            
            <!-- Hidden form -->
            <input type="hidden" name="no_nota_pembelian" id="no_nota_pembelian">
      <input type="hidden" name="tanggal_bikin" id="tanggal_bikin" value="<?php echo date('Y-m-d'); ?>">

            <div class="col-md-6 form-horizontal">
              <div class="form-group">
                <label for="no_plat" class="col-sm-4 control-label">No Plat</label>
                <div class="col-sm-8">
                  <input type="text" name="no_plat" id="no_plat" class="form-control" placeholder="-" disabled="disabled">
                </div>
              </div>
              <div class="form-group">
                <label for="nama_pengirim" class="col-sm-4 control-label">Nama Pengirim</label>
                <div class="col-sm-8">
                  <input type="text" name="nama_pengirim" id="nama_pengirim" class="form-control" placeholder="-" disabled="disabled">
                </div>
              </div>
            </div>            
          </div>          

          <div class="box-footer">
            <button type="reset" class="btn btn-flat btn-default active" id="button_reset"><i class="fa fa-refresh"></i> Reset</button>
            <!-- <button class="btn btn-flat btn-warning active" id="printsj" data-toggle="modal" data-target="#PRINTSJ"><i class="fa fa-print"></i> Print</button> -->
            <button type="button" class="btn btn-flat btn-success active pull-right" id="button_submit" disabled="disabled"><div id="Loading"><i class="fa fa-save"></i> Submit</div></button>
          </div>
          
        </div>
      </div>
    </div>
  </section>
<!-- /.content-wrapper -->
</div>

<!-- Ubah Print Nota -->
<div class="modal fade" id="CEKNOTA">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Daftar Nota Pembelian</b></h4>
        </div>
        <div class="modal-body">
          <table id="daftarceknota" class="table table-bordered dataTable">
            <thead>
              <tr role="row">
                <th class="sorting_1" aria-controls="example1" width="10" style="text-align: center;">No</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">Nama Outlet</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">No Nota</th>
                <th width="150" class="sorting" aria-controls="example1" style="text-align: center;">Tanggal</th>
                <th width="40"></th>
              </tr>
            </thead>
            <tbody id="show_cek_nota">
              <?php
                $no=0;
                foreach($nota_pembelian->result_array() as $tampil):
                  $no++;
                  $supplier = $tampil['supplier'];
                  $no_nota_pembelian = $tampil['no_nota_pembelian'];
                  $tanggal = $tampil['tanggal'];
              ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $supplier; ?></td>
                <td><?php echo $no_nota_pembelian; ?></td>
                <td><?php $new = strtotime($tanggal); $newDate = date('d F Y', $new);  echo $newDate; ?></td>
                <td><button class="cek_no_nota btn btn-xs btn-flat btn-default" data-nota="<?php echo $no_nota_pembelian; ?>"><i class="fa fa-plus"></i></button></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
<!-- Modal Print Nota End -->

<!-- Data Produk -->
<script type="text/javascript">
  $(document).ready(function(){
    Refresh()

    $('.cek_no_nota').click(function(){
      var no_nota = $(this).data("nota");
      $("#no_nota").val(no_nota);
      $("#no_nota_pembelian").val(no_nota);
      Tarik_nota();
      $('#cek_nota').attr('disabled', true);
      $('#CEKNOTA').modal('hide');
    });

    function Tarik_nota(){
      var no_nota_pembelian = $("#no_nota_pembelian").val();
      $.ajax({
        type      : "GET",
        url       : "<?php echo base_url('suratjalan/tarik_nota_pembelian'); ?>",
        dataType  : "JSON",
        data      : {no_nota_pembelian:no_nota_pembelian},
        success   : function(data){
          stok_gudang(data);
          $('#no_nota').attr('readonly', true);
          $('#button_search').attr('disabled', true);
          $('#no_suratjalan').attr('disabled', false);
          $('#kendaraan').attr('disabled', false);
          $('#no_plat').attr('disabled', false);
          $('#nama_pengirim').attr('disabled', false);
          $('#no_suratjalan').attr('readonly', true);
          $('#button_submit').attr('disabled', false);
          $('#tanggal').attr('readonly', true);
        }
      });
    }

    function stok_gudang(data){
      var i;
      for(i=0; i<data.length; i++){
        var mycart_stokgudang = JSON.parse(localStorage.getItem("mycart_stokgudang") || "[]");
        var tanggal = $("#tanggal").val();
        var id_produk = data[i].id_produk;
        var masuk_keluar = "MASUK";
        var jumlah = data[i].jumlah;
        var keterangan = "Barang masuk ke gudang";
        var no_surat_jalan = $("#no_suratjalan").val();

        var item_stokgudang = { tanggal: tanggal, id_produk: id_produk, masuk_keluar: masuk_keluar, jumlah: jumlah, keterangan: keterangan, no_surat_jalan: no_surat_jalan }; 

        mycart_stokgudang.push(item_stokgudang);
        localStorage.setItem("mycart_stokgudang", JSON.stringify(mycart_stokgudang));
      }
    }

    $("#button_reset").click(function(){
      Refresh()
      location.reload();
    });

    function Refresh(){
      document.getElementById('no_nota').value = "";
      document.getElementById('kendaraan').value = "";
      document.getElementById('no_plat').value = "";
      document.getElementById('nama_pengirim').value = "";
      $('#kendaraan').attr('disabled', true);
      $('#no_plat').attr('disabled', true);
      $('#nama_pengirim').attr('disabled', true);
      // localStorage.clear();
      localStorage.removeItem("mycart_stokgudang");
      localStorage.removeItem("mycart_stokoutlet");
      $('#no_suratjalan').focus();
      $('#cek_nota').attr('disabled', false);
    }

    function Loading(){
      $("#Loading").empty();
      var button_loading = '<i class="fa fa fa-spinner fa-spin"></i> Loading';
      $("#Loading").append(button_loading);
    }

    $("#button_submit").click(function(){
      Loading();
      var no_suratjalan = $("#no_suratjalan").val();
      var no_nota = $("#no_nota_pembelian").val();
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
          var tanggal = $("#tanggal").val();
          $.ajax({
              type: "POST",
              url: "<?php echo base_url('suratjalan/Simpan_stokgudang'); ?>",
              data: {
                      data: localStorage.getItem('mycart_stokgudang'),
                      tanggal: tanggal
                    },
              dataType: "json",
            success: function(cek){
              swal({
                title: "Surat Jalan Masuk Disimpan !",
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
      });
    });   
        
  })
</script>
<!-- Data Produk -->