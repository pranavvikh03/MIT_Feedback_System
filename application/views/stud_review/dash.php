<?php include('header.php') ?>


<div class="container">
  <div class="row">
    
     <div class="form-group col-lg-6">

      <?php echo form_open(base_url('stud_review/get_stud'),['class'=>'form-horizontal']); ?>

       <label for="subject">Year</label>
         <select class="form-control" name="year" >
         	<option value="all">All</option>
           <option value="1">First Year</option>
           <option value="2">Second Year</option>
           <option value="3">Third Year</option>
           <option value="4">BTech</option>
        </select>
    </div> 

     <div class="form-group col-lg-6">

     
       <label for="subject">Year</label>
         <select class="form-control" name="dept" >
         	<option value="all">All</option>
          <option value="FY">First Year</option>
           <option value="ME">Mechanical Engineering</option>
           <option value="CE">Civil Engineering</option>
           <option value="EE">Electronics Engineering</option>
           <option value="CO">Computer Engineering</option>
           <option value="IT">Information Technology</option>
           <option value="ETC">Electronics & Telecommunication Engineering</option>
           <option value="CH">Chemical Engineering</option>
        </select>
    </div> 
   </div>

   <div class="col-lg-2 col-md-offfset text-center">
   	
     <?php echo form_submit(['name'=>'submit','class'=>'btn btn-primary ','value'=>'Submit']) ?>
     <br>
     <?php echo form_close(); ?>
 </div>  
 </div>
</div>
<br>

<div class="container">

<table class="table">
    <thead>
      <th>ID</th>
      <th>Roll No.</th>
      <th>Name</th>
      <th>Department</th>
      <th>Year</th>
    </thead>
 

  <?php foreach($info as $row) : ?>
     
    <tr>
      <td><?=$row->id ?></td>
      <td><?=$row->username?></td>
      <td><?=$row->name?></td>
      <td><?=$row->dept?></td>
      <td><?=$row->year?></td>
    
   
    
   
    <?php endforeach; ?>
  </table>
	
</div>


<?php include('footer.php') ?>