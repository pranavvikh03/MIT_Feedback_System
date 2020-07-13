<?php

class stud_reviewmodel extends CI_Model{

	public function stud_info()
	{
		$query = $this->db->select(['id','username','name','dept','year'])
		                   ->from('stud_info')
		                   ->get();

	    return $query->result();	                   
	}

	public function get_data($year, $dept)
	{
		$query = $this->db->select(['id','username','name','dept','year'])
		                   ->from('stud_info')
		                   ->where(['year'=>$year, 'dept'=>$dept])
		                   ->get();

	    return $query->result();	                   
	}

	public function get_year($year)
	{
		$query = $this->db->select(['id','username','name','dept','year'])
		                   ->from('stud_info')
		                   ->where(['year'=>$year])
		                   ->get();

	    return $query->result();	                   
	}

	public function get_dept($dept)
	{
		$query = $this->db->select(['id','username','name','dept','year'])
		                   ->from('stud_info')
		                   ->where(['dept'=>$dept])
		                   ->get();

	    return $query->result();	                   
	}
}