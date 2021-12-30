<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Pengembalian extends CI_Controller{

    public function __construct()
    {
      parent::__construct();
      //Codeigniter : Write Less Do More
    }

    public function index()
    {
      $isi['content']   = 'pengembalian/v_pengembalian';
      $isi['judul']     = 'Data Pengembalian';
      $this->load->model('m_pengembalian');
      $isi['data']      = $this->m_pengembalian->getAlldata();
      $this->load->view('v_dashboard', $isi);
    }

  }
 ?>
