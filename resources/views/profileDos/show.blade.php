<h1>Profile Details</h1>
<p>ID: {{ $profileDos->id }}</p>
<p>Message: {{ $profileDos->message }}</p>
<a href="{{ route('profileDos.index') }}">Back to List</a>

{{-- <div class="mt-4 flex space-x-2">
    <!-- Botón para Descargar PDF -->
    <a href="{{ route('profileDos.downloadPdf', $profileDos) }}"
        class="btn btn-primary bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm font-semibold focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
        Descargar CV en PDF
    </a>
</div> --}}
