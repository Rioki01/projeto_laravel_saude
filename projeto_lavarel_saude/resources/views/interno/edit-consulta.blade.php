@extends('site.layouts.basico')

@section('titulo', 'Editar')

@section('conteudo')

    <div class="d-flex w-100">
        @include('site.layouts._components.sidebar')
        
        <div class="area-home-interno w-100">
            <h1 class="titulo-cadastro-login mb-5">Editar Agendamento</h1>
        </div>
    </div>
    @include('site.layouts._partials.footer')

@endsection