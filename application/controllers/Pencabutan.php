<?php
class Pencabutan extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('pencabutan_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function index(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/pencabutan');
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  /** Data produk */
  function Cari_outlet(){
    if (isset($_GET['term'])) {
      $result = $this->pencabutan_model->search_outlet($_GET['term']);
      if (count($result) > 0) {
        foreach ($result as $row)
          $data[] = array(
            'value' => $row->nama_outlet,
            'id_outlet'    => $row->id_outlet,
            'nama_salesman'  => $row->nama_salesman,
            'rute'  => $row->rute,
            'tipe_pembelian'  => $row->tipe_pembelian,
          );
        echo json_encode($data);
      }
    }
  }
  /** Data produk */

  function Tarik_stokoutlet(){
    $id_outlet = $this->input->post('id_outlet');
    $data  = $this->pencabutan_model->get_stokoutlet($id_outlet);
    echo json_encode($data);
  }

  /** Fungsi Simpan */
  function Simpan_stokoutlet(){
    $data = $this->input->post('data');
    $req = json_decode($data, true);
    $filter_data = array();

    foreach($req as $row) {
      $message = array(
        "id_outlet" => $row['id_outlet'],
        "tanggal" => $row['tanggal'],
        "id_produk" => $row['id_produk'],
        "masuk_keluar" => $row['masuk_keluar'],
        "jumlah" => $row['jumlah'],
        "no_actiontracking" => $row['no_actiontracking'],
        "id_file_actiontracking" => $row['id_file_actiontracking']
      );
      $filter_data[] = $message;
    }    
    $cek = $this->pencabutan_model->simpan_stokoutlet($filter_data);
    echo json_encode($cek);
  }

  function Simpan_stokgudang(){
    $data = $this->input->post('data');
    $req = json_decode($data, true);
    $filter_data = array();

    foreach($req as $row) {
      $message = array(
        "tanggal" => $row['tanggal'],
        "id_produk" => $row['id_produk'],
        "masuk_keluar" => $row['masuk_keluar'],
        "jumlah" => $row['jumlah'],
        "keterangan" => $row['keterangan'],
        "no_surat_jalan" => $row['no_surat_jalan'],
        "id_file_surat_jalan" => $row['id_file_surat_jalan']
      );
      $filter_data[] = $message;
    }    
    $cek = $this->pencabutan_model->simpan_stokgudang($filter_data);
    echo json_encode($cek);
  }

  function Simpan_stokoutlet_detail(){
    $id_outlet = $this->input->post('id_outlet');
    $data  = $this->pencabutan_model->simpan_stokoutlet_detail($id_outlet);
    echo json_encode($data);
  }
  /** Fungsi Simpan */

  /** Cetak SK */
  function Cetak_sk(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/cetak_sk');
    }else{ 
      echo "Access Denied";
    }
  }
  /** Cetak SK */

  function Blacklist(){
    $id_outlet = $this->input->post('id_outlet');
    $data  = $this->pencabutan_model->blacklist($id_outlet);
    echo json_encode($data);
  }

}