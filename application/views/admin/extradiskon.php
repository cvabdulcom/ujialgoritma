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
              <li class="active"><a href="<?php echo base_url('outletmasuk/ky_stokawal'); ?>"><i class="fa fa-circle-o"></i> Stok Awal</a></li>
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
            <b>Extra Discount</b>
        </h1>
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
                  <button <?php if($status_diskon === 'EXTRA'){ echo "disabled"; } ?> type="button" class="reset_produk btn btn-success btn-xs" data-idoutlet="<?php echo $id_outlet; ?>" data-namaoutlet="<?php echo $nama_outlet; ?>" data-alamat="<?php echo $alamat; ?>"><i class="fa fa-retweet"></i></button>   
                </td>
                <td width="30">
                  <form method="POST" action="<?php echo base_url('extradiskon/setuppage'); ?>">
                    <input type="hidden" name="id_outlet" value="<?php echo $id_outlet; ?>">
                    <button type="submit" class="btn btn-warning btn-xs" <?php if($status_diskon === 'BLOKIR'){ echo "disabled"; } ?>><i class="fa fa-external-link"></i></button>                  
                  </form>
                </td>
              </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    
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
      $('#button_submit').attr('disabled', true);
      localStorage.removeItem("mycart_extradiskon");
    }

    $("#button_reset").click(function(){
      Refresh()
      location.reload();
    });

    $('.reset_produk').click(function(){
      window.swal({
        title: "Checking...",
        text: "Please wait",
        imageUrl: "<?php echo base_url('assets/image/loader.gif'); ?>",
        showConfirmButton: false
      });

      localStorage.removeItem("mycart_extradiskon");
      var id_outlet_get = $(this).data("idoutlet");
      var nama_outlet_get = $(this).data("namaoutlet");
      var alamat_get = $(this).data("alamat");

      $.ajax({
        type: "POST",
        url: "<?php echo base_url('extradiskon/hapus_reset'); ?>",
        dataType: "JSON",
        data: {
                id_outlet: id_outlet_get
              },
        success: function(data){
          $.ajax({
            type: "GET",
            url: "<?php echo base_url('extradiskon/tarik_produk'); ?>",
            dataType: "JSON",
            success: function(data){
              for(i=0; i<data.length; i++){
                var id_outlet = id_outlet_get;
                var nama_outlet = nama_outlet_get;
                var alamat = alamat_get;
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

              $.ajax({
                  type: "POST",
                  url: "<?php echo base_url('extradiskon/simpan'); ?>",
                  data: {data: localStorage.getItem('mycart_extradiskon')},
                  dataType: "JSON",
                success: function(data){
                  $.ajax({
                      type: "POST",
                      url: "<?php echo base_url('extradiskon/ubah_diskon'); ?>",
                      data: {id_outlet: id_outlet_get},
                      dataType: "JSON",
                  success: function(data){
                    swal({
                      title: "Reset Diskon Berhasil !",
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
        }
      });      
    });

    // function Tarik_produk(){
        
    // }
    
  })
</script>