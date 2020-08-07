<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    //menjalankan model login, untuk menampilkan database
    $this->load->model('login_model');
  }

  //ketika sistem di akses akan menampilkan tampilan view login
  function index(){
    if($this->session->userdata('logged_in_olikuapp') !== TRUE){ //jika gagal login
      $this->load->view('login_view');
    }else{ //jika berhasil login
      redirect('dashboard');
    }
  }

  //ketika melakukan login akan dicek
  function auth(){
    $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    // $password = password_hash($this->input->post('password',TRUE), PASSWORD_BCRYPT);
    $validate = $this->login_model->validate($email,$password);
    if($validate->num_rows() > 0){

      $data  = $validate->row_array();

      $nama_olikuapp = $data['nama'];
      $jabatan_olikuapp = $data['jabatan'];
      $user_name_olikuapp = $data['user_name'];
      $user_email_olikuapp = $data['user_email'];
      $user_level_olikuapp = $data['user_level'];
      $no_telepon_olikuapp = $data['no_telepon'];
      $no_karyawan_olikuapp = $data['no_karyawan'];

      $sesdata = array(
        'nama_olikuapp'         => $nama_olikuapp,
        'jabatan_olikuapp'      => $jabatan_olikuapp,
        'user_name_olikuapp'    => $user_name_olikuapp,
        'user_email_olikuapp'   => $user_email_olikuapp,
        'user_level_olikuapp'   => $user_level_olikuapp,
        'no_telepon_olikuapp'   => $no_telepon_olikuapp,
        'no_karyawan_olikuapp'  => $no_karyawan_olikuapp,
        'logged_in_olikuapp'    => TRUE
      );
      $this->session->set_userdata($sesdata);
      redirect('dashboard');
    }else{ //jika user pass salah maka akan muncul notif
      echo $this->session->set_flashdata('msg','message');
      redirect('login');
    }
  }

  //funcsi untuk logout ketika klik link logout
  function logout(){
    $this->session->sess_destroy();
    redirect('/');
  }

}