<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects_Handover extends Model
{
    protected $table = 'projects_handovers';

    protected $fillable =['id_user', 'id_project', 'handover_order'];
}
