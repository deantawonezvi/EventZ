<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function index()
  {
    $data['page'] = 'Mission Control';
    $this->load->view('dashboard_index', $data);
  }


  public function create()
  {

/*
    if(isset($_POST['save'])){

      var_dump($_POST);
      var_dump($_FILES);
      die();
    }

    */
  if(isset($_POST['save']))
  {
   if($_POST['save'] == "Save Profile")
      {
        $config['upload_path'] = './company_logos/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload())
      {
      $data = array('error' => $this->upload->display_errors());
      $this->load->view('dashboard_create', $data);
      }

      $this->app_model->insert("companies", $_POST);

      redirect('dashboard/edit');


      }elseif ($_POST['save'] == "Update") {
        $condition = array('id'=> $_POST['id']);
        $this->app_model->update("companies", $_POST, $condition);
        redirect('dashboard/edit');
      }
    }else
      {
        $data['page'] = 'Create New Investment';
        $this->load->view('dashboard_create', $data);
      }
  }


  public function edit(){

    $company_data = $this->app_model->get_all("companies");

    $data = array('page' => "Edit Investments",
                  'company' => $company_data);
    $this->load->view('dashboard_edit', $data);
  }

  public function update($company_id)
  {
    $condition = array('id' => $company_id);
    $company_data = $this->app_model->get_all_where("companies",$condition);
    $data = array('page' => "Update Investment",
                  'company' => $company_data);
    $this->load->view('dashboard_create',$data);
  }
}
