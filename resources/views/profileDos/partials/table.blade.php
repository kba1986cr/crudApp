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
        @foreach ($profiles as $profile)
            <tr>
                {{-- <td class="border px-4 py-2">{{ $profile->id }}</td> --}}
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
</table>