<?php include('header.php'); ?>

<div class="container">
   <?php echo form_open(base_url('forms/store_form3'),['class'=>'form-horizontal']); ?>
   <fieldset>
   	 <legend>Add Question</legend>


  	<?php if($error = $this->session->flashdata('success')): ?>
    <div class="row">
     <div class="col-lg-6">
      <div class="alert alert-dismissible alert-success">
        <?= $error; ?>
       </div>
     </div>
    </div>
   <?php endif; ?>
 
   	<?php if($error = $this->session->flashdata('failed')): ?>
    <div class="row">
     <div class="col-lg-6">
      <div class="alert alert-dismissible alert-danger">
        <?= $error; ?>
       </div>
     </div>
    </div>
   <?php endif; ?>
   <div class="row">
   	 <div class="col-lg-8">
   	 	<div class="form-group">
   	 		<label for="inputEmail" class="col-lg-4 control-label">Question</label>
   	 		<div class="col-lg-12">
   	 		  <?php echo form_input(['name'=>'que','class'=>'form-control','placeholder'=>'Enter new question','required'=>true]); ?>
   	 		</div>
   	    </div>
   	  </div>
   </div>

    <div class="row">
   	 <div class="col-lg-6">
   	 	<div class="form-group">
   	 		<label for="inputEmail" class="col-lg-4 control-label">Choice 1</label>
   	 		<div class="col-lg-10">
   	 		  <?php echo form_input(['name'=>'choice1','class'=>'form-control','placeholder'=>'Enter choice 1 ','required'=>true]); ?>
   	 		</div>
   	    </div>
   	  </div>
   </div>

   <div class="row">
   	 <div class="col-lg-6">
   	 	<div class="form-group">
   	 		<label for="inputEmail" class="col-lg-4 control-label">Choice 2</label>
   	 		<div class="col-lg-10">
   	 		  <?php echo form_input(['name'=>'choice2','class'=>'form-control','placeholder'=>'Enter choice 2 ','required'=>true]); ?>
   	 		</div>
   	    </div>
   	  </div>
   </div>

   <div class="row">
   	 <div class="col-lg-6">
   	 	<div class="form-group">
   	 		<label for="inputEmail" class="col-lg-4 control-label">Choice 3</label>
   	 		<div class="col-lg-10">
   	 		  <?php echo form_input(['name'=>'choice3','class'=>'form-control','placeholder'=>'Enter choice 3 ','required'=>true]); ?>
   	 		</div>
   	    </div>
   	  </div>
   </div>

   <div class="row">
     <div class="col-lg-6">
      <div class="form-group">
        <label for="inputEmail" class="col-lg-4 control-label">Choice 4</label>
        <div class="col-lg-10">
          <?php echo form_input(['name'=>'choice4','class'=>'form-control','placeholder'=>'Enter choice 4','required'=>true]); ?>
        </div>
        </div>
      </div>
   </div>

   <div class="row">
     <div class="col-lg-6">
      <div class="form-group">
        <label for="inputEmail" class="col-lg-4 control-label">Choice 5</label>
        <div class="col-lg-10">
          <?php echo form_input(['name'=>'choice5','class'=>'form-control','placeholder'=>'Enter choice 5','required'=>true]); ?>
        </div>
        </div>
      </div>
   </div>



   <div class="form-group">
   	 <div class="col-lg-10 col-lg-offset-3">
   	 	<?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-warning']),
   	 	           form_submit(['name'=>'submit','value'=>'Add','class'=>'btn btn-primary'])
   	 	  ?>         
        <?php echo form_close(); ?>
   	 </div>
   </div>
  </fieldset>
</div>


