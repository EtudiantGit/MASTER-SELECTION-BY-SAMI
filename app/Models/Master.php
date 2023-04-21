<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;

    protected $fillable = ['title','departement_id','type_id',
    'coef_moyenne_s1',
    'coef_moyenne_s2' , 
    'coef_moyenne_s3',
    'coef_moyenne_s4',
    'coef_moyenne_s5',
    'coef_moyenne_s6',
    'coef_moyenne_licence',
    //-------------------------------
    'ordinaireS1',
    'ordinaireS2',
    'ordinaireS3',
    'ordinaireS4',
    'ordinaireS5',
    'ordinaireS6',
    //--------------------------------
    'dureeDiplome3ans',
    'dureeDiplome4ans',
    'dureeDiplome5ans',
    'dureeDiplome6ans',
    //--------------------------------
    'ancienteDiplome0an',
    'ancienteDiplome1an',
    'ancienteDiplome2ans',
    'ancienteDiplome3ans',
    //--------------------------------
    'deugmin1' ,
    'deugmin2' ,
    'deugmin3' ,
    'deugmin4' ,
    'deugmin5' ,
    'deugmin6' ,
    //--------------------------------
    'deugmax1' ,
    'deugmax2' ,
    'deugmax3' ,
    'deugmax4' ,
    'deugmax5' ,
    'deugmax6' ,
    //----------,----------------------
    'bonusDeug1',
    'bonusDeug2',
    'bonusDeug3',
    'bonusDeug4',
    'bonusDeug5',
    'bonusDeug6',
    //-------------------------------
    'S5_S6_min1' , 
    'S5_S6_min2'  ,
    'S5_S6_min3'  ,
    'S5_S6_min4'  ,
    'S5_S6_min5'  ,
    'S5_S6_min6'  ,
    //-------------------------------
    'S5_S6_max1'  ,
    'S5_S6_max2'  ,
    'S5_S6_max3'  ,
    'S5_S6_max4'  ,
    'S5_S6_max5'  ,
    'S5_S6_max6'  ,
    //-------------,-----------------
    'bonus_S5_S6_1',
    'bonus_S5_S6_2',
    'bonus_S5_S6_3',
    'bonus_S5_S6_4',
    'bonus_S5_S6_5',
    'bonus_S5_S6_6',
    //----------------------------
    'licence_min_1',
    'licence_min_2',
    'licence_min_3',
    'licence_min_4',
    'licence_min_5',
    'licence_min_6',
    //--------------,--------------
    'licence_max_1',
    'licence_max_2',
    'licence_max_3',
    'licence_max_4',
    'licence_max_5',
    'licence_max_6',
    //--------------,--------------
    'bonus_licence_1',
    'bonus_licence_2',
    'bonus_licence_3',
    'bonus_licence_4',
    'bonus_licence_5',
    'bonus_licence_6',
        ];

    public function candidats(){
        return $this->belongsToMany(Candidat::class)
        ->withPivot('score')
        ->withTimestamps();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
}
