<script>
	$(document).ready(function(){
		// Sembunyikan alert validasi kosong
		$("#kosong").hide();
	});
</script>
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
        <p><?php echo $this->session->userdata('nama_oliku'); ?></p>
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
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Harga
      <small>Import</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href='<?php echo base_url('hargaproduk'); ?>'><button type="button" class="btn btn-xs btn-primary"><i class="fa fa-backward"></i> Back</button></a></li>
      <li><button type="button" class="btn btn-xs btn-info" data-toggle="modal" data-target="#SIMPAN"><i class="fa fa-save"></i> Save</button></li>
    </ol>
  </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">
            <?php
              if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form 
                if(isset($upload_error)){ // Jika proses upload gagal
                  echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
                  die; // stop skrip
                }
                
                // Buat sebuah tag form untuk proses import data ke database
                echo "<form method='post' action='".base_url("hargaproduk/import")."'>";
                
                // Buat sebuah div untuk alert validasi kosong
                echo "<div style='color: red;' id='kosong'>
                <strong>Peringatan :</strong> Ada cell data yang belum terisi sebanyak : 0<span id='jumlah_kosong'></span> !
                </div>";
                
                echo "<div class='table-responsive'>";
                echo "<table class='table table-hover'>
                <thead>
                <tr>
                  <th class='text-center'>ID Produk</th>
                  <th class='text-center'>Nama Produk</th>
                  <th class='text-center'>Isi</th>
                  <th class='text-center'>Kemasan</th>
                  <th class='text-center'>Harga Beli</th>
                  <th class='text-center'>Harga GB 200 Dus</th>
                  <th class='text-center'>Harga GB 150 Dus</th>
                  <th class='text-center'>Harga GB 50 Dus</th>
                  <th class='text-center'>Harga GB >50 Dus</th>
                  <th class='text-center'>Harga JP Cash Dus</th>
                  <th class='text-center'>Harga JP Cash Botol</th>
                  <th class='text-center'>Harga JP Tempo Dus</th>
                  <th class='text-center'>Harga JP Tempo Botol</th>
                  <th class='text-center'>Harga KY T Bayar</th>
                  <th class='text-center'>Harga KY R Jual</th>
                </tr>
                </thead>";
                
                $numrow = 1;
                $kosong = 0;
                
                // Lakukan perulangan dari data yang ada di csv
                // $sheet adalah variabel yang dikirim dari controller
                foreach($sheet as $row){ 
                  // START -->
                  // Skrip untuk mengambil value nya
                  $cellIterator = $row->getCellIterator();
                  $cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
                  
                  $get = array(); // Valuenya akan di simpan kedalam array,dimulai dari index ke 0
                  foreach ($cellIterator as $cell) {
                    array_push($get, $cell->getValue()); // Menambahkan value ke variabel array $get
                  }
                  // <-- END
                  
                  // Ambil data value yang telah di ambil dan dimasukkan ke variabel $get
                  $id_produk = $get[0];
                  $nama_produk = $get[1]; 
                  $kemasan = $get[2]; 
                  $isi = $get[3];
                  $harga_beli = $get[4];
                  $harga_gb_200_dus = $get[5]; 
                  $harga_gb_150_dus = $get[6]; 
                  $harga_gb_50_dus = $get[7]; 
                  $harga_gb_k_50_dus = $get[8]; 
                  $harga_jpc_dus = $get[9]; 
                  $harga_jpc_botol = $get[10]; 
                  $harga_jpt_dus = $get[11]; 
                  $harga_jpt_botol = $get[12]; 
                  $harga_ky_t_bayar = $get[13]; 
                  $harga_ky_r_jual = $get[14];
                  
                  // Cek jika semua data tidak diisi
                  if(empty($id_produk) && empty($nama_produk) && empty($kemasan) && empty($isi) && empty($harga_beli) && empty($harga_gb_200_dus) && empty($harga_gb_150_dus) && empty($harga_gb_50_dus) && empty($harga_gb_k_50_dus) && empty($harga_jpc_dus) && empty($harga_jpc_botol) && empty($harga_jpt_dus) && empty($harga_jpt_botol) && empty($harga_ky_t_bayar) && empty($harga_ky_r_jual))
                    continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
                  
                  // Cek $numrow apakah lebih dari 1
                  // Artinya karena baris pertama adalah nama-nama kolom
                  // Jadi dilewat saja, tidak usah diimport
                  if($numrow > 1){
                    // Validasi apakah semua data telah diisi
                    $id_produk_td = ( ! empty($id_produk))? "" : " style='background: #E07171;'"; 
                    $nama_produk_td = ( ! empty($nama_produk))? "" : " style='background: #E07171;'"; 
                    $kemasan_td = ( ! empty($kemasan))? "" : " style='background: #E07171;'"; 
                    $isi_td = ( ! empty($isi))? "" : " style='background: #E07171;'"; 
                    $harga_beli_td = ( ! empty($harga_beli))? "" : " style='background: #E07171;'";
                    $harga_gb_200_dus_td = ( ! empty($harga_gb_200_dus))? "" : " style='background: #E07171;'";
                    $harga_gb_150_dus_td = ( ! empty($harga_gb_150_dus))? "" : " style='background: #E07171;'";
                    $harga_gb_50_dus_td = ( ! empty($harga_gb_50_dus))? "" : " style='background: #E07171;'";
                    $harga_gb_k_50_dus_td = ( ! empty($harga_gb_k_50_dus))? "" : " style='background: #E07171;'";
                    $harga_jpc_dus_td = ( ! empty($harga_jpc_dus))? "" : " style='background: #E07171;'";
                    $harga_jpc_botol_td = ( ! empty($harga_jpc_botol))? "" : " style='background: #E07171;'";
                    $harga_jpt_dus_td = ( ! empty($harga_jpt_dus))? "" : " style='background: #E07171;'";
                    $harga_jpt_botol_td = ( ! empty($harga_jpt_botol))? "" : " style='background: #E07171;'";
                    $harga_ky_t_bayar_td = ( ! empty($harga_ky_t_bayar))? "" : " style='background: #E07171;'";
                    $harga_ky_r_jual_td = ( ! empty($harga_ky_r_jual))? "" : " style='background: #E07171;'";

                    // Jika salah satu data ada yang kosong
                    if(empty($id_produk) or empty($nama_produk) or empty($kemasan) or empty($isi) or empty($harga_beli) or empty($harga_gb_200_dus) or empty($harga_gb_150_dus) or empty($harga_gb_50_dus) or empty($harga_gb_k_50_dus) or empty($harga_jpc_dus) or empty($harga_jpc_botol) or empty($harga_jpt_dus) or empty($harga_jpt_botol) or empty($harga_ky_t_bayar) or empty($harga_ky_r_jual)){
                      $kosong++; // Tambah 1 variabel $kosong
                    }
                    
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td".$id_produk_td.">".$id_produk."</td>";
                    echo "<td".$nama_produk_td.">".$nama_produk."</td>";
                    echo "<td".$kemasan_td.">".$kemasan."</td>";
                    echo "<td".$isi_td.">".$isi."</td>";
                    echo "<td".$harga_beli_td.">".$harga_beli."</td>";
                    echo "<td".$harga_gb_200_dus_td.">".$harga_gb_200_dus."</td>";
                    echo "<td".$harga_gb_150_dus_td.">".$harga_gb_150_dus."</td>";
                    echo "<td".$harga_gb_50_dus_td.">".$harga_gb_50_dus."</td>";
                    echo "<td".$harga_gb_k_50_dus_td.">".$harga_gb_k_50_dus."</td>";
                    echo "<td".$harga_jpc_dus_td.">".$harga_jpc_dus."</td>";
                    echo "<td".$harga_jpc_botol_td.">".$harga_jpc_botol."</td>";
                    echo "<td".$harga_jpt_dus_td.">".$harga_jpt_dus."</td>";
                    echo "<td".$harga_jpt_botol_td.">".$harga_jpt_botol."</td>";
                    echo "<td".$harga_ky_t_bayar_td.">".$harga_ky_t_bayar."</td>";
                    echo "<td".$harga_ky_r_jual_td.">".$harga_ky_r_jual."</td>";
                    echo "</tr>";
                    echo "</tbody>";
                  }
                  
                  $numrow++; // Tambah 1 setiap kali looping
                }
                
                echo "</table>";
                echo "</div>";
                
                // Cek apakah variabel kosong lebih dari 1
                // Jika lebih dari 1, berarti ada data yang masih kosong
                if($kosong > 0){
                ?>	
                  <script>
                  $(document).ready(function(){
                    // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                    $("#jumlah_kosong").html('<?php echo $kosong; ?>');
                    
                    $("#kosong").show(); // Munculkan alert validasi kosong
                  });
                  </script>
                <?php
                }else{ // Jika semua data sudah diisi
                  echo "<hr>";
                  ?>
                  <script>
                  $(document).ready(function(){
                    tampil_modal_simpan();
                    function tampil_modal_simpan(){
                      $('#SIMPAN').modal('show');
                    }
                  })
                  </script>
                  <?php

                  echo "<div class='modal fade' id='SIMPAN' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                  echo "<div class='modal-dialog modal-sm' role='document'>";
                  echo "<div class='modal-content'>";
                  echo "<div class='modal-body'>";
                  echo "Preview data lengkap, lanjutkan proses ?";
                  echo "</div>";
                  echo "<div class='modal-footer'>";                            
                  echo "<form>";
                  echo "<a href='" .base_url('hargaproduk'). "'><button type='button' class='btn btn-default btn-sm'><i class='fa fa-close'></i> No</button></a>";
                  echo "&nbsp; &nbsp;<button name='import' type='submit' class='btn btn-success btn-sm'><i class='fa fa-check'></i> Yes</button>";
                  echo "</form>";
                  echo "</div>";
                  echo "</div>";
                  echo "</div>";
                  echo "</div>";
                }
                
                echo "</form>";
              }
            ?>
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