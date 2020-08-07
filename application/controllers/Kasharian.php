<?php
class Kasharian extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('kasharian_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function pembayaran_nota_jual(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['id_kas'] = $this->kasharian_model->get_id_kas_1();
      $ambildata['nota_penjualan'] = $this->kasharian_model->show_daftarnota_penjualan();
      $this->load->view('admin/header');
      $this->load->view('admin/kasharian_pembayaran_nota_jual', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function pembayaran_nota_beli(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['id_kas'] = $this->kasharian_model->get_id_kas_1();
      $ambildata['nota_pembelian'] = $this->kasharian_model->show_daftarnota_pembelian();
      $this->load->view('admin/header');
      $this->load->view('admin/kasharian_pembayaran_nota_beli', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function biaya(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['id_kas'] = $this->kasharian_model->get_id_kas_1();
      $this->load->view('admin/header');
      $this->load->view('admin/kasharian_biaya', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function pendapatan_lain_lain(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['id_kas'] = $this->kasharian_model->get_id_kas_1();
      $this->load->view('admin/header');
      $this->load->view('admin/kasharian_pendapatan_lain_lain', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function permodalan(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['id_kas'] = $this->kasharian_model->get_id_kas_1();
      $this->load->view('admin/header');
      $this->load->view('admin/kasharian_permodalan', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function setoran(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['id_kas'] = $this->kasharian_model->get_id_kas_2();
      $this->load->view('admin/header');
      $this->load->view('admin/kasharian_setoran', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  /** ********************************************************************************************************************************** */

  /** Data Kas */
  function Tarik_nota(){
    $no_nota_penjualan = $this->input->get('no_nota_penjualan');
    $data  = $this->kasharian_model->get_nota_by_no_nota($no_nota_penjualan);
    echo json_encode($data);
  }

  function Tarik_sisa(){
    $no_nota_penjualan = $this->input->get('no_nota_penjualan');
    $data  = $this->kasharian_model->get_sisa_by_no_nota($no_nota_penjualan);
    echo json_encode($data);
  }

  function Simpan_kas(){
    $id_kas = $this->input->post('id_kas');
    $tanggal = $this->input->post('tanggal');
    $tujuan = $this->input->post('tujuan');
    $account_transaksi = $this->input->post('account_transaksi');
    $tipe = $this->input->post('tipe');
    $jenis = $this->input->post('jenis');
    $nominal = $this->input->post('nominal');
    $keterangan = $this->input->post('keterangan');
    $id_file = $this->input->post('id_file');
    $tanggal_bikin = $this->input->post('tanggal_bikin');

    $data = $this->kasharian_model->save_kas($id_kas, $tanggal, $tujuan, $account_transaksi, $tipe, $jenis, $nominal, $keterangan, $id_file, $tanggal_bikin);
    echo json_encode($data);
  }

  function Simpan_setoran(){
    $id_kas = $this->input->post('id_kas');
    $tanggal = $this->input->post('tanggal');
    $total_uang_masuk_cash = $this->input->post('total_uang_masuk_cash');
    $total_uang_masuk_bank = $this->input->post('total_uang_masuk_bank');
    $total_uang_keluar_cash = $this->input->post('total_uang_keluar_cash');
    $total_uang_keluar_bank = $this->input->post('total_uang_keluar_bank');
    $setor = $this->input->post('setor');
    $id_file = $this->input->post('id_file');
    $bank = $this->input->post('bank');
    $tanggal_bikin = $this->input->post('tanggal_bikin');

    $data = $this->kasharian_model->save_setoran($id_kas, $tanggal, $total_uang_masuk_cash, $total_uang_masuk_bank, $total_uang_keluar_cash, $total_uang_keluar_bank, $setor, $id_file, $bank, $tanggal_bikin);
    echo json_encode($data);
  }
  /** Data Kas */

  /** Data Piutang */
  function Simpan_piutang(){
    $tanggal = $this->input->post('tanggal');
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');
    $tanggal_jatuh_tempo = $this->input->post('tanggal_jatuh_tempo');
    $nominal_nota_penjualan = $this->input->post('nominal_nota_penjualan');
    $terbayar = $this->input->post('terbayar');
    $tanggal_bayar = $this->input->post('tanggal_bayar');
    $sisa = $this->input->post('sisa');
    $status = $this->input->post('status');

    $data = $this->kasharian_model->save_piutang($tanggal, $no_nota_penjualan, $tanggal_jatuh_tempo, $nominal_nota_penjualan, $terbayar, $tanggal_bayar, $sisa, $status);
    echo json_encode($data);
  }
  /** Data Piutang */

  /** ********************************************************************************************************************************** */

  /** kas harian tarik nota pembelian */
  function Tarik_nota_pembelian(){
    $no_nota_pembelian = $this->input->get('no_nota_pembelian');
    $data  = $this->kasharian_model->get_nota_by_no_nota_pembelian($no_nota_pembelian);
    echo json_encode($data);
  }
  /** kas harian tarik nota pembelian */

  /** status pembelian menjadi lunas */
  function Update_pembelian(){
    $no_nota_pembelian = $this->input->post('no_nota_pembelian');
    $data  = $this->kasharian_model->update_pembelian($no_nota_pembelian);
    echo json_encode($data);
  }
  /** status pembelian menjadi lunas */

}