


<div class="min-h-screen bg-gray-100">

   

    <header class="bg-[#FF2D20] p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white">Cadastra-se</h1>

            @if (Route::has('login'))
                <nav class="flex space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" 
                           class="text-white px-3 py-2 rounded-md hover:bg-white/20 transition">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" 
                           class="text-white px-3 py-2 rounded-md hover:bg-white/20 transition">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" 
                               class="text-white px-3 py-2 rounded-md hover:bg-white/20 transition">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

   
    <main class="py-10">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-800">Bem-vindo à Minha Aplicação!</h2>
            <p class="mt-4 text-lg text-gray-600">Aqui você pode gerenciar sua conta, explorar produtos, e muito mais.</p>
        </div>
    </main>

 
    <footer class="bg-gray-900 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Minha Aplicação. Todos os direitos reservados.</p>
        </div>
    </footer>

</div>
