<div class="input-group">
	<select id="{{ $project->id }}" class="custom-select rounded-0 selectpstat" name="id_pstat">
		<option value="{{ $project->id_pstat }}" hidden>{{ $project->nama_pstat }}</option>
		@foreach($pstat as $stat)
			<option value="{{ $stat->id }}">{{ $stat->nama_pstat }}</option>
		@endforeach
	</select>								
	<span class="input-group-append">
        <button id="{{ $project->id }}" onclick="changeStatusProject(id)" type="submit" class="btn btn-info">OK</button>
      </span>
<!-- 	<button id="{{ $project->id }}" onclick="changeStatusProject(id)" class="btn-ok" type="submit" >OK</button> -->
</div>	
