<?php
class Absen extends CI_Controller{
  function __construct(){
    parent:: __construct();
    $this->load->model("Siswa_model");
  }
  public function index(){
    $this->load->helper('form');
    $data['query']=$this->Siswa_model->getAllData();
    $data['content'] = 'admin/data_absen/data_absen';
    $this->load->view("admin/admin_template_view",$data);
  }
}

 ?>
