<?php 

class admin extends MY_Controller{

	public function index()
	{
		$this->load->view('admin/dash');
	}


	public function form1()
	{
		
		$this->load->model('form1model');

         $cnt = $this->form1model->total();
         if($cnt)
         { 
         $cnt1 = $this->form1model->col();
       //  echo "no. of rows:".$cnt.    column :".$cnt1;

          $data['cnt'] = $cnt1-1; 
       
           $cnt1 = $cnt1-1;
          
         while($cnt1)
         {

         	$i=$cnt1;
       
         	$que[$i] = $this->form1model->form_data($cnt1);
         	$q[$i] = $this->form1model->form_data2($cnt1);
         	$qu[$i] = $this->form1model->form_data3($cnt1);
         	$data['res'.$i] = ($que[$i]/$cnt)*100;
         	$data['r'.$i] = ($q[$i]/$cnt)*100;
         	$data['re'.$i] = ($qu[$i]/$cnt)*100;
         	$cnt1--;
         }
             
       $this->load->model('editmodel');
       $data['questions']=$this->editmodel->form1();   
       $this->load->view('admin/form1',$data);
      }

      else
        {
            $this->session->set_flashdata('failed','Oops !!! No data available.');
            return redirect('admin/form1_open');
        }

	}

  public function form1_open()
  {
    $this->load->view('admin/form1');
  }

	public function form2()
	{
		
		$this->load->model('form2model');
         $cnt = $this->form2model->total();
         if($cnt)
         { 
         $cnt1 = $this->form2model->col();
       //  echo "no. of rows:".$cnt.    column :".$cnt1;

          $data['cnt'] = $cnt1-1; 
       
           $cnt1 = $cnt1-1;
         while($cnt1)
         {
         	$i=$cnt1;
         	$que[$i] = $this->form2model->form_data($cnt1);
         	$q[$i] = $this->form2model->form_data2($cnt1);
         	$qu[$i] = $this->form2model->form_data3($cnt1);
         	$data['res'.$i] = ($que[$i]/$cnt)*100;
         	$data['r'.$i] = ($q[$i]/$cnt)*100;
         	$data['re'.$i] = ($qu[$i]/$cnt)*100;
         	$cnt1--;
         }

        $this->load->model('editmodel');
       $data['questions']=$this->editmodel->form2();    
        $this->load->view('admin/form2',$data);
       } 
       else
        {
            $this->session->set_flashdata('failed','Oops !!! No data available.');
            return redirect('admin/form2_open');
        }
	}

  public function form2_open()
  {
    $this->load->view('admin/form2');
  }


	public function form3()
	{
		
		$this->load->model('form3model');
         $cnt = $this->form3model->total();
         if($cnt)
         { 
         $cnt1 = $this->form3model->col();
       //  echo "no. of rows:".$cnt.    column :".$cnt1;

          $data['cnt'] = $cnt1-1; 
       
           $cnt1 = $cnt1-1;
         while($cnt1)
         {
         	$i=$cnt1;
         	$que[$i] = $this->form3model->form_data($cnt1);
         	$q[$i] = $this->form3model->form_data2($cnt1);
         	$qu[$i] = $this->form3model->form_data3($cnt1);
          $queu[$i] = $this->form3model->form_data4($cnt1);
          $quet[$i] = $this->form3model->form_data5($cnt1);
         	$data['res'.$i] = ($que[$i]/$cnt)*100;
         	$data['r'.$i] = ($q[$i]/$cnt)*100;
         	$data['re'.$i] = ($qu[$i]/$cnt)*100;
          $data['resu'.$i] = ($queu[$i]/$cnt)*100;
          $data['rest'.$i] = ($quet[$i]/$cnt)*100;
         	$cnt1--;
         }

        $this->load->model('editmodel');
       $data['questions']=$this->editmodel->form3();    
        $this->load->view('admin/form3',$data);
       } 
       else
        {
            $this->session->set_flashdata('failed','Oops !!! No data available.');
            return redirect('admin/form3_open');
        }
	}

  public function form3_open()
  {
    $this->load->view('admin/form3');
  }


  public function form4()
  {
    $this->load->model('dep_model');
 
    $data['subject'] = $this->dep_model->get_subject();
    $this->load->view('admin/form4',$data);
  }


  public function get_form1()
  {
      $year = $this->input->post('year');
      $dept = $this->input->post('dept');
    
    if($year =='all'&& $dept=='all')
    {
      return redirect('admin/form1');
    }

    else
    {

      $this->load->model('form1model');
      if($year=='all') //Year is all for all and dept is specified
      {
          $cnt = $this->form1model->total1($dept);

        if($cnt)
         {
          $cnt1 = $this->form1model->col();
           
          $data['cnt'] = $cnt1-1; 
       
          $cnt1 = $cnt1-1;
          
         while($cnt1)
         {

          $i=$cnt1;
          
          $que[$i] = $this->form1model->form1_data($cnt1,$dept);
          $q[$i] = $this->form1model->form1_data2($cnt1,$dept);
          $qu[$i] = $this->form1model->form1_data3($cnt1,$dept);

          
           
              $data['res'.$i] = ($que[$i]/$cnt)*100;
              $data['r'.$i] = ($q[$i]/$cnt)*100;
              $data['re'.$i] = ($qu[$i]/$cnt)*100;
              $cnt1--;
          
          }
        }

        else
        {
            $this->session->set_flashdata('failed','Oops !!! No data available.');
            return redirect('admin/dash1');
        }
     
      }

      else if($dept=='all') //Year is specified and dept is all.
      {
      
          $cnt = $this->form1model->total2($year);
        
          if($cnt)
          {
             $cnt1 = $this->form1model->col();
           
             $data['cnt'] = $cnt1-1; 
       
             $cnt1 = $cnt1-1;
          
             while($cnt1)
             {

                $i=$cnt1;
          
                $que[$i] = $this->form1model->form2_data($cnt1,$year);
                $q[$i] = $this->form1model->form2_data2($cnt1,$year);
                $qu[$i] = $this->form1model->form2_data3($cnt1,$year);

          
                $data['res'.$i] = ($que[$i]/$cnt)*100;
                $data['r'.$i] = ($q[$i]/$cnt)*100;
                $data['re'.$i] = ($qu[$i]/$cnt)*100;
                $cnt1--;
          }
        }

        else
        {
            $this->session->set_flashdata('failed','Oops !!! No data available.');
            return redirect('admin/dash1');
        }
      }

      else  //both year and dept are specified
      {
        $cnt = $this->form1model->total3 ($year,$dept);

        if($cnt)
        {
          $cnt1 = $this->form1model->col();
           
          $data['cnt'] = $cnt1-1; 
       
          $cnt1 = $cnt1-1;
          
          while($cnt1)
          {

          $i=$cnt1;
          
          $que[$i] = $this->form1model->form3_data($cnt1, $year, $dept);
          $q[$i] = $this->form1model->form3_data2($cnt1, $year, $dept);
          $qu[$i] = $this->form1model->form3_data3($cnt1,$year, $dept);

          
           
              $data['res'.$i] = ($que[$i]/$cnt)*100;
              $data['r'.$i] = ($q[$i]/$cnt)*100;
              $data['re'.$i] = ($qu[$i]/$cnt)*100;
              $cnt1--;
          
          }
        }

        else
        {
            $this->session->set_flashdata('failed','Oops !!! No data available.');
            return redirect('admin/dash1');
        }
      }
      

       $this->load->model('editmodel');
       $data['questions']=$this->editmodel->form1();   
       $data['dept'] = $dept;
       $data['year'] = $year;
            
      $this->load->view('admin/dash1',$data);
    }
  }

//Specified review for form 2
  public function get_form2()
  {
      $year = $this->input->post('year');
      $dept = $this->input->post('dept');
    
    if($year =='all'&& $dept=='all')
    {
      return redirect('admin/form2');
    }

    else
    {

      $this->load->model('form2model');
      if($year=='all') //Year is all for all and dept is specified
      {
          $cnt = $this->form2model->total1($dept);

        if($cnt)
         {
          $cnt1 = $this->form2model->col();
           
          $data['cnt'] = $cnt1-1; 
       
          $cnt1 = $cnt1-1;
          
         while($cnt1)
         {

          $i=$cnt1;
          
          $que[$i] = $this->form2model->form1_data($cnt1,$dept);
          $q[$i] = $this->form2model->form1_data2($cnt1,$dept);
          $qu[$i] = $this->form2model->form1_data3($cnt1,$dept);

          
           
              $data['res'.$i] = ($que[$i]/$cnt)*100;
              $data['r'.$i] = ($q[$i]/$cnt)*100;
              $data['re'.$i] = ($qu[$i]/$cnt)*100;
              $cnt1--;
          
          }
        }

        else
        {
            $this->session->set_flashdata('failed','Oops !!! No data available.');
            return redirect('admin/dash2');
        }
     
      }

      else if($dept=='all') //Year is specified and dept is all.
      {
      
          $cnt = $this->form2model->total2($year);
        
          if($cnt)
          {
             $cnt1 = $this->form2model->col();
           
             $data['cnt'] = $cnt1-1; 
       
             $cnt1 = $cnt1-1;
          
             while($cnt1)
             {

                $i=$cnt1;
          
                $que[$i] = $this->form2model->form2_data($cnt1,$year);
                $q[$i] = $this->form2model->form2_data2($cnt1,$year);
                $qu[$i] = $this->form2model->form2_data3($cnt1,$year);

          
                $data['res'.$i] = ($que[$i]/$cnt)*100;
                $data['r'.$i] = ($q[$i]/$cnt)*100;
                $data['re'.$i] = ($qu[$i]/$cnt)*100;
                $cnt1--;
          }
        }

        else
        {
            $this->session->set_flashdata('failed','Oops !!! No data available.');
            return redirect('admin/dash2');
        }
      }

      else  //both year and dept are specified
      {
        $cnt = $this->form2model->total3 ($year,$dept);

        if($cnt)
        {
          $cnt1 = $this->form2model->col();
           
          $data['cnt'] = $cnt1-1; 
       
          $cnt1 = $cnt1-1;
          
          while($cnt1)
          {

          $i=$cnt1;
          
          $que[$i] = $this->form2model->form3_data($cnt1, $year, $dept);
          $q[$i] = $this->form2model->form3_data2($cnt1, $year, $dept);
          $qu[$i] = $this->form2model->form3_data3($cnt1,$year, $dept);

          
           
              $data['res'.$i] = ($que[$i]/$cnt)*100;
              $data['r'.$i] = ($q[$i]/$cnt)*100;
              $data['re'.$i] = ($qu[$i]/$cnt)*100;
              $cnt1--;
          
          }
        }

        else
        {
            $this->session->set_flashdata('failed','Oops !!! No data available.');
            return redirect('admin/dash2');
        }
      }
      

       $this->load->model('editmodel');
       $data['questions']=$this->editmodel->form2();   
       
       $data['dept'] = $dept;
       $data['year'] = $year;      
      $this->load->view('admin/dash2',$data);
    }
  }


  //Specified review for form 3
  public function get_form3()
  {
      $year = $this->input->post('year');
      $dept = $this->input->post('dept');
    
    if($year =='all'&& $dept=='all')
    {
      return redirect('admin/form3');
    }

    else
    {

      $this->load->model('form3model');
      if($year=='all') //Year is all for all and dept is specified
      {
          $cnt = $this->form3model->total1($dept);

        if($cnt)
         {
          $cnt1 = $this->form3model->col();
           
          $data['cnt'] = $cnt1-1; 
       
          $cnt1 = $cnt1-1;
          
         while($cnt1)
         {

          $i=$cnt1;
          
          $que[$i] = $this->form3model->form1_data($cnt1,$dept);
          $q[$i] = $this->form3model->form1_data2($cnt1,$dept);
          $qu[$i] = $this->form3model->form1_data3($cnt1,$dept);
          $queu[$i] = $this->form3model->form1_data4($cnt1,$dept);
          $quet[$i] = $this->form3model->form1_data5($cnt1,$dept);
          
           
              $data['res'.$i] = ($que[$i]/$cnt)*100;
              $data['r'.$i] = ($q[$i]/$cnt)*100;
              $data['re'.$i] = ($qu[$i]/$cnt)*100;
              $data['resu'.$i] = ($queu[$i]/$cnt)*100;
              $data['rest'.$i] = ($quet[$i]/$cnt)*100;
              $cnt1--;
          
          }
        }

        else
        {
            $this->session->set_flashdata('failed','Oops !!! No data available.');
            return redirect('admin/dash3');
        }
     
      }

      else if($dept=='all') //Year is specified and dept is all.
      {
      
          $cnt = $this->form3model->total2($year);
        
          if($cnt)
          {
             $cnt1 = $this->form3model->col();
           
             $data['cnt'] = $cnt1-1; 
       
             $cnt1 = $cnt1-1;
          
             while($cnt1)
             {

                $i=$cnt1;
          
                $que[$i] = $this->form3model->form2_data($cnt1,$year);
                $q[$i] = $this->form3model->form2_data2($cnt1,$year);
                $qu[$i] = $this->form3model->form2_data3($cnt1,$year);
                $queu[$i] = $this->form3model->form2_data4($cnt1,$year);
                $quet[$i] = $this->form3model->form2_data5($cnt1,$year);
          
                $data['res'.$i] = ($que[$i]/$cnt)*100;
                $data['r'.$i] = ($q[$i]/$cnt)*100;
                $data['re'.$i] = ($qu[$i]/$cnt)*100;
                $data['resu'.$i] = ($queu[$i]/$cnt)*100;
                $data['rest'.$i] = ($quet[$i]/$cnt)*100;
                $cnt1--;
          }
        }

        else
        {
            $this->session->set_flashdata('failed','Oops !!! No data available.');
            return redirect('admin/dash3');
        }
      }

      else  //both year and dept are specified
      {
        $cnt = $this->form3model->total3 ($year,$dept);

        if($cnt)
        {
          $cnt1 = $this->form3model->col();
           
          $data['cnt'] = $cnt1-1; 
       
          $cnt1 = $cnt1-1;
          
          while($cnt1)
          {

          $i=$cnt1;
          
          $que[$i] = $this->form3model->form3_data($cnt1, $year, $dept);
          $q[$i] = $this->form3model->form3_data2($cnt1, $year, $dept);
          $qu[$i] = $this->form3model->form3_data3($cnt1,$year, $dept);
          $queu[$i] = $this->form3model->form3_data4($cnt1,$year, $dept);
          $quet[$i] = $this->form3model->form3_data5($cnt1,$year, $dept);          
           
              $data['res'.$i] = ($que[$i]/$cnt)*100;
              $data['r'.$i] = ($q[$i]/$cnt)*100;
              $data['re'.$i] = ($qu[$i]/$cnt)*100;
              $data['resu'.$i] = ($queu[$i]/$cnt)*100;
              $data['rest'.$i] = ($quet[$i]/$cnt)*100;
              $cnt1--;
          
          }
        }

        else
        {
            $this->session->set_flashdata('failed','Oops !!! No data available.');
            return redirect('admin/dash3');
        }
      }
      

       $this->load->model('editmodel');
       $data['questions']=$this->editmodel->form3();   
        $data['dept'] = $dept;
       $data['year'] = $year;
            
      $this->load->view('admin/dash3',$data);
    }
  }



  public function get_form4()
  {
    $teacher = $this->input->post('subject');
    $course = $this->input->post('teacher');
 
    $this->load->model('form4model');
    $cnt = $this->form4model->total($teacher);

     if($cnt)
      {
        $cnt1 = $this->form4model->col();
        $data['cnt'] = $cnt1-3; 
        $cnt1 = $cnt1-3;
          
        while($cnt1)
         {
            $i=$cnt1;
        
         $que[$i] = $this->form4model->form_data($cnt1,$teacher);
         $q[$i] = $this->form4model->form_data2($cnt1,$teacher);
         $qu[$i] = $this->form4model->form_data3($cnt1,$teacher);

          
           
          $data['res'.$i] = ($que[$i]/$cnt)*100;
          $data['r'.$i] = ($q[$i]/$cnt)*100;
          $data['re'.$i] = ($qu[$i]/$cnt)*100;
          $cnt1--;
          
          }
        }

        else
        {
            $this->session->set_flashdata('failed','Oops !!! No data available.');
            return redirect('admin/dash4');
        } 

       $this->load->model('editmodel');
       $data['questions']=$this->editmodel->form4();   
       $data['course'] = $course;
       $data['teacher'] = $teacher;
            
      $this->load->view('admin/dash4',$data);   

  }

  public function dash1()
  {
    $this->load->view('admin/dash1');
  }

  public function dash2()
  {
    $this->load->view('admin/dash2');
  }
  public function dash3()
  {
    $this->load->view('admin/dash3');
  }

  public function dash4()
  {
    $this->load->view('admin/dash4');
  }


	  
    public function __construct()
    {
        parent::__construct(); 
    
        if( !$this->session->userdata('admin_id'))
      return redirect('admin_login');

    }
}