<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {

	public function index()
	{
		$this->load->view('page/home');
	}
}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */