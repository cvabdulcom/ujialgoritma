<?php
class Profiling_model extends CI_Model{
  
  /** MENAMPILKAN DATA PRODUK */
  function show_cetak(){
    $id_outlet = $this->input->post('id_outlet');
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE id_outlet='$id_outlet'");
    return $hasil;
  }

  function show_stokawal(){
    $id_outlet = $this->input->post('id_outlet');
    $hasil = $this->db->query("SELECT tbl_stokoutlet_detail.id_outlet,
        tbl_stokoutlet_detail.id_produk,
        tbl_stokoutlet_detail.jumlah,
        tbl_produk.nama_produk,
        tbl_produk.harga_ky_t_bayar
      FROM tbl_stokoutlet_detail, tbl_produk
      WHERE tbl_stokoutlet_detail.id_produk = tbl_produk.id_produk
      AND tbl_stokoutlet_detail.id_outlet = '$id_outlet'");
    return $hasil;
  }

}