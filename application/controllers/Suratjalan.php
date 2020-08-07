<?php
class Suratjalan extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('suratjalan_model');
    $this->load->model('penjualan_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Index(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['no_suratjalan'] = $this->suratjalan_model->get_no_suratjalan();
      $this->load->view('admin/header');
      $this->load->view('admin/suratjalan', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function SJ_Masuk(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['no_suratjalan'] = $this->suratjalan_model->get_no_suratjalan();
      $ambildata['nota_pembelian'] = $this->suratjalan_model->show_daftarnota_masuk();
      $this->load->view('admin/header');
      $this->load->view('admin/suratjalan_masuk', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function SJ_Keluar(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['no_suratjalan'] = $this->suratjalan_model->get_no_suratjalan();
      $ambildata['nota_penjualan'] = $this->suratjalan_model->show_daftarnota_keluar();
      $this->load->view('admin/header');
      $this->load->view('admin/suratjalan_keluar', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function SJ_Keluar_konsinyasi(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['no_suratjalan'] = $this->suratjalan_model->get_no_suratjalan();
      $ambildata['nota_penjualan'] = $this->suratjalan_model->show_daftarnota_keluar();
      $this->load->view('admin/header');
      $this->load->view('admin/suratjalan_keluar_konsinyasi', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function SJ_Stokoutlet(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['no_suratjalan'] = $this->suratjalan_model->get_no_suratjalan();
      $this->load->view('admin/header');
      $this->load->view('admin/suratjalan_stokoutlet', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  // ################################################ DASHBOARD SESION [1] ##########################################

  function Daftar(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['daftar'] = $this->suratjalan_model->show_daftarsuratjalan();
      $this->load->view('admin/header');
      $this->load->view('admin/suratjalan_daftar', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Daftar_search(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['daftar'] = $this->suratjalan_model->show_daftarsuratjalan_search();
      $this->load->view('admin/header');
      $this->load->view('admin/suratjalan_daftar', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Cetak_sj(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['outlet'] = $this->penjualan_model->show_datanota();
      $ambildata['suratjalan'] = $this->suratjalan_model->print_suratjalan();
      $this->load->view('admin/cetak_sj', $ambildata);
    }else{ 
      echo "Access Denied";
    }
  }

  function Cetak_sj_gpp(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['outlet'] = $this->penjualan_model->show_datanota();
      $ambildata['suratjalan'] = $this->suratjalan_model->print_suratjalan();
      $this->load->view('admin/cetak_sj_gpp', $ambildata);
    }else{ 
      echo "Access Denied";
    }
  }

  function Daftar_suratjalan(){
    $data = $this->suratjalan_model->show_daftarsuratjalan()->result_array();
    echo json_encode($data);
  }

  /** Data produk */
  function Cari_nota(){
    if (isset($_GET['term'])) {
      $result = $this->suratjalan_model->search_nota($_GET['term']);
      if (count($result) > 0) {
        foreach ($result as $row)
          $data[] = array(
            'value' => $row->no_nota_penjualan,
            'no_nota_penjualan' => $row->no_nota_penjualan,
          );
        echo json_encode($data);
      }
    }
  }
  /** Data produk */

  /** Tarik data nota */
  function Tarik_nota_penjualan(){
    $no_nota_penjualan = $this->input->get('no_nota_penjualan');
    $data  = $this->suratjalan_model->get_nota_by_no_nota_penjualan($no_nota_penjualan);
    echo json_encode($data);
  }

  function Tarik_nota_pembelian(){
    $no_nota_pembelian = $this->input->get('no_nota_pembelian');
    $data  = $this->suratjalan_model->get_nota_by_no_nota_pembelian($no_nota_pembelian);
    echo json_encode($data);
  }
  /** Tarik data nota */

  /** Simpan Stok Gudang */
  function Simpan_stokgudang(){
    $data = $this->input->post('data');
    $tanggal = $this->input->post('tanggal');
    $req = json_decode($data, true);
    $filter_data = array();

    foreach($req as $row) {
      $message = array(
        "tanggal" => $tanggal,
        "id_produk" => $row['id_produk'],
        "masuk_keluar" => $row['masuk_keluar'],
        "jumlah" => $row['jumlah'],
        "keterangan" => $row['keterangan'],
        "no_surat_jalan" => $row['no_surat_jalan']
      );
      $filter_data[] = $message;
    }    
    $cek = $this->suratjalan_model->insert_stokgudang($filter_data);
    echo json_encode($cek);
  }
  /** Simpan Stok Gudang */

  /** Simpan Stok Outlet */
  function Simpan_stokoutlet(){
    $data = $this->input->post('data');
    $tanggal = $this->input->post('tanggal');
    $req = json_decode($data, true);
    $filter_data = array();

    foreach($req as $row) {
      $message = array(
        "id_outlet" => $row['id_outlet'],
        "tanggal" => $tanggal,
        "id_produk" => $row['id_produk'],
        "masuk_keluar" => $row['masuk_keluar'],
        "jumlah" => $row['jumlah'],
        "no_actiontracking" => $row['no_actiontracking']
      );
      $filter_data[] = $message;
    }    
    $cek = $this->suratjalan_model->insert_stokoutlet($filter_data);
    echo json_encode($cek);
  }

  function Simpan_stokoutlet_kon(){
    $data = $this->input->post('data');
    $tanggal = $this->input->post('tanggal');
    $req = json_decode($data, true);
    $filter_data = array();

    foreach($req as $row) {
      $message = array(
        "id_outlet" => $row['id_outlet'],
        "tanggal" => $row['tanggal'],
        "id_produk" => $row['id_produk'],
        "masuk_keluar" => $row['masuk_keluar'],
        "jumlah" => $row['jumlah'],
        "no_actiontracking" => $row['no_actiontracking']
      );
      $filter_data[] = $message;
    }    
    $cek = $this->suratjalan_model->insert_stokoutlet($filter_data);
    echo json_encode($cek);
  }

  function Simpan_stokoutlet_detail(){
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
    $cek = $this->suratjalan_model->insert_stokoutlet_detail($filter_data);
    echo json_encode($cek);
  }
  /** Simpan Stok Outlet */

  /** Simpan Surat Jalan */
  function Simpan_suratjalan(){
    $no_suratjalan = $this->input->post('no_suratjalan');
    $no_nota = $this->input->post('no_nota');
    $tanggal = $this->input->post('tanggal');
    $kendaraan = $this->input->post('kendaraan');
    $no_plat = $this->input->post('no_plat');
    $nama_pengirim = $this->input->post('nama_pengirim');
    $nama_admin = $this->session->userdata('nama_olikuapp');
    $tanggal_bikin = $this->input->post('tanggal_bikin');

    $data = $this->suratjalan_model->save_suratjalan($no_suratjalan, $no_nota, $tanggal, $kendaraan, $no_plat, $nama_pengirim, $nama_admin, $tanggal_bikin);
    echo json_encode($data);
  }
  /** Simpan Surat Jalan */

  /** Ubah status nota */
  function Ubah_statusnota(){
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');
    $status = "UNDELIVER";

    $data = $this->suratjalan_model->change_statusnota($no_nota_penjualan, $status);
    echo json_encode($data);
  }

  function Update_statusnota(){
    $no_suratjalan = $this->input->post('no_suratjalan');
    $no_nota = $this->input->post('no_nota');
    $id_file = $this->input->post('id_file');
    $status = "DELIVER";

    $data = $this->suratjalan_model->update_status_stokoutlet($no_suratjalan, $id_file);
    $data = $this->suratjalan_model->update_status_stokgudang($no_suratjalan, $id_file);
    $data = $this->suratjalan_model->change_statusnota($no_nota, $status);
    redirect('suratjalan/daftar');
  }
  /** Ubah status nota */

  /** Cek Stok */
  function Cek_stok(){
    $stok_masuk = $this->suratjalan_model->stok_masuk();
    $stok_keluar = $this->suratjalan_model->stok_keluar();

    $pcs_masuk = $stok_masuk->row()->jumlah;
    $pcs_keluar = $stok_keluar->row()->jumlah;

    $data = $pcs_masuk - $pcs_keluar;
    echo json_encode($data);
  }
  /** Cek Stok */

}