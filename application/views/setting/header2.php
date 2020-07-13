
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
   
</head>
<body>
    
 <nav class="navbar navbar-expand-md bg-dark">
  <a class="navbar-brand nav-link" href="#">Student Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav nav-flex-icons ml-auto">
      
      
     <li class="nav-item">
        <a href="<?= base_url()?>stud_login/logout" class="nav-link"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Logout</span></a>
     </li>  

     
    </ul>
  </div>  
</nav>

<br><br>
 
 
