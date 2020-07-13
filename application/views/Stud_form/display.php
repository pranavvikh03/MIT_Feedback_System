
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <title> FEEDBACK PAGE</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= link_tag(base_url('assets2/css/bootstrap.min.css')) ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>  

  <style>
    body{
      background: #303f9f;
    }
  </style>  
</head>
<body>
    
 <nav class="navbar navbar-expand-md bg-white">
  <a class="navbar-brand nav-link" href="#">Student Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav nav-flex-icons ml-auto">
      
      
      <li class="nav-item nav-link">
        <?= anchor(base_url('setting/stud'),'Setting'); ?>
      </li>

      <li class="nav-item nav-link">
        <?= anchor(base_url('stud_login/logout'),'Logout'); ?>
      </li>
     
    </ul>
  </div>  
</nav>

<br><br>
     <div class="btn-group btn-group-lg">
 
 

<ul type="none">

  <li>
    <a href="<?= base_url('stud_forms/openform1') ?> " class="btn btn-lg btn-dark" >Student Feedback Form </a>
    <br><br>
  </li>
  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn btn-lg btn-dark" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  >
                   Other Forms
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url('stud_forms/openform2') ?>">
                    Student Feedback about college</a>
                    <a class="dropdown-item" href="<?= base_url('stud_forms/openform3') ?>">
                    Feedback for Faculty</a>
                    <a class="dropdown-item" href="<?= base_url('stud_forms/openform4') ?>">
                    Course out comes survey form</a>
                 
                </div>
            </li>
</ul>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.js"></script>
 <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>      
</body>
</html>