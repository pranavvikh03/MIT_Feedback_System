<?php

class editmodel extends CI_Model{

	public function form1()
	{

		$query = $this->db->select(['question','queID'])
		                  ->from('form1_que')
		                  ->get();

		 return $query->result();
	}


	public function form2()
	{

		$query = $this->db->select(['question','queID'])
		                  ->from('form2_que')
		                  ->get();

		 return $query->result();
	}

	public function form3()
	{

		$query = $this->db->select(['question','queID'])
		                  ->from('form3_que')
		                  ->get();

		 return $query->result();
	}

	public function form4()
	{

		$query = $this->db->select(['question','queID'])
		                  ->from('form4_que')
		                  ->get();

		 return $query->result();
	}
//Add column
	public function add_form1($id,$que,$ch1,$ch2,$ch3)
	{
		$query = $this->db->insert('form1_que',['queID'=>$id,'question'=>$que,'choice1'=>$ch1,'choice2'=>$ch2,'choice3'=>$ch3]);

		if($query)
		{
			$q = $this->db ->where(['question'=>$que,'choice1'=>$ch1,'choice2'=>$ch2,'choice3'=>$ch3])
			              ->from('form1_que')
			              ->get();
			return $q->row()->queID;
			return $q->row()->$queID;               
		}
		
	}

	public function add_col1($id)
	{
		
        $col = 'que'.$id;

		$q = $this->db->query("ALTER TABLE `feedback_form1` ADD $col INT NOT NULL");
		
		return $q;
    }

	public function add_form2($id,$que,$ch1,$ch2,$ch3)
	{
		$query = $this->db->insert('form2_que',['queID'=>$id,'question'=>$que,'choice1'=>$ch1,'choice2'=>$ch2,'choice3'=>$ch3]);

		if($query)
		{
			$q = $this->db ->where(['question'=>$que,'choice1'=>$ch1,'choice2'=>$ch2,'choice3'=>$ch3])
			              ->from('form2_que')
			              ->get();
			return $q->row()->queID;
			return $q->row()->$queID;               
		}

	
	}

	public function add_col2($id)
	{
		
        $col = 'que'.$id;

		$q = $this->db->query("ALTER TABLE `feedback_form2` ADD $col INT NOT NULL");
		
		return $q;
    }

	public function add_form3($id,$que,$ch1,$ch2,$ch3,$ch4,$ch5)
	{
		$query = $this->db->insert('form3_que',['queID'=>$id,'question'=>$que,'choice1'=>$ch1,'choice2'=>$ch2,'choice3'=>$ch3,'choice4'=>$ch4,'choice5'=>$ch5]);

	    if($query)
		{
			$q = $this->db ->where(['question'=>$que,'choice1'=>$ch1,'choice2'=>$ch2,'choice3'=>$ch3,'choice4'=>$ch4,'choice5'=>$ch5])
			              ->from('form3_que')
			              ->get();
			return $q->row()->queID;
			return $q->row()->$queID;               
		}
	}

	public function add_col3($id)
	{
		
        $col = 'que'.$id;

		$q = $this->db->query("ALTER TABLE `feedback_form3` ADD $col INT NOT NULL");
		
		return $q;
    }

   public function add_form4($id,$que,$ch1,$ch2,$ch3)
	{
		$query = $this->db->insert('form4_que',['queID'=>$id,'question'=>$que,'choice1'=>$ch1,'choice2'=>$ch2,'choice3'=>$ch3]);

		 $col = 'que'.$id;

		$q = $this->db->query("ALTER TABLE `feedback_form4` ADD $col INT NOT NULL");
		
		return $q;
    }

	public function getid1()
	{
		$query = $this->db->get('form1_que');

		return $query->last_row()->queID;
    } 

    public function getid2()
	{
		$query = $this->db->get('form2_que');

		return $query->last_row()->queID;
    } 

    public function getid3()
	{
		$query = $this->db->get('form3_que');

		return $query->last_row()->queID;
    } 

    public function getid4()
	{
		$query = $this->db->get('form4_que');

		return $query->last_row()->queID;
    } 


//


// Deleteing question
    public function delete_form1($queid)
	{
		$query = $this->db->query("Delete from form1_que where queID = $queid ");

		return $query;
	}

      public function delete_col1($queid)
	{
         $col = 'que'.$queid;
		$query = $this->db->query("ALTER TABLE `feedback_form1` DROP $col");

		return $query;
	}	

	public function delete_form2($queid)
	{
		$query = $this->db->query("Delete from form2_que where queID = $queid ");

		return $query;
	}

	  public function delete_col2($queid)
	{
         $col = 'que'.$queid;
		$query = $this->db->query("ALTER TABLE `feedback_form2` DROP $col");

		return $query;
	}


    public function delete_form3($queid)
	{
		$query = $this->db->query("Delete from form3_que where queID = $queid ");

		return $query;
	}

	  public function delete_col3($queid)
	{
         $col = 'que'.$queid;
		$query = $this->db->query("ALTER TABLE `feedback_form3` DROP $col");

		return $query;
	}

	public function delete_form4($queid)
	{
		$query = $this->db->query("Delete from form4_que where queID = $queid ");

		return $query;
	}

	  public function delete_col4($queid)
	{
         $col = 'que'.$queid;
		$query = $this->db->query("ALTER TABLE `feedback_form4` DROP $col");

		return $query;
	}
//
	


	public function edit_que($id,$que,$ch1,$ch2,$ch3)
	{
		$q = "Update questions set que=?, choice1=?, choice2=?, choice3=? where queID = ? ";
       $query = $this->db->query($q,array($que,$ch1,$ch2,$ch3,$id));

       return $query;
	}

	public function find_form1($queid)
	{
		$q = $this->db->where(['queID'=>$queid])
		             ->get('form1_que');

		 return $q->result();            
	}

	public function find_form2($queid)
	{
		$q = $this->db->where(['queID'=>$queid])
		             ->get('form2_que');

		 return $q->result();            
	}

	public function find_form3($queid)
	{
		$q = $this->db->where(['queID'=>$queid])
		             ->get('form3_que');

		 return $q->result();            
	}

	public function find_form4($queid)
	{
		$q = $this->db->where(['queID'=>$queid])
		             ->get('form4_que');

		 return $q->result();            
	}


	public function update_form1($queid, $question, $ch1, $ch2, $ch3)
	{
		$sql = "UPDATE form1_que SET question=?, choice1=?, choice2=? , choice3=? WHERE queID = ?";

		$query = $this->db->query($sql, array($question , $ch1,$ch2,$ch3,$queid));

		return $query;
	}

	public function update_form2($queid, $question, $ch1, $ch2, $ch3)
	{
		$sql = "UPDATE form2_que SET question=?, choice1=?, choice2=? , choice3=? WHERE queID = ?";

		$query = $this->db->query($sql, array($question , $ch1,$ch2,$ch3,$queid));

		return $query;
	}

	public function update_form3($queid, $question, $ch1, $ch2, $ch3,$ch4,$ch5)
	{
		$sql = "UPDATE form3_que SET question=?, choice1=?, choice2=? , choice3=?, choice4= ?, choice5=? WHERE queID = ?";

		$query = $this->db->query($sql, array($question , $ch1,$ch2,$ch3,$ch4,$ch5,$queid));

		return $query;
	}

    public function update_form4($queid, $question, $ch1, $ch2, $ch3)
	{
		$sql = "UPDATE form4_que SET question=?, choice1=?, choice2=? , choice3=? WHERE queID = ?";

		$query = $this->db->query($sql, array($question , $ch1,$ch2,$ch3,$queid));

		return $query;
	}	



	public function delete_que($queid)
	{
		$query = $this->db->query("Delete from questions where queID = $queid ");

		return $query;
	}
}