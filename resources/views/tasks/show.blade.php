<x-app-layout>
    <h2>
        {{ ("Task Details") }}
    </h2>
    <table>
        <tr>
            <th>
                {{ ("Text") }}
            </th>
            <td>
                {{ ($task->text) }}
            </td>
        </tr>
        <tr>
            <th>
                {{ ("Location") }}
            </th>
            <td>
                {{ ($task->location->name) }}
            </td>
        </tr>
        <tr>
            <th>
                {{ ("Due Date")}}                
            </th>
            <td>
                {{ ($task->due_date) }}
            </td>
        </tr>
        <tr>
            <th>
                {{ ("Complete") }}
            </th>
        </tr>
        <tr>
            <td>
                @if($task->is_complete==1)
                {{ ("Yes".$task->date_completed) }}
                @endif
                                @if($task->is_complete==0)
                                {{ ("No") }}
                @endif
                </td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('tasks.index') }}">{{ ("back...") }}</a>
            </td>
            <td>
                <form action="{{ route('tasks.destroy', $task) }}">
                @method('delete')
                <button type="submit">Delete</button>
            </form>
            </td>
        </tr>
    </table>
</x-app-layout>