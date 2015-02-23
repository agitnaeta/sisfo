<?php
	class DataConfig extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function konfigurasi($data)
		{
			$this->db->query("create database setting_replikasi; use setting_replikasi;
							  create table replikasi (host varchar(50), user varchar(50), password varchar('64'), dbase varchar(50))");
			
		}
		public function showMasterSt()
		{
			$query=$this->db->query("show master status;");
			if ($query->num_rows>0)
			{
				return query;
			}
			else
			{
				return null;
			}
		}
	}
