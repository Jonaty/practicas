<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plantel extends Model
{
	protected $table = 'planteles';
	
    protected $fillable = ['nom_plantel', 'siglas', 'campus_id'];

    public function users()
    {
    	return $this->hasMany(User::class);
    }
}
