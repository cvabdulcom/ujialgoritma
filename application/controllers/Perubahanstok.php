<?php
class Perubahanstok extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('perubahanstok_model');
    $this->load->model('suratjalan_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Index(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/perubahan_stok');
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Tarik_stok(){
    $id_outlet = $this->input->post('id_outlet');
    $data = $this->perubahanstok_model->tarik_stok($id_outlet);
    echo json_encode($data);
  }

  function Hapus_stok(){
    $id_outlet = $this->input->post('id_outlet');
    $data = $this->perubahanstok_model->hapus_stok($id_outlet);
    echo json_encode($data);
  }

  function Simpan_stok(){
    $data = $this->input->post('data');
    $req = json_decode($data, true);
    $filter_data = array();

    foreach($req as $row) {
      $message = array(
        "id_outlet" => $row['id_outlet'],
        "id_produk" => $row['id_produk'],
        "jumlah" => $row['jumlah']
      );
      $filter_data[] = $message;
    }    
    $cek = $this->perubahanstok_model->simpan_stok($filter_data);
    echo json_encode($cek);
  }

  /** Simpan Perubahan Stok */
  function Simpan_stok_outlet(){
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
    $cek = $this->perubahanstok_model->simpan_stok_outlet($filter_data);
    echo json_encode($cek);
  }

  function Simpan_stok_gudang(){
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
    $cek = $this->perubahanstok_model->simpan_stok_gudang($filter_data);
    echo json_encode($cek);
  }
  /** Simpan Perubahan Stok */

  /** Cetak daftar stok */
  function Daftar_stokawal(){
    $data = $this->perubahanstok_model->show_daftarstokawal()->result_array();
    echo json_encode($data);
  }

  function Cetak_st(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['stokoutlet'] = $this->perubahanstok_model->print_stokoutlet();
      $this->load->view('admin/cetak_st', $ambildata);
    }else{ 
      echo "Access Denied";
    }
  }
  /** Cetak daftar stok */

  /** Lanjutkan perubahan stok */
  function lanjutkan(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/perubahan_stok_lanjutkan');
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }
  /** Lanjutkan perubahan stok */

  /** Keluarkan Stok */
  function Keluarkan_stok(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['no_suratjalan'] = $this->suratjalan_model->get_no_suratjalan();
      $this->load->view('admin/header');
      $this->load->view('admin/keluarkan_stok', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }
  /** Keluarkan Stok */

  /** Perbaikan Stok */
  function Perbaikan_stok_outlet(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/perbaikan_stok_outlet');
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }
  /** Perbaikan Stok */

}