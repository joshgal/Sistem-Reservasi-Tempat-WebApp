<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginControl extends CI_Controller {

  	public function index()
  	{
  		$this->load->view('loginForm');
  	}

	  public function loginPemilik()
	  {
      $this->form_validation->set_rules('usernamePemilik','Username','required', ['required' =>'Kolom Username harus diisi']);
      $this->form_validation->set_rules('passPemilik','Password','required', ['required' =>'Kolom Password harus diisi']);
      if($this->form_validation->run() != TRUE){
		    $this->load->view('loginForm');
      } else {
        $this->load->view('loginberhasil');            
      }
    }

    public function loginPenyewa()
    {
      $this->form_validation->set_rules('usernamePenyewa','Username','required', ['required' =>'Kolom Username harus diisi']);
      $this->form_validation->set_rules('passPenyewa','Password','required', ['required' =>'Kolom Password harus diisi']);
      if($this->form_validation->run() != TRUE){
        $this->load->view('loginForm');
      } else {
        $this->load->view('loginberhasil');            
      }
    }
}
