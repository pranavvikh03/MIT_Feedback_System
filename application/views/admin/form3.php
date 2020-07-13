<?php include('header.php'); ?>

<?php if($error = $this->session->flashdata('failed')){ ?>
    <div class="row">
     <div class="col-lg-6">
      <div class="alert alert-dismissible alert-danger">
        <?= $error; ?>
       </div>
     </div>
    </div>
   <?php } 
    else {
     ?>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
     <div class="form-group">

      <?php echo form_open(base_url('admin/get_form3'),['class'=>'form-horizontal']); ?>

       <label for="subject">Year</label>
         <select class="form-control" name="year" >
          <option value="all">All</option>
           <option value="1">First Year</option>
           <option value="2">Second Year</option>
           <option value="3">Third Year</option>
           <option value="4">BTech</option>
        </select>
    </div> 
   </div>

   <div class="col col-md-6">
     <div class="form-group">
      <label for="subject">Department</label>
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
  </div> 

    <div class="col-lg-2 col-md-offfset text-center">
    
     <?php echo form_submit(['name'=>'submit','class'=>'btn btn-primary ','value'=>'Submit']) ?>
     <br>
     <?php echo form_close(); ?>
 </div>  
 </div>
</div>
<br>

<div class="col-lg-4 col-lg-offset-3">
  <div class="card">
    <center>
    <h2>Export Database</h2>
    <?php echo form_open(base_url('excel/form3'),['class'=>'form-horizontal']); ?>
     <?php echo form_submit(['name'=>'submit','class'=>'btn btn-success btn-lg ','value'=>'Export']) ?>
    <?php echo form_close();?>
  </center>
  </div>
</div>
<br><hr><br>
<table class="table">

  <thead>
    <th>Sr. No.</th>
    <th>Question</th>
    <th>Excellent</th>
    <th>Very Good</th>
    <th>Good</th>
    <th>Average</th>
    <th>Below Average</th>
  </thead>

<?php $i=1; foreach ($questions as $row) 
{
  ${'que'.$i} = $row->question;

  $i++;
}?>


 <?php  $i=1;  $total = $cnt; 
 while ($cnt) { ?>  
   
  <tr>
    <td><?= $i ?></td>
    <td><?= ${'que'.$i} ?></td>
    <td><?php echo number_format(${'res'.$i},2);?>%</td>
    <td><?php echo number_format(${'r'.$i},2);?>%</td>
    <td><?php echo number_format(${'re'.$i},2);?>%</td>
    <td><?php echo number_format(${'resu'.$i},2);?>%</td>
    <td><?php echo number_format(${'rest'.$i},2);?>%</td>
  </tr>

<?php $i++;
    $cnt--;
  }

  ?>

</table>



<?php 
  $total1 = $total;
  $excellent = 0;
  $vgood = 0;
  $good = 0;
  $avg = 0;
  $b_avg = 0;
  $j = 1;
while($total)
{
   $excellent = $excellent + ${'res'.$j};
   $vgood = $vgood + ${'r'.$j};
   $good = $good + ${'re'.$j};
   $avg = $avg + ${'resu'.$j};
   $b_avg = $b_avg + ${'rest'.$j};
   $j++;
   $total--;
}

 $excellent = $excellent/$total1;
 $vgood = $vgood/$total1;
 $good = $good/$total1;
 $avg = $avg/$total1;
 $b_avg = $b_avg/$total1;
?>
<center>
  
  <br><br>
<h3>Total Review:</h3>
<h4>
  <b>Excellent:</b> <?= number_format($excellent,2) ?> %
    <br>
    <b>Very Good:</b> <?= number_format($vgood,2)?>%
    <br>
    <b>Good:</b> <?= number_format($good,2)?>%
    <br>
    <b>Average : </b> <?= number_format($avg,2)?>%
    <br>
    <b>Belw Average : </b> <?= number_format($b_avg,2) ?>%
</h4>
</center>
       
<?php }?>   