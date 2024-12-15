<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- Aquí renderizamos la vista del index --}}
                    @include('profileDos.index')
                    {{-- <h1>Profiles</h1>
                    <a href="{{ route('profileDos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Create New Profile
                    </a>
                    <table class="table-auto w-full mt-4">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">Message</th>
                                <th class="border px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profiles as $profile)
                                <tr>
                                    <td class="border px-4 py-2">{{ $profile->id }}</td>
                                    <td class="border px-4 py-2">{{ $profile->message }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('profileDos.show', $profile) }}" class="text-blue-500">View</a>
                                        <a href="{{ route('profileDos.edit', $profile) }}" class="text-yellow-500 ml-2">Edit</a>
                                        <form action="{{ route('profileDos.destroy', $profile) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 ml-2">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
