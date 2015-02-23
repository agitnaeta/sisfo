<?php
	class Kelola_Siswa extends CI_controller
	{
		public function __construct()
		{
			parent :: __construct();
			$this->load->model('dataSiswa');
		}
		public function index()
		{
			$this->load->view('head');
			$data['siswa']=$this->dataSiswa->tampil();
			$this->load->view('tu/beranda',$data);
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
			redirect('tu/kelola_siswa','refresh'); 
		}
		public function hapus_siswa($nis)
		{

			$this->dataSiswa->hapus($nis);
			redirect('tu/kelola_siswa','refresh');
			$this->session->set_flashdata('flashdata', " 
            <p class='alert alert-success text-center'>
            <i class='glyphicon glyphicon-ok'></i> Data $nama Berhasil Disimpan 
            <a class='btn btn-succes btn-sm' href='kelola_user'>
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