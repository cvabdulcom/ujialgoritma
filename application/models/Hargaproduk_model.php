<?php
class Hargaproduk_model extends CI_Model{
  
  /** MENAMPILKAN DATA PRODUK */
  function show_harga(){
    $hasil = $this->db->query("SELECT * FROM tbl_produk ORDER BY nama_produk ASC");
    return $hasil;
  }

  /** MENAMPILKAN DATA RIWAYAT */
  function riwayat_harga(){
    $hasil = $this->db->query("SELECT DISTINCT kode_upload, tanggal_upload FROM tbl_produk_riwayat ORDER BY tanggal_upload DESC");
    return $hasil;
  }

  /** Fungsi model untuk upload file */
  public function upload_file($filename){
    $this->load->library('upload'); // Load librari upload
    
    $config['upload_path'] = './assets/document/';
    $config['allowed_types'] = 'csv';
    $config['max_size']  = '10048';
    $config['overwrite'] = true;
    $config['file_name'] = $filename;
  
    $this->upload->initialize($config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('fileharga')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'fileharga' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'fileharga' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }

  public function delete_hargaproduk(){
    $hasil = $this->db->query("DELETE FROM tbl_produk");
    return $hasil;
  }

  public function insert_multiple($data){
    $this->db->insert_batch('tbl_produk', $data);
  }

  public function insert_multiple_riwayat($data_riwayat){
    $this->db->insert_batch('tbl_produk_riwayat', $data_riwayat);
  }

  function show_stokgudang(){
    $id_produk = $this->input->post('id_produk');
    $hasil = $this->db->query("SELECT tbl_stokgudang.tanggal, tbl_stokgudang.id_produk, tbl_stokgudang.masuk_keluar, tbl_stokgudang.jumlah, tbl_stokgudang.keterangan, tbl_stokgudang.no_surat_jalan, tbl_produk.nama_produk FROM tbl_stokgudang, tbl_produk WHERE tbl_stokgudang.id_produk=tbl_produk.id_produk AND tbl_stokgudang.id_produk='$id_produk' ORDER BY tanggal DESC");
    return $hasil;
  }

  function show_stokoutlet(){
    $id_produk = $this->input->post('id_produk');
    $hasil = $this->db->query("SELECT tbl_outlet.nama_outlet, tbl_stokoutlet.tanggal, tbl_stokoutlet.id_produk, tbl_stokoutlet.masuk_keluar, tbl_stokoutlet.jumlah, tbl_stokoutlet.no_actiontracking, tbl_produk.nama_produk FROM tbl_stokoutlet, tbl_produk, tbl_outlet WHERE tbl_stokoutlet.id_produk=tbl_produk.id_produk AND tbl_outlet.id_outlet=tbl_stokoutlet.id_outlet AND tbl_stokoutlet.id_produk='$id_produk' ORDER BY tanggal DESC");
    return $hasil;
  }

  /** ID Produk */
  function get_id_produk(){
    $q = $this->db->query("SELECT MAX(CAST(SUBSTRING(id_produk, 4, length(id_produk)-3) AS INT)) AS id_produk FROM tbl_produk");
    $kd = "";
    if($q->num_rows()>0){
      foreach($q->result() as $k){
        $kd = ((int)$k->id_produk)+1;
      }
    }else{
      $kd = "1";
    }
    return $kd;
  }
  /** ID Produk */

  /** Fungsi tambah produk */
  function Tambah_produk(){
    $id_produk = $this->input->post('id_produk');
    $nama_produk = $this->input->post('nama_produk');
    $kemasan = $this->input->post('kemasan');
    $isi = $this->input->post('isi');
    $harga_beli = $this->input->post('harga_beli');
    // $harga_gb_200_dus = (round($harga_beli/0.9875, -2));
    // $harga_gb_150_dus = (round($harga_beli/0.975, -2));
    // $harga_gb_50_dus = (round($harga_beli/0.965, -2));
    // $harga_gb_k_50_dus = (round($harga_beli/0.955, -2));
    // $harga_jpc_dus = (round($harga_beli/0.955, -2));
    // $harga_jpc_botol = (round($harga_beli/0.945, -2));
    // $harga_jpt_dus = (round($harga_jpc_dus/0.98, -2));
    // $harga_jpt_botol = (round($harga_jpc_botol/0.98, -2));
    // $harga_ky_t_bayar = (round($harga_beli*1.15, -2));
    // $harga_ky_r_jual = (round($harga_ky_t_bayar/0.9, -3));

    $harga_gb_200_dus = $this->input->post('harga_gb_200_dus');
    $harga_gb_150_dus = $this->input->post('harga_gb_150_dus');
    $harga_gb_50_dus = $this->input->post('harga_gb_50_dus');
    $harga_gb_k_50_dus = $this->input->post('harga_gb_k_50_dus');
    $harga_jpc_dus = $this->input->post('harga_jpc_dus');
    $harga_jpc_botol = $this->input->post('harga_jpc_botol');
    $harga_jpt_dus = $this->input->post('harga_jpt_dus');
    $harga_jpt_botol = $this->input->post('harga_jpt_botol');
    $harga_ky_t_bayar = $this->input->post('harga_ky_t_bayar');
    $harga_ky_r_jual = $this->input->post('harga_ky_r_jual');

    $hasil = $this->db->query("INSERT INTO tbl_produk(id_produk, nama_produk, kemasan, isi, harga_beli, harga_gb_200_dus, harga_gb_150_dus, harga_gb_50_dus, harga_gb_k_50_dus, harga_jpc_dus, harga_jpc_botol, harga_jpt_dus, harga_jpt_botol, harga_ky_t_bayar, harga_ky_r_jual) 
        VALUES('$id_produk', '$nama_produk', '$kemasan', '$isi', '$harga_beli', '$harga_gb_200_dus', '$harga_gb_150_dus', '$harga_gb_50_dus', '$harga_gb_k_50_dus', '$harga_jpc_dus', '$harga_jpc_botol', '$harga_jpt_dus', '$harga_jpt_botol', '$harga_ky_t_bayar', '$harga_ky_r_jual');");
    return $hasil;
  }
  /** Fungsi tambah produk */

  /** Fungsi ubah produk */
  function Ubah_produk(){
    $id_produk = $this->input->post('id_produk_ubah');
    $nama_produk = $this->input->post('nama_produk_ubah');
    $kemasan = $this->input->post('kemasan_ubah');
    $isi = $this->input->post('isi_ubah');
    $harga_beli = $this->input->post('harga_beli_ubah');
    $harga_gb_200_dus = $this->input->post('harga_gb_200_dus_ubah');
    $harga_gb_150_dus = $this->input->post('harga_gb_150_dus_ubah');
    $harga_gb_50_dus = $this->input->post('harga_gb_50_dus_ubah');
    $harga_gb_k_50_dus = $this->input->post('harga_gb_k50_dus_ubah');
    $harga_jpc_dus = $this->input->post('harga_jpc_dus_ubah');
    $harga_jpc_botol = $this->input->post('harga_jpc_botol_ubah');
    $harga_jpt_dus = $this->input->post('harga_jpt_dus_ubah');
    $harga_jpt_botol = $this->input->post('harga_jpt_botol_ubah');
    $harga_ky_t_bayar = $this->input->post('harga_kyt_bayar_ubah');
    $harga_ky_r_jual = $this->input->post('harga_kyr_jual_ubah');

    $hasil = $this->db->query("UPDATE tbl_produk SET nama_produk='$nama_produk', kemasan='$kemasan', isi='$isi', harga_beli='$harga_beli', harga_gb_200_dus='$harga_gb_200_dus', harga_gb_150_dus='$harga_gb_150_dus', harga_gb_50_dus='$harga_gb_50_dus', harga_gb_k_50_dus='$harga_gb_k_50_dus', harga_jpc_dus='$harga_jpc_dus', harga_jpc_botol='$harga_jpc_botol', harga_jpt_dus='$harga_jpt_dus', harga_jpt_botol='$harga_jpt_botol', harga_ky_t_bayar='$harga_ky_t_bayar', harga_ky_r_jual='$harga_ky_r_jual' WHERE id_produk='$id_produk'");
    return $hasil;
  }
  /** Fungsi ubah produk */

  function hapus_produk(){
    $id_produk = $this->input->post('id_produk');
    $hasil = $this->db->query("DELETE FROM tbl_produk WHERE id_produk='$id_produk'");
    return $hasil;
  }

  function blokir_extra(){
    $hasil = $this->db->query("UPDATE tbl_outlet SET diskon='BLOKIR' WHERE diskon='EXTRA'");
    return $hasil;
  }

}