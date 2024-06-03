<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicoController extends Controller
{
    /**public function index(){
        $medicos = Medico::all();
        return view('medicos.index', compact('medicos'));
    }**/
    
    public function medicos(){
        return view('interno.medicos');
    }
    public function medicoinformacao(){
        return view('interno.medico_informacao');
    }

    function listMedicosagendamento(){
        $medicos = Medico::get();
        return view("interno.agendamento",compact("medicos"));
    }

    function listMedicos(){
        $medicos = Medico::get();
        $userId = Auth::id();
        return view("interno.medicos",compact("medicos"));
    }



}
