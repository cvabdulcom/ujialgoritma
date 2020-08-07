<h4>Data Pembelian</h4>
<table border="1" cellpadding="8">
<tr>
  <th>TAGGAL</th>
  <th>NO NOTA PEMBELIAN</th>
  <th>ID PRODUK</th>
  <th>NAMA PRODUK</th>
  <th>JUMLAH</th>
  <th>HARGA BELI</th>
  <th>TEMPO</th>
  <th>STATUS</th>
  <th>SUPPLIER</th>
  <th>ID FILE PEMBELIAN</th>
  <th>SUBTOTAL</th>
</tr>
<?php
if( ! empty($pembelian)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($pembelian as $data){ // Lakukan looping pada variabel siswa dari controller
    echo "<tr>";
    echo "<td>".$data->tanggal."</td>";
    echo "<td>".$data->no_nota_pembelian."</td>";
    echo "<td>".$data->id_produk."</td>";
    echo "<td>".$data->nama_produk."</td>";
    echo "<td>".$data->jumlah."</td>";
    echo "<td>".$data->harga_beli."</td>";
    echo "<td>".$data->tempo."</td>";
    echo "<td>".$data->status."</td>";
    echo "<td>".$data->supplier."</td>";
    echo "<td>".$data->id_file_pembelian."</td>";
    echo "<td>".$data->subtotal."</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='11'>Data tidak ada</td></tr>";
}
?>
</table>