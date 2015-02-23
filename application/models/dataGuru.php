<?php 
	class DataGuru Extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function tambah()
		{
			$data = array(
				'nip' => $this->input->post('nip'),
				'nama'=>$this->input->post('nama'),
				'alamat'=>$this->input->post('alamat'),
				'golongan'=>$this->input->post('golongan'),
				'status'=>$this->input->post('status'),
				'tahun_masuk'=>$this->input->post('tahunMasuk'),
			);
			$this->db->insert('guru',$data);
		}
		function hapus($nip)
		{
			$this->db->where('nip',$nip);
			$this->db->delete('guru');
		}
		function get_edit($nip);
		{
			$this->db->where('nip',$nip);
			$this->db->get('guru');
		}
		function update($nip)
		{
			$nip=$this->input->post('nip');
			$data = array(
				'nip' => $this->input->post('nip'),
				'nama'=>$this->input->post('nama'),
				'alamat'=>$this->input->post('alamat'),
				'golongan'=>$this->input->post('golongan'),
				'status'=>$this->input->post('status'),
				'tahun_masuk'=>$this->input->post('tahunMasuk'),
			);
			$this->db->where('nip',,$nip);
			$this->db->update('guru');
		}
	}