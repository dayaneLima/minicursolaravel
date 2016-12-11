<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = "aluno";
    protected $primaryKey = "idAluno";
    public $timestamps = false;
    protected $guarded = [];
}
