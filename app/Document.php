<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
	protected $fillable = ['id_project', 'id_dtype', 'nama_document', 'direktori_document', 'softcopy_status', 'hardcopy_status', 'uploaded_by'];

    public $timestamps = false;
}
