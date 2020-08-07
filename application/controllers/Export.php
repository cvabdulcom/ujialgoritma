<?php
class Export extends CI_Controller{
  function __construct(){
    parent::__construct();
    /** Cek session apakah sudah login, jika belum maka ke halaman login */
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** Mengakses Map_model */
    $this->load->model('export_model');
  }

  public function Outlet(){
    // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data_Outlet_Klaten.xls");
    
    $data['outlet'] = $this->export_model->outlet();
    $this->load->view('admin/export_outlet', $data);
  }

  public function Piutang(){
    // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data_Piutang_Klaten.xls");
    
    $data['piutang'] = $this->export_model->piutang();
    $this->load->view('admin/export_piutang', $data);
  }

  public function Sales_penjualan(){
    // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
    $tanggal_first = $this->input->post('tanggal_pertama');
    $tanggal_last = $this->input->post('tanggal_terakhir');
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Laporan_Penjualan_Klaten_$tanggal_first/$tanggal_last.xls");
    
    $data['nota'] = $this->export_model->nota_penjualan();
    $data['penjualan'] = $this->export_model->penjualan();
    $this->load->view('admin/export_salespenjualan', $data);
  }

  public function Pembelian(){
    // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data_Pembelian_Klaten.xls");
    
    $data['pembelian'] = $this->export_model->pembelian();
    $this->load->view('admin/export_pembelian', $data);
  }

  public function Kas_1(){
    // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data_Kas_1_Klaten.xls");
    
    $data['kas'] = $this->export_model->kas_1();
    $this->load->view('admin/export_kas_1', $data);
  }

  public function Kas_2(){
    // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data_Kas_2_Klaten.xls");
    
    $data['kas'] = $this->export_model->kas_2();
    $this->load->view('admin/export_kas_2', $data);
  }

  public function Surat_jalan(){
    // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data_SuratJalan_Klaten.xls");
    
    $data['suratjalan'] = $this->export_model->surat_jalan();
    $this->load->view('admin/export_suratjalan', $data);
  }

  public function Stok_gudang(){
    // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data_StokGudang_Klaten.xls");
    
    $data['stokgudang'] = $this->export_model->stok_gudang();
    $this->load->view('admin/export_stokgudang', $data);
  }

  public function Stok_outlet(){
    // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data_StokOutlet_Klaten.xls");
    
    $data['stokoutlet'] = $this->export_model->stok_outlet();
    $this->load->view('admin/export_stokoutlet', $data);
  }

  public function Stok_konsinyasi(){
    // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data_StokKonsinyasi_Klaten.xls");
    
    $data['stokkonsinyasi'] = $this->export_model->stok_konsinyasi();
    $this->load->view('admin/export_stokkonsinyasi', $data);
  }

  function Harga_produk(){
    // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data_Hargaproduk_Klaten.xls");
    
    $data['hargaproduk'] = $this->export_model->harga_produk();
    $this->load->view('superadmin/export_hargaproduk', $data);
  }

  function Harga_produk_riwayat(){
    // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
    $tanggal_upload = $this->input->post('tanggal_upload');
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data_Hargaproduk_Klaten_".$tanggal_upload.".xls");
    
    $data['hargaproduk'] = $this->export_model->harga_produk_riwayat();
    $this->load->view('superadmin/export_hargaproduk', $data);
  }

  function Extra_diskon_riwayat(){
    // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data_Riwayat_diskon_Klaten.xls");
    
    $data['diskon_riwayat'] = $this->export_model->diskon_riwayat();
    $this->load->view('superadmin/export_diskonriwayat', $data);
  }

}