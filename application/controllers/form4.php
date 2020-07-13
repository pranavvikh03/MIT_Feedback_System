<?php

class form4 extends  MY_Controller{


	 public function get_teacher()
     {
     	$this->load->model('dep_model');
     	$sub_id = $this->input->post('sub_id');
     	$teacher = $this->dep_model->get_teacher($sub_id);
     	if(count($teacher)>0)
     	{
     		$pro_select_box = '';
     		$pro_select_box .= '<option value="">Select Teacher</option>';
     		foreach ($teacher as $teacher) {
     			$pro_select_box .= '<option value="' .$teacher->teacherid. '">' .$teacher->name. '</option>';

     		}

     		echo json_encode($pro_select_box);
     	}
     
     }


     public function get_teacher2()
     {
        $this->load->model('dep_model');
        $course_id = $this->input->post('sub_id');
        $teacher = $this->dep_model->get_teacher($course_id);
        if(count($teacher)>0)
        {
            $pro_select_box = '';
            $pro_select_box .= '<option value="">Select Teacher</option>';
            foreach($teacher as $teacher){

                $pro_select_box .= '<option value="'.$teacher->teacherid.'">'.$teacher->name.'</option>';
            }

            echo json_encode($pro_select_box);
        }
     }

    
     

	public function user_data()
	{
	   $id = $this->session->userdata('user_id');

	   $this->load->model('editmodel');
       $data['questions']=$this->editmodel->form4();
       $data['no_of_questions']=count($data['questions']);

        $course = $this->input->post('subject');
        $teacher = $this->input->post('teacher');

	   $this->load->model('insertmodel');
	   $check = $this->insertmodel->isexist4($id,$teacher);

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
		    $result = $this->insertmodel->insert_form4($ans,$cnt,$course,$teacher);

		   if($result)
		   {
			  $this->session->set_flashdata('Insertion_success','Your Feedback is inserted successfully. Our Institute will be try to solve your all issues');
              return redirect('stud_forms/openform4');
		   }
	   } 

	  else
	   {
	        $this->session->set_flashdata('Insertion_failed','Sorry, You already gave feedback. ');
            return redirect('stud_forms/openform4');	
	   }	
	}

	  public function __construct()
    {
        parent::__construct(); 
    
        if( !$this->session->userdata('user_id'))
      return redirect('stud_login');

      

    }
}