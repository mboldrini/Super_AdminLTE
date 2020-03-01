<?php
class Dashboard extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
    $this->load->library("session");
    $this->load->model("users_model");
  }
 
  function index(){
    //Allowing akses to admin only
      if($this->session->userdata('level')==='1'){
          
        
        $user_id = $this->session->userdata('level');
        $user_infos = $this->users_model->get_user_infos($user_id);

          $data = array(
            "page_infos" => array(
              'title' => 'AdminLTE - Panel',
              'location' => 'Painel',
              'description' => " - you're at the panel",
            ),
            'user_infos' => array(
              "level" => $user_infos->user_level,
              "name" => $user_infos->user_name,
              "description" => $user_infos->user_description
            )
          );

          $this->load->view('painel', $data);

      }else{
          echo "Access Denied";
      }
 
  }
 
  function staff(){
    //Allowing akses to staff only
    if($this->session->userdata('level')==='2'){
      $this->load->view('dashboard_view');
    }else{
        echo "Access Denied";
    }
  }
 
  function author(){
    //Allowing akses to author only
    if($this->session->userdata('level')==='3'){
      $this->load->view('dashboard_view');
    }else{
        echo "Access Denied";
    }
  }
 
	public function logoff(){
		// destroi todas as sessions conectadas
		$this->session->sess_destroy();
		// muda a url já p/ a tela de login
    header("Location: " . base_url() . "login" );
	}

}