<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Filmes disponíveis') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-wrap justify-around">
                        @foreach ($movies as $movie)
                            <div class="w-60 rounded shadow-xl m-2 bg-gray-100">
                                <img src="{{ $movie->image }}" class="h-auto w-full" alt="...">
                                <div class="px-6 py-4">
                                    <h5 class="font-bold text-xl mb-2">{{ $movie->title}}</h5>
                                    <a href="{{ route('movie.show', $movie) }}" class="py-1 font-semibold text-blue-500 mr-4">Alugar</a>
                                    <a href="{{ route('movie.show', $movie) }}" class="py-1 font-semibold text-blue-500 mr-4">Comprar</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
