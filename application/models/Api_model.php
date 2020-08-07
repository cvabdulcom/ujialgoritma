<?php
class Api_model extends CI_Model{

  function cek_login(){
    $username = $this->input->post('username');
    $password = md5($this->input->post('password',TRUE));
    $jabatan = "Sales";
    $this->db->where('user_name',$username);
    $this->db->where('user_password',$password);
    $this->db->where('jabatan',$jabatan);
    $result = $this->db->get('tbl_users',1);
    return $result->result();
  }

  function simpan_pendataan(){
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

    $id_outlet = "OT".date('dmy').$kd;
    $nama_outlet = $this->input->post('nama_outlet');
    $kecamatan = $this->input->post('kecamatan');
    $kabupaten = $this->input->post('kota_kabupaten');
    $alamat = $this->input->post('alamat');
    $latitude = $this->input->post('latitude');
    $longitude = $this->input->post('longitude');
    $nama_pemilik = $this->input->post('nama_pemilik');
    $telepon = $this->input->post('telepon');
    $ada_whatsapp = $this->input->post('ada_whatsapp');
    $tanggal_lahir = date('Y-m-d');
    $tipe_outlet = $this->input->post('tipe_outlet');
    $jumlah_pegawai = $this->input->post('jumlah_pegawai');
    $fasilitas = $this->input->post('fasilitas');
    $supplier = $this->input->post('supplier');
    $rute = "0";
    $tipe_pembelian = $this->input->post('tipe_pembelian');
    $nama_salesman = $this->input->post('nama_salesman');
    if($tipe_pembelian === 'J'){
      $status_program = "JP CASH";
    }elseif($tipe_pembelian == 'K'){
      $status_program = "PENDING";
    }elseif($tipe_pembelian == 'G'){
      $status_program = "GB CASH";
    }elseif($tipe_pembelian == 'B'){
      $status_program = "BELUM MINAT";
    }
    $foto_outlet = "KOSONG";
    $foto_stokawal = "KOSONG";
    $foto_kontrak = "KOSONG";
    $foto_kontrak_tempo = "KOSONG";

    $hasil = $this->db->query("INSERT INTO tbl_outlet(id_outlet, nama_outlet, kecamatan, kabupaten, alamat, latitude, longitude, nama_pemilik, telepon, ada_whatsapp, tanggal_lahir, tipe_outlet, jumlah_pegawai, fasilitas, supplier, rute, tipe_pembelian, nama_salesman, status_program, foto_outlet, foto_stokawal, foto_kontrak, foto_kontrak_tempo) VALUES('$id_outlet','$nama_outlet','$kecamatan','$kabupaten','$alamat','$latitude','$longitude','$nama_pemilik','$telepon','$ada_whatsapp','$tanggal_lahir','$tipe_outlet','$jumlah_pegawai','$fasilitas','$supplier','$rute','$tipe_pembelian','$nama_salesman','$status_program','$foto_outlet','$foto_stokawal','$foto_kontrak','$foto_kontrak_tempo')");
    return $hasil;
  }

  function radius_data(){
    $hasil = $this->db->query("SELECT nama_outlet, latitude, longitude, nama_pemilik, telepon, alamat, tipe_pembelian, status_program FROM tbl_outlet");
    return $hasil->result();
  }

  function batch_number(){
    $nomor_batch = $this->input->post('nomor_batch');
    $hasil = $this->db->query("SELECT * FROM tbl_batch WHERE no_batch='$nomor_batch'");
    return $hasil->result();
  }

  function Data_outlet(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE tipe_pembelian='B'");
    return $hasil->result();
  }

  function simpan_penawaran(){
    $id_outlet = $this->input->post('id_outlet');
    $tipe_pembelian = $this->input->post('tipe_pembelian');
    if($tipe_pembelian === 'J'){
      $status_program = "JP CASH";
    }elseif($tipe_pembelian == 'K'){
      $status_program = "PENDING";
    }elseif($tipe_pembelian == 'G'){
      $status_program = "GB CASH";
    }
    $hasil = $this->db->query("UPDATE tbl_outlet SET tipe_pembelian='$tipe_pembelian', status_program='$status_program' WHERE id_outlet='$id_outlet'");
    return $hasil;
  }

  function Data_outlet_full(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet");
    return $hasil->result();
  }

  function simpan_perbaikan(){
    $id_outlet = $this->input->post('id_outlet');
    $nama_outlet = $this->input->post('nama_outlet');
    $kecamatan = $this->input->post('kecamatan');
    $kabupaten = $this->input->post('kabupaten');
    $latitude = $this->input->post('latitude');
    $longitude = $this->input->post('longitude');
    $nama_pemilik = $this->input->post('nama_pemilik');
    $telepon = $this->input->post('telepon');
    $ada_whatsapp = $this->input->post('ada_whatsapp');
    $jumlah_pegawai = $this->input->post('jumlah_pegawai');
    $alamat = $this->input->post('alamat');

    $hasil = $this->db->query("UPDATE tbl_outlet SET nama_outlet='$nama_outlet', kecamatan='$kecamatan', kabupaten='$kabupaten', latitude='$latitude', longitude='$longitude', nama_pemilik='$nama_pemilik', telepon='$telepon', ada_whatsapp='$ada_whatsapp', jumlah_pegawai='$jumlah_pegawai', alamat='$alamat' WHERE id_outlet='$id_outlet'");
    return $hasil;
  }

  function simpan_informasi(){
    $tanggal = date('Y-m-d');
    $q = $this->db->query("SELECT MAX(RIGHT(id_informasi,4)) AS id_informasi FROM tbl_informasi WHERE DATE(tanggal)='$tanggal'");
    $kd = "";
    if($q->num_rows()>0){
      foreach($q->result() as $k){
        $tmp = ((int)$k->id_informasi)+1;
        $kd = sprintf("%04s", $tmp);
      }
    }else{
      $kd = "0001";
    }
    date_default_timezone_set('Asia/Jakarta');
    $id_informasi = date('dmy').$kd;
    $tanggal = date('Y-m-d');
    $time = (date("d F Y h:i:s", time()));
    $nama = "Sales";
    $keterangan = $this->input->post('keterangan');

    $hasil = $this->db->query("INSERT INTO tbl_informasi(id_informasi, tanggal, time, nama, keterangan) VALUES('$id_informasi', '$tanggal', '$time', '$nama', '$keterangan')");
    return $hasil;
  }

  function no_nota(){
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

  function data_outlet_konsinyasi(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE status_program='COMPLETE'");
    return $hasil->result();
  }

  function data_produk(){
    $hasil = $this->db->query("SELECT * FROM tbl_produk");
    return $hasil->result();
  }
  
  public function simpan_nota($filter_data){
    $hasil = $this->db->insert_batch('tbl_penjualan', $filter_data);
    return $hasil;
  }

  public function simpan_stokoutlet($filter_data){
    $hasil = $this->db->insert_batch('tbl_stokoutlet', $filter_data);
    return $hasil;
  }

  function simpan_piutang(){
    $tanggal = $this->input->post('tanggal');
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');
    $tanggal_jatuh_tempo = $this->input->post('tanggal_jatuh_tempo');
    $nominal_nota_penjualan = $this->input->post('nominal_nota_penjualan');
    $terbayar = $this->input->post('terbayar');
    $tanggal_bayar = $this->input->post('tanggal_bayar');
    $sisa = $this->input->post('sisa');
    $status = $this->input->post('status');

    $hasil = $this->db->query("INSERT INTO tbl_piutang(tanggal, no_nota_penjualan, tanggal_jatuh_tempo, nominal_nota_penjualan, terbayar, tanggal_bayar, sisa, status)
    VALUES('$tanggal', '$no_nota_penjualan', '$tanggal_jatuh_tempo', '$nominal_nota_penjualan', '$terbayar', '$tanggal_bayar', '$sisa', '$status')");
    return $hasil;
  }

  public function simpan_kunjungan(){
    $tanggal = $this->input->post('tanggal');
    $id_outlet = $this->input->post('id_outlet');
    $kondisi = $this->input->post('kondisi');
    $id_file = $this->input->post('id_file');
    $nama_salesman = $this->input->post('nama_salesman');

    $hasil = $this->db->query("INSERT INTO tbl_kunjungan(tanggal, id_outlet, kondisi, id_file, nama_salesman) VALUES('$tanggal', '$id_outlet', '$kondisi', '$id_file', '$nama_salesman')");
    return $hasil;
  }

  function cetak_nota(){
    $hasil = $this->db->query("SELECT DISTINCT tbl_penjualan.no_nota_penjualan, tbl_penjualan.tanggal, tbl_outlet.nama_outlet FROM tbl_outlet, tbl_penjualan WHERE tbl_outlet.id_outlet = tbl_penjualan.id_outlet AND tbl_penjualan.no_nota_penjualan not like 'PN%' ORDER BY tbl_penjualan.tanggal DESC");
    return $hasil->result();
  }

  function belumminat(){
    $hasil = $this->db->query("SELECT * FROM tbl_outlet WHERE tipe_pembelian='B'");
    return $hasil->result();
  }

  function tariknota(){
    $no_nota_penjualan = $this->input->post('no_nota_penjualan');
    $hasil = $this->db->query("SELECT tbl_penjualan.tanggal, tbl_penjualan.no_nota_penjualan, tbl_penjualan.nama_salesman, tbl_penjualan.rute, tbl_penjualan.id_outlet, tbl_penjualan.id_produk, tbl_penjualan.jumlah, tbl_penjualan.harga, tbl_penjualan.tipe_pembelian, tbl_penjualan.tempo, tbl_penjualan.status, tbl_penjualan.id_file_penjualan, tbl_penjualan.subtotal, tbl_penjualan.nama_produk, tbl_penjualan.nama_admin, tbl_penjualan.izin, tbl_outlet.nama_outlet FROM tbl_penjualan, tbl_outlet WHERE tbl_penjualan.id_outlet=tbl_outlet.id_outlet AND no_nota_penjualan='$no_nota_penjualan'");
    return $hasil->result();
  }

}