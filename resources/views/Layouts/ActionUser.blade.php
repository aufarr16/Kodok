<!-- <button class="btn-edit"><i class="fas fa-pencil-alt fa-lg"></i></button>   -->
<a href="{{ route('users.create') }}" type="button" class="modal-show btn-edit" title="Edit Data User" id="btn-modal"><i class="fas fa-pencil-alt fa-lg"></i></a>
<button id="{{ $model->id }}" onclick="deleteUser(id)" class="btn-delete"><i class="fas fa-trash fa-lg"></i></button>
