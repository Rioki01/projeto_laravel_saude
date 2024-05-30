<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $fillable = ['rua', 'bairro', 'numero', 'especialidade','pagamento', 'valor', 'data_chamado'];

    public function paciente()
    {
        return $this->belongsTo(User::class);
    }
}
