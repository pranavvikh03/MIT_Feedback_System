<?php include('header.php'); ?>

<?php echo $cnt; ?>
<?php  $i=1;  $s = ${'res'.$i};  echo $s; while ($cnt) { ?>
<div class="text-left lead">
      <br>
        1. To what extent the lectures/practical's are engages as per time table?
     </div>
       <div class="progress col-md-8">
         <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100" style="width :<?= ${'res'.$i}?>%">
        
         </div>


      <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width :30%">
       
        </div>
         
  
     <div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width :50%">
      
        </div>
       </div>
    </div>
   </div>
<br>
<?php $i++;
    $cnt--;
  }?>