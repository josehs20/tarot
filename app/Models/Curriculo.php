<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    use HasFactory;
    protected $table = 'curriculos';
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'cidade',
        'uf',
        'sobre',
        'curriculo',
        'status'
    ];
}
