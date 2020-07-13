<?php

class stud_forms extends MY_Controller{

	public function index()
	{
		$this->load->view('Stud_form/display');
	}


	public function openform1()
	{
		$this->load->model('questionmodel');
		$this->data['questions'] = $this->questionmodel->getform1();
		$this->load->view('Stud_form/form1/dash',$this->data);
	}

	public function openform2()
	{
		$this->load->model('questionmodel');
		$this->data['questions'] = $this->questionmodel->getform2();
		$this->load->view('Stud_form/form2/dash',$this->data);
	}

	public function openform3()
	{
		$this->load->model('questionmodel');
		$this->data['questions'] = $this->questionmodel->getform3();
		$this->load->view('Stud_form/form3/dash',$this->data);
	}

	public function openform4()
	{
		$id = $this->session->userdata('user_id');
		$this->load->model('questionmodel');
		$this->load->model('dep_model');
		$this->data['questions'] = $this->questionmodel->getform4();
		$this->data['subject'] = $this->dep_model->get_course($id);


		$this->load->view('Stud_form/form4/dash',$this->data);
	}

	public function openform6()
	{
		$this->load->model('questionmodel');
		$this->data['questions'] = $this->questionmodel->getQuestions();
		
		//$this->load->view('Other_form/form6/dash',$this->data);
	}

	 public function __construct()
    {
        parent::__construct(); 
    
        if( !$this->session->userdata('user_id'))
      return redirect('stud_login');

    }
}