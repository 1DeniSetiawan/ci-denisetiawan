<?php

class Bingung extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Template Codeigniter';
		$data['footer'] = '<em>Deni Setiawan Punya</em>';

		$this->load->view('kepala', $data);
		$this->load->view('badan');
		$this->load->view('kaki', $data);
	}
}