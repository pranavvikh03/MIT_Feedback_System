<?php

class registermodel extends CI_Model{

	public function exist($username)
	{
		$q = $this->db->where(['username'=>$username])
                         ->get('stud_info');

         return $q->num_rows();
	}


	public function add($username, $password, $name, $dept, $year)
	{
		$q = $this->db->insert('stud_info',['username'=>$username , 'password'=>$password, 'name'=>$name, 'dept'=>$dept, 'year'=>$year]);

		return $q;
	}

	public function exist_admin($username)
	{
		$q = $this->db->where(['username'=>$username])
                         ->get('admin_info');

         return $q->num_rows();
	}


	public function add_admin($username, $password)
	{
		$q = $this->db->insert('admin_info',['username'=>$username , 'password'=>$password]);

		return $q;
	}
}