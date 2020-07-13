<?php

class form4model extends CI_Model{

	public function total($teacher)
	{
	
		$q = $this->db->where(['courseid'=>$teacher])
		              ->get('feedback_form4');

	    return $q->num_rows();
	}

	

	public function col()
	{
		$q = $this->db->query("SELECT * FROM feedback_form4");

		return $q->num_fields();
	}

	public function form_data($cnt1,$teacher)
	{
		$q = $this->db->select(['que'.$cnt1])
		               ->where(['que'.$cnt1=>3, 'courseid'=>$teacher])
		               ->from('feedback_form4')
		               ->get();
		return $q->num_rows();
	}

	

	public function form_data2($cnt1,$teacher)
	{
		$q = $this->db->select(['que'.$cnt1])
		               ->where(['que'.$cnt1=>2, 'courseid'=>$teacher])
		               ->from('feedback_form4')
		               ->get();
		return $q->num_rows();
	}

		


	public function form_data3($cnt1,$teacher)
	{
		$q = $this->db->select(['que'.$cnt1])
		               ->where(['que'.$cnt1=>1, 'courseid'=>$teacher])
		               ->from('feedback_form4')
		               ->get();
		return $q->num_rows();
	}

	 
}