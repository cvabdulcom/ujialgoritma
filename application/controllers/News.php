<?php
class News extends CI_Controller{
  function __construct(){
    parent::__construct();
    /** MENGAKSES MODEL HARGA */
    $this->load->model('news_model');
  }

  // ################################################ DASHBOARD SESION [1] ##########################################
  function Index(){
    $ambildata['news'] = $this->news_model->show_news();
    $this->load->view('sales/news', $ambildata);
  }

  function Tarik_news(){
    $id_informasi = $this->input->get('id_informasi');
    $data  = $this->news_model->get_news($id_informasi);
    echo json_encode($data);
  }

}