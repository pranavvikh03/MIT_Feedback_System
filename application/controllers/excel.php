<?php

class excel extends MY_Controller{

	
   public function form1()
  {
    $this->load->model('excelmodel');
    $output1 = '';
    $result= $this->excelmodel->form1();
    $output1 .= '<table class="table" bordered="1" >
         <tr>
           <th>user_id</th>
           <th>que1</th>
           <th>que2</th>
           <th>que3</th>
           <th>que4</th>
           <th>que5</th>
           <th>que6</th>
           <th>que7</th>
           <th>que8</th>
           <th>que9</th>
           <th>que10</th>
           <th>que11</th>
           <th>que12</th>
           <th>que13</th>
           <th>que14</th>
           <th>que15</th>
           <th>que16</th>
           <th>que17</th>
           
          </tr> 
       ';

      foreach ($result as  $op) 
       {
           $output1 .= '
               <tr>
                  <td>'.$op["id"].'</td>
                  <td>'.$op["que1"].'</td>
                  <td>'.$op["que2"].'</td>
                  <td>'.$op["que3"].'</td>
                  <td>'.$op["que4"].'</td>
                  <td>'.$op["que5"].'</td>
                  <td>'.$op["que6"].'</td>
                  <td>'.$op["que7"].'</td>
                  <td>'.$op["que8"].'</td>
                  <td>'.$op["que9"].'</td>
                  <td>'.$op["que10"].'</td>
                  <td>'.$op["que11"].'</td>
                  <td>'.$op["que12"].'</td>
                  <td>'.$op["que13"].'</td>
                  <td>'.$op["que14"].'</td>
                  <td>'.$op["que15"].'</td>
                  <td>'.$op["que16"].'</td>
                  <td>'.$op["que17"].'</td>
               

                 

                  
                </tr>
           ';
       }

       $output1 .= '</table>';
       header("Content-Type: application/xls");
       header("Content-Disposition:attachment; filename=form1.xls");
       echo $output1;

  }

   public function form2()
  {
    $this->load->model('excelmodel');
    $output1 = '';
    $result= $this->excelmodel->form2();
    $output1 .= '<table class="table" bordered="1" >
         <tr>
           <th>user_id</th>
           <th>que1</th>
           <th>que2</th>
           <th>que3</th>
           <th>que4</th>
           <th>que5</th>
           <th>que6</th>
           <th>que7</th>
           <th>que8</th>
           <th>que9</th>
           <th>que10</th>
           <th>que11</th>
           <th>que12</th>
           <th>que13</th>
           <th>que14</th>
           
           
          </tr> 
       ';

      foreach ($result as  $op) 
       {
           $output1 .= '
               <tr>
                  <td>'.$op["id"].'</td>
                  <td>'.$op["que1"].'</td>
                  <td>'.$op["que2"].'</td>
                  <td>'.$op["que3"].'</td>
                  <td>'.$op["que4"].'</td>
                  <td>'.$op["que5"].'</td>
                  <td>'.$op["que6"].'</td>
                  <td>'.$op["que7"].'</td>
                  <td>'.$op["que8"].'</td>
                  <td>'.$op["que9"].'</td>
                  <td>'.$op["que10"].'</td>
                  <td>'.$op["que11"].'</td>
                  <td>'.$op["que12"].'</td>
                  <td>'.$op["que13"].'</td>
                  <td>'.$op["que14"].'</td>
                  
               

               </tr>
           ';
       }

       $output1 .= '</table>';
       header("Content-Type: application/xls");
       header("Content-Disposition:attachment; filename=form2.xls");
       echo $output1;

  }

   public function form3()
  {
    $this->load->model('excelmodel');
    $output1 = '';
    $result= $this->excelmodel->form3();
    $output1 .= '<table class="table" bordered="1" >
         <tr>
           <th>user_id</th>
           <th>que1</th>
           <th>que2</th>
           <th>que3</th>
           <th>que4</th>
           <th>que5</th>
           <th>que6</th>
           <th>que7</th>
           <th>que8</th>
           <th>que9</th>
           <th>que10</th>
           
          </tr> 
       ';

      foreach ($result as  $op) 
       {
           $output1 .= '
               <tr>
                  <td>'.$op["id"].'</td>
                  <td>'.$op["que1"].'</td>
                  <td>'.$op["que2"].'</td>
                  <td>'.$op["que3"].'</td>
                  <td>'.$op["que4"].'</td>
                  <td>'.$op["que5"].'</td>
                  <td>'.$op["que6"].'</td>
                  <td>'.$op["que7"].'</td>
                  <td>'.$op["que8"].'</td>
                  <td>'.$op["que9"].'</td>
                  <td>'.$op["que10"].'</td>
                 
           </tr>
           ';
       }

       $output1 .= '</table>';
       header("Content-Type: application/xls");
       header("Content-Disposition:attachment; filename=form3.xls");
       echo $output1;

  }

   public function form4()
  {
    $this->load->model('excelmodel');
    $output1 = '';
    $result= $this->excelmodel->form4();
    $output1 .= '<table class="table" bordered="1" >
         <tr>
           <th>user_id</th>
           <th>Course Id</th>
           <th>Teacher Id</th>
           <th>que1</th>
           <th>que2</th>
           <th>que3</th>
           <th>que4</th>
           <th>que5</th>
           <th>que6</th>
           <th>que7</th>
           <th>que8</th>
           <th>que9</th>
           <th>que10</th>
           <th>que11</th>
           <th>que12</th>
           <th>que13</th>
           <th>que14</th>
           <th>que15</th>
           <th>que16</th>
           <th>que17</th>
           
          </tr> 
       ';

      foreach ($result as  $op) 
       {
           $output1 .= '
               <tr>
                  <td>'.$op["id"].'</td>
                  <td>'.$op["courseid"].'</td>
                  <td>'.$op["teacherid"].'</td>
                  <td>'.$op["que1"].'</td>
                  <td>'.$op["que2"].'</td>
                  <td>'.$op["que3"].'</td>
                  <td>'.$op["que4"].'</td>
                  <td>'.$op["que5"].'</td>
                  <td>'.$op["que6"].'</td>
                  <td>'.$op["que7"].'</td>
                  <td>'.$op["que8"].'</td>
                  <td>'.$op["que9"].'</td>
                  <td>'.$op["que10"].'</td>
                  <td>'.$op["que11"].'</td>
                  <td>'.$op["que12"].'</td>
                  <td>'.$op["que13"].'</td>
                  <td>'.$op["que14"].'</td>
                  <td>'.$op["que15"].'</td>
                  <td>'.$op["que16"].'</td>
                  <td>'.$op["que17"].'</td>
               

                 

                  
                </tr>
           ';
       }

       $output1 .= '</table>';
       header("Content-Type: application/xls");
       header("Content-Disposition:attachment; filename=form4.xls");
       echo $output1;

  }
   public function __construct()
    {
        parent::__construct(); 
    
        if( !$this->session->userdata('admin_id'))
      return redirect('admin_login');

      

    }
}