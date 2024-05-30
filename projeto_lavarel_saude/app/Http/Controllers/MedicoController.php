<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index(){
        $medicos = Medico::all();
        return view('medicos.index', compact('medicos'));
    }
}
