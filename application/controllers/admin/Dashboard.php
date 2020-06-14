<?php

class Dashboard extends CI_Controller{
	public  function  index(){
		check_login_status();
		$data['title'] = "Home || FF";
		$this->load->view('admin/dashboard',$data);
	}
}
