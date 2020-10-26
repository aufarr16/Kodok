<!-- <button id="{{ $model->ABA }}" class="btn-edit"  title="Edit data mitra"><i class="fas fa-pencil-alt fa-lg"></i></button>  --> 
<a href="{{ $url_edit }}" type="button" class="modal-show btn-edit" title="Edit Data Mitra" id="btn-modal"><i class="fas fa-pencil-alt fa-lg"></i></a>
<button id="{{ $model->ABA }}" onclick="deleteMitra(id)" class="btn-delete" title="Delete Data mitra"><i class="fas fa-trash fa-lg"></i></button>
