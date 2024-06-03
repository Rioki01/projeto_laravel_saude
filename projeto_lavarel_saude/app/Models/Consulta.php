<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $fillable = ['rua',
    'bairro',
    'numero',
    'userid',
    'cidade',
    'especialidade',
    'nomemedico',
    'nomepaciente',
    'data_chamado',
    'data',
    'horario',
    'data_nascimento',
    'telefone',
    'forma_pagamento',
    'valor',
    ];

    public function paciente()
    {
        return $this->belongsTo(User::class);
    }
}
