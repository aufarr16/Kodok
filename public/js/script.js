$(function(){
	$('.picAsli').change(function(){
		if($('picAsli').val() != ''){
			const id = $(this).val(	);

			$.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });

			$.ajax({
				url: "/manager/assigns",
				data: {id : id},
				type: "POST",

				success: function(data){
					console.log(data);
				}
			})
		}
	})
});