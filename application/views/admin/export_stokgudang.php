<h4>Data Stok Gudang</h4>
<table border="1" cellpadding="8">
<tr>
  <th>TANGGAL</th>
  <th>ID PRODUK</th>
  <th>SEGMEN</th>
  <th>NAMA PRODUK</th>
  <th>MASUK/KELUAR</th>
  <th>JUMLAH</th>
  <th>KETERANGAN</th>
  <th>NAMA OUTLET</th>
  <th>TIPE</th>
  <th>NO SURAT JALAN</th>
  <th>FILE</th>
</tr>
<?php
if( !empty($stokgudang)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($stokgudang as $data){ // Lakukan looping pada variabel siswa dari controller
    echo "<tr>";
    echo "<td>".$data->tanggal."</td>";
    echo "<td>".$data->id_produk."</td>";
    echo "<td>".$data->segmen."</td>";
    echo "<td>".$data->nama_produk."</td>";
    echo "<td>".$data->masuk_keluar."</td>";
    echo "<td>".$data->jumlah."</td>";
    echo "<td>".$data->keterangan."</td>";
    echo "<td>";
      $nama_outlet_cek = $this->db->query("SELECT tbl_outlet.nama_outlet FROM tbl_outlet, tbl_penjualan, tbl_suratjalan 
            WHERE tbl_outlet.id_outlet = tbl_penjualan.id_outlet 
            AND tbl_penjualan.no_nota_penjualan = tbl_suratjalan.no_nota 
            AND tbl_suratjalan.no_suratjalan = '$data->no_surat_jalan'
            LIMIT 1;");
      if(empty($nama_outlet_cek->row()->nama_outlet)){
        $cek_sjstok = $this->db->query("SELECT no_nota FROM tbl_suratjalan WHERE no_suratjalan='$data->no_surat_jalan' LIMIT 1");
        if(empty($cek_sjstok->row()->no_nota)){          
          $id_outlet_nih = substr($data->no_surat_jalan,2,-8);
          $cek_nama_nih = $this->db->query("SELECT nama_outlet FROM tbl_outlet WHERE id_outlet='$id_outlet_nih' LIMIT 1");
          if(empty($cek_nama_nih->row()->nama_outlet)){
            echo $data->no_surat_jalan;
          }else{
            echo $cek_nama_nih->row()->nama_outlet;
          }
        }else{
          $id_outlet = substr($cek_sjstok->row()->no_nota,5);
          $cek_nota = $this->db->query("SELECT nama_outlet FROM tbl_outlet WHERE id_outlet='$id_outlet' LIMIT 1");
          if(empty($cek_nota->row()->nama_outlet)){
            $id_ps = substr($data->no_surat_jalan,2,-8);
            $cek_id_ps = $this->db->query("SELECT nama_outlet FROM tbl_outlet WHERE id_outlet='$id_ps' LIMIT 1");
            if(empty($cek_id_ps->row()->nama_outlet)){
              $cek_nomor = substr($data->no_surat_jalan,2,-8);
              echo $cek_nomor;
            }else{
              echo $cek_id_ps->row()->nama_outlet;
            }
          }else{
            echo $cek_nota->row()->nama_outlet;
          }
        }
      }else{
        echo $nama_outlet_cek->row()->nama_outlet;
      }
    echo "</td>";
    echo "<td>";
      $tipe_cek = $this->db->query("SELECT tbl_penjualan.tipe_pembelian
			FROM tbl_penjualan, tbl_suratjalan
			WHERE tbl_penjualan.no_nota_penjualan = tbl_suratjalan.no_nota
			AND tbl_suratjalan.no_suratjalan='$data->no_surat_jalan'
			LIMIT 1;");
      if(empty($tipe_cek->row()->tipe_pembelian)){
      	echo $data->keterangan;
      }else{
      	echo $tipe_cek->row()->tipe_pembelian;
      }
        
    echo "</td>";
    echo "<td>".$data->no_surat_jalan."</td>";
    echo "<td>https://drive.google.com/file/d/".$data->id_file_surat_jalan."/view</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='7'>Data tidak ada</td></tr>";
}
?>
</table>