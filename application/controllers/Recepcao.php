<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recepcao extends CI_Controller
{
	public function index()
	{
        $this->load->view('fixo/cabecalho');
		$this->load->view('recepcao');
		$this->load->view('fixo/rodape');
	}

}


