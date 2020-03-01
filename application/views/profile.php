<?php 

	$this ->load-> view('base/header');
	$this->load->view('base/sidebar');


	if($screen != ''){
		 $this -> load -> view('profile/'.$screen);
	}else{
		redirect('/dashboard');
	}


	$this->load->view('base/footer');