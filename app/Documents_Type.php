<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents_Type extends Model
{
	protected $table = 'documents_types';

    protected $fillable = ['nama_dtype'];

    public $timestamps = false;
}
