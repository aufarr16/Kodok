<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    // protected $fillable = ['id_ulevel', 'nama_user', 'email_user', 'inisial_user'];
    protected $fillable = ['id_ulevel', 'nama', 'email', 'inisial_user'];

    public $timestamps = false;

    public function getAuthIdentifierName(){

    }

	public function getAuthIdentifier(){

	}

	public function getAuthPassword(){
		return $this->password;
	}

	public function getRememberToken(){

	}

	public function setRememberToken($value){

	}

	public function getRememberTokenName(){

	}

	public function setPasswordAttribute($password)
	{
	    $this->attributes['password'] = bcrypt($password);
	}

	public function retrieveByCredentials(array $credentials)
	{
	    // First we will add each credential element to the query as a where clause.
	    // Then we can execute the query and, if we found a user, return it in a
	    // Eloquent User "model" that will be utilized by the Guard instances.
	    $query = $this->createModel()->newQuery();

	    foreach ($credentials as $key => $value)
	    {
	        if ( ! str_contains($key, 'password')) $query->where($key, $value);
	    }

	    return $query->first();
	}
}
