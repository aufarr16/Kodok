
@if('id_current_pic' === 'id_original_pic')
<a href="{{ $url_edit }}" type="button" class="modal-show btn btn-danger btn-edit " title="Edit Project" id="btn-modal"><i class="fas fa-pencil-alt"></i></a>
@else
<a type="button" class="modal-show btn btn-danger btn-edit disabled" title="Edit Project" id="btn-modal"><i class="fas fa-pencil-alt"></i></a>
@endif

<button id="{{ $data->id }}" onclick="deleteProject(id)" class="btn btn-warning btn-delete" title="Delete Data Project"><i class="fas fa-trash"></i></button>