<!-- 	{{!!Form::model($mitra,[
		'route' => 'admin/submitmitra',
		'method' => 'POST',
	])!!}}

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="ABA" style="font-weight:bolder" style="margin-top: -30px">ABA</label>
		</div>
		<input type ="number" id="ABA" class="form-control" style="margin-bottom: 10px" maxlength = "7" name="ABA"
		oninput="javascript:if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
		<br>
				
		<div class ="input-group-addon">
			<label for="nama_mitra" style="font-weight:bolder" style="margin-top: -30px">Nama Mitra</label>
		</div>
		{{!! Form:text('name', null, ['class'=>'form-control','id'=>'nama_mitra','style'=>'margin-bottom: 10px','name'='nama_mitra'])!!}}
		<!-- <input type="text" id="nama_mitra" class="form-control" style="margin-bottom: 10px" name="nama_mitra"> -->
		<br>
	</div>

	{{!!Form::close()!!}} -->