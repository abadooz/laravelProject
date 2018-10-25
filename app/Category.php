<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'title','description','image'
    ];
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
