<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class DashboardCntr extends CI_Controller { 
	
	public function index(){
        $data['content'] = 'dashboard';
  		$this->load->view('template/temp',$data);
    }
}
?>