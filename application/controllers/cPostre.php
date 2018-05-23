<?php

class Cpostre extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('mPostre');
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('postre/vPostre');
		$this->load->view('layout/footer');
	}

	public function saveDessert(){
		$param['nombre'] = $this->input->post('name');
		$param['precio'] = $this->input->post('price');
		$param['cantidad'] = $this->input->post('quant');

		$this->mPostre->saveDessert($param);
	}
}