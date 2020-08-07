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
          <li class="active"><a href="<?php echo base_url('hapusdata/datastok'); ?>"><i class="fa fa-circle-o"></i> Data Stok</a></li>
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
      Hapus Data
      <small>Data Stok (Gudang - Outlet)</small>
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
          <div class="box-footer">
            <!-- Setting tanggal -->
            <div class="input-group pull-right form-horizontal col-md-3">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <?php
                $cek_tanggal_awal = $this->input->get('tanggal_awal');
                $cek_tanggal_akhir = $this->input->get('tanggal_akhir');

                if(!empty($this->input->get('tanggal_awal'))){
                  $first = $this->input->get('tanggal_awal');
                  $second = $this->input->get('tanggal_akhir');
                }else{
                  $hariini = date('Y-m-d');
                  $first = date("Y-m-d", strtotime("$hariini -7 days"));
                  $second = date('Y-m-d');
                }
                
                $new1 = strtotime($first); $newDate1 = date('m/d/Y', $new1);
                $new2 = strtotime($second); $newDate2 = date('m/d/Y', $new2);                  
              ?>                
              <input type="text" class="form-control input-sm" name="daterange" value="<?php echo $newDate1; echo " - "; echo $newDate2; ?>" />
              <span class="input-group-btn">
                <form method="get" action="<?php echo base_url('hapusdata/datastok'); ?>">
                  <input type="hidden" name="tanggal_awal" id="tanggal_awal">
                  <input type="hidden" name="tanggal_akhir" id="tanggal_akhir">
                  <button type="submit" class="btn btn-primary btn-sm btn-flat" id="button_search" disabled="disabled">Go!</button>
                </form>  
              </span>
            </div>
            <!-- Setting tanggal -->
          </div>  
          <div class="box-body table-responsive">
            <table id="example2" class="table table-bordered table-striped dataTable">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">No Surat Jalan</th>
                  <th class="text-center">Tanggal</th>
                  <th class="text-center">Keterangan</th>
                  <th class="text-center"></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=0;
                  foreach($datastok->result_array() as $tampil):
                    $no++;
                    $no_surat_jalan = $tampil['no_surat_jalan'];
                    $tanggal = $tampil['tanggal'];
                    $keterangan = $tampil['keterangan'];
                ?>
                <tr>                  
                  <td class="text-center"><?php echo $no; ?></td>
                  <td class="text-center"><?php echo $no_surat_jalan; ?></td>
                  <td class="text-center"><?php $new = strtotime($tanggal); $newDate = date('d/m/Y', $new);  echo $newDate; ?></td>                  
                  <td class="text-left"><?php echo $keterangan; ?></td>
                  <td class="text-left" width="30">
                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#HAPUS<?php echo $no_surat_jalan; ?>">Hapus</button>  
                    <!-- /.modal -->
                    <form method="POST" action="<?php echo base_url('hapusdata/hapus_datastok'); ?>">
                      <div class="modal fade bd-example-modal-sm" id="HAPUS<?php echo $no_surat_jalan; ?>">
                        <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                            <div class="modal-body">
                              Yakin hapus Stok No <strong><?php echo $no_surat_jalan; ?></strong> ?
                            </div>
                            <div class="modal-footer">
                              <input type="hidden" name="no_suratjalan" value="<?php echo $no_surat_jalan; ?>">
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
<script>

  $(function() {
    $('input[name="daterange"]').daterangepicker({
      opens: 'right'
    }, function(start, end, label) {
      $("#tanggal_awal").val(start.format('YYYY-MM-DD'));
      $("#tanggal_akhir").val(end.format('YYYY-MM-DD'));    
      $('#button_search').attr('disabled', false);
    });
  });

</script>