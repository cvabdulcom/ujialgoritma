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
          <li><a href="<?php echo base_url('laporan/outlet'); ?>"><i class="fa fa-circle-o"></i> Laporan Outlet</a></li>
          <li><a href="<?php echo base_url('laporan/piutang'); ?>"><i class="fa fa-circle-o"></i> Laporan Piutang</a></li>
          <li><a href="<?php echo base_url('laporan/sales'); ?>"><i class="fa fa-circle-o"></i> Laporan Sales</a></li>
          <li><a href="<?php echo base_url('laporan/stok'); ?>"><i class="fa fa-circle-o"></i> Laporan Stok</a></li>
          <li><a href="<?php echo base_url('laporan/pembelian'); ?>"><i class="fa fa-circle-o"></i> Laporan Pembelian</a></li>
          <li><a href="<?php echo base_url('laporan/penjualan'); ?>"><i class="fa fa-circle-o"></i> Laporan Penjualan</a></li>
          <li><a href="<?php echo base_url('laporan/kas'); ?>"><i class="fa fa-circle-o"></i> Laporan Kas</a></li>
          <li class="active"><a href="<?php echo base_url('laporan/accounting'); ?>"><i class="fa fa-circle-o"></i> Monitor Accounting</a></li>
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
      <b>Monitor Accounting</b>
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
            <li class="active"><a href="<?php echo base_url('laporan/accounting'); ?>">Laba Rugi</a></li>
            <li><a href="<?php echo base_url('laporan/accounting_neraca'); ?>">Asset (Aktiva Tetap)</a></li>
            <li class="pull-right">
              <div class="text-center">
                <div class="pull-right">
                  <button type="button" class="add btn btn-flat btn-primary active" data-toggle="modal" data-target="#LAPORANSETORAN" data-backdrop="static" data-keyboard="false">Biaya Tambahan</button>
                  <!-- Expand -->
                  <div class="modal fade bd-example-modal-lg" id="LAPORANSETORAN">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Biaya Tambahan</h4>
                        </div>
                        <div class="modal-body table-responsive">
                          <div class="box-body chart-responsive">
                            <div class="col-md-6 form-horizontal">
                            
                              <div class="form-group">
                                <label for="tempo" class="col-sm-4 control-label">Tanggal</label>
                                <div class="col-sm-8">
                                  <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d'); ?>">  
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="no_nota" class="col-sm-4 control-label">Jenis Biaya</label>
                                <div class="col-sm-8">
                                  <select class="form-control" name="jenis_biaya" id="jenis_biaya" style="width: 100%;" onchange="Aktif()">
                                    <option value="">- Pilihan</option>
                                    <option value="Biaya Operasional Kirim">Biaya Operasional Kirim</option>
                                    <option value="Biaya Operasional Kantor">Biaya Operasional Kantor</option>
                                    <option value="Biaya Gaji/Upah/Reward">Biaya Gaji/Upah/Reward</option>
                                    <option value="Biaya Operasional Sales">Biaya Operasional Sales</option>
                                    <option value="Biaya Perawatan Kendaraan">Biaya Perawatan Kendaraan</option>
                                    <option value="Biaya Perawatan Kantor">Biaya Perawatan Kantor</option>
                                    <option value="Biaya Perjalanan">Biaya Perjalanan</option>
                                    <option value="Biaya Promosi dan Program">Biaya Promosi dan Program</option>
                                    <option value="Biaya Tidak Terduga">Biaya Tidak Terduga</option>
                                    <option value="Pajak">Pajak</option>
                                    <option value="Asuransi">Asuransi</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="nominal" class="col-sm-4 control-label">Nominal Bayar</label>
                                <div class="col-sm-6">
                                  <input type="number" name="nominal" id="nominal" class="form-control" placeholder="0" min="0" placeholder="-" disabled="disabled">
                                </div>
                              </div>  

                            </div>
                            
                            <!-- Hidden form -->
                            <input type="hidden" name="id_kas" id="id_kas" value="BT<?php echo $id_kas; ?>">
                            <input type="hidden" name="id_file" id="id_file" value="KOSONG">
                            <input type="hidden" name="tujuan" id="tujuan" value="Biaya">
                            <input type="hidden" name="tipe" id="tipe" value="Keluar">
                            <input type="hidden" name="tanggal_bikin" id="tanggal_bikin" value="<?php echo date('Y-m-d'); ?>">
                            <!-- Hidden form -->

                            <div class="col-md-6 form-horizontal">
                              <div class="form-group">
                                <label for="keterangan" class="col-sm-4 control-label">Keterangan</label>
                                <div class="col-sm-6">
                                  <textarea name="keterangan" id="keterangan" class="form-control" disabled="disabled"></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="total_uang_keluar" class="col-sm-4 control-label">Jenis</label>
                                <div class="col-sm-4">
                                  <select class="form-control" name="jenis" id="jenis" style="width: 100%;" disabled="disabled">
                                    <option value="">- Pilihan</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Bank">Bank</option>
                                  </select>
                                </div>
                              </div>              
                            </div>
                          </div>

                        </div>
                        <div class="modal-footer">
                          <button type="reset" class="btn btn-flat btn-default active pull-left" id="button_reset"><i class="fa fa-refresh"></i> Reset</button>
                          <button type="button" class="btn btn-flat btn-primary active pull-right" id="button_submit" disabled="disabled"><div id="Loading_tb"><i class="fa fa-save"></i> Submit</div></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Expand -->
                </div>
              </div>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active table-responsive" id="tab_1">
              
              <div class="form-group">
                <div class="input-group col-md-3">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <?php
                    // $cekfirst = date('Y-m-d');
                    $first = date('Y-m-d');
                    $second = date('2019-11-28');
                    
                    $new1 = strtotime($second); $newDate1 = date('m/d/Y', $new1);
                    $new2 = strtotime($first); $newDate2 = date('m/d/Y', $new2);

                    $cek_tanggal_awal = $this->input->get('tanggal_awal');
                    $cek_tanggal_akhir = $this->input->get('tanggal_akhir');

                    if(isset($cek_tanggal_awal)){
                      $tanggal_awal = $this->input->get('tanggal_awal');
                      $tanggal_akhir = $this->input->get('tanggal_akhir');
                    }else{
                      $tanggal_awal = $second;
                      $tanggal_akhir = $first;
                    }
                  ?>                
                  <input type="text" class="form-control input-sm" name="daterange" value="<?php echo $newDate1; echo " - "; echo $newDate2; ?>" />
                  <span class="input-group-btn">
                    <form>
                      <input type="hidden" name="tanggal_awal" id="tanggal_awal" value="<?php echo $tanggal_awal; ?>">
                      <input type="hidden" name="tanggal_akhir" id="tanggal_akhir" value="<?php echo $tanggal_akhir; ?>">
                      <button type="button" class="btn btn-primary btn-sm btn-flat" id="button_search" disabled="disabled"><div id="Loading">Go!</div></button>
                    </form>  
                  </span>
                </div>
              </div>
            
              <div class="box-body chart-responsive">
                <div class="col-md-12 form-horizontal table-responsive">
                  <table id="example4" class="table table-bordered table-hover">
                    <thead>
                      <tr class="bg-info">
                        <th class="text-left" colspan="3">Akun</th>
                        <th class="text-right" colspan="2">Nominal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- Pendapatan -->
                      <tr>
                        <th class="text-right" width="50">1.0.00</th>
                        <th class="text-left" colspan="2">
                          &nbsp;&nbsp;PENDAPATAN
                        </th>
                        <td class="text-center"></td>
                      </tr>
                      <tr>
                        <th class="text-right" width="50">1.1.00</th>
                        <th class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - PENDAPATAN USAHA
                        </th>
                        <td class="text-center"></td>
                      </tr>
                      <tr>
                        <td class="text-right" width="50">1.1.01</td>
                        <td class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - Penjualan
                        </td>
                        <td class="text-right" id="accounting_penjualan"></td>
                      </tr>
                      <tr bgcolor="#F2F2F2">
                        <th class="text-right" colspan="3">TOTAL PENDAPATAN</th>
                        <th class="text-right" id="accounting_pendapatan_total"></th>
                      </tr>

                      <!-- Penjualan -->
                      <tr>
                        <th class="text-right" width="50">2.0.00</th>
                        <th class="text-left" colspan="2">
                          &nbsp;&nbsp;HARGA POKOK PENJUALAN
                        </th>
                        <td class="text-center"></td>
                      </tr>
                      <tr>
                        <th class="text-right" width="50">2.1.00</th>
                        <th class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - HARGA POKOK BARANG DAGANG
                        </th>
                        <td class="text-center"></td>
                      </tr>
                      <tr>
                        <td class="text-right" width="50">2.1.01</td>
                        <td class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - Nilai Stok Akhir
                        </td>
                        <td class="text-right" id="accounting_hpp"></td>
                      </tr>
                      <tr>
                        <th class="text-right" width="50">2.2.00</th>
                        <th class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - HARGA POKOK PEMBELIAN
                        </th>
                        <td class="text-right"></td>
                      </tr>

                      <!-- Pembelian -->
                      <tr>
                        <td class="text-right" width="50">2.2.01</td>
                        <td class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - Pembelian
                        </td>
                        <td class="text-right" id="accounting_pembelian"></td>
                      </tr>
                      <tr bgcolor="#F2F2F2">
                        <th class="text-right" colspan="3">TOTAL HARGA POKOK PENJUALAN</th>
                        <th class="text-right" id="accounting_total_hpp"></th>
                      </tr>
                      <tr bgcolor="#C4C1C1">
                        <th class="text-right" colspan="3">LABA KOTOR ( TOTAL PENDAPATAN - TOTAL HARGA POKOK PENJUALAN )</th>
                        <th class="text-right" id="accounting_laba_kotor"></th>
                      </tr>

                      <!-- Biaya -->
                      <tr>
                        <th class="text-right" width="50">3.0.00</th>
                        <th class="text-left" colspan="2">
                          &nbsp;&nbsp;BIAYA
                        </th>
                        <td class="text-center"></td>
                      </tr>
                      <tr>
                        <th class="text-right" width="50">3.1.00</th>
                        <th class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - BIAYA USAHA
                        </th>
                        <td class="text-center"></td>
                      </tr>
                      <tr>
                        <td class="text-right" width="50">3.1.01</td>
                        <td class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - Biaya Operasional Kantor	
                        </td>
                        <td class="text-right" id="biaya_operasional_kantor"></td>
                      </tr>
                      <tr>
                        <td class="text-right" width="50">3.1.02</td>
                        <td class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - Biaya Operasional Kirim	
                        </td>
                        <td class="text-right" id="biaya_operasional_kirim"></td>
                      </tr>
                      <tr>
                        <td class="text-right" width="50">3.1.03</td>
                        <td class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - Biaya Gaji/Upah/Reward
                        </td>
                        <td class="text-right" id="biaya_gaji_upah_reward"></td>
                      </tr>
                      <tr>
                        <td class="text-right" width="50">3.1.04</td>
                        <td class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - Biaya Operasional Sales		
                        </td>
                        <td class="text-right" id="biaya_operasional_sales"></td>
                      </tr>
                      <tr>
                        <td class="text-right" width="50">3.1.05</td>
                        <td class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - Biaya Perawatan Kendaraan
                        </td>
                        <td class="text-right" id="biaya_perawatan_kendaraan"></td>
                      </tr>
                      <tr>
                        <td class="text-right" width="50">3.1.06</td>
                        <td class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - Biaya Perawatan Kantor	
                        </td>
                        <td class="text-right" id="biaya_perawatan_kantor"></td>
                      </tr>
                      <tr>
                        <td class="text-right" width="50">3.1.07</td>
                        <td class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - Biaya Perjalanan
                        </td>
                        <td class="text-right" id="biaya_perjalanan"></td>
                      </tr>
                      <tr>
                        <td class="text-right" width="50">3.1.08</td>
                        <td class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - Biaya Promosi dan Program	
                        </td>
                        <td class="text-right" id="biaya_promosi_program"></td>
                      </tr>
                      <tr>
                        <td class="text-right" width="50">3.1.09</td>
                        <td class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - Pajak
                        </td>
                        <td class="text-right" id="biaya_pajak"></td>
                      </tr>
                      <tr>
                        <td class="text-right" width="50">3.1.10</td>
                        <td class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - Asuransi
                        </td>
                        <td class="text-right" id="biaya_asuransi"></td>
                      </tr>
                      <tr>
                        <td class="text-right" width="50">3.1.11</td>
                        <td class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - Pembayaran Nota Beli
                        </td>
                        <td class="text-right" id="biaya_pembayaran_nota_beli"></td>
                      </tr>
                      <tr bgcolor="#F2F2F2">
                        <th class="text-right" colspan="3">TOTAL BIAYA</th>
                        <th class="text-right" id="accounting_total_biaya"></th>
                      </tr>
                      <tr bgcolor="#C4C1C1">
                        <th class="text-right" colspan="3">TOTAL PENDAPATAN USAHA ( LABA KOTOR - TOTAL BIAYA )</th>
                        <th class="text-right" id="accounting_total_pendapatan_usaha"></th>
                      </tr>

                      <!-- Pendapatan Lainya -->
                      <tr>
                        <th class="text-right" width="50">4.0.00</th>
                        <th class="text-left" colspan="2">
                          &nbsp;&nbsp;PENDAPATAN LAINNYA
                        </th>
                        <td class="text-center"></td>
                      </tr>
                      <tr>
                        <th class="text-right" width="50">4.1.00</th>
                        <th class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - PENDAPATAN DILUAR USAHA
                        </th>
                        <td class="text-center"></td>
                      </tr>
                      <tr>
                        <td class="text-right" width="50">4.1.01</td>
                        <td class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - Denda
                        </td>
                        <td class="text-right" id="denda"></td>
                      </tr>
                      <tr>
                        <td class="text-right" width="50">4.1.02</td>
                        <td class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - Pendapatan lainnya
                        </td>
                        <td class="text-right" id="pendapatan_lainya"></td>
                      </tr>
                      <tr bgcolor="#F2F2F2">
                        <th class="text-right" colspan="3">TOTAL PENDAPATAN LAINNYA</th>
                        <th class="text-right" id="accounting_total_pendapatan_lainya"></th>
                      </tr>

                      <!-- Biaya Lainya -->
                      <tr>
                        <th class="text-right" width="50">5.0.00</th>
                        <th class="text-left" colspan="2">
                          &nbsp;&nbsp;BIAYA LAINNYA
                        </th>
                        <td class="text-center"></td>
                      </tr>
                      <tr>
                        <th class="text-right" width="50">5.1.00</th>
                        <th class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - BIAYA DILUAR USAHA
                        </th>
                        <td class="text-center"></td>
                      </tr>
                      <tr>
                        <td class="text-right" width="50">5.1.01</td>
                        <td class="text-left" colspan="2">
                          &nbsp;&nbsp;&nbsp;&nbsp; - Biaya tidak terduga
                        </td>
                        <td class="text-right" id="biaya_lainya"></td>
                      </tr>
                      <tr bgcolor="#F2F2F2">
                        <th class="text-right" colspan="3">TOTAL BIAYA LAINNYA</th>
                        <th class="text-right" id="total_biaya_lainya"></th>
                      </tr>                      
                      <tr bgcolor="#C4C1C1">
                        <th class="text-right" colspan="3">TOTAL PENDAPATAN DILUAR USAHA ( TOTAL PENDAPATAN LAINNYA - TOTAL BIAYA LAINNYA )</th>
                        <th class="text-right" id="total_pendapatan_diluar_usaha"></th>
                      </tr>
                      <tr bgcolor="#12E908">
                        <th class="text-right" colspan="3">LABA/RUGI BERSIH ( TOTAL PENDAPATAN USAHA + TOTAL PENDAPATAN DILUAR USAHA )</th>
                        <th class="text-right" id="laba_rugi_bersih"></th>
                      </tr>
                      <tr bgcolor="#12E908">
                        <form action="<?php echo base_url('laporan/estimated_gross_profit_detail'); ?>" method="GET" target="_blank">
                        <input type="hidden" name="tanggal_awal_egp" id="tanggal_awal_egp" value="<?php echo $tanggal_awal; ?>">
                        <input type="hidden" name="tanggal_akhir_egp" id="tanggal_akhir_egp" value="<?php echo $tanggal_akhir; ?>">
                        <th class="text-right" colspan="3"><button type="submit" class="btn btn-xs btn-primary">download</button> ESTIMATED GROSS PROFIT (ESTIMASI LABA KOTOR)</th></form>
                        <th class="text-right" id="estimated_gross_profit"></th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- /.content-wrapper -->
</div>

<script>
  $(function() {
    $('input[name="daterange"]').daterangepicker({
      opens: 'right'
    }, function(start, end, label) {
      $("#tanggal_awal").val(start.format('YYYY-MM-DD'));
      $("#tanggal_akhir").val(end.format('YYYY-MM-DD'));
      $("#tanggal_awal_egp").val(start.format('YYYY-MM-DD'));
      $("#tanggal_akhir_egp").val(end.format('YYYY-MM-DD'));    
      $('#button_search').attr('disabled', false);
    });
  });

  $("#button_search").click(function(){
    accounting_penjualan();
  })

  function rubah(angka){
    var reverse = angka.toString().split('').reverse().join(''),
    ribuan = reverse.match(/\d{1,3}/g);
    ribuan = ribuan.join('.').split('').reverse().join('');
    return ribuan;
  }

  function Loading(){
    $("#Loading").empty();
    var button_loading = '<i class="fa fa fa-spinner fa-spin"></i>';
    $("#Loading").append(button_loading);
  }

  function No_Loading(){
    $("#Loading").empty();
    var button_loading = 'Go!';
    $("#Loading").append(button_loading);
  }

  var rph_awalgudang = 0;
  var rph_awaloutlet_heri = 0;
  var rph_awaloutlet_gigih = 0;
  var rphawal_global_hpp = 0;
  var rph_akhirgudang = 0;
  var rph_akhiroutlet_heri = 0;
  var rph_akhiroutlet_gigih = 0;
  var rphakhir_global_hpp = 0;
  var rph_pembelian = 0;
  var rph_hpp = 0;
  var total_hpp_real = 0;
  var total_pendapatan = 0;
  var laba_kotor_real = 0;

  var biaya_operasional_kantor_real = 0;
  var biaya_operasional_kirim_real = 0;
  var biaya_gaji_upah_reward_real = 0;
  var biaya_operasional_sales_real = 0;
  var biaya_perawatan_kendaraan_real = 0;
  var biaya_perawatan_kantor_real = 0;
  var biaya_perjalanan_real = 0;
  var biaya_promosi_program_real = 0;
  var biaya_pajak_real = 0;
  var biaya_asuransi_real = 0;
  var biaya_pembayaran_nota_beli_real = 0;
  var total_biaya_real = 0;
  var total_pendapatan_usaha_real = 0;
  var total_pendapatan_lainya_real = 0;
  var biaya_lainya_real = 0
  var total_biaya_lainya_real = 0;

  var total_pendapatan_diluar_usaha_real = 0;
  var laba_rugi_bersih = 0;

  var estimated_gross_profit = 0;
</script>

<script>
  /** Monitor Accounting */
  accounting_penjualan();
  
    /** Penjualan */
    function accounting_penjualan(){
      Loading();
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/accounting_penjualan'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          $("#accounting_penjualan").empty();
          var row = rubah(data[0].subtotal);
          $("#accounting_penjualan").append(row);

          $("#accounting_pendapatan_total").empty();
          var row = rubah(data[0].subtotal);
          $("#accounting_pendapatan_total").append(row);
          laporan_stokawal_gudang();
          total_pendapatan = data[0].subtotal;
        }
      });
    }
    /** Penjualan */

    /** Harga Pokok Penjualan */
    function laporan_stokawal_gudang(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/laporan_stokawal_gudang'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          rph_awalgudang = data.harga;
          laporan_stokawal_heri();
        }
      });
    }

    function laporan_stokawal_heri(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/laporan_stokawal_heri'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          rph_awaloutlet_heri = data.harga;
          laporan_stokawal_gigih();
        }
      });
    }

    function laporan_stokawal_gigih(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/laporan_stokawal_gigih'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          rph_awaloutlet_gigih = data.harga;
          laporan_stokawal_global();
        }
      });
    }

    function laporan_stokawal_global(){
      var rphawal_global = rph_awalgudang + rph_awaloutlet_heri + rph_awaloutlet_gigih;

      rphawal_global_hpp = rphawal_global;
      laporan_stokakhir_gudang();
    }

    function laporan_stokakhir_gudang(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/laporan_stokakhir_gudang'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          rph_akhirgudang = data.harga;
          laporan_stokakhir_heri();
        }
      });
    }

    function laporan_stokakhir_heri(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/laporan_stokakhir_heri'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          rph_akhiroutlet_heri = data.harga;
          laporan_stokakhir_gigih();
        }
      });
    }

    function laporan_stokakhir_gigih(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/laporan_stokakhir_gigih'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          rph_akhiroutlet_gigih = data.harga;
          laporan_stokakhir_global();
        }
      });
    }

    function laporan_stokakhir_global(){
      var rphakhir_global = rph_akhirgudang + rph_akhiroutlet_heri + rph_akhiroutlet_gigih;
      rphakhir_global_hpp = rphakhir_global;

      laporan_hpp();
    }

    function laporan_hpp(){
      var hpp = parseInt(rphawal_global_hpp)-parseInt(rphakhir_global_hpp);
      $("#accounting_hpp").empty();
      var row = rubah(hpp);
      $("#accounting_hpp").append(row);
      rph_hpp = hpp;
      laporan_pembelian_stok()
    }
    /** Harga Pokok Penjualan */

    /** Pembelian */
    function laporan_pembelian_stok(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/laporan_pembelian_stok'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          $("#accounting_pembelian").empty();
          var row = rubah(data.harga*1);
          $("#accounting_pembelian").append(row);
          rph_pembelian = data.harga*1;
          total_hpp();
        }
      });
    }

    function total_hpp(){
      var total_hpp = parseInt(rph_hpp)+parseInt(rph_pembelian);
      $("#accounting_total_hpp").empty();
      var row = rubah(total_hpp);
      $("#accounting_total_hpp").append(row);
      total_hpp_real = total_hpp;
      laba_kotor();
    }

    function laba_kotor(){
      var laba_kotor = parseInt(total_pendapatan)-parseInt(total_hpp_real);
      $("#accounting_laba_kotor").empty();
      var row = rubah(laba_kotor);
      $("#accounting_laba_kotor").append(row);
      laba_kotor_real = laba_kotor;
      biaya_operasional_kantor();
    }
    /** Pembelian */

    /** Biaya */
    function biaya_operasional_kantor(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/biaya_operasional_kantor'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          // console.log(data)
          $("#biaya_operasional_kantor").empty();
          if(data[0].nominal == null){
            var nominal = 0;
          }else{
            var nominal = data[0].nominal*1;
          }
          var row = rubah(nominal);
          $("#biaya_operasional_kantor").append(row);
          biaya_operasional_kantor_real = nominal;
          biaya_operasional_kirim();
        }
      });
    }

    function biaya_operasional_kirim(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/biaya_operasional_kirim'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          $("#biaya_operasional_kirim").empty();
          if(data[0].nominal == null){
            var nominal = 0;
          }else{
            var nominal = data[0].nominal*1;
          }
          var row = rubah(nominal);
          $("#biaya_operasional_kirim").append(row);
          biaya_operasional_kirim_real = nominal;
          biaya_gaji_upah_reward();
        }
      });
    }

    function biaya_gaji_upah_reward(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/biaya_gaji_upah_reward'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          $("#biaya_gaji_upah_reward").empty();
          if(data[0].nominal == null){
            var nominal = 0;
          }else{
            var nominal = data[0].nominal*1;
          }
          var row = rubah(nominal);
          $("#biaya_gaji_upah_reward").append(row);
          biaya_gaji_upah_reward_real = nominal;
          biaya_operasional_sales();
        }
      });
    }

    function biaya_operasional_sales(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/biaya_operasional_sales'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          $("#biaya_operasional_sales").empty();
          if(data[0].nominal == null){
            var nominal = 0;
          }else{
            var nominal = data[0].nominal*1;
          }
          var row = rubah(nominal);
          $("#biaya_operasional_sales").append(row);
          biaya_operasional_sales_real = nominal;
          biaya_perawatan_kendaraan();
        }
      });
    }

    function biaya_perawatan_kendaraan(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/biaya_perawatan_kendaraan'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          $("#biaya_perawatan_kendaraan").empty();
          if(data[0].nominal == null){
            var nominal = 0;
          }else{
            var nominal = data[0].nominal*1;
          }
          var row = rubah(nominal);
          $("#biaya_perawatan_kendaraan").append(row);
          biaya_perawatan_kendaraan_real = nominal;
          biaya_perawatan_kantor();
        }
      });
    }

    function biaya_perawatan_kantor(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/biaya_perawatan_kantor'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          $("#biaya_perawatan_kantor").empty();
          if(data[0].nominal == null){
            var nominal = 0;
          }else{
            var nominal = data[0].nominal*1;
          }
          var row = rubah(nominal);
          $("#biaya_perawatan_kantor").append(row);
          biaya_perawatan_kantor_real = nominal;
          biaya_perjalanan();
        }
      });
    }

    function biaya_perjalanan(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/biaya_perjalanan'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          $("#biaya_perjalanan").empty();
          if(data[0].nominal == null){
            var nominal = 0;
          }else{
            var nominal = data[0].nominal*1;
          }
          var row = rubah(nominal);
          $("#biaya_perjalanan").append(row);
          biaya_perjalanan_real = nominal;
          biaya_promosi_program();
        }
      });
    }

    function biaya_promosi_program(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/biaya_promosi_program'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          $("#biaya_promosi_program").empty();
          if(data[0].nominal == null){
            var nominal = 0;
          }else{
            var nominal = data[0].nominal*1;
          }
          var row = rubah(nominal);
          $("#biaya_promosi_program").append(row);
          biaya_promosi_program_real = nominal;
          biaya_pajak();
        }
      });
    }

    function biaya_pajak(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/biaya_pajak'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          $("#biaya_pajak").empty();
          if(data[0].nominal == null){
            var nominal = 0;
          }else{
            var nominal = data[0].nominal*1;
          }
          var row = rubah(nominal);
          $("#biaya_pajak").append(row);
          biaya_pajak_real = nominal;
          biaya_asuransi();
        }
      });
    }

    function biaya_asuransi(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/biaya_asuransi'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          $("#biaya_asuransi").empty();
          if(data[0].nominal == null){
            var nominal = 0;
          }else{
            var nominal = data[0].nominal*1;
          }
          var row = rubah(nominal);
          $("#biaya_asuransi").append(row);
          biaya_asuransi_real = nominal;
          biaya_pembayaran_nota_beli();
        }
      });
    }

    function biaya_pembayaran_nota_beli(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/biaya_pembayaran_nota_beli'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          $("#biaya_pembayaran_nota_beli").empty();
          if(data[0].nominal == null){
            var nominal = 0;
          }else{
            var nominal = data[0].nominal*1;
          }
          var row = rubah(nominal);
          $("#biaya_pembayaran_nota_beli").append(row);
          pembayaran_nota_beli_real = nominal;
          total_biaya();
        }
      });
    }

    function total_biaya(){
      var total_biaya = biaya_operasional_kantor_real+biaya_operasional_kirim_real+biaya_gaji_upah_reward_real+biaya_operasional_sales_real+biaya_perawatan_kendaraan_real+biaya_perawatan_kantor_real+biaya_perjalanan_real+biaya_promosi_program_real+biaya_pajak_real+biaya_asuransi_real;

      $("#accounting_total_biaya").empty();
      var row = rubah(total_biaya);
      $("#accounting_total_biaya").append(row);

      total_biaya_real = total_biaya;
      total_pendapatan_usaha()

    }

    function total_pendapatan_usaha(){
      var total_pendapatan_usaha = laba_kotor_real-total_biaya_real;

      $("#accounting_total_pendapatan_usaha").empty();
      var row = rubah(total_pendapatan_usaha);
      $("#accounting_total_pendapatan_usaha").append(row);

      total_pendapatan_usaha_real = total_pendapatan_usaha;
      denda();
    }
    /** Biaya */

    /** Pendapatan lainya */
    function denda(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/denda'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          $("#denda").empty();
          if(data[0].nominal == null){
            var nominal = 0;
          }else{
            var nominal = data[0].nominal*1;
          }
          var row = rubah(nominal);
          $("#denda").append(row);
          denda_real = nominal;
          pendapatan_lainya();
        }
      });
    }

    function pendapatan_lainya(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/pendapatan_lainya'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          $("#pendapatan_lainya").empty();
          if(data[0].nominal == null){
            var nominal = 0;
          }else{
            var nominal = data[0].nominal*1;
          }
          var row = rubah(nominal);
          $("#pendapatan_lainya").append(row);
          pendapatan_lainya_real = nominal;
          total_pendapatan_lainya();
        }
      });
    }

    function total_pendapatan_lainya(){
      var total_pendapatan_lainya = denda_real+pendapatan_lainya_real;

      $("#accounting_total_pendapatan_lainya").empty();
      var row = rubah(total_pendapatan_lainya);
      $("#accounting_total_pendapatan_lainya").append(row);

      total_pendapatan_lainya_real = total_pendapatan_lainya;
      biaya_lainya();
    }
    /** Pendapatan lainya */

    /** Biaya Lainya */
    function biaya_lainya(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/biaya_lainya'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          $("#biaya_lainya").empty();
          if(data[0].nominal == null){
            var nominal = 0;
          }else{
            var nominal = data[0].nominal*1;
          }
          var row = rubah(nominal);
          $("#biaya_lainya").append(row);
          biaya_lainya_real = nominal;
          total_biaya_lainya();
        }
      });
    }

    function total_biaya_lainya(){
      var total_biaya_lainya = biaya_lainya_real;

      $("#total_biaya_lainya").empty();
      var row = rubah(total_biaya_lainya);
      $("#total_biaya_lainya").append(row);

      total_biaya_lainya_real = total_biaya_lainya;
      total_pendapatan_diluar_usaha();
    }

    function total_pendapatan_diluar_usaha(){
      var total_pendapatan_diluar_usaha = total_pendapatan_lainya_real-total_biaya_lainya_real;

      $("#total_pendapatan_diluar_usaha").empty();
      var row = rubah(total_pendapatan_diluar_usaha);
      $("#total_pendapatan_diluar_usaha").append(row);

      total_pendapatan_diluar_usaha_real = total_pendapatan_diluar_usaha;
      laba_rugi_bersih();
    }
    /** Biaya Lainya */

    /** Laba Rugi Bersih */
    function laba_rugi_bersih(){
      var laba_rugi_bersih = total_pendapatan_usaha_real-total_pendapatan_diluar_usaha_real;

      $("#laba_rugi_bersih").empty();
      var row = rubah(laba_rugi_bersih);
      $("#laba_rugi_bersih").append(row);

      laba_rugi_bersih_real = laba_rugi_bersih;
      estimated_gross_profit()
    }
    /** Laba Rugi Bersih */
  /** Monitor Accounting */

  /** Estimated Gross Profit */
    function estimated_gross_profit(){
      var tanggal_awal = $("#tanggal_awal").val();
      var tanggal_akhir = $("#tanggal_akhir").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('laporan/estimated_gross_profit'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal_awal: tanggal_awal,
                      tanggal_akhir: tanggal_akhir
                    },
        success   : function(data){
          console.log(data)
          $("#estimated_gross_profit").empty();
          var row = rubah(data);
          $("#estimated_gross_profit").append(row);
          No_Loading();
        }
      });
    }
  /** Estimated Gross Profit */

  /** Biaya Tambahan */
    function Aktif(){
      $('#jenis_biaya').attr('disabled', false);
      $('#nominal').attr('disabled', false);
      $('#keterangan').attr('disabled', false);
      $('#jenis').attr('disabled', false);
    }

    $('#jenis').change(function() {
      $('#button_submit').attr('disabled', false);
    });

    $("#button_reset").click(function(){
      Refresh();
    })

    $("#button_submit").click(function(){
      Loading_tb();
      kas();
    })

    function Loading_tb(){
      $("#Loading_tb").empty();
      var button_loading = '<i class="fa fa fa-spinner fa-spin"></i> Loading';
      $("#Loading_tb").append(button_loading);
    }

    function Refresh(){
      location.reload();
    }

    function kas(){
      var id_kas = $("#id_kas").val();
      var tanggal = $("#tanggal").val();
      var tujuan = $("#tujuan").val();
      var account_transaksi = $("#jenis_biaya").val();
      var tipe = $("#tipe").val();
      var jenis = $("#jenis").val();
      var nominal = $("#nominal").val();
      var keterangan = $("#keterangan").val();
      var id_file = $("#id_file").val();
      var tanggal_bikin = $("#tanggal_bikin").val();

      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('kasharian/simpan_kas'); ?>",
        dataType  : "JSON",
        data      : {
                      id_kas: id_kas,
                      tanggal: tanggal,
                      tujuan: tujuan,
                      account_transaksi: account_transaksi,
                      tipe: tipe,
                      jenis: jenis,
                      nominal: nominal,
                      keterangan: keterangan,
                      id_file: id_file,
                      tanggal_bikin: tanggal_bikin
                    },
        success   : function(data){
          swal({
            title: "Simpan Kas Berhasil !",
            type: "success",
            confirmButtonColor: "#2C3FF9",
            showCancelButton: false,
            confirmButtonText: "OK",
            closeOnConfirm: true
          }, function(isConfirm) {              
            Refresh()
          });
        }
      });
    }
  /** Biaya Tambahan */
</script>