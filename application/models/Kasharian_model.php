<?php
class Kasharian_model extends CI_Model{
  
  /** pembuatan no nota */
  function get_id_kas_1(){
    $tanggal = date('Y-m-d');
    $q = $this->db->query("SELECT MAX(RIGHT(id_kas,4)) AS id_kas FROM tbl_kas_1 WHERE DATE(tanggal_bikin)='$tanggal'");
    $kd = "";
    if($q->num_rows()>0){
      foreach($q->result() as $k){
        $tmp = ((int)$k->id_kas)+1;
        $kd = sprintf("%04s", $tmp);
      }
    }else{
      $kd = "0001";
    }
    date_default_timezone_set('Asia/Jakarta');
    return date('dmy').$kd;
  }

  function get_id_kas_2(){
    $tanggal = date('Y-m-d');
    $q = $this->db->query("SELECT MAX(RIGHT(id_kas,4)) AS id_kas FROM tbl_kas_2 WHERE DATE(tanggal_bikin)='$tanggal'");
    $kd = "";
    if($q->num_rows()>0){
      foreach($q->result() as $k){
        $tmp = ((int)$k->id_kas)+1;
        $kd = sprintf("%04s", $tmp);
      }
    }else{
      $kd = "0001";
    }
    date_default_timezone_set('Asia/Jakarta');
    return date('dmy').$kd;
  }
  /** pembuatan no nota */

  /** ********************************************************************************************************************************** */

  /** Cari nota penjualan */
  function show_daftarnota_penjualan(){
    $hasil = $this->db->query("SELECT DISTINCT tbl_penjualan.no_nota_penjualan, tbl_penjualan.tanggal, tbl_outlet.nama_outlet
      FROM tbl_penjualan, tbl_outlet
      WHERE tbl_outlet.id_outlet = tbl_penjualan.id_outlet
      ORDER BY tanggal DESC LIMIT 3000");
    return $hasil;
  }
  /** Cari nota penjualan */

  /** data nota */
  function get_nota_by_no_nota($no_nota_penjualan){
    $hasil = $this->db->query("SELECT tbl_outlet.nama_outlet, SUM(tbl_penjualan.subtotal) AS nominal
      FROM tbl_outlet, tbl_penjualan
      WHERE tbl_outlet.id_outlet = tbl_penjualan.id_outlet
      AND tbl_penjualan.no_nota_penjualan = '$no_nota_penjualan'
      GROUP BY tbl_outlet.nama_outlet
      LIMIT 1");
    return $hasil->result();
  }

  function get_sisa_by_no_nota($no_nota_penjualan){
    $cek_data = $this->db->query("SELECT DISTINCT no_nota_penjualan, nominal_nota_penjualan, sisa, status, tanggal, tanggal_jatuh_tempo
      FROM tbl_piutang 
      WHERE tanggal_bayar = (SELECT MAX(tanggal_bayar) FROM tbl_piutang WHERE no_nota_penjualan='$no_nota_penjualan')
      AND no_nota_penjualan = '$no_nota_penjualan'
      ORDER BY status DESC
      LIMIT 1");
    
    $cek_sisa = $this->db->query("SELECT SUM(terbayar) AS terbayar FROM tbl_piutang WHERE no_nota_penjualan='$no_nota_penjualan' LIMIT 1");

    if($cek_data->row()->nominal_nota_penjualan === $cek_sisa->row()->terbayar){
      $status = "Lunas";
    }else{ 
      $status = "Belum";
    }

    $sisa = $cek_data->row()->nominal_nota_penjualan - $cek_sisa->row()->terbayar;

    $hasil[] = array(
      'no_nota_penjualan' => $cek_data->row()->no_nota_penjualan,
      'nominal_nota_penjualan' => $cek_data->row()->nominal_nota_penjualan,
      'sisa' => $sisa,
      'status' => $status,
      'tanggal' => $cek_data->row()->tanggal,
      'tanggal_jatuh_tempo' => $cek_data->row()->tanggal_jatuh_tempo,
    );

    return $hasil;
  }
  /** data nota */

  /** Kas */
  function save_kas($id_kas, $tanggal, $tujuan, $account_transaksi, $tipe, $jenis, $nominal, $keterangan, $id_file, $tanggal_bikin){
    $hasil = $this->db->query("INSERT INTO tbl_kas_1(id_kas, tanggal, tujuan, account_transaksi, tipe, jenis, nominal, keterangan, id_file, tanggal_bikin) VALUES('$id_kas', '$tanggal', '$tujuan', '$account_transaksi', '$tipe', '$jenis', '$nominal', '$keterangan', '$id_file', '$tanggal_bikin')");
    return $hasil;
  }
  /** Kas */

  /** Setoran */
  function save_setoran($id_kas, $tanggal, $total_uang_masuk_cash, $total_uang_masuk_bank, $total_uang_keluar_cash, $total_uang_keluar_bank, $setor, $id_file, $bank, $tanggal_bikin){
    $hasil = $this->db->query("INSERT INTO tbl_kas_2(id_kas, tanggal, total_uang_masuk_cash, total_uang_masuk_bank, total_uang_keluar_cash, total_uang_keluar_bank, setor, id_file, bank, tanggal_bikin) VALUES('$id_kas', '$tanggal', '$total_uang_masuk_cash', '$total_uang_masuk_bank', '$total_uang_keluar_cash', '$total_uang_keluar_bank', '$setor', '$id_file', '$bank', '$tanggal_bikin')");
    return $hasil;
  }
  /** Setoran */

  /** Piutang */
  function save_piutang($tanggal, $no_nota_penjualan, $tanggal_jatuh_tempo, $nominal_nota_penjualan, $terbayar, $tanggal_bayar, $sisa, $status){
    $hasil = $this->db->query("INSERT INTO tbl_piutang(tanggal, no_nota_penjualan, tanggal_jatuh_tempo, nominal_nota_penjualan, terbayar, tanggal_bayar, sisa, status) VALUES('$tanggal', '$no_nota_penjualan', '$tanggal_jatuh_tempo', '$nominal_nota_penjualan', '$terbayar', '$tanggal_bayar', '$sisa', '$status')");
    return $hasil;
  }
  /** Piutang */

  /** ********************************************************************************************************************************** */

  /** Cari nota pembelian */
  function show_daftarnota_pembelian(){
    $hasil = $this->db->query("SELECT DISTINCT tbl_pembelian.supplier, tbl_pembelian.no_nota_pembelian, tbl_pembelian.tanggal
      FROM tbl_pembelian
      ORDER BY tanggal DESC LIMIT 1000");
    return $hasil;
  }
  /** Cari nota pembelian */

  /** cari nota by no nota pembelian */
  function get_nota_by_no_nota_pembelian($no_nota_pembelian){
    $hasil = $this->db->query("SELECT tbl_pembelian.status, SUM(tbl_pembelian.subtotal) AS nominal
      FROM tbl_pembelian
      WHERE tbl_pembelian.no_nota_pembelian = '$no_nota_pembelian'
      GROUP BY tbl_pembelian.status
      LIMIT 1");
    return $hasil->result();
  }
  /** cari nota by no nota pembelian */

  /** update status pembelian lunas */
  function update_pembelian($no_nota_pembelian){
    $hasil = $this->db->query("UPDATE tbl_pembelian SET status='Lunas' WHERE no_nota_pembelian='$no_nota_pembelian'");
    return $hasil;
  }
  /** update status pembelian lunas */

}