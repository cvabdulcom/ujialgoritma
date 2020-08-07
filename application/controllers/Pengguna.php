<?php
class Pengguna extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('pengguna_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Index(){
    $ambildata['pengguna'] = $this->pengguna_model->show_pengguna();
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/pengguna', $ambildata);
      $this->load->view('superadmin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Tambah(){
    $this->pengguna_model->add_pengguna();
    redirect('pengguna');
  }

  function Ubah(){
    $this->pengguna_model->change_pengguna();
    redirect('pengguna');
  }

  function Hapus(){
    $this->pengguna_model->delete_pengguna();
    redirect('pengguna');
  }

}