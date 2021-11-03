<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents_Type extends Model
{
	protected $table = 'documents_types';

    protected $fillable = ['id_dcategory', 'nama_dtype', 'sub_folder'];

    public $timestamps = false;
}
