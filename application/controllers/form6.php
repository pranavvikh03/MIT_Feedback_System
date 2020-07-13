<?php

class form6 extends MY_Controller{

	public function insert()
	{

      $this->load->model('editmodel');
      $data['questions']=$this->editmodel->form1();
     $data['no_of_questions']=count($data['questions']);


     foreach ($data['questions'] as $row) 
     {
        $q_no = $row->queID;
        $ans[] = $this->input->post('r'.$q_no);

        
     }


     $ans[]=1;

      print_r($ans);

       $cnt = count($ans);
       echo "<br/>";
       echo $cnt;


       $this->load->model('insertmodel');
        $this->insertmodel->trial($ans,$cnt);

     
	}

	public function __construct()
    {
        parent::__construct(); 
    
        if( ! $this->session->userdata('user_id'))
      return redirect('stud_login');

    }
}