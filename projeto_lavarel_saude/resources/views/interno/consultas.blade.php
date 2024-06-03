@extends('site.layouts.basico')

@section('titulo', 'Agendar')

@section('conteudo')

    <div class="d-flex w-100 min-vh-100">
        @include('site.layouts._components.sidebar')
        
        <div class="w-100 m-5 px-5">
            <h3 class="subtitulo-agendamento mb-3 fs-3">
                Meus agendamentos:
            </h3>
            @foreach ($consultas as $consulta)
            <div class="area-medico-consulta p-2 d-flex justify-content-between align-itemns-center mb-3">
                <div class="d-flex align-itemns-center">
                    <img src="{{ asset('img/Rectangle 81.png') }}" width="75" height="75" class="img-medico mx-2"/>
                    <div class="d-flex flex-column justify-content-center">
                        <h3 class="m-0">Nome do Médico: {{$consulta->nomemedico}}</h3>
                        <p class="m-0 my-1">Especialidade: {{$consulta->especialidade}}</p>
                        <p class="m-0">{{$consulta->data}}  - {{$consulta->horario}}h</p>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <a href="{{ route('interno.consulta',['consultaId' => $consulta->id]) }}"><button class="btn-blue-agendar mx-4">Ver informações</button></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('site.layouts._partials.footer')

@endsection