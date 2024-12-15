<h1>Edit Profile</h1>
@include('profileDos.partials.form', [
    'action' => route('profileDos.update', $profileDos),
    'method' => 'PUT'
])
