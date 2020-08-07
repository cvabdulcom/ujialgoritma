<h4>Data Surat Jalan</h4>
<table border="1" cellpadding="8">
<tr>
  <th>NO SURAT JALAN</th>
  <th>NO NOTA PENJUALAN</th>
  <th>TANGGAL</th>
  <th>KENDARAAN</th>
  <th>NO PLAT</th>
  <th>NAMA PENGIRIM</th>
  <th>NAMA ADMIN</th>
</tr>
<?php
if( !empty($suratjalan)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($suratjalan as $data){ // Lakukan looping pada variabel siswa dari controller
    echo "<tr>";
    echo "<td>".$data->no_suratjalan."</td>";
    echo "<td>".$data->no_nota."</td>";
    echo "<td>".$data->tanggal."</td>";
    echo "<td>".$data->kendaraan."</td>";
    echo "<td>".$data->no_plat."</td>";
    echo "<td>".$data->nama_pengirim."</td>";
    echo "<td>".$data->nama_admin."</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='8'>Data tidak ada</td></tr>";
}
?>
</table>