<form action="{{ $action }}" method="POST">
    @csrf
    @isset($method)
        @method($method)
    @endisset
    <div>
        <label for="message">Message</label>
        <input type="text" name="message" id="message" value="{{ old('message', $profileDos->message ?? '') }}" required>
    </div>
    <button type="submit">Save</button>
</form>
