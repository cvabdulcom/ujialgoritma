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
          <li class="active"><a href="<?php echo base_url('kasharian/pembayaran_nota_jual'); ?>"><i class="fa fa-circle-o"></i> Pembayaran Nota Jual</a></li>
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
      <b>Kas Harian</b>
      <small>Pembayaran Nota Jual</small>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><b>ID Kas :</b> KH<?php echo $id_kas; ?> &nbsp;|&nbsp; <b>Tanggal :</b> <?php echo date('d/m/Y'); ?> </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-body chart-responsive">
            <div class="col-md-6 form-horizontal">
            
              <div class="form-group">
                <label for="tempo" class="col-sm-4 control-label">File Transaksi</label>
                <div class="col-sm-8">
                  <button type="button" class="form-control" id="button_upload" data-toggle="modal" data-target="#UPLOAD" autofocus="autofocus"><i class="fa fa-cloud-upload"></i> Upload</button>
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
                <label for="nama_outlet" class="col-sm-4 control-label">Nama Outlet</label>
                <div class="col-sm-6">
                  <input type="text" name="nama_outlet" id="nama_outlet" class="form-control" placeholder="-" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="nominal_nota_sample" class="col-sm-4 control-label">Nominal Nota</label>
                <div class="col-sm-6">
                  <input type="text" name="nominal_nota_sample" id="nominal_nota_sample" class="form-control" placeholder="-" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="sisa_tagihan_sample" class="col-sm-4 control-label">Sisa Tagihan</label>
                <div class="col-sm-5">
                  <input type="text" name="sisa_tagihan_sample" id="sisa_tagihan_sample" class="form-control" placeholder="-" readonly>
                </div>
                <div class="col-sm-3">
                  <input type="text" name="status_hutang" id="status_hutang" class="form-control" placeholder="-" readonly>
                </div>
              </div>

            </div>
            
            <!-- Hidden form -->
            <input type="hidden" name="id_kas" id="id_kas" value="KH<?php echo $id_kas; ?>">
            <input type="hidden" name="id_file" id="id_file" value="KOSONG">
            <input type="hidden" name="tujuan" id="tujuan" value="Pembayaran Nota Jual">
            <input type="hidden" name="tipe" id="tipe" value="Masuk">
            <input type="hidden" name="no_nota_penjualan" id="no_nota_penjualan">
            <input type="hidden" name="tanggal_piutang" id="tanggal_piutang">
            <input type="hidden" name="tanggal_jatuh_tempo" id="tanggal_jatuh_tempo">
            <input type="hidden" name="nominal_nota" id="nominal_nota">
            <input type="hidden" name="sisa_tagihan" id="sisa_tagihan">
            <input type="hidden" name="tanggal_bikin" id="tanggal_bikin" value="<?php echo date('Y-m-d'); ?>">
            <!-- Hidden form -->

            <div class="col-md-6 form-horizontal">
              <div class="form-group">
                <label for="nominal" class="col-sm-4 control-label">Nominal Bayar</label>
                <div class="col-sm-6">
                  <input type="number" name="nominal" id="nominal" class="form-control" placeholder="0" min="0" placeholder="-" disabled="disabled">
                </div>
              </div>
              <div class="form-group">
                <label for="keterangan" class="col-sm-4 control-label">Keterangan</label>
                <div class="col-sm-6">
                  <textarea name="keterangan" id="keterangan" class="form-control" disabled="disabled"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="total_uang_keluar" class="col-sm-4 control-label">Jenis</label>
                <div class="col-sm-4">
                  <select class="form-control" name="jenis" id="jenis" style="width: 100%;" disabled="disabled">
                    <option value="">- Pilihan</option>
                    <option value="Cash">Cash</option>
                    <option value="Bank">Bank</option>
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

<!-- Ubah Print Nota -->
<div class="modal fade" id="CEKNOTA">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Daftar Nota</b></h4>
        </div>
        <div class="modal-body">
          <table id="daftarceknota" class="table table-bordered dataTable">
            <thead>
              <tr role="row">
                <th class="sorting_1" aria-controls="example1" width="10" style="text-align: center;">No</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">Nama Outlet</th>
                <th class="sorting" aria-controls="example1" style="text-align: center;">No Nota</th>
                <th width="90" class="sorting" aria-controls="example1" style="text-align: center;">Tanggal</th>
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
                <td><?php echo $tanggal; ?></td>
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

<script type="text/javascript">
  $(document).ready(function(){

    $('.cek_no_nota').click(function(){
      var no_nota = $(this).data("nota");
      $("#no_nota").val(no_nota);
      $("#no_nota_penjualan").val(no_nota);
      $('#CEKNOTA').modal('hide');
      Tarik_nota();      
    });

    function Refresh(){
      location.reload();
    }

    function Tarik_nota(){
      var no_nota_penjualan = $("#no_nota_penjualan").val();
      $.ajax({
        type      : "GET",
        url       : "<?php echo base_url('kasharian/tarik_nota'); ?>",
        dataType  : "JSON",
        data      : {no_nota_penjualan:no_nota_penjualan},
        success   : function(data){
          $("#nama_outlet").val(data[0].nama_outlet);
          $("#nominal_nota").val(data[0].nominal);
          $("#nominal_nota_sample").val(rubah(data[0].nominal));
          $('#nominal').attr('disabled', false);
          $('#keterangan').attr('disabled', false);
          $('#jenis').attr('disabled', false);
          $.ajax({
            type      : "GET",
            url       : "<?php echo base_url('kasharian/tarik_sisa'); ?>",
            dataType  : "JSON",
            data      : {no_nota_penjualan:no_nota_penjualan},
            success   : function(data){
              if (data[0] == null){
                var sisa_tag = $("#nominal_nota").val();
                var sisa_tagihan_sam = $("#nominal_nota_sample").val();
                document.getElementById('sisa_tagihan').value = sisa_tag;
                document.getElementById('sisa_tagihan_sample').value = sisa_tagihan_sam;
                document.getElementById('status_hutang').value = "Belum";

                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth()+1; 
                var yyyy = today.getFullYear();
                if(dd<10){
                  dd='0'+dd;
                } 

                if(mm<10){
                  mm='0'+mm;
                }
                today = yyyy+'-'+mm+'-'+dd;

                document.getElementById('tanggal_piutang').value = today;
                document.getElementById('tanggal_jatuh_tempo').value = today;


              }else{
                console.log(data)
                $("#sisa_tagihan").val(data[0].sisa);
                $("#sisa_tagihan_sample").val(rubah(data[0].sisa));
                $("#status_hutang").val(data[0].status);
                $("#tanggal_piutang").val(data[0].tanggal);
                $("#tanggal_jatuh_tempo").val(data[0].tanggal_jatuh_tempo);
                $('#nominal').attr('disabled', false);
                $('#keterangan').attr('disabled', false);
                $('#jenis').attr('disabled', false);
                $('#nominal').focus();
              }              
            }
          });
        }
      });
    }

    $('#jenis').change(function() {
      $('#button_submit').attr('disabled', false);
    });

    function Loading(){
      $("#Loading").empty();
      var button_loading = '<button type="button" class="btn btn-flat btn-primary active pull-right" disabled="disabled"><i class="fa fa fa-spinner fa-spin"></i> Loading</button>';
      $("#Loading").append(button_loading);
    }

    $("#button_submit").click(function(){
      Loading();
      kas();
    })

    $("#button_reset").click(function(){
      Refresh();
    })

    function rubah(angka){
      var reverse = angka.toString().split('').reverse().join(''),
      ribuan = reverse.match(/\d{1,3}/g);
      ribuan = ribuan.join('.').split('').reverse().join('');
      return ribuan;
    }

    function kas(){
      var id_kas = $("#id_kas").val();
      var tanggal = $("#tanggal").val();
      var tujuan = $("#tujuan").val();
      var account_transaksi = $("#nama_outlet").val();
      var tipe = $("#tipe").val();
      var jenis = $("#jenis").val();
      var nominal = $("#nominal").val();
      var keterangan = $("#keterangan").val();
      var id_file = $("#id_file").val();
      var tanggal_bikin = $("#tanggal_bikin").val();

      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('kasharian/simpan_kas'); ?>",
        dataType  : "JSON",
        data      : {
                      id_kas: id_kas,
                      tanggal: tanggal,
                      tujuan: tujuan,
                      account_transaksi: account_transaksi,
                      tipe: tipe,
                      jenis: jenis,
                      nominal: nominal,
                      keterangan: keterangan,
                      id_file: id_file,
                      tanggal_bikin: tanggal_bikin
                    },
        success   : function(data){
          piutang();
        }
      });
    }

    function piutang(){
      var tanggal = $("#tanggal_piutang").val();
      var no_nota_penjualan = $("#no_nota_penjualan").val();
      var tanggal_jatuh_tempo = $("#tanggal_jatuh_tempo").val();
      var nominal_nota_penjualan = $("#nominal_nota").val();
      var terbayar = $("#nominal").val();
      var tanggal_bayar = $("#tanggal").val();
      var sisatagihan = $("#sisa_tagihan").val();
      var sisa = sisatagihan - terbayar
      
      if(sisa > 0){
        var status = "Belum";
      }else{
        var status = "Lunas";
      }
      
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('kasharian/simpan_piutang'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal: tanggal,
                      no_nota_penjualan: no_nota_penjualan,
                      tanggal_jatuh_tempo: tanggal_jatuh_tempo,
                      nominal_nota_penjualan: nominal_nota_penjualan,
                      terbayar: terbayar,
                      tanggal_bayar: tanggal_bayar,
                      sisa: sisa,
                      status: status
                    },
        success   : function(data){
          swal({
            title: "Simpan Kas Berhasil !",
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