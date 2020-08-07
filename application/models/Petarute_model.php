<?php
class Petarute_model extends CI_Model{
  
  function show_map(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE status_program='COMPLETE' OR status_program='JP CASH' OR status_program='JP TEMPO'");
    return $hasil;
  }

  function show_map_all(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE status_program='COMPLETE' OR status_program='JP CASH' OR status_program='JP TEMPO'");
    return $hasil;
  }

  function add_rute(){
    $id_outlet = $this->input->post('id_outlet');
    $rute = $this->input->post('rute');

    $hasil = $this->db->query("UPDATE tbl_outlet SET rute='$rute' WHERE id_outlet='$id_outlet'");
    return $hasil;
  }

}