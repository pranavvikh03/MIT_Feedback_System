<?php include('header.php'); ?>

<div class="container">

     <?php if($error = $this->session->flashdata('success')): ?>
    <div class="row">
     <div class="col-lg-6">
      <div class="alert alert-dismissible alert-success">
        <?= $error; ?>
       </div>
     </div>
    </div>
   <?php endif; ?>
    <?php if($error = $this->session->flashdata('delete')): ?>
    <div class="row">
     <div class="col-lg-6">
      <div class="alert alert-dismissible alert-danger">
        <?= $error; ?>
       </div>
     </div>
    </div>
   <?php endif; ?>

 <div class="row">
 	<div class="col-lg-6 col-lg-offset-6">
 		<br><br>
 		<?= anchor(base_url('forms/ins_form3'),'Add question',['class'=>'btn btn-primary ']) ?>
 	</div>
 	
 </div>
	<table class="table">
  
     <thead>
		<th>Sr. No.</th>
		<th>Question</th>
		<th>Action</th>
     </thead>

     <tbody>
     	<?php if(count($data)) : ?>
     	    <?php foreach ($data as $data) : ?>
     		
     	<tr>
     		<td><?= $data->queID ?></td>
     		<td>
     			<?= $data->question ?> 
     		</td>
     		<td>

                    <?= anchor("forms/edit_form3/{$data->queID}",'Edit',['class'=>'btn btn-info']) ?>
                   <?= anchor("forms/del_form3/{$data->queID}",'Delete',['class'=>'btn btn-danger ']) ?>
     			
     		</td>
     	</tr>

     	<?php  endforeach; ?>

          <?php else: ?>
          	<tr>
          	   <td colspan="3">No Questions </td>
          	</tr>

         <?php endif; ?>
     </tbody>
		
	</table>

