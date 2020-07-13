<?php include('header.php') ?>

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
    

  
<h3 class="lead">
	Year: <?= $year?>
	<br>
    Department: <?= $dept ?>
</h3>
<table class="table">

	<thead>
		<th>Sr. No.</th>
		<th>Question</th>
		<th>Excellent</th>
		<th>Good</th>
		<th>Average</th>
	</thead>

<?php $i=1; foreach ($questions as $row) 
{
	${'que'.$i} = $row->question;

	$i++;
}?>


 <?php  $i=1; 
        $total= $cnt;
  while ($cnt) { ?>	
   
	<tr>
		<td><?= $i ?></td>
		<td><?= ${'que'.$i} ?></td>
		<td><?php echo number_format(${'res'.$i},2);?>%</td>
		<td><?php echo number_format(${'r'.$i},2);?>%</td>
		<td><?php echo number_format(${'re'.$i},2);?>%</td>
	</tr>

<?php $i++;
    $cnt--;
  }

  ?>

</table>



<?php 
  $total1 = $total;
  $excellent = 0;
  $good = 0;
  $avg = 0;
  $j = 1;
while($total)
{
   $excellent = $excellent + ${'res'.$j};
   $good = $good + ${'r'.$j};
   $avg = $avg + ${'re'.$j};
   $j++;
   $total--;
}

 $excellent = $excellent/$total1;
 $good = $good/$total1;
 $avg = $avg/$total1;
?>

<br><br>
<h3>Total Review:</h3>
<h4>
	<b>Excellent:</b> <?= number_format($excellent,2) ?>% 
    <br>
    <b>Good:</b> <?= number_format($good,2) ?>%
    <br>
    <b>Average : </b> <?= number_format($avg,2) ?>%
</h4>

<?php } ?>