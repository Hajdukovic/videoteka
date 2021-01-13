<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filmovi extends Model
{
    use HasFactory;

    public function zanr()
    {
        return $this->belongsTo('App\Models\zanr', 'idzanr');
    }

}

