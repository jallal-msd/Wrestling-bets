<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wrestlers extends Model
{
    use HasFactory;
     protected $attributes=[
            
    ];

    public function bets(){

        return $this->hasMany(bets::class , 'wrestler_id');
    }


}
