<?php
class Hapusdata extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('hapusdata_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  /** Nota Penjualan */
  function Index(){
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $ambildata['penjualan'] = $this->hapusdata_model->show_nota_penjualan();
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/hapusdata_notapenjualan', $ambildata);
      $this->load->view('superadmin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function hapus_notapenjualan(){
    $this->hapusdata_model->delete_notapenjualan();
    $this->hapusdata_model->delete_datapiutang_nota();
    $this->hapusdata_model->delete_stokoutlet_keluar();
    redirect('hapusdata');
  }
  /** Nota Penjualan */

  /** Surat Jalan */
  function Suratjalan(){
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $ambildata['suratjalan'] = $this->hapusdata_model->show_suratjalan();
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/hapusdata_suratjalan', $ambildata);
      $this->load->view('superadmin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function hapus_suratjalan(){
    $this->hapusdata_model->delete_suratjalan();
    $this->hapusdata_model->delete_datastok_gudang();
    $this->hapusdata_model->delete_datastok_outlet();
    redirect('hapusdata/suratjalan');
  }
  /** Surat Jalan */

  /** Data Stok */
  function Datastok(){
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $ambildata['datastok'] = $this->hapusdata_model->show_datastok();
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/hapusdata_datastok', $ambildata);
      $this->load->view('superadmin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function hapus_datastok(){
    $this->hapusdata_model->delete_datastok_gudang();
    $this->hapusdata_model->delete_datastok_outlet();
    redirect('hapusdata/datastok');
  }
  /** Data Stok */

  /** SJ Stok Outlet */
  function Sjoutlet(){
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $ambildata['sjoutlet'] = $this->hapusdata_model->show_sjoutlet();
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/hapusdata_sjstokoutlet', $ambildata);
      $this->load->view('superadmin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function hapus_sjoutlet(){
    $this->hapusdata_model->delete_sjoutlet();
    redirect('hapusdata/sjoutlet');
  }
  /** SJ Stok Outlet */

  /** Pembelian */
  function Pembelian(){
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $ambildata['pembelian'] = $this->hapusdata_model->show_pembelian();
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/hapusdata_pembelian', $ambildata);
      $this->load->view('superadmin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function hapus_pembelian(){
    $this->hapusdata_model->delete_pembelian();
    redirect('hapusdata/pembelian');
  }
  /** Pembelian */

  /** Data Outlet */
  function Dataoutlet(){
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $ambildata['dataoutlet'] = $this->hapusdata_model->show_dataoutlet();
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/hapusdata_dataoutlet', $ambildata);
      $this->load->view('superadmin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function hapus_dataoutlet(){
    $this->hapusdata_model->delete_dataoutlet();
    redirect('hapusdata/dataoutlet');
  }
  /** Data Outlet */

  /** Data Piutang */
  function Datapiutang(){
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $ambildata['datapiutang'] = $this->hapusdata_model->show_datapiutang();
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/hapusdata_datapiutang', $ambildata);
      $this->load->view('superadmin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function hapus_datapiutang(){
    $this->hapusdata_model->delete_datapiutang();
    redirect('hapusdata/datapiutang');
  }
  /** Data Outlet */

  /** Deliver Nota */
  function Deliver_nota(){
    $this->hapusdata_model->deliver_nota();
    redirect('hapusdata');
  }
  /** Deliver Nota */

  /** Data Kas Harian */
  function Datakas(){
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $ambildata['datakas'] = $this->hapusdata_model->show_datakas();
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/hapusdata_kas', $ambildata);
      $this->load->view('superadmin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function hapus_kasharian(){
    $this->hapusdata_model->delete_datakas();
    redirect('hapusdata/datakas');
  }
  /** Data Kas Harian */

  /** Data Setoran */
  function Datasetoran(){
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $ambildata['datasetoran'] = $this->hapusdata_model->show_datasetoran();
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/hapusdata_setoran', $ambildata);
      $this->load->view('superadmin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function hapus_setoran(){
    $this->hapusdata_model->delete_datasetoran();
    redirect('hapusdata/datasetoran');
  }
  /** Data Setoran */

}