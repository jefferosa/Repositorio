<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    // use HasFactory;
    protected $table = 'comidas';

    function zoologicos() {
        return $this->belongsToMany("App\Models\Zoologico", "alocacoes")->withPivot('zoologico_id');
        }

}
