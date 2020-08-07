<?php
class Returbarang extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('returbarang_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function index(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/returbarang');
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  /** Data produk */
  function Cari_produk(){
    if (isset($_GET['term'])) {
      $result = $this->returbarang_model->search_produk($_GET['term']);
      if (count($result) > 0) {
        foreach ($result as $row)
          $data[] = array(
            'value' => $row->nama_produk,
            'id_produk' => $row->id_produk,
            'nama_produk' => $row->nama_produk,
            'harga_beli' => $row->harga_beli,
            'kemasan' => $row->kemasan,
          );
        echo json_encode($data);
      }
    }
  }
  /** Data produk */

}