<?php
 
class Login extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('dataSiswa');
   $this->load->model('dataGuru');
   $this->load->model('dataAdmin');
   $this->load->model('dataKepala');
   $this->load->model('dataTU');
   $this->load->library('form_validation');

 }
public function logout()
{
  if (!empty($this->session->userdata('siswa'))) {
    $this->session->unset_userdata('siswa');
    redirect('landing_page','refresh');
    clearstatcache();
  }
  elseif (!empty($this->session->userdata('guru'))) {
    $this->session->unset_userdata('guru');
    redirect('landing_page','refresh');
    clearstatcache(); 
  }
  elseif (!empty($this->session->userdata('tu'))) {
    $this->session->unset_userdata('tu');
    redirect('landing_page','refresh');
    clearstatcache(); 
  }
  elseif (!empty($this->session->userdata('kepala'))) {
    $this->session->unset_userdata('kepala');
    redirect('landing_page','refresh');
    clearstatcache(); 
  }
  elseif (!empty($this->session->userdata('admin'))) {
    $this->session->unset_userdata('admin');
    redirect('landing_page','refresh');
    clearstatcache(); 
  }
  else
  {
    redirect('landing_page','refresh');
    clearstatcache();
  }
}

public function index()
{
        
     $this->load->helper(array('form'));
     $this->load->view('siswa/login_siswa');
}

 function cekLogin()
 {
    $username=$this->input->post('username');
    $password=$this->input->post('password');

    if(!empty($username) && !empty($password))
    {
      $guru=$this->dataGuru->loginGuru($username,$password);
      if ($guru) {
        $sess_array = array();
          foreach($guru as $row)
            $sess_array = array(
         'nip' => $row->nip,
         'nama'=>$row->nama   
       );
       $this->session->set_userdata('guru', $sess_array);
       redirect('guru/utama','refresh');
      }
      else
      {
        $siswa=$this->dataSiswa->loginSiswa($username,$password);
          if ($siswa) {
          $sess_array = array();
           foreach($siswa as $row)
                $sess_array = array(
             'nis' => $row->nis,
             'nama'=>$row->nama   
           );
            $this->session->set_userdata('siswa', $sess_array);
          redirect('siswa/utama','refresh');
          }
          else
          {
            $tu=$this->dataTU->loginTU($username,$password);
            if ($tu) {
              $sess_array=array();
                foreach($tu as $row)
                    $sess_array=array(
                      'nip'=>$row->nip,
                      'nama'=>$row->nama,
                      'username'=>$row->username
                    );
                  $this->session->set_userdata('tu',$sess_array);
                  redirect ('tu/beranda','refresh');     
            }
            else
            {
              $kepala=$this->dataKepala->loginkepala($username,$password);
              if ($kepala){
                $sess_array=array();
                foreach($kepala as $row)
                    $sess_array=array(
                      'nip'=>$row->nip,
                      'nama'=>$row->nama,
                      'username'=>$row->username
                    );
                  $this->session->set_userdata('kepala',$sess_array);
                  redirect ('kepala/utama','refresh'); 

              }
              else
              {
                $admin=$this->dataAdmin->loginAdmin($username,$password);
                if ($admin){
                  $sess_array=array();
                  foreach($admin as $row)
                    $sess_array=array(
                      'nip'=>$row->nip,
                      'nama'=>$row->nama,
                      'username'=>$row->username
                    );
                  $this->session->set_userdata('amdin',$sess_array);
                  redirect ('admin/utama','refresh');
                }
                else
                {
                    $this->session->set_flashdata('salah', " 
                        <p class='alert alert-danger text-center'><i class='glyphicon glyphicon-ok'></i> Username/Password Salah!
                        
                        </p>");
                    redirect('landing_page');
                }
              } 
            }
          } 
      }
    }
    else
    {
      $this->session->set_flashdata('salah', " 
            <p class='alert alert-danger text-center'><i class='glyphicon glyphicon-ok'></i> Username/Password Salah!
            
            </p>");
      redirect('landing_page');
    }
 }
}
