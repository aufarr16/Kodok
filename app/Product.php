<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nama_product', 'added_by', 'modified_by'];

    public $timestamps = false;
}
