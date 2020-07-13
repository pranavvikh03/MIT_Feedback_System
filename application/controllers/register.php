<?php

class register extends MY_Controller{

	public function index()
	{
		$this->load->view('register/dash'); 
	}

	public function add_stud()
	{
		 $this->load->library('form_validation');
		 $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

       if($this->form_validation->run('stud_register') )
	   { 
		$username = $this->input->post('username'); 
		$password = $this->input->post('password'); 
		$name = $this->input->post('name'); 
		$dept = $this->input->post('dept'); 
		$year = $this->input->post('year'); 

		$this->load->model('registermodel');
		$result = $this->registermodel->exist($username);
	   
	   if($result>0)
	    {

	    	$this->session->set_flashdata('register_failed','Sorry, Roll No. already exist');
            return redirect('register');

	    }

	    else
	    {
	    	$count = $this->registermodel->add($username, $password,$name, $dept, $year);

	    	if($count>0)
	    	{
	    		$this->session->set_flashdata('register_success','Congratulation! Your account created successfully');
                return redirect('register');
	    	}

	    }

	   }
	   
	   else{
          
          $this->load->view('register/dash');
          
         } 
	}

	public function add_admin()
	{
		$this->load->view('register/admin');
	} 

	public function store_admin()
	{

		$username = $this->input->post('username'); 
		$password = $this->input->post('password'); 

		$this->load->model('registermodel');
		$result = $this->registermodel->exist_admin($username);
	   
	    if($result>0)
	     {

	    	$this->session->set_flashdata('register_failed','Sorry, Roll No. already exist');
            return redirect('register/add_admin');

	     }

	     else
	     {
	    	$count = $this->registermodel->add_admin($username, $password);

	    	if($count>0)
	    	{
	    		$this->session->set_flashdata('register_success','Congratulation! Your account created successfully');
                return redirect('register/add_admin');
	    	}

	      }

	    
	   
	    
	}
    

    public function __construct()
    {
        parent::__construct(); 
    
        if( !$this->session->userdata('admin_id'))
      return redirect('admin_login');

    }
}