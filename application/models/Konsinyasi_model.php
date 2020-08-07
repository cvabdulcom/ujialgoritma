<?php
class Konsinyasi_model extends CI_Model{

  /** SIMPAN DATA PRODUK */
  function save_konsinyasi($id_outlet, $nama_outlet, $kecamatan, $kabupaten, $alamat, $latitude, $longitude, $nama_pemilik, $telepon, $ada_whatsapp, $tanggal_lahir, $tipe_outlet, $jumlah_pegawai, $fasilitas, $supplier, $rute, $tipe_pembelian, $nama_salesman, $status_program, $foto_outlet, $foto_stokawal, $foto_kontrak, $foto_kontrak_tempo){
    $hasil = $this->db->query("INSERT INTO tbl_outlet(id_outlet, nama_outlet, kecamatan, kabupaten, alamat, latitude, longitude, nama_pemilik, telepon, ada_whatsapp, tanggal_lahir, tipe_outlet, jumlah_pegawai, fasilitas, supplier, rute, tipe_pembelian, nama_salesman, status_program, foto_outlet, foto_stokawal, foto_kontrak, foto_kontrak_tempo, diskon)
    VALUES('$id_outlet', '$nama_outlet', '$kecamatan', '$kabupaten', '$alamat', '$latitude', '$longitude', '$nama_pemilik', '$telepon', '$ada_whatsapp', '$tanggal_lahir', '$tipe_outlet', '$jumlah_pegawai', '$fasilitas', '$supplier', '$rute', '$tipe_pembelian', '$nama_salesman', '$status_program', '$foto_outlet', '$foto_stokawal', '$foto_kontrak', '$foto_kontrak_tempo', 'NORMAL')");
    return $hasil;
  }

  function filekontrak(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE tipe_pembelian='K' AND foto_kontrak='KOSONG' AND foto_stokawal='KOSONG' AND nama_salesman!='kantor'");
    return $hasil;
  }

  function stokawal(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE tipe_pembelian='K' AND foto_kontrak!='KOSONG' AND foto_stokawal='KOSONG' AND nama_salesman!='kantor'");
    return $hasil;
  }

  function stokawal_data_outlet(){
    $kode_outlet = $this->input->post('kode_outlet');
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE kode_outlet='$kode_outlet'");
    return $hasil;
  }

  function show_produk(){
    $hasil = $this->db->query("SELECT * FROM tbl_produk, tbl_produk_file WHERE tbl_produk.id_harga_produk=tbl_produk_file.id_harga_produk AND tbl_produk_file.id=(SELECT id_harga_produk FROM tbl_main) ORDER BY tbl_produk.nama_produk ASC");
    return $hasil;
  }

  function rekap(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE tipe_pembelian='K' AND status_program='COMPLETE'");
    return $hasil;
  }

  /** Stok awal Start */

  function save_stokawal($kode_outlet, $nama_produk, $stok_awal){
    $hasil=$this->db->query("INSERT INTO tbl_stokawal (kode_outlet, nama_produk, stok_awal)VALUES('$kode_outlet','$nama_produk','$stok_awal')");
    return $hasil;
  }

  function show_stokawal($kode_outlet){
    $hasil = $this->db->query("SELECT * FROM tbl_stokawal WHERE kode_outlet='$kode_outlet'");
    return $hasil->result();
  }

  function delete_stokawal($kode_outlet, $nama_produk){
    $hasil = $this->db->query("DELETE FROM tbl_stokawal WHERE kode_outlet='$kode_outlet' AND nama_produk='$nama_produk'");
    return $hasil;
  }

  /** Stok awal End */


  /** File Kontrak */
  function save_filekontrak(){
    $id_outlet = $this->input->post('id_outlet');
    $id_file = $this->input->post('id_file');
    $hasil = $this->db->query("UPDATE tbl_outlet SET foto_kontrak='$id_file' WHERE id_outlet='$id_outlet'");
    return $hasil;
  }
  /** File Kontrak */

  /** File Stokawal */
  function save_filestokawal(){
    $id_outlet = $this->input->post('id_outlet');
    $id_file = $this->input->post('id_file');
    $hasil = $this->db->query("UPDATE tbl_outlet SET foto_stokawal='$id_file' WHERE id_outlet='$id_outlet'");
    return $hasil;
  }
  /** File Stokawal */

  /** konsinyasi */ 
  function status_program_approve(){
    $id_outlet = $this->input->post('id_outlet');
    $hasil = $this->db->query("UPDATE tbl_outlet SET status_program='APPROVE' WHERE id_outlet='$id_outlet'");
    return $hasil;
  }

  function status_program_complete(){
    $id_outlet = $this->input->post('id_outlet');
    $hasil = $this->db->query("UPDATE tbl_outlet SET status_program='COMPLETE' WHERE id_outlet='$id_outlet'");
    return $hasil;
  }
  /** konsinyasi */ 

}