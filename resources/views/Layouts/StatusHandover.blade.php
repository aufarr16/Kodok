<form method="POST" action="/engineer/handover/changestat">
	@method('patch')
	@csrf
	<input type="hidden" value="{{ $project->id }}" name="id">
	<div class="input-group">
		<select class="custom-select" name="id_pstat">
			<option value="" hidden>{{ $project->nama_pstat }}</option>
			@foreach($pstat as $stat)
				<option value="{{ $stat->id }}">{{ $stat->nama_pstat }}</option>
			@endforeach  
		</select>
												
		<button class="btn-ok" type="submit">OK</button>
	</div>
</form>