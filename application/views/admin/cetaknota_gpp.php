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
  foreach($outlet->result() as $tampiloutlet)
    $nama_outlet = $tampiloutlet->nama_outlet;
    $alamat = $tampiloutlet->alamat;
    $kecamatan = $tampiloutlet->kecamatan;
    $kabupaten = $tampiloutlet->kabupaten;
    $rute = $tampiloutlet->rute;
    $status_program = $tampiloutlet->status_program;
    $nama_salesman = $tampiloutlet->nama_salesman;
?>

<?php
  foreach($nota->result() as $tampiltanggal)
    $tanggalnota = $tampiltanggal->tanggal;
    $tipe_pembelian_nota = $tampiltanggal->tipe_pembelian;
    $nama_salesman_nota = $tampiltanggal->nama_salesman;
?>
<table width="100%" class="header">
  <tr>
    <td><font><strong>PT. GELORA PUTRA PERKASA</strong></font></td>
    <td><font>No : <?php echo $this->input->get('no_nota_penjualan'); ?></font></td>
    <td>Kepada : <?php echo $nama_outlet; ?></td>
  </tr>
  <tr>
    <td>Jl. Lingkar Selatan Kewayuhan Kebumen</td>
    <td>
		<font><?php $new = strtotime($tanggalnota); $newDate = date('d/m/Y', $new); echo $newDate; ?></font> -
		<?php
			$nonota = $this->input->get('no_nota_penjualan');
			$cek_piutang = $this->db->query("SELECT DISTINCT status
				FROM tbl_piutang 
				WHERE no_nota_penjualan = '$nonota'
				ORDER BY status DESC
				LIMIT 1");
			$status_piutang = $cek_piutang->row()->status;
			echo $status_piutang;
		?>
	</td>
    <td>Alamat : <?php $num_char = 30; echo substr($alamat, 0, $num_char) . '.'; ?></td>
  </tr>
  <tr>
     <td>081391523108</td>
     <td>
		<?php						
			echo $tipe_pembelian_nota; echo " - "; echo $nama_salesman_nota;
		?>
	 </td>
     <td>Rute : <?php echo $rute; ?></td>
  </tr>
</table>
<br>
<div class="content-wrapper" class="produk">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
            <table style="border-collapse: collapse; border: 0px solid black;" width="100%" class="produk">
                <thead>
                  <tr>
                    <th style="border-collapse: collapse; border: 0px solid black;">No</th>
                    <th style="border-collapse: collapse; border: 0px solid black;">Nama Barang</th>
                    <th style="border-collapse: collapse; border: 0px solid black;" align="right">Harga&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th style="border-collapse: collapse; border: 0px solid black;">Jumlah</th>
                    <th style="border-collapse: collapse; border: 0px solid black;" align="right">Subtotal</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=0;
                  foreach($nota->result_array() as $tampil):
                    $no++;
                    $tanggal = $tampil['tanggal'];
                    $no_nota_penjualan = $tampil['no_nota_penjualan'];
                    $nama_salesman = $tampil['nama_salesman'];
                    $rute = $tampil['rute'];
                    $id_outlet = $tampil['id_outlet'];
                    $id_produk = $tampil['id_produk'];
                    $jumlah = $tampil['jumlah'];
                    $harga = $tampil['harga'];
                    $tipe_pembelian = $tampil['tipe_pembelian'];
                    $tempo = $tampil['tempo'];
                    $status = $tampil['status'];
                    $id_file_penjualan = $tampil['id_file_penjualan'];
                    $subtotal = $tampil['subtotal'];
                    $nama_produk = $tampil['nama_produk'];
					$satuan = $tampil['satuan'];
                    $kemasan = $tampil['kemasan'];
                ?>
                <tr style="border-collapse: collapse; border: 1px solid black; border-bottom: none; border-left: none; border-right: none;">
                  <td width="5" align="center" style="border-collapse: collapse; border: 0px solid black;"><?php echo $no; ?></td>
                  <td style="border-collapse: collapse; border: 0px solid black;">&nbsp;&nbsp;<?php echo $nama_produk; ?></td>
                  <td align="right" style="border-collapse: collapse; border: 0px solid black;">&nbsp;&nbsp;<?php echo number_format($harga, 0, ',', '.'); ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td align="center" style="border-collapse: collapse; border: 0px solid black;">&nbsp;&nbsp;<?php if($satuan === "dus"){ echo $jumlah/$kemasan; }else{echo $jumlah;} ?> <?php echo $satuan; ?></td>
                  <td align="right" style="border-collapse: collapse; border: 0px solid black;">&nbsp;&nbsp;<?php echo number_format($subtotal, 0, ',', '.'); ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <?php 
                    $no_nota_penjualan1 = $this->input->get('no_nota_penjualan');
                    $hasil = $this->db->query("SELECT SUM(tbl_penjualan.subtotal) as totalan
                    FROM tbl_penjualan, tbl_outlet WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet AND no_nota_penjualan='$no_nota_penjualan'");
                    $total = $hasil->row()->totalan;
                  ?>
                  <tr style="border-collapse: collapse; border: 1px solid black; border-bottom: none; border-left: none; border-right: none;">
                    <td colspan="4" align="right">Total Harga&nbsp;&nbsp;</td>
                    <td align="right">&nbsp;&nbsp;Rp. <?php echo number_format($total, 0, ',', '.'); ?></td>
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