<?php
class Profiling extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('profiling_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Cetak(){
    $ambildata['outlet'] = $this->profiling_model->show_cetak();
    $ambildata['stokawal'] = $this->profiling_model->show_stokawal();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/profiling_cetak', $ambildata);
    }else{ 
      echo "Access Denied";
    }
  }

  function Cetak_tempo(){
    $ambildata['outlet'] = $this->profiling_model->show_cetak();
    $ambildata['stokawal'] = $this->profiling_model->show_stokawal();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/profiling_cetak_tempo', $ambildata);
    }else{ 
      echo "Access Denied";
    }
  }

  function Cetak_cash(){
    $ambildata['outlet'] = $this->profiling_model->show_cetak();
    $ambildata['stokawal'] = $this->profiling_model->show_stokawal();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/profiling_cetak_cash', $ambildata);
    }else{ 
      echo "Access Denied";
    }
  }

  function Cetak_lain(){
    $ambildata['outlet'] = $this->profiling_model->show_cetak();
    $ambildata['stokawal'] = $this->profiling_model->show_stokawal();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/profiling_cetak_lain', $ambildata);
    }else{ 
      echo "Access Denied";
    }
  }

}