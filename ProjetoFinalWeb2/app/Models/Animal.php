<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    // use HasFactory;

    protected $fillable = [
        'codigo',
        'name',
        'classe',
    ];

    protected $table = 'animais';

    public function zoologico(){
        return $this->hasOne(Zoologico::class, 'id', 'zoologico_id');
    }
}
