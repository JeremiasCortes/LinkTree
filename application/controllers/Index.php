<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Links');
		$data['enlaces'] = $this -> Links -> getAll();
		$this->load->view('guionEnlaces', $data);
	}
}
