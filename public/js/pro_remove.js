$('.delete_prd').click( function() {
	let id = $(this).attr('data-id');
	const token = $('#token').val();
	$.ajax({
		url: '/deletpro',
		type: 'post',
		data: {'_token': token},
		success: function(r){

		}
	})
	$(this).parent().remove();
});