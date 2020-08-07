<?php
class Call extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('call_model');
    $this->load->model('penjualan_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Index(){
    if($this->session->userdata('user_level_olikuapp')==='3'){
      $this->load->view('sales/header');
      $this->load->view('sales/call');
      $this->load->view('sales/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Tandaterima(){
    if($this->session->userdata('user_level_olikuapp')==='3'){
      $this->load->view('sales/header');
      $this->load->view('sales/tandaterima');
      $this->load->view('sales/footer');
    }else{ 
      echo "Access Denied";
    }
  }
  // ################################################ DASHBOARD SESION [1] ##########################################

  /** Simpan call */
  function Simpan_call(){
    $tanggal = $this->input->post('tanggal');
    $id_outlet = $this->input->post('id_outlet');
    $kondisi = $this->input->post('kondisi');
    $id_file = $this->input->post('id_file');
    $nama_salesman = $this->input->post('nama_salesman');

    $data = $this->call_model->save_call($tanggal, $id_outlet, $kondisi, $id_file, $nama_salesman);
    echo json_encode($data);
  }
  /** Simpan call */

  /** Cek harga */
  function Cari_produk_jpc(){
    if (isset($_GET['term'])) {
      $result = $this->penjualan_model->search_produk($_GET['term']);
      if (count($result) > 0) {
        foreach ($result as $row)
          $data[] = array(
            'value' => $row->nama_produk,
            'id_produk' => $row->id_produk,
            'nama_produk' => $row->nama_produk,
            'harga_jual' => $row->harga_jual_1,
            'isi_kemasan' => $row->isi_kemasan,
          );
        echo json_encode($data);
      }
    }
  }

  function Cari_produk_kon(){
    if (isset($_GET['term'])) {
      $result = $this->penjualan_model->search_produk($_GET['term']);
      if (count($result) > 0) {
        foreach ($result as $row)
          $data[] = array(
            'value' => $row->nama_produk,
            'id_produk' => $row->id_produk,
            'nama_produk' => $row->nama_produk,
            'harga_jual' => $row->harga_jual_3,
            'isi_kemasan' => $row->isi_kemasan,
          );
        echo json_encode($data);
      }
    }
  }
  /** Cek harga */

  /** Informasi */
  function Get_id_informasi(){
    $data = $this->call_model->get_id_informasi();
    echo json_encode($data);
  }

  function Simpan_informasi(){
    $id_informasi = $this->input->post('id_informasi');
    $tanggal = $this->input->post('tanggal');
    $time = $this->input->post('time');
    $nama = $this->input->post('nama');
    $keterangan = $this->input->post('keterangan');

    $data = $this->call_model->save_informasi($id_informasi, $tanggal, $time, $nama, $keterangan);
    echo json_encode($data);
  }

  /** Informasi */


}