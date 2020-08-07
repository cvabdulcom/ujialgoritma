<table border="1">
<tr>
  <th>Id Outlet</th>
  <th>Nama Outlet</th>
  <th>Tanggal Diberi</th>
  <th>Tanggal Dicabut</th>
</tr>
<?php
if( !empty($diskon_riwayat)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($diskon_riwayat as $data){ // Lakukan looping pada variabel siswa dari controller
    echo "<tr>";
    echo "<td>".$data->id_outlet."</td>";
    echo "<td>".$data->nama_outlet."</td>";
    echo "<td>".$data->tanggal_diberi."</td>";
    echo "<td>".$data->tanggal_dicabut."</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='15'>Data tidak ada</td></tr>";
}
?>
</table>