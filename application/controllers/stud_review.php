<?php

class stud_review extends MY_Controller{

	public function index()
	{
		$this->load->model('stud_reviewmodel');
		$this->data['info'] = $this->stud_reviewmodel->stud_info();

         
		$this->load->view('stud_review/dash',$this->data);
	}

	public function get_stud()
	{
		$year = $this->input->post('year');
        $dept = $this->input->post('dept');
		

		if($year =='all'&& $dept=='all')
		{
			return redirect('stud_review');
		}

		else
		{

			$this->load->model('stud_reviewmodel');
			if($year=='all')
			{
                $this->data['info'] = $this->stud_reviewmodel->get_dept($dept);
			}

			else if($dept=='all')
			{
                $this->data['info'] = $this->stud_reviewmodel->get_year($year);
			}
			else
			{
				$this->data['info'] = $this->stud_reviewmodel->get_data($year, $dept);
			}
			
            
			$this->load->view('stud_review/dash',$this->data);
		}
	}

    public function __construct()
    {
        parent::__construct(); 
    
        if( !$this->session->userdata('admin_id'))
      return redirect('admin_login');

    }
}