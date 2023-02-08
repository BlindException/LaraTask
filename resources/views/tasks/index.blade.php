<x-app-layout>
    <h2>
        {{ ("Tasks") }}
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
    <table>
        <thead>
            <tr>
            <th>
                {{ ("Completed") }}
            </th>
            <th>
                {{ ("Task Location") }}
            </th>
            <th>
                {{ ("Due Date") }}
            </th>
        </tr>
        </thead>
        <tbody>
                            @forelse($tasks as $task)
                            <tr>
                                <td>
                                    <form method="post" action="{{ route('tasks.update', $task) }}" id="{{ ("form".$task->id) }}">
                                        @csrf
                                        @method('patch')
                                        @if($task->is_complete==1)
<label><input type = "radio" value = "1" checked name = "is_complete" onchange="submitForm()" />{{ ($task->text." complete") }} </label>
<label><input type = "radio" value = "0" name= "is_complete" onchange="submitForm()" />{{ ($task->text." incomplete") }} </label>
@endif
@if($task->is_complete==0)
<label><input type = "radio" value = "1" name = "is_complete" onchange="submitForm()" />{{ ($task->text." complete") }} </label>
<label><input type = "radio" value = "0" checked name= "is_complete" onchange="submitForm()" />{{ ($task->text." incomplete") }} </label>

@endif
<button type="submit" id="{{ ("btn".$task->id) }}" hidden></button>
</form>            
</td>
        
        <script>            
                function submitForm()
            {
                $('#btn'+<?php echo($task->id); ?>).click();
            }
        </script>
            <td>
                @php
                $inOut = '';
                if($task->location->is_outdoor==1)
                {
                $inOut = "Outdoor";
                }
                if($task->location->is_outdoor==0)
                {
                $inOut ="Indoor";
                }
                @endphp
                {{ ($task->location->name."/".$inOut) }}
            </td>
            <td>
                @php
                $date = new datetime($task->due_date);
                $date = date_format($date, 'm-d-Y');
                @endphp
                {{ ($date) }}
            </td>
            <td>
                <a href="{{ route('tasks.show', $task) }}">{{ ("Details") }}</a>
                </td>
        </tr>
            @empty
            @endforelse
        </tbody>
    </table>
</x-app-layout>