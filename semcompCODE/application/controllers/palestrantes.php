<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Palestrantes extends CI_Controller{
	
	function _construct(){
			parent::Controller();
			
	}
	
	public function index(){
				$this->load->helper('url');
		$this->load->helper('html');
		
		$this->load->view('include_basico');
		$this->load->view('header');
		$this->load->view('palestrantes');
		$this->load->view('patrocinios');
		$this->load->view('footer');
	}
}
?>
