Function Awal dataTable	

public function dataTable()
{
    $model = Model::query();
    return DataTables::of($model)
        ->addColumn('action', function($model){
            return view('Layouts.Action',[
                'model'=> $model,
                // 'url_edit' => url('', $model->id),
                // 'url_destroy' => route('mitra.delete', $model->ABA),
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
}

Isi Awal Action.php
<a href="{{ $url_show }}" class="btn-show" title="Detail: {{ $model->name }}"><i class=""></i></a>
<a href="{{ $url_delete }}" class="btn-delete" title="Detail: {{ $model->name }}"><i class=""></i></a>
<a href="{{ $url_edit }}" class="btn-edit" title="Detail: {{ $model->name }}"><i class=""></i></a>


, 'listam', 'listpm'