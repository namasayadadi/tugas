<?php
  class Login extends CI_Controller{
    public function index(){
      $data['content'] = 'login/login_view';
      $this->load->view("login/login_view",$data);
    }
    public function cek_login(){
      // if(isset($_POST['login'])){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $cek = $this->login_model->proseslogin($username,$password);
        $hasil = count($cek);
        if ($hasil > 0) {
          $login = $this->db->get_where('user',['user_username'=>$username,'user_password'=>$password])->row();
          $data = array(
            'nama'=>$login->user_username,
            'level'=>$login->user_level
          );
          $this->session->set_userdata($data);

          if ($login->user_level=='admin') {
              redirect('admin');
          }else if ($login->user_level=='siswa'){
            redirect('dashboard');
          }
        }
        else{
          echo "<script>alert('gagal login');window.location='".base_url('login')."';</script>";
        }
      // }
    }
    public function beranda(){

      $data['content'] = "dashboard/dashboard_view";
      $this->load->view("dashboard/nav",$data);
    }
    public function logout()
    {
      $this->session->sess_destroy();
      redirect('login');
    }
  }

 ?>
