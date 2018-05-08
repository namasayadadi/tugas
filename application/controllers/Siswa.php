<?php
  class Siswa extends CI_Controller{
    function __construct(){
      parent:: __construct();
      $this->load->model("Siswa_model");
    }
    public function index(){
      $this->load->helper('form');
      $data['query']=$this->Siswa_model->getAllData();
      $data['content'] = 'admin/data_siswa/data_siswa';
      $this->load->view("admin/admin_template_view",$data);
    }
    public function tambah(){
      $data['content'] = 'admin/data_siswa/data_siswa_tambah';
      $this->load->view('admin/admin_template_view',$data);
    }

    public function tambah_proses(){
      $nis = $this->input->post("nis");
      $nisn = $this->input->post("nisn");
      $nama = $this->input->post("nama");
      $jk = $this->input->post("jenis_kelamin");
      $alamat = $this->input->post("alamat");
      $tmp_lahir = $this->input->post("tmp_lahir");
      $tgl_lahir = $this->input->post("tgl_lahir");

      $data = array(
        "siswa_nis" => $nis,
        "siswa_nisn" => $nisn,
        "siswa_nama" => $nama,
        "siswa_jk" => $jk,
        "siswa_alamat" => $alamat,
        "siswa_tmp_lahir" => $tmp_lahir,
        "siswa_tgl_lahir" => $tgl_lahir,
        "siswa_entri" => date("y-m-d t(:i:s)")
      );

      $insert = $this->db->insert("siswa",$data);
      if($insert){
        echo "
          <script>
            alert('data berhasil di simpan');
            window.location = '".base_url('siswa')."';
          </script>
        ";
      }
      else{
        echo "
          <script>
            alert('data gagal di simpan');
            window.location = '".base_url('siswa/tambah')."';
          </script>
        ";
      }
    }
    public function edit($id){
      $data['edit'] = $this->db->get_where('siswa',['siswa_id'=>$id])->row();
      $data['content'] = 'admin/data_siswa/data_siswa_edit';
      $this->load->view("admin/admin_template_view",$data);
    }
    public function update(){
      $id = $this->input->post("id");
      $nis = $this->input->post("nis");
      $nisn = $this->input->post("nisn");
      $nama = $this->input->post("nama");
      $jk = $this->input->post("jenis_kelamin");
      $alamat = $this->input->post("alamat");
      $tmp_lahir = $this->input->post("tmp_lahir");
      $tgl_lahir = $this->input->post("tgl_lahir");

      $data = array(
        "siswa_nis" => $nis,
        "siswa_nisn" => $nisn,
        "siswa_nama" => $nama,
        "siswa_jk" => $jk,
        "siswa_alamat" => $alamat,
        "siswa_tmp_lahir" => $tmp_lahir,
        "siswa_tgl_lahir" => $tgl_lahir,
        "siswa_entri" => date("y-m-d t(:i:s)")
      );
      $this->db->where('siswa_id',$id);
      $insert = $this->db->update("siswa",$data);
      if($insert){
        echo "
          <script>
            alert('data berhasil di simpan');
            window.location = '".base_url('siswa')."';
          </script>
        ";
      }
      else{
        echo "
          <script>
            alert('data gagal di simpan');
            window.location = '".base_url('siswa/edit')."';
          </script>
        ";
      }
    }
    public function hapus($id){
      $this->db->delete('siswa',['siswa_id'=>$id]);
      redirect('siswa');
    }


  }

 ?>
