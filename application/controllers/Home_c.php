<?php

class Home_c extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Home_m');
		
	}

	public function index(){

		$pasien = $this->Home_m->getPasien();
		$data['pasien'] = $pasien;

		$this->load->view('parts/header', $data);
		$this->load->view('admin/home', $data);
		$this->load->view('parts/footer', $data);
		
	}
}