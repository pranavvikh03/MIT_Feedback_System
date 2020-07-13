<?php

class insertmodel extends CI_Model{


    public function trial($ans,$cnt)
    {

           $cn= $cnt-1;
           $i=$cn;
     
           $sql = array();
          foreach($ans as $row)
          {
             $sql['id'] = $ans[$cnt-1];	
            while($cn!=0)
             {
              	 	$sql['que'.$i] = $ans[$cn-1];
              	 	$cn--;
              	 	$i--;
              	 }

              }

              print_r($sql);

              $this->db->insert('form',$sql);
    	
    }



   public function insert_form1($ans,$cnt)
    {
          $total = $cnt-1;
          $i=$total;
     
           $sql = array();
          foreach($ans as $row)
          {
             $sql['id'] = $ans[$cnt-1];	
               while($total!=0)
               {
              	 	$sql['que'.$i] = $ans[$total-1];
              	 	$total--;
              	 	$i--;
                }

           }
           

             $query = $this->db->insert('feedback_form1',$sql);
             return $query;
    	
    }

	public function isexist1($id)
	{
		 $q = $this->db->where(['id'=>$id])
                         ->get('feedback_form1');

         return $q->num_rows();
	}

	
	public function insert_form2($ans,$cnt)
    {
          $total = $cnt-1;
          $i=$total;
     
           $sql = array();
          foreach($ans as $row)
          {
             $sql['id'] = $ans[$cnt-1];	
               while($total!=0)
               {
              	 	$sql['que'.$i] = $ans[$total-1];
              	 	$total--;
              	 	$i--;
                }

           }


             $query = $this->db->insert('feedback_form2',$sql);
             return $query;
    	
    }

	public function isexist2($id)
	{
		 $q = $this->db->where(['id'=>$id])
                         ->get('feedback_form2');

         return $q->num_rows();
	}

    
     public function insert_form3($ans,$cnt)
    {
          $total = $cnt-1;
          $i=$total;
     
           $sql = array();
          foreach($ans as $row)
          {
             $sql['id'] = $ans[$cnt-1];	
               while($total!=0)
               {
              	 	$sql['que'.$i] = $ans[$total-1];
              	 	$total--;
              	 	$i--;
                }

           }


             $query = $this->db->insert('feedback_form3',$sql);
             return $query;
    	
    }

	public function isexist3($id)
	{
		 $q = $this->db->where(['id'=>$id])
                         ->get('feedback_form3');

         return $q->num_rows();
	}


  public function insert_form4($ans,$cnt,$course,$teacher)
    {
          $total = $cnt-1;
          $i=$total;
     
           $sql = array();
          foreach($ans as $row)
          {
             $sql['id'] = $ans[$cnt-1]; 
               while($total!=0)
               {
                  $sql['que'.$i] = $ans[$total-1];
                  $total--;
                  $i--;
                }

           }

            $sql['courseid'] = $course;
            $sql['teacherid']= $teacher;
             $query = $this->db->insert('feedback_form4',$sql);
             return $query;
      
    }

  public function isexist4($id,$teacher)
  {
     $q = $this->db->where(['id'=>$id,'teacherid'=>$teacher])
                         ->get('feedback_form4');

         return $q->num_rows();
  }

}