<?php
	class Beranda Extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library('input');
		
		}
		public function index()
		{
			$this->load->view('head');
			$this->load->view('guru/beranda');
		}
	}