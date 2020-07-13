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

    <h6 class="text-danger">* Roll No. will be Username </h5>
			  <?php echo form_open(base_url('register/add_stud'),['class'=>'col-lg-6 col-lg-offset-3 ']); ?>
     
		      
     <div class="form-group">
        <label for="name">Roll No.:</label>
            <?php echo form_input(['class'=>'form-control','name'=>'username','placeholder'=>'Enter Username','required'=>'true']) ?>
     </div>

            
     <div class="form-group">
        <label for="name">Student Name:</label>
            <?php echo form_input(['class'=>'form-control','name'=>'name','placeholder'=>'Enter Student Name','required'=>'true']) ?>
     </div>

            
     <div class="form-group">
        <label for="name">Department:</label>
         <?php 
              $options = array(
                      'ME'         => 'Mechanical Engineering',
                      'CE'         => 'Civil Engineering',
                      'EE'          => 'Electronics Engineering',
                      'CO'          => 'Computer Engineering',
                      'IT'          => 'Information Technology',
                      'ETC'        => 'Electronics & Telecommunication Engineering',
                      'CH'          => 'Chemical Engineering',
                      'FY'        => 'First Year',
                      
            );

          $shirts_on_sale = array('ME1', 'IDD');
          echo form_dropdown('dept', $options,'form-control');?>
            
     </div>

     <div class="form-group">
        <label for="name">Year:</label>
        
        <?php 
              $options = array(
                      '1'         => 'First',
                      '2'         => 'Second',
                      '3'         => 'Third',
                      '4'         => 'BTech',
                      
            );

          $shirts_on_sale = array('1', '3');
          echo form_dropdown('year', $options);?>
     </div>
  


    
     <div class="form-group">
        <label for="exampleInputPassword1">Password </label>
            <?php echo form_password(['class'=>'form-control','name'=>'password','placeholder'=>'Password', 'required'=>'true'])?>
    </div>
    <?php echo form_error('username',"<p class='text-danger'>","</p>"); ?>
    

    <div class="form-group">
               
     <?php echo form_reset(['name'=>'reset','class'=>'btn btn-danger','value'=>'Reset']) ?>
     <?php echo form_submit(['name'=>'submit','class'=>'btn btn-primary','value'=>'Register']) ?>
     <?php echo form_close(); ?>
            </div>
  	   	 
  	  
  	</div>
   </div>


<?php include('footer.php'); ?>