<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class M_pengembalian extends CI_Model{

    public function __construct()
    {
      parent::__construct();
      //Codeigniter : Write Less Do More
    }

    public function getAlldata()
    {
      $this->db->select('*');
      $this->db->from('pengembalian');
      $this->db->join('anggota', 'pengembalian.id_anggota = anggota.id_anggota');
      $this->db->join('buku', 'pengembalian.id_buku = buku.id_buku');
      return $this->db->get()->result();
    }

  }
 ?>
