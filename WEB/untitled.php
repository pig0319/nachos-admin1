<script>
$(document).ready(function(){
	
	$(document).on('click', '#getUser', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id'); // get id of clicked row

		
		$('#dynamic-content').hide(); // hide dive for loader
		$('#modal-loader').show();  // load ajax loader
		
		$.ajax({
			url: 'getuser.php',
			type: 'POST',
			data: {
				var_PHP_data : uid
			},
			//'id='+uid,
			dataType: 'json'
		})
		.done(function(data){
			console.log(data);
			$('#dynamic-content').hide(); // hide dynamic div
			$('#dynamic-content').show(); // show dynamic div
			$('#prod_name').html(data.product_name);
			$('#prod_price').html(data.price);
			$('#prod_img').html(data.img);
			$('#prod_category').html(data.category);
			$('#prod_desc').html(data.description);
			$('#modal-loader').hide();    // hide ajax loader
		})
		.fail(function(){
			$('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
		});
		
	});
	
});

</script>





<form method ="post" action="index.php?action=add&product_id=1">
														<div style = "border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align ="center">
														<img src="wings1.jpg" width="90%" height="30%">
														<h1 class="text-info" id="prod_name"></h1>
														<h4 class="text-danger" id = "prod_price"> </h4>
														<h4 class="text-info" id = "prod_desc"></h4>
														<label style="padding:5px"> Quantity : </label> <input type="number" name="quantity"  min="1" max="50" value ="1">
														<!--<input type="text" name ="quantity" class="form-control" value=" "/>-->
														<input type="hidden" name ="hidden_name" id="name" value="" />
														<input type="hidden" name ="hidden_price" value="prod_price"/>
														<input type="submit"  name="add_to_cart" style="margin-top:5px;"  class="btn btn-success" value="Add to Cart"/>
													</div>	
										</form>