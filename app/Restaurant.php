<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model {
    protected $guarded = [];

    public function country() {
        return $this->belongsTo(Country::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
