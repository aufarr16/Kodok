console.log('script.js is in');

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
					var id = response['data'][i].id;
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
					var id = response['data'][a].id;
					var name = response['data'][a].nama_user;

					var option = "<option value='"+id+"'>"+name+"</option>"; 

					$("#PIChandover").append(option);
				}
			}
		}
	})
}

function deleteMitra(id){
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
						position: 'top-end',
						timer:1500,
						timerProgressBar:true,
						background:'#a3ffa3'
					})
				},

				error: function(xhr){
					Swal.fire({
						type: 'error',
						toast:true,
						title: 'Oops...',
						text: 'Something went wrong!',
						timer: 4000,
						background: 'bisque'
					})
				}
			})
		} else if (result.dismiss === 'cancel') {
			Swal.fire({
				title:'Data mitra tetap tersimpan',
				type:'info',
				toast:true,
				showConfirmButton:false,
				position:'top-end',
				grow:'row',
				timer:1500,
				timerProgressBar:true,
				background:'#B4F5F0'
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
						position: 'top-end',
						timer:1500,
						timerProgressBar:true,
						background:'#a3ffa3'
					})
				},

				error: function(xhr){
					Swal.fire({
						type: 'error',
						toast:true,
						title: 'Oops...',
						text: 'Something went wrong!',
						timer: 4000,
						background: 'bisque'
					})
				}
			})
		} else if (result.dismiss === 'cancel') {
			Swal.fire({
				title:'Data product tetap tersimpan',
				type:'info',
				toast:true,
				showConfirmButton:false,
				position:'top-end',
				grow:'row',
				timer:1500,
				timerProgressBar:true,
				background:'#B4F5F0'
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
						position: 'top-end',
						timer:1500,
						timerProgressBar:true,
						background:'#a3ffa3'
					})
				},

				error: function(xhr){
					Swal.fire({
						type: 'error',
						toast:true,
						title: 'Oops...',
						text: 'Something went wrong!',
						timer: 4000,
						background: 'bisque'
					})
				}
			})
		} else if (result.dismiss === 'cancel') {
			Swal.fire({
				title:'Data user tetap tersimpan',
				type:'info',
				toast:true,
				showConfirmButton:false,
				position:'top-end',
				grow:'row',
				timer:1500,
				timerProgressBar:true,
				background:'#B4F5F0'
			})
		}
	})
}

$('body').on('click', '#button-submit', function(event){
	event.preventDefault();

	var form = $('#modal-body form'),
		url = form.attr('action'),
		method = form.attr('method');

	// console.log(method);
	// console.log(url);

	form.find('.help-block').remove();
	form.find('.form-group').removeClass('has-error');

	$.ajax({
		url : url,
		method : method,
		data : form.serialize(),
		success : function(response){
			console.log(response);
			form.trigger('reset');
			$('#modal').modal('hide');
			$('#table1').DataTable().ajax.reload();

			Swal({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 4000,
			background: '#a3ffa3',
			type: 'success',
			text: 'Data berhasil disimpan',
			timerProgressBar: true,
		})
		},
		error : function(xhr){
			var resp = xhr.responseJSON;
			if($.isEmptyObject(resp) == false){
				$.each(resp.errors, function(key, value){
					$('#' + key)
						.closest('.form-group')
						.addClass('has-error')
						.append('<span class="help-block is-invalid">' + value + '</span>')
				})
			}
		}
	})
})

$('body').on('click', '.modal-show', function(event){
    event.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        title = me.attr('title');

	$('#modal-title').text(title);
	$('#button-submit').text(me.hasClass('btn-edit') ? 'Edit Data' : 'Tambah Data')

    $.ajax({
    	type: 'GET',
        url: url,
        dataType: 'html',
        success: function (response) {
            $('#modal-body').html(response); 
            // console.log($('#modal-body'));
        }
    });

    $('#modal').modal('show');
});


