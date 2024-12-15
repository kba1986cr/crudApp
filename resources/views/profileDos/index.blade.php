<h1>Profiles</h1>
<a href="{{ route('profileDos.create') }}">Create New</a>
@include('profileDos.partials.table', ['profiles' => $profiles])
