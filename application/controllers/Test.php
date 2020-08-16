<?php
defined('BASEPATH') OR exit('Login is must to access this page!!');

class Test extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  if(!$this->session->userdata('id'))
  {
   redirect('login');
  }
 }
 

 function index()
 {
  die();
 }

 function list()
 {
    $user_id = $this->session->userdata('id');
    $this->db->select('distinct(testName)')->from('tests');
    $query = $this->db->get();
    $result=$query->result();

    $this->db->select('*')->from('tests')->where('type','Test');
    $query = $this->db->get();
    $test=$query->result();

    $this->db->select('*')->from('tests')->where('type','Package');
    $query = $this->db->get();
    $package=$query->result();
    

   
    $search_array = '';
    foreach ($result as $key => $value) {
      $search_array .= '"';
      $search_array .= $value->testName;
      $search_array .= '",';

    }

    $this->db->select_sum('count')->where('user_id',$user_id);
    $query = $this->db->get('baskets');
    $total_count=$query->row();

    $this->session->set_userdata('basket_count', $total_count->count);

    $search_array = rtrim($search_array, ".");
    $data['search_array'] = $search_array; 
    $data['test'] = $test; 
    $data['package'] = $package; 

    $this->load->view('test/listing',$data);
 }


 function search()
 {

    $search = $this->input->post('search');
    $user_id = $this->session->userdata('id');

    $this->db->select('distinct(testName)')->from('tests');
    $query = $this->db->get();
    $result=$query->result();

    $this->db->select('*')->from('tests');
    if($search != "")
    $this->db->where('testName',$search);
    $query = $this->db->get();
    $test=$query->result();
   
    $search_array = '';
    foreach ($result as $key => $value) {
      $search_array .= '"';
      $search_array .= $value->testName;
      $search_array .= '",';

    }

    $this->db->select_sum('count'); 
    $this->db->where('user_id',$user_id);
    $query = $this->db->get('baskets');
    $total_count=$query->row();

    $this->session->set_userdata('basket_count', $total_count->count);

    $search_array = rtrim($search_array, ".");
    $data['search_array'] = $search_array; 
    $data['test'] = $test;  
    
    $this->load->view('test/search',$data);
 }

 

}

?>