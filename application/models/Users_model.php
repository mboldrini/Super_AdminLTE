<?php

class Users_model extends CI_Model{


    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_user_data($user_login){
        $this->db
        ->select("user_id, user_name, user_level, user_email")
        ->from("tbl_users")
        ->where("user_login", $user_login);

        $result = $this->db->get();

        if( $result->num_rows() > 0 ){
            return $result->row();
        }else{
            return NULL;
        }
    }
    
    public function get_last_users(){
        $this->db->select("*");
        $this->db->from("tbl_users");
        $this->db->limit(8);
        $this->db->order_by('user_id',"DESC");
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

	
	public function get_user_infos($user_id){
		$this->db
        ->select("user_id, user_name, user_email, user_level, user_description")
        ->from("tbl_users")
        ->where("user_id", $user_id);

        $result = $this->db->get();

        if( $result->num_rows() > 0 ){
            return $result->row();
        }else{
            return NULL;
        }
	}

    public function get_data($id, $select = NULL ){
        if( !empty($select) ){
            $this->db->select($select);
        }
        $this->db->from("tbl_users");
        $this->db->where("user_id", $id);
        return $this->db->get();
    }

    public function insert( $data ){
        $this->db->insert("tbl_users", $data);
    }

    public function update($id, $data ){
        $this->db->where("user_id", $id);
        $this->db->update("tbl_users", $data);

    }

    public function delete($id ){
        $this->db->where("user_id", $id);
        $this->db->delete("tbl_users");
    }
    
    public function is_duplicated($field, $value, $id = NULL){
        if( !empty($id) ){
            $this->db->where("user_id <>", $id);
        }
        $this->db->from("tbl_users");
        $this->db->where($field, $value);
        return $this->db->get()->num_rows() > 0;
    }






}