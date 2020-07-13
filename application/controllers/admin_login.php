<?php

class admin_login extends MY_Controller{

  public function index()
	{
	    if($this->session->userdata('admin_id'))
          return redirect('admin');
          
		$this->load->view('admin_form/dash');
	}

	public function login()
	{
		 $this->load->library('form_validation');

         $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

        if($this->form_validation->run('stud_login') ) {

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $this->load->model('admin_loginmodel');
           
           $login_id = $this->admin_loginmodel->login_valid($username, $password);

           if( $login_id ) {

            

            $this->session->set_userdata('admin_id',$login_id);

            return redirect('admin');

           }
           else{
            
            $this->session->set_flashdata('Login_failed','Invalid username/passsword');
            return redirect('admin_login');
           }
    }

         else{
          
          $this->load->view('admin_form/dash');
          
         }

    }

	public function logout()
	{

    $this->session->unset_userdata('admin_id');
          return redirect('admin_login');

	}

}