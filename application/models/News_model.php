<?php
class News_model extends CI_Model{
  
  function show_news(){
    $hasil = $this->db->query("SELECT * FROM tbl_informasi ORDER BY tanggal DESC LIMIT 100");
    return $hasil;
  }

  function get_news($id_informasi){
    $hsl = $this->db->query("SELECT * FROM tbl_informasi WHERE id_informasi = '$id_informasi'");
    if($hsl->num_rows() > 0){
      foreach ($hsl->result() as $data) {
        $hasil = array(
          'id_informasi' => $data->id_informasi,
          'tanggal' => $data->tanggal,
          'time' => $data->time,
          'nama' => $data->nama,
          'keterangan' => $data->keterangan,
        );
      }
    }
    return $hasil;
  }

}