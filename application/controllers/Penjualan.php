<?php
class Penjualan extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('penjualan_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  
  /** Nota kantor */
  function Notakantor(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/nota_penjualan');
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }
  /** Nota kantor */

  /** Data outlet */
  function Cari_outlet(){
    if (isset($_GET['term'])) {
      $result = $this->penjualan_model->search_outlet($_GET['term']);
      if (count($result) > 0) {
        foreach ($result as $row)
          $data[] = array(
            'value' => $row->nama_outlet,
            'id_outlet'    => $row->id_outlet,
            'nama_salesman'  => $row->nama_salesman,
            'rute'  => $row->rute,
            'tipe_pembelian'  => $row->tipe_pembelian,
            'alamat'  => $row->alamat,
            'diskon' => $row->diskon,
          );
        echo json_encode($data);
      }
    }
  }
  /** Data outlet */

  /** Data produk */
  function Cari_produk(){
    if (isset($_GET['term'])) {
      $result = $this->penjualan_model->search_produk($_GET['term']);
      if (count($result) > 0) {
        foreach ($result as $row)
          $data[] = array(
            'value' => $row->nama_produk,
            'id_produk' => $row->id_produk,
            'nama_produk' => $row->nama_produk,
            'kemasan' => $row->kemasan,
            'harga_beli' => $row->harga_beli,
            'harga_gb_200_dus' => $row->harga_gb_200_dus,
            'harga_gb_150_dus' => $row->harga_gb_150_dus,
            'harga_gb_50_dus' => $row->harga_gb_50_dus,
            'harga_gb_k_50_dus' => $row->harga_gb_k_50_dus,
            'harga_jpc_dus' => $row->harga_jpc_dus,
            'harga_jpc_botol' => $row->harga_jpc_botol,
            'harga_jpt_dus' => $row->harga_jpt_dus,
            'harga_jpt_botol' => $row->harga_jpt_botol,
            'harga_ky_t_bayar' => $row->harga_ky_t_bayar,
            'harga_ky_r_jual' => $row->harga_ky_r_jual,
          );
        echo json_encode($data);
      }
    }
  }

  function Cari_produk_extra(){
    if (isset($_GET['term'])) {
      $nama_produk = $this->input->get('term');
      $id_outlet = $this->input->get('id_outlet');
      $result = $this->penjualan_model->search_produk_extra($nama_produk, $id_outlet);
      if (count($result) > 0) {
        foreach ($result as $row)
          $data[] = array(
            'value' => $row->nama_produk,
            'id_produk' => $row->id_produk,
            'nama_produk' => $row->nama_produk,
            'kemasan' => $row->kemasan,
            'harga_beli' => $row->harga_beli,
            'harga_gb_200_dus' => $row->harga_jual,
            'harga_gb_150_dus' => $row->harga_jual,
            'harga_gb_50_dus' => $row->harga_jual,
            'harga_gb_k_50_dus' => $row->harga_jual,
            'harga_jpc_dus' => $row->harga_jual,
            'harga_jpc_botol' => $row->harga_jual,
            'harga_jpt_dus' => $row->harga_jual,
            'harga_jpt_botol' => $row->harga_jual,
            'harga_ky_t_bayar' => $row->harga_jual,
            'harga_ky_r_jual' => $row->harga_jual,
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
        "no_nota_penjualan" => $row['no_nota_penjualan'],
        "nama_salesman" => $row['nama_salesman'],
        "rute" => $row['rute'],
        "id_outlet" => $row['id_outlet'],
        "id_produk" => $row['id_produk'],
        "jumlah" => intval($row['jumlah']),
        "harga" => intval($row['harga']),
        "tipe_pembelian" => $row['tipe_pembelian'],
        "tempo" => intval($row['tempo']),
        "status" => $row['status'],
        "id_file_penjualan" => $row['id_file_penjualan'],
        "subtotal" => intval($row['subtotal']),
        "nama_produk" => $row['nama_produk'],
        "nama_admin" => $row['nama_admin'],
        "satuan" => $row['satuan'],
        "kemasan" => $row['kemasan'],
        "tanggal_bikin" => $row['tanggal_bikin']
      );
      //Call the save method
      $filter_data[] = $message;
      // echo gettype($filter_data);
      // var_dump($filter_data);
    }    
    $cek = $this->penjualan_model->insert_nota($filter_data);
    echo json_encode($cek);
  }
  /** Data nota */

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

    $cek = $this->penjualan_model->save_piutang($tanggal, $no_nota_penjualan, $tanggal_jatuh_tempo, $nominal_nota_penjualan, $terbayar, $tanggal_bayar, $sisa, $status);
    echo json_encode($cek);
  }
  /** Data Piutang */

  /** Cetak Nota*/
  function Daftar_nota(){
    $data = $this->penjualan_model->show_daftarnota();
    echo json_encode($data);
  }

  function Cetak_nota(){
    $ambildata['outlet'] = $this->penjualan_model->show_datanota();
    $ambildata['nota'] = $this->penjualan_model->show_daftarproduk();
    $this->load->view('admin/cetaknota', $ambildata);
  }

  function Cetak_nota_gpp(){
    $ambildata['outlet'] = $this->penjualan_model->show_datanota();
    $ambildata['nota'] = $this->penjualan_model->show_daftarproduk();
    $this->load->view('admin/cetaknota_gpp', $ambildata);
  }
  /** Cetak Nota*/

  /** Ubah Nota */
  function Ubah_nota(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/nota_penjualan_ubah');
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Cek_nota(){
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');
    $data = $this->penjualan_model->check_nota($no_nota_penjualan);
    echo json_encode($data);
  }

  function Buka_kunci(){
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');
    $password = md5($this->input->post("password"));

    $user_name = $this->session->userdata('user_name_olikuapp');
    $cek_user = $this->db->query("SELECT user_password FROM tbl_users WHERE jabatan='Admin' AND user_name!='$user_name' LIMIT 1");
    $password_cek = $cek_user->row()->user_password;

    if($password === $password_cek){      
      $data = "sukses";
      echo json_encode($data);
    }else{
      $data = "gagal";
      echo json_encode($data);
    }
    
  }

  function Izinkan(){
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');

    $cek_exist = $this->db->query("SELECT * FROM tbl_penjualan WHERE no_nota_penjualan='$no_nota_penjualan'");
    $exist = $cek_exist->num_rows();

    if($exist > 0){
      $data = $this->penjualan_model->buka_kunci($no_nota_penjualan);
      echo json_encode($data);
    }else{
      $data = "kosong";
      echo json_encode($data);
    }    
  }

  function Cari_nota(){
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');
    $data = $this->penjualan_model->tarik_nota($no_nota_penjualan);
    echo json_encode($data);
  }

  function Simpan_ubah(){
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');
    $id_produk = $this->input->post('id_produk');
    $jumlah = $this->input->post('jumlah');
    $subtotal = $this->input->post('subtotal');

    $data = $this->penjualan_model->save_ubahnota($no_nota_penjualan, $id_produk, $jumlah, $subtotal);
    echo json_encode($data);
  }

  function Kunci(){
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');
    $data = $this->penjualan_model->tutup_kunci($no_nota_penjualan);
    echo json_encode($data);
  }

  function Cek_diskon(){
    $data = $this->penjualan_model->cek_diskon();
    echo json_encode($data);
  }

  function simpan_item_ubah_nota(){
    $data = $this->penjualan_model->simpan_item_ubah_nota();
    echo json_encode($data);
  }

  function Delete_item_ubah_nota(){
    $data = $this->penjualan_model->delete_item_ubah_nota();
    echo json_encode($data);
  }

  function Hapus_piutang(){
    $data = $this->penjualan_model->hapus_piutang();
    echo json_encode($data);
  }

  function Input_piutang(){
    $data = $this->penjualan_model->input_piutang();
    echo json_encode($data);
  }
  /** Ubah Nota */

}