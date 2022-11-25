<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendente extends Model
{
    use HasFactory;

    protected $table = 'atendentes';
    protected $fillable = [
        'nome',
        'criado',
        'conectado',
        'situacao',
        'status',
        'comissao'
    ];
}
