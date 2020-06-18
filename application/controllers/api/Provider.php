<?php



require APPPATH . 'libraries/REST_Controller.php';



class Provider extends REST_Controller {



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

			$data = $this->db->get_where("providers", ['id' => $id])->row_array();

		}else{

			$data = $this->db->get("providers")->result();

		}



		$this->response($data, REST_Controller::HTTP_OK);

	}

	/**

	 * Get All Data from this method.

	 *

	 * @return Response

	 */

	public function providers_by_lat_get($lat=0,$lng=0)

	{

		if(empty($lat) || empty($lng)){
			$this->response(['Too Few Argument'],'500');

		}else {

			//$data = $this->db->get("providers")->result();
//			$data = $this->db->query('SELECT *, SQRT(
//
//        POW(69.1 * (lat - '.$lat.'), 2) +
//
//        POW(69.1 * ('.$lng.' - lng) * COS(lat / 57.3), 2)) AS distance
//
//    FROM providers HAVING distance < 25 ORDER BY distance')->result();

			$qry = "SELECT *,(((acos(sin((".$lat."*pi()/180)) * sin((providers.lat*pi()/180))+cos((".$lat."*pi()/180)) * cos((providers.lng*pi()/180)) * cos(((".$lng."- providers.lng)*pi()/180))))*180/pi())*60*1.1515*1.609344) as distance FROM providers ";
			$data = $this->db->query($qry)->result();
			$this->response($data, REST_Controller::HTTP_OK);
		}
	}


	/**

	 * Get All Data from this method.

	 *

	 * @return Response

	 */

	public function service_available_get($id = 0)

	{

		if(!empty($id)){

			$data = $this->db->where('provider_id',$id)->where('date',date('Y-m-d'))->get('service')->result();
			$this->response($data, REST_Controller::HTTP_OK);
		}else{

			$this->response(['Too few Arguments'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);

		}

	}






}
