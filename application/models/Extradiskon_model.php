<?php
class Extradiskon_model extends CI_Model{

    function show_extradiskon(){
        $hasil = $this->db->query("SELECT DISTINCT id_outlet, nama_outlet, alamat FROM tbl_extra_diskon");
        return $hasil;
    }

    function tarik_produk(){
        $hasil = $this->db->query("SELECT * FROM tbl_produk");
        return $hasil->result();
    }

    public function simpan($filter_data){
        $hasil = $this->db->insert_batch('tbl_extra_diskon', $filter_data);
        return $hasil;
    }

    function ubah_diskon(){
        $id_outlet = $this->input->post('id_outlet');
        $hasil = $this->db->query("UPDATE tbl_outlet SET diskon='EXTRA' WHERE id_outlet='$id_outlet'");
        return $hasil;
    }

    function hapus_diskon(){
        $id_outlet = $this->input->post('id_outlet');
        $hasil = $this->db->query("DELETE FROM tbl_extra_diskon WHERE id_outlet='$id_outlet'");
        return $hasil;
    }

    function ubah_status(){
        $id_outlet = $this->input->post('id_outlet');
        $hasil = $this->db->query("UPDATE tbl_outlet SET diskon='NORMAL' WHERE id_outlet='$id_outlet'");
        return $hasil;
    }

    function tanggal_cabut(){
        $id_outlet = $this->input->post('id_outlet');
        $tanggal = date('Y-m-d');
        $hasil = $this->db->query("UPDATE tbl_extra_diskon_riwayat SET tanggal_dicabut='$tanggal' WHERE id_outlet='$id_outlet' AND tanggal_diberi=(SELECT MAX(tanggal_diberi) FROM tbl_extra_diskon_riwayat WHERE id_outlet='$id_outlet')");
        return $hasil;
    }

    function show_extradiskon_setup(){
        $id_outlet = $this->input->post('id_outlet');
        $hasil = $this->db->query("SELECT * FROM tbl_extra_diskon WHERE id_outlet='$id_outlet'");
        return $hasil;
    }

    function get_data(){
        $id_outlet = $this->input->post('id_outlet');
        $hasil = $this->db->query("SELECT * FROM tbl_extra_diskon WHERE id_outlet='$id_outlet' ORDER BY nama_produk ASC");
        return $hasil->result();
    }

    function simpan_extra(){
        $id_outlet = $this->input->post('id_outlet');
        $id_produk = $this->input->post('id_produk');
        $harga_beli = $this->input->post('harga_beli');
        $harga_jual = $this->input->post('harga_jual');
        $hasil = $this->db->query("UPDATE tbl_extra_diskon SET harga_jual='$harga_jual' WHERE id_outlet='$id_outlet' AND id_produk='$id_produk'");
        return $hasil;
    }

    function simpan_riwayat(){
        $id_outlet = $this->input->post('id_outlet');
        $nama_outlet = $this->input->post('nama_outlet');
        $tanggal_diberi = $this->input->post('tanggal_diberi');

        $hasil = $this->db->query("INSERT INTO tbl_extra_diskon_riwayat(id_outlet, nama_outlet, tanggal_diberi) VALUES('$id_outlet','$nama_outlet','$tanggal_diberi')");
        return $hasil;
    }

    function hapus_reset(){
        $id_outlet = $this->input->post('id_outlet');
        $hasil = $this->db->query("DELETE FROM tbl_extra_diskon WHERE id_outlet='$id_outlet'");
        return $hasil;
    }

}