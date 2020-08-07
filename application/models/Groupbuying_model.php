<?php
class Groupbuying_model extends CI_Model{

  /** SIMPAN DATA PRODUK */
  function save_groupbuying($id_outlet, $nama_outlet, $kecamatan, $kota_kabupaten, $latitude, $longitude, $nama_pemilik, $tipe_outlet, $fasilitas, $supplier, $telepon, $whatsapp, $tanggal_lahir, $jumlah_pegawai, $alamat, $rute, $tipe_pembelian, $status_program, $foto_outlet, $foto_stokawal, $foto_kontrak, $foto_kontrak_tempo, $nama_salesman){
    $hasil = $this->db->query("INSERT INTO tbl_outlet(id_outlet, nama_outlet, kecamatan, kabupaten, latitude, longitude, nama_pemilik, tipe_outlet, fasilitas, supplier, telepon, ada_whatsapp, tanggal_lahir, jumlah_pegawai, alamat, rute, tipe_pembelian, status_program, foto_outlet, foto_stokawal, foto_kontrak, foto_kontrak_tempo, nama_salesman)
    VALUES('$id_outlet', '$nama_outlet', '$kecamatan', '$kota_kabupaten', '$latitude', '$longitude', '$nama_pemilik', '$tipe_outlet', '$fasilitas', '$supplier', '$telepon', '$whatsapp', '$tanggal_lahir', '$jumlah_pegawai', '$alamat', '$rute', '$tipe_pembelian', '$status_program', '$foto_outlet', '$foto_stokawal', '$foto_kontrak', '$foto_kontrak_tempo', '$nama_salesman')");
    return $hasil;
  }

  function rekap(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE tipe_pembelian='G' AND status_program='GB CASH'");
    return $hasil;
  }

}