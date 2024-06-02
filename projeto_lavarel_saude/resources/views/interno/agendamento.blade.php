@extends('site.layouts.basico')

@section('titulo', 'Agendar')

@section('conteudo')

    <div class="d-flex w-100 min-vh-100">
        @include('site.layouts._components.sidebar')
        
        <div class="w-100 m-5 px-5">
            <h1 class="titulo-cadastro-login mb-5">Agendamento Online</h1>
            <div>
                <form action="" class="mb-5 d-flex">
                    <div class="col">
                        <select name="" id="" class="inputs-agendamento w-75">
                            <option value="">Cidades disponíveis</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="" id="" class="inputs-agendamento w-75">
                            <option value="">Selecione a especialidade desejada</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                </form>

                <h3 class="subtitulo-agendamento mb-3">
                    Médicos disponíveis em sua região:
                </h3>

                <div class="area-medico-consulta p-2 d-flex justify-content-between align-itemns-center mb-3">
                    <div class="d-flex align-itemns-center">
                        <img src="{{ asset('img/Rectangle 81.png') }}" width="75" height="75" class="img-medico mx-2"/>
                        <div class="d-flex flex-column justify-content-center">
                            <h3 class="m-0 mb-1">Nome do Médico</h3>
                            <p class="m-0">Especialidade: Especialidade do médico</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <a href="{{ route('interno.agendamento_medico') }}"><button class="btn-blue-agendar mx-4">Agendar horário</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('site.layouts._partials.footer')

@endsection