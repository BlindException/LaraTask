<x-app-layout>
    <h2>
        {{ ("All Locations") }}
    </h2>
    <table>
        <thead>
            <th>
                {{ ("Location Name")}}
            </th>
            <th>
                {{ ("Outdoor/Indoor")}}
            </th>
        </thead>
        <tbody>
            @forelse($locations as $location)
            <td>
            {{ ($location->name) }}
            </td>
            <td>
                @php
                $inOut = '';
                if($location->is_outdoor==1)
                {
                    $inOut = "outdoor";
                }    else {
                        $inOut = "indoor";
                }
                @endphp
                {{ ($inOut) }}
            </td>
            @empty
            @endforelse
        </tbody>
    </table>
</x-app-layout>