@extends('app.layouts.basicoauth')

@section('titulo', 'Home')

@section('conteudo')
<div class="conteudo-destaque">
    <!--Mensagem sucesso de login.-->
    @if (session()->has('success'))
    {{ session()->get('success')}}
    @endif
<div class="esquerda">
    <div class="informacoes">
        <h1>CheckMed</h1>
        <p>Home<p>
    </div>
</div>

<div class="direita">
</div>
@endsection