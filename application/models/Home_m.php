<?php

class Home_m extends CI_Model
{
	private $table = 'tb_pasien';

	public function getPasien(){
		return $this->db->get('tb_pasien');
	}
}