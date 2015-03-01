<?php
	class Landing_page extends CI_controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			
			$this->load->view('landing_page');
		}
		public function facebook()
		{
			$this->load->view('facebook');
		}
		public function beranda()
		{
			$this->load->view('head');
			$this->load->view('beranda');
		}
	}