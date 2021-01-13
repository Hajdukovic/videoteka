<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zanr extends Model
{
    use HasFactory;

    public function filmovi()
    {
        return $this->belongsTo('App\Models\Filmovi', 'idzanr');
    }
}
