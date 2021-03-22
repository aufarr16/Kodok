{!! Form::model($project, [
	'route' => ['progress.update', $project->id],
	'method' => 'PUT'
]) !!}

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="progress_sit" style="font-weight:bolder" style="margin-top: -30px">Progress SIT (%)</label>
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
			<label for="progress_uat" style="font-weight:bolder" style="margin-top: -30px">Progress UAT (%)</label>
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

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="notes_project" style="font-weight:bolder" style="margin-top: -30px">Notes</label>
				<br>
			{!! Form::textarea('notes_project', null,
				['class'=> 'form-control',
					'rows' => '2',
					'id' =>'notes_project', 
					'style' =>'margin-bottom: 10px'
				])
			!!}		
			<!-- {!!$errors->first('nama_product','<div class="invalid-feedback flash">$message</div>')!!} -->
		</div>
	</div>

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="bobot_project" style="font-weight:bolder" style="margin-top: -30px">Bobot</label>
				<br>
			{!! Form::select('bobot_project', [' '=> ' ', '1' => '1', '2' => '2', '3' => '3'], null,
				['class'=> 'form-control',
					'id' =>'bobot_project', 
					'style' =>'margin-bottom: 10px'
				]);
			!!}		
			<!-- {!!$errors->first('nama_product','<div class="invalid-feedback flash">$message</div>')!!} -->
		</div>
	</div>
	

{!! Form::close() !!}