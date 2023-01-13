<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $fillable = [

        'id',
        'name',
        'email',
        'cpf',
        'datanascimento',
        'celular',
        'cep',
        'endereco',
        'numero',
        'bairro',
        'complemento',
        'cidade',
        'estado'

    ];
}
