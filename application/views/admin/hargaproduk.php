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
      <li class="active">
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
      Daftar
      <small>Pricelist</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Harga Produk</li>
    </ol>
  </section>

    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped dataTable">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">ID</th>
                  <th class="text-center">Nama Produk</th>
                  <th class="text-center">Kemasan</th>
                  <th class="text-center">Isi</th>
                  <th class="text-center">Harga Beli</th>
                  <th class="text-center">Harga GB 200 Dus</th>
                  <th class="text-center">Harga GB 150 Dus</th>
                  <th class="text-center">Harga GB 50 Dus</th>
                  <th class="text-center">Harga GB <50 Dus</th>
                  <th class="text-center">Harga JPC Dus</th>
                  <th class="text-center">Harga JPC Botol</th>
                  <th class="text-center">Harga JPT Dus</th>
                  <th class="text-center">Harga JPT Botol</th>
                  <th class="text-center">Harga KY Bayar</th>
                  <th class="text-center">Harga KY Jual</th>
                  <th class="text-center"></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=0;
                  foreach($harga->result_array() as $tampil):
                    $no++;
                    $id_produk = $tampil['id_produk'];
                    $nama_produk = $tampil['nama_produk'];
                    $kemasan = $tampil['kemasan'];
                    $isi = $tampil['isi'];
                    $harga_beli = $tampil['harga_beli'];
                    $harga_gb_200_dus = $tampil['harga_gb_200_dus'];
                    $harga_gb_150_dus = $tampil['harga_gb_150_dus'];
                    $harga_gb_50_dus = $tampil['harga_gb_50_dus'];
                    $harga_gb_k_50_dus = $tampil['harga_gb_k_50_dus'];
                    $harga_jpc_dus = $tampil['harga_jpc_dus'];
                    $harga_jpc_botol = $tampil['harga_jpc_botol'];
                    $harga_jpt_dus = $tampil['harga_jpt_dus'];
                    $harga_jpt_botol = $tampil['harga_jpt_botol'];
                    $harga_ky_t_bayar = $tampil['harga_ky_t_bayar'];
                    $harga_ky_r_jual = $tampil['harga_ky_r_jual'];
                ?>
                <tr>
                  <td class="text-center" width="30"><?php echo $no; ?></td>
                  <td><?php echo $id_produk; ?></td>
                  <td><?php echo $nama_produk; ?></td>
                  <td class="text-center"><?php echo $kemasan; ?></td>
                  <td class="text-center"><?php echo $isi; ?></td>
                  <td class="text-center"><?php echo number_format($harga_beli, 0, ',', '.'); ?></td>
                  <td class="text-center"><?php echo number_format($harga_gb_200_dus, 0, ',', '.'); ?></td>
                  <td class="text-center"><?php echo number_format($harga_gb_150_dus, 0, ',', '.'); ?></td>
                  <td class="text-center"><?php echo number_format($harga_gb_50_dus, 0, ',', '.'); ?></td>
                  <td class="text-center"><?php echo number_format($harga_gb_k_50_dus, 0, ',', '.'); ?></td>
                  <td class="text-center"><?php echo number_format($harga_jpc_dus, 0, ',', '.'); ?></td>
                  <td class="text-center"><?php echo number_format($harga_jpc_botol, 0, ',', '.'); ?></td>
                  <td class="text-center"><?php echo number_format($harga_jpt_dus, 0, ',', '.'); ?></td>
                  <td class="text-center"><?php echo number_format($harga_jpt_botol, 0, ',', '.'); ?></td>
                  <td class="text-center"><?php echo number_format($harga_ky_t_bayar, 0, ',', '.'); ?></td>
                  <td class="text-center"><?php echo number_format($harga_ky_r_jual, 0, ',', '.'); ?></td>
                  <td class="text-center">
                    <form method="POST" action="<?php echo base_url('hargaproduk/riwayat_stok_keluar_masuk'); ?>" target="_blank">
                      <input type="hidden" name="id_produk" value="<?php echo $id_produk; ?>">
                      <button type="submit" class="btn btn-xs btn-info"><i class="fa fa-eye"></i></button>
                    </form>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->