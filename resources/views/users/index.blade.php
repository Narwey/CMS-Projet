<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between w-full">
                <h1 class="text-xl font-bold">User List</h1>
                <a class="ms-3 bg-sky-500 text-black px-3 py-2" href="{{ route('users.create') }}">Create</a>

            </div>
            <ul>
                @foreach ($users as $user)
                <li class="my-3 list-none bg-white px-10 py-3">
                    <div class="flex justify-between items-center">
                        <p>
                            {{ ucwords($user->name) }}
                        </p>
                        <div class="flex items-center">

                            <a class="ms-3 bg-sky-500 text-black px-3 py-2 h-10"
                                href="{{ route('users.edit', $user->id) }}">Edit</a>
                            <form method="post" class="pt-4s" action="{{ route('users.destroy', $user->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="ms-3  bg-red-500 text-black place-self-center  px-3 py-2">Delete</button>
                            </form>
                        </div>

                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

</x-app-layout>