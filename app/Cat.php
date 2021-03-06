<?php

namespace Pratice;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cat extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'breed_id'
    ];

    public function breed()
    {
    	return $this->belongsTo('Pratice\Breed');
    }
}
