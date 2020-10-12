function getHandoverData(id){
	var elementPIC = document.getElementById(id);
	var picID = $(elementPIC).val();
	// console.log(picID);

	$('#nama_project2').find('option').not(':first').remove();
	$('#PIChandover').find('option').not(':first').remove();		

	$.ajax({
		url: '/manager/handover/project/'+picID,
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
		url: '/manager/handover/pic/'+picID,
		type: 'get',
		dataType: 'json',

		success: function(response){
			// console.log(response);
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
}

function deleteMitra(id){
	// console.log(id);
	event.preventDefault();

	var idDel = id;

	Swal.fire({
	  title: 'Yakin hapus data ini?',
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: 'lightgrey',
	  cancelButtonColor: 'dodgerblue',
	  confirmButtonText: 'Ya',
	  cancelButtonText: 'Tidak'
	}).then((result)=>{
		if(result.value){
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$.ajax({
				url: '/admin/delmitra/'+idDel,
				type: 'get',
				data: {
					'_method': 'DELETE'
				},

				success: function(response){
					console.log(response);
					$('#table1').DataTable().ajax.reload();

					Swal.fire({
						title:'Data mitra berhasil dihapus',
						type:'success',
						toast:true,
						showConfirmButton:false,
						position: 'top',
						timer:1500,
						timerProgressBar:true,
						background:'#D4F1F4'
					})
				},

				error: function(xhr){
					Swal.fire({
						type: 'error',
						title: 'Oops...',
						text: 'Something went wrong!'
					})
				}
			})
		} else if (result.dismiss === 'cancel') {
			Swal.fire({
				title:'Data mitra tetap tersimpan',
				type:'info',
				toast:true,
				showConfirmButton:false,
				position:'top',
				grow:'row',
				timer:1500,
				timerProgressBar:true,
				background:'#D2FBA4'
			})
		}
	})
}

function deleteProduct(id){
	console.log(id);
	event.preventDefault();

	var idDel = id;

	Swal.fire({
	  title: 'Yakin hapus data ini?',
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: 'lightgrey',
	  cancelButtonColor: 'dodgerblue',
	  confirmButtonText: 'Ya',
	  cancelButtonText: 'Tidak'
	}).then((result)=>{
		if(result.value){
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$.ajax({
				url: '/admin/delproduct/'+idDel,
				type: 'get',
				data: {
					'_method': 'DELETE'
				},

				success: function(response){
					console.log(response);
					$('#table1').DataTable().ajax.reload();

					Swal.fire({
						title:'Data product berhasil dihapus',
						type:'success',
						toast:true,
						showConfirmButton:false,
						position: 'top',
						timer:1500,
						timerProgressBar:true,
						background:'#D4F1F4'
					})
				},

				error: function(xhr){
					Swal.fire({
						type: 'error',
						title: 'Oops...',
						text: 'Something went wrong!'
					})
				}
			})
		} else if (result.dismiss === 'cancel') {
			Swal.fire({
				title:'Data product tetap tersimpan',
				type:'info',
				toast:true,
				showConfirmButton:false,
				position:'top',
				grow:'row',
				timer:1500,
				timerProgressBar:true,
				background:'#D2FBA4'
			})
		}
	})
}

function deleteUser(id){
	console.log(id);
	event.preventDefault();

	var idDel = id;

	Swal.fire({
	  title: 'Yakin hapus data ini?',
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: 'lightgrey',
	  cancelButtonColor: 'dodgerblue',
	  confirmButtonText: 'Ya',
	  cancelButtonText: 'Tidak'
	}).then((result)=>{
		if(result.value){
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$.ajax({
				url: '/admin/deluser/'+idDel,
				type: 'get',
				data: {
					'_method': 'DELETE'
				},

				success: function(response){
					console.log(response);
					$('#table1').DataTable().ajax.reload();

					Swal.fire({
						title:'Data user berhasil dihapus',
						type:'success',
						toast:true,
						showConfirmButton:false,
						position: 'top',
						timer:1500,
						timerProgressBar:true,
						background:'#D4F1F4'
					})
				},

				error: function(xhr){
					Swal.fire({
						type: 'error',
						title: 'Oops...',
						text: 'Something went wrong!'
					})
				}
			})
		} else if (result.dismiss === 'cancel') {
			Swal.fire({
				title:'Data user tetap tersimpan',
				type:'info',
				toast:true,
				showConfirmButton:false,
				position:'top',
				grow:'row',
				timer:1500,
				timerProgressBar:true,
				background:'#D2FBA4'
			})
		}
	})
}
