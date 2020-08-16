<?php
defined('BASEPATH') OR exit('Login is must to access this page!!');

class Cart extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  if(!$this->session->userdata('id'))
  {
   redirect('login');
  }
  $this->load->model('basket_model');
 }
 

 function index()
 {
  $user_id = $this->session->userdata('id');
    $this->db->select('*')->from('baskets')->join ( 'tests', 'tests.id = baskets.test_id' )->where('user_id',$user_id);
    $query = $this->db->get();
    $cart_data=$query->result();
    $data['cart_data'] = $cart_data;

    $this->db->select_sum('count')->where('user_id',$user_id);
    $query = $this->db->get('baskets');
    $total_count=$query->row();
    $this->session->set_userdata('basket_count', $total_count->count);
    $this->load->view('cart',$data);
 }

 function add()
 {


    $test_id = $this->input->post('test_id');
    $user_id = $this->session->userdata('id');
    $common_id = 0;
    $update = 0;
    $count = 1;
    $this->db->select('common_id')->from('baskets')->where('user_id',$user_id);
    $query = $this->db->get();
    $common_id_array=$query->result();

    if(count($common_id_array) == 0){
      $this->db->select_max('common_id');
      $query = $this->db->get('baskets');
      $last_common_id=$query->result();


      if($last_common_id[0]->common_id == ""){
        $common_id = 1;
      }else{
        $common_id = $last_common_id->common_id + 1;
      }
      
    }else{

      $this->db->select('count');
      
      $this->db->where('user_id',$user_id);
      $this->db->where('test_id',$test_id);
      $query = $this->db->get('baskets');
      $new_count=$query->row();


      if($new_count->count == ""){
        
      }else{
        $update = 1;
        $count = $new_count->count + 1;
      }
      $common_id = $common_id_array[0]->common_id;
    }

    if($update == 1){
      $this->db->set('count', $count)->where('user_id',$user_id)->where('test_id',$test_id)->update('baskets');
      $query->result();
    }else{
      $data = array(
        'test_id'  => $test_id,
        'user_id'  => $user_id,
        'common_id' => $common_id,
        'count' => 1,
       );
       $id = $this->basket_model->insert($data);


     
    }

    $this->db->select_sum('count')->where('user_id',$user_id);
    $query = $this->db->get('baskets');
    $total_count=$query->row();
    $this->session->set_userdata('basket_count', $total_count->count);


    redirect(base_url()."test/list");
    
 }
 function remove($test_id){
    $user_id = $this->session->userdata('id');
    $this->db->where('test_id', $test_id);
    $this->db->where('user_id', $user_id);
    $this->db->delete('baskets');
    redirect(base_url().'cart');
    die();

 }

 function order()
 {
  $user_id = $this->session->userdata('id');
    $this->db->select('*')->from('baskets')->join ( 'tests', 'tests.id = baskets.test_id' )->where('user_id',$user_id);
    $query = $this->db->get();
    $cart_data=$query->result();
    $data['cart_data'] = $cart_data;

    
    $this->db->where('user_id', $user_id);
    $this->db->delete('baskets');

    $this->db->select_sum('count'); 
    $this->db->where('user_id',$user_id);
    $query = $this->db->get('baskets');
    $total_count=$query->row();
    $this->session->set_userdata('basket_count', $total_count->count);


   $this->load->view('order',$data);
 }

 

}

?>