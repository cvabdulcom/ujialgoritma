<?php
class Batch_model extends CI_Model{
  
  function get_id_batch(){
    $tanggal = date('Y-m-d');
    $q = $this->db->query("SELECT MAX(RIGHT(id_batch,4)) AS id_batch FROM tbl_batch WHERE DATE(tanggal)='$tanggal'");
    $kd = "";
    if($q->num_rows()>0){
      foreach($q->result() as $k){
        $tmp = ((int)$k->id_batch)+1;
        $kd = sprintf("%04s", $tmp);
      }
    }else{
      $kd = "0001";
    }
    date_default_timezone_set('Asia/Jakarta');
    return date('dmy').$kd;
  }

  function save_batch($id_batch, $tanggal, $no_batch, $no_suratjalan){
    $hasil = $this->db->query("INSERT INTO tbl_batch(id_batch, tanggal, no_batch, no_suratjalan)
    VALUES('$id_batch', '$tanggal', '$no_batch', '$no_suratjalan')");
    return $hasil;
  }

  function check_batch($no_batch){
    $hasil = $this->db->query("SELECT * FROM tbl_batch WHERE no_batch='$no_batch'");
    // if($hasil->num_rows()>0){
    //   $data = "verified";
    //   return $data;
    // }else{
    //   $data = "unverified";
    //   return $data;
    // }
    return $hasil->result();
  }

}