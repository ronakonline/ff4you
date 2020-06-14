<?php

class User_M extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function insert($data){
		$q = $this->db->insert('users',$data);
		return $q;
	}

	public function verify($data){
		$q = $this->db->where('id',$data)->update('users',array('verified'=>1));
		return $q;
	}

	public function delete($data){
		$q = $this->db->where('id',$data)->update('users',array('isdeleted'=>1));
		return $q;
	}

	public function all(){
		$q = $this->db->where('isdeleted',0)->get('users')->result();
		return $q;
	}

	public  function  select_user($id){
		$q = $this->db->where('id',$id)->get('users')->result();
		return $q;
	}

	public function update($data,$id){
		$q = $this->db->where('id',$id)->update('users',array('name'=>$data['name'],'email'=>$data['email']));
		return $q;
	}

	public function emailexist($data){
		$q = $this->db->where('email',$data)->get('users')->result();
		return $q;
	}
}
