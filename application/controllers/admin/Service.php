<?php

class Service extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Service_M');
	}

	public function index(){
		check_login_status();
		$data['title'] = "Add Service || FF4YOU";
		$data['providers'] = $this->Service_M->providers();
		$this->load->view('admin/addservice',$data);
	}

	public function all(){
		check_login_status();
		$data['title'] = "All Service || FF4YOU";
		$data['services'] = $this->Service_M->all();
		//print_r($data['services']);
		$this->load->view('admin/allservice',$data);
	}

	public function  insert(){
		check_login_status();
		$data = $this->input->post();
		$op = $this->Service_M->insert($data);
		if($op){
			$_SESSION['success'] = "Service Added";
		}else{
			$_SESSION['error'] = "Error";
		}
		redirect(base_url('admin/Service'));
	}

	public function edit($id){
		check_login_status();
		$data['title'] = "Edit Service || FF4YOU";
		$data['providers'] = $this->Service_M->providers();
		$data['service'] = $this->Service_M->select_service($id);
		//print_r($data['service']);
		$this->load->view('admin/editservice',$data);
	}

	public function  update(){
		check_login_status();
		$data = $this->input->post();
		$op = $this->Service_M->update($data);
		if($op){
			$_SESSION['success'] = "Updated!";
		}else{
			$_SESSION['error'] = "error";
		}

		redirect(base_url('admin/Service/all'));
	}

	public function delete($id){
		check_login_status();
		$op = $this->Service_M->delete($id);
		if($op){
			$_SESSION['success'] = "Service Deleted!";
		}else{
			$_SESSION['error'] = "Error";
		}
		redirect(base_url('admin/Service/all'));
	}


}
