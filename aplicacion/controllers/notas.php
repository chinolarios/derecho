<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed';

	class Notas extends CI_Controller {

		public function __construct(){

			parent:: __construct();

		}
		/* Funciones  */

		public function __construct(){

		}

		public function notas(){

			$this->load->view('home');
		
		}

		public function videos(){

			$this->load->view('home');
		
		}

		public function eventos(){

			$this->load->view('home');
		
		}

	}