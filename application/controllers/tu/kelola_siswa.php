<?php
	class Kelola_Siswa extends CI_controller
	{
		public function __construct()
		{
			parent:: __construct();
			if ($this->session->userdata('tu')) 
			{
				$this->load->model('dataSiswa');
				$this->load->library('pagination');
			}
			else
			{
				redirect ('landing_page');
			}		
		}
		public function index()
		{
			$this->load->view('head');
			$this->load->view('tu/navigasi');
			$data['siswa']=$this->dataSiswa->tampil();
	        $this->load->view('tu/kelola_siswa',$data);	       
			
		}
		public function form_tambah()
		{
			$this->load->view('head');
			$data['siswa']=$this->dataSiswa->max();
			$this->load->view('tu/form_siswa',$data);
		}

		public function tambah_siswa()
		{
			$this->dataSiswa->tambah();
			$this->session->set_flashdata('flashdata', " 
            <p id='hide' class='alert alert-success text-center'>
            <i class='glyphicon glyphicon-ok'></i> Data Berhasil Disimpan 
            <a class='btn btn-succes btn-sm' id='hide'>
            <i class='glyphicon glyphicon-remove'></i></a>
            </p>");

            redirect('tu/kelola_siswa','refresh'); 
		}
		public function hapus_siswa($nis)
		{

			$this->dataSiswa->hapus($nis);
			redirect('tu/kelola_siswa','refresh');
			$this->session->set_flashdata('flashdata', " 
            <p id='hide' class='alert alert-danger text-center'>
            <i class='glyphicon glyphicon-ok'></i> Data Berhasil Dihapus !
            <a class='btn btn-succes btn-sm' id='hide'>
            <i class='glyphicon glyphicon-remove'></i></a>
            </p>");
            redirect('tu/kelola_siswa','refresh'); 
		}
		public function get_edit($nis)
		{
            $this->load->view('head');
			$data['siswa']=$this->dataSiswa->getEdit($nis);
			$this->load->view('tu/form_update_siswa',$data);
		}
		public function update_siswa($kode)
		{

			$kode=$this->input->post('kode');
			$this->dataSiswa->update($kode);
		}
		public function cari()
		{
			$cari=$this->input->post('cari');
			$data['siswa']=$this->dataSiswa->cari($cari);
			$this->load->view('tu/kelola_user',$data);
		}
	}