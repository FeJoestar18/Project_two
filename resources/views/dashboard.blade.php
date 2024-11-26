<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Bem-Vindo ao Clubefy') }}  
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center items-center">
                    <a href="{{ route('loja') }}" class="bg-[#FF2D20] text-white py-2 px-6 rounded-md hover:bg-[#e21c1c] transition">Ir para a Loja</a>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>

<style>
    header {
        text-align: center;
        margin-bottom: 20px;
        padding: 20px;
        color:aliceblue;
    }
</style>