<?php

 Class stud_loginmodel extends CI_Model {

   public function login_valid($username,$password)
   {

          $q = $this->db->where(['username'=>$username, 'password'=>$password])
                         ->get('stud_info');


           if($q->num_rows()){

           
           return $q->row()->id;
           return $q->row()->$id;   
           }              
          
          else{

            return FALSE;
          }
   }

public function check_pass($id, $current_pass)
   {

          $q = $this->db->where(['id'=>$id, 'password'=>$current_pass])
                         ->get('stud_info');
           return $q->num_rows();
   }

   
   public function change_pass($id, $new_pass)
   {

      $sql = "UPDATE stud_info SET password = ? WHERE id = ?";
      $q = $this->db->query($sql, array($new_pass , $id ));


      return $q;                  
   }



}
