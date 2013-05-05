<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){

		parent:: __construct();
		$this->load->helper ('form');

		$this->load->helper ('form_validation');
	}

	public function Login(){

		
	}
	
}