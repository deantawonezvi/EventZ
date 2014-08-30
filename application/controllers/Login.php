<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


  public function index()
  {
    if($this->session->userdata('logged_in')==FALSE)
    {
      if($this->form_validation->run('login') == FALSE)
      {
         $data['page'] = 'Login';
         $this->load->view('login_index', $data);
      }
      else
      {
        $user = $this->app_model->get_all_where("users", array('phone' => $this->input->post('l_phone'),
                                                        'password' => $this->input->post('l_password'))
                                        );
        if($user->num_rows() == 0)
        {
          $data = array('page' => 'Login',
                         'no_user' => 'Your username and password combination is incorrect'
                        );
          $this->load->view('login_index', $data);

        }else{
          $this->_start_session($row->phone);
          redirect('dashboard');
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
/* Location: ./application/controllers/login.php */
