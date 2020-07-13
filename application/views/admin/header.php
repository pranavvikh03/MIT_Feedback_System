<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title> My-dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= link_tag(base_url('assets/css/bootstrap.min.css')) ?>  
</head>


<body>
     <nav class="navbar navbar-default">
   <div class="container-fluid">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
       <span class="sr-only">Toggle Navigation</span>	
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button> 
    <h1>Admin Panel</h1>
   </div>
     
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     	
     <ul class="nav navbar-nav navbar-right">
     <li>
     	 <?= anchor(base_url('admin_login/logout'),'Logout') ?>
      </li>
     </ul>
     </div>
    </div>
   </nav>

   <div class="text-center page-header">
     <img src="../assets/img/mitlogo.png" class='img-responsive' style="margin-left: 35%;"/>
     
   </div>

   

   