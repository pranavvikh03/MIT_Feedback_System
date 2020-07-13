<?php

class form6 extends CI_Model{

	public function total()
	{
	
		$q = $this->db->count_all('form');

	    return $q;
	}

	public function col()
	{
		$q = $this->db->query("SELECT * FROM form");

		return $q->num_fields();
	}

	public function form_data($cnt1)
	{
		$q = $this->db->select(['que'.$cnt1])
		               ->where(['que'.$cnt1=>30])
		               ->from('form')
		               ->get();
		return $q->num_rows();
	}

	public function form_data2($cnt1)
	{
		$q = $this->db->select(['que'.$cnt1])
		               ->where(['que'.$cnt1=>20])
		               ->from('form')
		               ->get();
		return $q->num_rows();
	}

	public function form_data3($cnt1)
	{
		$q = $this->db->select(['que'.$cnt1])
		               ->where(['que'.$cnt1=>10])
		               ->from('form')
		               ->get();
		return $q->num_rows();
	}
}