@extends('site.layouts.basico')

@section('titulo', 'Info Médico')

@section('conteudo')

    <div class="d-flex w-100 min-vh-100">
        @include('site.layouts._components.sidebar')
        <a href="{{ route('interno.consultas',['id' => Auth::user()->id]) }}" class="p-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#207ea6" d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23a1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2"/></svg>
        </a>
        <div class="w-100 m-5  px-5 d-flex flex-column justify-content-center align-items-start">
            <div class="mx-5">
                <div class="d-flex align-items-center mb-4 w-100">
                    <img src="{{$medicos->imgUrl}}" width="220" height="220" class="img-medico"/>
                    <div class="d-flex flex-column justify-content-between info-medico mx-3">
                        <h3 class="m-0 mb-1">Nome do Médico: {{ $medicos->nome }}</h3>
                        <h4 class="m-0">Especialidade: {{ $medicos->especialidade }}</h4>
                        <h4>{{ $medicos->preco }}</h4>
                        <p>Cidade: {{ $medicos->cidade }}</p>
                        <p>Bairro: {{ $medicos->bairro }}</p>
                        <p>Rua: {{ $medicos->rua }}</p>
                        <p>Número: {{ $medicos->numero }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('site.layouts._partials.footer')

@endsection