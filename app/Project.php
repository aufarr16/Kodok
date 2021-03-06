<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    protected $attributes = [
    	'id_pstat' => 1,
    	'status_handover' => 0,
    	'handover_counter' => 0,
    	'progress_sit' => 0,
    	'progress_uat' => 0,
    ];

    protected $fillable = ['id_product', 'id_ptype', 'id_mitra', 'nama_project', 'id_current_pic', 'id_original_pic', 'id_pic_product', 'id_pic_am', 'id_pic_pm'];

    public $timestamps = false;
}
