<div class="w-auto">
            <div class="sidebar d-flex flex-column justify-content-between">
                <div>
                    <h1 class="logo-sidebar m-0 py-5">CheckMed</h1>
                    <div class="px-2">
                        <p class="m-0" style="color:#fff;font-size:20px;;text-align:center">Bem vindo(a)</p>
                        <p class="m-0 py-2 mb-3" style="color:#fff;font-size:20px;;text-align:center">{{Auth::user()->nome}}</p>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="{{ route('interno.agendamento') }}">
                            <button class="btns-sidebar">Agendar consulta</button>
                        </a>
                        <a href="{{ route('interno.consultas',['id' => Auth::user()->id]) }}">
                            <button class="btns-sidebar">Agendados</button> 
                        </a>
                        <a href="{{ route('interno.medicos') }}">
                            <button class="btns-sidebar">Médicos</button>
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center py-5">
                    <a href="{{ route('login.destroy') }}"><button class="btns btn-white px-5">Sair</button></a>
                </div>
            </div>
        </div>