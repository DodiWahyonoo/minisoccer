<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_frontend extends CI_Model {

	public function tampil_galeri()
	{
		$data =	$this->db->get('tb_galeri');
		return $data->result();
	}
	public function tampil_artikel()
	{
		$this->db->select('tb_article.*,tb_admin.name');
		$this->db->join('tb_admin', 'tb_admin.id = tb_article.id_admin', 'left');
		$this->db->order_by('tb_article.id', 'desc');
		$this->db->limit(3);
		$data = $this->db->get('tb_article');
		return $data->result();
	}
	public function artikel()
	{
		$this->db->select('tb_article.*,tb_admin.name');
		$this->db->join('tb_admin', 'tb_admin.id = tb_article.id_admin', 'left');
		$this->db->order_by('tb_article.id', 'desc');
		$data = $this->db->get('tb_article');
		return $data->result();
	}
	public function lateartikel()
	{
		$this->db->select('tb_article.*,tb_admin.name');
		$this->db->join('tb_admin', 'tb_admin.id = tb_article.id_admin', 'left');
		$this->db->order_by('tb_article.id', 'asc');
		$data = $this->db->get('tb_article');
		return $data->result();
	}
	public function jadwal()
	{
		$data =	$this->db->get('tb_jadwal');
		return $data->result();
	}
	public function jadwal_limit()
	{
		$this->db->order_by('id', 'desc');
		$this->db->limit(1);
		$data =	$this->db->get('tb_jadwal');
		return $data->result();
	}
	public function tampil_hasil()
	{
		$data =	$this->db->get('tb_hasil_pertandingan');
		return $data->result();
	}
	public function baca_artikel($id)
	{
		$this->db->where('id', $id);
		$data = $this->db->get('tb_article');
		return $data->result();
	}
	public function boking()
	{
		$this->db->order_by('id', 'asc');
		$data = $this->db->get('tb_booking');
		return $data->result();
	}
}