<h4>Data Stok Outlet</h4>
<table border="1" cellpadding="8">
<tr>
  <th>ID OUTLET</th>
  <th>TANGGAL</th>
  <th>ID PRODUK</th>
  <th>MASUK/KELUAR</th>
  <th>JUMLAH</th>
  <th>NO ACTION TRACKING</th>
  <th>FILE</th>
</tr>
<?php
if( !empty($stokoutlet)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($stokoutlet as $data){ // Lakukan looping pada variabel siswa dari controller
    echo "<tr>";
    echo "<td>".$data->id_outlet."</td>";
    echo "<td>".$data->tanggal."</td>";
    echo "<td>".$data->id_produk."</td>";
    echo "<td>".$data->masuk_keluar."</td>";
    echo "<td>".$data->jumlah."</td>";
    echo "<td>".$data->no_actiontracking."</td>";
    echo "<td>https://drive.google.com/file/d/".$data->id_file_actiontracking."/view</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='7'>Data tidak ada</td></tr>";
}
?>
</table>