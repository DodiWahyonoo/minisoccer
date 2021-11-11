<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_frontend');
	}
	public function index()
	{
		$data['galeri']  = $this->M_frontend->tampil_galeri();
		$data['artikel'] = $this->M_frontend->tampil_artikel();
		$data['hasil'] = $this->M_frontend->tampil_hasil();
		$data['jadwal'] = $this->M_frontend->jadwal_limit();
		$this->load->view('frontend/header');
		$this->load->view('frontend/index',$data);
		$this->load->view('frontend/footer');
	}
	public function aturan()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/aturan');
		$this->load->view('frontend/footer');	
	}
	public function harga()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/harga');
		$this->load->view('frontend/footer');
	}
	public function jadwal()
	{
		$data['jadwal'] = $this->M_frontend->boking();
		$this->load->view('frontend/header');
		$this->load->view('frontend/jadwal',$data);
		$this->load->view('frontend/footer');
	}
	public function artikel()
	{
		$data['artikel'] = $this->M_frontend->artikel();
		$data['lateartikel'] = $this->M_frontend->lateartikel();
		$this->load->view('frontend/header');
		$this->load->view('frontend/artikel',$data);
		$this->load->view('frontend/footer');
	}
	public function baca_artikel()
	{
		$id = $this->uri->segment(3);
		$data['artikel'] = $this->M_frontend->baca_artikel($id);
		$data['lateartikel'] = $this->M_frontend->lateartikel();
		$this->load->view('frontend/header');
		$this->load->view('frontend/view_artikel',$data);
		$this->load->view('frontend/footer');
	}
}
