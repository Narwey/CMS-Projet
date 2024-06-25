<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-1/4">
                <div class="flex justify-center my-2 w-full">
                    <h1 class="text-xl font-bold my-2">Create User</h1>
                </div>
                <hr>
                <form method="post" action="{{ route('users.store') }}">
                    @csrf
                    <div class="flex flex-col gep-y-2">
                        <label for="name">Name:</label>
                        <input class="px-2 h-10 border border-black" type="text" name="name" required><br>
                    </div>
                    <div class="flex flex-col gep-y-2">
                        <label for="email">Email:</label>
                        <input class="px-2 h-10 border border-black" type="email" name="email" required><br>
                    </div>
                    <div class="flex flex-col gep-y-2">
                        <label for="password">Password:</label>
                        <input class="px-2 h-10 border border-black" type="password" name="password" required><br>
                    </div>


                    <button class="bg-sky-500 text-black px-3 py-2 h-10" type="submit">Create</button>
                </form>
            </div>
        </div>
</x-app-layout>
