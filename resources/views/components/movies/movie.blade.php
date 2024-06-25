@props(['movie'])

<div class="grid rounded-3xl max-w-[370px] m-auto shadow-sm bg-slate-100  flex-col">
    <img src="/storage/{{ $movie->thumbnail }}" width="375" height="200" class="rounded-t-3xl justify-center grid h-80 object-cover" alt="movie title" />

    <div class="group p-6 grid z-10">
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
        <div class="flex gap-2">
            <a href="{{ route('movies.show', ['movie' => $movie->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                Details
            </a>
        </div>
    </div>
</div>