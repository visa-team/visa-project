<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";

    protected $fillable = [
    	'title',
    	'slug',
    	'summary',
    	'content',
    	'image',
    	'user_id',
    	'cate_id'
    ];	

    public function category(){
        return $this->beLongTo('App\News');
    }

    public function image(){
        return $this->hasMany('App\Image');
    }
}
