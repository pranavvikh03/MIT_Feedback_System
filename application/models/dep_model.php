<?php


class dep_model extends CI_Model{

   public function __construct()
   {
   	   parent::__construct(); 
   }

   public function get_course($id)
	{

		$sql = $this->db->select(['dept'])
		                ->where(['id'=>$id])
		                ->from('stud_info')
		                ->get();

        $dept = $sql->row()->dept;
		$q = $this->db->select(['deptid'])
		                  ->where(['dept_name'=>$dept])
		                  ->get('department');
		
		$deptid = $q->row()->deptid;
        $query = $this->db->where(['deptid'=>$deptid])
                           ->get('course');
		return $query->result();

        
	}

	public function get_teacher($course_id)
	{
		$query = $this->db->get_where('teacher', array('courseid' => $course_id));
		return $query->result();
	}


   /*public function get_subject($dept_id)
	{
		$query = $this->db->get_where('course', array('deptid' => $dept_id));
		return $query->result();

	}*/

   public function get_subject()
    {
		$query = $this->db->get('course');
		return $query->result();
	}

}