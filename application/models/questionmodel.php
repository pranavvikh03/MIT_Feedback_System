<?php

class questionmodel extends CI_Model{

	public function getQuestions()
  {
     $this->db->select("queID, question, choice1, choice2, choice3");
     $this->db->from("questions");
    
     $query = $this->db->get();
    
     return $query->result();
    
     $num_data_returned = $query->num_rows();
    
     if ($num_data_returned < 1) {
       echo "There is no data in the database";
      exit(); 
    }
  }



  public function getform1()
  {
     $this->db->select("queID, question, choice1, choice2, choice3");
     $this->db->from("form1_que");
    
     $query = $this->db->get();
    
     return $query->result();
    
     $num_data_returned = $query->num_rows();
    
     if ($num_data_returned < 1) {
       echo "There is no data in the database";
      exit(); 
  }

 } 

  public function getform2()
  {
     $this->db->select("queID, question, choice1, choice2, choice3");
     $this->db->from("form2_que");
    
     $query = $this->db->get();
    
     return $query->result();
    
     $num_data_returned = $query->num_rows();
    
     if ($num_data_returned < 1) {
       echo "There is no data in the database";
      exit(); 
   }
  } 

  public function getform3()
  {
     $this->db->select("queID, question, choice1, choice2, choice3, choice4, choice5");
     $this->db->from("form3_que");
    
     $query = $this->db->get();
    
     return $query->result();
    
     $num_data_returned = $query->num_rows();
    
     if ($num_data_returned < 1) {
       echo "There is no data in the database";
      exit(); 
    }
  }

  public function getform4()
  {
     $this->db->select("queID, question, choice1, choice2, choice3");
     $this->db->from("form4_que");
    
     $query = $this->db->get();
    
     return $query->result();
    
     $num_data_returned = $query->num_rows();
    
     if ($num_data_returned < 1) {
       echo "There is no data in the database";
      exit(); 
    }
  }

  
  }
