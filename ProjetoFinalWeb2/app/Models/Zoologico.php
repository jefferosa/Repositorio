<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zoologico extends Model
{

    protected $fillable = [
        'name',
    ];

    // use HasFactory;
    protected $table = 'zoologicos';
    public function animais(){
        return $this->hasMany(Animal::class, 'zoologico_id');
    }
}
