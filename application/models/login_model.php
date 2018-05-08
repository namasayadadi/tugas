<?php
  class Login_model extends CI_Model{
    public function proseslogin($username,$password){
      $this->db->where('user_username',$username);
      $this->db->where('user_password',$password);
      return $this->db->get('user')->row();
    }
  }
?>
