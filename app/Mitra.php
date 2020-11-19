<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $fillable = ['ABA', 'nama_mitra', 'added_by', 'modified_by'];

    public $timestamps = false;
}
