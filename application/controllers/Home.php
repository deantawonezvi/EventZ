<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
  {
    $this->load->library('facebook');
    $data = array('page' => "Home",'login_url' => $this->facebook->get_login_url());
    $this->load->view('landing_home_index', $data);
  }

  public function log_out(){
    $this->session->sess_destroy();
    redirect('home/');
  }
}



?>
