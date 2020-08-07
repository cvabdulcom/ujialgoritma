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
      <li class="active treeview menu-open">
        <a href="#">
          <i class="fa fa-industry"></i> <span>Laporan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?php echo base_url('laporan/outlet'); ?>"><i class="fa fa-circle-o"></i> Laporan Outlet</a></li>
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
      <b>Laporan Outlet</b>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><b>Tanggal :</b> <?php echo date('d/m/Y'); ?> </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-body chart-responsive">
            <div class="col-md-12 form-horizontal table-responsive">
              <form method="POST" action="<?php echo base_url('laporan/outlet_search'); ?>">
              <div class="form-group">
                <div class="input-group col-md-5">
                  <div class="input-group-addon">
                    <i class="fa fa-filter"></i>
                  </div>        
                  <select name="nama_salesman_search" id="nama_salesman_search" class="form-control input-sm" autofocus required>
                    <option value="">- Sales</option>
                    <option value="Gigih">Gigih</option>
                    <option value="Heri">Heri</option>
                  </select>
                  <div class="input-group-addon">
                    <i class="fa fa-filter"></i>
                  </div> 
                  <select name="rute_search" id="rute_search" class="form-control input-sm" required>
                    <option value="">- Rute</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                  <div class="input-group-addon">
                    <i class="fa fa-filter"></i>
                  </div> 
                  <select name="status_program_search" id="status_program_search" class="form-control input-sm" required>
                    <option value="">- Status Program</option>
                    <option>All</option>
                    <option value="PENDING">Pending</option>
                    <option value="APPROVE">Approve</option>
                    <option value="COMPLETE">Complete</option>
                    <option value="JP TEMPO">JP Tempo</option>
                    <option value="JP CASH">JP Cash</option>
                    <option value="GROUP BUYING">Group Buying</option>
                    <option value="BELUM MINAT">Belum Minat</option>
                    <option value="EX KONSI">Ex Konsi</option>
                  </select>
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary btn-sm btn-flat" id="button_search">Tampil</button>
                  </span>
                </div>
              </div>
            </form>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr class="bg-info">
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Outlet</th>
                    <th class="text-center"></th>
                    <th class="text-center">AVG Omzet</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Telp/WA</th>
                    <th class="text-center">Pemilik</th>
                    <th class="text-center">Long/Lat</th>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Tipe Pembelian</th>
                    <th class="text-center">Status Program</th>
                    <th class="text-center">Kode Outlet</th>
                    <th class="text-center">Nama Sales</th>
                    <th class="text-center">Rute</th>
                    <th class="text-center">K</th>
                    <th class="text-center">S</th>
                    <th class="text-center">T</th>
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=0;
                  foreach($laporanoutlet->result_array() as $tampil):
                    $no++;
                    $nama_outlet = $tampil['nama_outlet'];
                    $alamat = $tampil['alamat'];
                    $kecamatan = $tampil['kecamatan'];
                    $kabupaten = $tampil['kabupaten'];
                    $telepon = $tampil['telepon'];
					          $ada_whatsapp = $tampil['ada_whatsapp'];
                    $nama_pemilik = $tampil['nama_pemilik'];
                    $longitude = $tampil['longitude'];
                    $latitude = $tampil['latitude'];
                    $foto_outlet = $tampil['foto_outlet'];
                    $tipe_pembelian = $tampil['tipe_pembelian'];
                    $status_program = $tampil['status_program'];
                    $id_outlet = $tampil['id_outlet'];
                    $nama_salesman = $tampil['nama_salesman'];
                    $rute = $tampil['rute'];
                    $foto_stokawal = $tampil['foto_stokawal'];
                    $foto_kontrak = $tampil['foto_kontrak'];
                    $foto_kontrak_tempo = $tampil['foto_kontrak_tempo'];
                ?>
                <tr>
                  <td class="text-center" width="30"><?php echo $no; ?></td>
                  <td><?php echo $nama_outlet; ?></td>
                  <td class="text-center">
                    <?php 
                      if ($status_program === 'COMPLETE'){
                        echo '<a href="';
                        echo base_url('/laporan/so_sistem?');
                        echo 'id_outlet=';
                        echo $id_outlet;
                        echo '&nama_outlet=';
                        echo $nama_outlet;
                        echo '" target="_blank"><i class="fa fa-folder"></i></a>';
                      }else{
                        echo '';
                      }
                    ?>
                  </td>
                  <td class="text-center">
                  <?php
                    $date = date("Y-m-d");
                    $timeStart = strtotime("2020-01-01");
                    $timeEnd = strtotime("$date");
                    // Menambah bulan ini + semua bulan pada tahun sebelumnya
                    $numBulan = 1 + (date("Y",$timeEnd)-date("Y",$timeStart))*12;
                    // menghitung selisih bulan
                    $bulan += date("m",$timeEnd)-date("m",$timeStart);

                    $cek_omzet = $this->db->query("SELECT SUM(subtotal) AS subtotal
                                                  FROM tbl_penjualan
                                                  WHERE tbl_penjualan.id_outlet='$id_outlet'");
                    $nilai_omzet = $cek_omzet->row()->subtotal;
                    $rata_omzet = $nilai_omzet/$bulan;
                    echo number_format($rata_omzet, 0, ',', '.');
                  ?> 
                  </td>
                  <td><?php echo $alamat; ?>, <?php echo $kecamatan; ?>-<?php echo $kabupaten; ?></td>
                  <td class="text-center">
                    <?php 
                      if($ada_whatsapp === "0"){
                        echo $telepon;
                      }else{
                        echo $ada_whatsapp;
                      }						 
                    ?>
                  </td>
                  <td class="text-center"><?php echo $nama_pemilik; ?></td>
                  <td class="text-center"><?php echo $longitude; ?>, <?php echo $latitude; ?></td>
                  <td class="text-center">
                    <?php
                      if($foto_outlet === 'KOSONG'){
                        echo "<button class='btn btn-xs btn-primary item_upload' data='";
                        echo $id_outlet;
                        echo "'><i class='fa fa-upload'></i></button>";
                      }else{
                        echo "<a href='https://drive.google.com/file/d/"; 
                        echo $foto_outlet;
                        echo "/view' target='_blank'>Lihat</a>";
                      }
                    ?>                    
                  </td>
                  <td class="text-center"><?php if($tipe_pembelian === "J"){ echo "Jual Putus"; }else if($tipe_pembelian === "K"){ echo "Konsinyasi"; }elseif($tipe_pembelian === "G"){ echo "Group Buying"; }elseif($tipe_pembelian === "B"){ echo "Belum Minat"; }elseif($tipe_pembelian === "E"){ echo "Ex Konsinyasi"; } ?></td>
                  <td class="text-center">
                    <?php 
                      if ($status_program === 'PENDING'){
                        if ($tipe_pembelian === 'J'){
                          ?> <a href="<?php echo base_url('outletmasuk/jp_filekontrak'); ?>">PENDING</a> <?php
                        }else if ($tipe_pembelian === 'K'){
                          ?> <a href="<?php echo base_url('outletmasuk/ky_filekontrak'); ?>">PENDING</a> <?php
                        }
                      }else if($status_program !== 'PENDING'){
                        echo $status_program;
                      }
                    ?>
                  </td>
                  <td class="text-center"><?php echo $id_outlet; ?></td>
                  <td class="text-center"><?php echo $nama_salesman; ?></td>
                  <td class="text-center"><?php echo $rute; ?></td>
                  <td class="text-center">
                      <?php if($foto_kontrak === 'KOSONG'){ ?>
                        <i class="fa fa-close"></i>
                      <?php }else{ ?>
                        <a href="https://drive.google.com/file/d/<?php echo $foto_kontrak; ?>/view" target="_blank"><i class="fa fa-fw fa-file-pdf-o"></i></a>
                      <?php } ?>
                  </td>
                  <td class="text-center">
                      <?php if($foto_stokawal === 'KOSONG'){ ?>
                        <i class="fa fa-close"></i>
                      <?php }else{ ?>
                        <a href="https://drive.google.com/file/d/<?php echo $foto_stokawal; ?>/view" target="_blank"><i class="fa fa-fw fa-file-pdf-o"></i></a>
                      <?php } ?>
                  </td>
                  <td class="text-center">
                      <?php if($foto_kontrak_tempo === 'KOSONG'){ ?>
                        <i class="fa fa-close"></i>
                      <?php }else{ ?>
                        <a href="https://drive.google.com/file/d/<?php echo $foto_kontrak_tempo; ?>/view" target="_blank"><i class="fa fa-fw fa-file-pdf-o"></i></a>
                      <?php } ?>
                  </td>
                  <td class="text-center">
                    <form method="POST" action="<?php echo base_url(); if($status_program === 'COMPLETE'){ echo "profiling/cetak"; }else if($status_program === 'JP TEMPO'){ echo "profiling/cetak_tempo"; }else if($status_program === 'JP CASH'){ echo "profiling/cetak_cash"; }else{ echo "profiling/cetak_lain"; } ?>" target="_blank">
                      <input type="hidden" name="id_outlet" value="<?php echo $id_outlet; ?>">
                      <button type="submit" class="btn btn-xs btn-info"><i class="fa fa-print"></i></button>
                    </form>
                  </td>
                  <td class="text-center">
                    <button type="submit" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#UBAH_OUTLET<?php echo $id_outlet; ?>"><i class="fa fa-edit"></i></button>
                    <!-- Modal Start -->
                    <div class="modal fade in" id="UBAH_OUTLET<?php echo $id_outlet; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title"><?php echo $nama_outlet; ?></h4>
                            </div>
                            <div class="modal-body">
                              <div class="box-body">
                                <div class="col-md-12">
                                  <form class="form-horizontal" method="POST" action="<?php echo base_url('laporan/ubah_outlet'); ?>">
                                    <div class="box-body">
                                      <div class="form-group">
                                        <label class="col-sm-4 control-label">Pembelian</label>
                                        <div class="col-sm-8">
                                          <input type="hidden" name="id_outlet" value="<?php echo $id_outlet; ?>">
                                          <select name="tipe_pembelian" class="form-control">
                                            <option value="J" <?php if($tipe_pembelian == 'J') {echo "selected";} ?>>Jual Putus</option>
                                            <option value="K" <?php if($tipe_pembelian == 'K') {echo "selected";} ?>>Konsinyasi</option>
                                            <option value="G" <?php if($tipe_pembelian == 'G') {echo "selected";} ?>>Group Buying</option>
                                            <option value="E" <?php if($tipe_pembelian == 'E') {echo "selected";} ?>>Ex Konsi</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-4 control-label">Sales</label>
                                        <div class="col-sm-8">
                                          <select name="nama_salesman" class="form-control" id="inputGroupSelect01">
                                            <option value="Heri" <?php if($nama_salesman == 'Heri') {echo "selected";} ?>>Heri</option>
                                            <option value="Gigih" <?php if($nama_salesman == 'Gigih') {echo "selected";} ?>>Gigih</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <!-- /.box -->
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                              <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
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

          <div class="box-footer">
            <a href="<?php echo base_url('export/outlet'); ?>">
              <button type="button" class="btn btn-flat btn-primary active pull-right" id="button_download"><i class="fa fa-download"></i> Download</button>
            </a>
          </div>
          
        </div>
      </div>
    </div>
  </section>
<!-- /.content-wrapper -->
</div>

  <!-- Modal Start -->
  <div class="modal fade" id="UPLOAD_FILE">
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
        <div class="modal-footer">
          <form method="POST" action="<?php echo base_url('Laporan/upload_foto'); ?>">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
            <input type="hidden" name="id_outlet" value="">
            <input type="hidden" name="id_file" id="id_file">
            <div id="show_tombol"><button type="button" class="btn btn-primary" disabled><i class="fa fa-save"></i> Save</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal End -->

<script type="text/javascript">
  $(document).ready(function(){
    /* GET_UPLOAD_BY_ID START */
    $('.item_upload').on('click',function(){
      var id_outlet = $(this).attr('data');
      $('#UPLOAD_FILE').modal('show');
      $('[name = "id_outlet"]').val(id_outlet);
    });
    /* GET_UPLOAD_BY_ID END */
  })
</script>