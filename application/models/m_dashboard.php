<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function countAnggota()
  {
    return $this->db->count_all('anggota');
  }

  public function countBuku()
  {
    return $this->db->count_all('buku');
  }

  public function countPinjam()
  {
    return $this->db->count_all('peminjaman');
  }

  public function countKembali()
  {
    return $this->db->count_all('pengembalian');
  }

}
