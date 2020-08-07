<?php
class Radius_model extends CI_Model{
  
  /** MENAMPILKAN DATA PRODUK */
  function show_map(){
    $hasil = $this->db->query("SELECT id_outlet, nama_outlet, kabupaten, latitude, longitude, nama_pemilik, telepon, alamat, tipe_pembelian, status_program
      FROM tbl_outlet");
    return $hasil;
  }

}