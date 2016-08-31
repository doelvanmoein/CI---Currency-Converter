<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->library('ciqrcode');
		/* On the fly generate*/
		//header("Content-Type: image/png");
		//$params['data'] = 'This is a text to encode become QR Code';
		//$params['data'] = 'Manchester United';
		//$qrcode = $this->ciqrcode->generate($params);
		
		/* saved qr code image */
		$dir = "QRCode/"; 
		$qr_name = "simuin.png";
		$params['data'] = 'This is a text to encode become QR Code';
		$params['level']= 'H';
		$params['size'] = 10;
		//$params['savename'] = FCPATH.'tes.png';
		$params['savename'] = $dir.$qr_name;
		$this->ciqrcode->generate($params);
		
		//echo '<img src="'.base_url().'tes.png" />';

		$this->load->view('welcome_message', array('qr'=>$qr_name));
	}
}