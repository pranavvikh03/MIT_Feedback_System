<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.js"></script>
 <script src="<?php echo base_url() ?>assets/js/jquery.min.js "></script> 
 <script src="<?= base_url('assets/js/jquery.js') ?>"></script> 

 <!--Bootstrap Core Javavascript -->
<script type="text/javascript">
	$(document).ready(function(){
       $('#subject').on('change', function(){
       	  var sub_id = $(this).val();
       	  if(sub_id == '')
       	  {
       	  	$('#teacher').prop('disabled',true);
       	  }
       	  else
       	  {
       	  	$('#teacher').prop('disabled', false);
       	  	$.ajax({

       	  		url: "<?php echo base_url() ?>form4/get_teacher",
       	  		type: "POST",
       	  		data: {'sub_id' : sub_id},
       	  		dataType: 'json',
       	  		success: function(data){
       	  			$('#teacher').html(data);
                },
                error: function(){
                	alert('Error Occur...');
                }
                
       	  	});
       	  }
       });
	});

</script>




</body>
</html>