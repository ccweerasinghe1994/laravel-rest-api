<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name','description'
    ];

    public function products(){
//        this is only used when we have many to many relation ship
        return $this->belongsToMany(Product::class);
    }
}
