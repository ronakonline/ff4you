<?php



require APPPATH . 'libraries/REST_Controller.php';



class Slot extends REST_Controller {



	/**

	 * Get All Data from this method.

	 *

	 * @return Response

	 */

	public function __construct() {

		parent::__construct();

		$this->load->database();

	}



	/**

	 * Get All Data from this method.

	 *

	 * @return Response

	 */

	public function index_get($id = 0)

	{

		if(!empty($id)){

			$this->db->select('*');
			$this->db->from('slots')->where('user_id',$id);
			$this->db->join('service','slots.service_id=service.id');
			$this->db->join('providers','service.provider_id=providers.id');
			$data = $this->db->get()->result();
			//$data = $this->db->where('user_id',$id)->get('slots')->result();
			$this->response($data, REST_Controller::HTTP_OK);
		}else{

			$this->response(['Too few Arguments'],'500');

		}


	}

	/**

	 * Get All Data from this method.

	 *

	 * @return Response

	 */

	public function slot_available_get($id = 0)

	{

		if(!empty($id)){

			$result = $this->db->where('service_id',$id)->get('slots');
			$count = $result->num_rows();
			$total = $this->db->select('slots')->where('id',$id)->get('service')->result();
			//$this->response($total, REST_Controller::HTTP_OK);
			if($count>=$total[0]->slots){
				$this->response(0, REST_Controller::HTTP_OK);
			}else{
				$this->response(1, REST_Controller::HTTP_OK);
			}

		}else{

			$this->response(['Too few Arguments'],'500');

		}


	}

	/**

	 * Get All Data from this method.

	 *

	 * @return Response

	 */

	public function index_post()

	{

		$input = $this->input->post();

		$this->db->insert('slots',$input);

		$this->response(['Slot Booked successfully.'], REST_Controller::HTTP_OK);

	}



	/**

	 * Get All Data from this method.

	 *

	 * @return Response

	 */

	public function index_put($id)

	{

		$input = $this->put();

		$this->db->update('providers', $input, array('id'=>$id));



		$this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);

	}



	/**

	 * Get All Data from this method.

	 *

	 * @return Response

	 */

	public function index_delete($id)

	{

		$this->db->delete('providers', array('id'=>$id));



		$this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);

	}



}
