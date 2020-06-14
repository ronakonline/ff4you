<?php

class Login extends  CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Admin_M');
	}

	public  function  index(){
		if(isset($_SESSION['admin'])){
			redirect(base_url('admin/Dashboard'));
		}
		$data['title']="Login || FF";
		$this->load->view('admin/login',$data);
	}

	public function checklogin(){
		$data = $this->input->post();
		print_r($data);
		$op = $this->Admin_M->checklogin($data);
		if(count($op)<=0){
			$_SESSION['error'] = "Incorrect Username or Password";
			redirect(base_url('admin/Login'));
		}else{
			$_SESSION['admin'] = $op[0];
			print_r($_SESSION['admin']);
			redirect(base_url('admin/Dashboard'));
		}

	}

	public function logout(){
		unset($_SESSION['admin']);
		redirect(base_url('admin/Login'));
	}

}
