<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionarios extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionariosFactory> */
    use HasFactory;

    protected $table = 'questionarios';

    protected $fillable = [
       'nome',
       'idade',
       'sexo',
       'altura_peso',
       'contato',
       'doenca',
       'medicamento',
       'hospitalizacao',
       'alergias',
       'atividade_fisica',
       'alimentacao',
       'fumante',
       'alcool'
    ];
}
