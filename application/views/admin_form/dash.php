<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= link_tag(base_url('assets/css/bootstrap.min.css')) ?>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <style >
     img{
      width: 50%;
     }

     

   </style>

</head>
<body>


 <div class="container">
  <div class="row">
  <div class="panel col-md-6 col-md-offset-2">
  	<div class="panel panel-primary">
  	  <div class="panel-heading text-center">Admin Login</div>
  	   <div class="panel-body">

       

  	   	<?php if($error = $this->session->flashdata('Login_failed')): ?>
    <div class="row">
     <div class="col-lg-6">
      <div class="alert alert-dismissible alert-danger">
        <?= $error; ?>
       </div>
     </div>
    </div>
   <?php endif; ?>
   

			  <?php echo form_open(base_url('admin_login/login'),['class'=>'col-xs-8 col-md-offset-3']); ?>


		      <br>
     <div class="form-group">
        <label for="name">Username :</label>
            <?php echo form_input(['class'=>'form-control','name'=>'username','placeholder'=>'Enter Username']) ?>
     </div>
     <?php echo form_error('username',"<p class='text-danger'>","</p>"); ?>

    
     <div class="form-group">
        <label for="exampleInputPassword1">Password </label>
            <?php echo form_password(['class'=>'form-control','name'=>'password','placeholder'=>'Password'])?>
    </div>
    <?php echo form_error('username',"<p class='text-danger'>","</p>"); ?>
    

    <div class="form-group">
               
     <?php echo form_reset(['name'=>'reset','class'=>'btn btn-danger','value'=>'Reset']) ?>
     <?php echo form_submit(['name'=>'submit','class'=>'btn btn-primary','value'=>'Login']) ?>
     <?php echo form_close(); ?>
            </div>
  	   	 
  	   </div>
  	</div>
   </div>
  
 
  
   
   
             


</body>
</html>

