<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    protected $table = "Facilites";

    protected $fillable = [
        "title",
        "description",
        "image"
    ];
}
