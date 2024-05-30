<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(){
        $pacientes = User::all();
        return view('pacientes.index', compact('pacientes'));
    }

    public function create()
    {
        return view('pacientes.create');
    }

    public function store(Request $request)
    {
        $User = User::create($request->all());
        return redirect()->route('pacientes.show', $User)->with('success', 'User criado com sucesso!');
    }

    public function show(User $cliente)
    {
        return view('pacientes.show', compact('User'));
    }

    public function edit(User $cliente)
    {
        return view('pacientes.edit', compact('User'));
    }

    public function update(Request $request, User $cliente)
    {
        $cliente->update($request->all());
        return redirect()->route('pacientes.show', $cliente)->with('success', 'User atualizado com sucesso!');
    }

    public function destroy(User $cliente)
    {
        $cliente->delete();
        return redirect()->route('pacientes.index')->with('success', 'Cliente excluído com sucesso!');
    }
}
