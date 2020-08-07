<?php
class Groupbuying extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('groupbuying_model');
    $this->load->model('jualputus_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Index(){    
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/groupbuying');
      $this->load->view('superadmin/footer');
    }else if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/groupbuying');
      $this->load->view('admin/footer');
    }else if($this->session->userdata('user_level_olikuapp')==='3'){
      $ambildata['id_outlet'] = $this->jualputus_model->get_id_outlet();
      $this->load->view('sales/header');
      $this->load->view('sales/groupbuying', $ambildata);
      $this->load->view('sales/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Tambah(){
    $id_outlet          = $this->input->post('id_outlet');
    $nama_outlet        = $this->input->post('nama_outlet');
    $kecamatan          = $this->input->post('kecamatan');
    $kota_kabupaten     = $this->input->post('kota_kabupaten');
    $latitude           = $this->input->post('latitude');
    $longitude          = $this->input->post('longitude');
    $nama_pemilik       = $this->input->post('nama_pemilik');
    $tipe_outlet        = $this->input->post('tipe_outlet');
    $fasilitas          = $this->input->post('fasilitas');
    $supplier           = $this->input->post('supplier');
    $telepon            = $this->input->post('telepon');
    $whatsapp           = $this->input->post('whatsapp');
    $tanggal_lahir      = $this->input->post('tanggal_lahir'); 
    $jumlah_pegawai     = $this->input->post('jumlah_pegawai');    
    $alamat             = $this->input->post('alamat');
    $rute               = $this->input->post('rute');
    $tipe_pembelian     = $this->input->post('tipe_pembelian');
    $status_program     = $this->input->post('status_program');
    $foto_outlet        = $this->input->post('foto_outlet');
    $foto_stokawal      = $this->input->post('foto_stokawal');
    $foto_kontrak       = $this->input->post('foto_kontrak');
    $foto_kontrak_tempo = $this->input->post('foto_kontrak_tempo');
    $nama_salesman      = $this->session->userdata('nama_olikuapp');

    $this->groupbuying_model->save_groupbuying($id_outlet, $nama_outlet, $kecamatan, $kota_kabupaten, $latitude, $longitude, $nama_pemilik, $tipe_outlet, $fasilitas, $supplier, $telepon, $whatsapp, $tanggal_lahir, $jumlah_pegawai, $alamat, $rute, $tipe_pembelian, $status_program, $foto_outlet, $foto_stokawal, $foto_kontrak, $foto_kontrak_tempo, $nama_salesman);
    redirect('groupbuying');
  }

  function Rekap(){
    $ambildata['rekap'] = $this->groupbuying_model->rekap();
    if($this->session->userdata('level_oliku')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/groupbuying_rekap', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

}