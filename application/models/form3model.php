<?php

class form3model extends CI_Model{

	public function total()
	{
	
		$q = $this->db->count_all('feedback_form3');

	    return $q;
	}

	public function total1($dept)
	{
		 $q = $this->db->query("SELECT id FROM feedback_form3 where id IN (select id from stud_info where dept = '$dept')");

		 return $q->num_rows();
	}

	public function total2($year)
	{
		 $q = $this->db->query("SELECT id FROM feedback_form3 where id IN (select id from stud_info where year = $year)");

		 return $q->num_rows();
	}

	public function total3($year, $dept)
	{
		 $q = $this->db->query("SELECT id FROM feedback_form3 where id IN (select id from stud_info where year = $year and dept = '$dept')");

		 return $q->num_rows();
	}

	public function col()
	{
		$q = $this->db->query("SELECT * FROM feedback_form3");

		return $q->num_fields();
	}

	public function form_data($cnt1)
	{
		$q = $this->db->select(['que'.$cnt1])
		               ->where(['que'.$cnt1=>5])
		               ->from('feedback_form3')
		               ->get();
		return $q->num_rows();
	}

	 public function form1_data($cnt1, $dept)
	{
		$a = 'que'.$cnt1;
		$q = $this->db->query("SELECT $a from feedback_form3 where id IN(select id from stud_info where dept = '$dept') and $a = 5");
		return $q->num_rows();
	}	

	public function form2_data($cnt1, $year)
	{
		$a = 'que'.$cnt1;
		$q = $this->db->query("SELECT $a from feedback_form3 where id IN(select id from stud_info where year = $year) and $a = 5");
		return $q->num_rows();
	}

	public function form3_data($cnt1, $year , $dept)
	{
		$a = 'que'.$cnt1;
		$q = $this->db->query("SELECT $a from feedback_form3 where id IN(select id from stud_info where year = $year and dept = '$dept') and $a = 5");
		return $q->num_rows();
	}

	public function form_data2($cnt1)
	{
		$q = $this->db->select(['que'.$cnt1])
		               ->where(['que'.$cnt1=>4])
		               ->from('feedback_form3')
		               ->get();
		return $q->num_rows();
	}

	public function form1_data2($cnt1, $dept)
	{
		$a = 'que'.$cnt1;
		$q = $this->db->query("SELECT $a from feedback_form3 where id IN(select id from stud_info where dept = '$dept') and $a = 4");
		return $q->num_rows();
	}	

	public function form2_data2($cnt1, $year)
	{
		$a = 'que'.$cnt1;
		$q = $this->db->query("SELECT $a from feedback_form3 where id IN(select id from stud_info where year = $year) and $a = 4");
		return $q->num_rows();
	}

	public function form3_data2($cnt1, $year , $dept)
	{
		$a = 'que'.$cnt1;
		$q = $this->db->query("SELECT $a from feedback_form3 where id IN(select id from stud_info where year = $year and dept = '$dept') and $a = 4");
		return $q->num_rows();
	}

	public function form_data3($cnt1)
	{
		$q = $this->db->select(['que'.$cnt1])
		               ->where(['que'.$cnt1=>3])
		               ->from('feedback_form3')
		               ->get();
		return $q->num_rows();
	}

	public function form1_data3($cnt1, $dept)
	{
		$a = 'que'.$cnt1;
		$q = $this->db->query("SELECT $a from feedback_form3 where id IN(select id from stud_info where dept = '$dept') and $a = 3");
		return $q->num_rows();
	}	

	public function form2_data3($cnt1, $year)
	{
		$a = 'que'.$cnt1;
		$q = $this->db->query("SELECT $a from feedback_form3 where id IN(select id from stud_info where year = $year) and $a = 3");
		return $q->num_rows();
	}

	public function form3_data3($cnt1, $year , $dept)
	{
		$a = 'que'.$cnt1;
		$q = $this->db->query("SELECT $a from feedback_form3 where id IN(select id from stud_info where year = $year and dept = '$dept') and $a = 3");
		return $q->num_rows();
	}

	public function form_data4($cnt1)
	{
		$q = $this->db->select(['que'.$cnt1])
		               ->where(['que'.$cnt1=>2])
		               ->from('feedback_form3')
		               ->get();
		return $q->num_rows();
	}

	public function form1_data4($cnt1, $dept)
	{
		$a = 'que'.$cnt1;
		$q = $this->db->query("SELECT $a from feedback_form3 where id IN(select id from stud_info where dept = '$dept') and $a = 2");
		return $q->num_rows();
	}	

	public function form2_data4($cnt1, $year)
	{
		$a = 'que'.$cnt1;
		$q = $this->db->query("SELECT $a from feedback_form3 where id IN(select id from stud_info where year = $year) and $a = 2");
		return $q->num_rows();
	}

	public function form3_data4($cnt1, $year , $dept)
	{
		$a = 'que'.$cnt1;
		$q = $this->db->query("SELECT $a from feedback_form3 where id IN(select id from stud_info where year = $year and dept = '$dept') and $a = 2");
		return $q->num_rows();
	}

	public function form_data5($cnt1)
	{
		$q = $this->db->select(['que'.$cnt1])
		               ->where(['que'.$cnt1=>1])
		               ->from('feedback_form3')
		               ->get();
		return $q->num_rows();
	}

	public function form1_data5($cnt1, $dept)
	{
		$a = 'que'.$cnt1;
		$q = $this->db->query("SELECT $a from feedback_form3 where id IN(select id from stud_info where dept = '$dept') and $a = 1");
		return $q->num_rows();
	}	

	public function form2_data5($cnt1, $year)
	{
		$a = 'que'.$cnt1;
		$q = $this->db->query("SELECT $a from feedback_form3 where id IN(select id from stud_info where year = $year) and $a = 1");
		return $q->num_rows();
	}

	public function form3_data5($cnt1, $year , $dept)
	{
		$a = 'que'.$cnt1;
		$q = $this->db->query("SELECT $a from feedback_form3 where id IN(select id from stud_info where year = $year and dept = '$dept') and $a = 1");
		return $q->num_rows();
	}
}