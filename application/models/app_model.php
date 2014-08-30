<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }


 public function get_all($table_name)
    {
      $query = $this->db->get("$table_name");
      return $query;
    }

    public function get_all_where($table_name, $condition, $limit=null, $offset=null)
    {
      $query = $this->db->get_where("$table_name", $condition, $limit, $offset);
      return $query;
    }

    public function insert($table_name, $data)
    {
    	$query = $this->db->insert("$table_name", $data);
    	return $query;
    }

    public function update($table_name, $data, $condition)
    {
        $query = $this->db->update("$table_name", $data, $condition);
        return $query;
    }


}



