<?php
class Hapusdata_model extends CI_Model{
  
  /** nota penjualan */
  function show_nota_penjualan(){
    if(!empty($this->input->get('tanggal_awal'))){
      $tanggal_awal = $this->input->get('tanggal_awal');
      $tanggal_akhir = $this->input->get('tanggal_akhir');
      $hasil = $this->db->query("SELECT DISTINCT no_nota_penjualan, tanggal, tipe_pembelian, status, id_file_penjualan, nama_salesman FROM tbl_penjualan WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir' ORDER BY tanggal DESC");
    }else{
      $hasil = $this->db->query("SELECT DISTINCT no_nota_penjualan, tanggal, tipe_pembelian, status, id_file_penjualan, nama_salesman FROM tbl_penjualan ORDER BY tanggal DESC LIMIT 100");
    }
    return $hasil;
  }
  function delete_notapenjualan(){
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');
    $hasil = $this->db->query("DELETE FROM tbl_penjualan WHERE no_nota_penjualan='$no_nota_penjualan'");
    return $hasil;
  }
  /** nota penjualan */

  /** surat jalan */
  function show_suratjalan(){
    if(!empty($this->input->get('tanggal_awal'))){
      $tanggal_awal = $this->input->get('tanggal_awal');
      $tanggal_akhir = $this->input->get('tanggal_akhir');
      $hasil = $this->db->query("SELECT * FROM tbl_suratjalan WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir' ORDER BY tanggal DESC");
    }else{
      $hasil = $this->db->query("SELECT * FROM tbl_suratjalan ORDER BY tanggal DESC LIMIT 100");
    }
    return $hasil;
  }
  function delete_suratjalan(){
    $no_suratjalan = $this->input->post('no_suratjalan');
    $hasil = $this->db->query("DELETE FROM tbl_suratjalan WHERE no_suratjalan='$no_suratjalan'");
    return $hasil;
  }
  /** surat jalan */

  /** Data Stok */
  function show_datastok(){
    if(!empty($this->input->get('tanggal_awal'))){
      $tanggal_awal = $this->input->get('tanggal_awal');
      $tanggal_akhir = $this->input->get('tanggal_akhir');
      $hasil = $this->db->query("SELECT DISTINCT no_surat_jalan, tanggal, keterangan FROM tbl_stokgudang WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir' ORDER BY tanggal DESC");
    }else{
      $hasil = $this->db->query("SELECT DISTINCT no_surat_jalan, tanggal, keterangan FROM tbl_stokgudang ORDER BY tanggal DESC LIMIT 100");
    }
    return $hasil;
  }
  function delete_datastok_gudang(){
    $no_suratjalan = $this->input->post('no_suratjalan');
    $hasil = $this->db->query("DELETE FROM tbl_stokgudang WHERE no_surat_jalan='$no_suratjalan'");
    return $hasil;
  }
  function delete_datastok_outlet(){
    $no_suratjalan = $this->input->post('no_suratjalan');
    $hasil = $this->db->query("DELETE FROM tbl_stokoutlet WHERE no_actiontracking='$no_suratjalan'");
    return $hasil;
  }
  /** Data Stok */

  /** SJ Outlet */
  function show_sjoutlet(){
    $hasil = $this->db->query("SELECT DISTINCT tbl_stokoutlet_detail.id_outlet, tbl_outlet.nama_outlet, tbl_outlet.nama_salesman, tbl_outlet.status_program, tbl_outlet.alamat
      FROM tbl_stokoutlet_detail, tbl_outlet
      WHERE tbl_stokoutlet_detail.id_outlet = tbl_outlet.id_outlet LIMIT 500");
    return $hasil;
  }
  function delete_sjoutlet(){
    $id_outlet = $this->input->post('id_outlet');
    $hasil = $this->db->query("DELETE FROM tbl_stokoutlet_detail WHERE id_outlet='$id_outlet'");
    return $hasil;
  }
  /** SJ Outlet */

  /** Pembelian */
  function show_pembelian(){
    if(!empty($this->input->get('tanggal_awal'))){
      $tanggal_awal = $this->input->get('tanggal_awal');
      $tanggal_akhir = $this->input->get('tanggal_akhir');
      $hasil = $this->db->query("SELECT DISTINCT no_nota_pembelian, tanggal, supplier, status, nama_admin FROM tbl_pembelian WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir' ORDER BY tanggal DESC");
    }else{
      $hasil = $this->db->query("SELECT DISTINCT no_nota_pembelian, tanggal, supplier, status, nama_admin FROM tbl_pembelian ORDER BY tanggal DESC LIMIT 100");
    }
    return $hasil;
  }
  function delete_pembelian(){
    $no_nota_pembelian = $this->input->post('no_nota_pembelian');
    $hasil = $this->db->query("DELETE FROM tbl_pembelian WHERE no_nota_pembelian='$no_nota_pembelian'");
    return $hasil;
  }
  /** Pembelian */

  /** Data Outlet */
  function show_dataoutlet(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet");
    return $hasil;
  }
  function delete_dataoutlet(){
    $id_outlet = $this->input->post('id_outlet');
    $hasil = $this->db->query("DELETE FROM tbl_outlet WHERE id_outlet='$id_outlet'");
    return $hasil;
  }
  /** Data Outlet */

  /** Data Piutang */
  function show_datapiutang(){
    if(!empty($this->input->get('tanggal_awal'))){
      $tanggal_awal = $this->input->get('tanggal_awal');
      $tanggal_akhir = $this->input->get('tanggal_akhir');
      $hasil = $this->db->query("SELECT * FROM tbl_piutang WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir' ORDER BY tanggal DESC");
    }else{
      $hasil = $this->db->query("SELECT * FROM tbl_piutang ORDER BY tanggal DESC LIMIT 100");
    }
    return $hasil;
  }
  function delete_datapiutang(){
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');
    $terbayar = $this->input->post('terbayar');
    $hasil = $this->db->query("DELETE FROM tbl_piutang WHERE no_nota_penjualan='$no_nota_penjualan' AND terbayar='$terbayar'");
    return $hasil;
  }
  function delete_datapiutang_nota(){
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');
    $hasil = $this->db->query("DELETE FROM tbl_piutang WHERE no_nota_penjualan='$no_nota_penjualan'");
    return $hasil;
  }

  function delete_stokoutlet_keluar(){
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');
    $hasil = $this->db->query("DELETE FROM tbl_stokoutlet WHERE no_actiontracking='$no_nota_penjualan'");
    return $hasil;
  }
  /** Data Piutang */

  /** Data Kas Harian */
  function show_datakas(){
    if(!empty($this->input->get('tanggal_awal'))){
      $tanggal_awal = $this->input->get('tanggal_awal');
      $tanggal_akhir = $this->input->get('tanggal_akhir');
      $hasil = $this->db->query("SELECT * FROM tbl_kas_1 WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir' ORDER BY tanggal DESC");
    }else{
      $hasil = $this->db->query("SELECT * FROM tbl_kas_1 ORDER BY tanggal DESC LIMIT 100");
    }
    return $hasil;
  }

  function delete_datakas(){
    $id_kas = $this->input->post('id_kas');
    $tanggal = $this->input->post('tanggal');
    $account_transaksi = $this->input->post('account_transaksi');
    $tipe = $this->input->post('tipe');
    $jenis = $this->input->post('jenis');
    $nominal = $this->input->post('nominal');
    $hasil = $this->db->query("DELETE FROM tbl_kas_1 WHERE id_kas='$id_kas' AND tanggal='$tanggal' AND account_transaksi='$account_transaksi' AND tipe='$tipe' AND jenis='$jenis' AND nominal='$nominal'");
    return $hasil;
  }
  /** Data Kas Harian */

  /** Data Setoran */
  function show_datasetoran(){
    if(!empty($this->input->get('tanggal_awal'))){
      $tanggal_awal = $this->input->get('tanggal_awal');
      $tanggal_akhir = $this->input->get('tanggal_akhir');
      $hasil = $this->db->query("SELECT * FROM tbl_kas_2 WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir' ORDER BY tanggal DESC");
    }else{
      $hasil = $this->db->query("SELECT * FROM tbl_kas_2 ORDER BY tanggal DESC LIMIT 100");
    }
    return $hasil;
  }

  function delete_datasetoran(){
    $id_kas = $this->input->post('id_kas');
    $hasil = $this->db->query("DELETE FROM tbl_kas_2 WHERE id_kas='$id_kas'");
    return $hasil;
  }
  /** Data Setoran */

  /** Deliver Nota */
  function deliver_nota(){
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');
    $hasil = $this->db->query("UPDATE tbl_penjualan SET status='DELIVER' WHERE no_nota_penjualan='$no_nota_penjualan'");
    return $hasil;
  }
  /** Deliver Nota */

}