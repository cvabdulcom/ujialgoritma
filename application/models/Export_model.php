<?php
class Export_model extends CI_Model{

  function outlet(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet");
    return $hasil->result();
  }

  function piutang(){
    $hasil = $this->db->query("SELECT * FROM tbl_piutang");
    return $hasil->result();
  }

  function nota_penjualan(){
    $tanggal_pertama = $this->input->post('tanggal_pertama');
    $tanggal_terakhir = $this->input->post('tanggal_terakhir');
    $hasil = $this->db->query("SELECT DISTINCT tbl_penjualan.no_nota_penjualan, 
          tbl_outlet.nama_outlet, 
          tbl_penjualan.tanggal, 
          tbl_penjualan.tipe_pembelian, 
          tbl_penjualan.status, 
          tbl_penjualan.id_file_penjualan, 
          tbl_penjualan.nama_salesman,
          tbl_penjualan.tempo
      FROM tbl_penjualan, tbl_outlet
      WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet 
      AND tbl_penjualan.tanggal BETWEEN '$tanggal_pertama' AND '$tanggal_terakhir'
      ORDER BY tanggal DESC");
    return $hasil->result();
  }

  function penjualan(){
    $tanggal_pertama = $this->input->post('tanggal_pertama');
    $tanggal_terakhir = $this->input->post('tanggal_terakhir');
    $hasil = $this->db->query("SELECT tbl_outlet.nama_outlet,
          tbl_penjualan.tanggal,
          tbl_penjualan.no_nota_penjualan,
          tbl_penjualan.nama_salesman,
          tbl_penjualan.rute,
          tbl_penjualan.id_outlet,
          tbl_penjualan.id_produk,
          tbl_penjualan.jumlah,
          tbl_penjualan.harga,
          tbl_penjualan.tipe_pembelian,
          tbl_penjualan.tempo,
          tbl_penjualan.status,
          tbl_penjualan.id_file_penjualan,
          tbl_penjualan.subtotal,
          tbl_penjualan.nama_produk,
          tbl_penjualan.nama_admin,
          tbl_penjualan.izin,
          tbl_penjualan.satuan,
          tbl_penjualan.kemasan,
          tbl_penjualan.tanggal_bikin,
          tbl_produk.segmen
      FROM tbl_penjualan,tbl_outlet,tbl_produk
      WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet
      AND tbl_penjualan.id_produk = tbl_produk.id_produk
      AND tbl_penjualan.tanggal BETWEEN '$tanggal_pertama' AND '$tanggal_terakhir'
      ORDER BY tbl_penjualan.tanggal DESC");
    return $hasil->result();
  }

  function pembelian(){
    $hasil = $this->db->query("SELECT * FROM tbl_pembelian");
    return $hasil->result();
  }

  function kas_1(){
    $hasil = $this->db->query("SELECT * FROM tbl_kas_1");
    return $hasil->result();
  }

  function kas_2(){
    $hasil = $this->db->query("SELECT * FROM tbl_kas_2");
    return $hasil->result();
  }

  function surat_jalan(){
    $hasil = $this->db->query("SELECT * FROM tbl_suratjalan");
    return $hasil->result();
  }

  function stok_gudang(){
    $hasil = $this->db->query("SELECT tbl_stokgudang.tanggal, tbl_produk.nama_produk, tbl_stokgudang.id_produk, tbl_stokgudang.masuk_keluar, tbl_stokgudang.jumlah, tbl_stokgudang.keterangan, tbl_stokgudang.no_surat_jalan, tbl_stokgudang.id_file_surat_jalan, tbl_produk.segmen
      FROM tbl_stokgudang, tbl_produk
      WHERE tbl_stokgudang.id_produk = tbl_produk.id_produk");
    return $hasil->result();
  }

  function stok_outlet(){
    $hasil = $this->db->query("SELECT * FROM tbl_stokoutlet");
    return $hasil->result();
  }

  function stok_konsinyasi(){
    $hasil = $this->db->query("SELECT * FROM tbl_stokoutlet_detail");
    return $hasil->result();
  }

  function harga_produk(){
    $hasil = $this->db->query("SELECT id_produk,nama_produk,kemasan,isi,harga_beli,harga_gb_200_dus,harga_gb_150_dus,harga_gb_50_dus,harga_gb_k_50_dus,harga_jpc_dus,harga_jpc_botol,harga_jpt_dus,harga_jpt_botol,harga_ky_t_bayar,harga_ky_r_jual FROM tbl_produk");
    return $hasil->result();
  }

  function harga_produk_riwayat(){
    $kode_upload = $this->input->post('kode_upload');
    $hasil = $this->db->query("SELECT id_produk,nama_produk,kemasan,isi,harga_beli,harga_gb_200_dus,harga_gb_150_dus,harga_gb_50_dus,harga_gb_k_50_dus,harga_jpc_dus,harga_jpc_botol,harga_jpt_dus,harga_jpt_botol,harga_ky_t_bayar,harga_ky_r_jual FROM tbl_produk_riwayat");
    return $hasil->result();
  }

  function diskon_riwayat(){
    $hasil = $this->db->query("SELECT * FROM tbl_extra_diskon_riwayat");
    return $hasil->result();
  }

}

