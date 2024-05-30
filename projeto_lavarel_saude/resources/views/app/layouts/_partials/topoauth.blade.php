<div class="topo">
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}">
    </div>


    <div class="menu">
        @if (auth()->check())
        Bem vindo {{auth()->user()->nome}}
        <ul>
            <li><a href="{{ route('login.destroy') }}">SAIR</a></li></b>
        </ul>
        @endif
    </div>
</div>