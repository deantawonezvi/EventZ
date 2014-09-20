<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function index(){
    $data = array('page' => "Welcome",'user' => $this->facebook->get_user());
    $this->load->view('welcome_message', $data);

  }

  public function confirmIdentity(){
    $data = array('page' => "Home",'login_url' => $this->facebook->get_login_url());
    $this->load->view('home_index', $data);
  }

/*
  public function confirmIdentity(){

    $code = curPageURL();

    var_dump($code);

    $codeFromFB = str_replace("http://eventzbeta.herokuapp.com/login/confirmIdentity/", "", $code);

    var_dump($codeFromFB);

    $codeAndState = str_replace("?code=", "", $codeFromFB);

    var_dump($codeAndState);

    $fromUri = explode("&state=", $codeAndState);

    var_dump($fromUri);

    $data = $this->facebook->get_authentication_url();

    var_dump($data);

    //if($data['state']!=$fromUri[1]){
      //  echo "Malicious user :(";
      //  die();
   // }else{
   //   $uri = $data['url']."&code=".$fromUri[0];
   //   var_dump($uri);
   //   die();
   // }
  }

*/


/*
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
  */


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
