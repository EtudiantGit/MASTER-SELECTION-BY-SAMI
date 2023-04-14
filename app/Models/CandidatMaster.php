<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatMaster extends Model
{
    use HasFactory;
    protected $table = 'candidat_master';
    protected $fillable = ['candidat_id','master_id','score'];
    
}
