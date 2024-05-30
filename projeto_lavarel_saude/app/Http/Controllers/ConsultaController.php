<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\User;
use Illuminate\Http\Request;

// CRUD Consultas

class ConsultaController extends Controller
{
    public function index(){
        $consultas = Consulta::all();
        return view('consultas.index', compact('consulta'));
    }
    
    public function create(){
        $pacientes = User::all();
        return view('consultas.create', compact('paciente'));
    }

    public function store(Request $request){
        $consulta = Consulta::create($request->all());
        return redirect()->route('consultas.index');
    }

    public function edit(Consulta $consulta){
        $pacientes = User::all();
        return view('consultas.edit', compact('consulta'));
    }

    public function show(Consulta $consulta)
    {
    return view('consultas.show', compact('consulta'));
    }

    public function update(Request $request, Consulta $consulta){
        $consulta->update($request->all());
        return redirect()->route('consultas.index');
    }

    public function destroy(Consulta $consulta){
        $consulta->delete();
        return redirect()->route('consultas.index');
    }
        
}
