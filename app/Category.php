<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = [
    	'name',
    	'slug',
    	'user_id'
    ];

    public function new(){
    	return $this->hasMany('App\News');
    }
}
