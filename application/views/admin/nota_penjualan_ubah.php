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
      <li class="active treeview menu-open">
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
      <b>Perubahan Nota</b>
      <small>Penjualan/Pembelian</small>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><b>Tanggal :</b> <?php echo date('d/m/Y'); ?> </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="<?php echo base_url('penjualan/ubah_nota'); ?>">Nota Penjualan (Jual Putus)</a></li>
            <li><a href="#<?php //echo base_url('penjualan/ubah_nota_pembelian'); ?>">Nota Pembelian (Coming Soon)</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box-header">
                <button type="button" id="buka_izin_button" class="btn btn-sm btn-flat btn-primary active pull-right" data-toggle="modal" data-target="#BUKAIZIN"><i class="fa fa-folder-open-o"></i> Buka Izin</button>
              </div>
              <div class="box-body chart-responsive">
                <div class="col-md-3 form-horizontal">
                  <div class="input-group">
                    <input type="text" class="form-control" id="no_nota_penjualan" placeholder="No Nota Penjualan">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat" id="btn_cari">Cari</button>
                    </span>
                  </div>
                </div>
                  <div class="col-md-9">
                    <div class="form-group">
                      <div class="col-sm-5">
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Search..." disabled="disabled">                    
                        <!-- Hidden -->
                        <input type="hidden" name="tanggal" id="tanggal">
                        <input type="hidden" name="nama_salesman" id="nama_salesman">
                        <input type="hidden" name="rute" id="rute">
                        <input type="hidden" name="id_outlet" id="id_outlet">
                        <input type="hidden" name="tipe_pembelian" id="tipe_pembelian">
                        <input type="hidden" name="tempo" id="tempo">
                        <input type="hidden" name="status" id="status">
                        <input type="hidden" name="id_file_penjualan" id="id_file_penjualan">
                        <input type="hidden" name="nama_admin" id="nama_admin">
                        <input type="hidden" name="izin" id="izin">
                        <input type="hidden" name="tanggal_bikin" id="tanggal_bikin">
                        <input type="hidden" name="diskon" id="diskon">
                        <input type="hidden" name="nama_produk_alias" id="nama_produk_alias">
                        <input type="hidden" name="isi_kemasan" id="isi_kemasan">
                        <input type="hidden" name="id_produk" id="id_produk">
                        <input type="hidden" name="total" id="total">
                        <!-- Hidden -->
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
                      </div>
                      <div class="col-sm-3">
                        <select class="form-control" name="jenis_harga" id="jenis_harga" style="width: 100%;" disabled="disabled">
                          <option value="harga_jpc_dus">JPC Dus</option>
                          <option value="harga_jpc_botol" selected>JPC Botol</option>
                          <option value="harga_jpt_dus">JPT Dus</option>
                          <option value="harga_jpt_botol">JPT Botol</option>
                          <option value="harga_ky_t_bayar">Konsi Bayar</option>
                          <option value="harga_ky_r_jual">Konsi Jual</option>
                        </select>
                      </div>
                      <div class="col-sm-2">
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
                          <td class="text-center" width="50" style="text-align: right;"></td>
                        </tr>
                      </tbody>
                      <tfoot>                  
                        <tr>
                          <th colspan="4" class="text-right">Total Harga</th>
                          <th class="text-center"><div id="totalCart"></div></th>
                          <th class="text-right"></th>
                          <th class="text-right"></th>
                        <tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>                      
              <div class="box-footer">
                <button type="reset" class="btn btn-flat btn-default active" id="reset"><i class="fa fa-refresh"></i> Reset</button>
                <button type="button" class="btn btn-flat btn-success active pull-right" id="kunci"><i class="fa fa-save"></i> Simpan</button>
              </div>                
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- /.content-wrapper -->
</div>

<div class="modal fade in" id="HAPUSITEM">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        Apakah anda yakin hapus item ?
        <input type="hidden" id="no_nota_penjualan_hapus">
        <input type="hidden" id="id_produk_hapus">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="button_delete_item">Delete</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Start -->
<div class="modal fade" id="BUKAIZIN">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <div class="col-sm-12">
                <input type="text" class="form-control" name="no_nota_izin" id="no_nota_izin" placeholder="No Nota Penjualan">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <i class="fa fa-warning"></i> Harus password admin lain !
              </div>
            </div>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
        <button type="button" class="btn btn-success" id="btn_izin"><i class="fa fa-unlock-alt"></i> Unlock</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->

  <div class="modal fade" id="UBAHNOTA">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">  
        <form class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Nama Produk</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="nama_produk_ubah" id="nama_produk_ubah" placeholder="-" readonly>
                <input type="hidden" name="no_nota_ubah" id="no_nota_ubah">
                <input type="hidden" name="id_produk_ubah" id="id_produk_ubah">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-3 control-label">Jumlah</label>
              <div class="col-sm-2">
                <input type="number" class="form-control" placeholder="0" name="jumlah_ubah" id="jumlah_ubah">
                <input type="hidden" name="harga_ubah" id="harga_ubah">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
        <button type="button" class="btn btn-success" id="simpan_ubah"><i class="fa fa-save"></i> Save</button>
      </div>
    </div>
  </div>  

</div>

<script type="text/javascript">
  $(document).ready(function(){

    $("#btn_cari").click(function(){
      Cek_nota()
    })

    function Cek_nota(){
      var no_nota_penjualan = $('#no_nota_penjualan').val();
      $.ajax({
          type: "POST",
          url: "<?php echo base_url('penjualan/cek_nota'); ?>",
          data: {no_nota_penjualan: no_nota_penjualan},
          dataType: "JSON",
        success: function(data){
          var izin = data[0].izin;
          if(izin == 1){
            Tarik_nota();
          }else{
            swal({
              title: "Tidak Di Izinkan !",
              type: "error",
              confirmButtonColor: "#f00202",
              showCancelButton: false,
              confirmButtonText: "OK",
              closeOnConfirm: true
            });
          }
        }
      });
    }

    function Tarik_nota(){
      var no_nota_penjualan = $('#no_nota_penjualan').val();
      $.ajax({
          type: "POST",
          url: "<?php echo base_url('penjualan/cari_nota'); ?>",
          data: {no_nota_penjualan: no_nota_penjualan},
          dataType: "JSON",
        success: function(data){
          //console.log(data);
          showCart(data);
          // data hidden
          document.getElementById('tanggal').value = data[0].tanggal;
          document.getElementById('nama_salesman').value = data[0].nama_salesman;
          document.getElementById('rute').value = data[0].rute;
          document.getElementById('id_outlet').value = data[0].id_outlet;
          document.getElementById('tipe_pembelian').value = data[0].tipe_pembelian;
          document.getElementById('tempo').value = data[0].tempo;
          document.getElementById('status').value = data[0].status;
          document.getElementById('id_file_penjualan').value = data[0].id_file_penjualan;
          document.getElementById('nama_admin').value = data[0].nama_admin;
          document.getElementById('izin').value = data[0].izin;
          document.getElementById('tanggal_bikin').value = data[0].tanggal_bikin;
          // data hidden
          $('#nama_produk').attr('disabled', false);
          $('#jenis_harga').attr('disabled', false);
          $('#jumlah').attr('disabled', false);
          $('#button_produk').attr('disabled', false);
          $('#cek_stok').attr('disabled', false);
          $('#no_nota_penjualan').attr('readonly', true);
          $('#btn_cari').attr('disabled', true);
          $('#buka_izin_button').attr('disabled', true);
          $('#nama_produk').focus();
          var id_outlet = data[0].id_outlet;
          $.ajax({
              type: "POST",
              url: "<?php echo base_url('penjualan/cek_diskon'); ?>",
              data: {id_outlet: id_outlet},
              dataType: "JSON",
            success: function(data){
              //console.log(data)
              document.getElementById('diskon').value = data[0].diskon;
            }
          });
        }
      });
    }

    function showCart(data){    
      $("#cartBody").empty();
      var total = 0;
      for (var i in data) {
        var item = data[i];
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
                    row += '<td class="text-center" width="50" style="text-align: right;"><button class="btn btn-warning btn-xs" onclick="Item_ubah(\'' + item.no_nota_penjualan + '\', \'' + item.id_produk + '\', \'' + item.nama_produk + '\', \'' + item.harga + '\', \'' + item.jumlah + '\');"><i class="fa fa-edit"></i></button>';
                    row += '</td>';
                    row += '<td class="text-center" width="50" style="text-align: right;"><button class="btn btn-danger btn-xs action_cek" data-nonotapenjualan="'+item.no_nota_penjualan+'" data-idproduk="'+item.id_produk+'"><i class="fa fa-trash"></i></button></td>';
                    row += '</tr>';

        $("#cartBody").append(row); //append ul dengan id cartbody
        total += parseInt(item.subtotal);
      }
      document.getElementById('total').value = total;
      totalCart.innerHTML = rubah(total);
    }

    $("#cartBody").on('click', '.action_cek', function (){
        var no_nota_penjualan = $(this).data("nonotapenjualan");
        var id_produk = $(this).data("idproduk");
        document.getElementById('no_nota_penjualan_hapus').value = no_nota_penjualan;
        document.getElementById('id_produk_hapus').value = id_produk;
        $('#HAPUSITEM').modal('show');
    })

    function rubah(angka){
      var reverse = angka.toString().split('').reverse().join(''),
      ribuan = reverse.match(/\d{1,3}/g);
      ribuan = ribuan.join('.').split('').reverse().join('');
      return ribuan;
    }

    window.Item_ubah = function(data1, data2, data3, data4, data5){
      $('#button_delete_item').attr('disabled', false);
      $('#UBAHNOTA').modal('show');
      document.getElementById('no_nota_ubah').value = data1;
      document.getElementById('id_produk_ubah').value = data2;
      document.getElementById('jumlah_ubah').value = data5;
      document.getElementById('nama_produk_ubah').value = data3;
      document.getElementById('harga_ubah').value = data4;
    }

    $("#simpan_ubah").click(function(){
      var no_nota_penjualan = $('#no_nota_ubah').val();
      var id_produk = $('#id_produk_ubah').val();
      var harga = $('#harga_ubah').val();
      var jumlah = $('#jumlah_ubah').val();
      var subtotal = jumlah*harga;
      $.ajax({
          type: "POST",
          url: "<?php echo base_url('penjualan/simpan_ubah'); ?>",
          data: {
                  no_nota_penjualan: no_nota_penjualan,
                  id_produk: id_produk,
                  jumlah: jumlah,
                  subtotal: subtotal
                },
          dataType: "JSON",
        success: function(data){
          //console.log("perubahan sukses");
          $.ajax({
              type: "POST",
              url: "<?php echo base_url('penjualan/cari_nota'); ?>",
              data: {no_nota_penjualan: no_nota_penjualan},
              dataType: "JSON",
            success: function(data){
              showCart(data);
              $('#UBAHNOTA').modal('hide');
            }
          });
        }
      });
    });

    $("#button_delete_item").click(function(){
      $('#button_delete_item').attr('disabled', true);
      var no_nota_penjualan = $('#no_nota_penjualan_hapus').val();
      var id_produk = $('#id_produk_hapus').val();
      $.ajax({
          type: "POST",
          url: "<?php echo base_url('penjualan/delete_item_ubah_nota'); ?>",
          data: {
                  no_nota_penjualan: no_nota_penjualan,
                  id_produk: id_produk
                },
          dataType: "JSON",
        success: function(data){
          Tarik_nota();
          $('#HAPUSITEM').modal('hide');
          $('#button_delete_item').attr('disabled', false);
        }
      });
    });

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

    $("#reset").click(function(){
      location.reload();
    })

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
              var tipe_pembelian_add = $("#tipe_pembelian").val();
              var tempo_add = $("#tempo").val();
              var status_add = $("#status").val();
              var id_file_penjualan_add = $("#id_file_penjualan").val();
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
              
              var tipe_pembelian_add = $("#tipe_pembelian").val();
              var tempo_add = $("#tempo").val();
              var status_add = $("#status").val();
              var id_file_penjualan_add = $("#id_file_penjualan").val();
              var subtotal_add = harga_add * jumlah_add;
              var nama_produk_add = $("#nama_produk_alias").val();
              var nama_admin_add = $("#nama_admin").val();
              var satuan_add = 'pcs';
              var kemasan_add = $("#isi_kemasan").val();
              var tanggal_bikin_add = $("#tanggal_bikin").val();
            }

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('penjualan/simpan_item_ubah_nota'); ?>",
                data: { 
                        tanggal: tanggal_add,
                        no_nota_penjualan: no_nota_penjualan_add,
                        nama_salesman: nama_salesman_add,
                        rute: rute_add,
                        id_outlet: id_outlet_add,
                        id_produk: id_produk_add,
                        jumlah: jumlah_add,
                        harga: harga_add,
                        tipe_pembelian: tipe_pembelian_add,
                        tempo: tempo_add,
                        status: status_add,
                        id_file_penjualan: id_file_penjualan_add,
                        subtotal: subtotal_add,
                        nama_produk: nama_produk_add,
                        nama_admin: nama_admin_add,
                        satuan: satuan_add,
                        kemasan: kemasan_add,
                        tanggal_bikin: tanggal_bikin_add
                      },
                dataType: "JSON",
              success: function(data){
                document.getElementById('nama_produk').value = "";
                document.getElementById('jumlah').value = "1";
                $('#button_submit').attr('disabled', false);
                $('#nama_produk').focus();
                Tarik_nota();
              }
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

    $("#kunci").click(function(){
      window.swal({
        title: "Loading...",
        text: "Please wait",
        imageUrl: "<?php echo base_url('assets/image/loader.gif'); ?>",
        showConfirmButton: false
      });
      var no_nota_penjualan = $('#no_nota_penjualan').val();
      $.ajax({
          type: "POST",
          url: "<?php echo base_url('penjualan/kunci'); ?>",
          data: { no_nota_penjualan: no_nota_penjualan },
          dataType: "JSON",
        success: function(data){
          var no_nota_penjualan = $('#no_nota_penjualan').val();
          $.ajax({
              type: "POST",
              url: "<?php echo base_url('penjualan/hapus_piutang'); ?>",
              data: { no_nota_penjualan: no_nota_penjualan },
              dataType: "JSON",
            success: function(data){
              var tanggal = $('#tanggal').val();
              var no_nota_penjualan = $('#no_nota_penjualan').val();
              var tempo = $('#tempo').val();
              var tanggal_jatuh_tempo = $('#tanggal').val();
              var nominal_nota_penjualan = $('#total').val();
              var terbayar = 0;
              var tanggal_bayar = $('#tanggal').val();
              var sisa = $('#total').val();
              var status = 'Belum';
              $.ajax({
                  type: "POST",
                  url: "<?php echo base_url('penjualan/input_piutang'); ?>",
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
                  dataType: "JSON",
                success: function(data){
                  swal({
                    title: "Perubahan nota di simpan !",
                    type: "success",
                    confirmButtonColor: "#19c21e",
                    showCancelButton: false,
                    confirmButtonText: "OK",
                    closeOnConfirm: true
                  }, function(isConfirm) {
                    location.reload();
                  });
                }
              });
            }
          });
        }
      });
    });

  })
</script>

<script type="text/javascript">
  $(document).ready(function(){

    $("#btn_izin").click(function(){
      Buka_kunci();
    })

    function Buka_kunci(){
      var no_nota_penjualan = $('#no_nota_izin').val();
      var password = $('#password').val();

      $.ajax({
          type: "POST",
          url: "<?php echo base_url('penjualan/buka_kunci'); ?>",
          data: {
                  no_nota_penjualan: no_nota_penjualan,
                  password: password
                },
          dataType: "JSON",
        success: function(data){
          if(data == 'sukses'){
            Izinkan();
          }else{
            swal({
              title: "Password Salah !",
              type: "error",
              confirmButtonColor: "#f00202",
              showCancelButton: false,
              confirmButtonText: "OK",
              closeOnConfirm: true
            });
          }
        }
      });
    }

    function Izinkan(){
      var no_nota_penjualan = $('#no_nota_izin').val();
      var password = $('#password').val();

      $.ajax({
          type: "POST",
          url: "<?php echo base_url('penjualan/izinkan'); ?>",
          data: {
                  no_nota_penjualan: no_nota_penjualan,
                  password: password
                },
          dataType: "JSON",
        success: function(data){
          if(data == 'kosong'){
            swal({
              title: "No nota tidak ada !",
              type: "error",
              confirmButtonColor: "#646e60",
              showCancelButton: false,
              confirmButtonText: "OK",
              closeOnConfirm: true
            });
          }else{
            swal({
              title: "Perubahan nota di Izinkan !",
              type: "success",
              confirmButtonColor: "#19c21e",
              showCancelButton: false,
              confirmButtonText: "OK",
              closeOnConfirm: true
            });
            $('#BUKAIZIN').modal('hide');
          }
        }
      });
    }
  })
</script>