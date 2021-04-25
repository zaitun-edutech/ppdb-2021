<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Progress extends CI_Controller {

	public function index()
	{
		$this->load->view('warnings/in-progress');
	}

}
