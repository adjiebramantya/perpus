<?php

class Penerbit Extends CI_Controller{

  public function __construct()
   {
       parent:: __construct();
      $this->load->model('m_penerbit');
   }

  public function index()
  {
    $isi['content'] = 'penerbit/v_penerbit';
    $isi['judul']   = 'Daftar Data Penerbit';
    $isi['data']    = $this->db->get('penerbit')->result();
    $this->load->view('v_dashboard',$isi);
  }

  public function tambah_penerbit()
  {
    $isi['content']     = 'penerbit/form_penerbit';
    $isi['judul']       = 'Form Tambah Penerbit';
    $this->load->view('v_dashboard',$isi);
  }

  public function simpan()
  {
      $data['nama_penerbit'] = $this->input->post('nama_penerbit');

      $query = $this->db->insert('penerbit',$data);

      if ($query = true) {
        $this->session->set_flashdata('info','Data Berhasil di Simpan');
        redirect('penerbit');
      }else{
        $this->session->set_flashdata('info','Data Gagal di Simpan');
        redirect('penerbit/tambah_penerbit');
      }
  }

  public function edit($id)
  {
    $isi['content']     = 'penerbit/edit_penerbit';
    $isi['judul']       = 'Form Edit Penerbit';
    $isi['data']        = $this->m_penerbit->edit($id);
    $this->load->view('v_dashboard',$isi);
  }

  public function update()
  {
    $id_penerbit = $this->input->post('id_penerbit');
    $data = array(
      'id_penerbit'     =>  $this->input->post('id_penerbit'),
      'nama_penerbit'   =>  $this->input->post('nama_penerbit')
    );

    $query = $this->m_penerbit->update($id_penerbit,$data);
    if ($query = true) {
      $this->session->set_flashdata('info','Data Berhasil di Update');
      redirect('penerbit');
    }else{
      $this->session->set_flashdata('info','Data Gagal di Update');
      redirect('penerbit');
    }
  }

  public function hapus($id)
  {
    $query = $this->m_penerbit->hapus($id);
    if ($query = true) {
      $this->session->set_flashdata('info','Data Berhasil dihapus');
      redirect('penerbit');
    }else{
      $this->session->set_flashdata('info','Data Gagal dihapus');
      redirect('penerbit');
    }

  }
}
