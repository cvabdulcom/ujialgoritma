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
        <a href="#"><i class="fa fa-circle text-success"></i> Superuser</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="<?php echo base_url('dashboard'); ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('hargaproduk'); ?>">
          <i class="fa fa-money"></i> <span>Harga Produk</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('pengguna'); ?>">
          <i class="fa fa-users"></i> <span>Pengguna</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-trash-o"></i> <span>Hapus Data</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('hapusdata'); ?>"><i class="fa fa-circle-o"></i> Nota Penjualan</a></li>
          <li><a href="<?php echo base_url('hapusdata/suratjalan'); ?>"><i class="fa fa-circle-o"></i> Surat Jalan</a></li>
          <li><a href="<?php echo base_url('hapusdata/datastok'); ?>"><i class="fa fa-circle-o"></i> Data Stok</a></li>
          <li><a href="<?php echo base_url('hapusdata/sjoutlet'); ?>"><i class="fa fa-circle-o"></i> SJ Outlet</a></li>
          <li><a href="<?php echo base_url('hapusdata/pembelian'); ?>"><i class="fa fa-circle-o"></i> Pembelian</a></li>
          <li><a href="<?php echo base_url('hapusdata/dataoutlet'); ?>"><i class="fa fa-circle-o"></i> Data Outlet</a></li>
          <li><a href="<?php echo base_url('hapusdata/datapiutang'); ?>"><i class="fa fa-circle-o"></i> Data Piutang</a></li>
          <li><a href="<?php echo base_url('hapusdata/datakas'); ?>"><i class="fa fa-circle-o"></i> Data Kas</a></li>
          <li><a href="<?php echo base_url('hapusdata/datasetoran'); ?>"><i class="fa fa-circle-o"></i> Data Setoran</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            <b>Extra Discount</b>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="callout">
        <div class="login-box-body">
            <form>
                <div class="form-group has-feedback">
                    <input type="text" name="nama_outlet" id="nama_outlet" class="form-control" placeholder="Search Outlet...">
                    <span class="glyphicon glyphicon-home form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-2 pull-left">
                        <button type="button" id="button_reset" class="btn btn-default btn-block btn-flat active"><i class="fa fa-refresh"></i> Reset</button>
                    </div>
                    <div class="col-xs-2 pull-left">
                        <a href="<?php echo base_url('export/extra_diskon_riwayat') ?>"><button type="button" class="btn btn-info btn-block btn-flat active"><i class="fa fa-download"></i> Riwayat</button></a>
                    </div>
                    <div class="col-xs-2 pull-right" id="Loading">
                        <button type="button" id="button_submit" class="btn btn-primary btn-block btn-flat active" disabled><i class="fa fa-save"></i> Submit</button>
                    </div>
                </div>
            </form>
         </div>
      </div>
    </section>

    <section class="content">
      <div class="callout">
        <div class="box box-primary">
          <div class="box-body chart-responsive table-responsive">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                  <tr class="bg-info">
                    <th class="text-center">No</th>
                    <th class="text-center">ID Outlet</th>
                    <th class="text-center">Nama Outlet</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">AVG Omzet/Bulan</th>
                    <th class="text-center">Status</th>
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                  </tr>
              </thead>
              <tbody>
              <?php
                $no=0;
                foreach($extradiskon->result_array() as $tampil):
                $no++;
                $id_outlet = $tampil['id_outlet'];
                $nama_outlet = $tampil['nama_outlet'];
                $alamat = $tampil['alamat'];

                $bulan = 0;
                $date = date("Y-m-d");
                $timeStart = strtotime("2020-01-01");
                $timeEnd = strtotime("$date");
                // Menambah bulan ini + semua bulan pada tahun sebelumnya
                $numBulan = 1 + (date("Y",$timeEnd)-date("Y",$timeStart))*12;
                // menghitung selisih bulan
                $bulan += date("m",$timeEnd)-date("m",$timeStart);
              ?>
              <tr>
                <td class="text-center" width="30"><?php echo $no; ?></td>
                <td><?php echo $id_outlet; ?></td> 
                <td><?php echo $nama_outlet; ?></td> 
                <td><?php echo $alamat; ?></td>
                <td class="text-center">
                <?php
                  $cek_omzet = $this->db->query("SELECT SUM(subtotal) AS subtotal
                                                FROM tbl_penjualan
                                                WHERE tbl_penjualan.id_outlet='$id_outlet'");
                  $nilai_omzet = $cek_omzet->row()->subtotal;
                  $rata_omzet = $nilai_omzet/$bulan;
                  echo number_format($rata_omzet, 0, ',', '.');
                ?> 
                </td>  
                <td>
                <?php                
                  $status_diskon_cek = $this->db->query("SELECT diskon FROM tbl_outlet WHERE id_outlet='$id_outlet'");
                  $status_diskon = $status_diskon_cek->row()->diskon;
                  echo $status_diskon;
                ?>
                </td>
                <td width="30">
                  <form method="POST" action="<?php echo base_url('extradiskon/setuppage'); ?>">
                    <input type="hidden" name="id_outlet" value="<?php echo $id_outlet; ?>">
                    <button type="submit" class="btn btn-warning btn-xs"><i class="fa fa-external-link"></i></button>                  
                  </form>
                </td>
                <td width="30">
                  <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#HAPUS<?php echo $id_outlet; ?>"><i class="fa fa-trash"></i></button>
                  <!-- /.modal -->
                  <form method="POST" action="<?php echo base_url('extradiskon/hapus_extradiskon'); ?>">
                    <div class="modal fade bd-example-modal-sm" id="HAPUS<?php echo $id_outlet; ?>">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-body">
                            Hapus extradiskon <strong><?php echo $nama_outlet; ?></strong> ?
                          </div>
                          <div class="modal-footer">
                            <input type="hidden" name="id_outlet" value="<?php echo $id_outlet; ?>">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success">Hapus</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!-- /.modal -->
                </td>  
              </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <input type="hidden" name="id_outlet" id="id_outlet">
    <input type="hidden" name="alamat" id="alamat">
    <input type="hidden" name="tanggal_diberi" id="tanggal_diberi" value="<?php echo date('Y-m-d'); ?>">
    
  </div>
  <!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function(){

    Refresh()
    var mycart_extradiskon = [];
    $(function () {
      if (localStorage.mycart){
        mycart_extradiskon = JSON.parse(localStorage.mycart_extradiskon);
      }
    });

    function Refresh(){
        document.getElementById('nama_outlet').value = "";
        $('#button_submit').attr('disabled', true);
        localStorage.removeItem("mycart_extradiskon");
    }

    $("#button_reset").click(function(){
      Refresh()
      location.reload();
    });

    $( "#nama_outlet" ).autocomplete({
        source: "<?php echo site_url('penjualan/Cari_outlet/?');?>",
        minLength: 3,
        select: function (event, ui) {
            $("#nama_outlet").val(ui.item.value);
            $("#id_outlet").val(ui.item.id_outlet);
            $("#alamat").val(ui.item.alamat);
            $('#button_submit').attr('disabled', false);
            $('#nama_outlet').attr('readonly', true);
            Tarik_produk();
        }
    });

    function Tarik_produk(){
        $.ajax({
            type: "GET",
            url: "<?php echo base_url('extradiskon/tarik_produk'); ?>",
            dataType: "JSON",
            success: function(data){
                for(i=0; i<data.length; i++){
                    var id_outlet = $("#id_outlet").val();
                    var nama_outlet = $("#nama_outlet").val();
                    var alamat = $("#alamat").val();
                    var id_produk = data[i].id_produk;
                    var nama_produk = data[i].nama_produk;
                    var harga_beli = data[i].harga_beli;
                    var harga_jual = data[i].harga_jpc_dus;
                    var kemasan = data[i].kemasan;
                    var isi = data[i].isi;
                    
                    var item_extradiskon = { id_outlet: id_outlet, nama_outlet: nama_outlet, alamat: alamat, id_produk: id_produk, nama_produk: nama_produk, harga_beli: harga_beli, harga_jual: harga_jual, kemasan: kemasan, isi: isi }; 

                    mycart_extradiskon.push(item_extradiskon);
                    localStorage.setItem("mycart_extradiskon", JSON.stringify(mycart_extradiskon));
                }
            }
        });
    }

    function Loading(){
        $("#Loading").empty();
        var button_loading = '<button type="button" class="btn btn-primary btn-block btn-flat active" disabled="disabled"><i class="fa fa fa-spinner fa-spin"></i> Loading</button>';
        $("#Loading").append(button_loading);
    }

    $("#button_submit").click(function(){
        Loading();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('extradiskon/simpan'); ?>",
            data: {data: localStorage.getItem('mycart_extradiskon')},
            dataType: "JSON",
          success: function(data){
            var id_outlet = $("#id_outlet").val();
            $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('extradiskon/ubah_diskon'); ?>",
                    data: {id_outlet: id_outlet},
                    dataType: "JSON",
                success: function(data){
                    var id_outlet = $("#id_outlet").val();
                    var nama_outlet = $("#nama_outlet").val();
                    var tanggal_diberi = $("#tanggal_diberi").val();
                    $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('extradiskon/simpan_riwayat'); ?>",
                            data: {
                                    id_outlet: id_outlet,
                                    nama_outlet: nama_outlet,
                                    tanggal_diberi: tanggal_diberi
                                },
                            dataType: "JSON",
                        success: function(data){
                            swal({
                            title: "Extra Diskon Disimpan !",
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
          }
        });
    });
    
  })
</script>