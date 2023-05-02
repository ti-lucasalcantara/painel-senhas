<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tv extends CI_Controller {

	public function index()
	{
		$this->load->view('fixo/cabecalho');
		$this->load->view('tv');
		$this->load->view('fixo/rodape');
	}
}
