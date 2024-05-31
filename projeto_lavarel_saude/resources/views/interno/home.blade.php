@extends('site.layouts.basico')

@section('titulo', 'Interno')

@section('conteudo')

    <div class="d-flex w-100">
        @include('site.layouts._components.sidebar')
        
        <div class="area-home-interno w-100">

        </div>
    </div>
    @include('site.layouts._partials.footer')

@endsection