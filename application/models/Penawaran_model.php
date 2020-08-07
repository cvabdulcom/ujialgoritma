<?php
class Penawaran_model extends CI_Model{

  /** data outlet */
  function search_outlet($nama_outlet){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE tipe_pembelian='B' AND nama_outlet ILIKE '%$nama_outlet%' ORDER BY nama_outlet ASC");
    return $hasil->result();
  }
  /** data outlet */

  /** perubahan */
  function save_perubahan($id_outlet, $tipe_pembelian, $status_program){
    $hasil = $this->db->query("UPDATE tbl_outlet SET tipe_pembelian='$tipe_pembelian', status_program='$status_program' WHERE id_outlet='$id_outlet'");
    return $hasil;
  }
  /** perubahan */

  /** data outlet belum minat */
  function show_belumminat(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE tipe_pembelian='B' AND status_program='BELUM MINAT'");
    return $hasil;
  }
  /** data outlet belum minat */
  
}