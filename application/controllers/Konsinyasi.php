<?php
class Konsinyasi extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('konsinyasi_model');
    $this->load->model('jualputus_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Index(){    
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/konsinyasi');
      $this->load->view('superadmin/footer');
    }else if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/konsinyasi');
      $this->load->view('admin/footer');
    }else if($this->session->userdata('user_level_olikuapp')==='3'){
      $ambildata['id_outlet'] = $this->jualputus_model->get_id_outlet();
      $this->load->view('sales/header');
      $this->load->view('sales/konsinyasi', $ambildata);
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

    $this->konsinyasi_model->save_konsinyasi($id_outlet, $nama_outlet, $kecamatan, $kota_kabupaten, $latitude, $longitude, $nama_pemilik, $tipe_outlet, $fasilitas, $supplier, $telepon, $whatsapp, $tanggal_lahir, $jumlah_pegawai, $alamat, $rute, $tipe_pembelian, $status_program, $foto_outlet, $foto_stokawal, $foto_kontrak, $foto_kontrak_tempo, $nama_salesman);
    redirect('konsinyasi');
  }

  function Filekontrak(){
    $ambildata['filekontrak'] = $this->konsinyasi_model->filekontrak();
    if($this->session->userdata('level_oliku')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/konsinyasi_filekontrak', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Stokawal(){
    $ambildata['stokawal'] = $this->konsinyasi_model->stokawal();
    if($this->session->userdata('level_oliku')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/konsinyasi_stokawal', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  /** Stok Awal Start */

  function Stokawal_input(){
    $ambildata['stokawal_data_outlet'] = $this->konsinyasi_model->stokawal_data_outlet();
    $ambildata['show_produk'] = $this->konsinyasi_model->show_produk();
    if($this->session->userdata('level_oliku')==='2'){
      $this->load->view('admin/konsinyasi_stokawal_input', $ambildata);
    }else{ 
      echo "Access Denied";
    }
  }

  function Data_stokawal(){
    $kode_outlet = $this->input->post('kode_outlet');
    $data = $this->konsinyasi_model->show_stokawal($kode_outlet);
    echo json_encode($data);
  }

  function Simpan_stokawal(){
    $kode_outlet = $this->input->post('kode_outlet');
    $nama_produk = $this->input->post('nama_produk');
    $stok_awal = $this->input->post('stok_awal');
    $data = $this->konsinyasi_model->save_stokawal($kode_outlet, $nama_produk, $stok_awal);
    echo json_encode($data);
  }

  function Hapus_stokawal(){
    $kode_outlet   = $this->input->post('kode_outlet');
    $nama_produk   = $this->input->post('nama_produk');
    $data = $this->konsinyasi_model->delete_stokawal($kode_outlet, $nama_produk);
    echo json_encode($data);
  }

  /** Stok Awal End */

  function Rekap(){
    $ambildata['rekap'] = $this->konsinyasi_model->rekap();
    if($this->session->userdata('level_oliku')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/konsinyasi_rekap', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Simpan_filekontrak(){
    $this->konsinyasi_model->save_filekontrak();
    redirect('outletmasuk/ky_filekontrak');
  }

  /** Konsinyasi */
  function Simpan_filekontrak_ky(){
    $this->konsinyasi_model->save_filekontrak();
    $this->konsinyasi_model->status_program_approve();
    redirect('outletmasuk/ky_filekontrak');
  }

  function Simpan_filestokawal(){
    $this->konsinyasi_model->save_filestokawal();
    $this->konsinyasi_model->status_program_complete();
    redirect('outletmasuk/ky_stokawal');
  }
  /** Konsinyasi */

}