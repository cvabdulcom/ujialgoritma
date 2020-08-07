<?php
class Dashboard_model extends CI_Model{

  /** MENAMPILKAN DATA JOIN */
  function show_join_order(){
    $rute = $this->session->userdata('rute_belioli');
    $hasil = $this->db->query("SELECT * FROM tbl_group WHERE rute='$rute' ORDER BY id DESC");
    return $hasil;
  }

  function show_daftar_transaksi(){
    $user_name = $this->session->userdata('username_belioli');
    $hasil = $this->db->query("SELECT tbl_group.nama, tbl_transaksi.kd_transaksi, tbl_transaksi.status FROM tbl_group, tbl_transaksi WHERE tbl_group.kd_group = tbl_transaksi.kd_group AND tbl_transaksi.user_name = '$user_name' AND tbl_transaksi.status='proses'");
    return $hasil;
  }

  function show_riwayat(){
    $user_name = $this->session->userdata('username_belioli');
    $hasil = $this->db->query("SELECT tbl_group.nama, tbl_transaksi.kd_transaksi, tbl_transaksi.tanggal, tbl_transaksi.total_harga, tbl_transaksi.diskon, tbl_transaksi.status FROM tbl_group, tbl_transaksi WHERE tbl_group.kd_group = tbl_transaksi.kd_group AND tbl_transaksi.user_name = '$user_name' ORDER BY tbl_transaksi.id DESC");
    return $hasil;
  }

  function show_detail_1(){
    $kd_transaksi = $_POST['kd_transaksi'];
    $hasil = $this->db->query("SELECT tbl_transaksi.kd_transaksi, tbl_transaksi.rute, tbl_transaksi.tanggal, tbl_transaksi.total_harga, tbl_transaksi.status, tbl_transaksi.diskon, tbl_users.nama FROM tbl_transaksi, tbl_users WHERE tbl_transaksi.user_name = tbl_users.user_name AND tbl_transaksi.kd_transaksi = '$kd_transaksi'");
    return $hasil;
  }

  function show_detail_2(){
    $kd_transaksi = $_POST['kd_transaksi'];
    $hasil = $this->db->query("SELECT * FROM tbl_detail_transaksi WHERE kd_transaksi = '$kd_transaksi'");
    return $hasil;
  }
  
  /** MENAMBAHKAN DATA JOIN */
  function add_join_order(){
    $kd_group = $_POST['kd_group'];
    $nama = $_POST['nama'];
    $rute = $_POST['rute'];
    $tanggal = $_POST['tanggal'];

    $hasil = $this->db->query("INSERT INTO tbl_group(kd_group, nama, rute, tanggal) VALUES ('$kd_group','$nama','$rute','$tanggal')");
    return $hasil;
  }

  function laporan_pembelian(){
    $tanggal_awal = $this->input->post('tanggal_awal');
    $tanggal_akhir = $this->input->post('tanggal_akhir');
    $hasil = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_pembelian WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir';");
    return $hasil;
  }

  function laporan_penjualan(){
    $tanggal_awal = $this->input->post('tanggal_awal');
    $tanggal_akhir = $this->input->post('tanggal_akhir');
    $hasil = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir';");
    return $hasil;
  }

  function laporan_hutang(){
    $tanggal_hp = $this->input->post('tanggal_hp');
    $hasil = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_pembelian WHERE status='Belum' AND tanggal <= '$tanggal_hp';");
    return $hasil;
  }

  function laporan_piutang(){
    $tanggal_hp = $this->input->post('tanggal_hp');
    $piutang_cek = $this->db->query("SELECT DISTINCT no_nota_penjualan, tanggal FROM tbl_piutang WHERE tanggal <= '$tanggal_hp' ORDER BY tanggal DESC");
    $total_piutang=0;
    foreach($piutang_cek->result_array() as $tampil):
      $no_nota_penjualan = $tampil['no_nota_penjualan'];

      $cek_nominal_real = $this->db->query("SELECT nominal_nota_penjualan FROM tbl_piutang WHERE no_nota_penjualan='$no_nota_penjualan' LIMIT 1");
      $nominal_real = $cek_nominal_real->row()->nominal_nota_penjualan;

      $cek_terbayar = $this->db->query("SELECT SUM(terbayar) AS terbayar FROM tbl_piutang WHERE no_nota_penjualan='$no_nota_penjualan' LIMIT 1");
      $terbayar_real = $cek_terbayar->row()->terbayar;

      $sisa_piutang = $nominal_real-$terbayar_real;

      $total_piutang+=$sisa_piutang;
      
    endforeach;
    return $total_piutang;
  }

  function laporan_stokawal_gudang(){
    $tanggal_awal = $this->input->post('tanggal_awal');
    $hasil_masuk = $this->db->query("SELECT SUM(tbl_stokgudang.jumlah) AS jumlah, SUM(tbl_produk.harga_beli*tbl_stokgudang.jumlah) AS harga
      FROM tbl_stokgudang, tbl_produk
      WHERE tbl_stokgudang.id_produk = tbl_produk.id_produk 
      AND tbl_stokgudang.masuk_keluar = 'MASUK'
      AND tbl_stokgudang.tanggal < '$tanggal_awal';");
    $st_awalgudang_masuk = $hasil_masuk->row()->jumlah;
    $rph_awalgudang_masuk = $hasil_masuk->row()->harga;

    $hasil_keluar = $this->db->query("SELECT SUM(tbl_stokgudang.jumlah) AS jumlah, SUM(tbl_produk.harga_beli*tbl_stokgudang.jumlah) AS harga
      FROM tbl_stokgudang, tbl_produk
      WHERE tbl_stokgudang.id_produk = tbl_produk.id_produk 
      AND tbl_stokgudang.masuk_keluar = 'KELUAR'
      AND tbl_stokgudang.tanggal < '$tanggal_awal';");
    $st_awalgudang_keluar = $hasil_keluar->row()->jumlah;
    $rph_awalgudang_keluar = $hasil_keluar->row()->harga;

    $st_awalgudang = $st_awalgudang_masuk - $st_awalgudang_keluar;
    $rph_awalgudang = $rph_awalgudang_masuk - $rph_awalgudang_keluar;

    $hasil = array(
      "jumlah" => $st_awalgudang,
      "harga" => $rph_awalgudang,
    );
    return $hasil;
  }

  function laporan_stokawal_heri(){
    $tanggal_awal = $this->input->post('tanggal_awal');
    $hasil_masuk = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah, SUM(tbl_produk.harga_beli*tbl_stokoutlet.jumlah) AS harga
      FROM tbl_stokoutlet, tbl_produk, tbl_outlet
      WHERE tbl_stokoutlet.id_produk = tbl_produk.id_produk 
      AND tbl_outlet.id_outlet = tbl_stokoutlet.id_outlet
      AND tbl_outlet.tipe_pembelian='K'
      AND tbl_outlet.nama_salesman='Heri'
      AND tbl_stokoutlet.masuk_keluar = 'MASUK'
      AND tbl_stokoutlet.tanggal < '$tanggal_awal';");
    $st_awalheri_masuk = $hasil_masuk->row()->jumlah;
    $rph_awalheri_masuk = $hasil_masuk->row()->harga;

    $hasil_keluar = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah, SUM(tbl_produk.harga_beli*tbl_stokoutlet.jumlah) AS harga
      FROM tbl_stokoutlet, tbl_produk, tbl_outlet
      WHERE tbl_stokoutlet.id_produk = tbl_produk.id_produk 
      AND tbl_outlet.id_outlet = tbl_stokoutlet.id_outlet
      AND tbl_outlet.tipe_pembelian='K'
      AND tbl_outlet.nama_salesman='Heri'
      AND tbl_stokoutlet.masuk_keluar = 'KELUAR'
      AND tbl_stokoutlet.tanggal < '$tanggal_awal';");
    $st_awalheri_keluar = $hasil_keluar->row()->jumlah;
    $rph_awalheri_keluar = $hasil_keluar->row()->harga;

    $st_awalheri = $st_awalheri_masuk - $st_awalheri_keluar;
    $rph_awalheri = $rph_awalheri_masuk - $rph_awalheri_keluar;

    $hasil = array(
      "jumlah" => $st_awalheri,
      "harga" => $rph_awalheri,
    );
    return $hasil;
  }

  function laporan_stokawal_gigih(){
    $tanggal_awal = $this->input->post('tanggal_awal');
    $hasil_masuk = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah, SUM(tbl_produk.harga_beli*tbl_stokoutlet.jumlah) AS harga
      FROM tbl_stokoutlet, tbl_produk, tbl_outlet
      WHERE tbl_stokoutlet.id_produk = tbl_produk.id_produk 
      AND tbl_outlet.id_outlet = tbl_stokoutlet.id_outlet
      AND tbl_outlet.tipe_pembelian='K'
      AND tbl_outlet.nama_salesman='Gigih'
      AND tbl_stokoutlet.masuk_keluar = 'MASUK'
      AND tbl_stokoutlet.tanggal < '$tanggal_awal';");
    $st_awalgigih_masuk = $hasil_masuk->row()->jumlah;
    $rph_awalgigih_masuk = $hasil_masuk->row()->harga;

    $hasil_keluar = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah, SUM(tbl_produk.harga_beli*tbl_stokoutlet.jumlah) AS harga
      FROM tbl_stokoutlet, tbl_produk, tbl_outlet
      WHERE tbl_stokoutlet.id_produk = tbl_produk.id_produk 
      AND tbl_outlet.id_outlet = tbl_stokoutlet.id_outlet
      AND tbl_outlet.tipe_pembelian='K'
      AND tbl_outlet.nama_salesman='Gigih'
      AND tbl_stokoutlet.masuk_keluar = 'KELUAR'
      AND tbl_stokoutlet.tanggal < '$tanggal_awal';");
    $st_awalgigih_keluar = $hasil_keluar->row()->jumlah;
    $rph_awalgigih_keluar = $hasil_keluar->row()->harga;

    $st_awalgigih = $st_awalgigih_masuk - $st_awalgigih_keluar;
    $rph_awalgigih = $rph_awalgigih_masuk - $rph_awalgigih_keluar;

    $hasil = array(
      "jumlah" => $st_awalgigih,
      "harga" => $rph_awalgigih,
    );
    return $hasil;
  }

  function laporan_stokawal_pembelian(){
    $tanggal_awal = $this->input->post('tanggal_awal');
    $tanggal_akhir = $this->input->post('tanggal_akhir');
    $cek_pembelian = $this->db->query("SELECT SUM(tbl_pembelian.jumlah) AS jumlah, SUM(tbl_pembelian.harga_beli*tbl_pembelian.jumlah) AS harga
      FROM tbl_pembelian, tbl_produk
      WHERE tbl_pembelian.id_produk = tbl_produk.id_produk
      AND tbl_pembelian.tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
    $pembelian_jumlah = $cek_pembelian->row()->jumlah;
    $pembelian_harga = $cek_pembelian->row()->harga;

    $hasil = array(
      "jumlah" => $pembelian_jumlah,
      "harga" => $pembelian_harga,
    );
    return $hasil;
  }

  function laporan_stokakhir_gudang(){
    $tanggal_akhir = $this->input->post('tanggal_akhir');
    $hasil_masuk = $this->db->query("SELECT SUM(tbl_stokgudang.jumlah) AS jumlah, SUM(tbl_produk.harga_beli*tbl_stokgudang.jumlah) AS harga
      FROM tbl_stokgudang, tbl_produk
      WHERE tbl_stokgudang.id_produk = tbl_produk.id_produk 
      AND tbl_stokgudang.masuk_keluar = 'MASUK'
      AND tbl_stokgudang.tanggal <= '$tanggal_akhir';");
    $st_akhirgudang_masuk = $hasil_masuk->row()->jumlah;
    $rph_akhirgudang_masuk = $hasil_masuk->row()->harga;

    $hasil_keluar = $this->db->query("SELECT SUM(tbl_stokgudang.jumlah) AS jumlah, SUM(tbl_produk.harga_beli*tbl_stokgudang.jumlah) AS harga
      FROM tbl_stokgudang, tbl_produk
      WHERE tbl_stokgudang.id_produk = tbl_produk.id_produk 
      AND tbl_stokgudang.masuk_keluar = 'KELUAR'
      AND tbl_stokgudang.tanggal <= '$tanggal_akhir';");
    $st_akhirgudang_keluar = $hasil_keluar->row()->jumlah;
    $rph_akhirgudang_keluar = $hasil_keluar->row()->harga;

    $st_akhirgudang = $st_akhirgudang_masuk - $st_akhirgudang_keluar;
    $rph_akhirgudang = $rph_akhirgudang_masuk - $rph_akhirgudang_keluar;

    $hasil = array(
      "jumlah" => $st_akhirgudang,
      "harga" => $rph_akhirgudang,
    );
    return $hasil;
  }

  function laporan_stokakhir_heri(){
    $tanggal_akhir = $this->input->post('tanggal_akhir');
    $hasil_masuk = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah, SUM(tbl_produk.harga_beli*tbl_stokoutlet.jumlah) AS harga
      FROM tbl_stokoutlet, tbl_produk, tbl_outlet
      WHERE tbl_stokoutlet.id_produk = tbl_produk.id_produk 
      AND tbl_outlet.id_outlet = tbl_stokoutlet.id_outlet
      AND tbl_outlet.tipe_pembelian='K'
      AND tbl_outlet.nama_salesman='Heri'
      AND tbl_stokoutlet.masuk_keluar = 'MASUK'
      AND tbl_stokoutlet.tanggal <= '$tanggal_akhir';");
    $st_akhirheri_masuk = $hasil_masuk->row()->jumlah;
    $rph_akhirheri_masuk = $hasil_masuk->row()->harga;

    $hasil_keluar = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah, SUM(tbl_produk.harga_beli*tbl_stokoutlet.jumlah) AS harga
      FROM tbl_stokoutlet, tbl_produk, tbl_outlet
      WHERE tbl_stokoutlet.id_produk = tbl_produk.id_produk 
      AND tbl_outlet.id_outlet = tbl_stokoutlet.id_outlet
      AND tbl_outlet.tipe_pembelian='K'
      AND tbl_outlet.nama_salesman='Heri'
      AND tbl_stokoutlet.masuk_keluar = 'KELUAR'
      AND tbl_stokoutlet.tanggal <= '$tanggal_akhir';");
    $st_akhirheri_keluar = $hasil_keluar->row()->jumlah;
    $rph_akhirheri_keluar = $hasil_keluar->row()->harga;

    $st_akhirheri = $st_akhirheri_masuk - $st_akhirheri_keluar;
    $rph_akhirheri = $rph_akhirheri_masuk - $rph_akhirheri_keluar;

    $hasil = array(
      "jumlah" => $st_akhirheri,
      "harga" => $rph_akhirheri,
    );
    return $hasil;
  }

  function laporan_stokakhir_gigih(){
    $tanggal_akhir = $this->input->post('tanggal_akhir');
    $hasil_masuk = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah, SUM(tbl_produk.harga_beli*tbl_stokoutlet.jumlah) AS harga
      FROM tbl_stokoutlet, tbl_produk, tbl_outlet
      WHERE tbl_stokoutlet.id_produk = tbl_produk.id_produk 
      AND tbl_outlet.id_outlet = tbl_stokoutlet.id_outlet
      AND tbl_outlet.tipe_pembelian='K'
      AND tbl_outlet.nama_salesman='Gigih'
      AND tbl_stokoutlet.masuk_keluar = 'MASUK'
      AND tbl_stokoutlet.tanggal <= '$tanggal_akhir';");
    $st_akhirgigih_masuk = $hasil_masuk->row()->jumlah;
    $rph_akhirgigih_masuk = $hasil_masuk->row()->harga;

    $hasil_keluar = $this->db->query("SELECT SUM(tbl_stokoutlet.jumlah) AS jumlah, SUM(tbl_produk.harga_beli*tbl_stokoutlet.jumlah) AS harga
      FROM tbl_stokoutlet, tbl_produk, tbl_outlet
      WHERE tbl_stokoutlet.id_produk = tbl_produk.id_produk 
      AND tbl_outlet.id_outlet = tbl_stokoutlet.id_outlet
      AND tbl_outlet.tipe_pembelian='K'
      AND tbl_outlet.nama_salesman='Gigih'
      AND tbl_stokoutlet.masuk_keluar = 'KELUAR'
      AND tbl_stokoutlet.tanggal <= '$tanggal_akhir';");
    $st_akhirgigih_keluar = $hasil_keluar->row()->jumlah;
    $rph_akhirgigih_keluar = $hasil_keluar->row()->harga;

    $st_akhirgigih = $st_akhirgigih_masuk - $st_akhirgigih_keluar;
    $rph_akhirgigih = $rph_akhirgigih_masuk - $rph_akhirgigih_keluar;

    $hasil = array(
      "jumlah" => $st_akhirgigih,
      "harga" => $rph_akhirgigih,
    );
    return $hasil;
  }

  /** Laporan uang masuk */
  function laporan_uangmasuk_semua(){
    $tanggal_awal = $this->input->post('tanggal_awal');
    $tanggal_akhir = $this->input->post('tanggal_akhir');
    $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE tipe='Masuk' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir';");
    return $hasil;
  }

  function laporan_uangkeluar_semua(){
    $tanggal_awal = $this->input->post('tanggal_awal');
    $tanggal_akhir = $this->input->post('tanggal_akhir');
    $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE tipe='Keluar' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir';");
    return $hasil;
  }

  function laporan_uangmasuk_tahun(){
    $tanggal_awal = date('Y-01-01');
    $tanggal_akhir = date('Y-m-d');
    $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE tipe='Masuk' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir';");
    return $hasil;
  }

  function laporan_uangkeluar_tahun(){
    $tanggal_awal = date('Y-01-01');
    $tanggal_akhir = date('Y-m-d');
    $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE tipe='Keluar' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir';");
    return $hasil;
  }
  /** Laporan uang masuk */

}