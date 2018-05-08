<?php
class Dashboard extends CI_Controller{
  function __construct(){
    parent:: __construct();
    $this->load->model("Siswa_model");

    if($this->session->userdata('level')!='siswa'){
      redirect('login');
    }
  }
  public function index(){
    $data['query']=$this->Siswa_model->getAllData();
    $data['content'] = "dashboard/dashboard_view";
    $this->load->view("dashboard/nav",$data);
  }
  public function absen(){
    $nis=$this->input->post('nis');
    $data=array('siswa_status'=>'hadir');
    $this->db->where('siswa_nis',$nis);
    $this->db->update('siswa',$data);
    redirect('dashboard');
  }

}
?>
