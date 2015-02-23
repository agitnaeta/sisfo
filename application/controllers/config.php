<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Config extends CI_Controller {

    function __construct()
     {
         parent::__construct();
         $this->load->library('input');
        $this->load->model('dataConfig','','TRUE');
       
     }

	public function index()
	{
		$this->load->view('f_config');
		
	}
    function sync()
    {
       // $data= array (

    //	'host'=>$this->input->post('host'),
    //	'user'=>$this->input->post('user'),
    //	'pass'=>$this->input->post('pass'),
    //	'dbase'=>$this->input->post('dbase')
    //	);
        $this->dataConfig->konfigurasi($data);
    //	$this->load->view('beranda',$data);
    }

    function createUser()
    {
        
    }
    function showMaster()
    {
        $data['master']=$this->dataConfig->showMasterSt();
        $this->load->view('beranda',$data);
    }
}
