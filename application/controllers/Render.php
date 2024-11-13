<?php

class Render extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		/*$this->load->model('Home_m');*/
		$this->load->library('Ciqrcode');
		
	}

	public function indexx(){

		$data['title'] = "Coba QRCode";
		$this->load->view('render', $data);
	}

	public function index($kodenya = 'https://online.fliphtml5.com/vrfzg/bmdj/')
	{
		//render QRCode dengan format gambar PNG 
		QRcode::png(
			$kodenya,
			$outfile = false,
			$level = QR_ECLEVEL_H,
			$size = 10,
			$margin = 2
		);
	}
}
