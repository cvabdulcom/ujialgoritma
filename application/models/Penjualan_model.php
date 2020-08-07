<?php
class Penjualan_model extends CI_Model{
  
  /** MENAMPILKAN DATA PRODUK */
  function show_harga(){
    $hasil = $this->db->query("SELECT * FROM tbl_produk ORDER BY id_produk DESC");
    return $hasil;
  }

  /** pembuatan no nota */
  function get_no_nota(){
    $tanggal = date('Y-m-d');
    $q = $this->db->query("SELECT MAX(RIGHT(no_nota_penjualan,4)) AS no_nota FROM tbl_penjualan WHERE DATE(tanggal_bikin)='$tanggal'");
    $kd = "";
    if($q->num_rows()>0){
      foreach($q->result() as $k){
        $tmp = ((int)$k->no_nota)+1;
        $kd = sprintf("%04s", $tmp);
      }
    }else{
      $kd = "0001";
    }
    date_default_timezone_set('Asia/Jakarta');
    return date('dmy').$kd;
  }
  /** pembuatan no nota */

  /** data outlet */
  function search_outlet($nama_outlet){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE nama_outlet ILIKE '%$nama_outlet%' ORDER BY nama_outlet ASC");
    return $hasil->result();
  }
  /** data outlet */

  /** data produk */
  function search_produk($nama_produk){
    $hasil = $this->db->query("SELECT * FROM tbl_produk WHERE nama_produk ILIKE '%$nama_produk%' ORDER BY nama_produk ASC");
    return $hasil->result();
  }

  function search_produk_extra($nama_produk, $id_outlet){
    $hasil = $this->db->query("SELECT * FROM tbl_extra_diskon WHERE id_outlet='$id_outlet' AND nama_produk ILIKE '%$nama_produk%' ORDER BY nama_produk ASC");
    return $hasil->result();
  }
  /** data produk */

  /** data nota */
  public function insert_nota($filter_data){
    $hasil = $this->db->insert_batch('tbl_penjualan', $filter_data);
    return $hasil;
  }
  /** data nota */

  /** data piutang */
  public function save_piutang($tanggal, $no_nota_penjualan, $tanggal_jatuh_tempo, $nominal_nota_penjualan, $terbayar, $tanggal_bayar, $sisa, $status){
    $hasil = $this->db->query("INSERT INTO tbl_piutang(tanggal, no_nota_penjualan, tanggal_jatuh_tempo, nominal_nota_penjualan, terbayar, tanggal_bayar, sisa, status)
    VALUES('$tanggal', '$no_nota_penjualan', '$tanggal_jatuh_tempo', '$nominal_nota_penjualan', '$terbayar', '$tanggal_bayar', '$sisa', '$status')");
    return $hasil;
  }
  /** data piutang */

  /** Daftar Nota */
  function show_daftarnota(){
    $hasil = $this->db->query("SELECT DISTINCT tbl_penjualan.no_nota_penjualan, tbl_penjualan.tanggal, tbl_outlet.nama_outlet
      FROM tbl_penjualan, tbl_outlet
      WHERE tbl_outlet.id_outlet = tbl_penjualan.id_outlet
      ORDER BY tanggal DESC LIMIT 500");
    return $hasil->result();
  }

  function show_daftarproduk(){
    $no_nota_penjualan = $this->input->get('no_nota_penjualan');
    $hasil = $this->db->query("SELECT tbl_penjualan.tanggal, tbl_penjualan.no_nota_penjualan, tbl_penjualan.nama_salesman, tbl_penjualan.rute, tbl_penjualan.id_outlet, tbl_penjualan.id_produk, tbl_penjualan.jumlah, tbl_penjualan.harga, tbl_penjualan.tipe_pembelian, tbl_penjualan.tempo, tbl_penjualan.status, tbl_penjualan.id_file_penjualan, tbl_penjualan.subtotal, tbl_penjualan.nama_produk, tbl_outlet.nama_outlet, tbl_outlet.alamat, tbl_penjualan.satuan, tbl_penjualan.kemasan
    FROM tbl_penjualan, tbl_outlet WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet AND no_nota_penjualan='$no_nota_penjualan'");
    return $hasil;
  }

  function show_datanota(){
    $no_nota_penjualan = $this->input->get('no_nota_penjualan');
    $hasil = $this->db->query("SELECT DISTINCT tbl_outlet.nama_outlet, tbl_outlet.alamat, tbl_outlet.kecamatan, tbl_outlet.kabupaten, tbl_outlet.rute, tbl_outlet.status_program, tbl_outlet.nama_salesman FROM tbl_outlet, tbl_penjualan WHERE tbl_outlet.id_outlet = tbl_penjualan.id_outlet AND tbl_penjualan.no_nota_penjualan='$no_nota_penjualan'");
    return $hasil;
  }
  /** Daftar Nota */

  /** Ubah Nota */
  function check_nota($no_nota_penjualan){
    $hasil = $this->db->query("SELECT izin FROM tbl_penjualan WHERE no_nota_penjualan='$no_nota_penjualan' GROUP BY izin");
    return $hasil->result();
  }

  function get_nota($no_nota_penjualan){
    $hasil = $this->db->query("SELECT * FROM tbl_penjualan WHERE no_nota_penjualan='$no_nota_penjualan'");
    return $hasil->result();
  }

  function buka_kunci($no_nota_penjualan){
    $hasil = $this->db->query("UPDATE tbl_penjualan SET izin='1' WHERE no_nota_penjualan='$no_nota_penjualan'");
    return $hasil;
  }

  function tarik_nota($no_nota_penjualan){
    $hasil = $this->db->query("SELECT * FROM tbl_penjualan WHERE no_nota_penjualan='$no_nota_penjualan'");
    return $hasil->result();
  }

  function save_ubahnota($no_nota_penjualan, $id_produk, $jumlah, $subtotal){
    $hasil = $this->db->query("UPDATE tbl_penjualan SET jumlah='$jumlah', subtotal='$subtotal' WHERE no_nota_penjualan='$no_nota_penjualan' AND id_produk='$id_produk'");
    return $hasil;
  }

  function tutup_kunci($no_nota_penjualan){
    $hasil = $this->db->query("UPDATE tbl_penjualan SET izin='0' WHERE no_nota_penjualan='$no_nota_penjualan'");
    return $hasil;
  }

  function cek_diskon(){
    $id_outlet = $this->input->post('id_outlet');

    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE id_outlet='$id_outlet' LIMIT 1");
    return $hasil->result();
  }

  function simpan_item_ubah_nota(){
    $tanggal = $this->input->post('tanggal');
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');
    $nama_salesman = $this->input->post('nama_salesman');
    $rute = $this->input->post('rute');
    $id_outlet = $this->input->post('id_outlet');
    $id_produk = $this->input->post('id_produk');
    $jumlah = $this->input->post('jumlah');
    $harga = $this->input->post('harga');
    $tipe_pembelian = $this->input->post('tipe_pembelian');
    $tempo = $this->input->post('tempo');
    $status = $this->input->post('status');
    $id_file_penjualan = $this->input->post('id_file_penjualan');
    $subtotal = $this->input->post('subtotal');
    $nama_produk = $this->input->post('nama_produk');
    $nama_admin = $this->input->post('nama_admin');
    $satuan = $this->input->post('satuan');
    $kemasan = $this->input->post('kemasan');
    $tanggal_bikin = $this->input->post('tanggal_bikin');

    $hasil = $this->db->query("INSERT INTO tbl_penjualan(tanggal, no_nota_penjualan, nama_salesman, rute, id_outlet, id_produk, jumlah, harga, tipe_pembelian, tempo, status, id_file_penjualan, subtotal, nama_produk, nama_admin, izin, satuan, kemasan, tanggal_bikin) VALUES('$tanggal','$no_nota_penjualan','$nama_salesman','$rute','$id_outlet','$id_produk','$jumlah','$harga','$tipe_pembelian','$tempo','$status','$id_file_penjualan','$subtotal','$nama_produk','$nama_admin','1','$satuan','$kemasan','$tanggal_bikin')");
    return $hasil;
  }

  function delete_item_ubah_nota(){
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');
    $id_produk = $this->input->post('id_produk');

    $hasil = $this->db->query("DELETE FROM tbl_penjualan WHERE no_nota_penjualan='$no_nota_penjualan' AND id_produk='$id_produk'");
    return $hasil;
  }

  function hapus_piutang(){
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');

    $hasil = $this->db->query("DELETE FROM tbl_piutang WHERE no_nota_penjualan='$no_nota_penjualan'");
    return $hasil;
  }

  function input_piutang(){
    $tanggal = $this->input->post('tanggal');
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');
    $tanggal_jatuh_tempo = $this->input->post('tanggal_jatuh_tempo');
    $nominal_nota_penjualan = $this->input->post('nominal_nota_penjualan');
    $terbayar = $this->input->post('terbayar');
    $tanggal_bayar = $this->input->post('tanggal_bayar');
    $sisa = $this->input->post('sisa');
    $status = $this->input->post('status');

    $hasil = $this->db->query("INSERT INTO tbl_piutang(tanggal, no_nota_penjualan, tanggal_jatuh_tempo, nominal_nota_penjualan, terbayar, tanggal_bayar, sisa, status) VALUES('$tanggal','$no_nota_penjualan','$tanggal_jatuh_tempo','$nominal_nota_penjualan','$terbayar','$tanggal_bayar','$sisa','$status')");
    return $hasil;
  }
  /** Ubah Nota */

}