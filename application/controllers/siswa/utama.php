<?php
session_start();
	class Utama Extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}

		function index()
		{
		   if($this->session->userdata('siswa'))
		   {
			$session_data=$this->session->userdata('siswa');  
	        $data['nama']=$session_data['nama'];  
	        $data['menu']="Halaman Utama"; 
	        $this->load->view('head');
		   	$this->load->view('siswa/utama',$data);
		   }
		   else 
		   {
		      $this->load->helper(array('form'));
		      $this->load->view('landing_page');
		   }
		}

		public function tabel_pelajaran()
		{
			$session_data=$this->session->userdata('siswa');  
	        $data['nama']=$session_data['nama'];	          
	        $this->load->view('head');
		   	$this->load->view('siswa/tabel_pelajaran',$data);
		}
		public function daftar_nilai()
		{
			$session_data=$this->session->userdata('siswa');  
	        $data['nama']=$session_data['nama'];	          
	        $this->load->view('head');
		   	$this->load->view('siswa/daftar_nilai',$data);
		}
		public function daftar_remedial()
		{
			$session_data=$this->session->userdata('siswa');  
	        $data['nama']=$session_data['nama'];	           
	        $this->load->view('head');
		   	$this->load->view('siswa/daftar_remedial',$data);
		}
		public function daftar_tugas()
		{
			$session_data=$this->session->userdata('siswa');  
	        $data['nama']=$session_data['nama'];
	        $data['menu']="Daftar Pelajaran";    
	        $this->load->view('head');
		   	$this->load->view('siswa/daftar_tugas',$data);
		}
		public function download_materi()
		{
			$session_data=$this->session->userdata('siswa');  
	        $data['nama']=$session_data['nama'];
	        $data['menu']="Daftar Pelajaran";    
	        $this->load->view('head');
		   	$this->load->view('siswa/download_materi',$data);
		}

	}