<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @can('is_admin')
                <x-movies.add-modal />
            @endcan

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class='mx-auto bg-white rounded-3xl shadow-xl p-3 grid-auto-fit-minmax'>
                    @foreach ($movies as $movie)
                        <x-movies.movie :movie="$movie"/>
                    @endforeach
                </div>
            </div>
        </div>
</x-app-layout>
