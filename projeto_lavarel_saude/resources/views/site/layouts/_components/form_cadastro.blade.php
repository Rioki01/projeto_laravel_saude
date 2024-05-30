
{{ $slot }}
<form method="POST" action="{{ route('cadastro.post') }}">
    @csrf
    <input name="nome" type="text" placeholder="Nome" id="nome" class="{{ $classe }} required autofocus">
    @if ($errors->has('nome'))
        <span class="text-danger">{{ $errors->first('nome') }}</span>
        @endif
    <br>
    <input name="cpf" type="text" placeholder="CPF" id="cpf" class="{{ $classe }} required autofocus">
    @if ($errors->has('cpf'))
        <span class="text-danger">{{ $errors->first('cpf') }}</span>
        @endif
    <br>
    <input name="email" type="text" placeholder="E-mail" id="email" class="{{ $classe }} required autofocus">
    @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    <br>
    <input name="senha" type="password" placeholder="Senha" id="senha" class="{{ $classe }} required autofocus">
    @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
    <p> Já tem uma conta? realize seu <a href="{{ route('site.login') }}">login</a></li></p>
</form>