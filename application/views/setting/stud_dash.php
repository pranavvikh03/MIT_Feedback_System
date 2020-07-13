<?php include('header2.php') ?>

<?php if($error = $this->session->flashdata('failed')): ?>
    <div class="row">
     <div class=" col-md-10  col-md-offset-2">
      <div class="alert alert-dismissible alert-danger">
        <?= $error; ?>
       </div>
     </div>
    </div>
   <?php endif; ?>

   <?php if($error = $this->session->flashdata('success')): ?>
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

    
			  <?php echo form_open(base_url('setting/update_stud'),['class'=>'col-lg-6 col-lg-offset-3 ']); ?>
     
		      
     <div class="form-group">
        <label for="name">Current Password:</label>
            <?php echo form_input(['class'=>'form-control','name'=>'pass1','placeholder'=>'Enter Current Password','required'=>'true']) ?>
     </div>
     <?php echo form_error('username',"<p class='text-danger'>","</p>"); ?>

    
     <div class="form-group">
        <label for="exampleInputPassword1">New Password </label>
            <?php echo form_password(['class'=>'form-control','name'=>'pass2','placeholder'=>'Enter New Password', 'required'=>'true'])?>
    </div>
    <?php echo form_error('username',"<p class='text-danger'>","</p>"); ?>
    

    <div class="form-group">
               
     <?php echo form_reset(['name'=>'reset','class'=>'btn btn-danger','value'=>'Reset']) ?>
     <?php echo form_submit(['name'=>'submit','class'=>'btn btn-primary','value'=>'Change']) ?>
            </div>
  	   	 
  	  <?php echo form_close(); ?>
  	</div>
   </div>

<?php include('footer.php') ?>