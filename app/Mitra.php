<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $fillable = ['ABA', 'nama_mitra'];

    public $timestamps = false;
}
