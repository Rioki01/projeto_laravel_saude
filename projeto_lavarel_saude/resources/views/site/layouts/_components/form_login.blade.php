{{ $slot }}
<form method="post" action="{{ route('login.post') }}">
    
    @csrf
    <input name="email" type="text" placeholder="E-mail" id="email" class="{{ $classe }} required autofocus">
    @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif
    <br>
    <input name="password" type="password" placeholder="Senha" id="password" class="{{ $classe }} required autofocus">
    @if ($errors->has('password'))
    <span class="text-danger">{{ $errors->first('password') }}</span>
    @endif

    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
    <p> Não tem uma conta? realize seu <a href="{{ route('site.cadastro') }}">cadastro</a></li></p>
</form>