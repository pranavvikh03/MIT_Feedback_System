<?php include('header.php'); ?>
<?php if($error = $this->session->flashdata('register_failed')): ?>
    <div class="row">
     <div class=" col-md-10  col-md-offset-2">
      <div class="alert alert-dismissible alert-danger">
        <?= $error; ?>
       </div>
     </div>
    </div>
   <?php endif; ?>

   <?php if($error = $this->session->flashdata('register_success')): ?>
    <div class="row">
     <div class="col-md-10 col-md-offset-2">
      <div class="alert alert-dismissible alert-success">
        <?= $error; ?>
       </div>
     </div>
    </div>
   <?php endif; ?>
   <br>
<div class="container">

			  <?php echo form_open(base_url('register/store_admin'),['class'=>'col-lg-6 col-lg-offset-3 ']); ?>
     
		      
     <div class="form-group">
        <label for="name">Username:</label>
            <?php echo form_input(['class'=>'form-control','name'=>'username','placeholder'=>'Enter Username','required'=>'true']) ?>
     </div>

     <div class="form-group">
      <label for="exampleInputPassword1">Password </label>
            <?php echo form_password(['class'=>'form-control','name'=>'password','placeholder'=>'Password', 'required'=>'true'])?>
    </div>
    
    

    <div class="form-group">
               
     <?php echo form_reset(['name'=>'reset','class'=>'btn btn-danger','value'=>'Reset']) ?>
     <?php echo form_submit(['name'=>'submit','class'=>'btn btn-primary','value'=>'Register']) ?>
     <?php echo form_close(); ?>
            </div>
  	   	 
  	  
  	</div>
   </div>
<?php include('footer.php'); ?>