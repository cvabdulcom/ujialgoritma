<?php
class Extradiskon extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('extradiskon_model');
  }

  // ################################################ EXTRA DISKON [1] ##########################################
  function Index(){
    $ambildata['extradiskon'] = $this->extradiskon_model->show_extradiskon();
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/extradiskon', $ambildata);
      $this->load->view('superadmin/footer');
    }else if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/extradiskon', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Tarik_produk(){
    $data = $this->extradiskon_model->tarik_produk();
    echo json_encode($data);
  }

  function Simpan(){
    $data = $this->input->post('data');
    $req = json_decode($data, true);
    $filter_data = array();

    foreach($req as $row) {
      $message = array(
        "id_outlet" => $row['id_outlet'],
        "nama_outlet" => $row['nama_outlet'],
        "alamat" => $row['alamat'],
        "id_produk" => $row['id_produk'],
        "nama_produk" => $row['nama_produk'],
        "harga_beli" => intval($row['harga_beli']),
        "harga_jual" => intval($row['harga_jual']),
        "kemasan" => intval($row['kemasan']),
        "isi" => $row['isi']
      );
      $filter_data[] = $message;
    }    
    $cek = $this->extradiskon_model->simpan($filter_data);
    echo json_encode($cek);
  }

  function Ubah_diskon(){
    $data = $this->extradiskon_model->ubah_diskon();
    echo json_encode($data);
  }

  function Hapus_extradiskon(){
    $this->extradiskon_model->hapus_diskon();
    $this->extradiskon_model->ubah_status();
    $this->extradiskon_model->tanggal_cabut();
    redirect('extradiskon');
  }

  function Setuppage(){
    $ambildata['extradiskon_setup'] = $this->extradiskon_model->show_extradiskon_setup();
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/extradiskon_setup', $ambildata);
      $this->load->view('superadmin/footer');
    }else if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/extradiskon_setup', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Get_data(){
    $data = $this->extradiskon_model->get_data();
    echo json_encode($data);
  }

  function Simpan_extra(){
    $data = $this->extradiskon_model->simpan_extra();
    echo json_encode($data);
  }

  function Simpan_riwayat(){
    $data = $this->extradiskon_model->simpan_riwayat();
    echo json_encode($data);
  }

  function Hapus_reset(){
    $data = $this->extradiskon_model->hapus_reset();
    echo json_encode($data);
  }

}