<?php
class Penawaran extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('penawaran_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Index(){    
    $ambildata['outlet'] = $this->penawaran_model->show_belumminat();
    if($this->session->userdata('user_level_olikuapp')==='3'){
      $this->load->view('sales/header');
      $this->load->view('sales/penawaran', $ambildata);
      $this->load->view('sales/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  /** Data produk */
  function Cari_outlet(){
    if (isset($_GET['term'])) {
      $result = $this->penawaran_model->search_outlet($_GET['term']);
      if (count($result) > 0) {
        foreach ($result as $row)
          $data[] = array(
            'value' => $row->nama_outlet,
            'id_outlet' => $row->id_outlet,
            'nama_salesman' => $row->nama_salesman,
            'rute' => $row->rute,
            'tipe_pembelian' => $row->tipe_pembelian,
          );
        echo json_encode($data);
      }
    }
  }
  /** Data produk */

  /** Perubahan */
  function Simpan_perubahan(){
    $id_outlet =  $this->input->post('id_outlet');
    $tipe_pembelian = $this->input->post('tipe_pembelian');
    $status_program = $this->input->post('status_program');

    $data = $this->penawaran_model->save_perubahan($id_outlet, $tipe_pembelian, $status_program);
    echo json_encode($data);
  }
  /** Perubahan */

}