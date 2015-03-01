<?php
session_start();
	class Beranda extends CI_Controller
	{
		public function __construct()
		{
			parent:: __construct();
			if ($this->session->userdata('tu')) 
			{
				$this->load->model('dataSiswa');
			}
			else
			{
				redirect ('landing_page');
			}	
		}
		public function index()
		{
			$data['siswa']=$this->dataSiswa->tampil();
			$this->load->view('head');
			$this->load->view('tu/beranda',$data);	
		}
	}