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
      <li class="active treeview menu-open">
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
          <li class="active"><a href="<?php echo base_url('kasharian/setoran'); ?>"><i class="fa fa-circle-o"></i> Setoran</a></li>
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
      <b>Kas Harian</b>
      <small>Setoran</small>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><b>ID Kas :</b> KD<?php echo $id_kas; ?></li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-body chart-responsive">
            <div class="col-md-6 form-horizontal">
            
              <div class="form-group">
                <label for="tempo" class="col-sm-4 control-label">Tanggal Setoran</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d'); ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="tempo" class="col-sm-4 control-label">File Transaksi</label>
                <div class="col-sm-8">
                  <button type="button" class="form-control" id="button_upload" data-toggle="modal" data-target="#UPLOAD" autofocus="autofocus"><i class="fa fa-cloud-upload"></i> Upload</button>
                </div>
              </div>
              <div class="form-group">
                <label for="bank" class="col-sm-4 control-label">Bank</label>
                <div class="col-sm-8">
                  <select class="form-control" name="bank" id="bank" style="width: 100%;" disabled="disabled">
                    <option value="">- Pilihan</option>
                    <option value="BCA">Bank BCA</option>
                    <option value="MANDIRI">Bank MANDIRI</option>
                  </select>
                </div>
              </div>

            </div>
            
            <!-- Hidden form -->
            <input type="hidden" name="id_kas" id="id_kas" value="KD<?php echo $id_kas; ?>">            
            <input type="hidden" name="id_file" id="id_file" value="KOSONG">
            <input type="hidden" name="tanggal_bikin" id="tanggal_bikin" value="<?php echo date('Y-m-d'); ?>">

            <?php
              $tanggal = date('Y-m-d');
              $hitung1 = $this->db->query("SELECT SUM(nominal) AS nominal 
                FROM tbl_kas_1
                WHERE tipe='Masuk'
                AND jenis='Cash'
                AND tanggal='$tanggal'");
              
              if($hitung1->row()->nominal == NULL) {
                $total_uang_masuk_cash = 0;
              }else{
                $total_uang_masuk_cash = $hitung1->row()->nominal;
              }

              $hitung2 = $this->db->query("SELECT SUM(nominal) AS nominal 
                FROM tbl_kas_1
                WHERE tipe='Masuk'
                AND jenis='Bank'
                AND tanggal='$tanggal'");

              if($hitung2->row()->nominal == NULL) {
                $total_uang_masuk_bank = 0;
              }else{
                $total_uang_masuk_bank = $hitung2->row()->nominal;
              }

              $hitung3 = $this->db->query("SELECT SUM(nominal) AS nominal 
                FROM tbl_kas_1
                WHERE tipe='Keluar'
                AND jenis='Cash'
                AND tanggal='$tanggal'");

              if($hitung3->row()->nominal == NULL) {
                $total_uang_keluar_cash = 0;
              }else{
                $total_uang_keluar_cash = $hitung3->row()->nominal;
              }

              $hitung4 = $this->db->query("SELECT SUM(nominal) AS nominal 
                FROM tbl_kas_1
                WHERE tipe='Keluar'
                AND jenis='Bank'
                AND tanggal='$tanggal'");

              if($hitung4->row()->nominal == NULL) {
                $total_uang_keluar_bank = 0;
              }else{
                $total_uang_keluar_bank = $hitung4->row()->nominal;
              }
            ?>
            <input type="hidden" name="total_uang_masuk_cash" id="total_uang_masuk_cash" value="<?php echo $total_uang_masuk_cash; ?>">
            <input type="hidden" name="total_uang_masuk_bank" id="total_uang_masuk_bank" value="<?php echo $total_uang_masuk_bank; ?>">
            <input type="hidden" name="total_uang_keluar_cash" id="total_uang_keluar_cash" value="<?php echo $total_uang_keluar_cash; ?>">
            <input type="hidden" name="total_uang_keluar_bank" id="total_uang_keluar_bank" value="<?php echo $total_uang_keluar_bank; ?>">
            <!-- Hidden form -->

            <div class="col-md-6 form-horizontal">
              <div class="form-group">
                <label for="nominal" class="col-sm-4 control-label">Nominal Bayar</label>
                <div class="col-sm-6">
                  <input type="number" name="nominal" id="nominal" class="form-control" placeholder="0" min="0" placeholder="-" disabled="disabled">
                </div>
              </div>
            </div>

          </div>          

          <div class="box-footer">
            <button type="reset" class="btn btn-flat btn-default active" id="button_reset"><i class="fa fa-refresh"></i> Reset</button>
            <div id="Loading"><button type="button" class="btn btn-flat btn-primary active pull-right" id="button_submit" disabled="disabled"><i class="fa fa-save"></i> Submit</button></div>
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
  $(document).ready(function(){

    $("#button_upload").click(function(){
      $('#bank').attr('disabled', false);
      $('#nominal').attr('disabled', false);
      $('#button_submit').attr('disabled', false);
    })

    $("#button_reset").click(function(){
      Refresh();
    })

    function Loading(){
      $("#Loading").empty();
      var button_loading = '<button type="button" class="btn btn-flat btn-primary active pull-right" disabled="disabled"><i class="fa fa fa-spinner fa-spin"></i> Loading</button>';
      $("#Loading").append(button_loading);
    }

    $("#button_submit").click(function(){
      Loading();
      kas();
    })

    function Refresh(){
      location.reload();
    }

    function kas(){
      var id_kas = $("#id_kas").val();
      var tanggal = $("#tanggal").val();
      var total_uang_masuk_cash = $("#total_uang_masuk_cash").val();
      var total_uang_masuk_bank = $("#total_uang_masuk_bank").val();
      var total_uang_keluar_cash = $("#total_uang_keluar_cash").val();
      var total_uang_keluar_bank = $("#total_uang_keluar_bank").val();
      var setor = $("#nominal").val();
      var id_file = $("#id_file").val();
      var bank = $("#bank").val();
      var tanggal_bikin = $("#tanggal_bikin").val();

      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('kasharian/simpan_setoran'); ?>",
        dataType  : "JSON",
        data      : {
                      id_kas: id_kas,
                      tanggal: tanggal,
                      total_uang_masuk_cash: total_uang_masuk_cash,
                      total_uang_masuk_bank: total_uang_masuk_bank,
                      total_uang_keluar_cash: total_uang_keluar_cash,
                      total_uang_keluar_bank: total_uang_keluar_bank,
                      setor: setor,
                      id_file: id_file,
                      bank: bank,
                      tanggal_bikin: tanggal_bikin
                    },
        success   : function(data){
          swal({
            title: "Simpan Setoran Berhasil !",
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

  })
</script>