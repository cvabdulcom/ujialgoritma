<table>
  <tr>
    <th>No</th>
    <th>ID Harga Produk</th>
    <th>Kode Produk</th>
    <th>Nama Produk</th>
    <th>Jenis</th>
    <th>Merk</th>
    <th>Isi</th>
    <th>Harga</th>
  </tr>
  <?php
    $no=0;
    foreach($harga_aktif->result_array() as $tampil):
      $no++;
      $id_harga_produk = $tampil['id_harga_produk'];
      $kode_produk = $tampil['kode_produk'];
      $nama_produk = $tampil['nama_produk'];
      $jenis = $tampil['jenis'];
      $merk = $tampil['merk'];
      $isi = $tampil['isi'];
      $harga = $tampil['harga'];
  ?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $id_harga_produk; ?></td>
    <td><?php echo $kode_produk; ?></td>
    <td><?php echo $nama_produk; ?></td>
    <td><?php echo $jenis; ?></td>
    <td><?php echo $merk; ?></td>
    <td><?php echo $isi; ?></td>
    <td><?php echo $harga; ?></td>
  </tr>
  <?php endforeach; ?>
</table>