<?php
	class DataSiswa extends CI_Model
	{
		public function __construct()
		{
			parent :: __construct();
		}
		public function tampil()
		{

			$query=$this->db->get('siswa');
			if ($query->num_rows>0) 
			{
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function max()
		{
			$query=$this->db->select("select max(substr(nis,5)) from siswa");
			if ($query->num_rows>0) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function tambah()
		{
			$data= array(
			'tahun_ajaran'=>$this->input->post('tajaran'),
			'nis'=>$this->input->post('nis'),
			'nisn'=>$this->input->post('nisn'),
			'tempat_lahir'=>$this->input->post('tlahir'),
			'tanggal_lahir'=>$this->input->post('tglahir'),
			'agama'=>$this->input->post('agama'),
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			 );
			$this->db->insert('siswa',$data);
			
		}
		public function hapus($nis)
		{
			$this->db->where('nis',$nis);
			$this->db->delete('siswa');
			
		}
		public function getedit($nis)
		{
			$this->db->where('nis',$nis);
			$query=$this->db->get('siswa');
			if ($query->num_rows>0) 
			{
				return $query;
			}
			else
			{
				return null;
			}
			
		}
		public function update($nis)
		{
			$data= array(
			'nis'=>$this->input->post('nis'),
			'nama'=>$this->input->post('tambah'),
			'alamat'=>$this->input->post('alamat'),
			 );
			$this->db->where('nis',$nis);
			$this->db->update('siswa',$data);

		}
		public function cari($cari)
		{
			$this->db->where('nama',$cari);
			$query=$this->db->get('siswa');
			if ($query) {
				return $query;
			}
			else
			{
				$this->session->flashdata('Tidak Ada Data');
			}
		}

	}