<?php

 class excelmodel extends CI_Model{

    public function form1()
    {
        $query = $this->db->query("SELECT * FROM feedback_form1");

        return $query->result_array();
        
    }


    public function col1()
    {
        $q = $this->db->query("SELECT * FROM feedback_form1");

        return $q->num_fields();
    }

    
     public function form2()
    {
        $query = $this->db->query("SELECT * FROM feedback_form2");

        return $query->result_array();
        
    }

     public function form3()
    {
        $query = $this->db->query("SELECT * FROM feedback_form3");

        return $query->result_array();
        
    }

    public function form4()
    {
        $query = $this->db->query("SELECT * FROM feedback_form4");

        return $query->result_array();
        
    }

   
 } 





?>