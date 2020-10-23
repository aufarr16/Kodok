{!! Form::open([
	'route' => $model->exist ? ['users.update', $model->id] : 'users.store',
	'method' => $model->exist ? 'PUT' : 'POST'
]) !!}
	
	<div class="form-group">
		<div class ="input-group-addon">
			<label for="ABA" style="font-weight:bolder" style="margin-top: -30px">Inisial</label>
				<br>
<<<<<<< HEAD
				{!! Form::text('inisial_user', '', null,
					['class'=>'form-control', 
=======
				{!! Form::text('inisial_user', null,
					['class'=>'form-control' .($errors->has('inisial_user') ? 'is-invalid' : ''), 
>>>>>>> branch_2310
						'id' =>'inisial_user', 
						'style' =>'margin-bottom: 10px'])
				!!}		
		</div>
		<div class ="input-group-addon">
			<label for="nama_user" style="font-weight:bolder" style="margin-top: -30px">Nama</label>
				<br>
<<<<<<< HEAD
				{!! Form::text('nama_user', '', null,
				['class'=>'form-control', 
=======
				{!! Form::text('nama_user', null,
				['class'=>'form-control' .($errors->has('nama_user') ? 'is-invalid' : ''), 
>>>>>>> branch_2310
					'id' =>'nama_user',
					'style' =>'margin-bottom: 10px'])
				!!}		
		</div>
		<div class ="input-group-addon">
			<label for="id_ulevel" style="font-weight:bolder" style="margin-top: -30px">Role</label>
				<br>
<<<<<<< HEAD
				{!!Form::select("id_ulevel",['L' => 'Large', 'S' => 'Small'], null,
         		[ "class" => "form-group",
            		"placeholder" => "Pilih Role"])
=======
				{!!Form::select('id_ulevel',['L' => 'Large', 'S' => 'Small'], null,
         	[
            'class' => 'form-group' .($errors->has('id_ulevel') ? 'is-invalid' : ''),
            'placeholder' => 'Pilih Role'])
>>>>>>> branch_2310
				!!}
		</div>
		<div class ="input-group-addon">
			<label for="email_user" style="font-weight:bolder" style="margin-top: -30px">Email</label>
				<br>
<<<<<<< HEAD
				{!! Form::email('email_user', '', null,
					['class'=>'form-control', 
=======
				{!! Form::email('email_user', null,
					['class'=>'form-control' .($errors->has('email_user') ? 'is-invalid' : ''), 
>>>>>>> branch_2310
						'id' =>'email_user', 
						'style' =>'margin-bottom: 10px'])
				!!}		
		</div>
	</div>

{!! Form::close() !!}