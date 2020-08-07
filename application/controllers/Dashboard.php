<?php
class Dashboard extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('dashboard_model');
    $this->load->model('laporan_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Index(){    
    $ambildata['stok'] = $this->laporan_model->show_stok();
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/dashboard');
      $this->load->view('superadmin/footer');
    }else if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/dashboard');
      $this->load->view('admin/footer');
    }else if($this->session->userdata('user_level_olikuapp')==='3'){
      $this->load->view('sales/header');
      $this->load->view('sales/dashboard');
      // $this->load->view('sales/footer');
    }else{ 
      echo "Access Denied";
    }
  }
  /** ------------------------------------------------------------------ */
  function Laporan_pembelian(){
    $data = $this->dashboard_model->laporan_pembelian()->result_array();
    echo json_encode($data);
  }

  function Laporan_penjualan(){
    $data = $this->dashboard_model->laporan_penjualan()->result_array();
    echo json_encode($data);
  }
  /** ------------------------------------------------------------------ */

  /** ------------------------------------------------------------------ */
  function Laporan_hutang(){
    $data = $this->dashboard_model->laporan_hutang()->result_array();
    echo json_encode($data);
  }
  
  function Laporan_piutang(){
    $data = $this->dashboard_model->laporan_piutang();
    echo json_encode($data);
  }
  /** ------------------------------------------------------------------ */

  /** ------------------------------------------------------------------ */
  function Laporan_stokawal_gudang(){
    $data = $this->dashboard_model->laporan_stokawal_gudang();
    echo json_encode($data);
  }

  function Laporan_stokawal_heri(){
    $data = $this->dashboard_model->laporan_stokawal_heri();
    echo json_encode($data);
  }

  function Laporan_stokawal_gigih(){
    $data = $this->dashboard_model->laporan_stokawal_gigih();
    echo json_encode($data);
  }

  function Laporan_pembelian_stok(){
    $data = $this->dashboard_model->laporan_stokawal_pembelian();
    echo json_encode($data);
  }

  function Laporan_stokakhir_gudang(){
    $data = $this->dashboard_model->laporan_stokakhir_gudang();
    echo json_encode($data);
  }

  function Laporan_stokakhir_heri(){
    $data = $this->dashboard_model->laporan_stokakhir_heri();
    echo json_encode($data);
  }

  function Laporan_stokakhir_gigih(){
    $data = $this->dashboard_model->laporan_stokakhir_gigih();
    echo json_encode($data);
  }
  /** ------------------------------------------------------------------ */

  /** ------------------------------------------------------------------ */
  function Laporan_uangmasuk_semua(){
    $data = $this->dashboard_model->laporan_uangmasuk_semua()->result_array();
    echo json_encode($data);
  }

  function Laporan_uangkeluar_semua(){
    $data = $this->dashboard_model->laporan_uangkeluar_semua()->result_array();
    echo json_encode($data);
  }

  function laporan_uangmasuk_tahun(){
    $data = $this->dashboard_model->laporan_uangmasuk_tahun()->result_array();
    echo json_encode($data);
  }

  function laporan_uangkeluar_tahun(){
    $data = $this->dashboard_model->laporan_uangkeluar_tahun()->result_array();
    echo json_encode($data);
  }
  /** ------------------------------------------------------------------ */

}