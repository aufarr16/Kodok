<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents_Category extends Model
{
    protected $table = 'documents_categories';

    protected $fillable = ['nama_dcategory'];

    public $timestamps = false;
}
