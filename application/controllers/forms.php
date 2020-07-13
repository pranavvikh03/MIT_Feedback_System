
<?php

class forms extends MY_Controller{

	
	public function form1_edit()
	{
         $this->load->model('editmodel');
         $data = $this->editmodel->form1();
         $this->load->view('edit/form1',['data'=>$data]);
	}

   public function form2_edit()
	{
         $this->load->model('editmodel');
         $data = $this->editmodel->form2();
         $this->load->view('edit/form2',['data'=>$data]);
	}

	public function form3_edit()
	{
         $this->load->model('editmodel');
         $data = $this->editmodel->form3();
         $this->load->view('edit/form3',['data'=>$data]);
	}

	public function form4_edit()
	{
         $this->load->model('editmodel');
         $data = $this->editmodel->form4();
         $this->load->view('edit/form4',['data'=>$data]);
	}


	

    
    public function ins_form1()
	{
		$this->load->view('edit/addform1');
	}

	public function ins_form2()
	{
		$this->load->view('edit/addform2');
	}
	public function ins_form3()
	{
		$this->load->view('edit/addform3');
	}
	public function ins_form4()
	{
		$this->load->view('edit/addform4');
	}

	
    public function store_form1()
	{
		$que = $this->input->post('que');
		$ch1 = $this->input->post('choice1');
		$ch2 = $this->input->post('choice2');
		$ch3 = $this->input->post('choice3');
		$this->load->model('editmodel');
		$id = $this->editmodel->getid1();
		$id = $id + 1;
		$id = $this->editmodel->add_form1($id,$que,$ch1,$ch2,$ch3);
        
        
		$result = $this->editmodel->add_col1($id);
		if($result)
		{
            $this->session->set_flashdata('success','Question added successfully');
            return redirect('forms/ins_form1');
		}

		else
		{
            $this->session->set_flashdata('failed','Oops! eroor occured. Try again.');
            return redirect('forms/ins_form1');
		}
	}

	public function store_form2()
	{
		$que = $this->input->post('que');
		$ch1 = $this->input->post('choice1');
		$ch2 = $this->input->post('choice2');
		$ch3 = $this->input->post('choice3');
		$this->load->model('editmodel');
		$id = $this->editmodel->getid2();
		$id = $id + 1;
		$id = $this->editmodel->add_form2($id,$que,$ch1,$ch2,$ch3);

		$result = $this->editmodel->add_col2($id);
		if($result)
		{
            $this->session->set_flashdata('success','Question added successfully');
            return redirect('forms/ins_form2');
		}

		else
		{
            $this->session->set_flashdata('failed','Oops! eroor occured. Try again.');
            return redirect('forms/ins_form2');
		}
	}


	public function store_form3()
	{
		$que = $this->input->post('que');
		$ch1 = $this->input->post('choice1');
		$ch2 = $this->input->post('choice2');
		$ch3 = $this->input->post('choice3');
		$ch4 = $this->input->post('choice4');
		$ch5 = $this->input->post('choice5');
		$this->load->model('editmodel');
		$id = $this->editmodel->getid3();
		$id = $id + 1;
		$id = $this->editmodel->add_form3($id,$que,$ch1,$ch2,$ch3,$ch4,$ch5);

		$result = $this->editmodel->add_col3($id);
		if($result)
		{
            $this->session->set_flashdata('success','Question added successfully');
            return redirect('forms/ins_form3');
		}

		else
		{
            $this->session->set_flashdata('failed','Oops! eroor occured. Try again.');
            return redirect('forms/ins_form3');
		}
	}

	public function store_form4()
	{
		$que = $this->input->post('que');
		$ch1 = $this->input->post('choice1');
		$ch2 = $this->input->post('choice2');
		$ch3 = $this->input->post('choice3');
		$this->load->model('editmodel');
		$id = $this->editmodel->getid4();
		$id = $id + 1;
		$result = $this->editmodel->add_form4($id,$que,$ch1,$ch2,$ch3);
		if($result)
		{
            $this->session->set_flashdata('success','Question added successfully');
            return redirect('forms/ins_form4');
		}

		else
		{
            $this->session->set_flashdata('failed','Oops! eroor occured. Try again.');
            return redirect('forms/ins_form4');
		}
	}
   
    public function del_form1($queid)
	{
		$this->load->model('editmodel');
		$query = $this->editmodel->delete_form1($queid);


       $result = $this->editmodel->delete_col1($queid);
		if($result)
		{
			$this->session->set_flashdata('delete','Deleted successfully');
            return redirect('forms/form1_edit');
		}
	}

    public function del_form2($queid)
	{
		$this->load->model('editmodel');
		$query = $this->editmodel->delete_form2($queid);

        $result = $this->editmodel->delete_col2($queid);
		if($result)
		{
			$this->session->set_flashdata('delete','Deleted successfully');
            return redirect('forms/form2_edit');
		}
	}

	 public function del_form3($queid)
	{
		$this->load->model('editmodel');
		$query = $this->editmodel->delete_form3($queid);
        
        $result = $this->editmodel->delete_col3($queid);
		if($result)
		{
			$this->session->set_flashdata('delete','Deleted successfully');
            return redirect('forms/form3_edit');
		}
	}

	public function del_form4($queid)
	{
		$this->load->model('editmodel');
		$query = $this->editmodel->delete_form4($queid);
        
        $result = $this->editmodel->delete_col4($queid);
		if($result)
		{
			$this->session->set_flashdata('delete','Deleted successfully');
            return redirect('forms/form4_edit');
		}
	}





	public function edit_form1($queid)
	{
	    $this->load->model('editmodel');
	    $res['question'] = $this->editmodel->find_form1($queid);

	    $this->load->view('edit/editque1',$res);

	}

	public function edit_form2($queid)
	{
	    $this->load->model('editmodel');
	    $res['question'] = $this->editmodel->find_form2($queid);

	    $this->load->view('edit/editque2',$res);

	}

	public function edit_form3($queid)
	{
	    $this->load->model('editmodel');
	    $res['question'] = $this->editmodel->find_form3($queid);

	    $this->load->view('edit/editque3',$res);

	}

	public function edit_form4($queid)
	{
	    $this->load->model('editmodel');
	    $res['question'] = $this->editmodel->find_form4($queid);

	    $this->load->view('edit/editque4',$res);

	}

	public function update1()
	{
		$question = $this->input->post('que');
		$ch1 = $this->input->post('ch1');
		$ch2 = $this->input->post('ch2');
		$ch3 = $this->input->post('ch3');
        $queid = $this->input->post('queid');


        
		$this->load->model('editmodel');
		$query = $this->editmodel->update_form1($queid,$question,$ch1,$ch2,$ch3);
		if($query)
		{
            $this->session->set_flashdata('success','Question changed successfully');
            return redirect('forms/form1_edit');
		}

		else
		{
           $this->session->set_flashdata('failed','Oops!! Error Occured . Try Again');
            return redirect('forms/form1_edit');
		}

	}
   
    public function update2()
	{
		$question = $this->input->post('que');
		$ch1 = $this->input->post('ch1');
		$ch2 = $this->input->post('ch2');
		$ch3 = $this->input->post('ch3');
        $queid = $this->input->post('queid');


        
		$this->load->model('editmodel');
		$query = $this->editmodel->update_form2($queid,$question,$ch1,$ch2,$ch3);
		if($query)
		{
            $this->session->set_flashdata('success','Question changed successfully');
            return redirect('forms/form2_edit');
		}

		else
		{
           $this->session->set_flashdata('failed','Oops!! Error Occured . Try Again');
            return redirect('forms/form2_edit');
		}

	}

	public function update3()
	{
		$question = $this->input->post('que');
		$ch1 = $this->input->post('ch1');
		$ch2 = $this->input->post('ch2');
		$ch3 = $this->input->post('ch3');
		$ch4 = $this->input->post('ch4');
		$ch5 = $this->input->post('ch5');
        $queid = $this->input->post('queid');


        
		$this->load->model('editmodel');
		$query = $this->editmodel->update_form3($queid,$question,$ch1,$ch2,$ch3,$ch4,$ch5);
		if($query)
		{
            $this->session->set_flashdata('success','Question changed successfully');
            return redirect('forms/form3_edit');
		}

		else
		{
           $this->session->set_flashdata('failed','Oops!! Error Occured . Try Again');
            return redirect('forms/form3_edit');
		}

	}

	public function update4()
	{
		$question = $this->input->post('que');
		$ch1 = $this->input->post('ch1');
		$ch2 = $this->input->post('ch2');
		$ch3 = $this->input->post('ch3');
        $queid = $this->input->post('queid');


        
		$this->load->model('editmodel');
		$query = $this->editmodel->update_form4($queid,$question,$ch1,$ch2,$ch3);
		if($query)
		{
            $this->session->set_flashdata('success','Question changed successfully');
            return redirect('forms/form4_edit');
		}

		else
		{
           $this->session->set_flashdata('failed','Oops!! Error Occured . Try Again');
            return redirect('forms/form4_edit');
		}

	}
	 

	 public function __construct()
    {
        parent::__construct(); 
    
        if( !$this->session->userdata('admin_id'))
      return redirect('admin_login');

      

    }

	
}