<?php
class Basket_model extends CI_Model
{
 function insert($data)
 {
  $this->db->insert('baskets', $data);
  return $this->db->insert_id();
 }

}

?>