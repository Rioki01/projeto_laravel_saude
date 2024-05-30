@extends('site.layouts.basico')

@section('titulo', 'Cadastro')

@section('conteudo')

    <div class="d-flex">
        <div class="w-100 d-flex flex-column align-items-center justify-content-center">
            <div class="w-50">
                <h1 class="titulo-cadastro-login mb-5">Cadastre-se</h1>
                <form method="POST" action="{{ route('cadastro.post') }}" class="d-flex flex-column"> 
                    @csrf
                    <input class="input-cadastro-login" type="text" name="nome" id="nome" placeholder="Nome e sobrenome">
                    @if ($errors->has('nome'))
                    <span class="text-danger">{{ $errors->first('nome') }}</span>
                    @endif
                    <input class="my-3  input-cadastro-login" type="text" name="cpf" id="cpf" placeholder="CPF">
                    @if ($errors->has('cpf'))
                    <span class="text-danger">{{ $errors->first('cpf') }}</span>
                    @endif
                    <input class="my-3  input-cadastro-login" type="text" name="email" id="email" placeholder="E-mail">
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    <input class="input-cadastro-login" type="text" name="phone" id="phone" placeholder="Telefone/Celular">
                    @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                    <input class="my-3 input-cadastro-login" type="password" name="password" id="password" placeholder="Senha">
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    <input class="input-cadastro-login" type="password" name="confirm_password" id="confirm_password" placeholder="Confirmar senha">
                    
                    <button type="submit" class="btn-blue-login my-5">Cadastrar</button>
                </form>

                <p class="p-login">Já tem uma conta? <a class="p-login" href="{{ route('site.login') }}">Acesse aqui!</a></p>
            </div>
        </div>
        <div><img src="{{ asset('img/Rectangle 36.png') }}" alt="ImgCadastroLogin" width="800"></div>
    </div>

@endsection