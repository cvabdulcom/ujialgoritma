<h4>Data Nota</h4>
<table border="1" cellpadding="8">
<tr>
  <th>TANGGAL</th>
  <th>NO NOTA PENJUALAN</th>
  <th>NAMA OUTLET</th>
  <th>TIPE PEMBELIAN</th>
  <th>STATUS</th>
  <th>TEMPO</th>
  <!-- <th>FILE PENJUALAN</th> -->
  <th>NAMA SALESMAN</th>
  <th>TOTAL</th>
</tr>
<?php
error_reporting(0);
if( !empty($nota)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($nota as $data_nota){ // Lakukan looping pada variabel siswa dari controller
    echo "<tr>";
    echo "<td>".$data_nota->tanggal."</td>";
    echo "<td>".$data_nota->no_nota_penjualan."</td>";
    echo "<td>".$data_nota->nama_outlet."</td>";
    echo "<td>".$data_nota->tipe_pembelian."</td>";
    echo "<td>".$data_nota->status."</td>";
    echo "<td>".
      $tanggal_jatuh_tempo = date("Y-m-d", strtotime("$data_nota->tanggal +$data_nota->tempo days"))      
    ."</td>";
    // echo "<td>https://drive.google.com/file/d/".$data_nota->id_file_penjualan."/view</td>";
    echo "<td>".$data_nota->nama_salesman."</td>";
    echo "<td>".
      $hitung_nominal= $this->db->query("SELECT SUM(subtotal) AS nominal FROM tbl_penjualan WHERE no_nota_penjualan='$data_nota->no_nota_penjualan'");
      $nominal = $hitung_nominal->row()->nominal;
      echo $nominal
    ."</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='14'>Data tidak ada</td></tr>";
}
?>
</table>
<br><br><br>
<h4>Data Penjualan Produk</h4>
<table border="1" cellpadding="8">
<tr bg-color="">
  <th>TANGGAL</th>
  <th>NAMA OUTLET</th>
  <th>NO NOTA PENJUALAN</th>
  <th>NAMA SALESMAN</th>
  <th>RUTE</th>
  <th>ID OUTLET</th>
  <th>ID PRODUK</th>
  <th>SEGMEN</th>
  <th>NAMA PRODUK</th>
  <th>JUMLAH</th>
  <th>HARGA</th>
  <th>TIPE PEMBELIAN</th>
  <th>TEMPO</th>
  <th>STATUS</th>
  <!-- <th>FILE PENJUALAN</th> -->
  <th>SUBTOTAL</th>
</tr>
<?php
if( !empty($penjualan)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($penjualan as $data){ // Lakukan looping pada variabel siswa dari controller
    echo "<tr>";
    echo "<td>".$data->tanggal."</td>";
    echo "<td>".$data->nama_outlet."</td>";
    echo "<td>".$data->no_nota_penjualan."</td>";
    echo "<td>".$data->nama_salesman."</td>";
    echo "<td>".$data->rute."</td>";
    echo "<td>".$data->id_outlet."</td>";
    echo "<td>".$data->id_produk."</td>";
    echo "<td>".$data->segmen."</td>";
    echo "<td>".$data->nama_produk."</td>";
    echo "<td>".$data->jumlah."</td>";
    echo "<td>".$data->harga."</td>";
    echo "<td>".$data->tipe_pembelian."</td>";
    echo "<td>".$data->tempo."</td>";
    echo "<td>".$data->status."</td>";
    // echo "<td>https://drive.google.com/file/d/".$data->id_file_penjualan."/view</td>";
    echo "<td>".$data->subtotal."</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='14'>Data tidak ada</td></tr>";
}
?>
</table>