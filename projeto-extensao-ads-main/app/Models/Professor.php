<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    // use HasFactory;
    protected $table = 'professores';

    function cursos() {
        return $this->belongsToMany("App\Models\Curso", "alocacoes")->withPivot('curso_id');
        }

}
