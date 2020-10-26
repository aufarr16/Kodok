{!! Form::model($model, [
	'route' => $model->exists ? ['mitra.update', $model->id] : 'mitra.store',
	'method' => 'POST'
]) !!}
	
	<div class="form-group">
		<div class ="input-group-addon">
			<label for="ABA" style="font-weight:bolder" style="margin-top: -30px">ABA</label>
				<br>
			{!! Form::number('ABA', null,
				['class'=>'form-control' .($errors->has('ABA') ? 'is-invalid' : ''), 
					'id' =>'ABA',
					'style' =>'margin-bottom: 10px'])
			!!}		
		</div>
	</div>

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="nama_mitra" style="font-weight:bolder" style="margin-top: -30px">Nama Mitra</label>
				<br>
			{!! Form::text('nama_mitra', null,
				['class'=>'form-control' .($errors->has('nama_mitra') ? 'is-invalid' : ''), 
					'id' =>'nama_mitra', 
					'style' =>'margin-bottom: 10px'])
			!!}		
		</div>
	</div>

{!! Form::close() !!}