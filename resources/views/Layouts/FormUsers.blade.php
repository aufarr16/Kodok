{!! Form::model($model, [
	'route' => $model->exists ? ['users.update', $model->id] : 'users.store',
	'method' => $model->exists ? 'PUT' : 'POST'
]) !!}
	
	<div class="form-group">
		<div class ="input-group-addon">
			<label for="inisial_user" style="font-weight:bolder" style="margin-top: -30px">Inisial</label>
				<br>
				{!! Form::text('inisial_user', null,
					['class'=>'form-control',
						'id' =>'inisial_user', 
						'style' =>'margin-bottom: 10px'])
				!!}		
		</div>
	</div>

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="nama_user" style="font-weight:bolder" style="margin-top: -30px">Nama</label>
				<br>
				{!! Form::text('nama_user', null,
				['class'=>'form-control', 
					'id' =>'nama_user',
					'style' =>'margin-bottom: 10px'])
				!!}		
		</div>
	</div>


	<div class="form-group">
		<div class ="input-group-addon">
			<label for="email_user" style="font-weight:bolder" style="margin-top: -30px">Email</label>
				<br>
				{!! Form::email('email_user', null,
					['class'=>'form-control', 
						'id' =>'email_user', 
						'style' =>'margin-bottom: 10px'])
				!!}		
		</div>
	</div>

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="nama_ulevel" style="font-weight:bolder" style="margin-top: -30px">Role</label>
				<br>
				{!! Form::select('nama_ulevel', $levels, null, array(
				    'class' => 'form-control selectrole',
				    'id' => 'nama_ulevel', 
				    )) 
				!!}
		</div>
	</div>
{!! Form::close() !!}