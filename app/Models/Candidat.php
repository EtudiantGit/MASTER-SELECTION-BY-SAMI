<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'annee_bac',
        'date_inscription_dernier_diplome',
        'date_obtiention_diplome_licence',
        'moyenne_S1',
        'moyenne_S2',
        'moyenne_S3',
        'moyenne_S4',
        'moyenne_S5',
        'moyenne_S6',
        'session_S1',
        'session_S2',
        'session_S3',
        'session_S4',
        'session_S5',
        'session_S6'
    ];
    public function masters(){
        return $this->belongsToMany(Master::class)
        ->withPivot('score')
        ->withTimestamps();
    }
    /***Cette méthode sert à generer un numero de dossier aléatoire */
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($candidat) {
    //         $candidat->num_dossier = mt_rand(1, 9999999999);
    //     });
    // }
}
