<?php
	class Proses extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library('input');
		}
		public function index()
		{
			$nama=$this->input->post('nama');
			echo $nama;
		}
	}