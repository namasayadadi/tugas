<?php
  class Admin extends CI_Controller{
    public function index(){
      if($this->session->userdata('level')!='admin'){
        redirect('login');
      }

      $this->load->helper('form');
      $data['content'] = 'admin/admin_home_view';
      $this->load->view("admin/admin_template_view",$data);
    }
  }

 ?>
