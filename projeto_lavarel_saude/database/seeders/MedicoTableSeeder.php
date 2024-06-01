<?php

namespace Database\Seeders;

use App\Models\Medico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){
        
        Medico::create(['nome' => 'Medico1', 'descricao' => 'Trabalha na area Cirurgica ', 'preco' => 'R$ 800.00', 'especialidade' => 'Cirurgia Vascular']);
        Medico::create(['nome' => 'Medico2', 'descricao' => 'Trabalha na area de Ortopedia', 'preco' => 'R$ 400.00', 'especialidade' => 'Ortopedia']);
        Medico::create(['nome' => 'Medico3', 'descricao' => 'Trabalha na area de Gastronomia', 'preco' => 'R$ 350.00', 'especialidade' => 'Gastronomia']);
        Medico::create(['nome' => 'Medico4', 'descricao' => 'Trabalha na area de Ginecologia', 'preco' => 'R$ 220.00', 'especialidade' => 'Ginecologia']);
        Medico::create(['nome' => 'Medico4', 'descricao' => 'Trabalha na area de Cirurgia Plástica', 'preco' => 'R$ 600.00', 'especialidade' => 'Cirurgia Plástica']);

    }
}
