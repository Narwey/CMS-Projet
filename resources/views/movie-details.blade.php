<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Movie Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class='mx-auto bg-white rounded-3xl shadow-xl p-3 grid-auto-fit-minmax'>
                        <img src="/storage/{{ $movie->thumbnail }}" width="375" height="200" class="rounded-t-3xl justify-center grid h-80 object-cover" alt="movie title" />
                    
                        <div class="group p-6 z-10">
                            <a href="{{ $movie->trailer }}" target="_blank" class="group-hover:text-cyan-700 font-bold sm:text-2xl line-clamp-2">
                                {{ $movie->name }}
                            </a>
                            <span class="text-slate-400 pt-2 font-semibold">
                                ({{ $movie->released_at }})
                            </span>
                            <div class="h-28">
                                <span class="line-clamp-4 py-2 text-sm font-light leading-relaxed">
                                    {{ $movie->description }}
                                </span>
                            </div>
                        <button
                            x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'success-modal')"
                            class="bg-blue-500 max-w-max hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"
                        >
                            Buy ticket
                        </button>
                    
                        <x-modal name="success-modal" maxWidth="md">
                            <div class="p-6 text-center">
                                <h2 class="text-lg font-medium text-gray-900">Success!</h2>
                                <p class="mt-4 text-gray-600">You've successfully purchased your ticket.</p>
                                <div class="mt-6">
                                    <button
                                        @click="$dispatch('close-modal', 'success-modal')"
                                        class="bg-red-500 text-white px-4 py-2 rounded"
                                    >
                                        Close
                                    </button>
                                </div>
                            </div>
                        </x-modal>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
