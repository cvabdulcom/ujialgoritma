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
  $id_outlet = $this->input->get('id_outlet');
  $outlet = $this->db->query("SELECT * FROM tbl_outlet WHERE id_outlet='$id_outlet'");
  $total = $this->db->query("SELECT SUM(jumlah) AS jumlah FROM tbl_stokoutlet_detail WHERE id_outlet='$id_outlet'");
?>

<table width="100%" class="header">
  <tr>
    <td><font><strong>PORTALINDO</strong></font></td>
    <td>&nbsp;</td>
    <td>Nama Outlet : <?php echo $outlet->row()->nama_outlet; ?></td>
  </tr>
  <tr>
    <td>Jl. Raya Solo Jogja No. 4 Klaten</td>
    <td><font><strong>SJ STOK OUTLET</strong></font></td>
    <td>Alamat : <?php echo $outlet->row()->alamat; ?></td>
  </tr>
  <tr>
     <td>085228403243</td>
     <td><?php echo date('d/m/Y'); ?></td>
     <td>ID : <?php echo $outlet->row()->id_outlet; ?></td>
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
                <tr style="border-collapse: collapse; border: 0px solid black;">
                <th style="border-collapse: collapse; border: 0px solid black;">No</th>
                <th style="border-collapse: collapse; border: 0px solid black;">Nama Barang</th>
                <th style="border-collapse: collapse; border: 0px solid black;">Jumlah</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $no=0;
                foreach($stokoutlet->result_array() as $tampil):
                  $no++;
                  $nama_produk = $tampil['nama_produk'];
                  $jumlah = $tampil['jumlah'];                  
              ?>
              <tr style="border-collapse: collapse; border: 1px solid black; border-bottom: none; border-left: none; border-right: none;">
                <td width="5" align="center" style="border-collapse: collapse; border: 0px solid black;"><?php echo $no; ?></td>
                <td style="border-collapse: collapse; border: 0px solid black;">&nbsp;&nbsp;<?php echo $nama_produk; ?></td>
                <td align="center" style="border-collapse: collapse; border: 0px solid black;"><?php echo $jumlah; ?> pcs</td>
              </tr>
              <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr style="border-collapse: collapse; border: 1px solid black; border-bottom: none; border-left: none; border-right: none;">
                  <th colspan="2" align="right">Total&nbsp;&nbsp;</th>
                  <th align="center"><?php echo $total->row()->jumlah; ?></th>
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