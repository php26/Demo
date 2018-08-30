<?php

namespace Pratice;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function cats()
    {
    	return $this->hasMany('Pratice\Cat');
    }
}
