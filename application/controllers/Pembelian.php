<?php
class Pembelian extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('pembelian_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Notapembelian(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/nota_pembelian');
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  /** Data produk */
  function Cari_produk(){
    if (isset($_GET['term'])) {
      $result = $this->pembelian_model->search_produk($_GET['term']);
      if (count($result) > 0) {
        foreach ($result as $row)
          $data[] = array(
            'value' => $row->nama_produk,
            'id_produk' => $row->id_produk,
            'nama_produk' => $row->nama_produk,
            'harga_beli' => $row->harga_beli,
            'isi_kemasan' => $row->isi_kemasan,
          );
        echo json_encode($data);
      }
    }
  }
  /** Data produk */

  /** Data nota */
  function Simpan_nota(){
    $data = $this->input->post('data');
    $req = json_decode($data, true);
    $filter_data = array();

    foreach($req as $row) {
      $message = array(
        "tanggal" => $row['tanggal'],
        "no_nota_pembelian" => $row['no_nota_pembelian'],
        "id_produk" => $row['id_produk'],
        "jumlah" => intval($row['jumlah']),
        "harga_beli" => intval($row['harga_beli']),
        "tempo" => intval($row['tempo']),
        "status" => $row['status'],
        "supplier" => $row['supplier'],
        "id_file_pembelian" => $row['id_file_pembelian'],
        "nama_produk" => $row['nama_produk'],
        "subtotal" => intval($row['subtotal']),
        "nama_admin" => $row['nama_admin']
      );
      $filter_data[] = $message;
    }    
    $cek = $this->pembelian_model->insert_nota($filter_data);
    echo json_encode($cek);
  }
  /** Data nota */

}