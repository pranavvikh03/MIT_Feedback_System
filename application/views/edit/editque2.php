<?php include('header.php'); ?>

<div class="container">
   <?php echo form_open(base_url('forms/update2'),['class'=>'form-horizontal']); ?>
   <fieldset>
   	 

  <?php foreach($question as $res): ?> 
   <div class="row">
   	 <div class="col-lg-6">
   	 	<div class="form-group">
   	 		<label for="inputEmail" class="col-lg-4 control-label">Question</label>
   	 		<div class="col-lg-8">
   	 		  <?php echo form_input(['name'=>'que','class'=>'form-control','placeholder'=>'Enter new question','value'=>set_value('que',$res->question)]); ?>
   	 		</div>
   	    </div>
   	  </div>
   </div>

    <div class="row">
   	 <div class="col-lg-6">
   	 	<div class="form-group">
   	 		<label for="inputEmail" class="col-lg-4 control-label">Choice 1</label>
   	 		<div class="col-lg-8">
   	 		  <?php echo form_input(['name'=>'ch1','class'=>'form-control','placeholder'=>'Enter choice 1 ','value'=>set_value('que',$res->choice1)]); ?>
   	 		</div>
   	    </div>
   	  </div>
   </div>

   <div class="row">
   	 <div class="col-lg-6">
   	 	<div class="form-group">
   	 		<label for="inputEmail" class="col-lg-4 control-label">Choice 2</label>
   	 		<div class="col-lg-8">
   	 		  <?php echo form_input(['name'=>'ch2','class'=>'form-control','placeholder'=>'Enter choice 2 ','value'=>set_value('que',$res->choice2)]); ?>
   	 		</div>
   	    </div>
   	  </div>
   </div>

   <div class="row">
   	 <div class="col-lg-6">
   	 	<div class="form-group">
   	 		<label for="inputEmail" class="col-lg-4 control-label">Choice 3</label>
   	 		<div class="col-lg-8">
   	 		  <?php echo form_input(['name'=>'ch3','class'=>'form-control','placeholder'=>'Enter choice 3 ','value'=>set_value('que',$res->choice3)]); ?>
   	 		</div>
   	    </div>
   	  </div>
   </div>
   
   <input type="checkbox" name="queid" value="<?= $res->queID?>" required>I am sure
<?php endforeach; ?>


   <div class="form-group">
   	 <div class="col-lg-10 col-lg-offset-2">
   	 	<?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-warning']),
   	 	           form_submit(['name'=>'submit','value'=>'Change','class'=>'btn btn-primary'])
   	 	  ?>         
           <?php echo form_close(); ?>
   	 </div>
   </div>
  </fieldset>
</div>