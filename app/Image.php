<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";

    protected $fillable = [
    	'image',
    	'news_id'
    ];

    public function new(){
    	return $this->beLongTo('App\News');
    }
}
