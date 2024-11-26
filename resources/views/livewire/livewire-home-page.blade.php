<link href="{{ asset('css/homepage.css') }}" rel="stylesheet">

<div class="LivewireHomePage">
    <header class="Conteiner-Header">
        <div class="Titulo-Header">
            <h1 class="text-2xl font-bold text-white">Clubefy</h1>
        </div>
    </header>

    <main class="Conteiner-Cadastro">
        <div class="Cadastro">
            <h2 class="">Cadastre-se</h2>

          
                
                <div class="Card">
                    <h3 class="Login">Login</h3>
                    <p class="Titulo-Login">Acesse sua conta para continuar.</p>
                    <a href="{{ route('login') }}" class="Buttom-login">Login</a>
                </div>

                <br>

                <div class="Card-2">
                    <h3 class="Register">Registrar</h3>
                    <p class="Titulo-Registro">Crie uma nova conta.</p>
                    <a href="{{ route('register') }}" class="Buttom-Register">Registrar</a>
                </div>
            </div>
    </main>
    <footer>
            <p>&copy; 2024 Clubefy. Todos os direitos reservados.</p>
    </footer>
</div>
