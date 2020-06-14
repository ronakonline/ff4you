<?php

class Admin_M extends  CI_Model{

	public function __construct()
	{
			$this->load->database();
	}

	public function checklogin($data){
		$q = $this->db->where('username',$data['username'])->where('password',$data['password'])->get('admin')->result();
		return $q;
	}
}
