<?php
class Laporan_model extends CI_Model{

  /** Laporan Outlet */
  function show_laporanoutlet(){
    $hasil = $this->db->query("SELECT nama_outlet, alamat, kecamatan, kabupaten, telepon, ada_whatsapp, nama_pemilik, longitude, latitude, foto_outlet, tipe_pembelian, status_program, id_outlet, nama_salesman, rute, foto_stokawal, foto_kontrak, foto_kontrak_tempo
      FROM tbl_outlet
      WHERE status_program != 'BELUM MINAT'
      ORDER BY status_program DESC");
    return $hasil;
  }

  function show_laporanoutlet_search_all(){
    $nama_salesman = $this->input->post('nama_salesman_search');
    $rute = $this->input->post('rute_search');
    $status_program = $this->input->post('status_program_search');

    $hasil = $this->db->query("SELECT nama_outlet, alamat, kecamatan, kabupaten, telepon, ada_whatsapp, nama_pemilik, longitude, latitude, foto_outlet, tipe_pembelian, status_program, id_outlet, nama_salesman, rute, foto_stokawal, foto_kontrak, foto_kontrak_tempo
      FROM tbl_outlet
      WHERE nama_salesman='$nama_salesman'
      AND rute='$rute'
      AND status_program='$status_program'
      ORDER BY status_program DESC");
    return $hasil;
  }

  function upload_foto(){
    $id_outlet  = $this->input->post('id_outlet');
    $id_file = $this->input->post('id_file');

    $hasil = $this->db->query("UPDATE tbl_outlet SET foto_outlet='$id_file' WHERE id_outlet='$id_outlet'");
    return $hasil;
  }

  function ubah_outlet(){
    $id_outlet  = $this->input->post('id_outlet');
    $tipe_pembelian  = $this->input->post('tipe_pembelian');
    $nama_salesman = $this->input->post('nama_salesman');
    if($tipe_pembelian === 'J'){
      $status_program = "JP CASH";
    }elseif($tipe_pembelian === 'K'){
      $status_program = "PENDING";
    }elseif($tipe_pembelian === 'G'){
      $status_program = "GROUP BUYING";
    }elseif($tipe_pembelian === 'E'){
      $status_program = "EX KONSI";
    }

    $hasil = $this->db->query("UPDATE tbl_outlet SET tipe_pembelian='$tipe_pembelian', nama_salesman='$nama_salesman', status_program='$status_program', foto_stokawal='KOSONG', foto_kontrak='KOSONG', foto_kontrak_tempo='KOSONG' WHERE id_outlet='$id_outlet'");
    return $hasil;
  }

  // function show_laporanoutlet_search_rute_status(){
  //   $rute = $this->input->post('rute_search');
  //   $status_program = $this->input->post('status_program_search');

  //   $hasil = $this->db->query("SELECT nama_outlet, alamat, kecamatan, kabupaten, telepon, nama_pemilik, longitude, latitude, foto_outlet, tipe_pembelian, status_program, id_outlet, nama_salesman, rute
  //     FROM tbl_outlet
  //     WHERE rute='$rute'
  //     AND status_program='$status_program'
  //     ORDER BY status_program DESC");
  //   return $hasil;
  // }

  // function show_laporanoutlet_search_rute(){
  //   $rute = $this->input->post('rute_search');
  //   $status_program = $this->input->post('status_program_search');

  //   $hasil = $this->db->query("SELECT nama_outlet, alamat, kecamatan, kabupaten, telepon, nama_pemilik, longitude, latitude, foto_outlet, tipe_pembelian, status_program, id_outlet, nama_salesman, rute
  //     FROM tbl_outlet
  //     WHERE rute='$rute'
  //     ORDER BY status_program DESC");
  //   return $hasil;
  // }

  // function show_laporanoutlet_search_status(){
  //   $rute = $this->input->post('rute_search');
  //   $status_program = $this->input->post('status_program_search');

  //   $hasil = $this->db->query("SELECT nama_outlet, alamat, kecamatan, kabupaten, telepon, nama_pemilik, longitude, latitude, foto_outlet, tipe_pembelian, status_program, id_outlet, nama_salesman, rute
  //     FROM tbl_outlet
  //     AND status_program='$status_program'
  //     ORDER BY status_program DESC");
  //   return $hasil;
  // }
  /** Laporan Outlet */

  function show_sales(){
    $hasil = $this->db->query("SELECT nama
      FROM tbl_users WHERE user_level='3'");
    return $hasil;
  }

  function show_piutang(){
    $hasil = $this->db->query("SELECT DISTINCT no_nota_penjualan, tanggal FROM tbl_piutang ORDER BY tanggal DESC LIMIT 300");
    return $hasil;
  }

  function show_piutang_search(){
    $nama_salesman = $this->input->post('nama_salesman');
    $hasil = $this->db->query("SELECT DISTINCT tbl_piutang.no_nota_penjualan, tbl_piutang.tanggal
      FROM tbl_piutang, tbl_penjualan
      WHERE tbl_penjualan.no_nota_penjualan = tbl_piutang.no_nota_penjualan
      AND tbl_penjualan.nama_salesman='$nama_salesman' ORDER BY tbl_piutang.tanggal DESC");
    return $hasil;
  }

  function show_piutang_date(){
    $tanggal_awal = $this->input->post('tanggal_awal');
    $tanggal_akhir = $this->input->post('tanggal_akhir');
    $hasil = $this->db->query("SELECT DISTINCT no_nota_penjualan, tanggal FROM tbl_piutang WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir' ORDER BY tanggal DESC");
    return $hasil;
  }

  /** Laporan kas */
  function show_kas(){
    $hasil = $this->db->query("SELECT tanggal FROM tbl_kas_1 GROUP BY tanggal ORDER BY tanggal DESC LIMIT 300");
    return $hasil;
  }

  function show_kas_search(){
    $tanggal_awal = $this->input->get('tanggal_awal');
    $tanggal_akhir = $this->input->get('tanggal_akhir');
    $hasil = $this->db->query("SELECT tanggal FROM tbl_kas_1 WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir' GROUP BY tanggal ORDER BY tanggal DESC");
    return $hasil;
  }

  function show_kas_keluar(){
    $hasil = $this->db->query("SELECT DISTINCT account_transaksi FROM tbl_kas_1 WHERE tujuan='Biaya' AND tipe='Keluar' ORDER BY account_transaksi ASC");
    return $hasil;
  }
  /** Laporan kas */

  /** Laporan Stok */
  function show_stok(){
    $hasil = $this->db->query("SELECT * FROM tbl_produk ORDER BY id_produk ASC");
    return $hasil;
  }
  /** Laporan Stok */

  /** Laporan Sales */
  function show_outlet_sales(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE status_program='COMPLETE' OR status_program='JP CASH' OR status_program='JP TEMPO'");
    return $hasil;
  }

  function show_outlet_sales_search(){
    $nama_salesman = $this->input->post('nama_salesman');
    $rute = $this->input->post('rute');
    $hasil = $this->db->query("SELECT * 
      FROM tbl_outlet 
      WHERE nama_salesman='$nama_salesman' 
      AND rute='$rute'
      AND status_program!='PENDING'
      AND status_program!='BELUM MINAT'");
    return $hasil;
  }

  function show_outlet_sales_norute_search(){
    $nama_salesman = $this->input->post('nama_salesman');
    $hasil = $this->db->query("SELECT * 
      FROM tbl_outlet 
      WHERE nama_salesman='$nama_salesman' 
      AND status_program!='PENDING'
      AND status_program!='BELUM MINAT'");
    return $hasil;
  }

  function show_outlet_nosales_rute_search(){
    $rute = $this->input->post('rute');
    $hasil = $this->db->query("SELECT * 
      FROM tbl_outlet 
      WHERE rute='$rute'
      AND status_program!='PENDING'
      AND status_program!='BELUM MINAT'");
    return $hasil;
  }

  function show_outlet_sale_ao(){
    $hasil = $this->db->query("SELECT DISTINCT 
        tbl_penjualan.id_outlet,
        tbl_outlet.nama_outlet,
        tbl_outlet.alamat,
        tbl_outlet.kecamatan,
        tbl_outlet.kabupaten,
        tbl_outlet.telepon,
        tbl_outlet.nama_pemilik,
        tbl_outlet.longitude,
        tbl_outlet.latitude,
        tbl_outlet.foto_outlet,
        tbl_outlet.tipe_pembelian,
        tbl_outlet.status_program,
        tbl_outlet.nama_salesman,
        tbl_outlet.rute
      FROM tbl_penjualan, tbl_outlet
      WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet
      AND tanggal >= date_trunc('month', CURRENT_DATE);");
    return $hasil;
  }

  function show_outlet_sales_non(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE status_program != 'BELUM MINAT' AND id_outlet NOT IN (SELECT DISTINCT id_outlet FROM tbl_penjualan WHERE tanggal >= date_trunc('month', CURRENT_DATE));");
    return $hasil;
  }
  /** Laporan Sales */

  function show_pembelian(){
    $hasil = $this->db->query("SELECT DISTINCT no_nota_pembelian, tanggal, tempo, status FROM tbl_pembelian ORDER BY tanggal DESC");
    return $hasil;
  }

  /** Laporan Penjualan */
  function show_penjualan(){
    $hasil = $this->db->query("SELECT DISTINCT no_nota_penjualan, tanggal, tipe_pembelian, status, id_file_penjualan, nama_salesman, tempo FROM tbl_penjualan ORDER BY tanggal DESC LIMIT 300");
    return $hasil;
  }

  function show_penjualan_search(){
    $rute = $this->input->post('rute');
    $hasil = $this->db->query("SELECT DISTINCT tbl_penjualan.no_nota_penjualan, tbl_penjualan.tanggal, tbl_penjualan.tipe_pembelian, tbl_penjualan.status, tbl_penjualan.id_file_penjualan, tbl_penjualan.nama_salesman, tbl_penjualan.tempo
      FROM tbl_penjualan, tbl_outlet 
      WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet
      AND tbl_outlet.rute = '$rute'
      ORDER BY tanggal DESC");
    return $hasil;
  }

  function show_penjualan_search_date(){
    $tanggal_awal = $this->input->post('tanggal_awal');
    $tanggal_akhir = $this->input->post('tanggal_akhir');
    $hasil = $this->db->query("SELECT DISTINCT tbl_penjualan.no_nota_penjualan, tbl_penjualan.tanggal, tbl_penjualan.tipe_pembelian, tbl_penjualan.status, tbl_penjualan.id_file_penjualan, tbl_penjualan.nama_salesman, tbl_penjualan.tempo
      FROM tbl_penjualan, tbl_outlet 
      WHERE tbl_penjualan.id_outlet = tbl_outlet.id_outlet
      AND tbl_penjualan.tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'
      ORDER BY tanggal DESC");
    return $hasil;
  }
  /** Laporan Penjualan */

  /** Riwayat */
  function show_stokgudang(){
    $hasil = $this->db->query("SELECT
      tbl_stokgudang.tanggal,
      tbl_produk.nama_produk,
      tbl_stokgudang.jumlah,
      tbl_stokgudang.masuk_keluar,
      tbl_stokgudang.no_surat_jalan,
      tbl_stokgudang.keterangan
    FROM tbl_stokgudang, tbl_produk
    WHERE tbl_stokgudang.id_produk = tbl_produk.id_produk
    ORDER BY tanggal DESC LIMIT 500");
    return $hasil;
  }

  function show_stokoutlet(){
    $hasil = $this->db->query("SELECT
      tbl_stokoutlet.tanggal,
      tbl_outlet.nama_outlet,
      tbl_produk.nama_produk,
      tbl_stokoutlet.masuk_keluar,
      tbl_stokoutlet.jumlah,
      tbl_stokoutlet.no_actiontracking
    FROM tbl_stokoutlet, tbl_produk, tbl_outlet
    WHERE tbl_stokoutlet.id_outlet = tbl_outlet.id_outlet
    AND tbl_stokoutlet.id_produk = tbl_produk.id_produk
    ORDER BY tanggal DESC LIMIT 500");
    return $hasil;
  }
  /** Riwayat */

  function suratjalan(){
    $hasil = $this->db->query("SELECT * FROM tbl_suratjalan ORDER BY tanggal DESC LIMIT 350");
    return $hasil;
  }

  function suratjalan_search_date(){
    $tanggal_awal = $this->input->post('tanggal_awal');
    $tanggal_akhir = $this->input->post('tanggal_akhir');
    $hasil = $this->db->query("SELECT * FROM tbl_suratjalan WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir' ORDER BY tanggal DESC");
    return $hasil;
  }

  /** Melihat Omzet */
  function non_ao_omzet (){
    $tanggal_pertama = $this->input->post('tanggal_pertama');
    $tanggal_terakhir = $this->input->post('tanggal_terakhir');
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE status_program != 'BELUM MINAT' AND id_outlet NOT IN (SELECT DISTINCT id_outlet FROM tbl_penjualan WHERE tanggal BETWEEN '$tanggal_pertama' AND '$tanggal_terakhir');");
    return $hasil;
  }

  function ao_omzet (){
    $tanggal_pertama = $this->input->post('tanggal_pertama');
    $tanggal_terakhir = $this->input->post('tanggal_terakhir');
    $hasil = $this->db->query("SELECT DISTINCT id_outlet FROM tbl_penjualan WHERE tanggal BETWEEN '$tanggal_pertama' AND '$tanggal_terakhir'");
    return $hasil;
  }

  function show_jp_cash_omzet (){
    $tanggal_pertama = $this->input->post('tanggal_pertama');
    $tanggal_terakhir = $this->input->post('tanggal_terakhir');
    $hasil = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE tipe_pembelian='JP CASH' AND tanggal BETWEEN '$tanggal_pertama' AND '$tanggal_terakhir'");
    return $hasil;
  }

  function show_jp_tempo_omzet (){
    $tanggal_pertama = $this->input->post('tanggal_pertama');
    $tanggal_terakhir = $this->input->post('tanggal_terakhir');
    $hasil = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE tipe_pembelian='JP TEMPO' AND tanggal BETWEEN '$tanggal_pertama' AND '$tanggal_terakhir'");
    return $hasil;
  }

  function show_konsinyasi_omzet (){
    $tanggal_pertama = $this->input->post('tanggal_pertama');
    $tanggal_terakhir = $this->input->post('tanggal_terakhir');
    $hasil = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE tipe_pembelian='KONSINYASI' AND tanggal BETWEEN '$tanggal_pertama' AND '$tanggal_terakhir'");
    return $hasil;
  }

  function show_heri_omzet (){
    $tanggal_pertama = $this->input->post('tanggal_pertama');
    $tanggal_terakhir = $this->input->post('tanggal_terakhir');
    $hasil = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE nama_salesman='Heri' AND tanggal BETWEEN '$tanggal_pertama' AND '$tanggal_terakhir'");
    return $hasil;
  }

  function show_gigih_omzet (){
    $tanggal_pertama = $this->input->post('tanggal_pertama');
    $tanggal_terakhir = $this->input->post('tanggal_terakhir');
    $hasil = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE nama_salesman='Gigih' AND tanggal BETWEEN '$tanggal_pertama' AND '$tanggal_terakhir'");
    return $hasil;
  }

  function show_total_omzet (){
    $tanggal_pertama = $this->input->post('tanggal_pertama');
    $tanggal_terakhir = $this->input->post('tanggal_terakhir');
    $hasil = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE tanggal BETWEEN '$tanggal_pertama' AND '$tanggal_terakhir'");
    return $hasil;
  }
  /** Melihat Omzet */

  /** Ubah tanggal nota, piutang, sj */
  function ubahtanggal_nota(){
    $no_nota_penjualan_set = $this->input->post('no_nota_penjualan_set');
    $tanggal_set = $this->input->post('tanggal_set');

    $hasil = $this->db->query("UPDATE tbl_penjualan SET tanggal='$tanggal_set' WHERE no_nota_penjualan='$no_nota_penjualan_set'");
    return $hasil;
  }

  function ubahtanggal_piutang(){
    $no_nota_penjualan_set = $this->input->post('no_nota_penjualan_set');
    $tanggal_set = $this->input->post('tanggal_set');
    $tempo_set = $this->input->post('tempo_set');
    $tanggal_jatuh_tempo_set = date("Y-m-d", strtotime("$tanggal_set +$tempo_set days"));

    $hasil = $this->db->query("UPDATE tbl_piutang SET tanggal='$tanggal_set', tanggal_bayar='$tanggal_set', tanggal_jatuh_tempo='$tanggal_jatuh_tempo_set' WHERE no_nota_penjualan='$no_nota_penjualan_set'");
    return $hasil;
  }

  function ubahtanggal_sj(){
    $no_nota_penjualan_set = $this->input->post('no_nota_penjualan_set');
    $tanggal_set = $this->input->post('tanggal_set');

    $hasil = $this->db->query("UPDATE tbl_suratjalan SET tanggal='$tanggal_set' WHERE no_nota='$no_nota_penjualan_set'");
    return $hasil;
  }

  function ubahtanggal_stok_gudang(){
    $tanggal_set = $this->input->post('tanggal_set');
    $no_nota_penjualan_set = $this->input->post('no_nota_penjualan_set');
    $cek_nosj = $this->db->query("SELECT no_suratjalan FROM tbl_suratjalan WHERE no_nota='$no_nota_penjualan_set' LIMIT 1");
    $no_sj = $cek_nosj->row()->no_suratjalan;

    $hasil = $this->db->query("UPDATE tbl_stokgudang SET tanggal='$tanggal_set' WHERE no_surat_jalan='$no_sj'");
    return $hasil;
  }

  function ubahtanggal_stok_outlet(){
    $tanggal_set = $this->input->post('tanggal_set');
    $no_nota_penjualan_set = $this->input->post('no_nota_penjualan_set');
    $cek_nosj = $this->db->query("SELECT no_suratjalan FROM tbl_suratjalan WHERE no_nota='$no_nota_penjualan_set' LIMIT 1");
    $no_sj = $cek_nosj->row()->no_suratjalan;

    $hasil = $this->db->query("UPDATE tbl_stokoutlet SET tanggal='$tanggal_set' WHERE no_actiontracking='$no_sj'");
    return $hasil;
  }
  /** Ubah tanggal nota, piutang, sj */

  /** Monitor Accounting */
    /** Penjualan */
    function accounting_penjualan(){
      $tanggal_awal = $this->input->post('tanggal_awal');
      $tanggal_akhir = $this->input->post('tanggal_akhir');
      $hasil = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir';");
      return $hasil;
    }
    /** Penjualan */

    /** Harga Pokok Penjualan */
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
    /** Harga Pokok Penjualan */

    /** Pembelian */
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
    /** Pembelian */

    /** Biaya */
    function biaya_operasional_kantor(){
      $tanggal_awal = $this->input->post('tanggal_awal');
      $tanggal_akhir = $this->input->post('tanggal_akhir');
      $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE account_transaksi='Biaya Operasional Kantor' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
      return $hasil;
    }

    function biaya_operasional_kirim(){
      $tanggal_awal = $this->input->post('tanggal_awal');
      $tanggal_akhir = $this->input->post('tanggal_akhir');
      $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE account_transaksi='Biaya Operasional Kirim' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
      return $hasil;
    }

    function biaya_gaji_upah_reward(){
      $tanggal_awal = $this->input->post('tanggal_awal');
      $tanggal_akhir = $this->input->post('tanggal_akhir');
      $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE account_transaksi='Biaya Gaji/Upah/Reward' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
      return $hasil;
    }

    function biaya_operasional_sales(){
      $tanggal_awal = $this->input->post('tanggal_awal');
      $tanggal_akhir = $this->input->post('tanggal_akhir');
      $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE account_transaksi='Biaya Operasional Sales' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
      return $hasil;
    }

    function biaya_perawatan_kendaraan(){
      $tanggal_awal = $this->input->post('tanggal_awal');
      $tanggal_akhir = $this->input->post('tanggal_akhir');
      $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE account_transaksi='Biaya Perawatan Kendaraan' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
      return $hasil;
    }

    function biaya_perawatan_kantor(){
      $tanggal_awal = $this->input->post('tanggal_awal');
      $tanggal_akhir = $this->input->post('tanggal_akhir');
      $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE account_transaksi='Biaya Perawatan Kantor' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
      return $hasil;
    }

    function biaya_perjalanan(){
      $tanggal_awal = $this->input->post('tanggal_awal');
      $tanggal_akhir = $this->input->post('tanggal_akhir');
      $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE account_transaksi='Biaya Perjalanan' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
      return $hasil;
    }

    function biaya_promosi_program(){
      $tanggal_awal = $this->input->post('tanggal_awal');
      $tanggal_akhir = $this->input->post('tanggal_akhir');
      $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE account_transaksi='Biaya Promosi dan Program' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
      return $hasil;
    }

    function biaya_pajak(){
      $tanggal_awal = $this->input->post('tanggal_awal');
      $tanggal_akhir = $this->input->post('tanggal_akhir');
      $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE account_transaksi='Pajak' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
      return $hasil;
    }

    function biaya_asuransi(){
      $tanggal_awal = $this->input->post('tanggal_awal');
      $tanggal_akhir = $this->input->post('tanggal_akhir');
      $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE account_transaksi='Asuransi' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
      return $hasil;
    }

    function biaya_pembayaran_nota_beli(){
      $tanggal_awal = $this->input->post('tanggal_awal');
      $tanggal_akhir = $this->input->post('tanggal_akhir');
      $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE account_transaksi='Pembayaran Nota Beli' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
      return $hasil;
    }
    /** Biaya */

    /** Pendapatan lainya */
    function denda(){
      $tanggal_awal = $this->input->post('tanggal_awal');
      $tanggal_akhir = $this->input->post('tanggal_akhir');
      $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE tujuan='Pendapatan Lain-lain' AND account_transaksi='Denda' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
      return $hasil;
    }

    function pendapatan_lainya(){
      $tanggal_awal = $this->input->post('tanggal_awal');
      $tanggal_akhir = $this->input->post('tanggal_akhir');
      $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE tujuan='Pendapatan Lain-lain' AND account_transaksi='Lain-lain' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
      return $hasil;
    }
    /** Pendapatan lainya */

    /** Biaya lainya */
    function biaya_lainya(){
      $tanggal_awal = $this->input->post('tanggal_awal');
      $tanggal_akhir = $this->input->post('tanggal_akhir');
      $hasil = $this->db->query("SELECT SUM(nominal) AS nominal FROM tbl_kas_1 WHERE tujuan='Biaya' AND account_transaksi='Biaya Tidak Terduga' OR account_transaksi='Lain-lain' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
      return $hasil;
    }
    /** Biaya lainya */

    /** Estimated Gross Profit */
    function estimated_gross_profit(){
      $tanggal_awal = $this->input->post('tanggal_awal');
      $tanggal_akhir = $this->input->post('tanggal_akhir');
      $hpp = 0;
      $egp = 0;
      $cek_penjualan = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
      $penjualan = $cek_penjualan->row()->subtotal;

      $cek_hpp = $this->db->query("SELECT tbl_penjualan.id_produk AS id_produk, tbl_penjualan.jumlah AS jumlah, tbl_produk.harga_beli AS harga_beli FROM tbl_penjualan, tbl_produk WHERE tbl_penjualan.id_produk=tbl_produk.id_produk AND tbl_penjualan.tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
      foreach($cek_hpp->result_array() as $tampil):
        $jumlah = $tampil['jumlah'];
        $harga_beli = $tampil['harga_beli'];
  
        $hpp += $jumlah*$harga_beli;        
      endforeach;

      $egp = $penjualan - $hpp;
          
      $hasil = $egp;
      return $hasil;
    }

    function estimated_gross_profit_detail(){
      $hasil = $this->db->query("SELECT * FROM tbl_produk");
      return $hasil;
    }
    /** Estimated Gross Profit */
  /** Monitor Accounting */

  /** Data Inventaris */
  function get_id_harta(){
    $tanggal = date('Y-m-d');
    $q = $this->db->query("SELECT MAX(RIGHT(id_harta,4)) AS id_harta FROM tbl_inventaris WHERE DATE(tanggal_bikin)='$tanggal'");
    $kd = "";
    if($q->num_rows()>0){
      foreach($q->result() as $k){
        $tmp = ((int)$k->id_harta)+1;
        $kd = sprintf("%04s", $tmp);
      }
    }else{
      $kd = "0001";
    }
    date_default_timezone_set('Asia/Jakarta');
    return date('dmy').$kd;
  }

  function show_harta(){
    $hasil = $this->db->query("SELECT * FROM tbl_inventaris");
    return $hasil;
  }

  function simpan_inventaris(){
    $id_harta = $this->input->post('id_harta');
    $nama_harta = $this->input->post('nama_harta');
    $tanggal_beli = $this->input->post('tanggal_beli');
    $tanggal_bikin = $this->input->post('tanggal_bikin');
    $nilai_perolehan = $this->input->post('nilai_perolehan');
    $estimasi_pemakaian = $this->input->post('estimasi_pemakaian');
    $hasil = $this->db->query("INSERT INTO tbl_inventaris(id_harta, nama_harta, tanggal_beli, tanggal_bikin, nilai_perolehan, estimasi_pemakaian) VALUES('$id_harta','$nama_harta','$tanggal_beli','$tanggal_bikin','$nilai_perolehan','$estimasi_pemakaian')");
    return $hasil;
  }

  function hapus_inventaris(){
    $id_harta = $this->input->post('id_harta');
    $hasil = $this->db->query("DELETE FROM tbl_inventaris WHERE id_harta='$id_harta'");
    return $hasil;
  }

  /** Data Inventaris */

  /** SO Sistem */
  function so_sistem(){
    $hasil = $this->db->query("SELECT * FROM tbl_produk");
    return $hasil;
  }
  /** SO Sistem */

}