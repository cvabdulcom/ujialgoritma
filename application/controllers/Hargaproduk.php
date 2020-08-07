<?php
class Hargaproduk extends CI_Controller{
  private $filename = "import_data_produk";
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login jika belum maka ke halaman login
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){
      redirect('login');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('hargaproduk_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Index(){
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $ambildata['idp'] = $this->hargaproduk_model->get_id_produk();
      $ambildata['harga'] = $this->hargaproduk_model->show_harga();
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/hargaproduk', $ambildata);
      $this->load->view('superadmin/footer');
    }else if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['harga'] = $this->hargaproduk_model->show_harga();
      $this->load->view('admin/header');
      $this->load->view('admin/hargaproduk', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Cetak_pricelist(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['harga'] = $this->hargaproduk_model->show_harga();
      $this->load->view('admin/hargaproduk_cetak', $ambildata);
    }else{ 
      echo "Access Denied";
    }
  }

  function Riwayat(){
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $ambildata['harga'] = $this->hargaproduk_model->riwayat_harga();
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/riwayat_harga', $ambildata);
      $this->load->view('superadmin/footer');
    }else if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/riwayat_harga');
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function View_harga(){
    $ambildata['view_harga'] = $this->hargaproduk_model->view_harga();
    $ambildata['harga_aktif'] = $this->hargaproduk_model->show_produk_aktif();
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $this->load->view('superadmin/view_harga', $ambildata);
    }else if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/view_harga', $ambildata);
    }else{ 
      echo "Access Denied";
    }
  }

  public function validasi(){
    $data = array(); // Buat variabel $data sebagai array
    
    if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
      
      $upload = $this->hargaproduk_model->upload_file($this->filename);
      
      if($upload['result'] == "success"){ // Jika proses upload sukses
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        
        $csvreader = PHPExcel_IOFactory::createReader('CSV');
        $loadcsv = $csvreader->load('./assets/document/'.$this->filename.'.csv'); // Load file yang tadi diupload ke folder csv
        $sheet = $loadcsv->getActiveSheet()->getRowIterator();
        
        // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
        // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam csv yang sudha di upload sebelumnya
        $data['sheet'] = $sheet;
      }else{ // Jika proses upload gagal
        $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }
    
    if($this->session->userdata('user_level_olikuapp')==='1'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/validasi', $data);
      $this->load->view('superadmin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  public function import(){
    // Load plugin PHPExcel nya
    include APPPATH.'third_party/PHPExcel/PHPExcel.php';
    
    $csvreader = PHPExcel_IOFactory::createReader('CSV');
    $loadcsv = $csvreader->load('assets/document/'.$this->filename.'.csv'); // Load file yang tadi diupload ke folder csv
    $sheet = $loadcsv->getActiveSheet()->getRowIterator();
    
    // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
    $data = array();
    $data_riwayat = array();
    
    $numrow = 1;
    foreach($sheet as $row){
      // Cek $numrow apakah lebih dari 1
      // Artinya karena baris pertama adalah nama-nama kolom
      // Jadi dilewat saja, tidak usah diimport
      if($numrow > 1){
        // START -->
        // Skrip untuk mengambil value nya
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
        
        $get = array();// Valuenya akan di simpan kedalam array,dimulai dari index ke 0
        foreach ($cellIterator as $cell) {
          array_push($get, $cell->getValue()); // Menambahkan value ke variabel array $get
        }
        // <-- END
        
        // Ambil data value yang telah di ambil dan dimasukkan ke variabel $get

        $kode_upload = date("dmYhis");
        $tanggal_upload = date("Y-m-d");
        
        $id_produk = $get[0];
        $nama_produk = $get[1]; 
        $kemasan = $get[2]; 
        $isi = $get[3];
        $harga_beli = $get[4];
        $harga_gb_200_dus = $get[5]; 
        $harga_gb_150_dus = $get[6]; 
        $harga_gb_50_dus = $get[7]; 
        $harga_gb_k_50_dus = $get[8]; 
        $harga_jpc_dus = $get[9]; 
        $harga_jpc_botol = $get[10]; 
        $harga_jpt_dus = $get[11]; 
        $harga_jpt_botol = $get[12]; 
        $harga_ky_t_bayar = $get[13]; 
        $harga_ky_r_jual = $get[14];
        $segmen = $get[15];

        // Kita push (add) array data ke variabel data
        array_push($data, array(
          'id_produk' => $id_produk,
          'nama_produk' => $nama_produk,
          'kemasan' => $kemasan, 
          'isi' => $isi,
          'harga_beli' => $harga_beli,
          'harga_gb_200_dus' => $harga_gb_200_dus,
          'harga_gb_150_dus' => $harga_gb_150_dus,
          'harga_gb_50_dus' => $harga_gb_50_dus,
          'harga_gb_k_50_dus' => $harga_gb_k_50_dus,
          'harga_jpc_dus' => $harga_jpc_dus,
          'harga_jpc_botol' => $harga_jpc_botol,
          'harga_jpt_dus' => $harga_jpt_dus,
          'harga_jpt_botol' => $harga_jpt_botol,
          'harga_ky_t_bayar' => $harga_ky_t_bayar,
          'harga_ky_r_jual' => $harga_ky_r_jual,
          'segmen' => $segmen
        ));

        array_push($data_riwayat, array(
          'kode_upload' => $kode_upload,
          'tanggal_upload' => $tanggal_upload,
          'id_produk' => $id_produk,
          'nama_produk' => $nama_produk,
          'kemasan' => $kemasan, 
          'isi' => $isi,
          'harga_beli' => $harga_beli,
          'harga_gb_200_dus' => $harga_gb_200_dus,
          'harga_gb_150_dus' => $harga_gb_150_dus,
          'harga_gb_50_dus' => $harga_gb_50_dus,
          'harga_gb_k_50_dus' => $harga_gb_k_50_dus,
          'harga_jpc_dus' => $harga_jpc_dus,
          'harga_jpc_botol' => $harga_jpc_botol,
          'harga_jpt_dus' => $harga_jpt_dus,
          'harga_jpt_botol' => $harga_jpt_botol,
          'harga_ky_t_bayar' => $harga_ky_t_bayar,
          'harga_ky_r_jual' => $harga_ky_r_jual,
          'segmen' => $segmen
        ));
      }
      
      $numrow++; // Tambah 1 setiap kali looping
    }
    // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
    $this->hargaproduk_model->delete_hargaproduk();
    $this->hargaproduk_model->insert_multiple($data);
    $this->hargaproduk_model->insert_multiple_riwayat($data_riwayat);
    $this->hargaproduk_model->blokir_extra();
    
    redirect("hargaproduk"); // Redirect ke halaman awal (ke controller siswa fungsi index)
  }

  function Riwayat_stok_keluar_masuk(){
    $ambildata['harga'] = $this->hargaproduk_model->show_harga();
    $ambildata['stokgudang'] = $this->hargaproduk_model->show_stokgudang();
    $ambildata['stokoutlet'] = $this->hargaproduk_model->show_stokoutlet();
    $this->load->view('admin/riwayat_stok_keluar_masuk', $ambildata);
  }

  function Tambah_produk(){
    $this->hargaproduk_model->tambah_produk();
    redirect('hargaproduk');
  }

  function Ubah_produk(){
    $this->hargaproduk_model->ubah_produk();
    redirect('hargaproduk');
  }

  function Hapus_produk(){
    $this->hargaproduk_model->hapus_produk();
    redirect('hargaproduk');
  }

  function Blokir_extra(){
    $this->hargaproduk_model->blokir_extra();
    redirect('hargaproduk');
  }

}