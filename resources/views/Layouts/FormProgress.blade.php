{!! Form::model($project, [
	'route' => ['progress.update', $project->id],
	'method' => 'PUT'
]) !!}

	<div class="row">
		<div class="col-sm-6">
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
		</div>

		<div class="col-sm-6">
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
					'placeholder' => 'Masukan Notes',
					'style' =>'margin-bottom: 10px'
				])
			!!}		
			<!-- {!!$errors->first('nama_product','<div class="invalid-feedback flash">$message</div>')!!} -->
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<div class ="input-group-addon">
					<label for="nodin_in" style="font-weight:bolder" style="margin-top: -30px">Nodin In</label>
						<br>
					{!! Form::text('nodin_in', null,
						['class'=> 'form-control',
							'rows' => '2',
							'id' =>'nodin_in',
							'placeholder' => 'Masukan Nomor Nodin In', 
							'style' =>'margin-bottom: 10px'
						])
					!!}		
					<!-- {!!$errors->first('nama_product','<div class="invalid-feedback flash">$message</div>')!!} -->
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<div class ="input-group-addon">
					<label for="nodin_out" style="font-weight:bolder" style="margin-top: -30px">Nodin Out</label>
						<br>
					{!! Form::text('nodin_out', null,
						['class'=> 'form-control',
							'rows' => '2',
							'id' =>'nodin_out', 
							'placeholder' => 'Masukan Nomor Nodin Out',
							'style' =>'margin-bottom: 10px'
						])
					!!}		
					<!-- {!!$errors->first('nama_product','<div class="invalid-feedback flash">$message</div>')!!} -->
				</div>
			</div>
		</div>	
	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<div class ="input-group-addon">
					<label for="no_bako" style="font-weight:bolder" style="margin-top: -30px">BAKO</label>
						<br>
					{!! Form::text('no_bako', null,
						['class'=> 'form-control',
							'rows' => '2',
							'id' =>'no_bako', 
							'placeholder' => 'Masukan Nomor BAKO',
							'style' =>'margin-bottom: 10px'
						])
					!!}		
					<!-- {!!$errors->first('nama_product','<div class="invalid-feedback flash">$message</div>')!!} -->
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<div class ="input-group-addon">
					<label for="no_bato" style="font-weight:bolder" style="margin-top: -30px">BATO</label>
						<br>
					{!! Form::text('no_bato', null,
						['class'=> 'form-control',
							'rows' => '2',
							'id' =>'no_bato',
							'placeholder' => 'Masukan Nomor BATO',
							'style' =>'margin-bottom: 10px'
						])
					!!}		
					<!-- {!!$errors->first('nama_product','<div class="invalid-feedback flash">$message</div>')!!} -->
				</div>
			</div>
		</div>	
	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<div class ="input-group-addon">
					<label for="no_bae" style="font-weight:bolder" style="margin-top: -30px">BAE</label>
						<br>
					{!! Form::text('no_bae', null,
						['class'=> 'form-control',
							'rows' => '2',
							'id' =>'no_bae',
							'placeholder' => 'Masukan Nomor BAE',
							'style' =>'margin-bottom: 10px'
						])
					!!}		
					<!-- {!!$errors->first('nama_product','<div class="invalid-feedback flash">$message</div>')!!} -->
				</div>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="form-group">
				<div class ="input-group-addon">
					<label for="bobot_project" style="font-weight:bolder" style="margin-top: -30px">Bobot</label>
						<br>
					{!! Form::select('bobot_project', [' '=> 'Pilih Bobot', '1' => '1', '2' => '2', '3' => '3'], null,
						['class'=> 'form-control',
							'id' =>'bobot_project', 
							'style' =>'margin-bottom: 10px'
						]);
					!!}		
					<!-- {!!$errors->first('nama_product','<div class="invalid-feedback flash">$message</div>')!!} -->
				</div>
			</div>
		</div>
	</div>
	

{!! Form::close() !!}