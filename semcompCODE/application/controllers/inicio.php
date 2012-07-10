<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller{
	
	function _construct(){
			parent::Controller();
			
	}
	public function index(){
		$data['titulo_da_pagina'] = 'Semana de Computação UFBA';
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->view('include_home');
		$this->load->view('header');
		$this->load->view('inicio',$data);
		$this->load->view('patrocinios');
		$this->load->view('footer');
	}
}
?>
