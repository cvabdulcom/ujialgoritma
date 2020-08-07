<h4>Data Stok Konsinyasi</h4>
<table border="1" cellpadding="8">
<tr>
  <th>ID OUTLET</th>
  <th>ID PRODUK</th>
  <th>JUMLAH</th>
</tr>
<?php
if( !empty($stokkonsinyasi)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($stokkonsinyasi as $data){ // Lakukan looping pada variabel siswa dari controller
    echo "<tr>";
    echo "<td>".$data->id_outlet."</td>";
    echo "<td>".$data->id_produk."</td>";
    echo "<td>".$data->jumlah."</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='7'>Data tidak ada</td></tr>";
}
?>
</table>