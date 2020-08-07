<?php
class Pendataan extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('konsinyasi_model');
    $this->load->model('jualputus_model');
    $this->load->model('groupbuying_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Index(){
    if($this->session->userdata('user_level_olikuapp')==='3'){
      $ambildata['id_outlet'] = $this->jualputus_model->get_id_outlet();
      $this->load->view('sales/header');
      $this->load->view('sales/pendataan', $ambildata);
      $this->load->view('sales/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Get_id_outlet(){
    $data = $this->jualputus_model->get_id_outlet();
    echo json_encode($data);
  }

  function Tambah(){    
    $id_outlet = $this->input->post('id_outlet');
    $nama_outlet = $this->input->post('nama_outlet');
    $kecamatan = $this->input->post('kecamatan');
    $kabupaten = $this->input->post('kabupaten');
    $alamat = $this->input->post('alamat');
    $latitude = $this->input->post('latitude');
    $longitude = $this->input->post('longitude');
    $nama_pemilik = $this->input->post('nama_pemilik');
    $telepon = $this->input->post('telepon');
    $ada_whatsapp = $this->input->post('ada_whatsapp');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $tipe_outlet = $this->input->post('tipe_outlet');
    $jumlah_pegawai = $this->input->post('jumlah_pegawai');
    $fasilitas = $this->input->post('fasilitas');
    $supplier = $this->input->post('supplier');
    $rute = $this->input->post('rute');
    $tipe_pembelian = $this->input->post('tipe_pembelian');
    $nama_salesman = $this->input->post('nama_salesman');
    $status_program = $this->input->post('status_program');
    $foto_outlet = $this->input->post('foto_outlet');
    $foto_stokawal = $this->input->post('foto_stokawal');
    $foto_kontrak = $this->input->post('foto_kontrak');
    $foto_kontrak_tempo = $this->input->post('foto_kontrak_tempo');

    $data = $this->konsinyasi_model->save_konsinyasi($id_outlet, $nama_outlet, $kecamatan, $kabupaten, $alamat, $latitude, $longitude, $nama_pemilik, $telepon, $ada_whatsapp, $tanggal_lahir, $tipe_outlet, $jumlah_pegawai, $fasilitas, $supplier, $rute, $tipe_pembelian, $nama_salesman, $status_program, $foto_outlet, $foto_stokawal, $foto_kontrak, $foto_kontrak_tempo);
    echo json_encode($data);
  }

}