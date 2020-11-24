<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    protected $attributes = [
    	'id_pstat' => 1,
    	'status_handover' => 0,
    ];

    protected $fillable = ['id_product', 'id_ptype', 'id_user', 'id_mitra', 'nama_project'];

    public $timestamps = false;
}
