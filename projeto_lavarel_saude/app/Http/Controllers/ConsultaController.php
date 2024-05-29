<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;

// CRUD Consultas

class ConsultaController extends Controller
{
    public function index(){
        $consultas = Consulta::all();
        return view('consultas.index', compact('consultas'));
    }
    
    public function create(){
        return view('consultas.create');
    }

    public function store(Request $request){
        $consulta = Consulta::create($request->all());
        return redirect()->route('consultas.index');
    }

    public function edit(Consulta $consulta){
        return view('consultas.edit', compact('product'));
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
