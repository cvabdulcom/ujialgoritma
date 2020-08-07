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
      <li class="active treeview menu-open">
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
          <li class="active"><a href="<?php echo base_url('hapusdata/sjoutlet'); ?>"><i class="fa fa-circle-o"></i> SJ Outlet</a></li>
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
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Hapus Data
      <small>SJ Stok Outlet Konsinyasi</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="example2" class="table table-bordered table-striped dataTable">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama Outlet</th>
                  <th class="text-center">Salesman</th>
                  <th class="text-center">Status Program</th>
                  <th class="text-center">Alamat</th>
                  <th class="text-center"></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=0;
                  foreach($sjoutlet->result_array() as $tampil):
                    $no++;
                    $id_outlet = $tampil['id_outlet'];
                    $nama_outlet = $tampil['nama_outlet'];
                    $nama_salesman = $tampil['nama_salesman'];
                    $status_program = $tampil['status_program'];
                    $alamat = $tampil['alamat'];
                ?>
                <tr>                  
                  <td class="text-center"><?php echo $no; ?></td>
                  <td class="text-left"><?php echo $nama_outlet; ?></td>
                  <td class="text-center"><?php echo $nama_salesman; ?></td>                  
                  <td class="text-center"><?php echo $status_program; ?></td>
                  <td class="text-left"><?php echo $alamat; ?></td>
                  <td class="text-left" width="30">
                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#HAPUS<?php echo $id_outlet; ?>">Hapus</button>  
                    <!-- /.modal -->
                    <form method="POST" action="<?php echo base_url('hapusdata/hapus_sjoutlet'); ?>">
                      <div class="modal fade bd-example-modal-sm" id="HAPUS<?php echo $id_outlet; ?>">
                        <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                            <div class="modal-body">
                              Hapus Stok Outlet <strong><?php echo $nama_outlet; ?></strong> ?
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