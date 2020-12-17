<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects_Handover extends Model
{
    protected $table = 'projects_handovers';

    protected $attributes = [
    	'is_active' => 1,
    ];
    
    protected $fillable =['id_user', 'id_project', 'handover_order'];

    public $timestamps = false;
}
