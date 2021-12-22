<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    protected $fillable = [
        'name',
    ];

    // use HasFactory;
    protected $table = 'cursos';
    public function alunos(){
        return $this->hasMany(Aluno::class, 'curso_id');
    }
}
