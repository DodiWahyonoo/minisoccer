<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pertandingan extends CI_Model {

	public function boking()
	{
		$this->db->order_by('id', 'asc');
		$data = $this->db->get('tb_booking');
		return $data->result();
	}
	public function update($id,$hari,$value)
	{
	$data=array($hari => $value);
    $this->db->where('id',$id);
    $this->db->update('tb_booking',$data);
	}
}