<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects_Keterangan extends Model
{
    protected $table = 'projects_keterangans';

    protected $fillable =['nama_pketerangan'];

    public $timestamps = false;
}
