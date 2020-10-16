{!! Form::open([
	'route' => $model->exist ? ['users.update', $model->id] : 'users.store',
	'method' => $model->exist ? 'PUT' : 'POST'
]) !!}
	
	<div class="form-group">
		<div class ="input-group-addon">
			<label for="ABA" style="font-weight:bolder" style="margin-top: -30px">Inisial</label>
				<br>
				{!! Form::text('inisial_user', null,
					['class'=>'form-control', 
						'id' =>'inisial_user', 
						'style' =>'margin-bottom: 10px'])
				!!}		
		</div>
		<div class ="input-group-addon">
			<label for="nama_user" style="font-weight:bolder" style="margin-top: -30px">Nama</label>
				<br>
				{!! Form::text('nama_user', null,
				['class'=>'form-control', 
					'id' =>'nama_user',
					'style' =>'margin-bottom: 10px'])
				!!}		
		</div>
		<div class ="input-group-addon">
			<label for="id_ulevel" style="font-weight:bolder" style="margin-top: -30px">Role</label>
				<br>
				{!!Form::select("id_ulevel",['L' => 'Large', 'S' => 'Small'], null,
         [
            "class" => "form-group",
            "placeholder" => "Pilih Role"])
				!!}
		</div>
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

{!! Form::close() !!}