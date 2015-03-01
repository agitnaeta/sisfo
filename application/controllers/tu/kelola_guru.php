<?php 
session_start();
	class Kelola_guru extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			if (!empty($this->session->userdata('tu'))) {
				$this->load->model('dataGuru');
			}
		}
		public function index()
		{
			$this->load->view('head');
			$this->load->view('tu/navigasi');
			$data['guru']=$this->dataGuru->allGuru();
			$this->load->view("tu/kelola_guru",$data);
		}
	}