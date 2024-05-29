@extends('site.layouts.basico')

@section('titulo', 'Login')

@section('conteudo')
<div class="conteudo-pagina">
        <div class="titulo-pagina">
        <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
            <div class="login-principal">
                @component('site.layouts._components.form_login', ['classe' => 'borda-preta'])
                <!-- Componente criado de forms na pasta _components -->
                <!-- Todos class no forms vao ser substituidas por 'borda-preta' -->
                <p>Realize aqui seu login!</p>
                @endcomponent
            </div>
        </div>
    </div>
</div>
@endsection