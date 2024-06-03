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
        
        
        Medico::create(['nome' => 'Medico1', 'descricao' => 'Trabalha na area de Ortopedia', 'preco' => 'R$ 400.00', 'especialidade' => 'Ortopedia', 'cidade' => 'Guarapuava', 'bairro' => 'Alto da XV', 'numero' => '454' , 'rua' => 'Rua Duque de Caxias']);
        Medico::create(['nome' => 'Medico2', 'descricao' => 'Trabalha na area de Gastronomia', 'preco' => 'R$ 350.00', 'especialidade' => 'Gastronomia', 'cidade' => 'Pinhão', 'bairro' => 'Centro', 'numero' => '254','rua' => 'Rua Trifon Hanycz']);
        Medico::create(['nome' => 'Medico3', 'descricao' => 'Trabalha na area de Ginecologia', 'preco' => 'R$ 220.00', 'especialidade' => 'Ginecologia', 'cidade' => 'Guarapuava', 'bairro' => 'Boqueirao', 'numero' => '301','rua' => 'Rua São Jorge']);
        Medico::create(['nome' => 'Medico4', 'descricao' => 'Trabalha na area de Cirurgia Plástica', 'preco' => 'R$ 600.00', 'especialidade' => 'Cirurgia Plástica', 'cidade' => 'Prudentópolis', 'bairro' => 'Jardim Betania', 'numero' => '184','rua' => 'Rua Minas Gerais']);
        Medico::create(['nome' => 'Medico5', 'descricao' => 'Trabalha na area de Cirurgia Plástica', 'preco' => 'R$ 450.00', 'especialidade' => 'Cirurgia Plástica', 'cidade' => 'Guarapuava', 'bairro' => 'Batel', 'numero' => '200','rua' => 'Rua Barbosa']);
        Medico::create(['nome' => 'Medico6', 'descricao' => 'Trabalha na area de Cirurgia Plástica', 'preco' => 'R$ 530.00', 'especialidade' => 'Cirurgia Plástica', 'cidade' => 'Irati', 'bairro' => 'Canisianas', 'numero' => '122','rua' => 'Rua Santos Dumond']);
        Medico::create(['nome' => 'Medico7', 'descricao' => 'Trabalha na area de Gastronomia', 'preco' => 'R$ 350.00', 'especialidade' => 'Gastronomia', 'cidade' => 'Ponta Grossa', 'bairro' => 'Boa Vista', 'numero' => '101','rua' => 'Rua Treze de Maio']);
        Medico::create(['nome' => 'Medico8', 'descricao' => 'Trabalha na area de Gastronomia', 'preco' => 'R$ 350.00', 'especialidade' => 'Gastronomia', 'cidade' => 'Guarapuava', 'bairro' => 'Centro ', 'numero' => '203','rua' => 'Rua Dez']);



    }
}
