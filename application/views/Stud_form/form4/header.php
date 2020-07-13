<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title> My-dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= link_tag(base_url('assets2/css/bootstrap.min.css')) ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>  
</head>
<body>

  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Student Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav nav-flex-icons ml-auto">
      
      <li class="nav-item nav-link">
        <?= anchor(base_url('stud_login/logout'),'Logout'); ?>
      </li>
     
    </ul>
  </div>  
</nav>
<br>
<?php if($error = $this->session->flashdata('Insertion_success')): ?>
    <div class="row">
     <div class="col-lg-10">
      <div class="alert alert-dismissible alert-success">
        <?= $error; ?>
       </div>
     </div>
    </div>
   <?php endif; ?>

  <?php if($error = $this->session->flashdata('Insertion_failed')): ?>
    <div class="row">
     <div class="col-lg-10">
      <div class="alert alert-dismissible alert-danger ">
        <?= $error; ?>
       </div>
     </div>
    </div>
   <?php endif; ?> 
<div class="container">
  <div class="jumbotron">
    <div class="text-center">
  <img src="../assets/img/mitlogo.png" class='img-responsive'/>
  <BR>
  <h3>Course out comes survey</h3>


    </div>
  </div>
</div> 

<section>
  <div class="container">
    <div class="text-left">
      <div >
      Dear Student,<br>
       &nbsp Kindly give your resonse on the following statements for satisficaion of facilities available during the program study.
      <br/>
       <b>
        (Ranking: 3-Excellent, 2-Good, 1-Average)
       </b>
      <br/><br>
      </div>
    </div>
  </div>
</section> 





    
 

   
