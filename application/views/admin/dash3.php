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


 <?php  $i=1;  
        $total = $cnt;
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


<?php } ?>