<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function restaurants() {
        return $this->hasMany(Restaurant::class);
    }
}
