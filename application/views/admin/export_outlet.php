<h4>Data Outlet</h4>
<table border="1" cellpadding="8">
<tr>
  <th>ID OUTLET</th>
  <th>NAMA OUTLET</th>
  <th>KECAMATAN</th>
  <th>KABUPATEN</th>
  <th>ALAMAT</th>
  <th>LATITUDE</th>
  <th>LONGITUDE</th>
  <th>NAMA PEMILIK</th>
  <th>TELEPON</th>
  <th>WHATSAPP</th>
  <th>TANGGAL MASUK</th>
  <th>TIPE OUTLET</th>
  <th>JUMLAH PEGAWAI</th>
  <th>FASILITAS</th>
  <th>SUPPLIER</th>
  <th>RUTE</th>
  <th>TIPE PEMBELIAN</th>
  <th>NAMA SALESMAN</th>
  <th>STATUS PROGRAM</th>
  <th>FOTO OUTLET</th>
  <th>FOTO STOKAWAL</th>
  <th>FOTO KONTRAK</th>
  <th>FOTO KONTRAK TEMPO</th>
</tr>
<?php
if( ! empty($outlet)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($outlet as $data){ // Lakukan looping pada variabel siswa dari controller
    echo "<tr>";
    echo "<td>".$data->id_outlet."</td>";
    echo "<td>".$data->nama_outlet."</td>";
    echo "<td>".$data->kecamatan."</td>";
    echo "<td>".$data->kabupaten."</td>";
    echo "<td>".$data->alamat."</td>";
    echo "<td>".$data->latitude."</td>";
    echo "<td>".$data->longitude."</td>";
    echo "<td>".$data->nama_pemilik."</td>";
    echo "<td>".$data->telepon."</td>";
    echo "<td>".$data->ada_whatsapp."</td>";
    echo "<td>".$data->tanggal_lahir."</td>";
    echo "<td>".$data->tipe_outlet."</td>";
    echo "<td>".$data->jumlah_pegawai."</td>";
    echo "<td>".$data->fasilitas."</td>";
    echo "<td>".$data->supplier."</td>";
    echo "<td>".$data->rute."</td>";
    echo "<td>".$data->tipe_pembelian."</td>";
    echo "<td>".$data->nama_salesman."</td>";
    echo "<td>".$data->status_program."</td>";
    echo "<td>https://drive.google.com/file/d/".$data->foto_outlet."/view</td>";
    echo "<td>https://drive.google.com/file/d/".$data->foto_stokawal."/view</td>";
    echo "<td>https://drive.google.com/file/d/".$data->foto_kontrak."/view</td>";
    echo "<td>https://drive.google.com/file/d/".$data->foto_kontrak_tempo."/view</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='23'>Data tidak ada</td></tr>";
}
?>
</table>