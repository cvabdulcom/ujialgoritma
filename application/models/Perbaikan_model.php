<?php
class Perbaikan_model extends CI_Model{

  /** data outlet */
  function search_outlet($nama_outlet){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE tipe_pembelian!='B' AND nama_outlet ILIKE '%$nama_outlet%' ORDER BY nama_outlet ASC");
    return $hasil->result();
  }
  /** data outlet */

  /** save perbaikan */
  function save_perbaikan($id_outlet, $tipe_pembelian, $status_program, $kecamatan, $kabupaten, $latitude, $longitude, $nama_pemilik, $telepon, $ada_whatsapp, $jumlah_pegawai, $alamat){
    $hasil = $this->db->query("UPDATE tbl_outlet SET tipe_pembelian='$tipe_pembelian', status_program='$status_program', kecamatan='$kecamatan', kabupaten='$kabupaten', latitude='$latitude', longitude='$longitude', nama_pemilik='$nama_pemilik', telepon='$telepon', ada_whatsapp='$ada_whatsapp', jumlah_pegawai='$jumlah_pegawai', alamat='$alamat' WHERE id_outlet='$id_outlet'");
    return $hasil;
  }
  /** save perbaikan */
  
}