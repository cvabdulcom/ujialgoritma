<table border="1">
<tr>
  <th>id_produk</th>
  <th>nama_produk</th>
  <th>kemasan</th>
  <th>isi</th>
  <th>harga_beli</th>
  <th>harga_gb_200_dus</th>
  <th>harga_gb_150_dus</th>
  <th>harga_gb_50_dus</th>
  <th>harga_gb_k_50_dus</th>
  <th>harga_jpc_dus</th>
  <th>harga_jpc_botol</th>
  <th>harga_jpt_dus</th>
  <th>harga_jpt_botol</th>
  <th>harga_ky_t_bayar</th>
  <th>harga_ky_r_jual</th>
</tr>
<?php
if( !empty($hargaproduk)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($hargaproduk as $data){ // Lakukan looping pada variabel siswa dari controller
    echo "<tr>";
    echo "<td>".$data->id_produk."</td>";
    echo "<td>".$data->nama_produk."</td>";
    echo "<td>".$data->kemasan."</td>";
    echo "<td>".$data->isi."</td>";
    echo "<td>".$data->harga_beli."</td>";
    echo "<td>".$data->harga_gb_200_dus."</td>";
    echo "<td>".$data->harga_gb_150_dus."</td>";
    echo "<td>".$data->harga_gb_50_dus."</td>";
    echo "<td>".$data->harga_gb_k_50_dus."</td>";
    echo "<td>".$data->harga_jpc_dus."</td>";
    echo "<td>".$data->harga_jpc_botol."</td>";
    echo "<td>".$data->harga_jpt_dus."</td>";
    echo "<td>".$data->harga_jpt_botol."</td>";
    echo "<td>".$data->harga_ky_t_bayar."</td>";
    echo "<td>".$data->harga_ky_r_jual."</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='15'>Data tidak ada</td></tr>";
}
?>
</table>