<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

//controler para autenticar login/registros.

class AuthController extends Controller
{
    public function login(){
        return view("site.login");
    }

    public function loginPost(Request $request){
        //checa se há dados para validar
        $request->validate([
            "email" => "required",
            "senha" => "required",
        ]);
        //testa e verifica se o email/senha existem utilizando autenticação
        $autenticacao = $request->only("email", "senha");
        if(Auth::attempt($autenticacao)){
            return redirect()->intended(route("home"));
        }
        return redirect(route("site.login"))->with("error", "Falha ao realizar login!");
    }

    public function cadastro(){
        return view("site.cadastro");
    }

    public function cadastroPost(Request $request){
        //checa se há dados para validar
        $request->validate([
            "nome" => "required",
            "cpf" => "required",
            "email" => "required",
            "senha" => "required",
        ]);
        
        //se sim, avança para o registro.
        $paciente = new Paciente();
        $paciente->nome = $request->nome;
        $paciente->cpf = $request->cpf;
        $paciente->email = $request->email;
        $paciente->senha = Hash::make($request->senha);
        //se criado, manda o usuario para pagina de login
        if($paciente->save()){
            return redirect(route("site.login"))->with("success", "Cadastro realizado com sucesso!");
        }
        //se falha, re-direciona para a pagina de cadastro
        return redirect(route("site.cadastro"))->with("error","Falha ao cadastrar usuario!");
    }
    
}
