<?php
class Outletmasuk extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('jualputus_model');
    $this->load->model('konsinyasi_model');
    $this->load->model('groupbuying_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################

  /** Jual Putus */
  function Jp_filekontrak(){
    $ambildata['filekontrak'] = $this->jualputus_model->filekontrak();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/outletmasuk_jp_filekontrak', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Jp_filekontraktempo(){
    $ambildata['kontraktempo'] = $this->jualputus_model->kontraktempo();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/outletmasuk_jp_kontraktempo', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Jp_rekap(){
    $ambildata['rekap'] = $this->jualputus_model->rekap();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/outletmasuk_jp_rekap', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }
  /** Jual Putus */

  /** Jual Konsinyasi */
  function Ky_filekontrak(){    
    $ambildata['filekontrak'] = $this->konsinyasi_model->filekontrak();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/outletmasuk_ky_filekontrak', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Ky_stokawal(){    
    $ambildata['stokawal'] = $this->konsinyasi_model->stokawal();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/outletmasuk_ky_stokawal', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Ky_rekap(){    
    $ambildata['rekap'] = $this->konsinyasi_model->rekap();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/outletmasuk_ky_rekap', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }
  /** Jual Konsinyasi */

  /** Jual Konsinyasi */
  function Gb_rekap(){    
    $ambildata['rekap'] = $this->groupbuying_model->rekap();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/outletmasuk_gb_rekap', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }
  /** Jual Konsinyasi */

}