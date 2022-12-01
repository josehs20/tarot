<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $fillable = [
        'nome',
        'nascimento',
        'telefone',
        'sexo',
        'criado',
        'conectado',
        'status',
        'tempo',
        'tempo_conversa'
    ];
}
