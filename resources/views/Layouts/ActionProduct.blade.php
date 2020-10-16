<!-- <button id="{{ $model->id_product }}" onclick="editProduct(id)" class="modal-show btn-edit"><i class="fas fa-pencil-alt fa-lg"></i></button>  --> 
<a href="{{ route('products.create') }}" type="button" class="modal-show btn-edit" title="Edit Data Products" id="btn-modal"><i class="fas fa-pencil-alt fa-lg"></i>
</a>
<button id="{{ $model->id_product }}" onclick="deleteProduct(id)" class="btn-delete"><i class="fas fa-trash fa-lg"></i></button>
