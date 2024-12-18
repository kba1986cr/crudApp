{{-- <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($profiles as $profile)
            <tr>
                <td>{{ $profile->id }}</td>
                <td>{{ $profile->message }}</td>
                <td>
                    <a href="{{ route('profileDos.show', $profile) }}">View</a>
                    <a href="{{ route('profileDos.edit', $profile) }}">Edit</a>
                    <form action="{{ route('profileDos.destroy', $profile) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table> --}}

<table class="table-auto w-full mt-4">
    <thead>
        <tr>
            {{-- <th class="border px-4 py-2">ID</th> --}}
            <th class="border px-4 py-2">Message</th>
            <th class="border px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($profiles as $i)
            <tr>
                {{-- <td class="border px-4 py-2">{{ $profile->id }}</td> --}}
                <td class="border px-4 py-2">{{ $i->message }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('profileDos.show', $i) }}" class="text-blue-500">View</a>
                    <a href="{{ route('profileDos.edit', $i) }}" class="text-yellow-500 ml-2">Edit</a>
                    <form action="{{ route('profileDos.destroy', $i) }}" method="POST" class="inline">
                        <div class="mt-4 flex space-x-2">
                            <!-- Botón para Descargar PDF -->
                            <a href="{{ route('profileDos.downloadPdf', $i) }}"
                                class="btn btn-primary bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm font-semibold focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                                Descargar CV en PDF
                            </a>
                        </div>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 ml-2">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
