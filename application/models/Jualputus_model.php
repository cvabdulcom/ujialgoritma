<?php
class Jualputus_model extends CI_Model{

  /** pembuatan no nota */
  function get_id_outlet(){
    $tanggal = date('Y-m-d');
    $q = $this->db->query("SELECT MAX(RIGHT(id_outlet,4)) AS id_outlet FROM tbl_outlet WHERE DATE(tanggal_lahir)='$tanggal'");
    $kd = "";
    if($q->num_rows()>0){
      foreach($q->result() as $k){
        $tmp = ((int)$k->id_outlet)+1;
        $kd = sprintf("%04s", $tmp);
      }
    }else{
      $kd = "0001";
    }
    date_default_timezone_set('Asia/Jakarta');
    return date('dmy').$kd;
  }
  /** pembuatan no nota */

  /** SIMPAN DATA PRODUK */
  function save_jualputus($id_outlet, $nama_outlet, $kecamatan, $kota_kabupaten, $latitude, $longitude, $nama_pemilik, $tipe_outlet, $fasilitas, $supplier, $telepon, $whatsapp, $tanggal_lahir, $jumlah_pegawai, $alamat, $rute, $tipe_pembelian, $status_program, $foto_outlet, $foto_stokawal, $foto_kontrak, $foto_kontrak_tempo, $nama_salesman){
    $hasil = $this->db->query("INSERT INTO tbl_outlet(id_outlet, nama_outlet, kecamatan, kabupaten, latitude, longitude, nama_pemilik, tipe_outlet, fasilitas, supplier, telepon, ada_whatsapp, tanggal_lahir, jumlah_pegawai, alamat, rute, tipe_pembelian, status_program, foto_outlet, foto_stokawal, foto_kontrak, foto_kontrak_tempo, nama_salesman, diskon)
    VALUES('$id_outlet', '$nama_outlet', '$kecamatan', '$kota_kabupaten', '$latitude', '$longitude', '$nama_pemilik', '$tipe_outlet', '$fasilitas', '$supplier', '$telepon', '$whatsapp', '$tanggal_lahir', '$jumlah_pegawai', '$alamat', '$rute', '$tipe_pembelian', '$status_program', '$foto_outlet', '$foto_stokawal', '$foto_kontrak', '$foto_kontrak_tempo', '$nama_salesman', 'NORMAL')");
    return $hasil;
  }

  function filekontrak(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE tipe_pembelian='J' AND foto_kontrak='KOSONG' AND foto_kontrak_tempo='KOSONG' AND nama_salesman!='kantor'");
    return $hasil;
  }

  function kontraktempo(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE tipe_pembelian='J' AND foto_kontrak='KOSONG' AND foto_kontrak_tempo='KOSONG' AND status_program='JP CASH'");
    return $hasil;
  }

  function rekap(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE tipe_pembelian='J' AND status_program='COMPLETE'");
    return $hasil;
  }

  /** Data File Kontrak */
  function save_filekontrak(){
    $id_outlet = $this->input->post('id_outlet');
    $id_file = $this->input->post('id_file');
    $hasil = $this->db->query("UPDATE tbl_outlet SET foto_kontrak='$id_file' WHERE id_outlet='$id_outlet'");
    return $hasil;
  }
  /** Data File Kontrak */

  /** Data Kontrak Tempo */
  function save_filekontraktempo(){
    $id_outlet = $this->input->post('id_outlet');
    $id_file = $this->input->post('id_file');
    $hasil = $this->db->query("UPDATE tbl_outlet SET foto_kontrak_tempo='$id_file' WHERE id_outlet='$id_outlet'");
    return $hasil;
  }

  function status_program_tempo(){
    $id_outlet = $this->input->post('id_outlet');
    $hasil = $this->db->query("UPDATE tbl_outlet SET status_program='JP TEMPO' WHERE id_outlet='$id_outlet'");
    return $hasil;
  }
  /** Data Kontrak Tempo */

}