<?php
class Login_model extends CI_Model{
 
  function validate($email,$password){
    $this->db->where('user_email',$email);
    $this->db->where('user_password',$password);
    $result = $this->db->get('tbl_users',1);
    return $result;
  }

  public function insert( $data ){
      $this->db->insert("tbl_users", $data);
  }

  public function update($id, $data ){
      $this->db->where("user_id", $id);
      $this->db->update("tbl_users", $data);
  }
 
}