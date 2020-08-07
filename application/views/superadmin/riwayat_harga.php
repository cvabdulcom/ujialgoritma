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
      <li class="active">
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
      Riwayat
      <small>Perubahan Harga</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('hargaproduk'); ?>"><i class="fa fa-money"></i> Harga Produk</a></li>
      <li class="active">Riwayat</li>
    </ol>
  </section>

    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">
            <div class="col-md-12 form-horizontal table-responsive">
              <table id="harga" class="table table-bordered table-striped dataTable">
                <thead>
                  <tr>
                    <th class='text-center' width="50">No</th>
                    <th class='text-center'>Kode Upload</th>
                    <th class='text-center'>Tanggal</th>
                    <th class='text-center'>Download</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $no=0;
                        foreach($harga->result_array() as $tampil):
                        $no++;
                        $kode_upload = $tampil['kode_upload'];
                        $tanggal_upload = $tampil['tanggal_upload'];
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $no; ?></td>
                        <td class="text-center" width="150"><?php echo $kode_upload; ?></td>
                        <td class="text-center"><?php $new = strtotime($tanggal_upload); $newDate = date('d/m/Y', $new);  echo $newDate; ?></td>
                        <td class="text-center">
                            <form method="POST" action="<?php echo base_url('export/harga_produk_riwayat'); ?>" target="_blank">
                                <input type="hidden" name="kode_upload" value="<?php echo $kode_upload ?>">
                                <input type="hidden" name="tanggal_upload" value="<?php echo $tanggal_upload ?>">
                                <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-download"></i></button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>                  
                </tbody>
              </table>
            </div>
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