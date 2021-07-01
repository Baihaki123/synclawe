<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
   
    public function cek_login(){
    	if (empty($this->session->userdata('data_login'))) {
			redirect('Login', 'refresh');
		}
    }
}
