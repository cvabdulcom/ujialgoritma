<?php
class Laporan extends CI_Controller{
  function __construct(){
    parent::__construct();
    //menjalankan model login, untuk menampilkan database
    $this->load->model('laporan_model');
    $this->load->model('kasharian_model');
  }

  /** Laporan Outlet */
  function Outlet(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['laporanoutlet'] = $this->laporan_model->show_laporanoutlet();
      $this->load->view('admin/header');
      $this->load->view('admin/laporanoutlet', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Outlet_search(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      
      // if(isset($_POST["nama_salesman"]) && isset($_POST["rute_search"]) && isset($_POST["status_program_search"])){
      //   $ambildata['laporanoutlet'] = $this->laporan_model->show_laporanoutlet_search_all();
      // }else if(isset($_POST["nama_salesman"]) && !empty($_POST["rute_search"]) && !empty($_POST["status_program_search"])){
      //   $ambildata['laporanoutlet'] = $this->laporan_model->show_laporanoutlet_search_rute_status();
      // }else if(!empty($_POST["nama_salesman"]) && isset($_POST["rute_search"]) && !empty($_POST["status_program_search"])){
      //   $ambildata['laporanoutlet'] = $this->laporan_model->show_laporanoutlet_search_rute();
      // }else if(!empty($_POST["nama_salesman"]) && !empty($_POST["rute_search"]) && isset($_POST["status_program_search"])){
      //   $ambildata['laporanoutlet'] = $this->laporan_model->show_laporanoutlet_search_status();
      // }else if(!empty($_POST["nama_salesman"]) && !empty($_POST["rute_search"]) && isset($_POST["status_program_search"])){
      //   $ambildata['laporanoutlet'] = $this->laporan_model->show_laporanoutlet_search_status();
      // }else if(!empty($_POST["nama_salesman"]) && !empty($_POST["rute_search"]) && !empty($_POST["status_program_search"])){
      //   $ambildata['laporanoutlet'] = $this->laporan_model->show_laporanoutlet();
      // }

      $ambildata['laporanoutlet'] = $this->laporan_model->show_laporanoutlet_search_all();
  
      $this->load->view('admin/header');
      $this->load->view('admin/laporanoutlet', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Upload_foto(){
    $this->laporan_model->upload_foto();
    redirect('laporan/outlet');
  }

  function Ubah_outlet(){
    $this->laporan_model->ubah_outlet();
    redirect('laporan/outlet');
  }
  /** Laporan Outlet */

  /** Laporan Piutang */
  function Piutang(){
    if(isset($_POST['nama_salesman'])){
      if($this->session->userdata('user_level_olikuapp')==='2'){
        $ambildata['namasales'] = $this->laporan_model->show_sales();
        $ambildata['piutang'] = $this->laporan_model->show_piutang_search();
        $this->load->view('admin/header');
        $this->load->view('admin/laporanpiutang', $ambildata);
        $this->load->view('admin/footer');
      }else{ 
        echo "Access Denied";
      }
    }else{
      if($this->session->userdata('user_level_olikuapp')==='2'){
        $ambildata['namasales'] = $this->laporan_model->show_sales();
        $ambildata['piutang'] = $this->laporan_model->show_piutang();
        $this->load->view('admin/header');
        $this->load->view('admin/laporanpiutang', $ambildata);
        $this->load->view('admin/footer');
      }else{ 
        echo "Access Denied";
      }
    }    
  }

  function Piutang_date(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['namasales'] = $this->laporan_model->show_sales();
      $ambildata['piutang'] = $this->laporan_model->show_piutang_date();
      $this->load->view('admin/header');
      $this->load->view('admin/laporanpiutang', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }
  /** Laporan Piutang */

  /** Laporan Sales */
  function Sales(){
    $ambildata['namasales'] = $this->laporan_model->show_sales();
    $ambildata['outlet'] = $this->laporan_model->show_outlet_sales();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporansales', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Sales_search(){
    if(!empty($_POST["nama_salesman"]) && empty($_POST["rute"])) {
      $ambildata['namasales'] = $this->laporan_model->show_sales();
      $ambildata['outlet'] = $this->laporan_model->show_outlet_sales_norute_search();
    }elseif(empty($_POST["nama_salesman"]) && !empty($_POST["rute"])){
      $ambildata['namasales'] = $this->laporan_model->show_sales();
      $ambildata['outlet'] = $this->laporan_model->show_outlet_nosales_rute_search();
    }elseif(!empty($_POST["nama_salesman"]) && !empty($_POST["rute"])){
      $ambildata['namasales'] = $this->laporan_model->show_sales();
      $ambildata['outlet'] = $this->laporan_model->show_outlet_sales_search();  
    }else{  
      redirect('laporan/sales');
    }

    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporansales', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }   
    
  }

  function sales_ao(){
    $ambildata['namasales'] = $this->laporan_model->show_sales();
    $ambildata['outlet'] = $this->laporan_model->show_outlet_sale_ao();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporansales', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function sales_non(){
    $ambildata['namasales'] = $this->laporan_model->show_sales();
    $ambildata['outlet'] = $this->laporan_model->show_outlet_sales_non();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporansales', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }
  /** Laporan Sales */
  
  function Stok(){
    $ambildata['stok'] = $this->laporan_model->show_stok();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporanstok', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Stok_dus(){
    $ambildata['stok'] = $this->laporan_model->show_stok();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporanstok_dus', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Stok_sales1(){
    $ambildata['stok'] = $this->laporan_model->show_stok();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporanstok_sales1', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Stok_sales2(){
    $ambildata['stok'] = $this->laporan_model->show_stok();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporanstok_sales2', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Stok_global(){
    $ambildata['stok'] = $this->laporan_model->show_stok();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporanstok_global', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Stok_summary(){
    $ambildata['stok'] = $this->laporan_model->show_stok();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporanstok_summary', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Pembelian(){

    $query =  $this->db->query("SELECT DISTINCT tbl_pembelian.tanggal, tbl_produk.nama_produk as nama_produk, tbl_pembelian.jumlah as jumlah
      FROM tbl_pembelian, tbl_produk
      WHERE tbl_pembelian.id_produk = tbl_produk.id_produk"); 
 
    $record = $query->result_array();

    $filter_data = array();
    foreach($record as $row) {
      $message = array(
        "y" => $row['jumlah'],
        "label" => $row['nama_produk']
      );
      $filter_data[] = $message;
    }    

    $ambildata['chart_data'] = json_encode($filter_data);

    $ambildata['pembelian'] = $this->laporan_model->show_pembelian();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporanpembelian', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  /** Laporan Penjualan */
  function Penjualan(){
    $ambildata['namasales'] = $this->laporan_model->show_sales();
    $ambildata['penjualan'] = $this->laporan_model->show_penjualan();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporanpenjualan', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Penjualan_search(){
    $ambildata['namasales'] = $this->laporan_model->show_sales();
    $ambildata['penjualan'] = $this->laporan_model->show_penjualan_search();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporanpenjualan', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Penjualan_search_date(){
    $ambildata['namasales'] = $this->laporan_model->show_sales();
    $ambildata['penjualan'] = $this->laporan_model->show_penjualan_search_date();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporanpenjualan', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }
  /** Laporan Penjualan */

  /** Laporan kas */
  function Kas(){
    $ambildata['kas'] = $this->laporan_model->show_kas();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporankas', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Kas_search(){
    $ambildata['kas'] = $this->laporan_model->show_kas_search();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporankas', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Kas_keluar(){
    $ambildata['kas_keluar'] = $this->laporan_model->show_kas_keluar();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporankas_keluar', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }
  /** Laporan Kas */

  function Accounting(){
    $ambildata['kas'] = $this->laporan_model->show_kas();
    $ambildata['id_kas'] = $this->kasharian_model->get_id_kas_1();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporanaccounting_labarugi', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Accounting_neraca(){
    $ambildata['id_harta'] = $this->laporan_model->get_id_harta();
    $ambildata['harta'] = $this->laporan_model->show_harta();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporanaccounting_neraca', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Show_stokgudang(){
    $data = $this->laporan_model->show_stokgudang()->result_array();
    echo json_encode($data);
  }

  function Show_stokoutlet(){
    $data = $this->laporan_model->show_stokoutlet()->result_array();
    echo json_encode($data);
  }

  function Suratjalan(){
    $ambildata['suratjalan'] = $this->laporan_model->suratjalan();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporansuratjalan', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  function Suratjalan_search_date(){
    $ambildata['suratjalan'] = $this->laporan_model->suratjalan_search_date();
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $this->load->view('admin/header');
      $this->load->view('admin/laporansuratjalan', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }

  /** Melihat omzet */
  function Non_ao_omzet(){
    $data = $this->laporan_model->non_ao_omzet()->result_array();
    echo json_encode($data);
  }

  function Ao_omzet(){
    $data = $this->laporan_model->ao_omzet()->result_array();
    echo json_encode($data);
  }

  function Jp_cash_omzet(){
    $data = $this->laporan_model->show_jp_cash_omzet()->result_array();
    echo json_encode($data);
  }

  function Jp_tempo_omzet(){
    $data = $this->laporan_model->show_jp_tempo_omzet()->result_array();
    echo json_encode($data);
  }

  function Konsinyasi_omzet(){
    $data = $this->laporan_model->show_konsinyasi_omzet()->result_array();
    echo json_encode($data);
  }

  function Heri_omzet(){
    $data = $this->laporan_model->show_heri_omzet()->result_array();
    echo json_encode($data);
  }

  function Gigih_omzet(){
    $data = $this->laporan_model->show_gigih_omzet()->result_array();
    echo json_encode($data);
  }

  function Total_omzet(){
    $data = $this->laporan_model->show_total_omzet()->result_array();
    echo json_encode($data);
  }
  /** Melihat omzet */

  /** Ubah tanggal nota, piutang, sj */
  function Ubahtanggal_nota(){
    $this->laporan_model->ubahtanggal_nota();
    $this->laporan_model->ubahtanggal_piutang();

    redirect('laporan/penjualan');
  }

  function Ubahtanggal_sj(){
    $this->laporan_model->ubahtanggal_sj();
    $this->laporan_model->ubahtanggal_stok_gudang();
    $this->laporan_model->ubahtanggal_stok_outlet();

    redirect('laporan/suratjalan');
  }
  /** Ubah tanggal nota, piutang, sj */

  /** Monitor Accounting */
    /** Penjualan */
    function Accounting_penjualan(){
      $data = $this->laporan_model->accounting_penjualan()->result_array();
      echo json_encode($data);
    }
    /** Penjualan */

    /** Harga Pokok Penjualan */
    function Laporan_stokawal_gudang(){
      $data = $this->laporan_model->laporan_stokawal_gudang();
      echo json_encode($data);
    }
  
    function Laporan_stokawal_heri(){
      $data = $this->laporan_model->laporan_stokawal_heri();
      echo json_encode($data);
    }
  
    function Laporan_stokawal_gigih(){
      $data = $this->laporan_model->laporan_stokawal_gigih();
      echo json_encode($data);
    }
  
    function Laporan_stokakhir_gudang(){
      $data = $this->laporan_model->laporan_stokakhir_gudang();
      echo json_encode($data);
    }
  
    function Laporan_stokakhir_heri(){
      $data = $this->laporan_model->laporan_stokakhir_heri();
      echo json_encode($data);
    }
  
    function Laporan_stokakhir_gigih(){
      $data = $this->laporan_model->laporan_stokakhir_gigih();
      echo json_encode($data);
    }
    /** Harga Pokok Penjualan */

    /** Pembelian */
    function Laporan_pembelian_stok(){
      $data = $this->laporan_model->laporan_stokawal_pembelian();
      echo json_encode($data);
    }
    /** Pembelian */

    /** Biaya */
    function biaya_operasional_kantor(){
      $data = $this->laporan_model->biaya_operasional_kantor()->result_array();
      echo json_encode($data);
    }

    function biaya_operasional_kirim(){
      $data = $this->laporan_model->biaya_operasional_kirim()->result_array();
      echo json_encode($data);
    }

    function biaya_gaji_upah_reward(){
      $data = $this->laporan_model->biaya_gaji_upah_reward()->result_array();
      echo json_encode($data);
    }

    function biaya_operasional_sales(){
      $data = $this->laporan_model->biaya_operasional_sales()->result_array();
      echo json_encode($data);
    }

    function biaya_perawatan_kendaraan(){
      $data = $this->laporan_model->biaya_perawatan_kendaraan()->result_array();
      echo json_encode($data);
    }

    function biaya_perawatan_kantor(){
      $data = $this->laporan_model->biaya_perawatan_kantor()->result_array();
      echo json_encode($data);
    }

    function biaya_perjalanan(){
      $data = $this->laporan_model->biaya_perjalanan()->result_array();
      echo json_encode($data);
    }

    function biaya_promosi_program(){
      $data = $this->laporan_model->biaya_promosi_program()->result_array();
      echo json_encode($data);
    }

    function biaya_pajak(){
      $data = $this->laporan_model->biaya_pajak()->result_array();
      echo json_encode($data);
    }

    function biaya_asuransi(){
      $data = $this->laporan_model->biaya_asuransi()->result_array();
      echo json_encode($data);
    }

    function biaya_pembayaran_nota_beli(){
      $data = $this->laporan_model->biaya_pembayaran_nota_beli()->result_array();
      echo json_encode($data);
    }
    /** Biaya */

    /** Pendapatan Lainya */
    function denda(){
      $data = $this->laporan_model->denda()->result_array();
      echo json_encode($data);
    }

    function pendapatan_lainya(){
      $data = $this->laporan_model->pendapatan_lainya()->result_array();
      echo json_encode($data);
    }
    /** Pendapatan Lainya */

    /** Biaya lainya */
    function biaya_lainya(){
      $data = $this->laporan_model->biaya_lainya()->result_array();
      echo json_encode($data);
    }
    /** Biaya lainya */

    /** Estimasi laba kotor */
    function Estimated_gross_profit(){
      $data = $this->laporan_model->estimated_gross_profit();
      echo json_encode($data);
    }

    function Estimated_gross_profit_detail(){
      if($this->session->userdata('user_level_olikuapp')==='2'){
        $ambildata['egp_detail'] = $this->laporan_model->estimated_gross_profit_detail();
        $this->load->view('admin/estimated_gross_profit', $ambildata);
      }else{ 
        echo "Access Denied";
      }
    }
    /** Estimasi laba kotor */
  /** Monitor Accounting */

  /** Data Inventaris */
  function simpan_inventaris(){
    $data = $this->laporan_model->simpan_inventaris();
    echo json_encode($data);
  }

  function hapus_inventaris(){
    $this->laporan_model->hapus_inventaris();
    redirect('laporan/accounting_neraca');
  }
  /** Data Inventaris */

  /** Stok Outlet */
  function so_sistem(){
    if($this->session->userdata('user_level_olikuapp')==='2'){
      $ambildata['so_sistem'] = $this->laporan_model->so_sistem();
      $this->load->view('admin/so_sistem', $ambildata);
    }else{ 
      echo "Access Denied";
    }
  }
  /** Stok Outlet */

}