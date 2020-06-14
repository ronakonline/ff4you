<?php

class Provider_M extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function insert($data){
		$q = $this->db->insert('providers',$data);
		return $q;
	}

	public function all(){
		$q = $this->db->where('isdeleted',0)->get('providers')->result();
		return $q;
	}

	public  function  select_provider($id){
		$q = $this->db->where('id',$id)->get('providers')->result();
		return $q;
	}

	public  function  update($pid,$data){
		$q = $this->db->where('id',$pid)->update('providers',$data);
		return $q;
	}

	public function delete($id){
		$q = $this->db->where('id',$id)->update('providers',array('isdeleted'=>1));
		return $q;
	}
}
