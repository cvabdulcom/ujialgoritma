<?php
class Batch extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('batch_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Index(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/batch');
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Get_id_batch(){
    $data = $this->batch_model->get_id_batch();
    echo json_encode($data);
  }

  function Tambah(){
    $id_batch = $this->input->post('id_batch');
    $tanggal = $this->input->post('tanggal');
    $no_batch = $this->input->post('no_batch');
    $no_suratjalan = $this->input->post('no_suratjalan');

    $data = $this->batch_model->save_batch($id_batch, $tanggal, $no_batch, $no_suratjalan);
    echo json_encode($data);
  }

  function Cek(){
    if($this->session->userdata('user_level_olikuapp')==='3'){
      $this->load->view('sales/header');
      $this->load->view('sales/batch_cek');
      $this->load->view('sales/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Check(){
    $no_batch = $this->input->post('no_batch');
    $data = $this->batch_model->check_batch($no_batch);
    echo json_encode($data);
  }


}