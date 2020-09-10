$(function(){
	$('.picAsli').change(function(){
		const id = $(this).val();

		$('#nama_project2').find('option').not(':first').remove();
		$('#PIChandover').find('option').not(':first').remove();		

		$.ajax({
			url: '/manager/handover/project/'+id,
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

		$.ajax({
			url: '/manager/handover/pic/'+id,
			type: 'get',
			dataType: 'json',

			success: function(response){
				console.log(response);
				var len = 0;

				if(response['data'].length != null){
					len = response['data'].length;
				}

				if(len > 0){
					for(var a=0; a<len; a++){
						var id = response['data'][a].id_user;
						var name = response['data'][a].nama_user;

						var option = "<option value='"+id+"'>"+name+"</option>";

						$("#PIChandover").append(option);
					}
				}

			}
		})

	})
});