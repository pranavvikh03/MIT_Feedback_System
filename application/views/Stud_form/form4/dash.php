<?php include('header.php') ?>

 <?php echo form_open(base_url('form4/user_data'),['class'=>'form-horizontal']); ?> 

 <div class="container">
  <div class="row">
   <div class="col-md-offfset col-lg-6">
  <div class="form-group">

  
    <label for="subject">Subject</label>
    <select class="form-control" name="subject" id="subject" required>
      <option value="">Select Subject</option>
      <?php foreach($subject as $subject): ?>
         <option value="<?php echo $subject->courseid; ?>"> <?php echo $subject->course_name; ?></option>
      <?php endforeach; ?>  
    </select>
   </div>

   <div class="form-group">
    <label for="teacher">Teacher</label>
    <select class="form-control" name="teacher" id="teacher" disabled="" required>
      <option value="">select Teacher</option>
    </select>
    <hr><br><br>
   </div>
  </div>
  </div>
  </div>


<!--Feedback Form in Table form-->
<section>

  <table class="table">
    <thead class=" text-center">
      <td>Sr.No.</td>
      <td>Item</td>
      <td>Response</td>
    </thead>

    

  <?php foreach($questions as $row) : ?>
     
     <?php 
       $q_no = $row->queID;  
       $ch1 = $row->choice1;
       $ch2 = $row->choice2;
       $ch3 = $row->choice3;
     ?> 
    
     
    <tr>
      <td><?=$row->queID?></td>
      <td><?=$row->question?></td>
    
    <td>
      <input type="radio" name="que<?= $q_no?>" value="3" required> <?= $ch1?>
    </td>
    <td>  
      <input type="radio" name="que<?= $q_no ?>" value="2"> <?= $ch2?>
    </td>
    <td>
      <input type="radio" name="que<?= $q_no?>" value="1"> <?= $ch3?>
    </td>
    
    <input type='hidden' name='<?= $q_no  ?>' value='<?php echo $q_no; ?>' />
    <input type='hidden' name='<?= $ans_no  ?>' value='<?php echo $ans_no ; ?>' />
    <?php endforeach; ?>
  </table>

     
 <div class="container">
  <input type="checkbox" required="required">I read all the questions and giving response without any force.
</div>
<br>

 <div class="col-lg-10 col-lg-offset-12 text-center">
     <?php echo form_submit(['name'=>'submit','class'=>'btn btn-danger btn-lg ','value'=>'Submit']) ?>
     <?php echo form_close(); ?>
 </div>    
</section>
<?php include('footer.php') ?>