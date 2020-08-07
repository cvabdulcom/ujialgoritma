<h4>Data Kas 2</h4>
<table border="1" cellpadding="8">
<tr>
  <th>ID KAS</th>
  <th>TANGGAL</th>
  <th>TOTAL UANG MASUK CASH</th>
  <th>TOTAL UANG MASUK BANK</th>
  <th>TOTAL UANG MASUK KELUAR CASH</th>
  <th>TOTAL UANG MASUK KELUAR BANK</th>
  <th>SETOR</th>
  <th>BANK</th>
  <th>FILE</th>
</tr>
<?php
if( ! empty($kas)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($kas as $data){ // Lakukan looping pada variabel siswa dari controller
    echo "<tr>";
    echo "<td>".$data->id_kas."</td>";
    echo "<td>".$data->tanggal."</td>";
    echo "<td>".$data->total_uang_masuk_cash."</td>";
    echo "<td>".$data->total_uang_masuk_bank."</td>";
    echo "<td>".$data->total_uang_keluar_cash."</td>";
    echo "<td>".$data->total_uang_keluar_bank."</td>";
    echo "<td>".$data->setor."</td>";
    echo "<td>".$data->bank."</td>";
    echo "<td>https://drive.google.com/file/d/".$data->id_file."/view</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='9'>Data tidak ada</td></tr>";
}
?>
</table>