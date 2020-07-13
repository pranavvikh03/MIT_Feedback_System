<?php include('header.php'); ?>



<!--Feedback Form in Table form-->
<section>


  <table class="table">
    <thead class=" text-center">
      <td>Sr.No.</td>
      <td>Item</td>
      <td>Response</td>
    </thead>

    <?php echo form_open(base_url('form3/user_data'),['class'=>'form-horizontal']); ?> 

  <?php foreach($questions as $row) : ?>
     
     <?php 
       $q_no = $row->queID;  
       $ch1 = $row->choice1;
       $ch2 = $row->choice2;
       $ch3 = $row->choice3;
       $ch4 = $row->choice4;
       $ch5 = $row->choice5;
     ?> 
    
     
    <tr>
      <td><?=$row->queID?></td>
      <td><?=$row->question?></td>
    
    <td>
      <input type="radio" name="que<?= $q_no?>" value="5" required> <?= $ch1?>
    </td>
    <td>  
      <input type="radio" name="que<?= $q_no ?>" value="4"> <?= $ch2?>
    </td>
    <td>
      <input type="radio" name="que<?= $q_no?>" value="3"> <?= $ch3?>
    </td>
    <td>
      <input type="radio" name="que<?= $q_no?>" value="2"> <?= $ch4?>
    </td>
    <td>
      <input type="radio" name="que<?= $q_no?>" value="1"> <?= $ch5?>
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
<?php include('footer.php'); ?>