<?php
class Pengguna_model extends CI_Model{

  /** MENAMPILKAN DATA PRODUK */
  function show_pengguna(){
    $hasil = $this->db->query("SELECT * FROM tbl_users WHERE user_level!='1'");
    return $hasil;
  }

  Function Add_pengguna(){
    $nama = $this->input->post('nama');
    $jabatan = $this->input->post('jabatan');
    $user_name = $this->input->post('user_name');
    $user_email = $this->input->post('user_email');
    $no_telepon = $this->input->post('no_telepon');
    $no_karyawan = $this->input->post('no_karyawan');
    $user_password = md5($this->input->post('user_password'));
    $user_level = $this->input->post('user_level');

    $hasil = $this->db->query("INSERT INTO tbl_users(user_id, nama, jabatan, user_name, user_email, no_telepon, no_karyawan, user_password, user_level)
    VALUES (nextval('tblusers_userid_seq'),'$nama','$jabatan','$user_name','$user_email','$no_telepon','$no_karyawan','$user_password','$user_level')");
    return $hasil;
  }

  function Change_pengguna(){
    $nama = $this->input->post('nama');
    $user_id = $this->input->post('user_id');
    $user_password = md5($this->input->post('user_password'));

    if("" == trim($this->input->post('user_password'))){
      $hasil = $this->db->query("UPDATE tbl_users SET nama='$nama' WHERE user_id='$user_id'");
    }else{
      $hasil = $this->db->query("UPDATE tbl_users SET nama='$nama', user_password='$user_password' WHERE user_id='$user_id'");
    }
    return $hasil;
  }

  function Delete_pengguna(){
    $user_id = $this->input->post('user_id');
    $hasil = $this->db->query("DELETE FROM tbl_users WHERE user_id='$user_id'");
    return $hasil;
  }

}