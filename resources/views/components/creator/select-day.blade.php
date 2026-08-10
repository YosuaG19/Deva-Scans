@php
    $days = [
        [
            'name' => 'Monday',
            'value' => 'mon'
        ],
        [
            'name' => 'Tuesday',
            'value' => 'tues'
        ],
        [
            'name' => 'Wednesday',
            'value' => 'wed'
        ],
        [
            'name' => 'Thursday',
            'value' => 'thu'
        ],
        [
            'name' => 'Friday',
            'value' => 'fri'
        ],
        [
            'name' => 'Saturday',
            'value' => 'sat'
        ],
        [
            'name' => 'Sunday',
            'value' => 'sun'
        ],
        [
            'name' => 'Random',
            'value' => 'random'
        ],
    ];
@endphp

{{-- @dd($days) --}}

@if ($comic)
    @php
        $selected_day = $comic->upt_day;
    @endphp
@endif

{{-- @dd($selected_day) --}}

<input type="hidden" id="selected-day" name="day">

<div class="absolute w-full top-full left-0 mt-2 rounded bg-[#252525] z-50 hidden flex filter-day p-2">
    <span class="grid grid-cols-2 gap-1 overflow-y-auto max-h-[30vh] w-full text-xs rounded overflow-hidden">
        @if ($comic)
            @foreach ($days as $day)
                <button type="button" data-day="day" class="filter-button justify-start {{$selected_day == $day['value'] ? 'active' : ''}}" value="{{$day['value']}}">
                    {{ $day['name'] }}
                </button>    
            @endforeach
        @else
            @foreach ($days as $day)
                <button type="button" data-day="day" class="filter-button justify-start" value="{{$day['value']}}">
                    {{ $day['name'] }}
                </button>    
            @endforeach
        @endif
    </span>
</div>