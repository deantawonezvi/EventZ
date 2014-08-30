<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
    $data = array('page' => "Home");
		$this->load->view('home_index', $data);
	}

  public function log_out(){
    $this->session->sess_destroy();
    redirect('home/');
  }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
