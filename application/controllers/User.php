<?php
class User extends CI_Controller{
  function __construct(){
    parent:: __construct();
    $this->load->model("User_model");
  }
  public function index(){

    $this->load->helper('form');
    $data['query']=$this->User_model->getAllData();
    $data['content'] = 'admin/data_user/data_user';
    $this->load->view("admin/admin_template_view",$data);
  }
  public function tambah(){
    $data['content'] = 'admin/data_user/data_user_tambah';
    $this->load->view('admin/admin_template_view',$data);
  }
  public function tambah_proses(){
    $pengguna = $this->input->post("nama_pengguna");
    $user_level = $this->input->post("user_level");
    $nama = $this->input->post("nama");
    $username = $this->input->post("username");
    $password = $this->input->post("password");

    $data = array(
      "user_nama" => $pengguna,
      "user_level" => $user_level,
      "user_username" => $username,
      "user_password" => $password,
    );

    $insert = $this->db->insert("user",$data);
    if($insert){
      echo "
        <script>
          alert('data berhasil di simpan');
          window.location = '".base_url('user')."';
        </script>
      ";
    }
    else{
      echo "
        <script>
          alert('data gagal di simpan');
          window.location = '".base_url('user/tambah')."';
        </script>
      ";
    }
  }
  public function edit($id){
    $data['edit'] = $this->db->get_where('user',['user_id'=>$id])->row();
    $data['content'] = 'admin/data_user/data_user_edit';
    $this->load->view("admin/admin_template_view",$data);
  }
  public function update(){
    $id = $this->input->post("id");
    $nama = $this->input->post("nama_pengguna");
    $user_level = $this->input->post("user_level");
    $username = $this->input->post("username");
    $password = $this->input->post("password");

    $data = array(
      "user_nama" => $nama,
      "user_username" => $username,
      "user_password" => $password,
      "user_level" => $user_level
    );
    $this->db->where('user_id',$id);
    $insert = $this->db->update("user",$data);
    if($insert){
      echo "
        <script>
          alert('data berhasil di simpan');
          window.location = '".base_url('user')."';
        </script>
      ";
    }
    else{
      echo "
        <script>
          alert('data gagal di simpan');
          window.location = '".base_url('user/edit')."';
        </script>
      ";
    }
  }
  public function hapus($id){
    $this->db->delete('user',['user_id'=>$id]);
    redirect('user');
  }


}

 ?>
