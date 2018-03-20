$('#deleteID').on('change',function()){
	deleteID = $('#deleteID option:selected');
	$.ajax({
		type: 'POST',
		datatype: 'json',
		data: {deleteID:deleteID},
		url: 'deletePHPconnectJS.php',
		success: function(result){
			$('#deleteName').val(result['prod_name']);
		}
	})
}