<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Datatables');
		$this->load->model('M_artikel');
	}

	public function index()
	{
		$this->load->view('backend/header');
		$this->load->view('artikel/v_artikel');
		$this->load->view('backend/footer');
		$this->load->view('artikel/v_script');
	}
	public function tampil_artikel()
	{
		echo $this->M_artikel->tampil_artikel();
	}
	public function tambah()
	{
		$this->load->view('backend/header');
		$this->load->view('artikel/v_tambah_artikel');
		$this->load->view('backend/footer');
		$this->load->view('artikel/v_script');
	}
	public function delete()
	{
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete('tb_article');
	}
	public function proses_tambah()
	{
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$date = date("Y-m-d");

		$config['upload_path']		= './assets/images/thumbnail/';
		$config['allowed_types']	= 'gif|jpg|jpeg|png';
		$config['max_width']		=5024;
		$config['max_height']		=5000;
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$this->upload->do_upload('file');
		$data_image=$this->upload->data('file_name');
		$location=base_url().'assets/images/thumbnail/';
		$pict=$location.$data_image;

		$data = array(
			'date' => $date,
			'title' => $title,
			'thumbnail' => $pict,
			'content' => $content,
			'id_admin'=> 2,
		);
		$this->db->insert('tb_article', $data);
		redirect('administrator/artikel','refresh');
	}
	public function edit($id)
	{
		$data['artikel'] = $this->db->get_where('tb_article',['id'=>$id])->row_array();
		$this->load->view('backend/header');
		$this->load->view('artikel/v_edit_artikel',$data);
		$this->load->view('backend/footer');
	}
	public function proses_update()
	{
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$id 	= $this->input->post('id');

		$gambar_lama = $this->input->post('poto_lama');

        $config['upload_path'] = './assets/images/thumbnail/';
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
		$location=base_url().'assets/images/thumbnail/';
		$gambar=$location.$data_image;
        }
        $data = array(
			'title' => $title,
			'thumbnail' => $gambar,
			'content' => $content,
			'id_admin' => 2,
		);
		$this->db->where('id', $id);
		$this->db->update('tb_article', $data);
		redirect('administrator/artikel');
	}
}