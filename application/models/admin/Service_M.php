<?php
class Service_M extends CI_Model{
	function __construct()
	{
			$this->load->database();
	}

	public function providers(){
		$q= $this->db->select('name,id')->get('providers')->result();
		return $q;
	}

	public function insert($data){
		$q = $this->db->insert('service',$data);
		return $q;
	}

	public function all(){
		$this->db->select('service.*,providers.name');
		$this->db->from('service');
		$this->db->where('service.isdeleted',0);
		$q = $this->db->join('providers','service.provider_id=providers.id')->get()->result();
		return $q;
	}

	public function select_service($id){
		$q = $this->db->where('id',$id)->get('service')->result();
		return $q;
	}

	public function  update($data){
		$q = $this->db->where('id',$data['id'])->update('service',$data);
		return $q;
	}

	public function delete($id){
		$q = $this->db->where('id',$id)->update('service',array('isdeleted'=>1));
		return $q;
	}

}
