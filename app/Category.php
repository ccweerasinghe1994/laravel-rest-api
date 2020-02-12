<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // fillable means those columns can be mass assignable other columns cant
    protected $fillable = [
        'name', 'description'
    ];

    public function products()
    {
        //        this is only used when we have many to many relation ship
        return $this->belongsToMany(Product::class);
    }
}
