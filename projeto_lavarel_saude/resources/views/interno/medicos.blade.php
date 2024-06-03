@extends('site.layouts.basico')

@section('titulo', 'Medicos')

@section('conteudo')

    <div class="d-flex w-100">
        @include('site.layouts._components.sidebar')
        <div class="w-100 m-5 px-5">
            <h3 class="subtitulo-agendamento mb-3 fs-3">
                Medicos Disponiveis:
            </h3>
            @foreach($medicos as $medico)
            <div class="area-medico-consulta p-2 d-flex justify-content-between align-itemns-center mb-3">
                <div class="d-flex align-itemns-center">
                    <img src="{{$medico->imgUrl}}" width="75" height="75" class="img-medico mx-2"/>
                    <div class="d-flex flex-column justify-content-center">
                        <h3 class="m-0">Nome: {{$medico->nome}}</h3>
                        <p class="m-0">{{$medico->descricao}}</p>
                        <p class="m-0">Valor: {{$medico->preco}}</p>
                        <p class="m-0">Especialidade: {{$medico->especialidade}}</p>

                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <a href="{{ route('interno.medico_informacao',['id' => $medico->id]) }}"><button class="btn-blue-agendar mx-4">Ver informações</button></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('site.layouts._partials.footer')

@endsection

