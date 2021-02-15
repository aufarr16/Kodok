{!! Form::model($model, [
	'route' => $model->exists ? ['progress.change', $model->id] : 'progress.edit',
	'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="progress_sit" style="font-weight:bolder" style="margin-top: -30px">Progress SIT</label>
				<br>
			{!! Form::text('progress_sit', null,
				['class'=> 'form-control',
					'id' =>'progress_sit', 
					'style' =>'margin-bottom: 10px'
				])
			!!}		
			<!-- {!!$errors->first('nama_product','<div class="invalid-feedback flash">$message</div>')!!} -->
		</div>
	</div>

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="progress_uat" style="font-weight:bolder" style="margin-top: -30px">Progress UAT</label>
				<br>
			{!! Form::text('progress_sit', null,
				['class'=> 'form-control',
					'id' =>'progress_sit', 
					'style' =>'margin-bottom: 10px'
				])
			!!}		
			<!-- {!!$errors->first('nama_product','<div class="invalid-feedback flash">$message</div>')!!} -->
		</div>
	</div>

{!! Form::close() !!}