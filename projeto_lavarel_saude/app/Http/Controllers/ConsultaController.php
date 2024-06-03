<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\User;
use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


// CRUD Consultas

class ConsultaController extends Controller
{
    public function listarConsultas(){
        $consultas = Consulta::all();
        return view('interno.consultas', compact('consultas'));
    }
    
    public function storeConsultas(Request $request){
        $request->validate([
            "horario"=>"required",
            "data"=>"required",
            "nomepaciente"=>"required",
            "telefone"=>"required",
            "data_nascimento"=>"required",
            "forma_pagamento"=>"required",
        ]);
        $consulta = Consulta::create($request->all());
        return redirect()->route('interno.consultas');
    }

    public function editConsultas(Consulta $consulta){
        $pacientes = User::all();
        return view('interno.consultas', compact('consulta'));
    }

    public function showConsultas(Consulta $consulta)
    {
    return view('interno.consultas', compact('consulta'));
    }

    public function updateConsultas(Request $request, Consulta $consulta){
        $consulta->update($request->all());
        return redirect()->route('interno.consultas');
    }

    public function destroyConsultas(Consulta $consulta){
        $consulta->delete();
        return redirect()->route('interno.consultas');
    }


    public function agendamento_medico(Request $request, $id){
        $userId = auth()->user()->id;
        $medicos = Medico::where('id',$id)->get();
        return view('interno.agendamento_medico',compact("medicos"));
    }
    
    public function detalharConsulta(Request $request, $id){
        $userId = auth()->user()->cpf;
        $consultas = Consulta::where('id',$id)->get();
        return view('interno.consulta',compact("consultas"));
    }
}
