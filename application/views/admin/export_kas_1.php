<h4>Data Kas 1</h4>
<table border="1" cellpadding="8">
<tr>
  <th>ID KAS</th>
  <th>TANGGAL</th>
  <th>TUJUAN</th>
  <th>ACCOUNT TRANSAKSI</th>
  <th>TIPE</th>
  <th>JENIS</th>
  <th>NOMINAL</th>
  <th>KETERANGAN</th>
  <th>FILE</th>
</tr>
<?php
if( ! empty($kas)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($kas as $data){ // Lakukan looping pada variabel siswa dari controller
    echo "<tr>";
    echo "<td>".$data->id_kas."</td>";
    echo "<td>".$data->tanggal."</td>";
    echo "<td>".$data->tujuan."</td>";
    echo "<td>".$data->account_transaksi."</td>";
    echo "<td>".$data->tipe."</td>";
    echo "<td>".$data->jenis."</td>";
    echo "<td>".$data->nominal."</td>";
    echo "<td>".$data->keterangan."</td>";
    echo "<td>https://drive.google.com/file/d/".$data->id_file."/view</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='9'>Data tidak ada</td></tr>";
}
?>
</table>