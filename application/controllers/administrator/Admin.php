<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Datatables');
		$this->load->model('M_admin');
	}
	
	public function index()
	{
		$this->load->view('backend/header');
		$this->load->view('backend/dashboard');
		$this->load->view('backend/footer');
	}
	public function tampil()
	{
		echo $this->M_admin->tampil_admin();
	}
	public function tampil_admin()
	{
		$this->load->view('backend/header');
		$this->load->view('admin/v_admin');
		$this->load->view('admin/v_modal');
		$this->load->view('backend/footer');
		$this->load->view('admin/v_script');
	}
	public function tambah()
	{
		$nama 	  = $this->input->post('nama');
		$email 	  = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			'name'=> $nama,
			'email' => $email,
			'password' =>$password
		);
		$this->db->insert('tb_admin', $data);
	}
	public function hapus()
	{
		$id = $this->input->post('id');
 		$this->db->where('id', $id);
 		$this->db->delete('tb_admin');
	}
	public function get()
	{
		$id = $this->input->post('id');
        $this->db->where('id', $id);
        $query = $this->db->get('tb_admin')->result();
        echo json_encode($query);
	}
	public function update()
	{
		$id 	  = $this->input->post('id');

		$nama 	  = $this->input->post('update-nama');
		$email 	  = $this->input->post('update-email');
		$password = $this->input->post('update-password');

		if ($password == "") {
 			$password = $this->input->post('password_lama');
 		}else{
 			$password = $this->input->post('update-password');
 		}

		$data = array(
			'name'=> $nama,
			'email' => $email,
			'password' =>$password
		);
		$this->db->where('id', $id);
		$this->db->update('tb_admin', $data);
	}
}
