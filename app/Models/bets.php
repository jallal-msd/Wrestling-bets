<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bets extends Model
{
    use HasFactory;


    protected  $fillable =[
        'amount',
        'user_id',
        'wrestler_id',
    ];


    public function user(){

        return $this->belongsTo(User::class);

    }

        public function wrestler(){

        return $this->belongsTo(Wrestlers::class);
    }
   
}
