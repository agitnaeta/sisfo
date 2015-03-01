<?php
	class DataTU extends CI_Model
	{
		public function __cosnstruct()
		{
			parent::__cosnstruct();
		}
		public function detailTU($nip)
		{
			$this->db->where('nip',$nip);
			$query=$this->db->select('tu');
			if ($query) {
				return $query;
			}
			else 
			{
				return null;
			}
		}
		public function loginTU($username,$password)
		{
			$this->db->select('*');
			$this->db->from('tu');
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$this->db->limit(1);
			$query=$this->db->get();
			if ($query->num_rows()==1) {
				return $query->result();
			}
			else
			{
				return null;
			}

		}
	}