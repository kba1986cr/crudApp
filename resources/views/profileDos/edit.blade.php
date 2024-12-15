{{-- <h1>Edit Profile</h1>
@include('profileDos.partials.form', [
    'action' => route('profileDos.update', $profileDos),
    'method' => 'PUT'
]) --}}

{{-- <h1>Edit Profile</h1>
@include('profileDos.partials.form', [
    'action' => route('profileDos.update', $profileDos->id), // Usamos el ID del modelo
    'method' => 'PUT',
    'profileDos' => $profileDos // Pasamos el modelo completo al formulario
]) --}}

<h1>Edit Profile</h1>
@include('profileDos.partials.form', [
    'action' => route('profileDos.update', $profileDos->id),
    'method' => 'PUT',
    'profileDos' => $profileDos
])
