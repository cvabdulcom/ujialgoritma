<?php
class Dashboard extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('dashboard_model');
    $this->load->model('laporan_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Index(){    
    $ambildata['stok'] = $this->laporan_model->show_stok();
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/dashboard');
      $this->load->view('superadmin/footer');
    }else if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/dashboard');
      $this->load->view('admin/footer');
    }else if($this->session->userdata('user_level_olikuapp')==='3'){
      $this->load->view('sales/header');
      $this->load->view('sales/dashboard');
      // $this->load->view('sales/footer');
    }else{ 
      echo "Access Denied";
    }
  }

}