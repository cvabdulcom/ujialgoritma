<h4>Data Piutang</h4>
<table border="1" cellpadding="8">
<tr>
  <th>TAGGAL</th>
  <th>NO NOTA PENJUALAN</th>
  <th>TANGGAL JATUH TEMPO</th>
  <th>NOMINAL</th>
  <th>TERBAYAR</th>
  <th>TANGGAL BAYAR</th>
  <th>SISA</th>
  <th>STATUS</th>
</tr>
<?php
if( ! empty($piutang)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($piutang as $data){ // Lakukan looping pada variabel siswa dari controller
    echo "<tr>";
    echo "<td>".$data->tanggal."</td>";
    echo "<td>".$data->no_nota_penjualan."</td>";
    echo "<td>".$data->tanggal_jatuh_tempo."</td>";
    echo "<td>".$data->nominal_nota_penjualan."</td>";
    echo "<td>".$data->terbayar."</td>";
    echo "<td>".$data->tanggal_bayar."</td>";
    echo "<td>".$data->sisa."</td>";
    echo "<td>".$data->status."</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='8'>Data tidak ada</td></tr>";
}
?>
</table>