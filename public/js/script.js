$(function(){
	$('.picAsli').change(function(){
		const id = $(this).val();

		$('#nama_project2').find('option').not(':first').remove();

		// $.ajaxSetup({
	 //        headers: {
	 //            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	 //        }
	 //    });

		$.ajax({
			url: '/manager/assign/'+id,
			type: 'get',
			dataType: 'json',

			success: function(response){
				// console.log(response);
				var len = 0;
				if(response['data'].length != null){
					len = response['data'].length;
				}

				if(len > 0){
					for (var i=0; i<len; i++){
						var id = response['data'][i].id_project;
						var name = response['data'][i].nama_project;

						var option = "<option value='"+id+"'>"+name+"</option>";

						$("#nama_project2").append(option);
					}
				}
			}
		})	
	})
});