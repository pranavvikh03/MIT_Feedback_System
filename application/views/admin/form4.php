<?php include('header2.php'); ?>
<center>
  <div class="col-lg-4 col-lg-offset-3">
  <div class="card">
    <center>
    <h2>Export Database</h2>
    <?php echo form_open(base_url('excel/form4'),['class'=>'form-horizontal']); ?>
     <?php echo form_submit(['name'=>'submit','class'=>'btn btn-success btn-lg ','value'=>'Export']) ?>
    <?php echo form_close();?>
  </center>
  </div>
</div>
</center>

<br><hr><br>

<?php echo form_open(base_url('admin/get_form4'),['class'=>'form-horizontal']); ?> 
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

   

   <div class="col-lg-10 col-lg-offset-12 text-center">
     <?php echo form_submit(['name'=>'submit','class'=>'btn btn-primary btn-lg ','value'=>'Submit']) ?>
     <?php echo form_close(); ?>
 </div> 

  </div>
  </div>
  </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.js"></script>
 <script src="<?php echo base_url() ?>assets/js/jquery.min.js "></script> 
 <script src="<?= base_url('assets/js/jquery.js') ?>"></script> 

