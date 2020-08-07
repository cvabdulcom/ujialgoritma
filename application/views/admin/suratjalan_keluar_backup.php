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
      <b>Surat Jalan</b>
      <small>
        <div class="form-group">
          <label>
            <input type="radio" name="suratjalan" class="flat-red" value="jualputus">
            Jual Putus
          </label>
          &nbsp;&nbsp;&nbsp;
          <label>
            <input type="radio" name="suratjalan" class="flat-red" value="konsinyasi">
            Konsinyasi
          </label>
        </div>
      </small>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><b>No Surat Jalan :</b> SJ<?php echo $no_suratjalan; ?> &nbsp;|&nbsp; <b>Tanggal :</b> <?php echo date('d/m/Y'); ?> </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">&nbsp;</h3>
            <div class="box-tools pull-right">
              <a href="<?php echo base_url('suratjalan/daftar'); ?>"><button type="button" class="btn btn-box-tool"><i class="fa fa-file-zip-o"></i> Daftar Surat Jalan</button></a>
            </div>
          </div>
          <div class="box-body chart-responsive">
            <div class="col-md-6 form-horizontal">
              <div class="form-group">
                <label for="no_nota" class="col-sm-4 control-label">No Nota</label>
                <div class="col-sm-6">
                  <input type="text" name="no_nota" id="no_nota" class="form-control" placeholder="-" readonly>
                </div>
                <div class="col-sm-1">
                  <button type="button" class="btn btn-flat btn-primary active" id="cek_nota" data-toggle="modal" data-target="#CEKNOTA" disabled="disabled"><i class="fa fa-search"></i></button>
                </div>
              </div>
              <div class="form-group">
                <label for="kendaraan" class="col-sm-4 control-label">Kendaraan</label>
                <div class="col-sm-8">
                  <input type="text" name="kendaraan" id="kendaraan" class="form-control" placeholder="-" disabled="disabled">
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
            <input type="hidden" name="no_nota_penjualan" id="no_nota_penjualan">
            <input type="hidden" name="no_suratjalan" id="no_suratjalan" value="SJ<?php echo $no_suratjalan; ?>">
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
            <button class="btn btn-flat btn-warning active" id="printsj" data-toggle="modal" data-target="#PRINTSJ"><i class="fa fa-print"></i> Print</button>
            <div id="Loading"><button type="button" class="btn btn-flat btn-success active pull-right" id="button_submit" disabled="disabled"><i class="fa fa-save"></i> Submit</button></div>
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
          <h4 class="modal-title"><b>Daftar Nota Penjualan</b></h4>
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
                foreach($nota_penjualan->result_array() as $tampil):
                  $no++;
                  $nama_outlet = $tampil['nama_outlet'];
                  $no_nota_penjualan = $tampil['no_nota_penjualan'];
                  $tanggal = $tampil['tanggal'];
              ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $nama_outlet; ?></td>
                <td><?php echo $no_nota_penjualan; ?></td>
                <td><?php $new = strtotime($tanggal); $newDate = date('d F Y', $new);  echo $newDate; ?></td>
                <td><button class="cek_no_nota btn btn-xs btn-flat btn-default" data-nota="<?php echo $no_nota_penjualan; ?>"><i class="fa fa-plus"></i></button></td>
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

    $('input:radio[name="suratjalan"]').change(
      function(){
        if (this.checked) {
          $('#cek_nota').attr('disabled', false);
        }
      }
    );

    $('.cek_no_nota').click(function(){
      var no_nota = $(this).data("nota");
      $("#no_nota").val(no_nota);
      $("#no_nota_penjualan").val(no_nota);
      Tarik_nota();
      $('#cek_nota').attr('disabled', true);
      $('#CEKNOTA').modal('hide');
    });

    function Tarik_nota(){
      var no_nota_penjualan = $("#no_nota_penjualan").val();
      $.ajax({
        type      : "GET",
        url       : "<?php echo base_url('suratjalan/Tarik_nota_penjualan'); ?>",
        dataType  : "JSON",
        data      : {no_nota_penjualan:no_nota_penjualan},
        success   : function(data){
          stok_gudang(data);
          stok_outlet(data);
          $('#no_nota').attr('readonly', true);
          $('#button_search').attr('disabled', true);
          $('#kendaraan').attr('disabled', false);
          $('#no_plat').attr('disabled', false);
          $('#nama_pengirim').attr('disabled', false);
          $('#kendaraan').focus();
          $('#button_submit').attr('disabled', false);
        }
      });
    }

    function stok_gudang(data){
      var i;
      for(i=0; i<data.length; i++){
        var mycart_stokgudang = JSON.parse(localStorage.getItem("mycart_stokgudang") || "[]");
        var tanggal = $("#tanggal").val();
        var id_produk = data[i].id_produk;
        var masuk_keluar = "KELUAR";
        var jumlah = data[i].jumlah;
        var keterangan = "Barang keluar dari gudang";
        var no_surat_jalan = $("#no_suratjalan").val();

        var item_stokgudang = { tanggal: tanggal, id_produk: id_produk, masuk_keluar: masuk_keluar, jumlah: jumlah, keterangan: keterangan, no_surat_jalan: no_surat_jalan }; 

        mycart_stokgudang.push(item_stokgudang);
        localStorage.setItem("mycart_stokgudang", JSON.stringify(mycart_stokgudang));
      }

    }

    function stok_outlet(data){
      var i;
      for(i=0; i<data.length; i++){
        var mycart_stokoutlet = JSON.parse(localStorage.getItem("mycart_stokoutlet") || "[]");
        var id_outlet = data[i].id_outlet;
        var tanggal = $("#tanggal").val();
        var id_produk = data[i].id_produk;
        var masuk_keluar = "MASUK";
        var jumlah = data[i].jumlah;
        var no_actiontracking = $("#no_suratjalan").val();
        
        var item_stokoutlet = { id_outlet: id_outlet, tanggal: tanggal, id_produk: id_produk, masuk_keluar:masuk_keluar, jumlah: jumlah, no_actiontracking: no_actiontracking }; 

        mycart_stokoutlet.push(item_stokoutlet);
        localStorage.setItem("mycart_stokoutlet", JSON.stringify(mycart_stokoutlet));
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
      $('#cek_nota').focus();
      $('#cek_nota').attr('disabled', true);
    }

    function Simpan_stokgudang(){
      $.ajax({
          type: "POST",
          url: "<?php echo base_url('suratjalan/Simpan_stokgudang'); ?>",
          data: {data: localStorage.getItem('mycart_stokgudang')},
          dataType: "json",
        success: function(cek){
          console.log("Simpan Stok Gudang Berhasil");
        }
      });
    }

    function Simpan_stokoutlet(){
      $.ajax({
          type: "POST",
          url: "<?php echo base_url('suratjalan/Simpan_stokoutlet'); ?>",
          data: {data: localStorage.getItem('mycart_stokoutlet')},
          dataType: "json",
        success: function(cek){
          console.log("Simpan Stok Outlet Berhasil");
        }
      });
    }

    function Ubah_statusnota(){
      var no_nota_penjualan = $("#no_nota_penjualan").val();
      var status = "deliver";
      $.ajax({
          type: "POST",
          url: "<?php echo base_url('suratjalan/Ubah_statusnota'); ?>",
          data: { no_nota_penjualan: no_nota_penjualan, status: status },
          dataType: "json",
        success: function(cek){
          console.log("Status nota jadi deliver");
        }
      });
    }   

    function Jenis(){
      var suratjalan = $("input[name='suratjalan']:checked").val();
      if (suratjalan == 'jualputus') {
        var no_suratjalan = $("#no_suratjalan").val();
        var no_nota = $("#no_nota_penjualan").val();
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
            Simpan_stokgudang();
            Ubah_statusnota();
            swal({
              title: "SJ Jual Putus Disimpan !",
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
      } else if (suratjalan == 'konsinyasi') {
        var no_suratjalan = $("#no_suratjalan").val();
        var no_nota = $("#no_nota_penjualan").val();
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
            Simpan_stokgudang();
            Simpan_stokoutlet();
            Ubah_statusnota();
            swal({
              title: "SJ Konsinyasi Disimpan !",
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
    }

    function Loading(){
      $("#Loading").empty();
      var button_loading = '<button type="button" class="btn btn-flat btn-success active pull-right" disabled="disabled"><i class="fa fa fa-spinner fa-spin"></i> Loading</button>';
      $("#Loading").append(button_loading);
    }


    $("#button_submit").click(function(){
      Loading();
      Jenis();
    });    
    
  })
</script>
<!-- Data Produk -->