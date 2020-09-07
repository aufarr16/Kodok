<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['id_ulevel', 'nama_user', 'email_user', 'inisial_user'];

    public $timestamps = false;
}
