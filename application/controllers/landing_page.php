<?php
	class Landing_page extends CI_controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$data['laman']="";
			$this->load->view('landing_page');
		}
		public function siswa()
		{
			$data['laman']="Login Siswa";
			$this->load->view('login_siswa');
		}
	}