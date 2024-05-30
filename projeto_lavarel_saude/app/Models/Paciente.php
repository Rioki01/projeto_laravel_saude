<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//adiciona authenticação ao modelo
use Illuminate\Foundation\Auth\User as Authenticatable;

class Paciente extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['teste'];
    //protected $fillable = ['nome', 'email', 'password', 'cpf'];
    public $timestamps = false;

    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }
    //'telefone', 'data_nascimento'
}
