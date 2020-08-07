<script>window.print()</script>
<style>
  .margin {
    margin-top: -10px;;
    margin-right: 25px;
    margin-left: 25px;
  }
  .header {
    font-size: 13px;
  }
  .produk {
    font-size: 12px;
  }  
</style>
<div class="margin">
<font face="tahoma">
<!-- Content Wrapper. Contains page content -->
<?php
  foreach($suratjalan->result() as $tampil)
    $nota = $tampil->no_nota;
	$tanggal = $tampil->tanggal;

  $outlet = $this->db->query("SELECT DISTINCT tbl_outlet.nama_outlet, tbl_outlet.alamat, tbl_outlet.kecamatan, tbl_outlet.kabupaten, tbl_outlet.rute, tbl_outlet.tipe_pembelian, tbl_outlet.nama_salesman FROM tbl_outlet, tbl_penjualan WHERE tbl_outlet.id_outlet = tbl_penjualan.id_outlet AND tbl_penjualan.no_nota_penjualan='$nota'");
?>

<table width="100%" class="header">
  <tr>
    <td><font><strong>PT. GELORA PUTRA PERKASA</strong></font></td>
    <td>&nbsp;</td>
    <td>Nama Outlet : <?php echo $outlet->row()->nama_outlet; ?></td>
  </tr>
  <tr>
    <td>Jl. Gerilan, Srowo II, Progowati, Magelang</td>
    <td><font><strong>SURAT JALAN</strong></font></td>
    <td>Alamat : <?php echo $outlet->row()->alamat; ?></td>
  </tr>
  <tr>
     <td>081391523108</td>
     <td><?php $new = strtotime($tanggal); $newDate = date('d/m/Y', $new); echo $newDate; ?></td>
     <td>No : <?php echo $this->input->get('no_suratjalan'); ?></td>
  </tr>
</table>
<br>
<div class="content-wrapper" class="produk">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <?php
            foreach($suratjalan->result() as $tampilsj)
              $no_suratjalan = $tampilsj->no_suratjalan;
              $no_nota = $tampilsj->no_nota;
              $tanggal = $tampilsj->tanggal;
              $kendaraan = $tampilsj->kendaraan;
              $no_plat = $tampilsj->no_plat;
              $nama_pengirim = $tampilsj->nama_pengirim;
              $nama_pengepack = $tampilsj->nama_pengepack;
              $nama_penerima = $tampilsj->nama_penerima;
			  //$satuan = $tampilsj->satuan;
              //$kemasan = $tampilsj->kemasan;
          ?>
          <!-- /.box-header -->
          <div class="box-body">
          <table style="border-collapse: collapse; border: 0px solid black;" width="100%" class="produk">
              <thead>
                <tr>
                  <th style="border-collapse: collapse; border: 0px solid black;">No</th>
                  <th style="border-collapse: collapse; border: 0px solid black;">Nama Barang</th>
                  <th style="border-collapse: collapse; border: 0px solid black;">Jumlah</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $no=0;
                foreach($suratjalan->result_array() as $tampil):
                  $no++;
                  $nama_produk = $tampil['nama_produk'];
                  $jumlah = $tampil['jumlah'];
				  $no_nota = $tampil['no_nota'];
				  $id_produk = $tampil['id_produk'];
              ?>
              <tr style="border-collapse: collapse; border: 1px solid black; border-bottom: none; border-left: none; border-right: none;">
                <td width="5" align="center" style="border-collapse: collapse; border: 0px solid black;"><?php echo $no; ?></td>
                <td style="border-collapse: collapse; border: 0px solid black;">&nbsp;&nbsp;<?php echo $nama_produk; ?></td>
                <td align="center" style="border-collapse: collapse; border: 0px solid black;">
					<?php 
						$cek_satuan = $this->db->query("SELECT satuan, kemasan FROM tbl_penjualan WHERE no_nota_penjualan='$no_nota' AND id_produk='$id_produk'");
						$satuan = $cek_satuan->row()->satuan;
						$kemasan = $cek_satuan->row()->kemasan;
						
						if($satuan === "dus"){ echo $jumlah/$kemasan; }else{echo $jumlah;}
						echo " ";
						echo $satuan;
					?>
				</td>
              </tr>
              <?php endforeach; ?>
              </tbody>
              <tfoot>
                <?php 
                  //$no_suratjalan1 = $this->input->get('no_suratjalan');
                  //$hasil = $this->db->query("SELECT SUM(tbl_penjualan.jumlah) as totalan
                  //  FROM tbl_suratjalan, tbl_penjualan
                  //  WHERE tbl_penjualan.no_nota_penjualan = tbl_suratjalan.no_nota
                  //  AND no_suratjalan='$no_suratjalan1'");
                  //$total = $hasil->row()->totalan;
                ?>
                 <tr style="border-collapse: collapse; border: 1px solid black; border-bottom: none; border-left: none; border-right: none;">
                  <!--<th colspan="2" align="right">Total&nbsp;&nbsp;</th>
                  <th align="center"><?php //echo $total; ?></th> -->
                </tr>
              </tfoot>
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
  <table width="100%" class="header">
    <tr>
      <td align="center">PEMBELI</td>
      <td align="center"><br><br><br></td>
      <td align="center">PENJUAL</td>
    </tr>
    <tr>
      <td align="center">__________</td>
      <td align="center">&nbsp;</td>
      <td align="center">__________</td>
    </tr>
  </table>
</font>
</div>