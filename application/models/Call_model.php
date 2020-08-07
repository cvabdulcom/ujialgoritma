<?php
class Call_model extends CI_Model{
  
  /** save call */
  function save_call($tanggal, $id_outlet, $kondisi, $id_file, $nama_salesman){
    $hasil = $this->db->query("INSERT INTO tbl_kunjungan(tanggal, id_outlet, kondisi, id_file, nama_salesman) VALUES('$tanggal', '$id_outlet', '$kondisi', '$id_file', '$nama_salesman')");
    return $hasil;
  }
  /** save call */

  /** id informasi */
  function get_id_informasi(){
    $tanggal = date('Y-m-d');
    $q = $this->db->query("SELECT MAX(RIGHT(id_informasi,4)) AS id_informasi FROM tbl_informasi WHERE DATE(tanggal)='$tanggal'");
    $kd = "";
    if($q->num_rows()>0){
      foreach($q->result() as $k){
        $tmp = ((int)$k->id_informasi)+1;
        $kd = sprintf("%04s", $tmp);
      }
    }else{
      $kd = "0001";
    }
    date_default_timezone_set('Asia/Jakarta');
    return date('dmy').$kd;
  }
  /** id informasi */

  /** save informasi */
  function save_informasi($id_informasi, $tanggal, $time, $nama, $keterangan){
    $hasil = $this->db->query("INSERT INTO tbl_informasi(id_informasi, tanggal, time, nama, keterangan) VALUES('$id_informasi', '$tanggal', '$time', '$nama', '$keterangan')");
    return $hasil;
  }
  /** save informasi */

}