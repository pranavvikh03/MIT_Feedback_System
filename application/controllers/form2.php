<?php

class form2 extends  MY_Controller{

	public function user_data()
	{
	   $id = $this->session->userdata('user_id');

	   $this->load->model('editmodel');
       $data['questions']=$this->editmodel->form2();
       $data['no_of_questions']=count($data['questions']);

	   $this->load->model('insertmodel');
	   $check = $this->insertmodel->isexist2($id);

	    if($check<1)
	    { 	
		    

            foreach ($data['questions'] as $row) 
            {
                 $q_no = $row->queID;
                 $ans[] = $this->input->post('que'.$q_no);
            }

            $ans[] = $id;
            $cnt = count($ans);

		    $this->load->model('insertmodel');
		    $result = $this->insertmodel->insert_form2($ans,$cnt);

		   if($result)
		   {
			  $this->session->set_flashdata('Insertion_success','Your Feedback is inserted successfully. Our Institute will be try to solve your all issues');
              return redirect('stud_forms/openform2');
		   }
	   } 

	  else
	   {
	        $this->session->set_flashdata('Insertion_failed','Sorry, You already gave feedback. ');
            return redirect('stud_forms/openform2');	
	   }	
	}

	  public function __construct()
    {
        parent::__construct(); 
    
        if( !$this->session->userdata('user_id'))
      return redirect('stud_login');

      

    }
}