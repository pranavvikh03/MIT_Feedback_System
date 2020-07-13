<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feedback System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= link_tag(base_url('assets2/css/bootstrap.min.css')) ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>

  body{
    background :;
  } 
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 95%;
      height: 60%;
       
      position: relative;
      align-items: center;

  }





</style>
</head>
<body >

<nav class="navbar navbar-expand-md bg-warning navbar-dark">
  <a class="navbar-brand" href="#">
    <img src="assets/img/mitlogo.png" alt="Logo" style="width:160px; height: 40px;">
  </a>
  <a class="navbar-brand" href="#">Feedback System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse pull-right" id="collapsibleNavbar">

    <ul class="nav navbar-nav nav-flex-icons ml-auto">
      
      <li class="nav-item nav-link ">
          <i class="fa fa-user"></i><?= anchor(base_url('admin_login'),'Admin'); ?>
      </li>
      <li class="nav-item nav-link">
        <i class="fa fa-user"></i><?= anchor(base_url('stud_login'),'Student'); ?>
      </li>
     
    </ul>
  </div>  
</nav>
<br>



<div class="carousel slide" data-ride="carousel" id="demo">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <<!--<li data-target="#demo" data-slide-to="2"></li>
     <li data-target="#demo" data-slide-to="3"></li>-->
  </ul>
  
  <div class="carousel-inner">

     <div class="carousel-item active ">
       <center> <img src="assets/img/bgg2.jpg" alt="MITAOE" width="1100" height="500"  ></center>
     </div>

     <!--<div class="carousel-item ">
       <center> <img src="assets/img/bgg3.jpg" alt="MITAOE" width="800" height="300" class='img-responsive' ></center>
     </div>-->


  </div>

   <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
 </div>


  <footer class="footer bg-primary">
 
     <div class="text-center">
      <br>
        <p><b>Developed By: Pranav Vikharankar, Pragati Aboti, Swapnil Jogdand</b></p>
        <p>Copy &copy 2020 ,MIT Academy of Engineering, Alandi(D)</p>
    
     </div>
       
</footer>
</body>
</html>
  