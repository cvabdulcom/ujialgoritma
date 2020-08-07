<?php
class Radius extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('radius_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Index(){    
    $ambildata['map'] = $this->radius_model->show_map();
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/radius');
      $this->load->view('superadmin/footer');
    }else if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/radius');
      $this->load->view('admin/footer');
    }else if($this->session->userdata('user_level_olikuapp')==='3'){
      $this->load->view('sales/radius', $ambildata);
    }else{ 
      echo "Access Denied";
    }
  }

}