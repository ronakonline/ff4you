<?php



require APPPATH . 'libraries/REST_Controller.php';



class User extends REST_Controller {



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

	public function index_get($email = null , $password = null)

	{

		if(empty($email) || empty($password)){

			$this->response(['Too Few Argument'],'500');

		}else{

			$data = $this->db->where('email',$email)->where('password',$password)->where('verified',1)->get("users")->result();
			$this->response($data, REST_Controller::HTTP_OK);

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

		if(count($input)==0){
			$this->response(['Too Few Argument'],'500');
		}else{
			$exist = $this->db->where('email',$input['email'])->where('verified',1)->get('users')->result();
			if(count($exist)>=1){
				$this->response(['Email Already in use'],'500');
			}else {
				$config = Array(
					'protocol' => 'smtp',
					'smtp_host' => 'ssl://smtp.googlemail.com',
					'smtp_port' => 465,
					'smtp_user' => 'alonecoder1@gmail.com',
					'smtp_pass' => 'lvshagihoagqdmrp',
					'mailtype' => 'html',
					'charset' => 'iso-8859-1'
				);
				$this->load->library('email', $config);
				$this->email->set_newline("\r\n");


				$this->email->from('alonecoder1@gmail.com', 'QN-Center');
				$this->email->to($input['email']);


				$this->email->subject('Email Verification');
				$input['verification_code'] = mt_rand(100000, 999999);
				$this->email->message($this->load->view('templates/otp-template',$input,true));


				$result = $this->email->send();

				$exist = $this->db->where('email',$input['email'])->get('users')->result();
				if(count($exist)>=1){

				}else{
					$this->db->set($input);
					$this->db->insert('users');
				}
				$this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
			}
		}


	}

	/**

	 * Get All Data from this method.

	 *

	 * @return Response

	 */

	public  function verify_get($email=null,$verification_code=null){

		if(!empty($verification_code) && !empty($email)){
			$q = $this->db->where('email',$email)->where('verification_code',$verification_code)->update('users',array('verified'=>1));
			if($this->db->affected_rows()>0){
				$this->response(['Verified'], REST_Controller::HTTP_OK);

			}else{
				$this->response(['Wrong Code.'], '500');
			}
		}

	}


	/**

	 * Get All Data from this method.

	 *

	 * @return Response

	 */


	public function check_verify_get($email){
		if(!empty($email)){
			$q = $this->db->where('email',$email)->where('verified',1)->get('users')->result();
			if(count($q)>0){
				$this->response(['Verified.'], REST_Controller::HTTP_OK);
			}else{
				$this->response(['Not Verified.'], '500');
			}
		}else{
			$this->response(['Too few arguments'], '500');
		}
	}

	/**

	 * Get All Data from this method.

	 *

	 * @return Response

	 */

	public function forget_password_get($email=null){
		if(!empty($email)){
			$q = $this->db->where('email',$email)->where('verified',1)->get('users')->result();
			if(count($q)>0){
				$config = Array(
					'protocol' => 'smtp',
					'smtp_host' => 'ssl://smtp.googlemail.com',
					'smtp_port' => 465,
					'smtp_user' => 'alonecoder1@gmail.com',
					'smtp_pass' => 'lvshagihoagqdmrp',
					'mailtype' => 'html',
					'charset' => 'iso-8859-1'
				);
				$this->load->library('email', $config);
				$this->email->set_newline("\r\n");


				$this->email->from('alonecoder1@gmail.com', 'QN-Center');
				$this->email->to($email);


				$this->email->subject('Email Test');
				$verification_code = mt_rand(100000, 999999);
				$this->email->message($verification_code);


				$result = $this->email->send();
				$this->db->where('email',$email)->update('users',array('verification_code' => $verification_code));
				$this->response(['OTP Send'], REST_Controller::HTTP_OK);
			}else{
				$this->response(['Invaild Email.'], '500');
			}
		}else{
			$this->response(['Too few arguments'], '500');
		}
	}

	/**

	 * Get All Data from this method.

	 *

	 * @return Response

	 */

	public function verify_otp_get($email=null,$otp=null){
		if(!empty($email) && !empty($otp)){
			$q = $this->db->where('email',$email)->where('verification_code',$otp)->get('users')->result();
			if(count($q)>0){
				$this->response(['Correct'], REST_Controller::HTTP_OK);
			}else{
				$this->response(['Invaild Email or OTP.'], '500');
			}
		}else{
			$this->response(['Too few arguments'], '500');
		}
	}

	/**

	 * Get All Data from this method.

	 *

	 * @return Response

	 */

	public function change_password_get($email=null,$otp=null,$newpass=null){
		if(!empty($email) && !empty($otp) && !empty($newpass)){
			$q = $this->db->where('email',$email)->where('verification_code',$otp)->get('users')->result();
			if(count($q)>0){
				$this->db->where('email',$email)->update('users',array('password' => $newpass));
				$this->response(['Password Changed'], REST_Controller::HTTP_OK);
			}else{
				$this->response(['Invaild Email or OTP.'], '500');
			}
		}else{
			$this->response(['Too few arguments'], '500');
		}
	}

	/**

	 * Get All Data from this method.

	 *

	 * @return Response

	 */

	public function update_profile_get($email=null,$name=null){
		if(!empty($name) && !empty($email)){
			$q = $this->db->where('email',$email)->update('users',array('name' => $name));
			if($this->db->affected_rows() > 0){
				$this->response(['updated'], REST_Controller::HTTP_OK);
			}else{
				$this->response(['Error.'], '500');
			}
		}else{
			$this->response(['Too few arguments'], '500');
		}
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
