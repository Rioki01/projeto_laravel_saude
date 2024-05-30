@extends('site.layouts.basico')

@section('titulo', 'Home')

@section('conteudo')
    @include('site.layouts._partials.header')

    <div class="d-flex">
        <div><img src="{{ asset('img/unsplash_nMyM7fxpokE.png') }}" alt="imgHome" width="800"></div>
        <div class="w-100 d-flex flex-column align-items-start justify-content-center area-text-home">
            <div class="mx-5 px-5">
                <h1 class="titulo-home m-0">CheckMed</h1>
                <h2 class="subtitulo-home py-4">A plataforma que conecta você a profissionais qualificados de forma rápida e segura.</h2>
                <a href=""><button class="btns btn-blue">Acesse aqui</button></a>
                <img class="seta" src="{{ asset('img/Group 16 (1).png') }}" alt="seta" width="350">
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center py-5 my-4">
        <h3 class="text-blue-home">Veja como é fácil cuidar da sua saúde com a CheckMed. Siga nossos passos simples e agende sua consulta em minutos"</h3>
    </div>
    <div class="d-flex mx-5 px-5 justify-content-center mb-5 pb-5">
        <div class="d-flex flec-column justify-content-center align-items-center">
            <ul class="px-5">
                <li class="li-home">
                    Encontre Seu Médico: "Pesquise por especialidade e localização. Nossa plataforma intuitiva facilita a busca pelo profissional ideal para suas necessidades."
                </li>
                <li class="li-home py-4">
                    Escolha a Data e Horário: "Verifique a disponibilidade em tempo real e selecione o horário que melhor se adequa à sua agenda."
                </li>
                <li class="li-home">
                Confirme Seu Agendamento: "Finalize sua escolha e receba a confirmação imediata. Simples, rápido e eficiente.
                </li>
            </ul>
        </div>
        <div>
            <img src="{{ asset('img/Group 18.png') }}" alt="imgGroupHome" width="600">
        </div>
    </div>

    @include('site.layouts._partials.footer')
@endsection