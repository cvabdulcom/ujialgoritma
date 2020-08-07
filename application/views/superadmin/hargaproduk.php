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
      Daftar
      <small>Pricelist</small>
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
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#TAMBAH"><i class="fa fa-plus-square"></i> Add CSV</button>
            
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#TAMBAHPRODUK"><i class="fa fa-plus-square"></i> Tambah Produk</button>

            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#BLOKIREXTRA"><i class="fa fa-remove"></i> Blokir Extra</button>

            <div class="btn-group">
              <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-download"></i> Download</button>
              <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url('export/harga_produk'); ?>">Download Excel</a></li>
                <li><a href="<?php echo base_url('/assets/document/import_data_produk.csv') ?>">Download CSV</a></li>
              </ul>
            </div>
            
            <a href="<?php echo base_url('hargaproduk/riwayat'); ?>" ><button type="button" class="btn btn-sm btn-default active"><i class="fa fa-refresh"></i> Riwayat Harga</button></a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="col-md-12 form-horizontal table-responsive">
              <table id="harga" class="table table-bordered table-striped dataTable">
                <thead>
                  <tr>
                    <th class='text-center'>ID Produk</th>
                    <th class='text-center'>Nama Produk</th>
                    <th class='text-center'>Segmen</th>
                    <th class='text-center'>Karton</th>
                    <th class='text-center'>Isi</th>
                    <th class='text-center'>Harga Beli</th>
                    <th class='text-center'>Harga GB 200 Dus</th>
                    <th class='text-center'>Harga GB 150 Dus</th>
                    <th class='text-center'>Harga GB 50 Dus</th>
                    <th class='text-center'>Harga GB < 50 Dus</th>
                    <th class='text-center'>Harga JP Cash Dus</th>
                    <th class='text-center'>Harga JP Cash Botol</th>
                    <th class='text-center'>Harga JP Tempo Dus</th>
                    <th class='text-center'>Harga JP Tempo Botol</th>
                    <th class='text-center'>Harga KY T Bayar</th>
                    <th class='text-center'>Harga KY R Jual</th>
                    <th class='text-center'></th>
                    <th class='text-center'></th>
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
                      $harga_gb_k_50_dus =$tampil['harga_gb_k_50_dus'];
                      $harga_jpc_dus = $tampil['harga_jpc_dus'];
                      $harga_jpc_botol = $tampil['harga_jpc_botol'];
                      $harga_jpt_dus = $tampil['harga_jpt_dus'];
                      $harga_jpt_botol = $tampil['harga_jpt_botol'];
                      $harga_ky_t_bayar = $tampil['harga_ky_t_bayar'];
                      $harga_ky_r_jual = $tampil['harga_ky_r_jual'];
                      $segmen = $tampil['segmen'];
                  ?>
                  <tr>
                    <td class="text-center" width="30"><?php echo $no; ?></td>
                    <td><?php echo $nama_produk; ?></td>
                    <td class="text-center"><?php echo $segmen; ?></td>
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
                    <td>
                      <a href="javascript:;" type="button" class="ubah_harga btn btn-warning btn-xs" data-idproduk="<?php echo $id_produk; ?>" data-namaproduk="<?php echo $nama_produk; ?>" data-hargabeli="<?php echo $harga_beli; ?>" data-isi="<?php echo $isi; ?>" data-kemasan="<?php echo $kemasan; ?>" data-hargagb200dus="<?php echo $harga_gb_200_dus; ?>" data-hargagb150dus="<?php echo $harga_gb_150_dus; ?>" data-hargagb50dus="<?php echo $harga_gb_50_dus; ?>" data-hargagbk50dus="<?php echo $harga_gb_k_50_dus; ?>" data-hargajpcdus="<?php echo $harga_jpc_dus; ?>" data-hargajpcbotol="<?php echo $harga_jpc_botol; ?>" data-hargajptdus="<?php echo $harga_jpt_dus; ?>" data-hargajptbotol="<?php echo $harga_jpt_botol; ?>" data-hargakytbayar="<?php echo $harga_ky_t_bayar; ?>" data-hargakyrjual="<?php echo $harga_ky_r_jual; ?>"><i class="fa fa-edit"></i></a>
                    </td>
                    <td>
                      <button type="button" class="btn btn-danger btn-xs" data-widget="Delete" title="Delete" data-original-title="Delete" data-toggle="modal" data-target="#HAPUS<?php echo $id_produk; ?>"><i class="fa fa-trash"></i></button>

                      <!-- Modal Tambah presentasi-->
                      <div class="modal fade" id="HAPUS<?php echo $id_produk; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                          <div class="modal-content">
                            <div class="modal-body">
                                Hapus <?php echo $nama_produk; ?> ?
                            </div>
                            <div class="modal-footer">                            
                              <form action="<?php echo base_url('hargaproduk/hapus_produk'); ?>" method="post">
                                <input type="hidden" name="id_produk" value="<?php echo $id_produk; ?>">
                                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Modal End -->
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

<!-- Modal Tambah presentasi-->
<div class="modal fade" id="TAMBAH" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <!-- form start -->
        <form method="post" action="<?php echo base_url('hargaproduk/validasi'); ?>" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File input (Please choose file csv)</label>
              <input type="file" name="fileharga" id="fileharga" required>
            </div>
          </div>
        <!-- /.box -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" name="preview" value="Preview" class="btn btn-primary"><i class="fa fa-search-plus"></i> Preview</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->

<!-- Ubah Produk -->
<div class="modal fade" id="TAMBAHPRODUK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="box-body">
            <div class="col-md-12">
              <form class="form-horizontal" method="POST" action="<?php echo base_url('hargaproduk/tambah_produk') ?>">
                <div class="box-body">
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Nama Produk</label>
                    <div class="col-sm-8">
                      <input type="hidden" name="id_produk" id="id_produk" value="IDP<?php echo $idp; ?>">
                      <input type="text" name="nama_produk" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Harga Beli</label>
                    <div class="col-sm-8">
                      <input type="number" name="harga_beli" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Isi Perkarton</label>
                    <div class="col-sm-8">
                      <input type="text" name="kemasan" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Kemasan Perpcs</label>
                    <div class="col-sm-8">
                      <input type="number" name="isi" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Harga GB 200 Dus</label>
                    <div class="col-sm-8">
                      <input type="number" name="harga_gb_200_dus" id="harga_gb_200_dus" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Harga GB 150 Dus</label>
                    <div class="col-sm-8">
                      <input type="number" name="harga_gb_150_dus" id="harga_gb_150_dus" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Harga GB 50 Dus</label>
                    <div class="col-sm-8">
                      <input type="number" name="harga_gb_50_dus" id="harga_gb_50_dus" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Harga GB < 50 Dus</label>
                    <div class="col-sm-8">
                      <input type="number" name="harga_gb_k_50_dus" id="harga_gb_k_50_dus" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Harga JPC Dus</label>
                    <div class="col-sm-8">
                      <input type="number" name="harga_jpc_dus" id="harga_jpc_dus" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Harga JPC Botol</label>
                    <div class="col-sm-8">
                      <input type="number" name="harga_jpc_botol" id="harga_jpc_botol" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Harga JPT Dus</label>
                    <div class="col-sm-8">
                      <input type="number" name="harga_jpt_dus" id="harga_jpt_dus" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Harga JPT Botol</label>
                    <div class="col-sm-8">
                      <input type="number" name="harga_jpt_botol" id="harga_jpt_botol" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Harga KYT Bayar</label>
                    <div class="col-sm-8">
                      <input type="number" name="harga_ky_t_bayar" id="harga_kyt_bayar" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Harga KYR Jual</label>
                    <div class="col-sm-8">
                      <input type="number" name="harga_ky_r_jual" id="harga_kyr_jual" class="form-control" placeholder="-" required>
                    </div>
                  </div>
                </div>
            </div>
            <!-- /.box -->
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left active" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
          </form>
        </div>
    </div>
  </div>
</div>
<!-- Modal Ubah End -->



<!-- Modal Tambah presentasi-->
<div class="modal fade" id="BLOKIREXTRA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body">
        Anda yakin untuk Blokir Semua harga Extra ?
      </div>
      <div class="modal-footer">
        <form class="form-horizontal" method="POST" action="<?php echo base_url('hargaproduk/blokir_extra') ?>">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Tidak</button>
        <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-check"></i> Blokir</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->


<!-- Ubah Produk -->
<div class="modal fade" id="UBAHPRODUK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="box-body">
          <div class="col-md-12">
            <form class="form-horizontal" method="POST" action="<?php echo base_url('hargaproduk/ubah_produk') ?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Nama Produk</label>
                  <div class="col-sm-8">
                    <input type="hidden" name="id_produk_ubah" id="id_produk_ubah">
                    <input type="text" name="nama_produk_ubah" id="nama_produk_ubah" class="form-control" placeholder="-" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Harga Beli</label>
                  <div class="col-sm-8">
                    <input type="number" name="harga_beli_ubah" id="harga_beli_ubah" class="form-control" placeholder="-" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Isi Perkarton</label>
                  <div class="col-sm-8">
                    <input type="number" name="kemasan_ubah" id="kemasan_ubah" class="form-control" placeholder="-" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Kemasan Perpcs</label>
                  <div class="col-sm-8">
                    <input type="text" name="isi_ubah" id="isi_ubah" class="form-control" placeholder="-" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Harga GB 200 Dus</label>
                  <div class="col-sm-8">
                    <input type="number" name="harga_gb_200_dus_ubah" id="harga_gb_200_dus_ubah" class="form-control" placeholder="-" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Harga GB 150 Dus</label>
                  <div class="col-sm-8">
                    <input type="number" name="harga_gb_150_dus_ubah" id="harga_gb_150_dus_ubah" class="form-control" placeholder="-" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Harga GB 50 Dus</label>
                  <div class="col-sm-8">
                    <input type="number" name="harga_gb_50_dus_ubah" id="harga_gb_50_dus_ubah" class="form-control" placeholder="-" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Harga GB < 50 Dus</label>
                  <div class="col-sm-8">
                    <input type="number" name="harga_gb_k50_dus_ubah" id="harga_gb_k50_dus_ubah" class="form-control" placeholder="-" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Harga JPC Dus</label>
                  <div class="col-sm-8">
                    <input type="number" name="harga_jpc_dus_ubah" id="harga_jpc_dus_ubah" class="form-control" placeholder="-" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Harga JPC Botol</label>
                  <div class="col-sm-8">
                    <input type="number" name="harga_jpc_botol_ubah" id="harga_jpc_botol_ubah" class="form-control" placeholder="-" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Harga JPT Dus</label>
                  <div class="col-sm-8">
                    <input type="number" name="harga_jpt_dus_ubah" id="harga_jpt_dus_ubah" class="form-control" placeholder="-" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Harga JPT Botol</label>
                  <div class="col-sm-8">
                    <input type="number" name="harga_jpt_botol_ubah" id="harga_jpt_botol_ubah" class="form-control" placeholder="-" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Harga KYT Bayar</label>
                  <div class="col-sm-8">
                    <input type="number" name="harga_kyt_bayar_ubah" id="harga_kyt_bayar_ubah" class="form-control" placeholder="-" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Harga KYR Jual</label>
                  <div class="col-sm-8">
                    <input type="number" name="harga_kyr_jual_ubah" id="harga_kyr_jual_ubah" class="form-control" placeholder="-" required>
                  </div>
                </div>
              </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left active" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Ubah End -->


<script>
  $('.ubah_harga').on('click',function(){
    var id_produk = $(this).data("idproduk");
    var nama_produk = $(this).data("namaproduk");
    var kemasan = $(this).data("kemasan");
    var isi = $(this).data("isi");
    var harga_beli = $(this).data("hargabeli");
    var harga_gb_200_dus = $(this).data("hargagb200dus");
    var harga_gb_150_dus = $(this).data("hargagb150dus");
    var harga_gb_50_dus = $(this).data("hargagb50dus");
    var harga_gb_k_50_dus = $(this).data("hargagbk50dus");
    var harga_jpc_dus = $(this).data("hargajpcdus");
    var harga_jpc_botol = $(this).data("hargajpcbotol");
    var harga_jpt_dus = $(this).data("hargajptdus");
    var harga_jpt_botol = $(this).data("hargajptbotol");
    var harga_ky_t_bayar = $(this).data("hargakytbayar");
    var harga_ky_r_jual = $(this).data("hargakyrjual");

    document.getElementById('id_produk_ubah').value = id_produk;
    document.getElementById('nama_produk_ubah').value = nama_produk;
    document.getElementById('kemasan_ubah').value = kemasan;
    document.getElementById('isi_ubah').value = isi;
    document.getElementById('harga_beli_ubah').value = harga_beli;
    document.getElementById('harga_gb_200_dus_ubah').value = harga_gb_200_dus;
    document.getElementById('harga_gb_150_dus_ubah').value = harga_gb_150_dus;
    document.getElementById('harga_gb_50_dus_ubah').value = harga_gb_50_dus;
    document.getElementById('harga_gb_k50_dus_ubah').value = harga_gb_k_50_dus;
    document.getElementById('harga_jpc_dus_ubah').value = harga_jpc_dus;
    document.getElementById('harga_jpc_botol_ubah').value = harga_jpc_botol;
    document.getElementById('harga_jpt_dus_ubah').value = harga_jpt_dus;
    document.getElementById('harga_jpt_botol_ubah').value = harga_jpt_botol;
    document.getElementById('harga_kyt_bayar_ubah').value = harga_ky_t_bayar;
    document.getElementById('harga_kyr_jual_ubah').value = harga_ky_r_jual;
    $('#UBAHPRODUK').modal('show');
  });
</script>