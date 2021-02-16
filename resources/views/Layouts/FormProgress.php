{!! Form::model($project, [
	'route' => $project->exists ? ['progress.change', $project->id] : 'progress.edit',
	'method' => $project->exists ? 'PUT' : 'POST'
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
			{!!$errors->first('nama_product','<div class="invalid-feedback flash">$message</div>')!!}
		</div>
	</div>

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="progress_uat" style="font-weight:bolder" style="margin-top: -30px">Progress UAT</label>
				<br>
			{!! Form::text('progress_uat', null,
				['class'=> 'form-control',
					'id' =>'progress_uat', 
					'style' =>'margin-bottom: 10px'
				])
			!!}		
			<!-- {!!$errors->first('nama_product','<div class="invalid-feedback flash">$message</div>')!!} -->
		</div>
	</div>

{!! Form::close() !!}