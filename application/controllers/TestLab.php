<?php

class TestLab extends CI_Controller {
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
  
  redirect("/test/list");
 }

 function logout()
 {
  $data = $this->session->all_userdata();
  foreach($data as $row => $rows_value)
  {
   $this->session->unset_userdata($row);
  }
  redirect('login');
 }
}

?>