<?php

class M_secure Extends CI_model{

  public function getSecure()
  {
    $username = $this->session->userdata('username');
    if (empty($username)) {
      $this->session->sess_destroy();
      redirect('login');
    }
  }
}
