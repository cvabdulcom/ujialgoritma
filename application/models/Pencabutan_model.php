<?php
class Pencabutan_model extends CI_Model{

  /** data outlet */
  function search_outlet($nama_outlet){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE nama_outlet ILIKE '%$nama_outlet%' ORDER BY nama_outlet ASC");
    return $hasil->result();
  }
  /** data outlet */

  function get_stokoutlet($id_outlet){
    $hasil = $this->db->query("SELECT tbl_stokoutlet_detail.id_outlet,
        tbl_stokoutlet_detail.id_produk,
        tbl_stokoutlet_detail.jumlah,
        tbl_outlet.nama_outlet,
        tbl_produk.nama_produk
      FROM tbl_stokoutlet_detail, tbl_outlet, tbl_produk
      WHERE tbl_stokoutlet_detail.id_outlet = tbl_outlet.id_outlet
      AND tbl_stokoutlet_detail.id_produk = tbl_produk.id_produk
      AND tbl_stokoutlet_detail.id_outlet = '$id_outlet'");
    return $hasil->result();
  }

  function simpan_stokoutlet($filter_data){
    $hasil = $this->db->insert_batch('tbl_stokoutlet', $filter_data);
    return $hasil;
  }

  function simpan_stokgudang($filter_data){
    $hasil = $this->db->insert_batch('tbl_stokgudang', $filter_data);
    return $hasil;
  }

  function simpan_stokoutlet_detail($id_outlet){
    $hasil = $this->db->query("DELETE FROM tbl_stokoutlet_detail WHERE id_outlet='$id_outlet'");
    return $hasil;
  }

  function blacklist($id_outlet){
    $hasil = $this->db->query("UPDATE tbl_outlet SET status_program='BLACKLIST' WHERE id_outlet='$id_outlet'");
    return $hasil;
  }

}