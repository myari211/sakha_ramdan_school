<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extraculiculer extends Model
{
    protected $table = "extraculiculers";

    protected $fillable = [
        "title",
        "image",
    ];
}
