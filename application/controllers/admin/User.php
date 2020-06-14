<?php

class User extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/User_M');
	}

	public function index(){
		check_login_status();
		$data['title']='User || FF4YOU';
		$this->load->view('admin/adduser',$data);
	}

	public function all(){
		check_login_status();
		$data['title'] = "All Users || FF4YOU";
		$data['users'] = $this->User_M->all();
		$this->load->view('admin/allusers',$data);
	}

	public function  insert(){
		check_login_status();
		$data = $this->input->post();
		$exist = $this->User_M->emailexist($data['email']);
		if(count($exist)!=0){
			$_SESSION['error'] = "Email Alredy Exist";
			redirect(base_url('admin/User'));
		}else{
			$op = $this->User_M->insert($data);
			if($op){
				$_SESSION['success'] = "User Created!";
			}else{
				$_SESSION['error'] = "Error";
			}
			redirect(base_url('admin/User'));	
		}
		
	}

	public function edit($id){
		check_login_status();
		$data['title'] = "Edit User || FF4YOU";
		$data['user'] = $this->User_M->select_user($id);
		$this->load->view('admin/edituser',$data);
	}

	public function update($id){
		check_login_status();
		$data = $this->input->post();
		$op = $this->User_M->update($data,$id);
		if($op){
			$_SESSION['success'] = "Updated Successfully";
		}else{
			$_SESSION['error'] = "Error";
		}
		redirect(base_url('admin/User/all'));
	}

	public function verify($id){
		check_login_status();
		$op = $this->User_M->verify($id);
		if($op){
			$_SESSION['success'] = "User Verified!";
		}else{
			$_SESSION['error'] = "Error";
		}
		redirect(base_url('admin/User/all'));
	}

	public function delete($id){
		check_login_status();
		$op = $this->User_M->delete($id);
		if($op){
			$_SESSION['success'] = "User Deleted!";
		}else{
			$_SESSION['error'] = "Error";
		}
		redirect(base_url('admin/User/all'));
	}
}
