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
    public function listarConsultas($id){
        $consultas = Consulta::where('userid',$id)->get();
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
            "userid"=>"required",
        ],[
            'horario.required' => 'Horario é obrigatorio.',
            'data.required' => 'Data da consulta é obrigatoria.',
            'nomepaciente.required' => 'Nome do Paciente é obrigatorio para consultas.',
            'telefone.required' => 'Telefone é obrigatorio para consultas.',
            'data_nascimento.required' => 'Porfavor, inserir a data de nascimento.',
            'forma_pagamento.required' => 'Porfavor, inserir a forma de pagamento.'
        ]);
        $consulta = Consulta::create($request->all());
        return redirect()->route('interno.home');
    }

    public function editConsulta($id){
        $consultas = Consulta::where('id',$id)->firstOrFail();
        return view('interno.edit-consulta', compact('consultas'));
    }

    public function showConsultas(Consulta $consulta)
    {
    return view('interno.consultas', compact('consulta'));
    }

    public function updateConsulta(Request $request, $id){
        $consultas = Consulta::find($id);
        $consultas->horario = $request->input('horario');
        $consultas->data = $request->input('data');
        $consultas->nomepaciente = $request->input('nomepaciente');
        $consultas->telefone = $request->input('telefone');
        $consultas->data_nascimento = $request->input('data_nascimento');
        $consultas->forma_pagamento = $request->input('forma_pagamento');
        $consultas->update();
        return redirect()->route('interno.home');
    }

    public function destroyConsulta($id){
        $consulta = Consulta::where('id',$id)->firstOrFail();
        $consulta->delete();
        return redirect()->route('interno.home');
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
