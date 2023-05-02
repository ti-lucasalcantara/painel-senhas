<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guiche extends CI_Controller {

	public function index()
	{
		$this->load->view('fixo/cabecalho');
		$this->load->view('guiche');
		$this->load->view('fixo/rodape');
	}
}
