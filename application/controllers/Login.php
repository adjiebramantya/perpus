<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function proses_login()
	{
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$this->m_login->proses_login($user,$pass);

	}
}
