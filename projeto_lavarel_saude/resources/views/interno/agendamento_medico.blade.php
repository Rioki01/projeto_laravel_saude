@extends('site.layouts.basico')

@section('titulo', 'Agendar')

@section('conteudo')
<!--Imprime os erros-->

    <div class="d-flex w-100 min-vh-100">
        @include('site.layouts._components.sidebar')

        <a href="{{ route('interno.agendamento') }}" class="p-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#207ea6" d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23a1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2"/></svg>
        </a>
        <div class="w-100 m-5 d-flex flex-column justify-content-center align-items-center">
            <div class="d-flex align-itemns-center mb-4 w-50">
                <img src="{{ asset('img/Rectangle 81.png') }}" width="120" height="120" class="img-medico mx-2"/>
                <div class="d-flex flex-column justify-content-between info-medico">
        @foreach($medicos as $medico)
                    <h3 class="m-0 mb-1">Nome: {{$medico->nome}}</h3>
                    <h4 class="m-0">Especialidade: {{$medico->especialidade}}</h4>
                    <h4>{{$medico->preco}}</h4>
                    <p>Cidade: {{$medico->cidade}}</p>
                </div>
            </div>
            <form action="{{route("consulta.insert")}}" class="w-50" method="POST">
                @csrf
                <div class="row m-0 mb-3">
                <input type="hidden" name="userid" value="{{$medico->userid = Auth::user()->id}}">
                <input type="hidden" name="cidade" value="{{$medico->cidade}}">
                <input type="hidden" name="bairro" value="{{$medico->bairro}}">
                <input type="hidden" name="rua" value="{{$medico->rua}}">
                <input type="hidden" name="numero" value="{{$medico->numero}}">
                <input type="hidden" name="especialidade" value="{{$medico->especialidade}}">
                <input type="hidden" name="nomemedico" value="{{$medico->nome}}">
                <input type="hidden" name="valor" value="{{$medico->preco}}">

                    <div class="col-6">
                        <input type="text" class="inputs-agendamento w-100" name="horario" placeholder="Horário: 00:00">
                        @if ($errors->has('horario'))
                        <span class="text-danger">{{ $errors->first('horario') }}</span>
                        @endif
                    </div>
                    <div class="col-6">
                        <input type="date" class="inputs-agendamento w-100" name="data" placeholder="Data: 00/00/0000">
                        @if ($errors->has('data'))
                        <span class="text-danger">{{ $errors->first('data') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row m-0 mb-3">
                    <div class="col-12">
                        <input type="text" class="inputs-agendamento w-100" name="nomepaciente" placeholder="Nome do paciente">
                        @if ($errors->has('nomepaciente'))
                        <span class="text-danger">{{ $errors->first('nomepaciente') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row m-0 mb-3">
                    <div class="col-12">
                        <input type="text" class="inputs-agendamento w-100" name="telefone" placeholder="Telefone/Celular">
                        @if ($errors->has('telefone'))
                        <span class="text-danger">{{ $errors->first('telefone') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row m-0 mb-3">
                    <div class="col-12">
                        <input type="text" class="inputs-agendamento w-100" name="data_nascimento" placeholder="Data de nascimento">
                        @if ($errors->has('data_nascimento'))
                        <span class="text-danger">{{ $errors->first('data_nascimento') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row m-0 mb-3">
                    <div class="col-12">
                    <select name="forma_pagamento" id="" class="inputs-agendamento w-100">
                            <option value="">Forma de Pagamento</option>
                            <option value="Dinheiro">Dinheiro</option>
                            <option value="Pix">Pix</option>
                            <option value="Cartao">Cartão</option>
                            <option value="Convenio">Possuo Convênio</option>
                        </select>
                        @if ($errors->has('forma_pagamento'))
                        <span class="text-danger">{{ $errors->first('forma_pagamento') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row m-0 mb-3">
                    <div class="col-12">
                        <button type="submit" class="btn-blue-login w-100">Confirmar agendamento</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endforeach
    @include('site.layouts._partials.footer')

@endsection