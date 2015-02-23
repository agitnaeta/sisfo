<?php
	class DataKelas extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function tambah()
		{
			$data = array(
				'kode' =>$this->input->post->('kode'),
				'jurusan'=>$this->input->post->('jurusan'),
				'kelas'=>$this->input->post->('kelas'),
				'kapasitas'=>$this->db->post('kapasitas'),
				'tahun_ajaran'=>$this->input->post->('tahunAjaran'),
				 );
			$this->db->insert('kelas',$data);
		}
		public function get_edit($kode)		
		{
			$this->db->where('kode',$kode);
			$query=$this->db->get('kode');

			if ($query->num_rows>0) 
			{
				return $query;
			}
			else 
			{
				return null;
			}		
		}
		public function update($kode)	
		{
			$data = array(
				'kode' =>$this->input->post->('kode'),
				'jurusan'=>$this->input->post->('jurusan'),
				'kelas'=>$this->input->post->('kelas'),
				'tahun_ajaran'=>$this->input->post->('tahunAjaran'),
				 );
			$this->db->where('kode',$kode);
			$this->db->update('mahasiswa',$data);
		}
		public function hapus($kode)
		{
			$this->db->where('kode',$kode);
			$this->db->delete('kelas');
		}
		public function cari($cari)
		{
			$this->db->where('kelas',$kelas);
			$query=$this->db->get('kelas');
			if ($query->num_rows>0) 
			{
				return $query;
			}
			else 
			{
				$pesanError=$this->sessio->flash_data("Data $cari tidak ditemukan !")
				$query->$this->db->get('kelas');
				if ($query->num_rows>0) 
				{
					return $query;
				}
				else
				{
					return null;
				}
			}
		}
		public function dataSiswa('$kode')
		{
			$thsi->db->where('kode',$kode);
			$query=$this->db->get('siswa');
			if ($query->num_rows>0) 
				return query;
				else
					return null;
		}
		public function isiKelas() //masih ambigu
		{
			$query=$this->db->get('kelas');
			if ($query->num_rows>0) 
			{
				return $query;
				$data['data']=$query;
				foreach ($data->result() as $row) 
				{
					$kapasitas=$row->kapasitas;
					$JumlahSiswa=count($data);
					if ($kapasitas=$JumlahSiswa) 
					{
						return tambah();
					}
					else
					{

					}
				}
			}
			else
			{
				return null;
			}
			
		}
	}