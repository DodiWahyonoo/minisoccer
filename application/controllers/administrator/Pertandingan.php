<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertandingan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Datatables');
		$this->load->model('M_pertandingan');
	}

	public function index()
	{
		$data['jadwal'] = $this->M_pertandingan->boking();
		$this->load->view('backend/header');
		$this->load->view('jadwal/v_jadwal',$data);
		$this->load->view('backend/footer');
		$this->load->view('jadwal/v_script');
	}
	public function tambah()
	{
		$this->load->view('backend/header');
		$this->load->view('jadwal/v_tambah_jadwal');
		$this->load->view('backend/footer');
	}
	public function tampil()
	{
		echo $this->M_pertandingan->tampil();
	}
	public function delete()
	{
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete('tb_jadwal');
	}
	public function update()
	{
		$id = $this->input->post('id');
		$hari = $this->input->post('hari');
		$value = $this->input->post('value');

		$this->M_pertandingan->update($id,$hari,$value);
	}
	public function refresh()
	{
		$booking = $this->M_pertandingan->boking();
		foreach ($booking as $key => $value) {
			$data = [
				'senin'=>'',
				'selasa' =>'',
				'rabu' =>'',
				'kamis'=>'',
				'jumat'=>'',
				'sabtu'=>'',
				'minggu'=>''
			];
			$this->db->where('id', $value->id);
			$this->db->update('tb_booking', $data);
		}
	}
}
