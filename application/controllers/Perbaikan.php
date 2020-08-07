<?php
class Perbaikan extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('perbaikan_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Index(){    
    if($this->session->userdata('user_level_olikuapp')==='3'){
      $this->load->view('sales/header');
      $this->load->view('sales/perbaikan');
      $this->load->view('sales/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  /** Data produk */
  function Cari_outlet(){
    if (isset($_GET['term'])) {
      $result = $this->perbaikan_model->search_outlet($_GET['term']);
      if (count($result) > 0) {
        foreach ($result as $row)
          $data[] = array(
            'value' => $row->nama_outlet,
            'id_outlet' => $row->id_outlet,
            'nama_outlet' => $row->nama_outlet,
            'kecamatan' => $row->kecamatan,
            'kabupaten' => $row->kabupaten,
            'alamat' => $row->alamat,
            'latitude' => $row->latitude,
            'longitude' => $row->longitude,
            'nama_pemilik' => $row->nama_pemilik,
            'telepon' => $row->telepon,
            'ada_whatsapp' => $row->ada_whatsapp,
            'tipe_outlet' => $row->tipe_outlet,
            'jumlah_pegawai' => $row->jumlah_pegawai,
            'fasilitas' => $row->fasilitas,
            'supplier' => $row->supplier,
            'rute' => $row->rute,
            'tipe_pembelian' => $row->tipe_pembelian,
            'nama_salesman' => $row->nama_salesman,
            'status_program' => $row->status_program
          );
        echo json_encode($data);
      }
    }
  }
  /** Data produk */

  /** Perbaikan */
  function Simpan_perbaikan(){
    $id_outlet =  $this->input->post('id_outlet');
    $tipe_pembelian = $this->input->post('tipe_pembelian');
    $status_program = $this->input->post('status_program');
    $kecamatan = $this->input->post('kecamatan');
    $kabupaten = $this->input->post('kabupaten');
    $latitude = $this->input->post('latitude');
    $longitude = $this->input->post('longitude');
    $nama_pemilik = $this->input->post('nama_pemilik');
    $telepon = $this->input->post('telepon');
    $ada_whatsapp = $this->input->post('ada_whatsapp');
    $jumlah_pegawai = $this->input->post('jumlah_pegawai');
    $alamat = $this->input->post('alamat');

    $data = $this->perbaikan_model->save_perbaikan($id_outlet, $tipe_pembelian, $status_program, $kecamatan, $kabupaten, $latitude, $longitude, $nama_pemilik, $telepon, $ada_whatsapp, $jumlah_pegawai, $alamat);
    echo json_encode($data);
  }
  /** Perbaikan */

}