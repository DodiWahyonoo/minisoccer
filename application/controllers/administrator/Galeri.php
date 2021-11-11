<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Datatables');
		$this->load->model('M_galeri');
	}

	public function index()
	{
		$this->load->view('backend/header');
		$this->load->view('galeri/v_galeri');
		$this->load->view('galeri/v_modal');
		$this->load->view('backend/footer');
		$this->load->view('galeri/v_script');
	}
	public function tampil_galeri()
	{
		 echo $this->M_galeri->tampil_galeri();
	}
	public function tambah()
	{
		$config['upload_path']		= './assets/images/galeri/';
		$config['allowed_types']	= 'gif|jpg|jpeg|png';
		$config['max_width']		=5024;
		$config['max_height']		=5000;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$this->upload->do_upload('file');
		$data_image=$this->upload->data('file_name');
		$location=base_url().'assets/images/galeri/';
		$pict=$location.$data_image;

		$data = array(
			'image' => $pict,
		);
		$query = $this->db->insert('tb_galeri', $data);
	}
	public function get()
	{
		$id = $this->input->post('id');
        $this->db->where('id', $id);
        $query = $this->db->get('tb_galeri')->result();
        echo json_encode($query);
	}
	public function update()
	{
		$id = $this->input->post('id');
		$gambar_lama = $this->input->post('poto_lama');

        $config['upload_path'] = './assets/images/galeri/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_width']  = '10204';
        $config['max_height']  = '7608';
        $config['encrypt_name'] = true;
        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($_FILES['file']['error'] === 4) {
            $gambar = $gambar_lama;
        }else{
        $this->upload->do_upload('file');
		$data_image=$this->upload->data('file_name');
		$location=base_url().'assets/images/galeri/';
		$gambar=$location.$data_image;
        }

		$data = array(
			'image' => $gambar,
		);
		$this->db->where('id', $id);
		$this->db->update('tb_galeri', $data);
	}
	public function delete()
	{
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete('tb_galeri');
	}

}