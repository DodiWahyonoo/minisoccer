<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function tampil_admin()
	{
		$this->datatables->select('id,name,email');
		$this->datatables->from("tb_admin");
		$this->db->order_by('id', 'desc');
    	$this->datatables->add_column('action', '
			<div class="dropdown">
			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    <i class= "fa-list-ul fa"></i>
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    <a href=""  class="text-dark dropdown-item update" data="$1"><i class="fa fa-lg fa-pencil-square-o pr-3"></i> Update</a>
				<a href=""  class="text-dark  dropdown-item delete" data="$1"><i class="fa fa-lg fa-trash-o pr-3"></i>  Delete</a>
			  </div>
			</div>','id');
		return $this->datatables->generate();
	}
}