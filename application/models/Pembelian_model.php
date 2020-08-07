<?php
class Pembelian_model extends CI_Model{
  
  /** data produk */
  function search_produk($nama_produk){
    $hasil = $this->db->query("SELECT * FROM tbl_produk WHERE nama_produk ILIKE '%$nama_produk%' ORDER BY nama_produk ASC");
    return $hasil->result();
  }
  /** data produk */

  /** data nota */
  public function insert_nota($filter_data){
    $hasil = $this->db->insert_batch('tbl_pembelian', $filter_data);
    return $hasil;
  }
  /** data nota */

}