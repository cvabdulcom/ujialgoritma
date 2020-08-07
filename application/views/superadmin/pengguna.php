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
      <li class="active">
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
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pengguna
      <small>Management</small>
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
          <div class="box-header">
            <h3 class="box-title"><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#TAMBAH"><i class="fa fa-plus-square"></i> Add</button></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="example2" class="table table-bordered table-striped dataTable">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Jabatan</th>
                  <th class="text-center">Username</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Telepon</th>
                  <th class="text-center">No Karyawan</th>
                  <th class="text-center"></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=0;
                  foreach($pengguna->result_array() as $tampil):
                    $no++;
                    $user_id = $tampil['user_id'];
                    $nama = $tampil['nama'];
                    $jabatan = $tampil['jabatan'];
                    $user_name = $tampil['user_name'];
                    $user_email = $tampil['user_email'];
                    $user_level = $tampil['user_level'];
                    $no_telepon = $tampil['no_telepon'];
                    $no_karyawan = $tampil['no_karyawan'];
                ?>
                <tr>
                  <td class="text-center" width="30"><?php echo $no; ?></td>
                  <td><?php echo $nama; ?></td>
                  <td class="text-center"><?php echo $jabatan; ?></td>
                  <td class="text-center"><?php echo $user_name; ?></td>
                  <td class="text-center"><?php echo $user_email; ?></td>
                  <td class="text-center"><?php echo $no_telepon; ?></td>
                  <td class="text-center"><?php echo $no_karyawan; ?></td>
                  <td class="text-center">
                    <div class="pull-right box-tools">
                      <button type="button" class="btn btn-danger btn-xs" data-widget="Delete" title="Delete" data-original-title="Delete" data-toggle="modal" data-target="#HAPUS<?php echo $user_id; ?>"><i class="fa fa-trash"></i></button>
                      <button type="submit" class="btn btn-warning btn-xs" data-widget="Main" title="Main" data-original-title="Ubah" data-toggle="modal"  data-target="#UBAH<?php echo $user_id; ?>"><i class="fa fa-pencil-square"></i></button>
                    </div>
                    <!-- Modal Tambah presentasi-->
                    <div class="modal fade" id="HAPUS<?php echo $user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                              Hapus <?php echo $nama; ?> ?
                          </div>
                          <div class="modal-footer">                            
                            <form action="<?php echo base_url('pengguna/hapus'); ?>" method="post">
                              <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                              <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal End -->
                    <!-- Ubah Produk -->
                    <div class="modal fade" id="UBAH<?php echo $user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-body">
                              <!-- form start -->
                              <form method="POST" action="<?php echo base_url('pengguna/ubah'); ?>">
                              <div class="box-body">
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Nama</label>
                                  <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Password</label>
                                  <div class="col-sm-10">
                                    <input type="text" name="user_password" class="form-control" placeholder="Hidden">
                                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                  </div>
                                </div>
                              </div>
                            <!-- /.box -->
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal Ubah End -->
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

<!-- Ubah Produk -->
<div class="modal fade" id="TAMBAH" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="box-body">
            <div class="col-md-12">
              <form class="form-horizontal" method="POST" action="<?php echo base_url('pengguna/tambah'); ?>">
                <div class="box-body">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-10">
                      <input type="text" name="jabatan" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" name="user_name" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="user_email" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Telepon</label>
                    <div class="col-sm-10">
                      <input type="text" name="no_telepon" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="text" name="no_karyawan" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="text" name="user_password" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Level</label>
                    <div class="col-sm-10">
                      <select name="user_level" class="form-control" required>
                        <option value="">-</option>
                        <option value="2">Administrasi</option>
                        <option value="3">Salesman</option>
                      </select>
                    </div>
                  </div>
                </div>
            </div>
            <!-- /.box -->
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
          </form>
        </div>
    </div>
  </div>
</div>
<!-- Modal Ubah End -->