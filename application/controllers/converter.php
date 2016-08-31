<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Converter extends CI_Controller {

	public function index(){
		$query = $this->db->query("SELECT * FROM kurs");

		$this->load->view('header');
		$this->load->view('_converter', compact('query'));
		$this->load->view('footer');
	}

	public function doConvert(){
		$idr 	= $this->input->post('idr');
		$kurs 	= $this->input->post('convert_to');
		$result = $idr/$kurs;
		$format = number_format($result, 2, '.', '');
		echo json_encode(array('result'=>$format)); 
	}
}