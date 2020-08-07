<?php
class perubahanstok_model extends CI_Model{
  
  function tarik_stok($id_outlet){
    $hasil = $this->db->query("SELECT tbl_stokoutlet_detail.id_outlet, tbl_produk.nama_produk, tbl_stokoutlet_detail.id_produk, tbl_stokoutlet_detail.jumlah FROM tbl_stokoutlet_detail, tbl_produk WHERE tbl_produk.id_produk = tbl_stokoutlet_detail.id_produk AND tbl_stokoutlet_detail.id_outlet='$id_outlet'");
    return $hasil->result();
  }

  function hapus_stok($id_outlet){
    $hasil = $this->db->query("DELETE FROM tbl_stokoutlet_detail WHERE id_outlet='$id_outlet'");
    return $hasil;
  }

  public function simpan_stok($filter_data){
    $hasil = $this->db->insert_batch('tbl_stokoutlet_detail', $filter_data);
    return $hasil;
  }

  /** Perubahan Stok */
  public function simpan_stok_outlet($filter_data){
    $hasil = $this->db->insert_batch('tbl_stokoutlet', $filter_data);
    return $hasil;
  }

  public function simpan_stok_gudang($filter_data){
    $hasil = $this->db->insert_batch('tbl_stokgudang', $filter_data);
    return $hasil;
  }
  /** Perubahan Stok */

  function show_daftarstokawal(){
    $hasil = $this->db->query("SELECT DISTINCT tbl_stokoutlet_detail.id_outlet, tbl_outlet.nama_outlet FROM tbl_stokoutlet_detail, tbl_outlet WHERE tbl_stokoutlet_detail.id_outlet = tbl_outlet.id_outlet");
    return $hasil;
  }

  function print_stokoutlet(){
    $id_outlet = $this->input->get('id_outlet');
    $hasil = $this->db->query("SELECT tbl_outlet.nama_outlet, tbl_produk.nama_produk, tbl_stokoutlet_detail.id_produk, tbl_stokoutlet_detail.jumlah
      FROM tbl_stokoutlet_detail, tbl_outlet, tbl_produk
      WHERE tbl_stokoutlet_detail.id_outlet = tbl_outlet.id_outlet
      AND tbl_stokoutlet_detail.id_produk = tbl_produk.id_produk
      AND tbl_stokoutlet_detail.id_outlet = '$id_outlet'");
    return $hasil;
  }

}