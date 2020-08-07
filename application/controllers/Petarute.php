<?php
class Petarute extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('petarute_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Index(){
    $ambildata['map'] = $this->petarute_model->show_map_all();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/petarute', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function by_rute(){
    $ambildata['map'] = $this->petarute_model->show_map();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/petarute_by_rute', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Tambahrute(){
    $this->petarute_model->add_rute();
    redirect('petarute');
  }

}