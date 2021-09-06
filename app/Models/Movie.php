<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        "title", "image", "overview", "purchase_price", "rental_price"
    ];

    public function users() {
        return $this->belongsToMany("App\Models\User",'movie_user');
    }
}
