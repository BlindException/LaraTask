<x-app-layout>
    <h2>
        {{ ("Add a new task") }}
    </h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @forelse ($errors->all() as $error)
                <li>{{ $error }}</li>
                @empty
            @endforelse
        </ul>
    </div>
    @endif
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
    <x-location-select></x-location-select>
    <label>Enter Text<input name="text"></label>
    <label>Enter Due Date
        <input name="due_date">
    </label>
    <button>Save task</button>
</form>
</x-app-layout>