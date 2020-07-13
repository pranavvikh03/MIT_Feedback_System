<?php

class stud_login extends MY_Controller{

  public function index()
	{
	    if($this->session->userdata('user_id'))
          return redirect('stud_forms');
          
		$this->load->view('student/dash');
	}

	public function login()
	{
		 $this->load->library('form_validation');

         $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

        if($this->form_validation->run('stud_login') ) {

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $this->load->model('stud_loginmodel');
           
           $login_id = $this->stud_loginmodel->login_valid($username, $password);

           if( $login_id ) {

            

            $this->session->set_userdata('user_id',$login_id);

            return redirect('stud_forms');

           }
           else{
            
            $this->session->set_flashdata('Login_failed','Invalid username/passsword');
            return redirect('stud_login');
           }
    }

         else{
          
          $this->load->view('student/stud_login');
          
         }

    }

	public function logout()
	{

    $this->session->unset_userdata('user_id');
          return redirect('stud_login');

	}


  

}