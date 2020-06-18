<?php

class Home extends CI_Controller{
	public  function  index(){
		
		$data['title'] = "Home || FF4YOU";
		$this->load->view('frontend/index',$data);
	}
}
