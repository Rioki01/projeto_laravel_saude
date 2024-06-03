<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppController;
use App\Models\Consulta;
use App\Models\User;
use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


// CRUD Consultas

class ConsultaController extends Controller
{
    //lista todas consultas
    public function listarConsultas(){
        $consultas = Consulta::all();
        return view('interno.consultas', compact('consultas'));
    }

    public function destroy(Consulta $consulta)
    {
        $consulta->delete();
        return redirect()->route('interno.consultas');
    }


    //cria consultas
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

    //edita consultas
    public function editConsultas(Consulta $consulta, Request $request, $id){
        
    }

    //mostra a pagina consulta
    public function showConsultas(Consulta $consulta)
    {
    return view('interno.consultas', compact('consulta'));
    }

    //update consultas
    public function updateConsultas(Request $request, Consulta $consulta){
        $consulta->update($request->all());
        return redirect()->route('interno.consultas');
    }

    //destroy consultas
    public function deleteConsultas(Consulta $consulta, $id){
        $consulta = Consulta::where("id",$id)->first();
        $consulta->delete();
        return redirect()->route('interno.consultas')->with('success', 'Consulta excluída com sucesso!');
    }

    //salva o ID do medico, quando for agendar consulta
    public function agendamento_medico(Request $request, $id){
        $userId = auth()->user()->id;
        $medicos = Medico::where('id',$id)->get();
        return view('interno.agendamento_medico',compact("medicos"));
    }

    //salva o ID da consulta, quando for detalhar consulta.
    public function detalharConsulta(Request $request, $id){
        $user = $request->user();
        $consultas = Consulta::where('id',$id)->get();
        return view('interno.consulta',compact("consultas"));
    }

}
