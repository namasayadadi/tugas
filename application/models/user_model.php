<?php
  class User_model extends CI_Model{
    function getAllData(){
      $this->db->order_by("user_nama","ASC");
      $query = $this->db->get("user");
      return $query;
    }
  }
?>
