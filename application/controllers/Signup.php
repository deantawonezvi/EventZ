<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {


  public function index()
  {

    if($this->session->userdata('logged_in') ==FALSE)
    {
      if($this->form_validation->run('signup')==FALSE)
      {
        $data['page'] = 'Sign Up';
        $this->load->view('signup_index', $data);
      }
      else
      {
        $signup_info = array('stagename' => strtolower($this->input->post('s_stage')),
                         'name' => strtolower($this->input->post('s_name')),
                         'surname' => strtolower($this->input->post('s_surname')),
                         'type'=> strtolower($this->input->post('s_artist')),
                         'phone'=>$this->input->post('s_phone'),
                         'password' => $this->input->post('s_password'),
                         'pic'=>$this->input->post('')
                         );

        if($query = $this->app_model->insert('artists', $signup_info) == TRUE)
        {
          $this->_start_session($this->input->post('s_phonenumber'));
          redirect('sell');
        }else{
          redirect('sell');
        }



      }
  }
    else
    {
    redirect('dashboard');
    }

  }






  public function _start_session($phonenumber)
  {
    $userdata = array(
                   'phonenumber'  => $phonenumber,
                   'logged_in' => TRUE
                      );

    $this->session->set_userdata($userdata);
  }

}

/* End of file home.php */
/* Location: ./application/controllers/signup.php */
