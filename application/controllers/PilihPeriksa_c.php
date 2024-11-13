<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PilihPeriksa_c extends CI_Controller {

	public function index()
	{
		$this->load->view('parts/header');
		$this->load->view('admin/pilih_pemeriksaan');
		// $this->load->view('parts/footer');
	}

	public function filter_periksa()
	{	

		$periksaA = $this->input->post('periksa1');
		$periksaB = $this->input->post('periksa2');
		$periksaC = $this->input->post('periksa3');
		$periksaD = $this->input->post('periksa4');

		$dataFilter = array(
			'periksa1' => $periksaA,
			'periksa2' => $periksaB,
			'periksa3' => $periksaC,
			'periksa4' => $periksaD
		);

		if ($periksaA == null | $periksaB == null | $periksaC == null | $periksaD == null) {
			$dataFilter['periksa1'] = $periksaA;
			$dataFilter['periksa2'] = $periksaB;
			$dataFilter['periksa3'] = $periksaC;
			$dataFilter['periksa4'] = $periksaD;
			// redirect('pilihperiksa_c/index','refresh');

			// if ($dataFilter['periksa1'] == NULL | $dataFilter['periksa2'] == NULL | $dataFilter['periksa3'] == NULL | $dataFilter['periksa4'] == NULL ) {
			// 	redirect('pilihperiksa_c/index','refresh');
			// }
			// elseif ($dataFilter['periksa1'] == NULL | $dataFilter['periksa2'] == NULL | $dataFilter['periksa3'] == NULL | $dataFilter['periksa4'] == NULL ) {
			// 	$this->load->view('parts/header');
			// 	$this->load->view('admin/periksaA');
			// }

			if ($periksaA != NULL | $periksaB != NULL | $periksaC != NULL | $periksaD != NULL) {
				$this->load->view('parts/header');
				$this->load->view('admin/periksaABCD',);
			}
			elseif ($periksaA != NULL | $periksaB != NULL | $periksaC != NULL | $periksaD == NULL) {
				$this->load->view('parts/header');
				$this->load->view('admin/periksaABC',);
			}
			// elseif ($periksaA != NULL && $periksaB != NULL && $periksaC == NULL && $periksaD == NULL) {
			// 	$this->load->view('parts/header');
			// 	$this->load->view('admin/periksaAB',);
			// }
			// elseif ($periksaA != NULL && $periksaB == NULL && $periksaC != NULL && $periksaD == NULL) {
			// 	$this->load->view('parts/header');
			// 	$this->load->view('admin/periksaAC',);
			// }
			elseif($periksaA == NULL && $periksaB == NULL && $periksaC == NULL && $periksaD == NULL){
				redirect('pilihperiksa_c/index','refresh');
			}
		}
		else{
			redirect('home_c/index','refresh');
		}
	}

}	
