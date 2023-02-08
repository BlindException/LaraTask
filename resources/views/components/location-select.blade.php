<div>
    <label>Select Location:
        <select name="location_id" required>
            <option value = "">Select</option>
            @forelse($locations as $location)
            <option value = "{{ ($location->id) }}">
                {{ ($location->name) }}
            </option>
            @empty
            @endforelse
        </select>
    </label>
</div>