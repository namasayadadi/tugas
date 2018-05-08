<?php
  class Siswa_model extends CI_Model{
    function getAllData(){
      $this->db->order_by("siswa_nama","ASC");
      $query = $this->db->get("siswa");
      return $query;
    }
  }
?>
