<?php

class setting extends MY_Controller{

	public function admin()
	{
		  if( !$this->session->userdata('admin_id'))
      return redirect('admin_login');
		$this->load->view('setting/admin_dash');
	}

	public function update()
	{
		  if( !$this->session->userdata('admin_id'))
      return redirect('admin_login');

		$id = $this->session->userdata('admin_id');

		$current_pass = $this->input->post('pass1');
		$new_pass = $this->input->post('pass2');

		$this->load->model('admin_loginmodel');

		$result = $this->admin_loginmodel->check_pass($id, $current_pass);

		if($result)
		{
		    $res = $this->admin_loginmodel->change_pass($id,$new_pass);	
		     $this->session->set_flashdata('success','Password Changed Successfully !!!');
            return redirect('setting/admin');
		}

		else
		{
			 $this->session->set_flashdata('failed','Oops!! Current password is Incorrect');
            return redirect('setting/admin');
		}
		
    }


    	public function stud()
	{
		  if( !$this->session->userdata('user_id'))
      return redirect('stud_login');
		$this->load->view('setting/stud_dash');
	}

	public function update_stud()
	{
		  if( !$this->session->userdata('user_id'))
      return redirect('stud_login');

		$id = $this->session->userdata('user_id');

		$current_pass = $this->input->post('pass1');
		$new_pass = $this->input->post('pass2');

		$this->load->model('stud_loginmodel');

		$result = $this->stud_loginmodel->check_pass($id, $current_pass);

		if($result)
		{
		    $res = $this->stud_loginmodel->change_pass($id,$new_pass);	
		     $this->session->set_flashdata('success','Password Changed Successfully !!!');
            return redirect('setting/stud');
		}

		else
		{
			 $this->session->set_flashdata('failed','Oops!! Current password is Incorrect');
            return redirect('setting/stud');
		}
		
    }
}