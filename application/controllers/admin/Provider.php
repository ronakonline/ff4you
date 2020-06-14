<?php

class Provider extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/Provider_M');
	}

	public function index(){
		check_login_status();
		$data['title']='Provider || FF4YOU';
		$this->load->view('admin/addprovider',$data);
	}

	public function all(){
		check_login_status();
		$data['title'] = "All Providers || FF4YOU";
		$data['providers'] = $this->Provider_M->all();
		$this->load->view('admin/allproviders',$data);
	}

	public function  insert(){
		check_login_status();
		$data = $this->input->post();
		$data['thumbnail'] = time().$_FILES['thumbnail']['name'];
		if(!move_uploaded_file($_FILES['thumbnail']['tmp_name'],'uploads/'.$data['thumbnail'])){
			$_SESSION['error'] = "Error Uploading Image";
			redirect(base_url('admin/Provider'));
		}
		$op = $this->Provider_M->insert($data);
		if($op){
			$_SESSION['success'] = "Provider Created!";
		}else{
			$_SESSION['error'] = "Error";
		}
		redirect(base_url('admin/Provider'));
	}

	public function edit($id){
		check_login_status();
		$data['title'] = "Edit Provider || FF4YOU";
		$data['provider'] = $this->Provider_M->select_provider($id);
		$this->load->view('admin/editprovider',$data);
	}

	public function  update(){
		check_login_status();
		$data = $this->input->post();
		if($_FILES['thumbnail']['error']==0){
			$data['thumbnail'] = time().$_FILES['thumbnail']['name'];
			if(!move_uploaded_file($_FILES['thumbnail']['tmp_name'],'uploads/'.$data['thumbnail'])){
				$_SESSION['error'] = "Error Uploading Image";
				redirect(base_url('admin/Provider/all'));
			}
		}
		$pid = $data['pid'];
		unset($data['pid']);
		$op = $this->Provider_M->update($pid,$data);
		if($op){
			$_SESSION['success'] = "Provider Updated!";
		}else{
			$_SESSION['error'] = "Error";
		}
		redirect(base_url('admin/Provider/all'));
	}

	public function delete($id){
		check_login_status();
		$op = $this->Provider_M->delete($id);
		if($op){
			$_SESSION['success'] = "Provider Deleted!";
		}else{
			$_SESSION['error'] = "Error";
		}
		redirect(base_url('admin/Provider/all'));
	}

}
