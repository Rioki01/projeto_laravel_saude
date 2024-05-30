<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(){
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }

    public function create()
    {
        return view('pacientes.create');
    }

    public function store(Request $request)
    {
        $paciente = Paciente::create($request->all());
        return redirect()->route('pacientes.show', $paciente)->with('success', 'Paciente criado com sucesso!');
    }

    public function show(Paciente $cliente)
    {
        return view('pacientes.show', compact('paciente'));
    }

    public function edit(Paciente $cliente)
    {
        return view('pacientes.edit', compact('paciente'));
    }

    public function update(Request $request, Paciente $cliente)
    {
        $cliente->update($request->all());
        return redirect()->route('pacientes.show', $cliente)->with('success', 'Paciente atualizado com sucesso!');
    }

    public function destroy(Paciente $cliente)
    {
        $cliente->delete();
        return redirect()->route('pacientes.index')->with('success', 'Cliente excluído com sucesso!');
    }
}
