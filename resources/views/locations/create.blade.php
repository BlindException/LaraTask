<x-app-layout>
    <h2>
        {{ ("Create New Task Location") }}
    </h2>
    <form method="post" action="{{ route('locations.store') }}">
        @csrf
    <label>
        <input type="text" name="name" required/>
    </label>
    <label><input type="radio" name="is_outdoor" value="1"required>Outdoor Location</label>
    <label><input type="radio" name="is_outdoor" value="0"required>Indoor Location</label>
    <button>Save new location</button>
</form>
</x-app-layout>