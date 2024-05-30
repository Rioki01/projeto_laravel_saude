<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            "email" => "required|email",
            "password" => "required",
        ],[ //mensagens de erro!
            'email.required' => 'Email é obrigatorio para login.',
            'email.email' => 'Email invalido.',
            'password.required' => 'Senha é obrigatoria para login.'
        ]);
        //testa e verifica se o email/password existem utilizando autenticação
        $credentials = $request->only('email', 'password');
        $authenticated = Auth::attempt($credentials);

        if(!$authenticated){
            return redirect()->route('site.login')->withErrors('error', 'Falha ao realizar login!');
        }
        return redirect()->route('app.home')->with('success','Sucesso ao realizer login'); 
    }

    public function cadastro(){
        return view("site.cadastro");
    }

    public function cadastroPost(Request $request){
        //checa se há dados para validar
        $request->validate([
            "nome" => "required",
            "cpf" => "required",
            "email" => "required|email",
            "password" => "required|min:5",
        ],[ //mensagens de erro!
            'nome.required' => 'Nome é obrigatorio para cadastro.',
            'cpf.required' => 'CPF é obrigatorio para cadastro.',
            'email.required' => 'Email é obrigatorio para cadastro.',
            'email.email' => 'Email invalido.',
            'password.required' => 'Senha é obrigatoria para login.',
            'password.min' => 'A password deve ter no mínimo :min caracteres'
        ]);
        
        //se sim, avança para o registro.
        $paciente = new User();
        $paciente->nome = $request->nome;
        $paciente->cpf = $request->cpf;
        $paciente->email = $request->email;
        $paciente->password = Hash::make($request->password);
        //se criado, manda o usuario para pagina de login
        if($paciente->save()){
            return redirect(route("site.login"))->with("success", "Cadastro realizado com sucesso!");
        }
        //se falha, re-direciona para a pagina de cadastro
        return redirect(route("site.cadastro"))->with("error","Falha ao cadastrar usuario!");
    }
    
}
