{!! Form::model($model, [
	'route' => 'user.store',
	'method' => 'POST'
]) !!}
	
	<div class="form-group">
		<div class ="input-group-addon">
			<label for="ABA" style="font-weight:bolder" style="margin-top: -30px">ABA</label>
				<br>
			{!! Form::number('ABA', null,
					['class'=>'form-control', 'id' =>'ABA', 'style' =>'margin-bottom: 10px'])
			!!}		
		</div>
		<div class ="input-group-addon">
			<label for="nama_mitra" style="font-weight:bolder" style="margin-top: -30px">Nama Mitra</label>
				<br>
			{!! Form::text('nama_mitra', null,
					['class'=>'form-control', 'id' =>'nama_mitra', 'style' =>'margin-bottom: 10px'])
			!!}		
		</div>
	</div>

{!! Form::close() !!}
<!-- {!! Form::model($model, [
	'route' => 'users.store',
	'method' => 'POST'
]) !!}

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="inisial_user" style="font-weight:bolder" style="margin-top: -30px">Inisial</label>
				<br>
			{!! Form::text('inisial_user', null,
					['class'=>'form-control', 'id' =>'inisial_user', 'style' =>'margin-bottom: 10px', 'text-transform' =>'uppercase','maxlength="3"'])
			!!}		
		</div>
		<div class ="input-group-addon">
			<label for="nama_user" style="font-weight:bolder" style="margin-top: -30px">Inisial</label>
				<br>
			{!! Form::text('nama_user', null,
					['class'=>'form-control', 'id' =>'nama_user', 'style' =>'margin-bottom: 10px'])
			!!}		
		</div>
		<div class ="input-group-addon">
			<label for="id_ulevel" style="font-weight:bolder" style="margin-top: -30px">Inisial</label>
				<br>
			{!! Form::select('id_ulevel', null,
					['class'=>'form-control', 'id' =>'id_ulevel', 'style' =>'margin-bottom: 10px'])
			!!}		
		</div>
		<div class ="input-group-addon">
			<label for="id_ulevel" style="font-weight:bolder" style="margin-top: -30px">Inisial</label>
				<br>
			{!! Form::text('email_user', null,
					['class'=>'form-control', 'id' =>'email_user', 'style' =>'margin-bottom: 10px'])
			!!}		
		</div>
	</div>

{!! Form::close() !!} -->