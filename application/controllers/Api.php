<?php
class Api extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('api_model');
  }  

  /** Fungsi login */
  function Cek_login(){
    $data = $this->api_model->cek_login();
    echo json_encode($data);
  }
  /** Fungsi login */

  /** Fungsi pendataan */
  function Simpan_pendataan(){
    $data = $this->api_model->simpan_pendataan();
    echo json_encode($data);
  }
  /** Fungsi pendataan */

  /** Fungsi radius */
  function Radius_data(){
    $data = $this->api_model->radius_data();
    echo json_encode($data);
  }
  /** Fungsi radius */

  /** Fungsi batch */
  function Batch_number(){
    $data = $this->api_model->batch_number();
    echo json_encode($data);
  }
  /** Fungsi batch */

  /** Fungsi penawaran */
  function Data_outlet(){
    $data = $this->api_model->data_outlet();
    echo json_encode($data);
  }

  function Simpan_penawaran(){
    $data = $this->api_model->simpan_penawaran();
    echo json_encode($data);
  }
  /** Fungsi penawaran */

  /** Fungsi perbaikan */
  function Data_outlet_full(){
    $data = $this->api_model->data_outlet_full();
    echo json_encode($data);
  }

  function Simpan_perbaikan(){
    $data = $this->api_model->simpan_perbaikan();
    echo json_encode($data);
  }
  /** Fungsi perbaikan */

  /** Fungsi kunjungan */
  function Simpan_informasi(){
    $data = $this->api_model->simpan_informasi();
    echo json_encode($data);
  }

  function No_nota(){
    $data = $this->api_model->no_nota();
    echo json_encode($data);
  }

  function Data_outlet_konsinyasi(){
    $data = $this->api_model->data_outlet_full();
    echo json_encode($data);
  }

  function Data_produk(){
    $data = $this->api_model->data_produk();
    echo json_encode($data);
  }

    /** Fungsi simpan kunjuangan */
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
        $filter_data[] = $message;
      }
      $data = $this->api_model->simpan_nota($filter_data);
      echo json_encode($data);
    }

    function Simpan_stokoutlet(){
      $data = $this->input->post('data');
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
      $data = $this->api_model->simpan_stokoutlet($filter_data);
      echo json_encode($data);
    }

    function Simpan_piutang(){
      $data = $this->api_model->simpan_piutang();
      echo json_encode($data);
    }

    function Simpan_kunjungan(){
      $data = $this->api_model->simpan_kunjungan();
      echo json_encode($data);
    }
    /** Fungsi simpan kunjuangan */

  /** Fungsi kunjungan */

  /** Fungsi Cetak Nota */
  function Cetak_nota(){
    $data = $this->api_model->cetak_nota();
    echo json_encode($data);
  }
  /** Fungsi Cetak Nota */

  /** Fungsi Belum Minat */
  function Belumminat(){
    $data = $this->api_model->belumminat();
    echo json_encode($data);
  }
 /** Fungsi Belum Minat */

 /** Fungsi Tarik Nota */
  function Tarik_nota(){
    $data = $this->api_model->tariknota();
    echo json_encode($data);
  }
 /** Fungsi Tarik Nota */

}