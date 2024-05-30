@extends('site.layouts.basico')

@section('titulo', 'Interno')

@section('conteudo')

    <div class="d-flex w-100">
        <div class="w-auto">
            <div class="sidebar d-flex flex-column justify-content-between">
                <div>
                    <h1>CheckMed</h1>
                    <div>
                        <a href="">
                            <button>Agendar consulta</button>
                        </a>
                        <a href="">
                            <button>Agendados</button>
                        </a>
                        <a href="">
                            <button>Médicos</button>
                        </a>
                    </div>
                </div>
                <div>
                    <a href="{{ route('site.index') }}"><button class="btns btn-white">Sair</button></a>
                </div>
            </div>
        </div>
        <div><img src="{{ asset('img/Rectangle 36.png') }}" alt="ImgCadastroLogin" width="800"></div>
    </div>

@endsection