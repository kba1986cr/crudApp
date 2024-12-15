<table>
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
</table>
