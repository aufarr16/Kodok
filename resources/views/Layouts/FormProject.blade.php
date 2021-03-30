{!! Form::model($project, [
	'route' => ['projects.update', $project->id],
	'method' => 'PUT'
]) !!}
	<div class="form-group">
		<div class ="input-group-addon">
			<label for="id_current_pic" style="font-weight:bolder" style="margin-top: -30px">Inisial</label>
				<br>
				{!! Form::select('id_current_pic', $inisial, null, array(
				    'class' => 'form-control selectcurrentpic',
				    'id' => 'id_current_pic', 
				    'placeholder' => '',
				    'style' => 'Background: #ffff', 
				    )) 
				!!}
		</div> 
	</div> 

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="id_product" style="font-weight:bolder" style="margin-top: -30px">Nama Product</label>
				<br>
				{!! Form::select('id_product', $product, null, array(
				    'class' => 'form-control selectpicam',
				    'id' => 'nama_product',
				    'placeholder' => '', 
				    'style' => 'Background: #ffff',
				    )) 
				!!}
		</div>
	</div>

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="id_ptype" style="font-weight:bolder" style="margin-top: -30px">Jenis Project</label>
				<br>
				{!! Form::select('id_ptype', $ptype, null, array(
				    'class' => 'form-control selectptype,
				    'id' => 'nama_ptype',
				    'placeholder' => '',
				    'style' => 'Background: #ffff', 
				    )) 
				!!}
		</div>
	</div>

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="id_mitra" style="font-weight:bolder" style="margin-top: -30px">Nama Mitra</label>
				<br>
				{!! Form::select('id_mitra', $mitra, null, array(
				    'class' => 'form-control selectmitra,
				    'id' => 'nama_mitra',
				    'placeholder' => '',
				    'style' => 'Background: #ffff', 
				    )) 
				!!}
		</div>
	</div>

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="nama_project" style="font-weight:bolder" style="margin-top: -30px">Nama Project</label>
				<br>
			{!! Form::text('napro', null,
				['class'=> 'form-control',
					'id' =>'nama_project', 
					'style' =>'margin-bottom: 10px'
				])
			!!}		
			<!-- {!!$errors->first('nama_product','<div class="invalid-feedback flash">$message</div>')!!} -->
		</div>
	</div>
	
	
{!! Form::close() !!}