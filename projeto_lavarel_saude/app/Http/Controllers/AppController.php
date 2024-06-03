<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;
//Controller para decidir rotas APOS o login/autenticação

class AppController extends Controller
{
    public function home(){
        return view('interno.home');
    }
    public function agendamento(){
        return view('interno.agendamento');
    }

    public function consultas(){
        return view('interno.consultas');
    }

    public function edit(){
        return view('interno.edit-consulta');
    }



}
