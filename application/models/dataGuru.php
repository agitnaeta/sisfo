<?php 
	class DataGuru Extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function allGuru()
		{
			$query=$this->db->get('guru');
			if($query->num_rows>0)
			{
				return $query;
			}
			else
			{
				return null;
			}
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
		function get_edit($nip)
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
				'tahun_masuk'=>$this->input->post('tahunMasuk')
			);
			$this->db->where('nip',$nip);
			$this->db->update('guru');
		}

	function loginGuru($username, $password)
     {
       $this->db->select('nip, password,nama');
       $this ->db-> from('guru');
       $this ->db-> where('nip', $username);
       $this ->db-> where('password', $password);
       $this ->db-> limit(1);

       $query = $this ->db-> get();

       if($query -> num_rows() == 1)
       {
      
         return $query->result();
       }
       else
       {

         return false;
       }
     }
	}