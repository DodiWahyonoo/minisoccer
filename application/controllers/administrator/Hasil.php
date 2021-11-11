<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {

	public function index()
	{
		$this->load->view('backend/header');
		$this->load->view('hasil/v_hasil');
		$this->load->view('backend/footer');
		$this->load->view('hasil/v_script');
	}
	public function tambah()
	{
		
	}
}
