<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    public function masters(){
        return $this->belongsToMany(Master::class)
        ->withPivot('score')
        ->withTimestamps();
    }
}
