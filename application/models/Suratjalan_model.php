<?php
class Suratjalan_model extends CI_Model{
  
  /** pembuatan no nota */
  function get_no_suratjalan(){
    $tanggal = date('Y-m-d');
    $q = $this->db->query("SELECT MAX(RIGHT(no_suratjalan,4)) AS no_suratjalan FROM tbl_suratjalan WHERE DATE(tanggal_bikin)=('$tanggal') AND no_suratjalan like 'SJ%'");
    $kd = "";
    if($q->num_rows()>0){
      foreach($q->result() as $k){
        $tmp = ((int)$k->no_suratjalan)+1;
        $kd = sprintf("%04s", $tmp);
      }
    }else{
      $kd = "0001";
    }
    date_default_timezone_set('Asia/Jakarta');
    return date('dmy').$kd;
  }
  /** pembuatan no nota */

  /** data produk */
  function search_nota($no_nota){
    $hasil = $this->db->query("SELECT DISTINCT no_nota_penjualan FROM tbl_penjualan WHERE no_nota_penjualan ILIKE '%$no_nota%'");
    return $hasil->result();
  }
  /** data produk */

  /** data nota */
  function get_nota_by_no_nota_penjualan($no_nota_penjualan){
    $hasil = $this->db->query("SELECT id_produk, id_outlet, jumlah FROM tbl_penjualan WHERE no_nota_penjualan='$no_nota_penjualan'");
    return $hasil->result();
  }

  function get_nota_by_no_nota_pembelian($no_nota_pembelian){
    $hasil = $this->db->query("SELECT id_produk, jumlah FROM tbl_pembelian WHERE no_nota_pembelian='$no_nota_pembelian'");
    return $hasil->result();
  }
  /** data nota */

  /** simpan surat jalan */
  function save_suratjalan($no_suratjalan, $no_nota, $tanggal, $kendaraan, $no_plat, $nama_pengirim, $nama_admin, $tanggal_bikin){
    $hasil = $this->db->query("INSERT INTO tbl_suratjalan(no_suratjalan, no_nota, tanggal, kendaraan, no_plat, nama_pengirim, nama_admin, tanggal_bikin)
    VALUES('$no_suratjalan', '$no_nota', '$tanggal', '$kendaraan', '$no_plat', '$nama_pengirim', '$nama_admin', '$tanggal_bikin')");
    return $hasil;
  }
  /** simpan surat jalan */

  /** simpan stok gudang */
  public function insert_stokgudang($filter_data){
    $hasil = $this->db->insert_batch('tbl_stokgudang', $filter_data);
    return $hasil;
  }
  /** simpan stok gudang */

  /** simpan stok outlet */
  public function insert_stokoutlet($filter_data){
    $hasil = $this->db->insert_batch('tbl_stokoutlet', $filter_data);
    return $hasil;
  }

  public function insert_stokoutlet_detail($filter_data){
    $hasil = $this->db->insert_batch('tbl_stokoutlet_detail', $filter_data);
    return $hasil;
  }
  /** simpan stok outlet */  

  /** daftar surat jalan */
  function show_daftarsuratjalan(){
    $hasil = $this->db->query("SELECT DISTINCT tbl_suratjalan.no_suratjalan,tbl_suratjalan.no_nota,tbl_suratjalan.tanggal,tbl_suratjalan.kendaraan,tbl_suratjalan.no_plat,tbl_suratjalan.nama_pengirim,tbl_suratjalan.nama_pengepack,tbl_suratjalan.nama_penerima,tbl_suratjalan.nama_admin,tbl_suratjalan.tanggal_bikin,tbl_outlet.nama_outlet
      FROM tbl_suratjalan, tbl_outlet, tbl_penjualan
      WHERE tbl_suratjalan.no_nota = tbl_penjualan.no_nota_penjualan
      AND tbl_penjualan.id_outlet = tbl_outlet.id_outlet
      AND tbl_suratjalan.no_nota like 'PN%' ORDER BY tbl_suratjalan.tanggal DESC LIMIT 300");
    return $hasil;
  }

  function show_daftarsuratjalan_search(){
    $tanggal_awal = $this->input->get('tanggal_awal');
    $tanggal_akhir = $this->input->get('tanggal_akhir');
    $hasil = $this->db->query("SELECT DISTINCT tbl_suratjalan.no_suratjalan,tbl_suratjalan.no_nota,tbl_suratjalan.tanggal,tbl_suratjalan.kendaraan,tbl_suratjalan.no_plat,tbl_suratjalan.nama_pengirim,tbl_suratjalan.nama_pengepack,tbl_suratjalan.nama_penerima,tbl_suratjalan.nama_admin,tbl_suratjalan.tanggal_bikin,tbl_outlet.nama_outlet
      FROM tbl_suratjalan, tbl_outlet, tbl_penjualan
      WHERE tbl_suratjalan.no_nota = tbl_penjualan.no_nota_penjualan
      AND tbl_penjualan.id_outlet = tbl_outlet.id_outlet
      AND tbl_suratjalan.no_nota like 'PN%' AND  tbl_suratjalan.tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir' ORDER BY tbl_suratjalan.tanggal DESC");
    return $hasil;
  }

  //function print_suratjalan(){
    //$no_suratjalan = $this->input->get('no_suratjalan');
    //$hasil = $this->db->query("SELECT tbl_suratjalan.no_suratjalan, tbl_suratjalan.no_nota, tbl_suratjalan.tanggal, tbl_suratjalan.kendaraan, tbl_suratjalan.no_plat, tbl_suratjalan.nama_pengirim, tbl_suratjalan.nama_pengepack, tbl_suratjalan.nama_penerima, tbl_penjualan.nama_produk, tbl_penjualan.jumlah, tbl_penjualan.satuan, tbl_penjualan.kemasan
    //FROM tbl_suratjalan, tbl_penjualan
    //WHERE tbl_penjualan.no_nota_penjualan = tbl_suratjalan.no_nota
    //AND no_suratjalan='$no_suratjalan'");
    //return $hasil;
  //}
  
  function print_suratjalan(){
    $no_suratjalan = $this->input->get('no_suratjalan');
    $hasil = $this->db->query("SELECT tbl_stokgudang.id_produk, tbl_stokgudang.jumlah, tbl_suratjalan.no_suratjalan, tbl_suratjalan.no_nota, tbl_suratjalan.tanggal, tbl_suratjalan.kendaraan, tbl_suratjalan.no_plat, tbl_suratjalan.nama_pengirim, tbl_suratjalan.nama_pengepack, tbl_suratjalan.nama_penerima, tbl_produk.nama_produk
    FROM tbl_suratjalan, tbl_produk, tbl_stokgudang
    WHERE tbl_stokgudang.id_produk = tbl_produk.id_produk
    AND tbl_suratjalan.no_suratjalan = tbl_stokgudang.no_surat_jalan
    AND tbl_stokgudang.no_surat_jalan='$no_suratjalan'");
    return $hasil;
  }
  /** daftar surat jalan */

  /** ubah status nota */
  function change_statusnota($no_nota, $status){
    $hasil = $this->db->query("UPDATE tbl_penjualan SET status='$status' WHERE no_nota_penjualan='$no_nota'");
    return $hasil;
  }
  /** ubah status nota */

  /** Update status surat jalan */
  function update_status_stokoutlet($no_suratjalan, $id_file){
    $hasil = $this->db->query("UPDATE tbl_stokoutlet SET id_file_actiontracking='$id_file' WHERE no_actiontracking='$no_suratjalan'");
    return $hasil;
  }

  function update_status_stokgudang($no_suratjalan, $id_file){
    $hasil = $this->db->query("UPDATE tbl_stokgudang SET id_file_surat_jalan='$id_file' WHERE no_surat_jalan='$no_suratjalan'");
    return $hasil;
  }
  /** Update status surat jalan */

  /** Cari nota penjualan */
  function show_daftarnota_masuk(){
    $hasil = $this->db->query("SELECT DISTINCT no_nota_pembelian, tanggal, supplier
      FROM tbl_pembelian
      ORDER BY tanggal DESC LIMIT 500");
    return $hasil;
  }

  function show_daftarnota_keluar(){
    $hasil = $this->db->query("SELECT DISTINCT tbl_penjualan.no_nota_penjualan, tbl_penjualan.tanggal, tbl_outlet.nama_outlet
      FROM tbl_penjualan, tbl_outlet
      WHERE tbl_outlet.id_outlet = tbl_penjualan.id_outlet
      ORDER BY tanggal DESC LIMIT 500");
    return $hasil;
  }
  /** Cari nota penjualan */

  /** Cek Stok */
  function stok_masuk(){
    $tanggal_cek = date('Y-m-d');
    $tanggal = date("Y-m-d", strtotime("$tanggal_cek +3 days")); 
    $id_produk = $this->input->post('id_produk');
    $hasil = $this->db->query("SELECT SUM(tbl_stokgudang.jumlah) AS jumlah
      FROM tbl_stokgudang 
      WHERE tbl_stokgudang.id_produk = '$id_produk' 
      AND tbl_stokgudang.masuk_keluar = 'MASUK'
      AND tbl_stokgudang.tanggal <= '$tanggal'");
    return $hasil;
  }

  function stok_keluar(){
    $tanggal_cek = date('Y-m-d');
    $tanggal = date("Y-m-d", strtotime("$tanggal_cek +3 days")); 
    $id_produk = $this->input->post('id_produk');
    $hasil = $this->db->query("SELECT SUM(tbl_stokgudang.jumlah) AS jumlah
      FROM tbl_stokgudang 
      WHERE tbl_stokgudang.id_produk = '$id_produk' 
      AND tbl_stokgudang.masuk_keluar = 'KELUAR'
      AND tbl_stokgudang.tanggal <= '$tanggal'");
    return $hasil;
  }
  /** Cek Stok */
}